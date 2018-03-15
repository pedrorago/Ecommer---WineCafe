<?php

    $produtos = $produto['relacionados'];

    foreach ($produtos as $key => $value):
?>

    <div class='produto-box'>
        <?php
        if ($value['desconto'] > 0):
        ?>
            <span class='tarja-desconto'>
                <p class='Display'>-<?= $value['desconto']; ?>%</p>
            </span>
        <?php
        endif;
        ?>
        <div class='produto-img'>
            <img src="<?= $value['imagem']; ?>">
        </div>
        <a href="/produto/<?= $value['codigo_slug']; ?>/<?= $value['slug']; ?>">
            <div class='produto-desc'>
                <p class='Paragraph1 titulo-produto'><?= $value['nome']; ?></p>
                <p class='Display produtoValor'><?= $value['preco']; ?></p>
                <p class='Display produtoValor'>4 x de <?= $value['preco_dividido']; ?></p>
            </div>
        </a>
    </div>


<?php
    endforeach;
    if (empty($produtos)) {
        echo "<span class='pempty'>Não há produtos á exibir.</span>";
    }
?>