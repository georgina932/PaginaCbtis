<!DOCTYPE html>
<html>
<head>
	<title>RH</title>
	<meta name="viewport" content="width=device-width">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<link rel="stylesheet" type="text/css" href="css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/lightbox.css">
	<link rel="stylesheet" type="text/css" href="css/flexslider.css">
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="css/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.rateyo.css"/>
	<link rel="stylesheet" type="text/css" href="css/jquery.mmenu.all.css" />
	<link rel="stylesheet" type="text/css" href="inner-page-style.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    @include('header')
        <style>
            body {
                font-family: 'Arial', sans-serif;
                margin: 0;
                padding: 0;
                background-color: #f8f8f8;
                color: #333;
            }

            .container {
                width: 90%; /* Cambié el ancho a 90% */
                margin: 0 auto;
            }

            .course-detail {
                background-color: #fff;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                margin-top: 30px;
                padding: 20px;
                text-align: justify; /* Justificado */
                line-height: 1.5; /* Interlineado de 1.5 */
            }

            .course-detail h2 {
                font-size: 40px; /* Tamaño de letra un poco más grande */
                color: black;
                margin-bottom: 20px;
            }
            .course-detail p {
                font-size: 18px; /* Tamaño de letra un poco más grande */
                color: black;
                margin-bottom: 20px;
                text-align: justify; /* Justificado */
                line-height: 1.5;
            }

            .course-detail img {
                border-radius: 10px;
                width: 70%; /* Imágenes un poco más pequeñas */
                max-width: 100%;
                height: auto;
                margin-bottom: 20px;

            }

            .course-intro,
            .course-objective {
                text-align: left;
                margin-bottom: 20px;
            }

            .course-objective img {
                border-radius: 10px;
                width: 70%; /* Imágenes un poco más pequeñas */
                max-width: 100%;
                height: auto;
                margin-bottom: 20px;

            }
            .course-objective ul li{
                font-size: 18px; /* Tamaño de letra un poco más grande */
                color: black;
        }

            .button-container {
                text-align: center;
                margin-top: 20px;
            }

            .btn {
                display: inline-block;
                padding: 10px 20px;
                font-size: 18px;
                color: #fff; /* Color del texto del botón (blanco en este caso) */
                background-color: #4f87c0;
                text-decoration: none;
                border-radius: 5px;
            }

            .btn:hover {
                background-color: #93a0b0;
            }
        </style>

<div class="container">
    <main class="course-detail">
        <h2>Técnico en Administración de recursos humanos</h2>
        <img src="images/RH.jpg" alt="recurso">

        <article>
            <section class="course-intro">
                <h3>Descripción de la carrera</h3>
                <p>La carrera de Técnico en Administración de Recursos Humanos proporciona al estudiante la preparación profesional en gestión de
                    trámites administrativos del área de recursos humanos, la integración del talento humano en la organización, la implementación del plan
                    de desarrollo y evaluación del talento humano, y el manejo de la nómina y compensaciones. Todas estas competencias posibilitan al
                    egresado su incorporación al mundo laboral, continuar su trayectoria educativa o desarrollar procesos productivos independientes, de
                    acuerdo con sus intereses profesionales o las necesidades en su entorno social; facilitando al egresado su incorporación al mundo laboral
                    en sitios de inserción de servicios de administración de negocios, de acuerdo con sus intereses profesionales y necesidades de su entorno
                    social.</p>
            </section>

            <section class="course-objective">
                <h3>Mapa de competencias profesionales</h3>
                <img src="images/perfilrh.jpg" alt="programacion">

                <h3>Perfil de egreso</h3>
                <p>
                    La formación que ofrece la carrera de Técnico en Administración de Recursos Humanos permite al egresado, a través de la articulación
                        de saberes de diversos campos, realizar actividades del área de recursos humanos, dirigidas a la ejecución de procedimientos
                        administrativos, gestión de documentación y proceso de reclutamiento, selección y admisión del talento humano, los procesos de
                        inducción, permanencia y capacitación, promoción de condiciones de trabajo saludables en la organización, gestión de la aplicación de
                        la evaluación del desempeño humano y su medición, así como, el apoyo en el cálculo de la nómina ordinaria y extraordinaria.
                    </p>

                <p>Durante el proceso de formación de los cinco módulos, la y el estudiante desarrollará o reforzará las siguientes competencias laborales:</p>
                <ul>
                    <li>Gestiona trámites administrativos del área de recursos humanos</li>
                    <li>Integra el talento humano en la organización.</li>
                    <li>Implementa plan de desarrollo del talento humano</li>
                    <li>Evalúa el desempeño del talento humano</li>
                    <li>Maneja nómina y compensaciones del talento humano</li>
                </ul>
            </section>
            <div class="button-container">
                <a class="btn" href="pdf/PROGRAMA_DE_ESTUDIOS_ADMINISTRACIÓN_DE_RECURSOS_HUMANOS_2023.pdf" target="_blank" >Más información</a>
            </div>
        </article>
    </main>
</div>

@include('footer')
	</div>
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/lightbox.js"></script>
	<script type="text/javascript" src="js/all.js"></script>
	<script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.js"></script>
	<script type="text/javascript" src="js/jquery.flexslider.js"></script>
	<script type="text/javascript" src="js/jquery.rateyo.js"></script>
	<script type="text/javascript" src="js/jquery.mmenu.all.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>
