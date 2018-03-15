@extends('layouts.app')

@section('title', 'Perfil')

@section('content')

@include('templates.headerMinhaConta')

<section id="Perfil">
	<div class="container">
		<main class="perfil-pedidos">
			<div class="pedidos-boxleft">
				<h1 class="Heading3">Meus pedidos</h1>

				<div class="perfil-pedidosLinhas">
					<div class="box-pedidos">
						<span class="pedidos-desc">
							<p class='bold'>Data de pedido: <span class="regular"> 10/08/2017</span></p>
							<p class='bold'>Número do pedido: <span class="regular"> 3332541</span></p>
							<p class='bold'>Entrega para: <span class="regular"> R. Gervásio Pires, 52 Recife/PE</span></p>
						</span>
						<span class="pedidos-status">
							<button class="btn-status aguardando">aguardando</button>
						</span>
					</div>
				</div>

<!-- 				<?php

				if (empty($pedidos)) {
					echo "<span class='empty'>Não há pedidos</span>";
				}
				
				?> -->
			</div>
			<div class="pedidos-boxright">
				<div class="outros-produtos">
					<div class="contato-box">
						
						<form method="post" onsubmit="return false;" class="form-contato">
							
							<h3 class='Heading3'>Em que podemos te ajudar?</h3>
							<span class='Paragraph2'>Selecione o pedido referente às suas dúvidas, sugestões ou críticas.</span>
							
							<label>
								<span>Nº do pedido</span>
								<select name="pedido">
									<option value="">Seus pedidos...</option>
									<option value=""></option>
								</select>
							</label>
							<label>
								<span>Seu nome</span>
								<input type="text" name="nome" placeholder="Digite seu nome">
							</label>
							<label>
								<span>Email</span>
								<input type="email" name="email" placeholder="Digite seu email">
							</label>
							
							<label>
								<span>Mensagem</span>
								<textarea name="mensagem" placeholder="Digite seu texto"></textarea>
							</label>
							<label style="margin-bottom: 0em;">
								<button type="submit" class='btn-secondary'>Enviar</button>
							</label>
							<div class="responseContatoPedido"></div>
						</form>
					</div>
				</div>
			</div>
		</main>
		<main class="perfil-dados">
			<h1 class="Heading3">Meus dados</h1>
			<form class="perfil-dados-form" method="post" onsubmit="return false;">
				<div class="perfil-dados-pessoais">
					<h2 class="Heading4">Dados pessoais</h2>
					<label for="email" class="label label50">Email</label>
					<label for="nome" class="label label50">Nome completo</label>
					<input type="email"  id="email" name="email" class="input input50" value="">
					<input type="text" id="nome" name="nome" class="input input50" value="">
					<label for="cpf" class="label label50">CPF</label>
					<label for="telefone" class="label label50">Telefone</label>
					<input type="text" class="input input50" id="cpf" name="cpf" value="" data-mask="000.000.000-00">
					<input type="tel" class="input input50 input-telefone" id="telefone" name="telefone" value="">
					<label class="label label100" for="data">Data de nascimento *</label>
					<select name="dia" class="input" id="dia">
						<option value="">Dia</option>
						<?php 
						$dia = 1;
						while($dia <= 31):
							?>
						<option value=""><?=$dia?></option><?php
						$dia++;
						endwhile;
						?>
					</select>
					<select name="mes" class="input" id="mes">
						<option value="">Mês</option>
						<?php 
						$mes = 01;
						while($mes <= 12):
							?><option value="<?=$mes?>"><?=$mes?></option><?php
						$mes++;
						endwhile;
						?>
					</select>
					<select name="ano" class="input" id="ano">
						<option value="">Ano</option>
						<?php 
						$ano = 2014;
						while($ano >= 1800):
							?><option value="<?=$ano?>"><?=$ano?></option><?php
						$ano--;
						endwhile;
						?>
					</select>
				</div>
				<div class="perfil-dados-endereco">
					<h2 class="Heading3">Endereço</h2>
					<label for="cep" class="label label50">CEP</label>
					<label for="Endereco" class="label label50">Endereço</label>
					<input type="text" class="input input50" id="cep" name="cep" value="" data-mask="00000-000" onkeyup="busca_cep(this.value)">
					<input type="text" class="input input50 endereco" id="endereco" name="endereco" value="">
					<label for="numero" class="label width20">Número</label>
					<label for="complemento" class="label width80">Complemento</label>
					<input type="text" class="input width20" id="numero" placeholder="000" name="numero" value="">
					<input type="text" class="input width80" id="complemento" name="complemento" value="">
					<label for="bairro" class="label label50">Bairro</label>
					<label for="lugar" class="label label50">Cidade/Estado</label>
					<input type="text" class="input input50 bairro" placeholder="Seu bairro" name="bairro" id="bairro" value="">
					<input type="text" class="input input50 lugar" placeholder="Digite sua cidade/estado" name="lugar" id="lugar" value="">
				</div>
				<div class="perfil-dados-senha">
					<h2 class="Heading3">Alterar a senha de acesso</h2>
					<label for="senhaAntiga" class="label label50">Antiga senha</label>
					<label for="senhaNova" class="label label50">Nova senha</label>
					<input type="password" class="input input50" placeholder="Digite sua antiga senha" name="senha_antiga" value="">
					<input type="password" class="input input50" placeholder="Digite sua nova senha" name="senha_nova" value="">
				</div>
				<div class="perfil-dados-botao">
					<button class="btn-secondary btn-editar-dados" type="submit">Salvar as alterações</button>
				</div>
			</form>
		</main>
	</div>
</section>


@stop
<style>
	.content {
		background: #FBFAF9;
	}
	.overflow{
		overflow: hidden;
	}
	.Produtos-navbar ul {
		justify-content: flex-start !important;
	}	

	.pedidos-boxright .contato-box {
		max-width: 407px;
		border: 1px solid rgba(110,110,110,0.4);
		border-radius: 5px;
		background-color: #FFFFFF;
		box-shadow: 0 4px 14px 0 rgba(110,110,110,0.4);
		display: flex;
		margin-left: auto;
		margin-right: auto;
		margin-top: 40px;
	}

	.pedidos-boxright .contato-box h3{
		color: #273142;
		font-family: "Roboto Slab";
		font-size: 24px;
		line-height: 32px;
		margin-bottom: 10px;
	}

	.pedidos-boxright .contato-box span{
		color: #2A2929;
		font-weight: 500;
		line-height: 22px;
		margin-bottom: 24px;
		display: block;
	}

	.pedidos-boxright .contato-box form {
		padding: 30px 24px 30px 24px;
		width: 100%;
		display: block;
	}

	.pedidos-boxright .contato-box form label {
		display: block;
		width: 100%;
		margin-bottom: 20px;
	}

	.pedidos-boxright .contato-box form label span {
		width: 100%;
		display: block;
		color: #273142;
		font-family: "Source Sans Pro";
		font-size: 14px;
		line-height: 18px;
		margin-bottom: 9px;
	}

	.pedidos-boxright .contato-box form label input, .pedidos-boxright .contato-box form label select {
		width: 100%;
		border-radius: 3px;
		background-color: #FFFFFF;
		padding: 10px 12px;
		border: 1px solid rgba(110,110,110,0.4);
		color: #273142;
		font-family: "Encode Sans Semi Condensed";
		font-size: 14px;
		font-weight: 500;
		line-height: 17px;
	}

	.pedidos-boxright .contato-box form label input:focus {
		box-shadow: 0 2px 4px 0 rgba(15,151,222,0.3) !important;
		border: 1px solid #0F97DE !important;
		color: #273142 !important;
		font-weight: 500;
		background-color: #fff !important;
	}

	.pedidos-boxright .contato-box form label select:focus {
		box-shadow: 0 2px 4px 0 rgba(15,151,222,0.3) !important;
		border: 1px solid #0F97DE !important;
		color: #273142 !important;
		font-weight: 500;
		background-color: #fff !important;
	}

	.pedidos-boxright .contato-box form label textarea:focus {
		box-shadow: 0 2px 4px 0 rgba(15,151,222,0.3) !important;
		border: 1px solid #0F97DE !important;
		color: #273142 !important;
		font-weight: 500;
		background-color: #fff !important;
	}



	.pedidos-boxright .contato-box form label textarea {
		height: 95px;
		width: 100%;
		border: 1px solid rgba(110,110,110,0.4);
		border-radius: 3px;
		background-color: #FFFFFF;
		padding: 10px 12px;
		color: #273142;
		font-family: "Encode Sans Semi Condensed";
		font-size: 14px;
		font-weight: 500;
		line-height: 17px;
	}

	.pedidos-boxright .contato-box form label button {

		padding: 10px 37.35px;
	}

</style>