<!DOCTYPE html>
<html>
<head>
	<title>historia</title>
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
          color: black;
        }

        .container {
          width: 80%;
          margin: 0 auto;
        }

        .page-article {
          text-align: justify;
          background-color: #fff;
          border-radius: 10px;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
          margin-top: 30px;
          padding: 20px;
        }

        .page-article h1 {
          font-size: 30px;
          margin-bottom: 20px;
          color: black;
        }

        .video-container {
          position: relative;
          width: 100%;
          overflow: hidden;
          padding-top: 56.25%; /* Aspect ratio 16:9 */
        }

        .video-container iframe {
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          border: none;
        }

        .page-article p {
          font-size: 27px;
          line-height: 1.6;
          margin-bottom: 20px;
        }

        .share-section {
          font-size: 20px;
        }

        .share-section a {
          color: black;
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
          <h1>VIDEO DE CONMEMORACION DEL 30° ANIVERSARIO DEL CBTis 255 DE TARIMORO, GTO.</h1>
          <div class="video-container">
            <iframe
              src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fcbtis255%2Fvideos%2F995713341541037%2F&show_text=false&width=560&t=0"
              width="765"
              height="514"
              style="border:none;overflow:hidden"
              scrolling="no"
              frameborder="0"
              allowfullscreen="true"
              allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"
              allowFullScreen="true">
            </iframe>
          </div>
          <p>
            Un homenaje a todos los que hicieron posible la existencia de nuestra Institución;
            y un reconocimiento para todas y cada una de las Generaciones de egresados, durante más de 30 años.
            Oficina Estatal de la DGETI en el Estado de Guanajuato CBTis 255 ¡LOBOS GRISES!.
          </p>
          <div class="share-section">
            Compartido en :
            <a href="https://www.facebook.com/cbtis255/about?locale=es_LA"><i class="fab fa-facebook-f"></i></a>
          </div>
        </article>
      </div>
      <br>

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
