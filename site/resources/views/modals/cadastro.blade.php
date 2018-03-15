<form class="formCadastro" onsubmit="return false;" method="post">
    <span class="seta"></span>
    <h2 class="Display2">Novo cadastro</h2>
    <label for="nome" class="label">Nome</label>
    <input type="text" class="input" name="nome_completo" id="nome">
    <label for="email" class="label">E-mail</label>
    <input type="email" class="input" name="email" id="email">
    <label for="senha" class="label">Senha</label>
    <input type="password" name="senha" id="senha" class="input cadastroSenha">
    <div class="buttons-cadastro">
        <button type="button" class="btn-secondary cadastrarVoltar">Voltar</button>
        <button type="submit" class="btn-primary cadastroButton">Cadastrar</button>
    </div>
    <p class='label errorEmail'>Email já cadastrado</p>
    <p class='label emailSucess'>Cadastrado com sucesso!</p>
</form>