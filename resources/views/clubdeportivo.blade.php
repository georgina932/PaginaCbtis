<!DOCTYPE html>
<html>
<head>
	<title>Talleres</title>
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
              width: 60%;
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
            <h1>TALLERES DEL CBTIS 255</h1>

            <div class="section">
              <div>
                <h3>FUTBOL</h3>
                <p><i class="fas fa-chalkboard-teacher"></i>  Sergio Paredes </p>
                <br>
                <p style="text-align: justify">
                    <img src="images/futbol.jpg" alt="Image" width="1000" > <br>
                    Un espacio vibrante donde la pasión por el deporte se une con el compromiso académico. Aquí, los estudiantes encuentran más que un equipo;
                    encuentran una familia unida por el amor al fútbol
                    y el deseo de representar con orgullo a nuestra institución.<br>
                    Nuestra Identidad:
                        <ul class="values-list" >
                            <li class="values-list-item">🏆 Espíritu Competitivo  </li>
                            <li class="values-list-item">⚽ Desarrollo Integral </li>
                            <li class="values-list-item">🌐 Inclusividad</li>
                      </ul>
                    <p style="text-align: justify;">Loque ofrecemos:
                        <ul class="values-list">
                            <li class="values-list-item">🚀 Entrenamientos</li>
                            <li class="values-list-item">🤝 Espíritu de Equipo</li>
                            <li class="values-list-item">🏟️ Participación en Torneos</li>
                      </ul>
                    </p>
                    </p>
              </div>
            </div>

            <div class="section">
                <div>
                  <h3>VOLEIBOL</h3>
                  <p><i class="fas fa-chalkboard-teacher"></i>  José Sanchez Tirado</p>
                <br>
                  <p style="text-align: justify">
                      <img src="images/voli.jpg" alt="Image" > <br>
                      ¡Bienvenido al Taller de Voleibol del CBTIS 255, donde la pasión por el juego se combina con la excelencia académica! Nuestro club está dedicado a fomentar el talento,
                      la camaradería y el desarrollo integral de nuestros estudiantes-atletas.<br>
                      Nuestra Identidad:
                          <ul class="values-list" >
                              <li class="values-list-item">🏐 Espíritu Competitivo</li>
                              <li class="values-list-item">🤝 Trabajo en Equipo</li>
                              <li class="values-list-item">🌱 Desarrollo Personal</li>
                        </ul>
                      <p style="text-align: justify; ">Loque ofrecemos:
                          <ul class="values-list">
                              <li class="values-list-item">🏆 Participación en Torneos</li>
                              <li class="values-list-item">📘 Énfasis Académico</li>
                              <li class="values-list-item">🤸 Desarrollo Personal</li>

                        </ul>
                      </p>
                      </p>
                </div>
            </div>

          <div class="section">
            <div>
              <h3>AJEDREZ</h3>
              <p><i class="fas fa-chalkboard-teacher"></i>  Enrique Mendez P.</p>
              <br>
              <p style="text-align: justify">
                  <img src="images/ajedrez.jpg" alt="Image" width="1000" > <br>
                  Donde la estrategia, la mente aguda y la pasión por el ajedrez se encuentran! Nuestro club está diseñado para estudiantes que comparten el amor por este juego milenario
                  y buscan un espacio donde la mente y la estrategia se entrelacen con la comunidad.<br> Nuestra Identidad:
                      <ul class="values-list" >
                          <li class="values-list-item">♛ Estrategia y Concentración</li>
                          <li class="values-list-item">🤝Comunidad Unida</li>
                          <li class="values-list-item">📚 Vínculo Académico</li>
                    </ul>
                  <p style="text-align: justify; ">Loque ofrecemos:
                      <ul class="values-list">
                          <li class="values-list-item">🏆 Participación en Torneos</li>
                          <li class="values-list-item">🧠 Sesiones de Juego y Análisis</li>


                    </ul>
                  </p>
                  </p>
            </div>
          </div>

          <div class="section">
              <div>
                <h3>BANDA DE GUERRA</h3>
                <p><i class="fas fa-chalkboard-teacher"></i>  Tania Hernandez Zamora</p>
              <br>
                <p style="text-align: justify">
                    <img src="images/escolta.jpg" alt="Image" width="1000" > <br>
                      El compromiso, la disciplina y el espíritu de servicio se fusionan para formar líderes destacados! Nuestro taller se enorgullece de
                      cultivar habilidades cívicas y fomentar el respeto a los valores institucionales.
                        <ul class="values-list" >
                            <li class="values-list-item">🛡️ Disciplina y Rigor</li>
                            <li class="values-list-item">🤝 Trabajo en Equipo</li>
                            <li class="values-list-item">🎓 Civismo y Responsabilidad</li>
                      </ul>
                    <p style="text-align: justify; ">Loque ofrecemos:
                        <ul class="values-list">
                            <li class="values-list-item">🚶 Formaciones y Protocolos</li>
                            <li class="values-list-item">🎓 Desarrollo Personal</li>


                      </ul>
                    </p>
                    </p>
                 </div>
            </div>

            <div class="section">
            <div>
                <h3>DANZA FOLCLORICA</h3>
                <p><i class="fas fa-chalkboard-teacher"></i> Maria del Rosario Muñoz Rodriguez</p>
              <br>
                <p style="text-align: justify">
                    <img src="images/danza.jpg" alt="Image" width="1000" > <br>
                    Donde la expresión artística y la pasión por el movimiento se fusionan para crear una comunidad vibrante y creativa!
                     Nuestro club celebra la diversidad a través de la danza, proporcionando
                    un espacio donde los estudiantes pueden expresarse, aprender y crecer juntos.
                    <br> Nuestra Identidad:
                        <ul class="values-list" >
                            <li class="values-list-item">💃 Diversidad Artística: Valoramos y celebramos la diversidad de estilos de danza</li>
                            <li class="values-list-item">🤝 Comunidad Unida: Fomentamos la camaradería y el compañerismo, creando un ambiente acogedor</li>
                            <li class="values-list-item">🌟 Creatividad sin Límites: Inspiramos la creatividad y la innovación, alentando a nuestros bailarines</li>
                      </ul>
                    <p style="text-align: justify; ">Loque ofrecemos:
                        <ul class="values-list">
                            <li class="values-list-item">🎭 Participación en Eventos: Representamos al CBTIS 255 en eventos locales</li>
                            <li class="values-list-item">🎶 Exploración Musical: Integrando una variedad de estilos musicales, desde contemporáneo hasta folclórico </li>
                      </ul>
                    </p>
                    </p>
              </div>
            </div>
            <div class="section">
                <div>
                    <h3>ARDUINO</h3>
                    <p><i class="fas fa-chalkboard-teacher"></i> Jose Refugio Perez Contreras</p>
                  <br>
                    <p style="text-align: justify">
                        <img src="images/ardui.jpg" alt="Image"  > <br>
                        ¡Bienvenidos al Taller de Arduino del CBTIS 255, donde la innovación, la programación y la creatividad se encuentran para explorar el emocionante mundo de la tecnología! Este taller está diseñado para estudiantes interesados en
                        adentrarse en el fascinante campo de la electrónica y la programación con Arduino.
                        <br> Nuestra Identidad:
                            <ul class="values-list" >
                                <li class="values-list-item">🤖 Innovación y Tecnología</li>
                                <li class="values-list-item">💡 Aprendizaje Práctico</li>
                                <li class="values-list-item">🌐 Comunidad Tecnológica</li>
                          </ul>
                        <p style="text-align: justify; ">Loque ofrecemos:
                            <ul class="values-list">
                                <li class="values-list-item">🛠️ Proyectos Prácticos</li>
                                <li class="values-list-item">🧑‍🤝‍🧑 Colaboración y Compartir Conocimientos</li>
                                <li class="values-list-item">📈 Desarrollo de Habilidades Técnicas</li>
                          </ul>
                        </p>
                        </p>
                  </div>
                </div>
                <div class="section">
                    <div>
                        <h3>BELLEZA</h3>
                        <p><i class="fas fa-chalkboard-teacher"></i> Rosa Patiño</p>
                      <br>
                        <p style="text-align: justify">
                            <img src="images/belleza.jpg" alt="Image"  > <br>
                            ¡Bienvenidos al Taller de Belleza del CBTIS 255, donde la creatividad, la habilidad artística y la pasión por el mundo de la belleza se fusionan para explorar y perfeccionar las técnicas de cuidado personal y estilismo!
                            <br> Nuestra Identidad:
                                <ul class="values-list" >
                                    <li class="values-list-item">💇‍♀️ Cuidado Personal</li>
                                    <li class="values-list-item">🎨 Creatividad y Estilo</li>
                                    <li class="values-list-item">👩‍🔧 Formación Profesional</li>
                              </ul>
                            <p style="text-align: justify; ">Loque ofrecemos:
                                <ul class="values-list">
                                    <li class="values-list-item">💄 Maquillaje y Cuidado Facial</li>
                                    <li class="values-list-item">✂️ Corte y Estilo</li>
                                    <li class="values-list-item">📈 Desarrollo de Habilidades Técnicas</li>
                              </ul>
                            </p>
                        </p>
                    </div>
                </div>
                <div class="section">
                    <div>
                        <h3>EMPRENDIMIENTO</h3>
                        <p><i class="fas fa-chalkboard-teacher"></i> Angel de Jesús Arzate Cervantes</p>
                      <br>
                        <p style="text-align: justify">
                            <img src="images/empren.jpg" alt="Image"  > <br>
                            ¡Bienvenidos al Taller de Emprendimiento del CBTIS 255, donde la creatividad, la innovación y la mentalidad empresarial se fusionan para inspirar a los estudiantes a convertirse en emprendedores exitosos! Este taller está diseñado para cultivar habilidades empresariales y fomentar la creación y gestión de proyectos innovadores.
                            <br> Nuestra Identidad:
                                <ul class="values-list" >
                                    <li class="values-list-item">🚀 Cultura Emprendedora</li>
                                    <li class="values-list-item">💡 Innovación y Creatividad</li>
                                    <li class="values-list-item">🌐 Conexión con la Comunidad</li>
                              </ul>
                            <p style="text-align: justify; ">Loque ofrecemos:
                                <ul class="values-list">
                                    <li class="values-list-item">📈 Desarrollo de Planes de Negocio</li>
                                    <li class="values-list-item">🛠️ Habilidades Empresariales</li>
                              </ul>
                            </p>
                        </p>
                    </div>
                </div>
                <div class="section">
                    <div>
                        <h3>ARTESANIAS</h3>
                        <p><i class="fas fa-chalkboard-teacher"></i> José Benjamin Carreon Andrade </p>
                      <br>
                        <p style="text-align: justify">
                            <img src="images/arte.jpg" alt="Image"  > <br>
                            ¡Te damos la bienvenida al Taller de Artesanías del CBTIS 255, donde la creatividad, la destreza manual y el amor por las artes se encuentran para dar vida a creaciones únicas! Este taller está diseñado para estudiantes interesados en explorar y perfeccionar técnicas artesanales, desde la cerámica hasta la creación de objetos decorativos.
                            <br> Nuestra Identidad:
                                <ul class="values-list" >
                                    <li class="values-list-item">🎨 Celebración de la Creatividad</li>
                                    <li class="values-list-item">👐 Habilidad y Destrezad</li>
                                    <li class="values-list-item">🤝 Comunidad Artística</li>
                              </ul>
                            <p style="text-align: justify; ">Loque ofrecemos:
                                <ul class="values-list">
                                    <li class="values-list-item">🖌️ Pintura y Decoració</li>
                                    <li class="values-list-item">🛍️ Creación de Objetos Decorativos</li>
                              </ul>
                            </p>
                        </p>
                    </div>
                </div>
                <div class="section">
                    <div>
                        <h3>COSTURA Y BORDADO</h3>
                        <p><i class="fas fa-chalkboard-teacher"></i> Rebeca Méndez Nieto </p>
                      <br>
                        <p style="text-align: justify">
                            <img src="images/costura.jpg" alt="Image"  > <br>
                            ¡Te damos la bienvenida al Taller de Costura y Bordado del CBTIS 255, donde la elegancia, la creatividad y la habilidad con las manos se unen para explorar el fascinante mundo de la moda y la confección! Este taller está diseñado para estudiantes interesados en aprender técnicas de costura, diseño de moda y bordado.
                            <br> Nuestra Identidad:
                                <ul class="values-list" >
                                    <li class="values-list-item">👗 Estilo y Elegancia</li>
                                    <li class="values-list-item">🧵 Habilidad y Precisión</li>
                                    <li class="values-list-item">🌟 Innovación en la Moda</li>
                              </ul>
                            <p style="text-align: justify; ">Loque ofrecemos:
                                <ul class="values-list">
                                    <li class="values-list-item">✂️ Técnicas de Costura</li>
                                    <li class="values-list-item">🧵 Bordado Creativo</li>
                              </ul>
                            </p>
                        </p>
                    </div>
                </div>
                <div class="section">
                    <div>
                        <h3>BANDA DE VIENTO </h3>
                        <p><i class="fas fa-chalkboard-teacher"></i> Francisco Patiño Méndez </p>
                      <br>
                        <p style="text-align: justify">
                            <img src="images/banda.jpg" alt="Image" width="1000"  > <br>
                            ¡Bienvenidos al Taller de Banda de Viento del CBTIS 255, donde la armonía, la musicalidad y la pasión por la música se fusionan para crear una experiencia enriquecedora! Este taller está dedicado a estudiantes interesados en explorar el mundo de la música a través de la interpretación de instrumentos de viento.
                            <br> Nuestra Identidad:
                                <ul class="values-list" >
                                    <li class="values-list-item">🎺 Pasión por la Música</li>
                                    <li class="values-list-item">🎵 Arte de la Interpretación</li>
                                    <li class="values-list-item">🤝 Comunidad Musical</li>
                              </ul>
                            <p style="text-align: justify; ">Loque ofrecemos:
                                <ul class="values-list">
                                    <li class="values-list-item">🎼 Práctica Instrumental</li>
                                    <li class="values-list-item">🥁 Participación en Eventos</li>
                              </ul>
                            </p>
                        </p>
                    </div>
                </div>
                <div class="section">
                    <div>
                        <h3>LISTON </h3>
                        <p><i class="fas fa-chalkboard-teacher"></i> Esmeralda Ortiz Glz. </p>
                      <br>
                        <p style="text-align: justify">
                            <img src="images/iston.jpg" alt="Image" width="1000"  > <br>
                            ¡Bienvenidos al Taller de Listón del CBTIS 255, donde la creatividad, la destreza manual y la expresión artística se entrelazan para crear hermosas y coloridas creaciones con listones! Este taller está diseñado para estudiantes interesados en explorar las posibilidades artísticas y decorativas del uso de listones en diversos proyectos.
                            <br> Nuestra Identidad:
                                <ul class="values-list" >
                                    <li class="values-list-item">🎀 Creatividad con Listones</li>
                                    <li class="values-list-item">✂️ Habilidad Manua</li>
                                    <li class="values-list-item">🌈 Color y Diseño</li>
                              </ul>
                            <p style="text-align: justify; ">Loque ofrecemos:
                                <ul class="values-list">
                                    <li class="values-list-item">🎨 Proyectos Creativos</li>
                                    <li class="values-list-item">🧵 Técnicas de Tejido</li>
                              </ul>
                            </p>
                        </p>
                    </div>
                </div>
                <div class="section">
                    <div>
                        <h3>TALLER DE CIENCIAS </h3>
                        <p><i class="fas fa-chalkboard-teacher"></i> Fernando Guadalupe Acevedo </p>
                      <br>
                        <p style="text-align: justify">
                            <img src="images/ciencia.jpg" alt="Image" width="1000"  > <br>
                            ¡Bienvenidos al Taller de Ciencias del CBTIS 255, donde la curiosidad, la experimentación y el descubrimiento son la base para explorar el fascinante mundo de las ciencias! Este taller está diseñado para estudiantes interesados en profundizar en disciplinas científicas
                            <br> Nuestra Identidad:
                                <ul class="values-list" >
                                    <li class="values-list-item">🔬 Curiosidad Científica</li>
                                    <li class="values-list-item">🌐 Exploración Multidisciplinaria</li>
                                    <li class="values-list-item">🤝 Colaboración Científica</li>
                              </ul>
                            <p style="text-align: justify; ">Loque ofrecemos:
                                <ul class="values-list">
                                    <li class="values-list-item">🌡️ Experimentación Práctica</li>
                                    <li class="values-list-item">🧪 Proyectos de Investigación</li>
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
