<!-- File: /app/View/Psicoterapeutas/index.ctp -->

<h1> Documentos Disponiveis</h1>
<?php //echo $this->Html->link("Add Psicoterapeuta", array('controller'=>'Home','action' => 'add'),array('class'=>'btn btn-medium btn-success')); ?>
<!--
<table class="table table-striped">
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Caminho</th>
        <th>Data Cadastro</th>
        <th>Data Edicao</th>
        <th>Tipo Documento</th>
        <th>Esta visivel</th>
        <th>Foi removido</th>
       
    </tr>

<!-- Aqui é onde nós percorremos nossa matriz $posts, imprimindo
as informações dos posts -->
<!--
<?php 
/*
foreach ($Documentos as $Documento): ?>
    <tr>
       <td><?php echo $Documento['Documento']['id']; ?></td>
       <td><?php echo $Documento['Documento']['nome']; ?></td>
       <td><?php echo $Documento['Documento']['caminho']; ?></td>
       <td><?php echo $Documento['Documento']['dt_Cadastro']; ?></td>
       <td><?php echo $Documento['Documento']['dt_Edicao']; ?></td>
       <td><?php echo $Documento['Documento']['tipo_Documento']; ?></td>

       <td><?php
       if($Documento['Documento']['is_VisivelPP']==0) echo "Não"; else echo "Sim";
       ?></td>
       <td><?php
       if($Documento['Documento']['is_Removido'] ==0) echo "Não"; else echo "Sim";
       ?></td>
       
    </tr>
<?php endforeach; ?>

</table>
*/?>
-->
<table>
    <table class="table table-striped">
    <tr>
        <th>Nome</th>
        <th>Download</th>
    </tr>
    
<?php
    $files = glob("files/*.*");
    
    foreach($files as $file): 
    
    //for ($i=0; $i<count($files); $i++) 
    //{
        
        //<?php $image = $files[$i];          
        //$name=explode('.',$file);
        //$file->download=true;
        ?>
        
        <tr>
            <td>
                <?php print $file ."<br />";  ?>
            </td>
            <td>
                <a href="../app/webroot/<?php echo $file ?>" download> <img src="../app/webroot/images/download.png" width="15" height="15"> </a>
            </td>
            
        </tr>
    <?php 
    //}
    endforeach;
    ?>
    
</table>
