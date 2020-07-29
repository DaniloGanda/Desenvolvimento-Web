<?php 
@session_start();

// criptografa
function encode5t($str){
	for($i=0; $i<5;$i++)  {
		$str=strrev(base64_encode($str)); //apply base64 first and then reverse the string
	}
	return $str;
}

// descriptografa
function decode5t($str){
	for($i=0; $i<5;$i++){
		$str=base64_decode(strrev($str)); //apply base64 first and then reverse the string}
	}
	return $str;
} 


// mover caracteres e acentos
function remove_accent($str){
$a = array('À','Á','Â','Ã','Ä','Å','Æ','Ç','È','É','Ê','Ë','Ì','Í','Î','Ï','Ð','Ñ','Ò','Ó','Ô','Õ','Ö','Ø','Ù','Ú','Û','Ü','Ý','ß','à','á','â','ã','ä','å','æ','ç','è','é','ê','ë','ì','í','î','ï','ñ','ò','ó','ô','õ','ö','ø','ù','ú','û','ü','ý','ÿ','Ā','ā','Ă','ă','Ą','ą','Ć','ć','Ĉ','ĉ','Ċ','ċ','Č','č','Ď','ď','Đ','đ','Ē','ē','Ĕ','ĕ','Ė','ė','Ę','ę','Ě','ě','Ĝ','ĝ','Ğ','ğ','Ġ','ġ','Ģ','ģ','Ĥ','ĥ','Ħ','ħ','Ĩ','ĩ','Ī','ī','Ĭ','ĭ','Į','į','İ','ı','Ĳ','ĳ','Ĵ','ĵ','Ķ','ķ','Ĺ','ĺ','Ļ','ļ','Ľ','ľ','Ŀ','ŀ','Ł','ł','Ń','ń','Ņ','ņ','Ň','ň','ŉ','Ō','ō','Ŏ','ŏ','Ő','ő','Œ','œ','Ŕ','ŕ','Ŗ','ŗ','Ř','ř','Ś','ś','Ŝ','ŝ','Ş','ş','Š','š','Ţ','ţ','Ť','ť','Ŧ','ŧ','Ũ','ũ','Ū','ū','Ŭ','ŭ','Ů','ů','Ű','ű','Ų','ų','Ŵ','ŵ','Ŷ','ŷ','Ÿ','Ź','ź','Ż','ż','Ž','ž','ſ','ƒ','Ơ','ơ','Ư','ư','Ǎ','ǎ','Ǐ','ǐ','Ǒ','ǒ','Ǔ','ǔ','Ǖ','ǖ','Ǘ','ǘ','Ǚ','ǚ','Ǜ','ǜ','Ǻ','ǻ','Ǽ','ǽ','Ǿ','ǿ');
$b = array('A','A','A','A','A','A','AE','C','E','E','E','E','I','I','I','I','D','N','O','O','O','O','O','O','U','U','U','U','Y','s','a','a','a','a','a','a','ae','c','e','e','e','e','i','i','i','i','n','o','o','o','o','o','o','u','u','u','u','y','y','A','a','A','a','A','a','C','c','C','c','C','c','C','c','D','d','D','d','E','e','E','e','E','e','E','e','E','e','G','g','G','g','G','g','G','g','H','h','H','h','I','i','I','i','I','i','I','i','I','i','IJ','ij','J','j','K','k','L','l','L','l','L','l','L','l','l','l','N','n','N','n','N','n','n','O','o','O','o','O','o','OE','oe','R','r','R','r','R','r','S','s','S','s','S','s','S','s','T','t','T','t','T','t','U','u','U','u','U','u','U','u','U','u','U','u','W','w','Y','y','Y','Z','z','Z','z','Z','z','s','f','O','o','U','u','A','a','I','i','O','o','U','u','U','u','U','u','U','u','U','u','A','a','AE','ae','O','o');
return str_replace($a, $b, $str);
}
function post_slug($str)
{
return strtolower(preg_replace(array('/[^a-zA-Z0-9 -]/', '/[ -]+/', '/^-|-$/'), array('', '-', ''), remove_accent($str)));
}
//echo remove_accent(post_slug("Antóniô lírá")); //-- resultado Antonio-lira


//Converter NOMES proprios para mauisculo
function tratar_nome ($nome) {
    $nome = strtolower($nome); // Converter o nome todo para minúsculo
    $nome = explode(" ", $nome); // Separa o nome por espaços
    for ($i=0; $i < count($nome); $i++) {

        // Tratar cada palavra do nome
        if ($nome[$i] == "de" or $nome[$i] == "da" or $nome[$i] == "e" or $nome[$i] == "dos" or $nome[$i] == "do") {
            $saida .= $nome[$i].' '; // Se a palavra estiver dentro das complementares mostrar toda em minúsculo
        }else {
            $saida .= ucfirst($nome[$i]).' '; // Se for um nome, mostrar a primeira letra maiúscula
        }

    }
    return substr($saida,0,-1);
}

@$protocolo    = (strpos(strtolower($_SERVER['SERVER_PROTOCOL']),'https') === false) ? 'http' : 'https';
@$host         = $_SERVER['HTTP_HOST'];
@$script       = $_SERVER['SCRIPT_NAME'];
@$parametros   = $_SERVER['QUERY_STRING'];
@$UrlAtual     = $protocolo . '://' . $host . $script . '?' . $parametros;

function urlGera($url){
	$url = str_replace(':','[dp]',$url);
	$url = str_replace('/','[bn]',$url);
	$url = str_replace('&','[ec]',$url);
	return $url;
}
function urlConverte($url){
	$url = str_replace('[dp]',':',$url);
	$url = str_replace('[bn]','/',$url);
	$url = str_replace('[ec]','&',$url);
	return $url;
}
// identificar navegador
  $useragent = $_SERVER['HTTP_USER_AGENT'];
  if (preg_match('|MSIE ([0-9].[0-9]{1,2})|',$useragent,$matched)) {
    $browser_version=$matched[1];
    $browser = 'IE';
  } elseif (preg_match( '|Opera/([0-9].[0-9]{1,2})|',$useragent,$matched)) {
    $browser_version=$matched[1];
    $browser = 'Opera';
  } elseif(preg_match('|Firefox/([0-9\.]+)|',$useragent,$matched)) {
    $browser_version=$matched[1];
    $browser = 'Firefox';
  } elseif(preg_match('|Chrome/([0-9\.]+)|',$useragent,$matched)) {
    $browser_version=$matched[1];
    $browser = 'Chrome';
  } elseif(preg_match('|Safari/([0-9\.]+)|',$useragent,$matched)) {

    $browser_version=$matched[1];
    $browser = 'Safari';
  } else {
    // browser not recognized!
    $browser_version = 0;
    $browser= 'other';
  }


function paradiamesano($data,$parador){
	if($data){//de 0000-00-00 para 00/00/00/
		$retorno = substr($data,8,2).$parador.substr($data,5,2).$parador.substr($data,0,4);
	}else{
		$retorno = '';
	}
	return $retorno;
}

function sequenciaZeros($numero){
	if(strlen($numero)==1){
		$numero = '0000'.$numero;
	}
	else if(strlen($numero)==2){
		$numero = '000'.$numero;
	}
	else if(strlen($numero)==3){
		$numero = '00'.$numero;
	}
	else if(strlen($numero)==4){
		$numero = '0'.$numero;
	}
	return $numero;
}


function calcula_idade($data_nascimento, $data_calcula){
$data_nascimento = strtotime($data_nascimento." 00:00:00");
$data_calcula = strtotime($data_calcula." 00:00:00");
$idade = floor(abs($data_calcula-$data_nascimento)/60/60/24/365);
return($idade);
}

function caracteresEntities($texto){
	$texto = str_replace('“','&quot;',$texto);
	$texto = str_replace('”','&quot;',$texto);
	$texto = str_replace('á','&aacute;',$texto);
	$texto = str_replace('Á','&Aacute;',$texto);
	$texto = str_replace('ã','&atilde;',$texto);
	$texto = str_replace('Ã','&Atilde;',$texto);
	$texto = str_replace('â','&acirc;',$texto);
	$texto = str_replace('Â','&Acirc;',$texto);
	$texto = str_replace('à','&agrave;',$texto);
	$texto = str_replace('À','&Agrave;',$texto);
	$texto = str_replace('é','&eacute;',$texto);
	$texto = str_replace('É','&Eacute;',$texto);
	$texto = str_replace('ê','&ecirc;',$texto);
	$texto = str_replace('Ê','&Ecirc;',$texto);
	$texto = str_replace('í','&iacute;',$texto);
	$texto = str_replace('Í','&Iacute;',$texto);
	$texto = str_replace('ó','&oacute;',$texto);
	$texto = str_replace('Ó','&Oacute;',$texto);
	$texto = str_replace('õ','&otilde;',$texto);
	$texto = str_replace('Õ','&Otilde;',$texto);
	$texto = str_replace('ô','&ocirc;',$texto);
	$texto = str_replace('Ô','&Ocirc;',$texto);
	$texto = str_replace('ú','&uacute;',$texto);
	$texto = str_replace('Ú','&Uacute;',$texto);
	$texto = str_replace('Û','&Ucirc;',$texto);
	$texto = str_replace('û','&ucirc;',$texto);
	$texto = str_replace('Ü','&Uuml;',$texto);
	$texto = str_replace('ü','&uuml;',$texto);
	$texto = str_replace('Ý','&Yacute;',$texto);
	$texto = str_replace('ý','&yacute;',$texto);
	$texto = str_replace('ÿ','&yuml;',$texto);
	$texto = str_replace('ç','&ccedil;',$texto);
	$texto = str_replace('Ç','&Ccedil;',$texto);
	$texto = str_replace('ñ','&ntilde;',$texto);
	$texto = str_replace('Ñ','&Ntilde;',$texto);
	$texto = str_replace('º','&ordm;',$texto);
	$texto = str_replace('ª','&ordf;',$texto);
	$texto = str_replace('´','&cute;',$texto);
	$texto = str_replace('´','&cute;',$texto);
	$texto = str_replace('ˆ','&circ;',$texto);
	$texto = str_replace('~','&tilde;',$texto);
	$texto = str_replace('©','&copy;',$texto);
	$texto = str_replace('®','&reg',$texto);
	$texto = str_replace('	',' ',$texto);
	//$texto = str_replace('-','&minus;',$texto);
	
	return $texto;
}
function caracteresEntitiesInverso($texto){
	$texto = str_replace('&aacute;','á',$texto);
	$texto = str_replace('&Aacute;','Á',$texto);
	$texto = str_replace('&atilde;','ã',$texto);
	$texto = str_replace('&Atilde;','Ã',$texto);
	$texto = str_replace('&acirc;','â',$texto);
	$texto = str_replace('&Acirc;','Â',$texto);
	$texto = str_replace('&agrave;','à',$texto);
	$texto = str_replace('&Agrave;','À',$texto);
	$texto = str_replace('&eacute;','é',$texto);
	$texto = str_replace('&Eacute;','É',$texto);
	$texto = str_replace('&ecirc;','ê',$texto);
	$texto = str_replace('&Ecirc;','Ê',$texto);
	$texto = str_replace('&iacute;','í',$texto);
	$texto = str_replace('&Iacute;','Í',$texto);
	$texto = str_replace('&oacute;','ó',$texto);
	$texto = str_replace('&Oacute;','Ó',$texto);
	$texto = str_replace('&otilde;','õ',$texto);
	$texto = str_replace('&Otilde;','Õ',$texto);
	$texto = str_replace('&ocirc;','ô',$texto);
	$texto = str_replace('&Ocirc;','Ô',$texto);
	$texto = str_replace('&uacute;','ú',$texto);
	$texto = str_replace('&Uacute;','Ú',$texto);
	$texto = str_replace('&ccedil;','ç',$texto);
	$texto = str_replace('&Ccedil;','Ç',$texto);
	$texto = str_replace('&Ucirc;','Û',$texto);
	$texto = str_replace('&ucirc;','û',$texto);
	$texto = str_replace('&Uuml;','Ü',$texto);
	$texto = str_replace('&uuml;','ü',$texto);
	$texto = str_replace('&Yacute;','Ý',$texto);
	$texto = str_replace('&yacute;','ý',$texto);
	$texto = str_replace('&yuml;','ÿ',$texto);
	$texto = str_replace('&ntilde;','ñ',$texto);
	$texto = str_replace('&Ntilde;','Ñ',$texto);
	$texto = str_replace('&ordm;','º',$texto);
	$texto = str_replace('&ordf;','ª',$texto);
	$texto = str_replace('&cute;','´',$texto);
	
	return $texto;
}
function caracteresEntitiesPorNda($texto){
	$texto = str_replace('&aacute;','a',$texto);
	$texto = str_replace('&Aacute;','A',$texto);
	$texto = str_replace('&atilde;','a',$texto);
	$texto = str_replace('&Atilde;','A',$texto);
	$texto = str_replace('&acirc;','a',$texto);
	$texto = str_replace('&Acirc;','A',$texto);
	$texto = str_replace('&agrave;','a',$texto);
	$texto = str_replace('&Agrave;','A',$texto);
	$texto = str_replace('&eacute;','e',$texto);
	$texto = str_replace('&Eacute;','E',$texto);
	$texto = str_replace('&ecirc;','e',$texto);
	$texto = str_replace('&Ecirc;','E',$texto);
	$texto = str_replace('&iacute;','i',$texto);
	$texto = str_replace('&Iacute;','I',$texto);
	$texto = str_replace('&oacute;','o',$texto);
	$texto = str_replace('&Oacute;','O',$texto);
	$texto = str_replace('&otilde;','o',$texto);
	$texto = str_replace('&Otilde;','O',$texto);
	$texto = str_replace('&ocirc;','o',$texto);
	$texto = str_replace('&Ocirc;','O',$texto);
	$texto = str_replace('&uacute;','u',$texto);
	$texto = str_replace('&Uacute;','U',$texto);
	$texto = str_replace('&ccedil;','c',$texto);
	$texto = str_replace('&Ccedil;','C',$texto);
	$texto = str_replace('&Ucirc;','U',$texto);
	$texto = str_replace('&ucirc;','u',$texto);
	$texto = str_replace('&Uuml;','U',$texto);
	$texto = str_replace('&uuml;','u',$texto);
	$texto = str_replace('&Yacute;','Y',$texto);
	$texto = str_replace('&yacute;','y',$texto);
	$texto = str_replace('&yuml;','y',$texto);
	$texto = str_replace('&ntilde;','n',$texto);
	$texto = str_replace('&Ntilde;','N',$texto);
	$texto = str_replace('&cute;','´',$texto);
	
	return $texto;
}

function replaceCurriculo($texto){
	$texto = str_replace('class="tooltip"','class="tooltip2"',$texto);
	$texto = str_replace('</sup>','',$texto);
	$texto = str_replace('<sup>','',$texto);
	$texto = str_replace('style ="display: none" class="ajaxJCR"','',$texto);
	$texto = str_replace('/buscatextual/','',$texto);
	$texto = str_replace('" ></div','"></div>',$texto);
	$divAb = substr_count ( $texto, '<div' );
	$divFe = substr_count ( $texto, '</div' );
	$texto = str_replace('&cute;',"'",$texto);
	$texto = str_replace('&circ;','ˆ',$texto);
	$texto = str_replace('&tilde;','~',$texto);
	if($divAb==0 and $divFe==2){
		$texto = str_replace('</div> </div> <br class="clear">','<br class="clear">',$texto);
	}
	if($divAb==0 and $divFe==3){
		$texto = str_replace('</div> </div> <br class="clear"> </div>','<br class="clear">',$texto);
	}
	if($divAb==0 and $divFe==4){
		$texto = str_replace('</div> </div> <br class="clear"> </div><br class="clear" /></div>','<br class="clear">',$texto);
	}
	if($divAb==1 and $divFe==3){
		$texto = str_replace('</div> </div> <br class="clear"> <a','<br class="clear"> <a',$texto);
	}
	if($divAb==1 and $divFe==5){
		$texto = str_replace('</div> </div> <br class="clear"> </div> </div>','<br class="clear"> ',$texto);
	}
	if($divAb==6 and $divFe==7){
		$texto = str_replace('</div></div></div><br class="clear"></div></div>','</div></div><br class="clear"></div></div> ',$texto);
	}
	if($divAb==5 and $divFe==4){
		$texto = str_replace('</div></div><br class="clear"><div class="cita-artigos">','</div></div><br class="clear">',$texto);
		$texto = str_replace('<br class="clear" /><div class="inst_back">','<br class="clear" />',$texto);
	}
	if($divAb==4 and $divFe==6){
		$texto = str_replace('<br class="clear"></div><br class="clear" /></div><br class="clear" />','<br class="clear">',$texto);
		$texto = str_replace('</div></div></div><br class="clear" /></div>','</div><br class="clear" /></div>',$texto);
	}
	if($divAb==7 and $divFe==8){
		$texto = str_replace('</div></div></div><br class="clear"></div></div><div class="cita-artigos">','</div></div></div><br class="clear">',$texto);
	}
	if($divAb==4 and $divFe==5){
		$texto = str_replace('</div></div><br class="clear"></div>','</div></div><br class="clear">',$texto);
	}
	if($divAb==5 and $divFe==6){
		$texto = str_replace('</div></div></div><br class="clear" /></div>','</div></div><br class="clear" /></div>',$texto);
	}
	if($divAb==1 and $divFe==0){
		$texto = str_replace('<div class="layout-cell layout-cell-12 data-cell"><a name=','<a name=',$texto);
	}
	if($divAb==8 and $divFe==10){
		$texto = str_replace('</div><br class="clear" /></div><br class="clear" />','<br class="clear" />',$texto);
	}
	
	
	$texto = str_replace('</div>></div>','</div></div>',$texto);
	$texto = str_replace('ico_doi.gif','http://www.januseducare.com.br/_curriculo/ico_doi2.gif',$texto);
	$texto = str_replace('images/curriculo/jcr.gif','http://www.januseducare.com.br/_curriculo/images/curriculo/jcr2.gif',$texto);
	$texto = str_replace('</div>><br class="clear">','</div><br class="clear">',$texto);
	$texto = str_replace('http://buscatextual.cnpq.brimages','http://buscatextual.cnpq.br/buscatextual/images',$texto);
	$texto = utf8_decode($texto);
	
	return $texto;//.'('.$divAb.' / '.$divFe.')';
}


	
function valorPorExtenso( $valor = 0, $bolExibirMoeda = true, $bolPalavraFeminina = false )
    {
        $valor = removerFormatacaoNumero( $valor );
        $singular = null;
        $plural = null;
        if ( $bolExibirMoeda )
        {
            $singular = array("centavo", "real", "mil", "milhão", "bilhão", "trilhão", "quatrilhão");
            $plural = array("centavos", "reais", "mil", "milhões", "bilhões", "trilhões","quatrilhões");
        }
        else
        {
            $singular = array("", "", "mil", "milhão", "bilhão", "trilhão", "quatrilhão");
            $plural = array("", "", "mil", "milhões", "bilhões", "trilhões","quatrilhões");
        }
        $c = array("", "cem", "duzentos", "trezentos", "quatrocentos","quinhentos", "seiscentos", "setecentos", "oitocentos", "novecentos");
        $d = array("", "dez", "vinte", "trinta", "quarenta", "cinquenta","sessenta", "setenta", "oitenta", "noventa");
        $d10 = array("dez", "onze", "doze", "treze", "quatorze", "quinze","dezesseis", "dezesete", "dezoito", "dezenove");
        $u = array("", "um", "dois", "três", "quatro", "cinco", "seis","sete", "oito", "nove");
        if ( $bolPalavraFeminina )
        {
            if ($valor == 1)
                $u = array("", "uma", "duas", "três", "quatro", "cinco", "seis","sete", "oito", "nove");
            else
                $u = array("", "um", "duas", "três", "quatro", "cinco", "seis","sete", "oito", "nove");
            $c = array("", "cem", "duzentas", "trezentas", "quatrocentas","quinhentas", "seiscentas", "setecentas", "oitocentas", "novecentas");
        }
        $z = 0;
        $valor = number_format( $valor, 2, ".", "." );
        $inteiro = explode( ".", $valor );
        for ( $i = 0; $i < count( $inteiro ); $i++ )
            for ( $ii = mb_strlen( $inteiro[$i] ); $ii < 3; $ii++ )
                $inteiro[$i] = "0" . $inteiro[$i];
        // $fim identifica onde que deve se dar junção de centenas por "e" ou por "," ;)
        $rt = null;
        $fim = count( $inteiro ) - ($inteiro[count( $inteiro ) - 1] > 0 ? 1 : 2);
        for ( $i = 0; $i < count( $inteiro ); $i++ )
        {
            $valor = $inteiro[$i];
            $rc = (($valor > 100) && ($valor < 200)) ? "cento" : $c[$valor[0]];
            $rd = ($valor[1] < 2) ? "" : $d[$valor[1]];
            $ru = ($valor > 0) ? (($valor[1] == 1) ? $d10[$valor[2]] : $u[$valor[2]]) : "";
            $r = $rc . (($rc && ($rd || $ru)) ? " e " : "") . $rd . (($rd && $ru) ? " e " : "") . $ru;
            $t = count( $inteiro ) - 1 - $i;
            $r .= $r ? " " . ($valor > 1 ? $plural[$t] : $singular[$t]) : "";
            if ( $valor == "000")
                $z++;
            elseif ( $z > 0 )
                $z--;
            if ( ($t == 1) && ($z > 0) && ($inteiro[0] > 0) )
                $r .= ( ($z > 1) ? " de " : "") . $plural[$t];
            if ( $r )
                $rt = $rt . ((($i > 0) && ($i <= $fim) && ($inteiro[0] > 0) && ($z < 1)) ? ( ($i < $fim) ? ", " : " e ") : " ") . $r;
        }
        $rt = mb_substr( $rt, 1 );
        return($rt ? trim( $rt ) : "zero");
 
    }
	//Vai exibir na tela "um milhão, quatrocentos e oitenta e sete mil, duzentos e cinquenta e sete e cinquenta e cinco"
	//echo valorPorExtenso("R$ 1.487.257,55", false, false);
	 
	//Vai exibir na tela "um milhão, quatrocentos e oitenta e sete mil, duzentos e cinquenta e sete reais e cinquenta e cinco centavos"
	//echo valorPorExtenso("R$ 1.487.257,55", true, false);
	 
	//Vai exibir na tela "duas mil e setecentas e oitenta e sete"
	//echo valorPorExtenso("2787", false, true);
	

// mes anterior
function ultimoDiaMesAnterior($newData1){
      list($newDia1, $newMes1, $newAno1) = explode("/", $newData1);
      return @date("d/m/Y", mktime(0, 0, 0, $newMes1 - 0, 0, $newAno1));
}

//$mesAntes = ultimoDiaMesAnterior("01/".substr($_GET['data'],0,2)."/".substr($_GET['data'],3,4)); 
 
// mes atual
function ultimoDiaMesAtual($newData1){
      list($newDia1, $newMes1, $newAno1) = explode("/", $newData1);
      return @date("d/m/Y", mktime(0, 0, 0, $newMes1 + 1, 0, $newAno1));
}
//$ultimoDiaMesAtual = ultimoDiaMesAtual("01/".substr($_GET['data'],0,2)."/".substr($_GET['data'],3,4));

// mes proximo
function ultimoDiaMesProximo($newData1){
      list($newDia1, $newMes1, $newAno1) = explode("/", $newData1);
      return @date("d/m/Y", mktime(0, 0, 0, $newMes1 + 2, 0, $newAno1));
}
//$mesproximo = ultimoDiaMesProximo("01/".substr($_GET['data'],0,2)."/".substr($_GET['data'],3,4));

// que dia da semana começou o dia 1o
function getDiaSemana($data) {
    list($ano, $mes, $dia) = explode("-", $data);
    $diasemana = date("w", mktime(0, 0, 0, $mes, $dia, $ano)); 
    switch ($diasemana) {
        // domingo
        case 0: $diasemana = "0";
            break;
        // Segunda
        case 1: $diasemana = "1";
            break;
        // Terça
        case 2: $diasemana = "2";
            break;
        // Quarta
        case 3: $diasemana = "3";
            break;
        // Quinta
        case 4: $diasemana = "4";
            break;
        // Sexta
        case 5: $diasemana = "5";
            break;
        // Sábado
        case 6: $diasemana = "6";
            break;
    }
    return $diasemana;
}


function removerFormatacaoNumero( $strNumero )
    {
        $strNumero = trim( str_replace( "R$", null, $strNumero ) );
        $vetVirgula = explode( ",", $strNumero );
        if ( count( $vetVirgula ) == 1 )
        {
            $acentos = array(".");
            $resultado = str_replace( $acentos, "", $strNumero );
            return $resultado;
        }
        else if ( count( $vetVirgula ) != 2 )
        {
            return $strNumero;
        }
        $strNumero = $vetVirgula[0];
        $strDecimal = mb_substr( $vetVirgula[1], 0, 2 );
        $acentos = array(".");
        $resultado = str_replace( $acentos, "", $strNumero );
        $resultado = $resultado . "." . $strDecimal;
        return $resultado;
    }
	

// que dia da semana começou o dia 1
//$diaInicioSemana = getDiaSemana(substr($_GET['data'],3,4)."-".substr($_GET['data'],0,2)."-1");


if($dataManual){
	$mesMostrar = substr($dataManual,3,2);
}else{
	$mesMostrar = date('m');
}
if($mesMostrar=="01"){
	$mesEscolhido = "Janeiro";
}
if($mesMostrar=="02"){
	$mesEscolhido = "Fevereiro";
}
if($mesMostrar=="03"){
	$mesEscolhido = "Mar&ccedil;o";
}
if($mesMostrar=="04"){
	$mesEscolhido = "Abril";
}
if($mesMostrar=="05"){
	$mesEscolhido = "Maio";
}
if($mesMostrar=="06"){
	$mesEscolhido = "Junho";
}
if($mesMostrar=="07"){
	$mesEscolhido = "Julho";
}
if($mesMostrar=="08"){
	$mesEscolhido = "Agosto";
}
if($mesMostrar=="09"){
	$mesEscolhido = "Setembro";
}
if($mesMostrar=="10"){
	$mesEscolhido = "Outubro";
}
if($mesMostrar=="11"){
	$mesEscolhido = "Novembro";
}
if($mesMostrar=="12"){
	$mesEscolhido = "Dezembro";
}
		
		
function mesPorExtenso($mesData){//00/00/0000
	$mes = $mesData;
	if($mes=="01"){
	$mes = "Janeiro";
	}
	if($mes=="02"){
	$mes = "Fevereiro";
	}
	if($mes=="03"){
	$mes = "Março";
	}
	if($mes=="04"){
	$mes = "Abril";
	}
	if($mes=="05"){
	$mes = "Maio";
	}
	if($mes=="06"){
	$mes = "Junho";
	}
	if($mes=="07"){
	$mes = "Julho";
	}
	if($mes=="08"){
	$mes = "Agosto";
	}
	if($mes=="09"){
	$mes = "Setembro";
	}
	if($mes=="10"){
	$mes = "Outubro";
	}
	if($mes=="11"){
	$mes = "Novembro";
	}
	if($mes=="12"){
	$mes = "Dezembro";
	}
}


function sequenciaZerosDozeDig($numero){
	if(strlen($numero)==1){
		$numero = '00000000000'.$numero;
	}
	else if(strlen($numero)==2){
		$numero = '0000000000'.$numero;
	}
	else if(strlen($numero)==3){
		$numero = '000000000'.$numero;
	}
	else if(strlen($numero)==4){
		$numero = '00000000'.$numero;
	}
	else if(strlen($numero)==5){
		$numero = '0000000'.$numero;
	}
	else if(strlen($numero)==6){
		$numero = '000000'.$numero;
	}
	else if(strlen($numero)==7){
		$numero = '00000'.$numero;
	}
	else if(strlen($numero)==8){
		$numero = '0000'.$numero;
	}
	else if(strlen($numero)==9){
		$numero = '000'.$numero;
	}
	else if(strlen($numero)==10){
		$numero = '00'.$numero;
	}
	else if(strlen($numero)==11){
		$numero = '0'.$numero;
	}
	else if(strlen($numero)>12){
		$numero = substr($numero,-12,12);
	}
	return $numero;
}

	
function retirarInforCalcQualis($calculo){
	if($calculo){
		$calculo = str_replace('(A1*','',$calculo);
		$calculo = str_replace('(A2*','',$calculo);
		$calculo = str_replace('(B1*','',$calculo);
		$calculo = str_replace('(B2*','',$calculo);
		$calculo = str_replace('(B3*','',$calculo);
		$calculo = str_replace('(B4*','',$calculo);
		$calculo = str_replace('(B5*','',$calculo);
		$calculo = str_replace('(C*','',$calculo);
		$calculo = str_replace('(NC*','',$calculo);
		$calculo = str_replace('(ORG*','',$calculo);
		$calculo = str_replace('(TI*','',$calculo);
		$calculo = str_replace('(CAP*','',$calculo);
		$calculo = str_replace('(SOMAPT >=','',$calculo);
		$calculo = str_replace('(SOMASP >=','',$calculo);
		$calculo = str_replace(')','',$calculo);
		$calculo = str_replace('(','',$calculo);
		$calculo = str_replace(' ','',$calculo);
	}
	return $calculo;
}

function caracteresParaXml($texto){
	$barraInverstida = "\\";
	$texto = str_replace('"','{aspdupla}',$texto);
	$texto = str_replace("'",'{aspsimples}',$texto);
	$texto = str_replace('/','{barra}',$texto);
	$texto = str_replace(substr($barraInverstida,0,1),'{barraInvert}',$texto);
	$texto = str_replace('<','{sinalmenor}',$texto);
	$texto = str_replace('>','{sinalmaior}',$texto);
	$texto = str_replace('=','{sinaligual}',$texto);
	$texto = str_replace('&','{ecomercial}',$texto);
	$texto = str_replace(';','{pontoevirgula}',$texto);
	
	return $texto;
}

function caracteresXmlParaHtml($texto){
	$barraInverstida = "\\";
	$texto = str_replace('{aspdupla}','"',$texto);
	$texto = str_replace('{aspsimples}',"'",$texto);
	$texto = str_replace('{barra}','/',$texto);
	$texto = str_replace('{barraInvert}',substr($barraInverstida,0,1),$texto);
	$texto = str_replace('{sinalmenor}','<',$texto);
	$texto = str_replace('{sinalmaior}','>',$texto);
	$texto = str_replace('{sinaligual}','=',$texto);
	$texto = str_replace('{ecomercial}','&',$texto);
	$texto = str_replace('{pontoevirgula}',';',$texto);
	
	return $texto;
}

//usuário logado
$sqlUserLogado   = "SELECT * FROM  `crm_usuario` WHERE id='".@$_SESSION['user']."'";
$rsUserLogado    = mysql_query($sqlUserLogado)or die(mysql_error());
$linhaUserLogado = mysql_fetch_array($rsUserLogado);


//useuário permissao
function permissaoAcesso($idUser,$perfil,$pagina){
	if($perfil == 1){
		$resultado = 'permitido';
	}else{
		$sqlPermissao   = "SELECT * FROM `crm_permissoes` WHERE id_usuario='".@$idUser."' AND pagina_permitida='".$pagina."'";
		$rsPermissao    = mysql_query($sqlPermissao)or die(mysql_error());
		//$linhaPermissao = mysql_fetch_array($rsPermissao);
		if(mysql_num_rows($rsPermissao)==0){
			$resultado = 'negado';
		}else{
			$resultado = 'permitido';
		}
	}
	return $resultado;
}

function extesao($nomeArquivo){
	return strtolower(end(explode(".",$nomeArquivo)));
}

//função para extrar arquivo .zip
function extractZipFile($origem,$destino){ 
	$zipFile = new ZipArchive; 
	$openFile = $zipFile->open($origem); 
	if ($openFile === TRUE) { 
		$zipFile->extractTo($destino); 
		$zipFile->close(); 
	echo 'Arquivos extra&iacute;dos com sucesso.'; 
	} else { 
		echo 'Extração dos arquivos falhou.'; 
	}
}


// Função de porcentagem: N é X% de N
function porcentagem_nx ( $parcial, $total ) {
    return ( $parcial * 100 ) / $total;
}

//porcentagem_nx ( $parcial, $total )
?>