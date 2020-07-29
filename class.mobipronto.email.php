<?php
function emailmobipronto($emailEnvio, $nomeEnvio, $ssunto, $mensagem, $email_remetente= Null, $nome_remetente = NULL){	

	if($email_remetente == ""){$email_from = "contato@januseducare.com.br"; }else{ $email_from = $email_remetente;}
	if($nome_remetente == ""){$nome_from = "JANUS EDUCARE";}else{$nome_from = $nome_remetente;}
		
	$wsdl = 'http://www.mpgateway-mail.com/ws/service.asmx?wsdl';
	$credencial = '987EA814E48F06EE9960D36EC63BC6E73EFC66BF';
	$token = 'dC127f';
	$aux_user = ''; // auxiliar user
	$paramsEnvioEmail = array(
			'PRINCIPAL_USER'	=>'',
			'METHOD' 			=>'WEBAPI',
			'AUX_USER' 			=>'',
			'EMAIL_FROM'		=>$email_from,
			'NAME_FROM' 		=>$nome_remetente,
			'EMAIL_TO' 			=>$emailEnvio,
			'NAME_TO'			=>$nomeEnvio,
			'SUBJECT'			=>$ssunto,
			'BODY_TYPE'			=>'HTML',
			'BODY'				=>$mensagem,
	);
	
	$mp = new MobiProntoEmail($wsdl, $credencial, $token);
	$mp->EnviarEmail($paramsEnvioEmail);
	$mp->retornoEmailStatus(); //recuperando 

	//retorno do envio email 
	echo "retorno: " . $mp->retorno['MPG_Send_Email'][0];
	
	//retorno do codigo do envio 
	echo "<br/><br/>codigo do envio: " . $mp->retorno['MPG_Send_Email'][1];
	
	//retorno json do eventos realizados no email
	echo "<br/><br/>RETORNO DOS EVENTOS DO EMAIL : " . $mp->retorno['MPG_ID_Email_Events'];
	
	//retorna os eventos do email em array. ideal para quem não vai trabalhar com JSON
	print_r($mp->eventsArray());
	/* fim retorno 01 */
	
	
	/* -------------------------------------------------------------------------------- */
	/* inicio recuperacao de status
	 * basta usar o string de id de email válido para definir o que você que retornar
	 -------------------------------------------------------------------------------- */
	$paramsStatusEmail = 'M000000000000000000000000000000012745731';
	$mp->retornoEmailStatus($paramsStatusEmail);
	
	//retorno do envio email 
	echo "<br/><br/>TESTE DE RECUPERAÇAO DE ID<br/><br/><br/>retorno: " . $paramsStatusEmail;
	
	//retorno do codigo do envio 
	echo "<br/><br/>codigo do envio: " . $mp->retorno['MPG_Send_Email'][1];
	
	//retorno json do eventos realizados no email
	echo "<br/><br/>RETORNO DOS EVENTOS DO EMAIL : " . $mp->retorno['MPG_ID_Email_Events'] . "<br/><br/>Retorno do JSON em Array dos eventos: <br/><br/>";
	
	//retorna os eventos do email em array. ideal para quem não vai trabalhar com JSON
	print_r($mp->eventsArray());
}
?>