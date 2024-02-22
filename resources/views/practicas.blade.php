<!DOCTYPE html>
<html>
<head>
	<title>Documentos de las prácticas</title>
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
              color: black;
            }

            .container {
              width: 80%;
              margin: 0 auto;
            }

            h1 {
              font-size: 48px;
              text-align: center;
              color: black;
              margin-top: 50px;
            }

            .section {
              display: flex;
              justify-content: space-around;
              margin-top: 30px;
              padding: 20px;
              background-color: #fff;
              border-radius: 10px;
              box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
              transition: transform 0.3s ease-in-out;
            }

            .section:hover {
              transform: scale(1.05);
            }

            .section h3 {
              font-size: 24px;
              color: black;
              margin-bottom: 15px;
            }

            .section p {
              font-size: 20px;
              line-height: 1.6;
            }

            .values-list {
            list-style-type: none;
            margin: 0;
            padding: 0;
            }

            .values-list-item {
            font-size: 20px;
            line-height: 1.6;
            position: relative;
            padding-left: 20px;
            }

            .values-list-item::before {
            content: '\2022'; /* Unicode character for a bullet point */
            color: #333;
            font-size: 24px;
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            }
          </style>
        </head>
        <body>

          <div class="container">
            <h1>Documentos Prácticas profesionales</h1>

            <div class="section">
              <div>
                <h3>Informacion general </h3>
                <p>
                    Las prácticas profesionales son una parte integral de la educación técnica y universitaria en muchos países.
                    Consisten en períodos de tiempo durante los cuales los estudiantes trabajan en
                     entornos laborales relacionados con su campo de estudio para ganar experiencia práctica
                </p>
              </div>
            </div>



            <div class="section" style="justify-content: flex-start;">
              <div>
                <h3>Documentos</h3>
                <p>
                    Formatos de las prácticas profesionales las  cuales  son  en  6°. semestre durante 3 meses + 1 día con un total de 240 horas


                </p>
                <ul class="values-list">
                  <li class="values-list-item"><a href="pdf/practicas/1. Solicitud de Prácticas Prof.pdf">Solicitud de prácticas</a> </li>
                  <li class="values-list-item"><a href="pdf/practicas/2. Convenio Individual de Prácticas Prof 2024.docx">Convenio individual</a> </li>
                  <li class="values-list-item"><a href="pdf/practicas/3. Reporte  Mensual de Prácticas Prof.(3).pdf">Reporte mensual</a> </li>
                  <li class="values-list-item"><a href="pdf/practicas/4. Control de Asistencia de Prácticas Prof.pdf">Control de asistencias</a> </li>
                  <li class="values-list-item"><a href="pdf/practicas/5. Evaluación de Prácticas Prof.pdf">Evaluación de las practicas</a> </li>
                  <li class="values-list-item"><a href="pdf/practicas/6. Informe Final de Prácticas Prof.pdf">Informe final de prácticas </a> </li>
                  <li class="values-list-item"><a href="pdf/practicas/7. Requisitos Constancia de Término de Prácticas Prof.pdf">Requisitos para la constancia de término </a> </li>
                  <li class="values-list-item"><a href="pdf/practicas/Ejemplo de llenado del reporte mensual.pdf"> Ejemplo de llenado del reporte mensual </a></li>
                  <li class="values-list-item"><a href="pdf/practicas/TRIP-PRACTICAS PROFESIONALES 2024.pdf">Triptico informativo de las prácticas</a> </li>
                </ul>
              </div>
            </div>
          </div>
          <br>

          @include('footer')
	</div>
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/lightbox.js"></script>
	<script type="text/javascript" src="js/all.js"></script>
	<script type="text/javascript" src="js/owl.carousel.js"></script>
	<script type="text/javascript" src="js/jquery.flexslider.js"></script>
	<script type="text/javascript" src="js/jquery.rateyo.js"></script>
	<script type="text/javascript" src="js/jquery.mmenu.all.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>
