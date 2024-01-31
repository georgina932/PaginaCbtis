<!DOCTYPE html>
<html>
<head>
	<title>education</title>
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
            <h1>Misión, Visión y Valores</h1>

            <div class="section">
              <div>
                <h3>Misión</h3>
                <p>
                  Impulsaremos el desarrollo armónico e integral de jóvenes de nivel medio superior,
                  a través de un sistema educativo de calidad que promueve la creatividad e innovación;
                  inspirado en los valores universales y en corresponsabilidad con la comunidad de la región.
                </p>
              </div>
            </div>

            <div class="section">
              <div>
                <h3>Visión</h3>
                <p>
                  Ser la Institución Educativa de Nivel Medio Superior con más prestigio en su entorno,
                  caracterizado por el compromiso de una mejora continua, donde tanto los alumnos como
                  egresados den testimonio vivo por su formación humana y académica, que les permite
                  lograr su proyecto de vida.
                </p>
              </div>
            </div>

            <div class="section" style="justify-content: flex-start;">
              <div>
                <h3>Valores</h3>
                <p>
                    Los valores que guiarán nuestras acciones:
                </p>
                <ul class="values-list">
                  <li class="values-list-item">Justicia</li>
                  <li class="values-list-item">Respeto</li>
                  <li class="values-list-item">Solidaridad</li>
                  <li class="values-list-item">Responsabilidad</li>
                  <li class="values-list-item">Honestidad</li>
                  <li class="values-list-item">Trabajo en equipo</li>
                </ul>
              </div>
            </div>
          </div>

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
