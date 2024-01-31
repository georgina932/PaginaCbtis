<!DOCTYPE html>
<html>
<head>
	<title>Transparencia</title>
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
                width: 90%; /* Ajusta el ancho de las imágenes (puedes ajustar según tus necesidades) */
                height: auto; /* Mantiene la proporción original de la imagen */
            }
          </style>
        </head>
        <body>

            <div class="container">
                <article class="page-article">
                  <h1>Jornada de transparencia y rendición de cuentas del ciclo 2022-2023</h1>

                  <div class="image-container">
                    <img class="article-image" src="images/transpa.jpg" alt="Image">
                    <img class="article-image" src="images/transpa2.jpg" alt="Image">
                  </div>

                  <p>
                    Se realizó hoy por parte de nuestro Director, el ingeniero Ricardo Corona Aguado, el Informe de actividades dentro del marco de la Jornada de Transparencia y Rendición de cuentas del ciclo 2022-2023.
                    En su informe el director expuso, a los presentes y observadores por parte de la DGETI, el ingeniero Gabino Cruz Mata, Responsable de Planeación y Evaluación de la DGETI en el Estado de Guanajuato, así como la ingeniero Mónica Alvarado Barrera directora del CETis 89 de Salvatierra, las actividades que se han desarrollado dentro del plantel con toda la comunidad estudiantil que orgullosamente forma parte del CBTis 255.
                    Destacamos y agrademos la distinguida presencia de nuestro Supervisor, el Ing. Wlfrido Contreras Camarena.
                    En este ejercicio de transparencia queda claro que en el CBTis 255 trabajamos juntos por el bien de nuestros estudiantes y de la sociedad de Tarimoro, Gto.
                    Nuestro Director hizo énfasis en que el trabajo colaborativo es lo que ha llevado a los buenos resultados del plantel y que aún hay mucho por hacer.
                    CBTis 255
                    ¡ L O B O S    G R I S E S !
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
