@extends('layouts.app')

@section('title', 'Checkout')

@section('content')

@include('templates.headerCheckout')

<section id="Checkout">
	<div class="container">
		<main>
			<div class="box-esquerdaC">
				<form method="post" onsubmit="return false;" class="form-checkout-dados">
					<label for="email" class="label">Email *</label>
					<label for="nome" class="label">Nome completo * </label>
					<input type="email" class="input" name="email" id="email" placeholder="email@email.com" value="">
					<input type="text" class="input" name="nome" id="nome" placeholder="Digite seu nome" value="">
					<label for="cpf" class="label">Cpf</label>
					<label for='telefone' class="label">Telefone</label>
					<input type="text" class="input" name="cpf" id="cpf" placeholder="000.000.000-00" data-mask="000.000.000-00" value="">
					<input type="tel" class="input input-telefone" name="telefone" id="telefone" placeholder="(00) 99999-9999" value="">
					<label class="label label100" for="data">Data de nascimento *</label>
					<select name="dia" class="input" id="dia">
						<option value="">Dia</option>
						<?php 
						$dia = 1;
						while($dia <= 31):
							?>
						<option value="dia"><?=$dia?></option><?php
						$dia++;
						endwhile;
						?>
					</select>
					<select name="mes" class="input" id="mes">
						<option value="">Mês</option>
						<?php
						$mes = 01;
						while($mes <= 12):
							?><option value="<?= $mes ?>"><?=$mes?></option><?php
						$mes++;
						endwhile;
						?>
					</select>
					<select name="ano" class="input selectAno" id="ano">
						<option value="">Ano</option>
						<?php 

						$ano = 2014;
						while($ano >= 1800):
							?><option value="<?=$ano?>"><?=$ano?></option><?php
						$ano--;
						endwhile;
						?>
					</select><br>
					

					
					<label for="senhaNew" class="label senhaNew">Criar uma senha de acesso</label>
					<input type="password" class="input" name="senha" id="senhaNew">
					<label for="senharRepeat" class="label senharRepeat">Repetir senha</label>
					<input type="password" class="input" name="senhaRepeat" id="senhaRepeat">


					<button class="btn-secondary" >  Salvar e ir à entrega  </button>

				</form>
			</div>
			<div class="box-esquerdaE">
				<form method="post" onsubmit="return false;" class="form-checkout-entrega">
					<label for="cep" class="label boxE-width1">CEP *</label>
					<label for="endereco" class="label boxE-width1 endereco-label">Endereço *</label>
					<input type="text" name="cep" id="cep" placeholder="00000-000" class="input boxE-width1" data-mask="00000-000" value="">
					<input type="text" name="endereco" id="endereco" placeholder="Rua dos Alfineiros" class="input boxE-width1" value="">
					<label for="numero" class="label boxE-width2">Número *</label>
					<label for="complemento" class="label complemento-label boxE-width3 ">Complemento</label>
					<input type="text" name="numero" id="numero" class="input boxE-width2" value="">
					<input type="text" name="complemento" id="complemento" class="input boxE-width3" value="">
					<label for="bairro" class="label boxE-width1">Bairro</label>
					<label for="lugar" class="label boxE-width1 lugarForm">Cidade/Estado</label>
					<input type="text" name="bairro" class="input boxE-width1 bairro" placeholder="Digite seu bairro" value="">
					<input type="text" name="lugar" class="input boxE-width1 distrito" value="">

					<p class="label plano-h2">Escolha o tipo de entrega</p>

					<input type="radio" class="inputRadio" name='tipo' value="normal" id="normal">
					<div class="planos">
						<label for="normal" class="label planoTitulo normal-valor Paragraph2">Normal - R$ 24,00</label>
						<label for="normal" class="label planoDesc diasN conteudos">Prazo de até  15 dia(s) úteis para entrega do pedido.</label>
					</div>

					<input type="radio" class="inputRadio" name='tipo' value="expresso" id="expressa">
					<div class="planos">
						<label for="expressa" class="label planoTitulo expressa-valor Paragraph2">Expressa - R$ 33,00 </label>
						<label for="expressa" class="label planoDesc diasE conteudos">Prazo de até 8 dia(s) úteis para entrega do pedido.</label>
					</div>

					<button class="btnPagamento btn-secondary" type="submit">Salvar e ir ao pagamento</button>
					<a href="javascript:void(0)" class="btn-primary btnPagamentoVoltar meusDadosPessoais">Voltar</a>
				</form>
			</div>
			<div class="box-esquerdaP">
				<form method="post" onsubmit="return false;" class="form-checkout-pagamento">
					<p class="label plano-h2 label">Escolha a forma de pagamento</p>
					<input type="radio" class="inputRadio inputCartao" name='planos' id="carto" value='cartao'>
					<div class="planos">
						<label for="normal" class="label planoTitulo Paragraph2">CARTÃO DE CRÉDITO</label>
						<label for="normal" class="label planoDesc">Você pode parcelar o pagamento em até 6x.</label>
					</div>

					<input type="radio" class="inputRadio inputBoleto" name='planos' id="boleto" value='boleto'>
					<div class="planos">
						<label for="expressa" class="label planoTitulo Paragraph2">BOLETO</label>
						<label for="expressa" class="label planoDesc">Pagamento a vista</label>
					</div>


					<p class="Paragraph1 desc-boleto ">O boleto bancário será exibido após a confirmação da compra e poderá ser impresso para pagamento em qualquer agência bancária, ou ter o número anotado para pagamento pelo telefone ou internet.</p>

					<span class="cartaoForm">
						<label for="nomeCartao" class="label boxE-width1">Nome impresso no cartão</label>
						<label for="cpfTitular" class="label boxE-width1 cpfTitularc">CPF do titular</label>
						<input type="text" class="input boxE-width1" name="nomeCartao" id="nomeCartao">
						<input type="text" class="input boxE-width1" name="cpfTitular" id="cpfTitular" data-mask="000.000.000-00">		

						<label for="mes" class="label validoLabel">Válido até</label>
						<label for="mes" class="label numeroLabel">Número do cartão</label>

						<select name="mes" class="input mesCartao" id="mes">
							<option value="">MM</option>
							<?php 
							$mes = 01;
							while($mes <= 12):
								?>
							<option value="<?= $mes; ?>" ><?=$mes?></option><?php
							$mes++;
							endwhile;
							?>
						</select>
						<select name="ano" class="input anoCartao" id="ano">
							<option value="">Ano</option>
							<?php 
							$ano = 2017;
							while($ano <= 2030):
								?>
							<option value="<?= $ano; ?>"><?=$ano?></option><?php
							$ano++;
							endwhile;
							?>
						</select>
						<input type="text" class="input numeroCartao" name="numeroCartao" id="numeroCartao">	
						<label for="mes" class="label codLabel">Cód. de seg.</label>
						<label for="mes" class="label parcelasLabel">Parcelas</label>
						<input type="text" class="input codCartao" name="codCartao" id="codCarta">
						<select name="parcela" class="input parcelaCartao" id="parcela">
							<option value="1">1x de R$</option>
						</select>
						<button href="javascript:void(0)" class="btnPagamento btnEfetua0r btn-secondary">eFETUAR PAGAMENTO</button>
					</span>

					<a href="javascript:void(0)" class="btnPagamento btnConfirmar btn-secondary">Confirmar compra</a>
					<a href="javascript:void(0)" class="btn-primary btnPagamentoVoltar VtEntrega minhasEntregas">Voltar</a>
				</form>
			</div>

			<div class="box-direitaC">
				<div class="produtosResumo-container">

					<div class="resumo-box">
						<span class="resumo-img">
							<img src="img/produto1.jpg">
						</span>
						<span class="resumo-desc">
							<h4 class='Paragraph2'>Vinho de exemplo</h4>
							<p class='conteudos'>R$ 120,00</p>
						</span>
					</div>
				</div>
				<div class="produtosDesc-resumo">
					<p class='resumo-sub width50 resumo-font1 Heading4'>Sub-total</p>
					<p class='resumo-sub-preco resumo-font1 Heading4'>R$ 124,00</p>

					<div class="frete-checkout">
						<p class='resumo-frete width50 resumo-font1 Heading4'>Frete</p>
						<p class='resumo-frete-link resumo-link calculaCEP'>Calcular</p>
					</div>
					
<!-- 					<div class="frete-checkout">
						<p class='resumo-frete width50 resumo-font1'>Frete:</p>
						<p class='resumo-frete-link resumo-link calculaCEP'>Trocar</p>
					</div> -->

					<form class='calculaCEPForm cepCupom'>
						<input type="text" class="input inputCepCupom cepResumo" placeholder="Digite seu CEP" id="cepCheckout" data-mask="00000-000">
						<button class="btn-secondary btnCepCupom btnCep"  type="button">OK</button>
					</form>

					<p class='resumo-cupom width50 resumo-font1 Heading4 cupomP'>Cupom promocional</p>
					<p class='resumo-cupom-adicionar resumo-link adicionaCupom cupom-link'>Adicionar</p>
					<form class='cupomForm cepCupom'>
						<input type="text" class="input inputCepCupom cupomResumo" placeholder="Digite seu cupom" id="cupomCheckout" maxlength="4">
						<button class="btn-secondary btnCepCupom btnCupom" type="button">OK</button>
					</form>

					<p class='resumo-cupom-adicionar desconto-link'></p>

					<p class='resumo-total width50 resumo-negrito'>Total</p>
					<p class="resumo-total-preco resumo-negrito totalP">R$ 124,00 </p>

					<a href="/produtos" class="btn-primary">Voltar a loja</a>
				</div>
			</div>
		</main>
	</div>
</section>

<!-- Modal -->
<!-- <div class="modal" id="modal-one" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-header">
			<h2></h2>
			<a class="btn-close" aria-hidden="true">×</a>
		</div>
		<div class="modal-body">
			<p>One modal example here! :D</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn">Nice!</a>
		</div>
	</div>
</div> -->
<!-- /Modal -->

@stop
<style>
	header {
		margin-top: -5.3em !important;
	}
	.overflow{
		overflow: hidden;
	}
	.Produtos-navbar ul {
		justify-content: flex-start !important;
	}
	#Produtos-header {
		margin-top: .7em;
	} 
	.Produtos-navbar li {
		width: 15% !important;
	}
	#Produtos-header .navbar-link {
		padding: 0em 1em !important;
	}
	@media(max-width: 758px) {
		.Produtos-navbar {
			height: 2.5em !important;
		} 
		.Produtos-navbar ul {
			justify-content: space-between !important;
		}
		.Produtos-navbar li {
			height: 100% !important;
			margin-right: 0 !important;
		}
		.Produtos-navbar li:nth-child(1) {
			width: 6em
		}
		.Produtos-navbar li:nth-child(2) {
			width: 4em
		}
		.Produtos-navbar li:nth-child(3) {
			width: 5em
		}

	}
</style>