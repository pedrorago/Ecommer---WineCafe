@extends('layouts.app')

@section('title', 'Sobre')

@section('content')

@include('templates.headerBlog')

<section id="BannerInstitucional" style="height: 21.875em;">
	<span class="Institucional-blend"></span>
	<!-- Crop Livre -->
    <img src="img/banner4.jpg">
    <!-- Crop Livre -->
    <h1 class="Heading1">Blog Wine Café</h1>

</section>

<section id="Blog-catalogo">
    <div class="container">
        <main onload="scroll_produtos()" class="block">

            @include('includes.blog')

        </main>
        <div class="btn-load btn-primary" style="display:none;">CARREGANDO OUTRAS...</div>
    </div>
</section>

<!--  Apenas temporário, já irei ajeitar -->

<style>
    .overflow{
        overflow: hidden;
    }
    .header-principal{
    	margin-top: 0em;
    }
    #Produtos-header{
    	margin-top: 6em;
    }
    .postagens-desc h1, .postagens-desc h3, .postagens-desc p {
        color: #5C0206;
    }
</style>

@stop

