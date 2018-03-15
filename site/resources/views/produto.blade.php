@extends('layouts.app')

@section('title', 'Produto')


@section('content')

@include('templates.produtosBreadcumb')

<section id="ProdutoSingle">
	<div class="container">
		<main>
			<div class="produto-view">
				<img src="img/banner1.jpg" id="photos-view1">
			</div>
			<div class="produto-details">
				<h1 class="Heading3">Vinho de exemplo</h1>
				<span class="CodigoProduto Paragraph1">Ref.: 125</span>
				
				<div class="descricao Paragraph2">
					Pequena descrição do produto. While some people really seem to have a knack for barbequing – always grilling up a perfect meal – for the rest of us, it is something that must be learned, not something that just comes naturally. Believe it or not, there is technique involved. It’s not just a matter of following your cooking instincts.  
				</div>

				<div class="produto-controles">
					<div class="preco">
						<p class="Display2 produto-preco">
							R$ 120,00
							<span class='Paragraph1'>Unidade</span>		
						</p>
					</div>
					<span class="selects-produto">
						<label for="quantidadeProduto" class="label">Quantidade</label>
						<select name="Quantidade" class="input select-cart" id="quantidadeProduto">
							<option value="">Selecione...</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
						</select>
					</span>
				</div>
				
				<button class="btn-primary btn-add-carrinho">Adicionar a sacola</button>

			</div>
		</main>
	</div>
	<div class="main-relacionados">
		<div class="container">
			<div class="relacionados">
				<h2 class="Heading3">Outros produtos</h2>
				@include('includes.produtosRelacionados')
			</div>
		</div>
	</div>
</section>

@stop



<style>
	header {
		height: 5em;
		margin-top: -5em !important;
	}
	.overflow{
		overflow: hidden;
	}	
	#Produtos-header {
		margin-top: -3.5em !important;
	}
	@media(max-width: 425px) {
		.Produtos-navbar {
			height: 8.5em !important;
		}
		.Produtos-navbar li {
			height: 32% !important;
			width: 18% !important;
		}
	}

	.produtoSingledivider{
		font-family: Source Sans Pro;
		margin-left: 1em;
		margin-right: 1em;
	}
	.produto-box h3, .produto-box h4 {
		color: #FFFFFF;
	}
	
</style>