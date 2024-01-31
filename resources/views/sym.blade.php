<!DOCTYPE html>
<html>
<head>
	<title>sym</title>
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
        <h2>Técnico en Soporte y mantenimiento</h2>
        <img src="images/soporte.jpg" alt="programacion">

        <article>
            <section class="course-intro">
                <h3>Descripción de la carrera</h3>
                <p>
                    En el contexto regional y nacional, la formación de Técnicos en Soporte y Mantenimiento de Equipos de Cómputo es relevante porque permiten al
                    estudiante egresado ingresar al mundo laboral que se demanda en la actualidad. La carrera de Técnico en Soporte y Mantenimiento de Equipos
                    de Cómputo desarrolla en el estudiante las siguientes competencias profesionales: realizar operaciones de ensamble, configuración e instalación
                    de hardware y software en el equipo de cómputo; dar mantenimiento a hardware y software en el equipo de cómputo; proporcionar soporte técnico
                    presencial o a distancia en software de aplicación y hardware; diseñar redes de computadoras; e, instalar y operar redes de computadoras,
                    apegándose a estándares oficiales y códigos de ética del profesional técnico.

                </p>
            </section>

            <section class="course-objective">
                <h3>Mapa de competencias profesionales</h3>
                <img src="images/perfilsym.jpg" alt="sym">

                <h3>Perfil de egreso</h3>
                <p>
                    La carrera de Técnico en Soporte y mantenimiento de equipo de cómputo permite a los estudiantes, a lo largo del bachillerato, la adquisición de
                    competencias desde distintos ámbitos que promueven la formación integral, sustentada en las genéricas, disciplinares y profesionales,
                    complementadas con las de productividad y empleabilidad, y las habilidades socioemocionales que influyen en la personalidad
                </p>

                <p>Durante el proceso de formación de los cinco módulos, la y el estudiante desarrollará o reforzará las siguientes competencias laborales:</p>
                <ul>
                    <li>Realizar operaciones de ensamble, configuración e instalación de hardware y software en el equipo de cómputo</li>
                    <li>Dar mantenimiento a hardware y software en el equipo de cómputo</li>
                    <li>Proporcionar soporte técnico presencial o a distancia en software de aplicación y hardware</li>
                    <li>Diseñar redes de computadoras; e, instalar y operar redes de computadoras.</li>

                </ul>
            </section>
            <div class="button-container">
                <a class="btn" href="pdf/Soporte_y_Mantenimiento_de_Equipo_de_Computo.pdf" target="_blank" >Más información</a>
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
