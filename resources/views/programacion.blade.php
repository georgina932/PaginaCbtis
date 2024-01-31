<!DOCTYPE html>
<html>
<head>
	<title>programacion</title>
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
        <h2>Técnico en programación</h2>
        <img src="images/programacion.png" alt="programacion">

        <article>
            <section class="course-intro">
                <h3>Descripción de la carrera</h3>
                <p>La carrera de Técnico en Programación forma al estudiante para el desarrollo de software de sistemas informáticos, desarrollo de software
                    con herramientas orientadas a la productividad, la administración de bases de datos en un sistema de información, el desarrollo de
                    aplicaciones web y el desarrollo de aplicaciones móviles multiplataforma. Todas estas competencias posibilitan al egresado su
                    incorporación al mundo laboral, continuar su trayectoria educativa o desarrollar procesos productivos independientes, de acuerdo con
                    sus intereses profesionales o las necesidades en su entorno social, facilitando al egresado su incorporación al mundo laboral en: edición
                    de software y edición de software integrada con la reproducción, servicios de diseño de sistemas de cómputo y servicios relacionados,
                    escuelas de computación del sector privado y escuelas de computación del sector público, como: desarrolladores y analistas de software
                    y multimedia, o bien en el desarrollo de procesos productivos independientes, de acuerdo con sus intereses profesionales y necesidades
                    de su entorno social</p>
            </section>

            <section class="course-objective">
                <h3>Mapa de competencias profesionales</h3>
                <img src="images/perfilpro.jpg" alt="programacion">

                <h3>Perfil de egreso</h3>
                <p>La formación que ofrece la carrera de Técnico en Programación permite al egresado, a través de la articulación de saberes de diversos
                    campos, realizar actividades dirigidas a diseñar, codificar e implementar software de sistemas informáticos; emplear frameworks y aplicar
                    metodologías ágiles para el desarrollo de software; implementar bases de datos relacionales y no relacionales en un sistema de
                    información; construir e implementar aplicaciones web; por último, diseñar e implementar aplicaciones móviles multiplataforma.
                    </p>

                <p>Durante el proceso de formación de los cinco módulos, la y el estudiante desarrollará o reforzará las siguientes competencias laborales:</p>
                <ul>
                    <li>Desarrollo de software de sistemas informáticos</li>
                    <li>Desarrollo de software con herramientas orientadas a la productividad</li>
                    <li>Administración de bases de datos en un sistema de información</li>
                    <li>Desarrollo de aplicaciones web en un sistema de información</li>
                    <li>Desarrollo de aplicaciones móviles multiplataforma</li>
                </ul>
            </section>
            <div class="button-container">
                <a class="btn" href="pdf/PROGRAMA_DE_ESTUDIOS_PROGRAMACION_2023.pdf" target="_blank" >Más información</a>
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
