<!DOCTYPE html>
<html>
<head>
	<title>Documentos del Servicio social</title>
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
            <h1>Documentos. Sercivio Social</h1>

            <div class="section">
              <div>
                <h3>Informacion general </h3>
                <p>
                    El servicio social en CBTIS 255, es un requisito obligatorio para los estudiantes antes de obtener su título. El servicio social es una oportunidad
                    para que los estudiantes apliquen los conocimientos adquiridos durante su
                    educación en un entorno práctico y real,
                    al mismo tiempo que contribuyen de manera positiva a la comunidad.
                </p>
              </div>
            </div>



            <div class="section" style="justify-content: flex-start;">
              <div>
                <h3>Documentos</h3>
                <p>
                    Formatos de servicio social que se realiza en 5°. Semestre durante 6 meses + 1 dia un total de 480 horas:

                </p>
                <ul class="values-list">
                  <li class="values-list-item"><a href="pdf/1.Solicitud SS 2023.pdf">Solicitud</a> </li>
                  <li class="values-list-item"><a href="pdf/2.Carta de aceptación 2023.pdf">Carta de aceptación</a> </li>
                  <li class="values-list-item"><a href="pdf/3.Carta compromiso 2023.pdf">Carta compromiso</a> </li>
                  <li class="values-list-item"><a href="pdf/5.Control de asistencia SS 2023.pdf">Control de asistencia</a> </li>
                  <li class="values-list-item"><a href="pdf/7.Requisitos constancia SS2023.pdf">Requisitos de constancia</a> </li>
                  <li class="values-list-item"><a href="pdf/GUIA PARA LLENADO.pdf">Guia de llenado </a> </li>
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
