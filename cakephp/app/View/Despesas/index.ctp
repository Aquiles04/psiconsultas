<!-- File: /app/View/Despesas/index.ctp -->

<h1>Despesas </h1>
<?php echo $this->Html->link("Criar despesa", array('controller'=>'Despesas','action' => 'add'),array('class'=>'btn btn-medium btn-success')); ?>
<table class="table table-striped">
    <tr>
        <th>Id</th>
        <th>Entrada de dinheiro?</th>
        <th>Date de Criação</th>
        <th>Data de Vencimento</th>
        <th>Está Paga?</th>
        <th>Descrição</th>
        <th>Tipo Despesa</th>
        <th>Valor</th>
        <th>Ações</th>
    </tr>

<!-- Aqui é onde nós percorremos nossa matriz $posts, imprimindo
as informações dos posts -->

<?php

foreach ($Despesas as $despesa): ?>
    <tr>
       <td><?php echo $despesa['Despesa']['id']; ?></td>
       <td><?php if($despesa['Despesa']['is_Entrada']==1) echo "Sim"; else echo "Não"; ?></td>
       <td><?php echo $despesa['Despesa']['dt_Criacao']; ?></td>
       <td><?php echo $despesa['Despesa']['dt_Vencimento']; ?></td>
       <td><?php if($despesa['Despesa']['is_Paga']==1) echo "Sim"; else echo "Não" ?></td>
       <td><?php echo $despesa['Despesa']['descricao']; ?></td>
       <td><?php
       if($despesa['Despesa']['tipo_Despesa']==0) echo "Individual"; else echo "Grupo";
       ?></td>
       <td><?php echo $despesa['Despesa']['valor']; ?></td>
        <td><?php echo $this->Form->postLink('Delete',array('action' => 'delete', $despesa['Despesa']['id']),array('confirm' => 'Are you sure?'))?>
        <?php echo $this->Html->link('Editar', array('action' => 'edit', $despesa['Despesa']['id']));?>
        
        </td>
    </tr>
<?php endforeach; ?>

</table>