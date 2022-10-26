<?php
session_start();
if($_SESSION["AsisUMG_usuario"]=="" || $_SESSION["AsisUMG_usuario"]==null){
    header("Location: http://localhost:8070/AsistenciaUMG/");
}
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Asistencia UMG</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
		<link rel="stylesheet" href="../assets/css/estilo_sidebar.css">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="p-4 pt-5">
		  		<a href="#" class="img logo rounded-circle mb-5" style="background-image: url(../assets/img/umg_logo.png);"></a>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="">Proyecto Asistencia</a>
	          </li>

            <li class="nav-item">
                <a href="#"><i class="bx bxs-book-content"></i>
                <span>Carrera</span></a>
            </li>

            <li class="nav-item">
                <a href="#"><i class="bx bxs-school"></i>
                <span>Centro</span></a>
            </li>

            <li class="nav-item">
                <a href="#"><i class="bx bxs-notepad"></i>
                <span>Cursos</span></a>
            </li>




             <li class="nav-item">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class='bx bx-edit-alt'></i>&nbsp;Secccion</a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="#">Registrar Seccion</a>
                </li>
                <li>
                    <a href="#">Asignar Carrera  -  Seccion</a>
                </li>
                <li>
                    <a href="#">Asignar Seccion - curso</a>
                </li>
                </ul>
              </li>


            <li class="nav-item">
                <a href="#"><i class="bx bxs-calendar"></i>
                <span>Horarios</span></a>
            </li>
            <li class="nav-item">
                <a href="#"><i class="bx bxs-user-badge"></i>
                <span>Docente</span></a>
            </li>
            <li class="nav-item">
                <a href="#"><i class="bx bxs-group"></i>
                <span>Alumnos</span></a>
            </li>
            <li class="nav-item">
                <a href="#"><i class="bx bxs-dollar-circle"></i>
                <span>Inscripcion</span></a>
            </li>







            <li class="nav-item ">
                <a href="#homeSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class='bx bxs-calendar' ></i>&nbsp;Asistencia</a>
                <ul class="collapse list-unstyled" id="homeSubmenu2">
                <li>
                    <a href="#">Por Fecha - Estudiante</a>
                </li>
                <li>
                    <a href="#">Por curso - Seccion - Fecha </a>
                </li>
                <li>
                    <a href="#">Por semestre </a>
                </li>

                <li>
                    <a href="#">Por carreras </a>
                </li>


                <li>
                    <a href="#">Por centro </a>
                </li>

                <li>
                    <a href="#">Todas las estadisticas </a>
                </li>

                </ul>
              </li>




	        </ul>

	        <div class="footer">
	        	<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los registros reservados | Grupo 10 Desarrollo web UMG
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
	        </div>

	      </div>
    	</nav>

        <!-- Page Content  -->
        <div class="container my-4">
          <div class="row">
            <div class="col-md-12">
              <button type="button" id="sidebarCollapse" class="btn btn-primary">
                <i class="fa fa-bars"></i>
                <span class="sr-only">Toggle Menu</span>
              </button><br>