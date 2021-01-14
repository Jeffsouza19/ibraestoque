<?php $render('header'); ?>

<h2 class="text-center">Editar Produto</h2>

<form class="text-center" method="POST" action="<?=$base;?>/produto/<?=$produto['id'];?>/editar" >
    <label>
        Nome:<br/>
        <input type="text" name="nome" value="<?=$produto['nome'];?>" readonly />
    </label><br/><br/>

    <label>
        Valor:<br/>
        <input type="text" name="valor" value="<?=$produto['valor'];?>" />
    </label><br/><br/>

    <label>
        Quantidade:<br/>
        <input type="text" name="quantidade" value="<?=$produto['quantidade'];?>" />
    </label><br/><br/>

    <input class="btn btn-success" type="submit" value= "Salvar" onclick="return confirm('As alterações feitas serão salvas.')" />
    <a href="<?=$base;?>/" class="btn btn-warning" > Cancelar</a>
</form>
<?php $render('footer'); ?>