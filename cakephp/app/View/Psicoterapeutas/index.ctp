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

foreach ($Psicoterapeutas as $psicoterapeuta): ?>
    <tr>
       <td><?php echo $psicoterapeuta['Psicoterapeuta']['id']; ?></td>
       <td><?php echo $psicoterapeuta['Psicoterapeuta']['nome']; ?></td>
       <td><?php echo $psicoterapeuta['Psicoterapeuta']['sobrenome']; ?></td>
       <td><?php echo $psicoterapeuta['Psicoterapeuta']['dt_Cadastro']; ?></td>
       <td><?php
       if($psicoterapeuta['Psicoterapeuta']['is_Crp_Ativo']==0) echo "Não"; else echo "Sim";
       ?></td>
       <td><?php
       if($psicoterapeuta['Psicoterapeuta']['is_Deletado'] ==0) echo "Não"; else echo "Sim";
       ?></td>
       <td><?php
       switch ($psicoterapeuta['Psicoterapeuta']['tipo_Psicologo']) {
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
       
       <td><?php echo $psicoterapeuta['Psicoterapeuta']['username']; ?></td>
       <td><?php echo $psicoterapeuta['Psicoterapeuta']['password']; ?></td>
       <td><?php echo $psicoterapeuta['Psicoterapeuta']['email']; ?></td>
       <td><?php echo $psicoterapeuta['Psicoterapeuta']['crp']; ?></td>
    </tr>
<?php endforeach; ?>

</table>