<?php $render('header'); ?>
    <?php if(!empty($flash)): ?>
      <h4 class="text-center btn-info">  <?php echo $flash; ?> </h4>
    <?php endif; ?>
<h2 class="text-center">Adicionar Produto</h2>
<form class="text-center" method="POST" action="<?=$base;?>/novo" >
    <label>
        Nome:<br/>
        <input type="text" name="nome" placeholder= "Produto...">
    </label><br/><br/>
    <label>
        Valor:<br/>
       <!-- <input type="text" id="dinheiro" name="dinheiro"
         class="dinheiro form-control" style="display:inline-block" /> -->
       <input type="text" name="valor" id="dinheiro" class="form-control"
       onkeypress="$(this).mask('000,000,000.00', {reverse: true})" placeholder= "R$00.00" >
    </label><br/><br/>
    <label>
        Quantidade:<br/>
        <input type="text" name="quantidade" placeholder= "Quantidade..." onkeypress="return onlynumber();" >
    </label><br/><br/>

    <input type="submit" value= "Adicionar" class="btn btn-success">
    
    <a href="<?=$base;?>/" class="btn btn-secondary" > Voltar </a>
</form>

<?php $render('footer'); ?>