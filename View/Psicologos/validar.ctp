<!-- File: /app/View/Despesas/psicologos/validados.ctp -->

<h1>Validar Psicologos </h1>
<table class="table table-striped">
    <tr>
        <th>Nome</th>
        <th>Crp</th>
        <th>Validar</th>
    </tr>

<!-- Aqui é onde nós percorremos nossa matriz $Psicologo, imprimindo
as informações dos posts -->

<?php

foreach ($Psicologos as $psicologo): ?>
    <tr>
       <td><?php echo $psicologo['Psicologo']['nome']; ?></td>
       <td><?php echo $psicologo['Psicologo']['crp']; ?></td>
       <td><?php echo $this->Html->link("Validar", array('controller'=>'Psicologos','action' => 'validar',$psicologo['Psicologo']['id']),array('class'=>'btn btn-medium btn-warning')); ?></td>
    </tr>
<?php endforeach; ?>

</table>