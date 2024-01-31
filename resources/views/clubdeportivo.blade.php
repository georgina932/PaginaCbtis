<!DOCTYPE html>
<html>
<head>
	<title>Deportivo</title>
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
            <h1>CLUB DEPORTIVO</h1>

            <div class="section">
              <div>
                <h3>FUTBOL</h3>
                <p style="text-align: justify">
                    <img src="images/futbol.jpg" alt="Image" > <br>
                    Un espacio vibrante donde la pasión por el deporte se une con el compromiso académico. Aquí, los estudiantes encuentran más que un equipo;
                    encuentran una familia unida por el amor al fútbol
                    y el deseo de representar con orgullo a nuestra institución.<br>
                    Nuestra Identidad:
                        <ul class="values-list" >
                            <li class="values-list-item">🏆 Espíritu Competitivo:  Fomentamos la competitividad sana y el deseo de superación</li>
                            <li class="values-list-item">⚽ Desarrollo Integral: No solo buscamos la excelencia deportiva, sino también el crecimiento personal y académico </li>
                            <li class="values-list-item">🌐 Inclusividad: Todos son bienvenidos, independientemente de su nivel de habilidad</li>
                      </ul>
                    <p style="text-align: justify; ">Loque ofrecemos:
                        <ul class="values-list">
                            <li class="values-list-item">🚀 Entrenamientos: Sesiones de entrenamiento intensivas que desarrollan habilidades</li>
                            <li class="values-list-item">🤝 Espíritu de Equipo: Fomentamos la camaradería y el compañerismo </li>
                            <li class="values-list-item">🏟️ Participación en Torneos: Representamos al CBTIS 255 en competiciones locales e intercolegiales</li>

                      </ul>
                    </p>
                    </p>
              </div>
            </div>

            <div class="section">
                <div>
                  <h3>VOLEIBOL</h3>
                  <p style="text-align: justify">
                      <img src="images/voli.jpg" alt="Image" > <br>
                      ¡Bienvenido al Club Deportivo de Voleibol del CBTIS 255, donde la pasión por el juego se combina con la excelencia académica! Nuestro club está dedicado a fomentar el talento,
                      la camaradería y el desarrollo integral de nuestros estudiantes-atletas.<br>
                      Nuestra Identidad:
                          <ul class="values-list" >
                              <li class="values-list-item">🏐 Espíritu Competitivo: Promovemos la competencia leal y el deseo constante de mejorar</li>
                              <li class="values-list-item">🤝 Trabajo en Equipo: Creemos en la fuerza del trabajo en equipo </li>
                              <li class="values-list-item">🌱 Desarrollo Personal: Más allá del rendimiento deportivo, nos comprometemos a cultivar habilidades </li>
                        </ul>
                      <p style="text-align: justify; ">Loque ofrecemos:
                          <ul class="values-list">
                              <li class="values-list-item">🏆 Participación en Torneos: Representamos al CBTIS 255 en torneos locales e intercolegiales</li>
                              <li class="values-list-item">📘 Énfasis Académico: Valoramos el rendimiento académico y alentamos a nuestros jugadores </li>
                              <li class="values-list-item">🤸 Desarrollo Personal: Promovemos el crecimiento personal y la autoconfianza, </li>

                        </ul>
                      </p>
                      </p>
                </div>
              </div>

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
