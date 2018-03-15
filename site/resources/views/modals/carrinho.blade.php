 <form class="formCarrinho">
    <div class="produtos-carrinho-container">
        <div class="produtos-carrinho-box">
            <span class="photo-carrinho">
                <img src="img/produto1.jpg">
            </span>
            <span class="desc-carrinho">
                <h2 class="label Paragraph2"><?php echo substr('Tênis Baixo Trekking Caminhadas Azimute', 0, 39); ?>...</h2>
                <div class="MaisMenos">
                    <button class="btnMenos">-</button>
                    <span class="contadorQuantidade">1</span>
                    <button class="btnMais">+</button>
                    <button class="btn-primary remover ">Remover</button>
                </div>
            </span>
        </div>
    </div>
    <div class="carrinho-cep">
        <label for="cepCarrinho" class="label">Estime do frete</label>
        <input type="text" name="cepCarrinho" class="input" id="cepCarrinho" placeholder="Digite seu CEP">
        <button class="btn-primary btnFrete" type="button" onclick="calcula_frete()">calcular</button>
        <a href="javascript:void(0)" class="btn-secondary" onclick="finalizar_compra()">Finalizar compra</a>
    </div>
</form>