<!DOCTYPE html>
<html>
<head>
	<title>Mensaje</title>
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
              text-align: justify /* Centra el contenido */
            }

            .page-article h1 {
              font-size: 30px;
              color: #333;
              margin-bottom: 20px;
              text-align: center;
            }
            .page-article h2 {
              font-size: 20px;
              color: #333;
              margin-bottom: 20px;
              text-align: center;
            }

            .page-article img {
              width: 35%; /* Ajusta el ancho de la imagen */
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
              margin-top: 50px;
              margin-bottom: 50px;
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
              color: #9D2449;
            }
          </style>
        </head>
        <body>

          <div class="container">
            <article class="page-article">
              <h1>MENSAJE DEL DIRECTOR</h1>
              <img src="images/top-college-pic.jpg" alt="Image">
              <br>
              <h2> SEMESTRE FEBRERO-JULIO 2024 </h2>
              <p>
                Reciban un gran saludo de quienes laboramos en el CBTis 255.
              <br>

                Con orgullo puedo decir que nuestro plantel representa una etapa en la vida de nuestros estudiantes, en la cual, sus habilidades, actitudes y conocimientos se desbordan para llegar
                a ser ciudadanos de gran aporte a la sociedad Tarimorense, con gran compromiso social y gran calidad humana.
            <br>
                Agradezco a los padres y madres de familia y tutores que depositan su confianza en el CBTis 255 para que sus hijos e hijas se formen como técnicos en alguna
                de nuestras especialidades, así también agradezco el compromiso que desde casa han aceptado para fortalecer la educación media-superior de nuestros alumnos y alumnas.
                <br>

                Les invito a todos los que formamos la comunidad educativa del plantel CBTis 255 a continuar trabajando y a seguir preparándonos para afrontar los retos que la educación nos requiere,
                les invito a todos y todas a sentirnos orgullosos de ser CBTis 255, Lobos Grises!

              </p>
              <div class="share-section">
                Compartir en:
                <a href="https://www.facebook.com/cbtis255/about?locale=es_LA">
                    <i class="fab fa-facebook-f"></i></a>

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
