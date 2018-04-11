<!-- File: /app/View/Despesas/psicologos/validados.ctp -->

<h1>Validar Psicologos </h1>
<table class="table table-striped">
    <tr>
        <th>Nome</th>
        <th>Crp</th>
        <th>Validar</th>
    </tr>

<!-- Aqui é onde nós percorremos nossa matriz $posts, imprimindo
as informações dos posts -->

<?php

foreach ($Psicologos as $psicologo): ?>
    <tr>
       <td><?php echo $plano['Psicologo']['nome']; ?></td>
       <td><?php echo $plano['Psicologo']['crp']; ?></td>
       <td><?php echo $this->Html->link("Validar", array('controller'=>'Psicologos','action' => 'validar',['Psicologo']['id']),array('class'=>'btn btn-medium btn-warning')); ?></td>
    </tr>
<?php endforeach; ?>

</table>