@extends('layouts.app')

@section('title', 'Contato')

@section('content')

<section id="BannerInstitucional" style="height: 21.875em;">
	<span class="Institucional-blend"></span>
	<!-- Crop Livre -->
    <img src="img/banner4.jpg">
    <!-- Crop Livre -->
    <h1 class="Heading1">Contato</h1>

</section>

<section id="Contato-catalogo">
    <div class="container">
        <main>
            <form>
                <h1 class='Heading3'>Em que podemos te ajudar?</h1>
                <label for='nome'>Seu nome</label>
                <input type="text" name="nome" id='nome' class='input'>
                <label for='Emai'>Emai</label>
                <input type="email" name="email" id='email' class='input'>
                <label for='Mensagem'>Mensagem</label>
                <textarea class='input' name='Mensagem' placeholder="Digite seu texto"></textarea>
                <button class='btn-secondary'>Enviar</button>
            </form>

        </main>
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

</style>

@stop

