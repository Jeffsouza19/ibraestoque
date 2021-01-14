<?php $render('header'); ?>

<h2 class="text-center">Adicionar Produto</h2>
<form class="text-center" method="POST" action="<?=$base;?>/novo" >
    <label>
        Nome:<br/>
        <input type="text" name="nome" placeholder= "Produto...">
    </label><br/><br/>
    <label>
        Valor:<br/>
        <input type="text" name="valor" placeholder= "R$00.00">
    </label><br/><br/>
    <label>
        Quantidade:<br/>
        <input type="text" name="quantidade" placeholder= "Quantidade...">
    </label><br/><br/>

    <input type="submit" value= "Adicionar" class="btn btn-success">
    
    <a href="<?=$base;?>/" class="btn btn-warning" > Cancelar</a>
</form>

<?php $render('footer'); ?>