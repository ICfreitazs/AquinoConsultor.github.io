


<!DOCTYPE html>
<html lang="pt-br">


<style>
    
	
 @import "https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,300&display=swap";

body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #e0f0e0;
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Merriweather', serif;
}

.container {
  max-width: 1080px;
  margin: 0 auto;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 20px;
}

header {
  background-color: #388e3c;
  width: 100%;
  padding: 0;
  border-bottom: 20px solid #228B22;
}

.logo img {
  width: 65%;
  height: auto;
}

.menu {
  width: 60%;
}

.menu nav a {
  color: #fff;
  text-decoration: none;
  padding-right: 5px;
  font-size: 22px;
  position: relative;
  display: inline-block;
}

.menu nav a::after {
  content: " ";
  width: 0;
  height: 4px;
  background-image: linear-gradient(45deg, #00FA9A, #2E8B57);
  position: absolute;
  top: 30px;
  left: 0;
  transition: width .5s;
}

.menu nav a:hover::after {
  width: 30px;
}

.sociais {
  display: flex;
  justify-content: flex-end;
  align-items: center;
  width: 25%;
}

.sociais button {
  width: 40px;
  height: 40px;
  background-image: linear-gradient(45deg, #3CB371, #2E8B57);
  border: none;
  border-radius: 8px;
  cursor: pointer;
  margin-right: 10px;
}

.sociais button i {
  font-size: 30px;
}

section {
  padding: 20px;
}

footer {
  background-color: #388e3c;
  color: #fff;
  text-align: center;
  padding: 3px;
  position: fixed;
  bottom: 0;
  width: 85%;
}

.corner-images {
  position: fixed;
  top: 50%;
  right: 10px;
  transform: translateY(-50%);
  display: flex;
  flex-direction: column;
  align-items: flex-end;
}

.partners-text {
  color: #fff;
  font-size: 16px;
  margin-bottom: 5px;
  font-style: italic;
}

.corner-images img {
  width: 120px;
  border: 5px solid #73AD21;
  border-radius: 10px;
  margin-bottom: 10px;
  transition: transform 0.3s ease-in-out;
}

.corner-images img:hover {
  transform: scale(1.1);
}

.center-image-container {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-bottom: 20px;
}

.center-image {
  max-width: 100%;
  border: 5px solid #e0f0e0;
  border-radius: 10px;
  margin-right: 10px;
  transition: transform 0.3s ease-in-out;
}

.center-image:hover {
  transform: scale(1.1);
}

section {
  border-bottom: 1px solid #ddd;
  margin-bottom: 20px;
}

.service-container {
  display: flex;
  align-items: center;
}

.service-image {
  max-width: 100%;
  border: 5px solid #e0f0e0;
  border-radius: 10px;
  margin-right: 10px;
  transition: transform 0.3s ease-in-out;
}

.service-image:hover {
  transform: scale(1.1);
}

.contato {
  overflow: hidden;
}

.contato-info {
  width: 300px;
  height: 400px;
  padding: 20px;
  border: 5px dashed #28a745;
  margin: 15px;
  float: left;
}

.table-image {
  width: 200px;
  padding: 20px;
  border: 4px dashed #28a745;
  margin: 10px;
  float: left;
  margin-right: 5px;
}

.download {
  padding: 10px 20px;
  font-size: 22px;
  border-radius: 5px;
  text-decoration: none;
  color: #fff;
  background-color: #dc143c;
  border: 1px solid #ff4268;
  border-left: 10px solid #ff4268;
  transition: all .25s ease-in-out;
}

.download:hover {
  background-color: #fff;
  color: #ff4268;
}
   
 @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    img.animated-image {
        animation: fadeIn 1.5s ease-in-out;
    }
	/* Adicionando uma nova classe */
    .hidden-div {
        display: none;
		opacity: 0; /* Inicia com opacidade 0 para a animação de fade-in */
		animation: fadeIn 0.4s ease-in-out forwards;
        transition: opacity 1s ease-in-out;
    }

	.welcome-message {
		text-align: center;
		font-size: 24px;
		margin-top: 50vh;
		animation: welcomeAnimation 3s ease-in-out 0s, fadeOut 5s ease-in-out 2s forwards;
		text-align: center;
		
	}


	.welcome-message::after {
		content: "";
		display: block;
		width: 57%;
		height: 2px;
		background-color: #3CB371; 
		bottom: -5px;
				
   
	}
    @keyframes welcomeAnimation {
        0% {
            opacity: 0;
            transform: translateY(-50px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }
	
	@keyframes fadeOut {
        0% {
            opacity: 1;
        }
        100% {
            opacity: 0;
        }
    }
	
	@keyframes bounce {
	from {
    transform: translateY(0px);
	}
	to {
		transform: translateY(-15px);
	}
	}
	
	@-webkit-keyframes bounce {
		from {
		transform: translateY(0px);
		}
		to {
			transform: translateY(-15px);
	 }
	 
</style>
<head>

	
	<script src="https://kit.fontawesome.com/92565fc9f1.js" crossorigin="anonymous"></script>
	
	  <script >
	  
       // Função para remover a div após 4 segundos
        function removerDiv() {
            // Seleciona a div pelo ID (substitua "suaDivID" pelo ID real da sua div)
            var div = document.getElementById("suaDivID");

            // Verifica se a div existe e se ela ainda não foi removida
            if (div && !div.classList.contains("removida")) {
                // Utiliza setTimeout para atrasar a execução da função por 4 segundos (4000 milissegundos)
                setTimeout(function () {
                    // Remove a div do DOM
                    div.remove();
                }, 4000);
            }
        }

        // Função para mostrar a div após 5 segundos
        setTimeout(function () {
            document.getElementById('hiddenDiv').style.display = 'block';
        }, 4000);
		
		</script>
		
	<meta charset="UTF-8">
    <title>Seu Negócio</title>
</head>

<body onload="removerDiv()">
    <!-- Adicione esta div para a mensagem de boas-vindas -->
    <div class="welcome-message" id="suaDivID">
        Bem-Vindo!!
    </div>
	


 <div id="hiddenDiv" class="hidden-div">
	<header>
		<div class="container">
			<div class="logo"><img src="./imagens/logotiponovo.jpg"></div>
			<div class="menu">
		<nav>
        <a href="#sobre">Sobre |</a>
        <a href="#servicos">Serviços |</a>
		<a href="#anuncio">Anúncios |</a>
        <a href="#contato">Contato |</a>

		</nav>
			</div>
			<div class="sociais">
				<button><i class="fa-brands fa-square-instagram"></i></button>
				<button><i class="fa-brands fa-square-whatsapp"></i></button>
			</div>
		</div>
	</header>
 
   <div class="corner-images">
        <div class="partners-text">Nossos Parceiros:</div>
        <a href="http://www.ief.mg.gov.br">
            <img src="./imagens/ief.png" alt="Imagem 1" title="Clique para Acessar o IEF">
        </a>
        <a href="https://www.bb.com.br">
            <img src="./imagens/bb.jpg" alt="Imagem 2" width="100" height="100" title="Clique para Acessar o Banco Do Brasil">
        </a>
        <a href="https://www.ima.mg.gov.br">
            <img src="./imagens/ima.png" alt="Imagem 3" title="Clique para Acessar o IMA">
        </a>
        <a href="https://caratinga.mg.gov.br">
            <img src="./imagens/prefeitura.png" alt="Imagem 4" title="Clique para Acessar a Prefeitura de Caratinga">
        </a>
		<a href="https://www.gov.br/inss/pt-br/canais_atendimento/acts/acordos-de-cooperacao-tecnica-acts-por-estado/minas-gerais-mg/caratinga-mg/sindicato-dos-produtores-rurais-de-caratinga">
            <img src="./imagens/sindicado.jpg" alt="Imagem X" title="Clique para Acessar o Sindicato Rural de Caratinga">
        </a>
		
    </div>
	<center><h5>Crédito Rural- Assistência técnica- Licenciamento Ambiental- Outorga das Águas -Regularização de Imóveis</h5></center>
	<div class="center-image-container">
    </div>
	<br>
	<br>
	<br>
	<br>
	<br>
	<center>
        <p>
            <i>"Se o homem do campo não existisse, o homem da cidade não viveria"</i>- <br>
            <br>
            Por trás de um desenvolvimento de uma cidade, existe uma força humana no exercício de uma atividade pouco reconhecida,
            mas de grande<br> importância no dia a dia de cada brasileiro. Nem sempre lembrados, eles são responsáveis pela geração
            de emprego e renda, movimentam a <br>economia e tornam a agricultura competitiva.<br>
            São os agricultores os responsáveis pelo importante processo de produção de alimentos. O preparo do solo para o plantio,
            o cuidado <br>com a lavoura e a colheita.<br>
            AQUINO, é consciente da importância de pequenos, médios e grandes produtores rurais para a economia do país.
            <br> O nosso reconhecimento e gratidão a todos que cultivam da terra o pão de cada dia.
        </p>
    </center>

    <section id="sobre">
        <h2><i><u>Sobre Nós:</u></i></h2>
		<center><strong>Bem-vindo à Aquino Consultoria e Planejamento Rural LTDA.</strong></center>
        <p>Caro Produtor e Trabalhador rural; a Aquino Consultoria é uma empresa que presta serviços no ramo de crédito rural, topografia, questões ambientais,<p>
		e regularização do imóvel rural. Fazemos também o Cadastro Ambiental Rural que é o <strong>C.A.R</strong>, hoje exigido pelos órgãos ambientais.  A Aquino Consultoria  é <p>
		a “Correspondente Bancária do Agronegócio” junto ao Banco do Brasil, trabalhando com crédito rural <strong>( Pronaf Custeio, Pronaf Investimento, Pronamp <p>e Agricultura Empresarial)</strong>, com seguro agrícola, consorcio rural e pessoal . 
		<p>
		<br>
        <div class="center-image-container">
            <img src="./imagens/praque.jpg" alt="Imagem 6" class="center-image" width="400">
            <img src="./imagens/boi.jpg" alt="Imagem 7" class="center-image" width="400">
		</div>
		<p>Somos uma consultoria especializada em planejamento e desenvolvimento rural; enraizados na missão de promover o crescimento econômico,</p> 
		social e ambiental em regiões rurais. Acreditamos que o sucesso agrícola não apenas eleva a qualidade de vida dos agricultores, mas também fortalece<p> toda a cadeia produtiva, contribuindo para um ambiente rural próspero.

	</section>
	<br>
	<br>
	<br>
	<br>
	<hr class="hr5">
    <section id="servicos">
        <h2><u>Conheça Nossos Serviços:</u></h2> 
        
		<center><img src="./imagens/fotocentro2.jpg" alt="Imagem 8" class="service-image" width="350">
		<img src="./imagens/fotocentro1.JPG" alt="Imagem X" class="service-image" width="350" height="260"></center>
		<div class="service-container">
          
		<ul class>
            <li><font size="4">Construções de Terrenos e Tulhas para Secagem e Armazento do Café</font></li>
            <li><font size="4">Aquisições de Caminhões e Caminhonetes</font></li>
            <li><font size="4">Aquisições de Matrizes Leiteiras</font></li>
            <li><font size="4">Aquisições de Tratores e Implementos Agrícolas</font></li>
		</ul>
		</div>
		<br>
		<br>
       <center>Clique Aqui Para Acessar o Custeio !
	   <a href="./imagens/Custeio.pdf" class="download" download>Baixar PDF</a> </center>
	   <br>
	   <br>
	   <br>
	   <br>
	   <center>Clique Aqui Para Acessar o Mais Alimento!
	   <a href="./imagens/maisalimento.pdf" class="download" download>Baixar PDF</a> </center>
	   
	   
	   <div class="table-image">
		<a href="https://www.car.gov.br/#/">
			<img src="./imagens/car.png" alt="Imagem Car" class="service-image" width="270">
		</a>
		<p>
		<font size="4" color="green">Você é produtor rural? Clique acima e conheça o CAR!</font> <p> Valorize o meio ambiente e regularize sua propriedade com o Cadastro Ambiental Rural !


	Por que aderir ao CAR?
	<ul>
	<li><p><font color="green">Compromisso Ambiental:</font></li>
	
	<li><p><font color="green">Legalidade e Segurança:</font></li>

	<li><p><font color="green">Acesso a Benefícios:</font></li>
	</ul>
	<p>
	<strong>Nossos Serviços:</strong>


	Cadastro Ambiental com agilidade e eficiência.
	Consultoria especializada para orientar você em cada etapa do processo.
	Compromisso com a sustentabilidade e respeito ao seu negócio.
		<p>
		<p>
		</div>
    </section>
	<br>
	<br>
	<br>
	<br>

	<hr class="hr5">
	<section id="anuncio">
        <center><h2><i><u>Confira as Novidades!</u></i></h2></center>
		<br>
		<br>
		<center><img src="./imagens/trator.png" alt="vaga" width="400">
		<img src="./imagens/regularize.png" alt="vaga" width="400"></center>
		<center><img src="./imagens/mapeamento.png" alt="vaga" width="300"></center>
       <div style='text-align:center' font-size:30px ><p>Entre em contato conosco para obter mais informações:</p>
		<strong> E-mail:</strong>aquinocaratinga@hotmail.com 
		<br>
		</div>
    </section>
	<br>
	<br>
	<br>
	<br>
	<br>
	<hr class="hr5">
    <section id="contato">
       <center> <div class="contato-info">
            <h2><i>Fale conosco em Caratinga:</i></h2>
            <p>Endereço: R. Cel. Pedro Martins,225- Sala 08- Centro- Caratinga- MG</p>
            <p>Telefone: (33) 3321-7437 ou 99938-7437</p>
			<p><u><a href="mailto:aquinocaratinga@hotmail.com">aquinocaratinga@hotmail.com</a></u></p>
        </div></center>

        <div class="contato-info">
			<h2><h2><i>Fale conosco em Inhapim:</i></h2>
            <p>Endereço: R. Geraldo Marques de Souza,88- Centro- Inhapim- MG</p>
            <p>Telefone: (33) 3315-2212 ou 99948-4975</p>
			<p><u><a href="mailto:aquinoinhapim@hotmail.com">aquinoinhapim@hotmail.com</a></u></p>
        </div>

        <div class="contato-info">
            <h2><h2><i>Fale conosco em Bom Jesus do Galho:</i></h2>
            <p>Endereço: R. José saturnino da Silva, 215- Centro- Bom Jesus do Galho- MG</p>
            <p>Telefone: (33) 999563531</p>
			<p><u><a href="mailto:aquinobomjesus@hotmail.com">aquinobomjesus@hotmail.com</a></u></p>
        </div>

    </section>
	<br>
	<br>
	<br>
	 <img class="animated-image" decoding="async" width="1050" height="200" src="https://elevargeo.com.br/wp-content/uploads/2021/03/Georreferenciamento-Imoveis-Rurais.jpg">


    <footer>
        <p>&copy; 2024 Consultoria Rural. Todos os direitos reservados.</p>
    </footer>
</div>
</body>

 
</html>