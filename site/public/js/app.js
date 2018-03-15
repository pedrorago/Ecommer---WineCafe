$(function(){

	var FiltroBox = $("#filtroBox");
	var FormularioFiltro = $(".filtro-formulario");
	var Seta = $(".seta-filtro");
	var AreaClick = $(".iconsMeio");
	var AreaClick2 = $ (".seta-box");
	AreaClick.on("click", function(){
		FiltroBox.toggleClass("Box-ativo");
		setTimeout(function(){
			FormularioFiltro.toggle();
			Seta.toggleClass("seta-inversa");
		},100);
	});
	AreaClick2.on("click", function(){
		FiltroBox.toggleClass("Box-ativo");
		setTimeout(function(){
			FormularioFiltro.toggle();
			Seta.toggleClass("seta-inversa");
		},100);
	});
	 $("body").on("click", '.blur', function(){
        $(".content").removeClass("blur");
        $(".carrinho-box").show();
        $(".formLogin").removeClass("formLoginOn");
        $(".formLogin").removeClass("formLoginSmall");
        $(".formRecuperar").removeClass("formRecuperarOn");
        $(".formCadastro").removeClass("formCadastroOn");
        $(".formLogin").find("#email").val('');
        $(".formLogin").find("#senha").val('');
        $('.formCarrinho').removeClass("formCarrinhoOn");
        $(".formLogado").removeClass("formLogadoOn");
        $('.minhaContaLinkDisable').show();
        $('.minhaContaLink').show();
        $('.orcamento-modal').removeClass("modalOn");
    });

    $(".minhaContaLink").on("click", function(){
        $(".content").toggleClass("blur");
        $(".formCarrinho").removeClass("formCarrinhoOn");
        $(".formLogin").toggleClass("formLoginOn");
        $(".formLogin").removeClass("formLoginSmall");
        $(".formRecuperar").removeClass("formRecuperarOn");
        $(".formCadastro").removeClass("formCadastroOn");
        $(".formLogin").find("#email").val('');
        $(".formLogin").find("#senha").val('');
        //$("form").addClass('invisible').removeClass('visible');
        $(".formLogin").addClass('visible').removeClass('invisible');
        $(".formLogado").addClass('visible').removeClass('invisible');
        return false;
    });

    $(".minhaContaLinkDisable").on("click", function(){
        $(".content").toggleClass("blur");
        $(".formLogin").removeClass("formLoginOn");
       $(".formRecuperar").removeClass("formRecuperarOn");
       $(".formCadastro").removeClass("formCadastroOn");
       $(".formLogin").find("#email").val('');
       $(".formLogin").find("#senha").val('');
       $(".formLogado").toggleClass("formLogadoOn");
       $('.formCarrinho').removeClass("formCarrinhoOn");
        return false;
    });

    $(".recuperarSenha").on("click", function() {
        $(".formRecuperar").toggleClass("formRecuperarOn");
        $(".formLogin").addClass("formLoginSmall");
        $(".formLogin").find("#email").val('');
        $(".formLogin").find("#senha").val('');
        //$("form").addClass('invisible').removeClass('visible');
        $(".formRecuperar").addClass('visible').removeClass('invisible');
        $(".formLogin").addClass('invisible').removeClass('visible');

        $(".formCarrinho").removeClass("formCarrinhoOn");
        $(".formLogin").removeClass("formLoginOn");
        $(".formLogin").removeClass("formLoginSmall");
        $(".formCadastro").removeClass("formCadastroOn");
        $(".formLogin").removeClass('visible');
        $(".formLogado").removeClass('visible');
    });

    $(".recuperarVoltar").on("click",function(){
        $(".formRecuperar").removeClass("formRecuperarOn");
        $(".formLogin").removeClass("formLoginSmall");
        $(".formRecuperar").find("#email").val('');
        //$("form").addClass('invisible').removeClass('visible');
        $(".formLogin").addClass('visible').removeClass('invisible');
        $(".formLogado").addClass('visible').removeClass('invisible');
    });

    $(".cadastrarMe").on("click", function(){
        $(".formCadastro").addClass("formCadastroOn");
        $(".formRecuperar").removeClass("formRecuperarOn");
        $(".formLogin").find("#email").val('');
        $(".formLogin").find("#senha").val('');
        //$("form").addClass('invisible').removeClass('visible');
        $(".formCadastro").addClass('visible').removeClass('invisible');
    });

    $(".cadastrarVoltar").on("click", function(){
        $(".formCadastro").removeClass("formCadastroOn");
        $(".formCadastro").find("#email").val('');
        $(".formCadastro").find("#nome").val('');
        $(".formCadastro").find("#senha").val('');
        //$("form").addClass('invisible').removeClass('visible');
        $(".formLogin").addClass('visible').removeClass('invisible');
        $(".formLogado").addClass('visible').removeClass('invisible');
    });

    /*Carrinho */

    $(".carrinho-box").on("click", function(){
        $(".formCadastro").removeClass("formCadastroOn");
        $(".formRecuperar").removeClass("formRecuperarOn");
        $(".formLogin").removeClass('visible').removeClass('invisible');
        $(".formLogado").removeClass('visible').removeClass('invisible');
        $(".formLogin").removeClass("formLoginOn");
        $(".formLogin").removeClass("formLoginSmall");
        $(".formCarrinho").toggleClass("formCarrinhoOn");
        $("#cepCarrinho").val('');

        $(".formCadastro").removeClass("formCadastroOn");

    });

    /* Meus pedidos e dados */
    var email = $(".perfil-dados-form").find("#email");
    var nome = $(".perfil-dados-form").find("#nome");
    var cpf = $(".perfil-dados-form").find("#cpf");
    var telefone = $(".perfil-dados-form").find("#telefone");
    var cep = $(".perfil-dados-form").find("#cep");
    var endereco = $(".perfil-dados-form").find("#endereco");
    var numero = $(".perfil-dados-form").find("#numero");
    var complemento = $(".perfil-dados-form").find("#complemento");
    var bairro = $(".perfil-dados-form").find("#bairro");
    var lugar = $(".perfil-dados-form").find("#lugar");
    var senhaAntiga = $(".perfil-dados-form").find("#senhaAntiga");
    var senhaNova = $(".perfil-dados-form").find("#senhaNova");
    var dia = $(".perfil-dados-form").find("#dia");
    var mes = $(".perfil-dados-form").find("#mes");
    var ano = $(".perfil-dados-form").find("#ano");

    $(".meusPedidosLink").on("click", function() {
        $(".perfil-dados").hide();
        $(".perfil-pedidos").fadeIn(500);
        $(".perfil-pedidos").addClass("perfilOn");
        $(this).addClass("activeLink");
        $(".meusDadosLink").removeClass("activeLink");
    });

    $(".meusDadosLink").on("click", function() {
        $(".perfil-dados").fadeIn(500);
        $(".perfil-pedidos").hide();
        $(".perfil-pedidos").removeClass("perfilOn");
        $(this).addClass("activeLink");
        $(".meusPedidosLink").removeClass("activeLink");
    });


     /* Checkout */ 


    $(".meusDadosPessoais").on("click", function() {
        $(".box-esquerdaE").fadeOut(10);
        $(".box-esquerdaP").fadeOut(10);
        $(".box-esquerdaC").fadeIn(1500);
        // $(".perfil-pedidos").addClass("perfilOn");
        $(this).addClass("activeLink");
        $(".minhasEntregas").removeClass("activeLink");
        $(".meusPagamentos").removeClass("activeLink");
    });
    $(".minhasEntregas").on("click", function() {
        $(".box-esquerdaP").fadeOut(10);
        $(".box-esquerdaC").fadeOut(10);
        $(".box-esquerdaE").fadeIn(1500);
        // $(".perfil-pedidos").removeClass("perfilOn");
        $(this).addClass("activeLink");
        $(".meusDadosPessoais").removeClass("activeLink");
        $(".meusPagamentos").removeClass("activeLink");
    });
    $(".meusPagamentos").on("click", function() {
        $(".box-esquerdaC").fadeOut(10);
        $(".box-esquerdaE").fadeOut(10);
        $(".box-esquerdaP").fadeIn(1500);
        // $(".perfil-pedidos").removeClass("perfilOn");
        $(this).addClass("activeLink");
        $(".meusDadosPessoais").removeClass("activeLink");
        $(".minhasEntregas").removeClass("activeLink");
    });
    
    $(".inputBoleto").on('click', function(){
        $(".cartaoForm").fadeOut(200);
        $(".cartaoForm").removeClass('flexbox');
        $(".btnConfirmar").addClass('flexbox');
        $(".desc-boleto").fadeIn(200);
        $(".btnConfirmar").fadeIn(200);

        $(".#nomeCartao").val('');
        $(".#cpfTitular").val('');
        $(".#numeroCartao").val('');
        $(".#codCarta").val('');

    });
    $(".inputCartao").on('click', function(){
        $(".btnConfirmar").removeClass('flexbox');
        $(".cartaoForm").addClass('flexbox');
        $(".desc-boleto").fadeOut(200);
        $(".btnConfirmar").fadeOut(200);
        $(".cartaoForm").fadeIn(200);

    });

    $(".frete-checkout").on("click", ".calculaCEP", function(){

        $('.cupomForm').hide();
        $('.cupomForm').removeClass('cepFormOn');
        $('.cupomResumo').hide();
        $('.btnCupom').hide();
        $('.box-direitaC').removeClass('cupomOn');

        $('.calculaCEPForm').toggle();
        $('.calculaCEPForm').toggleClass('cepFormOn');
        $('.box-direitaC').toggleClass('cepOn');
        $('.cepResumo').toggle();
        $('.btnCep').toggle();


    });


    $(".adicionaCupom").on('click', function(){
        $('.calculaCEPForm').hide();
        $('.calculaCEPForm').removeClass('cepFormOn');
        $('.cepResumo').hide();
        $('.btnCep').hide();
        $('.box-direitaC').removeClass('cepOn');


        $('.cupomForm').toggle();
        $('.cupomForm').toggleClass('cepFormOn');
        $('.box-direitaC').toggleClass('cupomOn');
        $('.cupomResumo').toggle();
        $('.btnCupom').toggle();
    });

    /*------------------------------------------------------ */

    
});