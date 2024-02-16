
<style>
            body {
                font-family: GMX, Bold ;
                background-color: #f4f4f4; /* Color de fondo del cuerpo */
                margin: 0;
                padding: 0;
            }

            .site-header {
                background-color: #DDDDDD; /* Color de fondo del encabezado */
                color: #404041; /* Color del texto del encabezado */
                padding: 10px 0;
            }

            .main-header {
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            .logo-wrap {
                /* Estilos para el contenedor del logo */
            }

            .nav-wrap {
                /* Estilos para el contenedor de navegación */
            }

            .nav-desktop {
                /* Estilos para la navegación principal */
            }

            .menu-list {
                list-style: none;
                margin: 0;
                padding: 0;
                display: flex;
            }

            .menu-list li {
                margin-right: 20px;
            }

            .menu-list a {
                text-decoration: none;
                color: #fff; /* Color del texto de los enlaces */
            }



            /* Cambios de color al pasar el ratón sobre los enlaces */
            .menu-list a:hover {
                color: #9D2449; /* Color del texto al pasar el ratón */
            }

            /* Estilos para el ícono de menú en dispositivos móviles */
            #bar, #close {
                font-size: 20px;
                cursor: pointer;
                color: #a9a8a9; /* Color del ícono de menú en dispositivos móviles */
            }
        </style>
        <header class="site-header">
			<!-- Top header Close -->
			<div class="main-header">
				<div class="container">
					<div class="logo-wrap" itemprop="logo">

						<!-- <h1>Education</h1> -->
					</div>
					<div class="nav-wrap">

						<nav class="nav-desktop">
							<ul class="menu-list">

								<img src="images/logo.2.png" alt="Logo Image"style=" margin-left: -180px;" >
								<li><a href="index">Inicio</a></li>
								<li class="menu-parent">Nuestro plantel
									<ul class="sub-menu">
										<li><a href="historia">Historia</a></li>
										<li><a href="mensaje">Mensaje del director</a></li>
                                        <li><a href="mvv">Misión, visión y valores</a></li>
                                        <li><a href="instalaciones">Instalaciones</a></li>
                                        <li><a href="pdf/ORGANIGRAMA 2024.pdf">Organigrama</a></li>
									</ul>
								</li>
								<li class="menu-parent">Oferta educativa
									<ul class="sub-menu">
										<li><a href="programacion">Técnico en Programación</a></li>
										<li><a href="sym">Técnico en Soporte y mantenimiento</a></li>
                                        <li><a href="RH">Técnico en Administración de recursos humanos</a></li>
									</ul>
								</li>
                                <li class="menu-parent">Alumnos
									<ul class="sub-menu">
										<li><a href="becas">Becas</a></li>
										<li><a href="https://surems.seg.guanajuato.gob.mx/Account/Index">atlas surems</a></li>
                                        <li><a href="pdf/Reglamento interno CBTIS 255 2023-2024.pdf">Reglamento escolar</a></li>
                                        <li><a href="clubdeportivo">Talleres</a></li>
                                       <!-- <li class="menu-parent">Talleres
                                                <ul class="sub-menu">
                                                    <li><a href="clubdeportivo">Deportivo</a></li>
                                                    <li><a href="clubcultural">Cultural</a></li>
                                                </ul>
                                            </li> -->
                                        <li><a href="pdf/aportaciones 2024.pdf">Aportacion de padres de familia semestre feb-jul 2024</a></li>
									</ul>
								</li>
                                <li class="menu-parent">Aspirantes
									<ul class="sub-menu">
										<li><a href="pdf/pago de ficha.pdf">Pago de ficha 2024</a></li>
                                        <li><a href="ficha">Entrega de fichas</a></li>

									</ul>
								</li>
                                <li class="menu-parent">Servicios escolares
									<ul class="sub-menu">
										<li><a href="https://sway.cloud.microsoft/TYWQEH9fiOYUwasZ?ref=Link"> Página principal de Servicios Escolares</a></li>
                                        <li><a href="servicio">Documentos servicio social</a></li>
									</ul>

								</li>
                                <li class="menu-parent">Transparencia
									<ul class="sub-menu">
										<li><a href="transparencia">Rendición de cuentas</a></li>

									</ul>
								</li>

							</ul>
						</nav>
						<div id="bar">
							<i class="fas fa-bars"></i>
						</div>
						<div id="close">
							<i class="fas fa-times"></i>
						</div>
					</div>
				</div>
			</div>
		</header>
