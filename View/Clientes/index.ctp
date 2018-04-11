<!-- File: /app/View/Psicoterapeutas/index.ctp -->

<h1> Clientes Cadastrados </h1>
<?php //echo $this->Html->link("Add Cliente", array('controller'=>'Home','action' => 'add'),array('class'=>'btn btn-medium btn-success')); ?>
<table class="table table-striped">
    <tr>
        <th>Id</th>
        <th>CPF</th>
        <th>Nome</th>
        <th>Sobrenome</th>
        <th>DtCadastro</th>
        <th>Está deletado?</th>
        <th>Login</th>
        <th>Senha</th>
        <th>Email</th>
    </tr>

<!-- Aqui é onde nós percorremos nossa matriz $posts, imprimindo
as informações dos posts -->

<?php

foreach ($Clientes as $cliente): ?>
    <tr>
       <td><?php echo $cliente['Cliente']['id']; ?></td>
       <td><?php echo $cliente['Cliente']['cpf']; ?></td>
       <td><?php echo $cliente['Cliente']['nome']; ?></td>
       <td><?php echo $cliente['Cliente']['sobrenome']; ?></td>
       <td><?php echo $cliente['Cliente']['dt_Cadastro']; ?></td>
       
       <td><?php
       if($cliente['Cliente']['is_Deletado'] ==0) echo "Não"; else echo "Sim";
       ?></td>
       
       
       <td><?php echo $cliente['Cliente']['username']; ?></td>
       <td><?php echo $cliente['Cliente']['password']; ?></td>
       <td><?php echo $cliente['Cliente']['email']; ?></td>
          
    </tr>
<?php endforeach; ?>

</table>