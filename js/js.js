$(document).ready(function(){

	$("body").css("visibility", "visible"); // O body da página só é visível após o js ser chamado, isso evita alguns elementos sendo exibidos de forma não desejada no primeiro momento de carregamento do site.

	$("#logo-nomeLog").click(() => {
		location.assign("index_log.php")
	});
	$("#logo-nome").click(() => {
		location.assign("index.php")
	});
	$("body").css("display", "none");
	$("body").fadeIn(700);

	esc = $("#ativarAcess"); esc.hide();
	infoAssoc = $("#infoLogAssoc"); infoAssoc.hide();
	infoClie = $("#infoLogClie"); 
	idProd = $(".idProd"); idProd.hide();
	menu_bocha = $("#redirect-pag-bocha"); menu_bocha.hide();
	menu_malha = $("#redirect-pag-malha"); menu_malha.hide();
	menu_bocha = $("#redirect-pag-bochaLog"); menu_bocha.hide();
	menu_malha = $("#redirect-pag-malhaLog"); menu_malha.hide();
	confirmation = $("#confirmation"); confirmation.hide();
	fecharMasc = $("#fecharMasc"); fecharMasc.hide();
	menuOrder = $(".menuOrder"); menuOrder.hide();
	pergs = $("#hiddenPergs"); pergs.hide();
	comentarios = $(".comentarios"); comentarios.hide();
	formComent = $(".formComent"); formComent.hide();
	view = $("#viewMore");
	mascote = $("#menuMascote"); 
	menino = $("#divSelectAcess"); menino.hide();
	balao = $(".balao"); balao.hide();
	cadInformacoes = $(".cadInformacoes"); cadInformacoes.show();
	cadInformacoes2 = $(".cadInformacoes2"); cadInformacoes2.hide();
	btnImg = $(".btnAltImg"); btnImg.hide();
	menuAltImg = $("#menuAltImg"); menuAltImg.hide();
	acessOpen = false;

	// MENU DE INFORMAÇÕES

	openMenu = true;
	$("#abrir-menu img").click(function(){
		if (openMenu == true) {
			$('#menu').animate({left:0},0,function(){$(this).appendTo('#menu').animate({left:305},500);
			});
			$("#wrapper").css("opacity", "30%");  


		openMenu = false;
		}
	}); // Função realizada ao clicar para abrir o menu de informações.
	
	aberto = false;
	$("#redirect-pag-esportes").click(function(){
		if(aberto == false){
			menu_bocha = $("#redirect-pag-bocha"); menu_bocha.show();
			menu_malha = $("#redirect-pag-malha"); menu_malha.show();
			menu_bocha = $("#redirect-pag-bochaLog"); menu_bocha.show();
			menu_malha = $("#redirect-pag-malhaLog"); menu_malha.show();
			$("#redirect-pag-esportes").css("border", "none");
			$("#aberto-fechado-esportes").css("border-top", "7px solid grey");
			$("#aberto-fechado-esportes").css("border-left", "7px solid transparent");
			$("#aberto-fechado-esportes").css("border-right", "7px solid transparent");
			aberto = true;
		}
		else{
			if(aberto == true){
			menu_bocha = $("#redirect-pag-bocha"); menu_bocha.hide();
			menu_malha = $("#redirect-pag-malha"); menu_malha.hide();
			menu_bocha = $("#redirect-pag-bochaLog"); menu_bocha.hide();
			menu_malha = $("#redirect-pag-malhaLog"); menu_malha.hide();
			$("#aberto-fechado-esportes").css("border-left", "7px solid grey");
			$("#aberto-fechado-esportes").css("border-bottom", "7px solid transparent");
			$("#aberto-fechado-esportes").css("border-top", "7px solid transparent");
			aberto = false;
			}
		}
	})
	$("#fechar-menu").click(function(){
		if(openMenu == false){
			$('#menu').animate({left:305},0,function(){$(this).appendTo('#menu').animate({left:0},500);
			});
			menu_bocha = $("#redirect-pag-bocha"); menu_bocha.hide();
			menu_malha = $("#redirect-pag-malha"); menu_malha.hide();
			menu_bocha = $("#redirect-pag-bochaLog"); menu_bocha.hide();
			menu_malha = $("#redirect-pag-malhaLog"); menu_malha.hide();
			$("#aberto-fechado-esportes").css("border-left", "7px solid grey");
			$("#aberto-fechado-esportes").css("border-bottom", "7px solid transparent");
			$("#aberto-fechado-esportes").css("border-top", "7px solid transparent");
			aberto = false;
			$("#wrapper").css("opacity", "100%")
			$("body").css("padding-left", "0px");
			openMenu = true;
		}
	}); // Função realizada ao clicar para fechar o menu de informações.

	openAreaUser = true;
	$("#user img").click(function(){
		if (openAreaUser == true) {
			$("#areaUser").css("visibility", "visible");
			$('#areaUser').animate({right:0},0,function(){$(this).appendTo('#menu').animate({right:305},500);
			});
			$("#wrapper").css("opacity", "30%");  
			$("#areaUser").css("height", window.screen.height); 

		openAreaUser = false;
		}
	}); // Função realizada ao clicar no perfil do usuário para abrir o menu de sua área.

	$("#fechar-areaUser").click(function(){
		$('#areaUser').animate({right:305},0,function(){$(this).appendTo('#menu').animate({right:0},500);
		});
		$("#wrapper").css("opacity", "100%")
		$("body").css("padding-left", "0px");


		openAreaUser = true;
	}); // Função realizada ao clicar para fechar o menu de área do usuário.


	$("#redirect-pag-bocha").click(function(){
		location.assign("pagBocha.php");
	});	
	$("#redirect-pag-bochaLog").click(function(){
		location.assign("pagBochaLog.php");
	});	
	$("#redirect-pag-malha").click(function(){
		location.assign("pagMalha.php");
	});	
	$("#redirect-pag-malhaLog").click(function(){
		location.assign("pagMalhaLog.php");
	});	
	$("#redirect-pag-qSomos").click(function(){
		location.assign("pagQuemSomos.php");
	});	
	$("#redirect-pag-qSomosLog").click(function(){
		location.assign("pagQuemSomosLog.php");
	});	
	$("#redirect-pag-sobClube").click(function(){
		location.assign("pagSobreClube.php");
	});	
	$("#redirect-pag-sobClubeLog").click(function(){
		location.assign("pagSobreClubeLog.php");
	});
	$("#redirect-pag-produtos").click(function(){
		location.assign("pagProdutos.php");
	});	
	$("#redirect-pag-produtosLog").click(function(){
		location.assign("pagProdutosLog.php");
	});	
	$("#redirect-pag-eventos").click(function(){
		location.assign("pagEventos.php");
	});
	$("#redirect-pag-eventosLog").click(function(){
		location.assign("pagEventosLog.php");
	});
	$("#redirect-pag-idVisual").click(function(){
		location.assign("pagIdvisual.php");
	});	
	$("#redirect-pag-idVisualLog").click(function(){
		location.assign("pagIdvisualLog.php");
	});	// Quando clicado em algum item do menu de informações, é redirecionado para tal.

	$("#redirect-pag-perfil").click(function(){
		location.assign("pagPerfil.php");
	}); 
	$("#redirect-pag-perfilAssoc").click(function(){
		location.assign("pagAssociado.php");
	}); 
	$("#redirect-pag-forum").click(() => {
		location.assign('pagForum.php');
	});
	$("#redirect-pag-forumLog").click(() => {
		location.assign('pagForumLog.php');
	});
	$("#redirect-pag-poliPriva").click(() => {
		location.assign('pagPoliticaPrivacidade.php');
	});
	$("#redirect-pag-poliPrivaLog").click(() => {
		location.assign('pagPoliticaPrivacidadeLog.php');
	});
	$("#redirect-pag-compras").click(() => {
		location.assign('minhasCompras.php');
	});
	$(".imgAnuncio1").click(() => {
		location.assign("pagProdutos.php");
	});
	$(".imgAnuncio2").click(() => {
		location.assign("pagSobreClube.php");
	});
	$(".imgAnuncioLog1").click(() => {
		location.assign("pagProdutos.php");
	});
	$(".imgAnuncioLog2").click(() => {
		location.assign("pagSobreClube.php");
	});
	$("#sair").click(function(){
		location.assign("sairPerfil.php");
	}); // Quando clicado em algum item do menu do usuário, é redirecionado para tal.

	$("#divAltDados").click(function(){
		$("#menuAltDados, .altDadoAssoc").css("visibility", "visible");
		$("#wrapper").css("opacity", "30%");  
	});

	$("#fechar-menuAltDados").click(function(){
		$("#menuAltDados, .altDadoAssoc").css("visibility", "hidden");
		$("#wrapper").css("opacity", "100%");  
	});

	
	// MENU DE LOGIN E CADASTRO


	openMenu2 = true;
	const elementos2 = $('#login');
	elementos2.hide();
	$(".logRed, #login-mobile").click(function(){
		if (openMenu2 == true) {
			$("#wrapper").css("opacity", "30%");  
			elementos2.show();
			openMenu2 = false;
			openMenu3 = true;
		}
	}); // Função realizada ao clicar para abrir o menu de login.

	$(".fechar-login-cadastro").click(function(){
			$("#wrapper").css("opacity", "100%"); 
		elementos2.hide();
		openMenu2 = true;
	}); // Função realizada ao clicar para fechar o menu de login.

	$("#logar").click(function(){
		logar();
	}); // Ao enviar o login, tal função é executada para verificar se é correspondente os elementos digitados pelo usuário.

	function logar(e) {
		let emailLogin = document.getElementById("user-login").value;
		let senhaLogin = document.getElementById("senha-login").value;
			
		if (emailLogin == 0 || senhaLogin == 0) {
			swal("Preencha os campos.", "Ainda há campos não preenchidos!", "error");
		}
		else{
			document.getElementById("formLog").submit();
		}
	}

	$("#cad").click(function(){
		let nome = document.getElementById("nome-cadastro").value;
		let telefone = document.getElementById("tel-cadastro").value;
		let emailCadastro = document.getElementById("e-mail-cadastro").value;
	    let senhaCadastro = document.getElementById("senha-cadastro").value;
		let senhaConCadastro = document.getElementById("senha-confirm-cadastro").value;
		let rg = document.getElementById("rg-cadastro").value;
		let cpf = document.getElementById("cpf-cadastro").value;
		let data_nas = document.getElementById("dataNas-cadastro").value;
	    
	    if (emailCadastro == 0 || senhaCadastro == 0 || telefone == 0 || nome == 0 || rg == 0 || cpf == 0 || senhaCadastro == 0 || data_nas == 0) {
	        swal("Preencha os campos.", "Ainda há campos não preenchidos!", "error");
	    }
	    else{
	    	if (nome.length < 3 || nome.length > 15) {
	    		swal("Limite de caracteres.", "O nome do usuário deve conter entre 3 à 15 caracteres!", "error");
	    	}
	    	else{
		    	if(telefone.length < 11 || telefone.length > 12){
		    		swal("Telefone inválido.", "Digite um telefone válido!", "error");
		    	}
		    	else{
		    		if(senhaCadastro.length < 8){
			    		swal("Senha inválida.", "Digite uma senha com mais de 8 caracteres!", "error");
			    	}	
		    		else{
						if(rg.length != 13){
							swal("RG Inválido!", "Digite um RG válido!", "error");
						}
						else{
							if(cpf.length != 14){
								swal("CPF Inválido!", "Digite um CPF válido!", "error")
							}
							else{
								if(senhaConCadastro != senhaCadastro){
									swal("Senhas divergentes", "Às senham não conferem!", "error");
								}
								else{
									document.getElementById("submitCad").submit();
								}
							}
						}
		    		}

		    	}
	    	}
	    }
	}); // Ao enviar o cadastro, tal função é executada para verificar se é correspondente os elementos digitados pelo usuário.
	$("#reset").click(() => {
		document.getElementById("nome-cadastro").value = null;
		document.getElementById("tel-cadastro").value = null;
		document.getElementById("e-mail-cadastro").value = null;
	    document.getElementById("senha-cadastro").value = null;
		document.getElementById("senha-confirm-cadastro").value = null;
		document.getElementById("dataNas-cadastro").value = null;
		document.getElementById("rg-cadastro").value = null;
		document.getElementById("cpf-cadastro").value = null;

	})

	// REDIRECIONAMENTO REDES SOCIAIS


	$("#element-redes-two").click(function(){
		location.assign("https://pt-br.facebook.com/sebraeesporteclube/");
	});	
	$("#element-redes-three").click(function(){
		location.assign("https://www.instagram.com/sebraeec");
	});	// Quando clicado em alguma plataforma de rede social, é redirecionado para o perfil do clube na plataforma.


	// SLIDER PÁGINA PRINCIPAL


	$("#seta2").click(function(){
		$('#slider img').eq(0).animate({opacity:0},0,function(){$(this).appendTo('#slider').animate({opacity:1},500);
		});
	}); // Função realizada ao clicar na primeira seta (á esquerda do slider).

	$("#seta").click(function(){
		$('#slider img').eq(-1).animate({opacity:1},0,function(){$(this).appendTo('#slider').animate({opacity:0},500);
		});
	}); // Função realizada ao clicar na primeira seta (á esquerda do slider).

});
function sliderAnimate(){
	$('#slider img').eq(0).animate({opacity:0},0,function(){$(this).appendTo('#slider').animate({opacity:1},500);
	});
}
	$('<p class="legenda">').appendTo('#slider-body-part');
	$('.legenda').css({
		opacity: 0.9,
		visibility: 'hidden',
		color:'#000',
		zIndex:1000,
		width:'1200px',
		textAlign:'center',
		borderRadius: '10px',
		fontSize: '14px',
		padding: '5px 10px',
		borderBottom: '1px dotted #d1d1d1',
		background: '#FFC000',
		margin:'0px auto'
	});

	$('#slider img').each(function(){
		$(this).css({
			position:'absolute'
		});
	});
				
	cont1 = setInterval(sliderAnimate,5000);
				
	$('#slider img, .setas').hover(
		function(){
			clearInterval(cont1);
			$('.legenda').text($(this).attr('alt')).css('visibility','visible');
			$('.legenda').css('display','block');
		},function(){
			$('.legenda').css('visibility','hidden');
			$('.legenda').css('display','none');
			cont1 = setInterval(sliderAnimate,5000);
}); // Função cujo realiza a troca entre os slides automaticamente a cada 7 segundos.

	$("#slider-img4").click(function(){
		location.assign("pagEventos.php");
	});	
	$("#slider-img2").click(function(){
		location.assign("pagProdutos.php");
	});
	$("#slider-img3").click(function(){
		location.assign("pagBocha.php");
	});
	$("#slider-img1").click(function(){
		location.assign("pagProdutos.php");
	});	
	$("#slider-img4Log").click(function(){
		location.assign("pagEventosLog.php");
	});	
	$("#slider-img2Log").click(function(){
		location.assign("pagProdutosLog.php");
	});
	$("#slider-img3Log").click(function(){
		location.assign("pagBochaLog.php");
	});
	$("#slider-img1Log").click(function(){
		location.assign("pagProdutosLog.php");
	});	


// COMPRA DE PRODUTOS DO CLUBE


menuProduto = $("#menuProduto");
menuProduto.hide();
produtoImg = document.getElementById("produtoImg")

$(".produtos").click(function(){
	$("#wrapper").css("opacity", "30%");
	menuProduto.show(); 
	$(".text, #abrir-menu, .text-footer a, .header-elements-login-cadastro").css("cursor", "default"); 
});
$("#produto1").click(function(){
	produtoImg.src = "img/produtos/porta_cartao_acesso.jpg";
	$('.text-produtoInfo').text('Porta Carteirinha');
	$('#cores').text('Cores: Azul e Branco');
	$('#preco').text('R$20,00')
	$("#cor1").css("background", "#e5f2ff")
	$("#cor2").css("background", "#fff")
})
$("#produto2").click(function(){
	produtoImg.src = "img/produtos/camiseta.jpg";
	$('.text-produtoInfo').text('Camiseta do Clube');
	$('#cores').text('Cores: Azul e Branco');
	$('#preco').text('R$65,00')
	$("#cor1").css("background", "#1d334b")
	$("#cor2").css("background", "#fff")
})
$("#produto3").click(function(){
	produtoImg.src = "img/produtos/cartao_acesso.jpg";
	$('.text-produtoInfo').text('Carteirinha do Clube');
	$('#cores').text('Cores: Azul e Branco');
	$('#preco').text('R$30,00')
	$("#cor1").css("background", "#e5f2ff")
	$("#cor2").css("background", "#fff")
})
$("#produto4").click(function(){
	produtoImg.src = "img/produtos/sacola.png";
	$('.text-produtoInfo').text('Sacola');
	$('#cores').text('Cores: Azul e Branco');
	$('#preco').text('R$10,00')
	$("#cor1").css("background", "#e5f2ff")
	$("#cor2").css("background", "#fff")
})
$("#produto5").click(function(){
	produtoImg.src = "img/produtos/toalha.png";
	$('.text-produtoInfo').text('Toalha');
	$('#cores').text('Cores: Azul e Branco');
	$('#preco').text('R$20,00')
	$("#cor1").css("background", "#e5f2ff")
	$("#cor2").css("background", "#fff")
})
$("#produto6").click(function(){
	produtoImg.src = "img/produtos/caderno.jpg";
	$('.text-produtoInfo').text('Caderno');
	$('#cores').text('Cores: Azul');
	$('#preco').text('R$25,00')
	$("#cor1").css("background", "#e5f2ff")
	$("#cor2").css("background", "#1d334b")
})
$("#produto7").click(function(){
	produtoImg.src = "img/produtos/bone.jpg";
	$('.text-produtoInfo').text('Boné');
	$('#cores').text('Cores: Azul e Branco');
	$('#preco').text('R$25,00')
	$("#cor1").css("background", "#1d334b")
	$("#cor2").css("background", "#fff")
})
$("#produto8").click(function(){
	produtoImg.src = "img/produtos/carimbo.png";
	$('.text-produtoInfo').text('Carimbo');
	$('#cores').text('Cores: Azul e Branco');
	$('#preco').text('R$8,00')
	$("#cor1").css("background", "#1d334b")
	$("#cor2").css("background", "#fff")
})
$("#produto9").click(function(){
	produtoImg.src = "img/produtos/necessaire.jpg";
	$('.text-produtoInfo').text('Necessaire');
	$('#cores').text('Cores: Azul e Branco');
	$('#preco').text('R$25,00')
	$("#cor1").css("background", "#e5f2ff")
	$("#cor2").css("background", "#fff")
})
$("#fechar-produto").click(function(){
	$("#wrapper").css("opacity", "100%"); 
	$(".text, #abrir-menu, .text-footer a, .header-elements-login-cadastro").css("cursor", "pointer"); 
	menuProduto.hide();
});
$("#buscar").click(function(){
	buscarProduto();
})
function buscarProduto(){
	results = 0;
	valor = [];
	a = "";
	semPd1 = 0; semPd2 = 0; semPd3 = 0; semPd4 = 0; semPd5 = 0; semPd6 = 0; semPd7 = 0; semPd8 = 0; semPd9 = 0;
	pesq = document.querySelector("#txtBusca").value;
	if(pesq.length != 0){
		
		$(".produtos").hide();
		pd1 = document.querySelector("#areaTextoProduto1").firstChild.textContent.toLowerCase(); 
		pd2 = document.querySelector("#areaTextoProduto2").firstChild.textContent.toLowerCase();
		pd3 = document.querySelector("#areaTextoProduto3").firstChild.textContent.toLowerCase();
		pd4 = document.querySelector("#areaTextoProduto4").firstChild.textContent.toLowerCase();
		pd5 = document.querySelector("#areaTextoProduto5").firstChild.textContent.toLowerCase();
		pd6 = document.querySelector("#areaTextoProduto6").firstChild.textContent.toLowerCase();
		pd7 = document.querySelector("#areaTextoProduto7").firstChild.textContent.toLowerCase();
		pd8 = document.querySelector("#areaTextoProduto8").firstChild.textContent.toLowerCase();
		pd9 = document.querySelector("#areaTextoProduto9").firstChild.textContent.toLowerCase();

		for(i=0;i<pd1.length;i++){
			for(e=0;e<=pesq.length;e++){
				if((pesq[e] == pd1[i]) && (i == 0 && e == 0 || pesq[e - 1] == pd1[i - 1])){
					semPd1++
				}
			}
		}
		for(i=0;i<pd2.length;i++){
			for(e=0;e<=pesq.length;e++){
				if((pesq[e] == pd2[i]) && (i == 0 && e == 0 || pesq[e - 1] == pd2[i - 1])){
					semPd2++
				}
			}
		}
		for(i=0;i<pd3.length;i++){
			for(e=0;e<=pesq.length;e++){
				if((pesq[e] == pd3[i] && i == 0 && e == 0 || pesq[e - 1] == pd3[i - 1])){
					semPd3++
				}
			}
		}
		for(i=0;i<pd4.length;i++){
			for(e=0;e<=pesq.length;e++){
				if((pesq[e] == pd4[i]) && (i == 0 && e == 0 || pesq[e - 1] == pd4[i - 1])){
					semPd4++
				}
			}
		}
		for(i=0;i<pd5.length;i++){
			for(e=0;e<=pesq.length;e++){
				if((pesq[e] == pd5[i]) && (i == 0 && e == 0 || pesq[e - 1] == pd5[i - 1])){
					semPd5++
				}
			}
		}
		for(i=0;i<pd6.length;i++){
			for(e=0;e<=pesq.length;e++){
				if((pesq[e] == pd6[i]) && (i == 0 && e == 0 || pesq[e - 1] == pd6[i - 1])){
					semPd6++
				}
			}
		}
		for(i=0;i<pd7.length;i++){
			for(e=0;e<=pesq.length;e++){
				if((pesq[e] == pd7[i]) && (i == 0 && e == 0 || pesq[e - 1] == pd7[i - 1])){
					semPd7++
				}
			}
		}
		for(i=0;i<pd8.length;i++){
			for(e=0;e<=pesq.length;e++){
				if((pesq[e] == pd8[i]) && (i == 0 && e == 0 || pesq[e - 1] == pd8[i - 1])){
					semPd8++
				}
			}
		}
		for(i=0;i<pd9.length;i++){
			for(e=0;e<=pesq.length;e++){
				if((pesq[e] == pd9[i]) && (i == 0 && e == 0 || pesq[e - 1] == pd9[i - 1])){
					semPd9++
				}
			}
		}
		if(semPd1 >= 5){
			$("#produto1").show();
			results++;
		}
		if(semPd2 >= 6){
			$("#produto2").show();
			$("#resultBuscas").text("");
			results++;
		}
		if(semPd3 >= 7){
			$("#produto3").show();
			$("#resultBuscas").text("");
			results++;
		}
		if(semPd4 >= 3){
			$("#produto4").show();
			$("#resultBuscas").text("");
			results++;
		}
		if(semPd5 >= 3){
			$("#produto5").show();
			$("#resultBuscas").text("");
			results++;
		}
		if(semPd6 >= 3){
			$("#produto6").show();
			$("#resultBuscas").text("");
			results++;
		}
		if(semPd7 >= 3){
			$("#produto7").show();
			$("#resultBuscas").text("");
			results++;
		}
		if(semPd8 >= 4){
			$("#produto8").show();
			$("#resultBuscas").text("");
			results++;
		}
		if(semPd9 >= 4){
			$("#produto9").show();
			$("#resultBuscas").text("");
			results++;
		}
		if(results != 0){
			$("#resultBuscas").text("Foram encontrados " + results + " resultados à sua busca.");
		}
		else{
			$("#resultBuscas").text("Não foi encontrado resultados de sua busca.");
		}
	}
	else{
		$(".produtos").show();
		$("#resultBuscas").text("");
	}
}


// ADAPTAÇÃO DO SITE EM MOBILE


identificarDispositivo();
function identificarDispositivo(){
	cadastro_login_mobile = $(".cadastro-login-mobile");
	cadastro_login_mobile.hide();
	if(/Android|iPhone/i.test(navigator.userAgent) && screen.width > 480){ /* Caso o 
	dispositivo seja Android ou iPhone, porém com tela maior que 480px de largura 
	(Tablets, iPads etc...), apenas o header e o footer é adaptado pelas páginas. */ 

		$("footer, header, #footer-one, #header-two").css("width", "1280px");
	}
}

$("#acessImg").hover(function(){
	if(acessOpen == false){
		$("#ativarAcess").css("visibility", "visible");
		esc.show();
		acessOpen = true;
		$('#ativarAcess').animate({opacity:0},0,function(){$(this).appendTo('#ativarAcess').animate({opacity:0.6},500)});
	}
	else{
		$("#ativarAcess").css("visibility", "hidden");
		acessOpen = false;
		esc.hide();
	}
});


const synth = window.speechSynthesis; // chamada SpeechSynthesis API
const selectVoices = document.querySelector('select'); // lista de vozes

let voices = [];
function getVoices() { 
  voices = synth.getVoices(); // armazena as vozes no array
  voices.forEach((voice, index) => {
    selectVoices.add(new Option(`${voice.name} (${voice.lang})`, index)); // adiciona as informações na lista de seleção..
  });
}

window.addEventListener('load', () => { // ao ser concluído..
  getVoices(); // carrega as vozes..
  if (synth.onvoiceschanged !== undefined)
    synth.onvoiceschanged = getVoices; // checa e atualiza o evento
});

$("#deleteAccount").click(()=>{
	confirmation.show();
	$("#wrapper").css("opacity", "50%");
});
$("#btnConfirmSim").click(()=>{
	confirmation.hide();
	$("#passConfirmation").css("visibility", "visible");
});
$("#btnConfirmNao").click(() => {
	confirmation.hide();
	$("#wrapper").css("opacity", "100%");
});
$("#btnDeleteAll").click(() => {
	deletar();
});
function deletar(e){
	let userConfirm = document.getElementById("userConfirm").value;
	let senhaConfirm = document.getElementById("passConfirm").value;
	if(userConfirm == 0 || senhaConfirm == 0){
		swal("Faltam dados.", "Há dados faltando, insirá-os!", "error");
	}
	else{
		document.getElementById("deleteAll").submit();
	}
}
$("#btnCancelDelete").click(() => {
	$("#passConfirmation").css("visibility", "hidden");
	$("#wrapper").css("opacity", "100%");
});
hoverMasc = false;
$("#menuMascote").hover(() => {
	if(hoverMasc == false){
		fecharMasc.show();
		hoverMasc = true;
	}
	else{
		fecharMasc.hide();
		hoverMasc = false;
	}
});
$("#fecharMasc").click(() => {
	mascote.hide();
});
$("#acessImg").click(() => {
	location.assign("pagSuporte.php");
});
$("#viewMore").click(() => {
	pergs.show();
	view.hide();
});
$("#viewMenos").click(() => {
	pergs.hide();
	view.show();
});
$("#produto-icon").click(() => {
	location.assign("supProdutos.php");
});
$("#agendamento-icon").click(() => {
	location.assign("supAgendamento.php");
});
$("#acesso-icon").click(() => {
	location.assign("supAcesso.php");
});
$("#btnSubProb").click(() => {
	let nomeSup = document.getElementById("nomeSup").value;
	let emailSup = document.getElementById("emailSup").value;
	let telSup = document.getElementById("telSup").value;
	let descSup = document.getElementById("probSup").value;
	if(nomeSup == 0 || emailSup == 0 || telSup == 0 || descSup == 0){
		swal("Faltam Informações", "Há informações faltando, insirá-os!", "error")
	}
	else if(telSup.length < 10 || telSup.length > 11){
		swal("Telefone inválido", "Insira um telefone válido!", "error");
	}
	else if(descSup.length > 500){
		swal("Limite de caracteres", "Insira apenas até 500 caracteres em seu relatório!", "error");
	}
	else{
		document.getElementById("formSuport").submit();
	}
});
$("#acessImgLog").click(() => {
	location.assign("pagSuporteLog.php");
});
$("#produtoLog-icon").click(() => {
	location.assign("supProdutosLog.php");
});
$("#agendamentoLog-icon").click(() => {
	location.assign("supAgendamentoLog.php");
});
$("#acessoLog-icon").click(() => {
	location.assign("supAcessoLog.php");
});
$("#nowRedir").click(() => {
	location.assign("pagCadastro.php");
});
$("#voltIndex").click(() => {
	window.history.back();
})
$(".cadRed").click(() => {
	location.assign("pagCadastro.php");
});

setTimeout(function dicaEsc(){
	$("#dicaEsc").fadeOut(700);
}, 5000);
setTimeout(function ultAcess(){
	$("#logWithCook").fadeOut(700);
}, 4000);
mostrarMais = true;
restMens = $("#restMen"); restMens.hide();
elViewMore = $("#viewMoreMen"); 
$("#viewMoreMen").click(() => {
	if(mostrarMais == true){
		restMens.show();
		mostrarMais = false;
		elViewMore.hide();
	}
});
$("#showLess").click(() => {
	if(mostrarMais == false){
		restMens.hide();
		elViewMore.show();
		mostrarMais = true;
	}
});
restMensPag = $("#restMensPag"); restMensPag.hide();
mostrarMaisPag = $("#viewMorePag"); 
mostrarRestPag = true;
$("#viewMorePag").click(() => {
	if(mostrarRestPag == true){
		restMensPag.show();
		mostrarMaisPag.hide();
		mostrarRestPag = false;
	}
});
$("#showLessPag").click(() => {
	if(mostrarRestPag == false){
		restMensPag.hide();
		mostrarMaisPag.show();
		mostrarRestPag = true;
	}
});
$("#logAssocCB").click(() => {
	$('#logClieCB').prop('checked', false);
	$('#logAssocCB').prop('checked', true);
	infoAssoc.show();
	infoClie.hide();
});
$("#logClieCB").click(() => {
	$('#logAssocCB').prop('checked', false);
	$('#logClieCB').prop('checked', true);
	infoAssoc.hide();
	infoClie.show();
});
$("#logarAssoc").click(function(){
	let emailAssoc= document.getElementById("cpfAssoc-login").value;
	let senhaAssoc = document.getElementById("senhaAssoc-login").value;
	
	if (emailAssoc == 0 || senhaAssoc == 0) {
		swal("Faltam Campos.", "Ainda há campos não preenchidos", "error");
	}
	else{
		document.getElementById("formLogAssoc").submit();
	}
}); 
$("#submitPost").click(() => {
	let post = document.getElementById('post').value;
	if(post.length < 20){
		swal('Mínimo de caracteres', 'Digite pelo menos 20 caracteres!', 'error');
	}
	else{
		document.getElementById("formPost").submit();
	}
});
$("#menuMascote").hover(function() {
-
    balao.fadeIn(500);
}, function() {
    balao.fadeOut(500);
});
menuOrderOpen = false;
$(".setaOrder").click(() => {
	if(menuOrderOpen == true){
		menuOrder.hide();
		menuOrderOpen = false;
	}
	else{
		menuOrder.show();
		menuOrderOpen = true;
	}
});
$("#user_imgPerfil").hover(() => {
	btnImg.show();
}, () => {
	btnImg.hide();
})
$(".btnAltImg").hover(() => {
	btnImg.show();
}, () => {
	btnImg.hide();
});
$(".btnAltImg, #user_imgPerfil").click(() => {
	menuAltImg.show();
	$("#wrapper").css("opacity", '50%');
});
$("#fecharAltImg").click(() => {
	menuAltImg.hide();
	$("#wrapper").css("opacity", '100%');
});
$("#delImg").click(() => {
	location.assign('deletarImg.php');
});
credito = true;
$(".metod1").hover(() => {
	if(credito != true){
		$(".metod1").css("opacity", "70%");
		$(".metod1").css("cursor", "pointer")
	}
}, () => {
	$(".metod1").css("opacity", "100%");
	$(".metod1").css("cursor", "default");
});
$(".metod2").hover(() => {
	if(credito == true){
		$(".metod2").css("opacity", "70%");
		$(".metod2").css("cursor", "pointer")
	}
}, () => {
	$(".metod2").css("opacity", "100%");
	$(".metod2").css("cursor", "default");
});
    $(".metod1").click(() => {
        credito = true;
        $(".metod2").css("background", "none");
        $(".metod1").css("background", "lightgray");
        $(".metod1").css("opacity", "100%");
        $(".metod1").css("cursor", "default");
		$("#credDeb").remove();
		$("#formComprar").append('<input type="text" name="credDeb" id="credDeb" value="Crébito">');
    });
    $(".metod2").click(() => {
        credito = false;
        $(".metod1").css("background", "none");
        $(".metod2").css("background", "lightgray");
        $(".metod2").css("opacity", "100%");
        $(".metod2").css("cursor", "default");
		$("#credDeb").remove();
		$("#formComprar").append('<input type="text" name="credDeb" id="credDeb" value="Débito">');
    });
$("#buttonProximo").click(() => {
	nomeCard = document.getElementById("nomeCard-cadastro");
	cvv = document.getElementById("CVV-cadastro");
	numeroCard = document.getElementById("numeroCard-cadastro");
	mesCard = document.getElementById("mesCard-cadastro");
	anoCard = document.getElementById("anoCard-cadastro");
	if(nomeCard.value.length == 0 || cvv.value.length == 0 || numeroCard.value.length == 0 || mesCard.value.length == 0 || anoCard.value.length == 0){
		swal("Faltam campos!", "Faltam campos a serem preenchidos!", "error");
	}
	else if(cvv.value.length < 3){
		swal("CVV Incorreto.", "O CVV está inválido!", "error");
	}
	else if(numeroCard.value.length < 19){
		swal("Número inválido.", "O número do cartão está inválido!", "error");
	}
	else if(mesCard.value.length < 2){
		swal("Mês inválido.", "O mês do cartão está inválido!", "error");
	}
	else if(anoCard.value.length < 2){
		swal("Ano inválido.", "O ano do cartão está inválido!", "error");
	}
	else{
		cadInformacoes2.show();
		cadInformacoes.hide();
	}
});
$("#buttonVoltarComp").click(() => {
	cadInformacoes.show();
	cadInformacoes2.hide();
});
$("#buttonComprarComp").click(() => {
	nomeComp = document.getElementById("nomeComp-cadastro");
	sobrenomeComp = document.getElementById("sobrenomeComp-cadastro");
	cepComp = document.getElementById("cepComp-cadastro");
	cidadeComp = document.getElementById("cidadeComp-cadastro");
	ruaComp = document.getElementById("ruaComp-cadastro");
	numeroComp = document.getElementById("numeroComp-cadastro");
	complementoComp = document.getElementById("complementoComp-cadastro");
	celularComp = document.getElementById("celularComp-cadastro")
	emailComp = document.getElementById("emailComp-cadastro");
	if(nomeComp.value.length == 0 || sobrenomeComp.value.length == 0 || cepComp.value.length == 0 || cidadeComp.value.length == 0 || ruaComp.value.length == 0 || numeroComp.value.length == 0 || complementoComp.value.length == 0 || celularComp.value.length == 0 || emailComp.value.length == 0){
		swal("Faltam campos!", "Faltam campos a serem preenchidos!", "error");
	}
	else if(cepComp.value.length < 9){
		swal("CEP Inválido!", "O CEP informado está inválido!", "error");
	}
	else if(celularComp.value.length < 12){
		swal("Contato inválido.", "O celular informado está inválido!", "error");
	}
	else{
		document.getElementById("formComprar").submit();
	}
});
ava = 0;
$("#estrela1Comp").click(() => {
	$("#estrela1Comp").prop('src', 'img/estrelaAva.png');
	$("#estrela1Comp").css("opacity", "100%");
	$("#estrela2Comp").css("opacity", "100%");
	$("#estrela3Comp").css("opacity", "100%");
	$("#estrela4Comp").css("opacity", "100%");
	$("#estrela5Comp").css("opacity", "100%");
	$(".quantEstrelasIn").remove();
	$(".formAvaComp").append("<input type='number' name='quantEstrelas' class='quantEstrelasIn' value='1'>");
	ava = 1;
});
$("#estrela2Comp").click(() => {
	$("#estrela1Comp").prop('src', 'img/estrelaAva.png');
	$("#estrela2Comp").prop('src', 'img/estrelaAva.png');
	$("#estrela1Comp").css("opacity", "100%");
	$("#estrela2Comp").css("opacity", "100%");
	$("#estrela3Comp").css("opacity", "100%");
	$("#estrela4Comp").css("opacity", "100%");
	$("#estrela5Comp").css("opacity", "100%");
	$(".quantEstrelasIn").remove();
	$(".formAvaComp").append("<input type='number' name='quantEstrelas' class='quantEstrelasIn' value='2'>");
	ava = 2;
});
$("#estrela3Comp").click(() => {
	$("#estrela1Comp").prop('src', 'img/estrelaAva.png');
	$("#estrela2Comp").prop('src', 'img/estrelaAva.png');
	$("#estrela3Comp").prop('src', 'img/estrelaAva.png');
	$("#estrela1Comp").css("opacity", "100%");
	$("#estrela2Comp").css("opacity", "100%");
	$("#estrela3Comp").css("opacity", "100%");
	$("#estrela4Comp").css("opacity", "100%");
	$("#estrela5Comp").css("opacity", "100%");
	$(".quantEstrelasIn").remove();
	$(".formAvaComp").append("<input type='number' name='quantEstrelas' class='quantEstrelasIn' value='3'>");
	ava = 3;
});
$("#estrela4Comp").click(() => {
	$("#estrela1Comp").prop('src', 'img/estrelaAva.png');
	$("#estrela2Comp").prop('src', 'img/estrelaAva.png');
	$("#estrela3Comp").prop('src', 'img/estrelaAva.png');
	$("#estrela4Comp").prop('src', 'img/estrelaAva.png');
	$("#estrela1Comp").css("opacity", "100%");
	$("#estrela2Comp").css("opacity", "100%");
	$("#estrela3Comp").css("opacity", "100%");
	$("#estrela4Comp").css("opacity", "100%");
	$("#estrela5Comp").css("opacity", "100%");
	$(".quantEstrelasIn").remove();
	$(".formAvaComp").append("<input type='number' name='quantEstrelas' class='quantEstrelasIn' value='4'>");
	ava = 4;
});
$("#estrela5Comp").click(() => {
	$("#estrela1Comp").prop('src', 'img/estrelaAva.png');
	$("#estrela2Comp").prop('src', 'img/estrelaAva.png');
	$("#estrela3Comp").prop('src', 'img/estrelaAva.png');
	$("#estrela4Comp").prop('src', 'img/estrelaAva.png');
	$("#estrela5Comp").prop('src', 'img/estrelaAva.png');
	$("#estrela1Comp").css("opacity", "100%");
	$("#estrela2Comp").css("opacity", "100%");
	$("#estrela3Comp").css("opacity", "100%");
	$("#estrela4Comp").css("opacity", "100%");
	$("#estrela5Comp").css("opacity", "100%");
	$(".quantEstrelasIn").remove();
	$(".formAvaComp").append("<input type='number' name='quantEstrelas' class='quantEstrelasIn' value='5'>");
	ava = 5;
});
$("#estrela1Comp").hover(() => {
	$("#estrela1Comp").prop('src', 'img/estrelaAva.png');
	$("#estrela2Comp").prop('src', 'img/estrelaP.png');
	$("#estrela3Comp").prop('src', 'img/estrelaP.png');
	$("#estrela4Comp").prop('src', 'img/estrelaP.png');
	$("#estrela5Comp").prop('src', 'img/estrelaP.png');
	$("#estrela1Comp").css("opacity", "50%");
}, () => {
	if(ava == 1){
		$("#estrela1Comp").prop('src', 'img/estrelaAva.png');
		$("#estrela2Comp").prop('src', 'img/estrelaP.png');
		$("#estrela3Comp").prop('src', 'img/estrelaP.png');
		$("#estrela4Comp").prop('src', 'img/estrelaP.png');
		$("#estrela5Comp").prop('src', 'img/estrelaP.png');
	}
	else if(ava == 2){
		$("#estrela1Comp").prop('src', 'img/estrelaAva.png');
		$("#estrela2Comp").prop('src', 'img/estrelaAva.png');
		$("#estrela3Comp").prop('src', 'img/estrelaP.png');
		$("#estrela4Comp").prop('src', 'img/estrelaP.png');
		$("#estrela5Comp").prop('src', 'img/estrelaP.png');
	}
	else if(ava == 3){
		$("#estrela1Comp").prop('src', 'img/estrelaAva.png');
		$("#estrela2Comp").prop('src', 'img/estrelaAva.png');
		$("#estrela3Comp").prop('src', 'img/estrelaAva.png');
		$("#estrela4Comp").prop('src', 'img/estrelaP.png');
		$("#estrela5Comp").prop('src', 'img/estrelaP.png');
	}
	else if(ava == 4){
		$("#estrela1Comp").prop('src', 'img/estrelaAva.png');
		$("#estrela2Comp").prop('src', 'img/estrelaAva.png');
		$("#estrela3Comp").prop('src', 'img/estrelaAva.png');
		$("#estrela4Comp").prop('src', 'img/estrelaAva.png');
		$("#estrela5Comp").prop('src', 'img/estrelaP.png');
	}
	else if(ava == 5){
		$("#estrela1Comp").prop('src', 'img/estrelaAva.png');
		$("#estrela2Comp").prop('src', 'img/estrelaAva.png');
		$("#estrela3Comp").prop('src', 'img/estrelaAva.png');
		$("#estrela4Comp").prop('src', 'img/estrelaAva.png');
		$("#estrela5Comp").prop('src', 'img/estrelaAva.png');
	}
	else{
		$("#estrela1Comp").prop('src', 'img/estrelaP.png');
		$("#estrela1Comp").css("opacity", "100%");
	}
	$("#estrela1Comp").css("opacity", "100%");
	$("#estrela2Comp").css("opacity", "100%");
	$("#estrela3Comp").css("opacity", "100%");
	$("#estrela4Comp").css("opacity", "100%");
	$("#estrela5Comp").css("opacity", "100%");
});
$("#estrela2Comp").hover(() => {
	$("#estrela1Comp").prop('src', 'img/estrelaAva.png');
	$("#estrela2Comp").prop('src', 'img/estrelaAva.png');
	$("#estrela3Comp").prop('src', 'img/estrelaP.png');
	$("#estrela4Comp").prop('src', 'img/estrelaP.png');
	$("#estrela5Comp").prop('src', 'img/estrelaP.png');
	$("#estrela1Comp").css("opacity", "50%");
	$("#estrela2Comp").css("opacity", "50%");
}, () => {
	if(ava == 1){
		$("#estrela1Comp").prop('src', 'img/estrelaAva.png');
		$("#estrela2Comp").prop('src', 'img/estrelaP.png');
		$("#estrela3Comp").prop('src', 'img/estrelaP.png');
		$("#estrela4Comp").prop('src', 'img/estrelaP.png');
		$("#estrela5Comp").prop('src', 'img/estrelaP.png');
	}
	else if(ava == 2){
		$("#estrela1Comp").prop('src', 'img/estrelaAva.png');
		$("#estrela2Comp").prop('src', 'img/estrelaAva.png');
		$("#estrela3Comp").prop('src', 'img/estrelaP.png');
		$("#estrela4Comp").prop('src', 'img/estrelaP.png');
		$("#estrela5Comp").prop('src', 'img/estrelaP.png');
	}
	else if(ava == 3){
		$("#estrela1Comp").prop('src', 'img/estrelaAva.png');
		$("#estrela2Comp").prop('src', 'img/estrelaAva.png');
		$("#estrela3Comp").prop('src', 'img/estrelaAva.png');
		$("#estrela4Comp").prop('src', 'img/estrelaP.png');
		$("#estrela5Comp").prop('src', 'img/estrelaP.png');
	}
	else if(ava == 4){
		$("#estrela1Comp").prop('src', 'img/estrelaAva.png');
		$("#estrela2Comp").prop('src', 'img/estrelaAva.png');
		$("#estrela3Comp").prop('src', 'img/estrelaAva.png');
		$("#estrela4Comp").prop('src', 'img/estrelaAva.png');
		$("#estrela5Comp").prop('src', 'img/estrelaP.png');
	}
	else if(ava == 5){
		$("#estrela1Comp").prop('src', 'img/estrelaAva.png');
		$("#estrela2Comp").prop('src', 'img/estrelaAva.png');
		$("#estrela3Comp").prop('src', 'img/estrelaAva.png');
		$("#estrela4Comp").prop('src', 'img/estrelaAva.png');
		$("#estrela5Comp").prop('src', 'img/estrelaAva.png');
	}
	else{
		$("#estrela1Comp").prop('src', 'img/estrelaP.png');
		$("#estrela2Comp").prop('src', 'img/estrelaP.png');
		$("#estrela1Comp").css("opacity", "100%");
		$("#estrela2Comp").css("opacity", "100%");
	}
	$("#estrela1Comp").css("opacity", "100%");
	$("#estrela2Comp").css("opacity", "100%");
	$("#estrela3Comp").css("opacity", "100%");
	$("#estrela4Comp").css("opacity", "100%");
	$("#estrela5Comp").css("opacity", "100%");
});
$("#estrela3Comp").hover(() => {
	$("#estrela1Comp").prop('src', 'img/estrelaAva.png');
	$("#estrela2Comp").prop('src', 'img/estrelaAva.png');
	$("#estrela3Comp").prop('src', 'img/estrelaAva.png');
	$("#estrela4Comp").prop('src', 'img/estrelaP.png');
	$("#estrela5Comp").prop('src', 'img/estrelaP.png');
	$("#estrela1Comp").css("opacity", "50%");
	$("#estrela2Comp").css("opacity", "50%");
	$("#estrela3Comp").css("opacity", "50%");
}, () => {
	if(ava == 1){
		$("#estrela1Comp").prop('src', 'img/estrelaAva.png');
		$("#estrela2Comp").prop('src', 'img/estrelaP.png');
		$("#estrela3Comp").prop('src', 'img/estrelaP.png');
		$("#estrela4Comp").prop('src', 'img/estrelaP.png');
		$("#estrela5Comp").prop('src', 'img/estrelaP.png');
	}
	else if(ava == 2){
		$("#estrela1Comp").prop('src', 'img/estrelaAva.png');
		$("#estrela2Comp").prop('src', 'img/estrelaAva.png');
		$("#estrela3Comp").prop('src', 'img/estrelaP.png');
		$("#estrela4Comp").prop('src', 'img/estrelaP.png');
		$("#estrela5Comp").prop('src', 'img/estrelaP.png');
	}
	else if(ava == 3){
		$("#estrela1Comp").prop('src', 'img/estrelaAva.png');
		$("#estrela2Comp").prop('src', 'img/estrelaAva.png');
		$("#estrela3Comp").prop('src', 'img/estrelaAva.png');
		$("#estrela4Comp").prop('src', 'img/estrelaP.png');
		$("#estrela5Comp").prop('src', 'img/estrelaP.png');
	}
	else if(ava == 4){
		$("#estrela1Comp").prop('src', 'img/estrelaAva.png');
		$("#estrela2Comp").prop('src', 'img/estrelaAva.png');
		$("#estrela3Comp").prop('src', 'img/estrelaAva.png');
		$("#estrela4Comp").prop('src', 'img/estrelaAva.png');
		$("#estrela5Comp").prop('src', 'img/estrelaP.png');
	}
	else if(ava == 5){
		$("#estrela1Comp").prop('src', 'img/estrelaAva.png');
		$("#estrela2Comp").prop('src', 'img/estrelaAva.png');
		$("#estrela3Comp").prop('src', 'img/estrelaAva.png');
		$("#estrela4Comp").prop('src', 'img/estrelaAva.png');
		$("#estrela5Comp").prop('src', 'img/estrelaAva.png');
	}
	else{
		$("#estrela1Comp").prop('src', 'img/estrelaP.png');
		$("#estrela2Comp").prop('src', 'img/estrelaP.png');
		$("#estrela3Comp").prop('src', 'img/estrelaP.png');
		$("#estrela1Comp").css("opacity", "100%");
		$("#estrela2Comp").css("opacity", "100%");
		$("#estrela3Comp").css("opacity", "100%");
	}
	$("#estrela1Comp").css("opacity", "100%");
	$("#estrela2Comp").css("opacity", "100%");
	$("#estrela3Comp").css("opacity", "100%");
	$("#estrela4Comp").css("opacity", "100%");
	$("#estrela5Comp").css("opacity", "100%");
});
$("#estrela4Comp").hover(() => {
	$("#estrela1Comp").prop('src', 'img/estrelaAva.png');
	$("#estrela2Comp").prop('src', 'img/estrelaAva.png');
	$("#estrela3Comp").prop('src', 'img/estrelaAva.png');
	$("#estrela4Comp").prop('src', 'img/estrelaAva.png');
	$("#estrela5Comp").prop('src', 'img/estrelaP.png');
	$("#estrela1Comp").css("opacity", "50%");
	$("#estrela2Comp").css("opacity", "50%");
	$("#estrela3Comp").css("opacity", "50%");
	$("#estrela4Comp").css("opacity", "70%");
}, () => {
	if(ava == 1){
		$("#estrela1Comp").prop('src', 'img/estrelaAva.png');
		$("#estrela2Comp").prop('src', 'img/estrelaP.png');
		$("#estrela3Comp").prop('src', 'img/estrelaP.png');
		$("#estrela4Comp").prop('src', 'img/estrelaP.png');
		$("#estrela5Comp").prop('src', 'img/estrelaP.png');
	}
	else if(ava == 2){
		$("#estrela1Comp").prop('src', 'img/estrelaAva.png');
		$("#estrela2Comp").prop('src', 'img/estrelaAva.png');
		$("#estrela3Comp").prop('src', 'img/estrelaP.png');
		$("#estrela4Comp").prop('src', 'img/estrelaP.png');
		$("#estrela5Comp").prop('src', 'img/estrelaP.png');
	}
	else if(ava == 3){
		$("#estrela1Comp").prop('src', 'img/estrelaAva.png');
		$("#estrela2Comp").prop('src', 'img/estrelaAva.png');
		$("#estrela3Comp").prop('src', 'img/estrelaAva.png');
		$("#estrela4Comp").prop('src', 'img/estrelaP.png');
		$("#estrela5Comp").prop('src', 'img/estrelaP.png');
	}
	else if(ava == 4){
		$("#estrela1Comp").prop('src', 'img/estrelaAva.png');
		$("#estrela2Comp").prop('src', 'img/estrelaAva.png');
		$("#estrela3Comp").prop('src', 'img/estrelaAva.png');
		$("#estrela4Comp").prop('src', 'img/estrelaAva.png');
		$("#estrela5Comp").prop('src', 'img/estrelaP.png');
	}
	else if(ava == 5){
		$("#estrela1Comp").prop('src', 'img/estrelaAva.png');
		$("#estrela2Comp").prop('src', 'img/estrelaAva.png');
		$("#estrela3Comp").prop('src', 'img/estrelaAva.png');
		$("#estrela4Comp").prop('src', 'img/estrelaAva.png');
		$("#estrela5Comp").prop('src', 'img/estrelaAva.png');
	}
	else{
		$("#estrela1Comp").prop('src', 'img/estrelaP.png');
		$("#estrela2Comp").prop('src', 'img/estrelaP.png');
		$("#estrela3Comp").prop('src', 'img/estrelaP.png');
		$("#estrela4Comp").prop('src', 'img/estrelaP.png');
		$("#estrela1Comp").css("opacity", "100%");
		$("#estrela2Comp").css("opacity", "100%");
		$("#estrela3Comp").css("opacity", "100%");
		$("#estrela4Comp").css("opacity", "100%");
	}
	$("#estrela1Comp").css("opacity", "100%");
	$("#estrela2Comp").css("opacity", "100%");
	$("#estrela3Comp").css("opacity", "100%");
	$("#estrela4Comp").css("opacity", "100%");
	$("#estrela5Comp").css("opacity", "100%");
});
$("#estrela5Comp").hover(() => {
	$("#estrela1Comp").prop('src', 'img/estrelaAva.png');
	$("#estrela2Comp").prop('src', 'img/estrelaAva.png');
	$("#estrela3Comp").prop('src', 'img/estrelaAva.png');
	$("#estrela4Comp").prop('src', 'img/estrelaAva.png');
	$("#estrela5Comp").prop('src', 'img/estrelaAva.png');
	$("#estrela1Comp").css("opacity", "50%");
	$("#estrela2Comp").css("opacity", "50%");
	$("#estrela3Comp").css("opacity", "50%");
	$("#estrela4Comp").css("opacity", "50%");
	$("#estrela5Comp").css("opacity", "50%");
}, () => {
	if(ava == 1){
		$("#estrela1Comp").prop('src', 'img/estrelaAva.png');
		$("#estrela2Comp").prop('src', 'img/estrelaP.png');
		$("#estrela3Comp").prop('src', 'img/estrelaP.png');
		$("#estrela4Comp").prop('src', 'img/estrelaP.png');
		$("#estrela5Comp").prop('src', 'img/estrelaP.png');
	}
	else if(ava == 2){
		$("#estrela1Comp").prop('src', 'img/estrelaAva.png');
		$("#estrela2Comp").prop('src', 'img/estrelaAva.png');
		$("#estrela3Comp").prop('src', 'img/estrelaP.png');
		$("#estrela4Comp").prop('src', 'img/estrelaP.png');
		$("#estrela5Comp").prop('src', 'img/estrelaP.png');
	}
	else if(ava == 3){
		$("#estrela1Comp").prop('src', 'img/estrelaAva.png');
		$("#estrela2Comp").prop('src', 'img/estrelaAva.png');
		$("#estrela3Comp").prop('src', 'img/estrelaAva.png');
		$("#estrela4Comp").prop('src', 'img/estrelaP.png');
		$("#estrela5Comp").prop('src', 'img/estrelaP.png');
	}
	else if(ava == 4){
		$("#estrela1Comp").prop('src', 'img/estrelaAva.png');
		$("#estrela2Comp").prop('src', 'img/estrelaAva.png');
		$("#estrela3Comp").prop('src', 'img/estrelaAva.png');
		$("#estrela4Comp").prop('src', 'img/estrelaAva.png');
		$("#estrela5Comp").prop('src', 'img/estrelaP.png');
	}
	else if(ava == 5){
		$("#estrela1Comp").prop('src', 'img/estrelaAva.png');
		$("#estrela2Comp").prop('src', 'img/estrelaAva.png');
		$("#estrela3Comp").prop('src', 'img/estrelaAva.png');
		$("#estrela4Comp").prop('src', 'img/estrelaAva.png');
		$("#estrela5Comp").prop('src', 'img/estrelaAva.png');
	}
	else{
		$("#estrela1Comp").prop('src', 'img/estrelaP.png');
		$("#estrela2Comp").prop('src', 'img/estrelaP.png');
		$("#estrela3Comp").prop('src', 'img/estrelaP.png');
		$("#estrela4Comp").prop('src', 'img/estrelaP.png');
		$("#estrela5Comp").prop('src', 'img/estrelaP.png');
		$("#estrela1Comp").css("opacity", "100%");
		$("#estrela2Comp").css("opacity", "100%");
		$("#estrela3Comp").css("opacity", "100%");
		$("#estrela4Comp").css("opacity", "100%");
		$("#estrela5Comp").css("opacity", "100%");
	}
	$("#estrela1Comp").css("opacity", "100%");
	$("#estrela2Comp").css("opacity", "100%");
	$("#estrela3Comp").css("opacity", "100%");
	$("#estrela4Comp").css("opacity", "100%");
	$("#estrela5Comp").css("opacity", "100%");
});
function envForm(i){
	comentAva = document.getElementById("comentComp" + i);
	if(comentAva.value.length == 0){
		swal("Deixe seu comentário!", "Escreva um comentário sobre o produto adquirido!", "error");
	}
	else if(ava == 0){
		swal("Selecione as estrelas.", "Selecione a quantidade de estrelas de seu produto!", "error");
	}
	else{
		document.getElementById('formAvaComp' + i).submit();
	}
}
$(".cancPedido").click(() => {
	document.getElementById("formCanPed").submit();
});