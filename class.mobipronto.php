<?php
	class MobiProntoEmail{
		//
		/**
		 * @var $params string
		 * @var $wsdl string
		 * 
		 * 
		 * 
		 */
		protected $params	= array(); 
		protected $wsdl		= NULL; 
		protected $error	= NULL; 
		protected $client	= NULL;
		//
		protected $result	= NULL;
		//
		protected $options	= array(
				'soap_version'=>SOAP_1_2,
				'exceptions'=>true,
				'trace'=>1,
				'cache_wsdl'=>WSDL_CACHE_NONE
		);
		//
		//
		protected $parameters; //vai receber os parametros para execucao da chamada
		protected $paramsCall =  array('parameters_format' =>'TXT', 'parameters'=>'');//chama para execucao
		//
		protected $parametersDefault = 
				array(
					'VERSAO'=>'4.00',
					'CREDENCIAL'=>'',
					'TOKEN'=>''
				);
		
		private $callsArr = 
			array(
				'MPG_Send_Email'=>
					array(
						'VERSAO',
						'CREDENCIAL',
						'TOKEN',
						'PRINCIPAL_USER',
						'METHOD',
						'AUX_USER',
						'EMAIL_FROM',
						'NAME_FROM',
						'EMAIL_TO',
						'NAME_TO',
						'SUBJECT',
						'BODY_TYPE',
						'BODY'
					),
				'MPG_ID_Email_Events'=>
					array(
						'VERSAO',
						'CREDENCIAL',
						'TOKEN',
						'ID_EMAIL'
					),
			);
		//
		//retorno dos wsdl
		protected $rtWsdl = array();
		protected $arParams = array(); //recebe os parametersDefault() e os demais valores ordenados para concatenar com pipe |;
		//
		public $retorno;
		//
		//
		/**
		 * @var $params = precisa ser um array
		 */
		function __construct($wsdl, $credencial, $token, $params = NULL, $func = NULL, $versao = '4.00' ){
			//
			$this->wsdl = $wsdl;
			//
			$this->params = &$this->parametersDefault;
			$this->params['VERSAO'] = $versao;
			$this->params['CREDENCIAL'] = $credencial;
			$this->params['TOKEN'] = $token;
			//
			try{
				$this->client = new SoapClient( $this->wsdl, $this->options);
			}catch (Exception $e){
				$logText = $e->getMessage();
			}
			
			//caso $params seja informado.
			if(is_array($params)){
				$this->arMerge($params);
				if(!is_null($func)){
					if(!is_array($func)){
						if (in_array($func, $this->callsArr)){ //caso seja encontrado uma funcao
							$this->getCall($func, $this->callsArr[$func]);
						}else{
							$this->allCalls($this->callsArr);
						}
					}
				}
			}
			//
			
		}
		
		//
		/**
		 * funcao para enviar email
		 * como $params precisa ser definido
		 * $params = array(
			PRINCIPAL_USER(50)=>'',
			METHOD=>'',
			AUX_USER=>'',
			EMAIL_FROM=>'', 
			NAME_FROM=>'',
			EMAIL_TO=>'',
			NAME_TO=>'',
			SUBJECT=>'',
			BODY_TYPE=>'',
			BODY=>'',
		 * )
		 */
		function EnviarEmail($params=NULL, $call = 'MPG_Send_Email'){
			//
			if(is_array($params)){
				$this->arMerge($params);
			}
			//
			$this->getCall($call, $this->callsArr[$call]);
			$this->retornoEnvioEmail();
			//
		}
		
		//
		/**
		 * funcao de busca de email
		 */
		function EmailEvents($params, $call="MPG_ID_Email_Events"){
			//
			//
			if(is_array($params)){
				$this->arMerge($params);
			}
			$this->getCall($call, $this->callsArr[$call]);
			//
			//
		}
		//
		/**
		 * executa as chamadas de acordo com o solicitado
		 * $func pode ser de duas formas
		 * 1: $func = "MPG_Credits";
		 * 2: $func = array("MPG_Credtis")
		 *
		 * @param string/array $func
		 */
		public function exCalls($func){
			$arrCall = $this->permParansArr();
			//
			if(!is_array($func)){
				if(!is_null($func) && array_key_exists($func, $arrCall)){
					$this->getCall($func, $arrCall[$func]);
				}else{
					//executa todas as chamadas caso nao seja definida uma chamada específica
					$this->allCalls($arrCall);
					//
				}
			}else{
				foreach($func as $k=>$v){
					if(array_key_exists($v, $arrCall)){
						$this->getCall($v, $arrCall[$v]);
					}
				}
			}
		}
		//
		/**
		 * Junta os valores em array em $this->params
		 *
		 * @param unknown $aMg
		 */
		private function arMerge($aMg){
			$this->params = array_merge($this->params, $aMg);
		}
		//	
		private function getCall($call, $paramPerm){
			try{
				$this->result = $this->client->$call( $this->paramsPerm($this->params, $paramPerm) );
				$this->rtWsdl[$call] = $this->loadResult($call);
				$this->retorno = &$this->rtWsdl;
			}catch (Exception $e){
				$this->error  = $e->getMessage();
			}
		}
		
		/**
		 * executa todas as chamadas. Call precisar ser array
		 * @param unknown $call
		 */
		private function allCalls($call){
			if(is_array($call)){
				foreach ($call as $calling=>$param){
					if(is_array($param))
						$this->getCall($calling, $param);
				}
			}
		}
		
		//
		/**
		 * busca os campos que são permitidos na chamada especifica. Se não for definido, chama os campos válidos de todas as chamadas
		 *
		 * @param unknown $call 		= a chamada especifica
		 * @return string[]|string[][]	= retorno em array
		 */
		protected function permParansArr($call = NULL){
			if(!is_null($call) && array_key_exists($call, $this->callsArr)){
				return $this->callsArr[$call];
			}
			//caso não seja definido ou encontrado call, todas as chamadas serão executadas
			return $this->callsArr;
		}
		
		/**
		 * retorna apenas os campos permitidos para executar a funcao
		 *
		 * @param array $params = array de parametros
		 * @param array $perm = array de campos permitidos
		 * @param boolean $all = false padrao | se true, retorna todos os campos
		 *
		 */
		function paramsPerm($params, $perm, $all = false){//$perm campos permitidos
			$retParams = array();
			if(!$all){ // caso $all seja false, será feita uma verificação em $params e recolhe apenas os parametros permitidos
				if(is_array($perm)){ //se for array, continua
					foreach($perm as $k=>$v){//
						if(array_key_exists($v, $params)){
							switch ($v){
								case "Start_Date":
								case "End_Date":
									if(preg_match("/\//", $params[$v])){
										$params[$v] = preg_replace("/\//", '-', $params[$v]);
									}
								default:
									$retParams[$v]=&$params[$v];
							}
						}
					}
				}else{
					if(in_array($perm, $params)){
						$retParams = &$params[$perm];
					}
				}
			}else{
				$retParams = &$params;
			}
			//
			$this->concatenarParams($retParams);
			$this->paramsCall['parameters'] = $this->parameters;
			return $this->paramsCall; // retorno
			//
		}
		//
		/**
		 * Retorna o 4resultado da chamada.
		 * Para MPG_Query01, o retorno está como Objeto.
		 *
		 * @param unknown $call 	= chamada
		 * @param string $suxResult = sufixo do RetornoXML
		 */
		function loadResult($call, $suxResult = "Result"){
			$r = "{$call}{$suxResult}";
			try{
				$rt = $this->result->$r;
				if($call == "MPG_Query01"){
					return $rt->any;
				}
				return $rt;
			}catch (Exception $e){
				$this->error = $e->getMessage();
			}
		}
		//
		/**
		 * 
		 */
		function concatenarParams($params){
			//
			if(is_array($params)){
				if(trim($this->parameters)!="" || !is_null($this->parameters))
					$this->parameters = "";
				//
				foreach ($params as $k=>$v){
					$this->parameters .= addslashes(utf8_encode($v)) . "|";
				}
			}
			
			$this->parameters = substr($this->parameters, 0, -1);
			$this->parameters = $this->parameters;
			
			//
		}
		
		/**
		 * Quebra informacao do retorno
		 * @param unknown $retorno
		 * @param string $separador
		 */
		function retornoEnvioEmail($delimiter = '|'){
			//
			$this->rtWsdl['MPG_Send_Email']= explode($delimiter, $this->rtWsdl['MPG_Send_Email']);			
			//
		}
		
		function retornoEmailStatus($id = null){
			$this->params['ID_EMAIL'] = is_null($id)? $this->rtWsdl['MPG_Send_Email'][1] : $id;
			$this->EmailEvents($this->params);
		}
		
		//retorna todos eventos em um array
		function eventsArray(){
			$findArr = array("/\{(\s){3}\"events\":\s/","/\"/", "/\s:\s/");
			$replaceArr =  array("","","|");
			$st = preg_replace($findArr, $replaceArr, $this->rtWsdl['MPG_ID_Email_Events']);
			$st = substr($st, 2, -3);
			if(preg_match("/\},\{/", $st)){
				$ar = explode("},{", $st);
			}else{
				$ar = array($st);
			}
			//
			$arrFim = array();
			//
			for($i=0; $i<sizeof($ar);$i++){
				$arF[] = explode(",", $ar[$i]);
			}
			//
			for($i=0;$i<sizeof($arF);$i++){
				$arrFim[$i] = array();
				for($k=0;$k<sizeof($arF[$i]);$k++){
					$tmp = explode("|", $arF[$i][$k]);
					$arrFim[$i][$tmp[0]] = ($tmp[0]=="event_description")? utf8_decode($tmp[1]): $tmp[1];
					unset($tmp);
				}
			}
			//
			return $arrFim;
		}
		
	}
	
?>