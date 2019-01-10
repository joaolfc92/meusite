<!DOCTYPE html>
<html>
<head>
	<title>Contato</title>
	<link rel="stylesheet" type="text/css" href="Assets/css/contato.css">
	<meta charset="utf-8">
	<meta id="viewport" name="viewport" content="width=device-width, user-scalable=0"/>

				<script type="text/javascript" >
		window.onload = function (){
		document.querySelector(".menuMobile").addEventListener("click", function (){
		if (document.querySelector(".menu nav ul").style.display == 'flex') {
			document.querySelector(".menu nav ul").style.display = 'none';
		} else{
			document.querySelector(".menu nav ul").style.display = 'flex';
		}
		});
		};
	</script>
</head>
<body>
	<div class="topo">
		<div class="topoint">
			<div class="logo">
				<img src="Assets/images/minha_logoof.png" height="80" width="100">
			</div>
			
			<div class="menu">
				<nav>
					<div class="menuMobile">
							<div class="mm_line"></div>
							<div class="mm_line"></div>
							<div class="mm_line"></div>
					</div>	
					<ul>
						<li><a href="index.html"> HOME</li></a>
						<li><a href="sobre.html">SOBRE</li></a>
						<li><a href="portifolio.html">PORTIFÓLIO</li></a>
						<li><a href="">CONTATO</li></a>
					</ul>
				</nav>
			</div>	



		</div>	

	</div>	



	<div class="banner">
		<div class="banner_int">
			<div class="vazio"></div>

			<div class="text">
				
				<div class="nome">CONTATO</div>
				<div class="desc">CODE//SHARE//REEBOT</div>
			</div>



		</div>
	</div>


	<div class="conteudo_meio">
		<div class="conteudo_meio_int">
			<div class="leftside">

				<div class="form">
					<div class="tittle">
						<h2>SEUS DADOS</br></h2>
						<h3>Nos deixe saber como poderemos lhe retornar.</h3>

					</div>
					<div class="form_1">
						<form  method="POST" action="resultado.php"/>
 						 <input class="field" name="name" placeholder="Nome *" required><br>
 						  <input class="field" name="email" placeholder="E-Mail *"required><br>
 						  <input class="field" name="tel" placeholder="Telefone *"required><br>
 						  <input class="field" name="whats" placeholder="Whatsapp *"><br>
 						   <input class="field" name="text" placeholder="Assunto *"required><br>
 						   <textarea class="field" name="comentario" placeholder="Digite sua Mensagem Aqui *" 
 						   required>
 						   	</textarea></br>
 						   <input type="submit" value="Enviar">







						</form> 
						






					</div>
					




				</div>
				




			</div>





			<div class="rightside">
				<div class="whats">
					<div class="image">
						<img src="Assets/images/whats.png" height="40" width="40">
					</div>
					<div class="numer1">(21) 97254-5303</div>
					




				</div>


				<div class="telefone">
					<div class="tel">
						<img src="Assets/images/tel.png" height="40" width="40">
					</div>
					
					<div class="numer2">(21) 97997-0077	</div>

					

				</div>



				<div class="email">
							<div class="email_1">
						<img src="Assets/images/email_z.png" height="40" width="40">
					</div>
					
					<div class="numer3">joao_luiz92@hotmail.com	</div>




				</div>

				<div class="face">
					<div class="face_1">
						<img src="Assets/images/Facebook.png" height="40" width="40">
					</div>
					
					<div class="numer4">
					<a href="https://www.facebook.com/JLB-codesharedesigner-539183159931001/"> Nossa página no Facebook</div></a>






				</div>

				<div class="git">
						<div class="git_1">
							<img src="Assets/images/github-mark.png" height="40" width="70">
						</div>

					<div class="numer5">
					
					
					<a href="https://github.com/joaolfc92"> Minha Página no GitHub</div></a>




				</div>

				

				






			</div>




		</div>	




	</div>	

	<div class="rodape">
		<div class="rodape_int">
			<div class="meio_meio">
			<div class="logo_1">
				<img src="Assets/images/minha_logoof.png" height="100" width="100">
			</div>
			<div class="direitos">Todos Direitos Reservados João L.F.C.Serafim</div>
			</div>		
		</div>
	</div>		






</body>
</html>	