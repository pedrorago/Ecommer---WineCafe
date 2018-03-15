@extends('layouts.app')

@section('title', 'Produtos')

@section('content')

@include('templates.headerProdutos')

<section id="BannerInstitucional" style="height: 21.875em;">
	<span class="Institucional-blend"></span>
	<!-- Crop Livre -->
    <img src="img/banner4.jpg">
    <!-- Crop Livre -->
    <h1 class="Heading1">Vinho</h1>

    <button class="filtro-box" id="filtroBox">
    <span class="seta-box1">
            <i class="material-icons seta-filtro">chevron_left</i>
        </span>
        <span class="iconsMeio">
            <i class="material-icons">filter_list</i>
            <p class="filtros-texto">Filtros</p>
        </span>

        <form class="filtro-formulario">
            <span class="labels">

                <label for="Tipos" class="conteudos">Tipos</label>
                <label for="Países " class="conteudos">Países</label>
                <label for="Uvas" class="conteudos">Uvas</label>

            </span>
            <span class="Selects">
                <select id="Tipos" value="---">
                    <option>---</option>
                </select>
                <select id="Países" value="---">
                    <option>---</option>
                </select>
                <select id="Uvas" value="---">
                    <option>---</option>
                </select>
            </span>
        </form>
    </button>


</section>

<section id="Produtos-catalogo">
    <div class="container">
        <main onload="scroll_produtos()" class="block">

            @include('includes.produtos')

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
</style>

@stop

