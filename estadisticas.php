<?php

include '../lib/db.php';
// start or continue the session
session_start(); 
header('Cache-control: private');
header("Content-Type: text/html;charset=utf-8");

if (!$_SESSION['access']){
   
            $_SESSION['access'] = FALSE;
			header('Location: index.html');
    exit();
}






 ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ela Admin - HTML5 Admin Template</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
	<link rel="icon" type="image/png" href="favicon.png">
</head>
<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    <li class="menu-title">Elementos</li><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Inventario</a>
                        <ul class="sub-menu children dropdown-menu"> 
							<li><i class="fa fa-puzzle-piece"></i><a href="#">Bares</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="#">MaquinasB</a></li>
                            <li><i class="fa fa-bars"></i><a href="#">Rasberrys</a></li>
                        </ul>
                    </li>

                    <li class="menu-title">Medidas</li><!-- /.menu-title -->

                 
                    <li>    <a href="tables-data.php"> <i class="menu-icon ti-email"></i>MaquinasB </a>
                    </li>
                    <li class="menu-title">Estadisticas</li><!-- /.menu-title -->
					<li>    <a href="#"> <i class="menu-icon ti-email"></i>Economicas </a>
                    </li>
					<li>    <a href="#"> <i class="menu-icon ti-email"></i>Partidas </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><img src="images/logo_nombre.png" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="images/logo_nombre.png" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">3</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">You have 3 Notification</p>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-check"></i>
                                    <p>Server #1 overloaded.</p>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-info"></i>
                                    <p>Server #2 overloaded.</p>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-warning"></i>
                                    <p>Server #3 overloaded.</p>
                                </a>
                            </div>
                        </div>

                        <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-envelope"></i>
                                <span class="count bg-primary">4</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                                <p class="red">You have 4 Mails</p>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Jonathan Smith</span>
                                        <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Jack Sanders</span>
                                        <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Cheryl Wheeler</span>
                                        <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Rachel Santos</span>
                                        <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/pp.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i>My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa-bell-o"></i>Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa-cog"></i>Settings</a>

                            <a class="nav-link" href="#"><i class="fa fa-power-off"></i>Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Estadisticas</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Estadisticas</a></li>
                                    <li class="active">Generales</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <?php								$entradas_hoy=0;
											$salidas_hoy=0;
											$dinero_hoy=0;
											
											#$texto="SELECT (max(`total...ent`)-MIN(`total...ent`))*0.2 AS entradas ,(max(`total...sal`)-MIN(`total...sal`))*0.2 AS salidas,((max(`total...ent`)-MIN(`total...ent`) )- (max(`total...sal`)-MIN(`total...sal`) )) *0.2 as dinero FROM registros WHERE maquinab='FRANCO_0001' AND DATE_FORMAT(fecha, '%Y-%m-%d')=DATE_FORMAT(curdate(), '%Y-%m-%d')";
           									$texto="SELECT (max(`R_total___ent`)-MIN(`R_total___ent`))*0.2 AS entradas ,(max(`R_total___sal`)-MIN(`R_total___sal`))*0.2 AS salidas,((max(`R_total___ent`)-MIN(`R_total___ent`) )- (max(`R_total___sal`)-MIN(`R_total___sal`) )) *0.2 as dinero FROM registros_v2 WHERE R_total___ent>0 and maquinab='FRANCO_0001' AND DATE_FORMAT(fecha_lectura, '%Y-%m-%d')=DATE_FORMAT(curdate(), '%Y-%m-%d')";
            
											$result = mysqli_query($GLOBALS['DB'],$texto  ) ;
											if (!$result)  {echo ("Error" . mysqli_error($GLOBALS['DB']));}
											while ($record = mysqli_fetch_assoc($result))
												{	 
													 $entradas_hoy=round($record['entradas']);
													 $salidas_hoy=round($record['salidas']);
													 $dinero_hoy=round($record['dinero']);
											
											 } ?>
        <div class="content">
            <div class="animated fadeIn">
				  <!-- Widgets  -->
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-2">
                                        <i class="pe-7s-download"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count"><?php echo($entradas_hoy);?></span>€</div>
                                            <div class="stat-heading">Entradas Hoy</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-4">
                                        <i class="pe-7s-upload"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count"><?php echo($salidas_hoy);?></span>€</div>
                                            <div class="stat-heading">Salidas Hoy</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-1">
                                        <i class="pe-7s-cash"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count"><?php echo($dinero_hoy);?></span>€</div>
                                            <div class="stat-heading">Neto Hoy</div>                             
                                        </div>                                                               
                                    </div>                                                                   
                                </div>                                                                       
                            </div>                                                                           
                        </div>                                                                               
                    </div>                                                                                   
                                                                                                             
                </div>                                                                                       
                <!-- /Widgets -->                                                                            
				<div class="row">                                                                            
					<div class="col-md-12">                                                                  
                        <div class="card">                                                                   
                            <div class="card-header">                                                        
                                <strong class="card-title">Estadisticas maquina FRANCO_0001 en el Bar Nogales a fecha de ayer: <?php echo(date('d/m/Y',strtotime("-1 days")));?> </strong>                                   
                            </div>                                                                           
                            <div class="card-body">                                                          
                                <table id="bootstrap-data-table" class="table table-striped table-bordered"> 
                                    <thead>                                                                  
                                        <tr>                                                                 
                                            <th>#</th>                                                       
                                            <th>Entradas</th>                                                
                                            <th>Salidas</th>                                                 
                                            <th>Neto</th>                                                    
											<th>Media Dia</th>                                               
                                        </tr>                                                                
                                    </thead>                                                                 
                                    <tbody>                                                                  
                                        <tr>                                                                 
											<td>Ayer <?php echo(date('d/m/Y',strtotime("-1 days")));?></td>                                                     
                                            <?php                                                            
											$texto="SELECT dia,maquinab,entradas,salidas,dinero FROM resumen WHERE dia=date_add(CURDATE(), INTERVAL -1 DAY) AND maquinab='FRANCO_0001'";
											$result = mysqli_query($GLOBALS['DB'],$texto  ) ;                
											if (!$result)  {echo ("Error" . mysqli_error($GLOBALS['DB']));}  
											while ($record = mysqli_fetch_assoc($result))                    
												{	                                                         
													?>                                                       
                                            <td><?php echo($record['entradas']);?>€</td>                     
                                            <td><?php echo($record['salidas']);?>€</td>                      
											<td><?php echo($record['dinero']);?>€</td>                       
				                            <td><?php echo($record['dinero']);?></td>                        
										                                                                     
											<?php } ?>                                                       
										</tr>                                                                
										<tr>                                                                 
											<td>Semana desde Lunes</td>                                      
                                            <?php                                                            
											$texto="SELECT SUM(entradas) as ventradas,SUM(salidas) as vsalidas,SUM(dinero) as vdinero, SUM(dinero)/(DAYOFWEEK(date_add(CURDATE(), INTERVAL -1 DAY))-1) as vneta FROM resumen WHERE dia>=DATE_SUB(date_add(CURDATE(), INTERVAL -1 DAY), INTERVAL DAYOFWEEK(date_add(CURDATE(), INTERVAL -1 DAY))-2 DAY) AND maquinab='FRANCO_0001'";
											$result = mysqli_query($GLOBALS['DB'],$texto  ) ;                
											if (!$result)  {echo ("Error" . mysqli_error($GLOBALS['DB']));}  
											while ($record = mysqli_fetch_assoc($result))                    
												{	                                                         
													?>                                                       
                                            <td><?php echo($record['ventradas']);?>€</td>                    
                                            <td><?php echo($record['vsalidas']);?>€</td>                     
											<td><?php echo($record['vdinero']);?>€</td>                      
											<td><?php echo(round($record['vneta'],1));?></td>                
										                                                                     
											<?php } ?>                                                       
										</tr>                                                                
										<tr>                                                                 
											<td>Semana (ult. 7 dias)</td>                                    
                                            <?php                                                            
											$texto="SELECT SUM(entradas) as ventradas,SUM(salidas) as vsalidas,SUM(dinero) as vdinero FROM resumen WHERE dia>=DATE_SUB(date_add(CURDATE(), INTERVAL -1 DAY), INTERVAL 6 DAY) AND maquinab='FRANCO_0001'";
											$result = mysqli_query($GLOBALS['DB'],$texto  ) ;                
											if (!$result)  {echo ("Error" . mysqli_error($GLOBALS['DB']));}  
											while ($record = mysqli_fetch_assoc($result))                    
												{	                                                         
													?>                                                       
                                            <td><?php echo($record['ventradas']);?>€</td>                    
                                            <td><?php echo($record['vsalidas']);?>€</td>                     
											<td><?php echo($record['vdinero']);?>€</td>                      
											<td><?php echo(round($record['vdinero']/7,1));?></td>            
										                                                                     
											<?php } ?>                                                       
										</tr>                                                                
										<tr>                                                                 
											<td>Mes desde el 01</td>                                         
                                            <?php                                                            
											$texto="SELECT SUM(entradas) as ventradas,SUM(salidas) as vsalidas,SUM(dinero) as vdinero, SUM(dinero)/DAYOFMONTH(date_add(CURDATE(), INTERVAL -1 DAY)) as vneta FROM resumen WHERE dia>=SUBDATE(date_add(CURDATE(), INTERVAL -1 DAY), DAYOFMONTH(date_add(CURDATE(), INTERVAL -1 DAY)) - 1) AND maquinab='FRANCO_0001'";
											$result = mysqli_query($GLOBALS['DB'],$texto  ) ;                
											if (!$result)  {echo ("Error" . mysqli_error($GLOBALS['DB']));}  
											while ($record = mysqli_fetch_assoc($result))                    
												{	                                                         
													?>                                                       
                                            <td><?php echo($record['ventradas']);?>€</td>                    
                                            <td><?php echo($record['vsalidas']);?>€</td>                     
											<td><?php echo($record['vdinero']);?>€</td>                      
											<td><?php echo(round($record['vneta'],1));?></td>                
										                                                                     
											<?php } ?>                                                       
										</tr>                                                                
										<tr>                                                                 
											<td>Mes (ult. 30 dias)</td>                                      
                                            <?php                                                            
											$texto="SELECT SUM(entradas) as ventradas,SUM(salidas) as vsalidas,SUM(dinero) as vdinero FROM resumen WHERE dia>=DATE_SUB(date_add(CURDATE(), INTERVAL -1 DAY), INTERVAL 29 DAY) AND maquinab='FRANCO_0001'";
											$result = mysqli_query($GLOBALS['DB'],$texto  ) ;                
											if (!$result)  {echo ("Error" . mysqli_error($GLOBALS['DB']));}  
											while ($record = mysqli_fetch_assoc($result))                    
												{	                                                         
													?>                                                       
                                            <td><?php echo($record['ventradas']);?>€</td>                    
                                            <td><?php echo($record['vsalidas']);?>€</td>                     
											<td><?php echo($record['vdinero']);?>€</td>                      
											<td><?php echo(round($record['vdinero']/30,1));?></td>           
										                                                                     
											<?php } ?>                                                       
										</tr>                                                                
										<tr>                                                                 
											<td>Trimestre desde 01</td>                                      
                                            <?php                                                            
											$texto="SELECT SUM(entradas) as ventradas,SUM(salidas) as vsalidas,SUM(dinero) as vdinero , SUM(dinero)/(datediff(MAKEDATE(YEAR(date_add(CURDATE(), INTERVAL -1 DAY)), 1) + INTERVAL QUARTER(date_add(CURDATE(), INTERVAL -1 DAY)) QUARTER - INTERVAL    1 QUARTER , date_add(CURDATE(), INTERVAL -1 DAY)) +1)*-1 as vneta FROM resumen WHERE quarter(dia)=quarter(date_add(CURDATE(), INTERVAL -1 DAY))AND maquinab='FRANCO_0001'";
											$result = mysqli_query($GLOBALS['DB'],$texto  ) ;                
											if (!$result)  {echo ("Error" . mysqli_error($GLOBALS['DB']));}  
											while ($record = mysqli_fetch_assoc($result))                    
												{	                                                         
													?>                                                       
                                            <td><?php echo($record['ventradas']);?>€</td>                    
                                            <td><?php echo($record['vsalidas']);?>€</td>                     
											<td><?php echo($record['vdinero']);?>€</td>                      
				                            <td><?php echo(round($record['vneta'],1));?></td>                
										                                                                     
										                                                                     
											<?php } ?>                                                       
										</tr>                                                                
										<tr>                                                                 
											<td>Trimestre (ult. 90 dias)</td>                                
                                            <?php                                                            
											$texto="SELECT SUM(entradas) as ventradas,SUM(salidas) as vsalidas,SUM(dinero) as vdinero FROM resumen WHERE dia>=DATE_SUB(date_add(CURDATE(), INTERVAL -1 DAY), INTERVAL 89 DAY) AND maquinab='FRANCO_0001'";
											$result = mysqli_query($GLOBALS['DB'],$texto  ) ;                
											if (!$result)  {echo ("Error" . mysqli_error($GLOBALS['DB']));}  
											while ($record = mysqli_fetch_assoc($result))                    
												{	                                                         
													?>                                                       
                                            <td><?php echo($record['ventradas']);?>€</td>                    
                                            <td><?php echo($record['vsalidas']);?>€</td>                     
											<td><?php echo($record['vdinero']);?>€</td>                      
											<td><?php echo(round($record['vdinero']/90,1));?></td>           
										                                                                     
											<?php } ?>                                                       
										</tr>                                                                
										<tr>                                                                 
											<td>Año desde 01/01</td>                                         
                                            <?php                                                            
											$texto="SELECT SUM(entradas) as ventradas,SUM(salidas) as vsalidas,SUM(dinero) as vdinero, SUM(dinero)/DAYOFYEAR(date_add(CURDATE(), INTERVAL -1 DAY)) as vneta FROM resumen WHERE year(dia)=year(date_add(CURDATE(), INTERVAL -1 DAY)) AND maquinab='FRANCO_0001'";
											$result = mysqli_query($GLOBALS['DB'],$texto  ) ;                
											if (!$result)  {echo ("Error" . mysqli_error($GLOBALS['DB']));}  
											while ($record = mysqli_fetch_assoc($result))                    
												{	                                                         
													?>                                                       
                                            <td><?php echo($record['ventradas']);?>€</td>                    
                                            <td><?php echo($record['vsalidas']);?>€</td>                     
											<td><?php echo($record['vdinero']);?>€</td>                      
											<td><?php echo(round($record['vneta'],1));?></td>                
											<?php } ?>                                                       
										</tr>                                                                
										<tr>                                                                 
											<td>Año (ult. 365 dias)</td>                                     
                                            <?php                                                            
											$texto="SELECT SUM(entradas) as ventradas,SUM(salidas) as vsalidas,SUM(dinero) as vdinero FROM resumen WHERE dia>=DATE_SUB(date_add(CURDATE(), INTERVAL -1 DAY), INTERVAL 364 DAY) AND maquinab='FRANCO_0001'";
											$result = mysqli_query($GLOBALS['DB'],$texto  ) ;                
											if (!$result)  {echo ("Error" . mysqli_error($GLOBALS['DB']));}  
											while ($record = mysqli_fetch_assoc($result))                    
												{	                                                         
													?>                                                       
                                            <td><?php echo($record['ventradas']);?>€</td>                    
                                            <td><?php echo($record['vsalidas']);?>€</td>                     
											<td><?php echo($record['vdinero']);?>€</td>                      
											<td><?php echo(round($record['vdinero']/365,1));?></td>          
										                                                                     
											<?php } ?>                                                       
										</tr>                                                                
									                                                                         
                                    </tbody>                                                                 
                                </table>                                                                     
                            </div>                                                                           
                        </div>                                                                               
                    </div>                                                                                   
				</div>                                                                                       
                                                                                                             
        </div><!-- .animated -->                                                                             
    </div><!-- .content -->                                                                                  
                                                                                                             
    <div class="clearfix"></div>                                                                             
                                                                                                             
    <footer class="site-footer">                                                                             
        <div class="footer-inner bg-white">                                                                  
            <div class="row">                                                                                
                <div class="col-sm-6">                                                                       
                    Copyright &copy; 2018 Ela Admin                                                          
                </div>                                                                                       
                <div class="col-sm-6 text-right">                                                            
                    Designed by <a href="https://colorlib.com">Colorlib</a>                                  
                </div>                                                                                       
            </div>                                                                                           
        </div>                                                                                               
    </footer>                                                                                                
                                                                                                             
</div><!-- /#right-panel -->                                                                                 
                                                                                                             
<!-- Right Panel -->                                                                                         
                                                                                                             
<!-- Scripts -->                                                                                             
<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>                         
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>                 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>                
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="assets/js/main.js"></script>                                                                    
                                                                                                             
                                                                                                             
</body>                                                                                                      
</html>                                                                                                      
                                                                                                             