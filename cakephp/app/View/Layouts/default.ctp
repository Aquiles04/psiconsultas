<!DOCTYPE html>
<html>
<head>
  <?php echo $this->Html->charset(); ?>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>
    <?php echo $this->fetch('title'); ?>
    Psiconsultas
  </title>
  <?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('bootstrap.min.css');
		echo $this->Html->css('fonts/font-awesome/css/font-awesome.min.css');
		echo $this->Html->css('AdminLTE.min.css');
		echo $this->Html->css('all-skins.min.css');
		

		echo $this->Html->script('jquery.min.js');
		echo $this->Html->script('bootstrap.min.js');
		echo $this->Html->script('adminlte.min.js');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <header class="main-header">
    <a href="index2.html" class="logo">
      <span class="logo-mini"><b>Psi</b></span>
      <span class="logo-lg"><b>Psi</b>consultas</span>
    </a>
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Notifications -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">2</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Você tem 2 notificações</li>
              <li>
                <!-- inner menu -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 4 consultas para hoje
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Cliente xxxx cancelou a consulta de dd/mm/yyyy
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <?php echo $this->Html->image('user2-160x160.jpg',array('class'=>'user-image','alt'=>'User Image')) ?>
              <span class="hidden-xs">Alexandre Silveira</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
              	<?php echo $this->Html->image('user2-160x160.jpg',array('class'=>'img-circle','alt'=>'User Image')) ?>

                <p>
                  Alexandre Silveira - Premium
                  <small>Member since Nov. 2017</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
        	<?php echo $this->Html->image('user2-160x160.jpg',array('class'=>'img-circle','alt'=>'User Image')) ?>
        </div>
        <div class="pull-left info">
          <p>Alexandre Silveira</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
            <li><a href="/cakephp/Psicoterapeutas/edit/1"><i class="fa fa-user-o"></i> Editar conta</a></li>

        </li>
				<!-- segundo menu !-->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Despesas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/cakephp/Despesas/index"><i class="fa fa-circle-o"></i> Listar Despesa</a></li>
            <li><a href="/cakephp/Despesas/add"><i class="fa fa-circle-o"></i> Criar Despesa</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Atribuir Despesa </a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- AQUI FICA O CONTEUDO DA PAGINA -->
  <div class="content-wrapper">
    <?php echo $this->Flash->render(); ?>

    <?php echo $this->fetch('content'); ?>

  </div>
</div>


</body>
</html>
