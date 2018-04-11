<!-- File: /app/View/Despesas/index.ctp -->

<h1>Planos </h1>
<?php echo $this->Html->link("Criar plano", array('controller'=>'Planos','action' => 'add'),array('class'=>'btn btn-medium btn-success')); ?>
<table class="table table-striped">
    <tr>
        <th>Plano</th>
        <th>Valor</th>
    </tr>

<!-- Aqui é onde nós percorremos nossa matriz $posts, imprimindo
as informações dos posts -->

<?php

foreach ($Planos as $plano): ?>
    <tr>
       <td><?php echo $plano['Plano']['nome']; ?></td>
       <td>R$ <?php echo $plano['Plano']['valor']; ?></td>
    </tr>
<?php endforeach; ?>

</table>