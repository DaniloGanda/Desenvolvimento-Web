<?php 
	include 'topo.php';
	require_once 'dao/conexao/conexao.php';
	//require_once 'dao/geralDAO.php';
	//$geraldao = new GeralDAO()
	
	if(@$_POST['button']=="Enviar"){
		
		$mensagem = utf8_decode('
			<table width="300" border="0" cellpadding="0" cellspacing="0" class="titulotab" style="font-family: "Trebuchet", Arial, Tahoma, sans-serif;">
			  <tr>
				<td class="dt1">Nome:</td>
				<td class="dt2">'.$_POST['nome'].'</td>
			  </tr>
			  <tr>
				<td class="dt1">Email:</td>
				<td class="dt2">'.$_POST['email'].'</td>
			  </tr>
			  <tr>
				<td class="dt1">Assunto:</td>
				<td class="dt2">'.$_POST['assunto'].'</td>
			  </tr>
			  <tr>
				<td class="dt1" colspan="2">Mensagem:</td>
			  </tr>
			  <tr>
				<td class="dt2" colspan="2"><pre style="font-family: "Trebuchet", Arial, Tahoma, sans-serif;">'.$_POST['mensagem'].'</pre></td>
			  </tr>
			</table>
		');
		
		require("./phpmailer/src/PHPMailer.php");
		require("./phpmailer/src/SMTP.php");
		$mail = new PHPMailer\PHPMailer\PHPMailer();
		$mail->IsSMTP();
		$mail->SMTPDebug = 1;
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = 'ssl';
		$mail->Host = "mail.januseducare.com.br";
		$mail->Port = 465;
		$mail->IsHTML(true);
		$mail->Username = "contato@januseducare.com.br";
		$mail->Password = "marques123#*";
		$mail->SetFrom("contato@januseducare.com.br");
		$mail->Subject = "Contato Enviado do site Janus Educare";
		$mail->Body = $mensagem;
		$mail->AddAddress("contato@januseducare.com.br");
		$mail->Send();
		
		echo '<script>alert("Mensagem enviada com sucesso!");</script>';
		echo '<script>window.top.location.href="fale-conosco.php?a=faleconosco"</script>';
		
		exit();
	}
?>

<div class="contact-page-wrap">
        <div class="container">
            <div class="row alinha">
                <div class="col-12 col-lg-5">
                    <div class="entry-content">
						<div class="welcome-content">
						   <header class="entry-header">
								<h4 class="entry-title cortitulo">Contate-nos</h4>
							</header><!-- .entry-header -->
						</div>
                        <p>Se interessou pelos nossos serviços? Surgiu alguma dúvida? Não deixe de entrar em contato! Siga-nos em nossas redes sociais.</p>

                        <ul class="contact-social d-flex flex-wrap align-items-center">
                            <!--<li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>-->
                            <li><a href="https://www.facebook.com/Janus-Educare-147200698799105/"><i class="fa fa-facebook"></i></a></li>
                            <!--<li><a href="#"><i class="fa fa-twitter"></i></a></li>-->
                            <!--<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>-->
							<li><a href="https://www.instagram.com/januseducare/"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/januseducare/"><i class="fa fa-linkedin"></i></a></li>
                        </ul>

                        <ul class="contact-info p-0">
                            <li><i class="fa fa-phone"></i><span> (61) 99308-1255 / (61) 3637-4771 </span></li>
                            <li><i class="fa fa-envelope"></i><span>contato@januseducare.com.br</span></li>
                           <!--<li><i class="fa fa-map-marker"></i><span>Main Str. no 45-46, b3, 56832, Los Angeles, CA</span></li>-->
                        </ul>
                    </div>
                </div><!-- .col --> 

                <div class="col-12 col-lg-7">
                    <form method="post" class="contact-form">
                        <input type="text" name="nome" placeholder="Nome">
                        <input type="email" name="email" placeholder="E-mail">
						<input type="text" name="assunto" placeholder="Assunto">
                        <textarea rows="15" name="mensagem" cols="6" placeholder="Mensagem"></textarea>

                        <span>
                            <input class="btn gradient-bg" type="submit" name="button" value="Enviar">
                        </span>
                    </form><!-- .contact-form -->

                </div><!-- .col -->

                <!--<div class="col-12">
                    <div class="contact-gmap">
                        <iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=usa&key=AIzaSyC2LvnNLzWxHgFm_XfpFG9wHUuyEj6rXSs" allowfullscreen></iframe>
                    </div>
                </div>-->
            </div><!-- .row -->
        </div><!-- .container -->
    </div>

<?php 
	include 'rodape.php';
?>