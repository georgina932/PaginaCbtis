<!DOCTYPE html>
<html>
<head>
	<title>Ficha</title>
	<meta name="viewport" content="width=device-width">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<link rel="stylesheet" type="text/css" href="css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="css/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.mmenu.all.css" />
	<link rel="stylesheet" type="text/css" href="inner-page-style.css">
	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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
              width: 80%;
              margin: 0 auto;
            }

            .page-article {
              background-color: #fff;
              border-radius: 10px;
              box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
              margin-top: 30px;
              padding: 20px;
              text-align: center; /* Centra el contenido */
            }

            .page-article h1 {
              font-size: 30px;
              color: #333;
              margin-bottom: 20px;
            }

            .page-article img {
              width: 49%; /* Ajusta el ancho de la imagen */
              height: auto;
              border-radius: 10px;
              margin-top: 20px;
              display: block; /* Centra la imagen */
              margin-left: auto;
              margin-right: auto;
            }

            .page-article p {
              font-size: 20px;
              line-height: 1.6;
              margin-top: 20px;
              margin-bottom: 20px;
              text-align: justify;
              color: black
            }

            .share-section {
              font-size: 20px;
              margin-top: 20px;
            }

            .share-section a {
              color: #333;
              margin-right: 15px;
              text-decoration: none;
            }

            .share-section a:hover {
              color: #007bff;
            }
            .image-container {
                display: flex;
                justify-content: space-between; /* Ajusta el espacio entre las imágenes */
            }

            .article-image {
                width: 40%; /* Ajusta el ancho de las imágenes (puedes ajustar según tus necesidades) */
                height: auto; /* Mantiene la proporción original de la imagen */
            }
          </style>
        </head>
        <body>

            <div class="container">
                <article class="page-article">
                  <h1>Proceso de entrega de fichas </h1>

                  <div class="image-container">
                    <img class="article-image" src="images/entrega.jpg" alt="Image">
                    <img class="article-image" src="images/fichas.jpg" alt="Image">

                  </div>

                  <p>
                    ¡Entrega de Fichas CBTIS 255! <br>

                    ¡Estimados estudiantes y padres de familia! <br>

                    Nos complace anunciar que el proceso de entrega de fichas para el ciclo escolar 2024 del CBTIS 255 está por comenzar. Será un gusto recibirlos en nuestras instalaciones para facilitarles este importante trámite que les permitirá asegurar su lugar en nuestra institución educativa.

                    <br>Fecha de Inicio: 6 de febrero de 2024
                    <br>Lugar: Boulevard cbtis 255 #100 col. Centro Tarimoro, Gto

                    <br>Es importante que todos los interesados en cursar sus estudios en nuestro plantel acudan dentro de las fechas señaladas para realizar este trámite. Contamos con un equipo preparado para atenderlos y resolver cualquier pregunta que puedan tener.

                    ¡Esperamos verlos pronto y darles la bienvenida a la familia del CBTIS 255!
                  </p>

                  <div class="share-section">
                    Compartido en:
                    <a href="https://www.facebook.com/cbtis255/about?locale=es_LA"><i class="fab fa-facebook-f"></i></a>

                  </div>
                </article>
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
