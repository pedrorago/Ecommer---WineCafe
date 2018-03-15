<form class="formLogin " onsubmit="return false;" method="post">
    <h2 class="Display2">Acessar minha conta</h2>
    <label for="email" class="label">E-mail</label>
    <input type="email" class="input" name="email" id="email">
    <label for="senha" class="label">Senha</label>
    <input type="password" name="senha" id="senha" class="input">
    <a href="javascript:void(0)" class="Display-4 recuperarSenha">Esqueci minha senha</a>
    <a href="javascript:void(0)" class="Display-4 cadastrarMe">Não sou cadastrado</a>
    <button type="submit" class="btn-secondary">Entrar</button>
    <p class="label responseLogin" style="display: none;"></p>
</form>

<form class="formLogado" onsubmit="return false;" method="post">
    <span class="seta"></span>
    
    <?php
    if (Auth::check() == true) {
        echo '<h2 class="Display2">Olá, '.Auth::user()->nome_completo.'</h2>';
    } else {
        echo '<h2 class="Display2">Olá, Usuário</h2>';
    }
    ?>
    
    <a href="/perfil" class="btn-secondary logadoButton">Meus pedidos</a>
    <a href="/perfil" class="btn-secondary logadoButton">Editar meus dados</a>
    <a href="/logout" class="btn-primary formLogadoVoltar">Sair</a>
</form>