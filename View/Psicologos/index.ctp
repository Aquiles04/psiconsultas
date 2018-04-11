<!-- File: /app/View/Psicoterapeutas/index.ctp -->

<h1>Psicoterapeutas </h1>
<?php //echo $this->Html->link("Add Psicoterapeuta", array('controller'=>'Home','action' => 'add'),array('class'=>'btn btn-medium btn-success')); ?>
<table class="table table-striped">
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Sobrenome</th>
        <th>DtCadastro</th>
        <th>Crp está ativo?</th>
        <th>Está deletado?</th>
        <th>TipoPsicologo</th>
        <th>Login</th>
        <th>Senha</th>
        <th>Email</th>
        <th>CRP</th>
    </tr>

<!-- Aqui é onde nós percorremos nossa matriz $posts, imprimindo
as informações dos posts -->

<?php

foreach ($Psicologos as $Psicologo): ?>
    <tr>
       <td><?php echo $Psicologo['Psicologo']['id']; ?></td>
       <td><?php echo $Psicologo['Psicologo']['nome']; ?></td>
       <td><?php echo $Psicologo['Psicologo']['sobrenome']; ?></td>
       <td><?php echo $Psicologo['Psicologo']['dt_Cadastro']; ?></td>
       <td><?php
       if($Psicologo['Psicologo']['is_Crp_Ativo']==0) echo "Não"; else echo "Sim";
       ?></td>
       <td><?php
       if($Psicologo['Psicologo']['is_Deletado'] ==0) echo "Não"; else echo "Sim";
       ?></td>
       <td><?php
       switch ($Psicologo['Psicologo']['tipo_Psicologo']) {
        case 0:
            echo "Básico";
            break;
        case 1:
            echo "Premium";
            break;
        case 2:
            echo "Grupo";
            break;
        case 3:
            echo "Pesquisador";
            break;
        }
       ?></td>
       
       <td><?php echo $Psicologo['Psicologo']['login']; ?></td>
       <td><?php echo $Psicologo['Psicologo']['senha']; ?></td>
       <td><?php echo $Psicologo['Psicologo']['email']; ?></td>
       <td><?php echo $Psicologo['Psicologo']['crp']; ?></td>
    </tr>
<?php endforeach; ?>

</table>