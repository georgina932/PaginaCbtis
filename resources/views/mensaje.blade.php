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
              text-align: center; /* Centra el contenido */
            }

            .page-article h1 {
              font-size: 30px;
              color: #333;
              margin-bottom: 20px;
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
              font-size: 18px;
              line-height: 1.6;
              margin-top: 20px;
              margin-bottom: 20px;
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
          </style>
        </head>
        <body>

          <div class="container">
            <article class="page-article">
              <h1>MENSAJE DEL DIRECTOR</h1>
              <img src="images/top-college-pic.jpg" alt="Image">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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
