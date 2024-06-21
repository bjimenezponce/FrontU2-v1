<?php
function getEndpointByToken($_endpoint, $_token)
{
    //echo 'endpoint: ' . $_endpoint . ' | token: ' . $_token;
    //Configuracion de la solicitud con cURL
    $ch = curl_init($_endpoint);
    //configurar Headers
    curl_setopt(
        $ch,
        CURLOPT_HTTPHEADER,
        array(
            'Authorization: Bearer ' . $_token
        )
    );
    //configurar que contiene respuesta
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //ejecutar la solicitud / pegarle al endpoint
    $respuesta = curl_exec($ch);
    //verificar si existe una respuesta
    if ($respuesta === false) {
        return 'Error en la solicitud: ' . curl_error($ch);
    }
    //cerrar la sesion de cURL
    curl_close($ch);
    return $respuesta;
}
// echo 'esto es PHP';

// echo $endpointContacto;
//echo 'la funcion devuelve: ' . getEndpointByToken('http://localhost/backend-sec71-2024t1/v1/services/', 'ciisa');
$endpointPregunta = getEndpointByToken('http://localhost/BackU3/V1/pregunta_frecuente/', 'get');
$endpointPregunta = json_encode($endpointPregunta);

$endpointNosotros = getEndpointByToken('http://localhost/BackU3/V1/historia/', 'get');
$endpointNosotros = json_encode($endpointNosotros);

$endpointParcela = getEndpointByToken('http://localhost/BackU3/V1/parcela/', 'get');
$endpointParcela = json_encode($endpointParcela);
?>
<!DOCTYPE html>
<html lang="es">

<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parcelas TerraSol</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/prueba.nav.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <style>
        .required-field::after {
            content: " *";
            color: red;
        }

        .warning {
            color: red;
            font-size: 0.875em;
        }
    </style>


</head>

<body class="fondo">
    <!--navbar-->

    <header class="navbar sticky-top ">
        <ul>
            <img src="../img/logo.png" class="logo ">

            <li><a href="#">Home</a></li>
            <li><a href="#parcelas">Parcelas</a></li>
            <li><a href="#contactanos">Contacto</a></li>
            <li><a href="#Nosotros">Nosotros</a></li>
            <li><a href="#frecuentes">Frecuentes</a></li>
        </ul>
    </header>




    <div class="banner">

        <div class="content">
            <h1>PARCELAS TERRASOL</h1>
        </div>

    </div>


    <br id="nosotros">


    <!--NOSOTROS-->

    <section id="" class="titulos elementor-background-overlay">
        <div id="parcelas" class="nosotrosfoto d-flex justify-content-center align-items-center">

            <!--carta1-->
            <div class="card paddings" style="width: 14rem; margin-right: 1rem;">
                <img src="../img/parcela1.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Testimonio 1</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#contactanos" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>

        </div>
    </section>




    </div>

    <br id="parcelas">


    <!--CARRUSEL-->
    <h1 class="margenes container titulos col-md-6">Parcelas </h1>
    <section>
        <div class="caja text-align: center;">
            <div id="carouselExampleDark" class="carousel carousel-dark slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <a href="#">
                            <img src="../img/testimonio3.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption productos d-md-block">
                                <h5>Testimonio 1</h5>
                                <p> "Comprar esta parcela fue la mejor decisión, el proceso fue rápido y sin complicaciones."</p>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <a href="#">
                            <img src="../img/testimonio2.jpeg" class="d-block w-100" alt="...">
                            <div class="carousel-caption productos d-md-block">
                                <h5>Testimonio 2</h5>
                                <p>"Estoy encantado con mi nueva parcela, el paisaje es simplemente espectacular."</p>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="#">
                            <img src="../img/testimonio1.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption productos d-md-block">
                                <h5>Testimonio3</h5>
                                <p>"La atención al cliente fue excelente, hicieron que todo fuera muy fácil y claro."</p>
                            </div>
                        </a>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <!-- NOSOTROS  -->

    <div id="Nosotros" class="margenes m-50px">

        <div class="col-md-6 container titulos py-50">
            <h1 class="titulos ">Nosotros</h1>
        </div>

        <section class="container  col-md-6 titulos">

            <p>aca se mete</p>

            <p>insertar datos 2</p>



        </section>
    </div>

    <!--contacto-->
    <div id="contactanos" class="margenes fondocontactanos">

        <div>
            <div class="col-md-6 container titulos">
                <h1 class="titulos ">Contáctanos</h1>
            </div>
        </div>

        <!--formulario-->
        <div class="container">
            <form id="contactForm" class="row g-3">
                <div class="col-md-6">
                    <label for="nombre" class="form-label required-field">Nombre</label>
                    <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre">
                    <div id="nombreWarning" class="warning"></div>
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label required-field">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Soyuncorreo@correo.cl"
                        name="email">
                    <div id="emailWarning" class="warning"></div>
                </div>
                <div class="col-md-6">
                    <label for="telefono" class="form-label required-field">Telefono</label>
                    <input type="text" class="form-control" id="telefono" placeholder="Telefono de Contacto"
                        name="telefono">
                    <div id="telefonoWarning" class="warning"></div>
                </div>
                <div class="col-md-6">
                    <label for="mensaje" class="form-label required-field">Dejanos tu Mensaje</label>
                    <textarea class="form-control" id="mensaje" name="mensaje" rows="3"></textarea>
                    <div id="mensajeWarning" class="warning"></div>
                </div>
                <div class="col-md-6">
                    <input type="checkbox" class="terminos" id="terminos">
                    <label for="terminos" class="terminos titulos required-field">Términos y condiciones</label>
                    <div id="terminosWarning" class="warning"></div>
                </div>

                <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                <form action="?" method="POST">
                    <div class="g-recaptcha" data-sitekey="6LdxEfIpAAAAAI1oJEVwbEY-nIPpRFNuhoAToMRS"></div>

                    <div class="col-md-6">
                        <button type="submit" class="button" id="enviarFormulario">Enviar</button>
                    </div>
                    <div class="col-md-12">
                        <p class="alerta" id="alerta"></p>
                    </div>
                    <title>reCAPTCHA demo: Simple page</title>




                </form>

                <!-- Modal de éxito -->
                <div class="modal fade" id="successModal" tabindex="-1" role="dialog"
                    aria-labelledby="successModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="successModalLabel">Éxito</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                El formulario ha sido enviado con éxito.
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>

        </div>


    </div>

    <section id="frecuentes">


        <div class="container margenes titulos  accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Accordion Item #1
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the first item's accordion body.</strong> It is shown by default, until the
                        collapse plugin adds the appropriate classes that we use to style each element. These classes
                        control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                        modify any of this with custom CSS or overriding our default variables. It's also worth noting
                        that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                        does limit overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Accordion Item #2
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the
                        collapse plugin adds the appropriate classes that we use to style each element. These classes
                        control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                        modify any of this with custom CSS or overriding our default variables. It's also worth noting
                        that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                        does limit overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Accordion Item #3
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the
                        collapse plugin adds the appropriate classes that we use to style each element. These classes
                        control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                        modify any of this with custom CSS or overriding our default variables. It's also worth noting
                        that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                        does limit overflow.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br>
    <br>

    <!-- mapa y redes sociales -->
    <div class="fondomapa">
        <div class=" container">
            <div class="row">
                <div class="col-md-6">
                    <div class="map-container">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3098.765535022445!2d-72.03797128851002!3d-37.41558571127041!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMzfCsDI0JzU2LjEiUyA3MsKwMDInMDcuNCJX!5e1!3m2!1ses-419!2scl!4v1716069205216!5m2!1ses-419!2scl"
                            width="100%" height="400" style="border:0;" allowfullscreen loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <footer class="col-md-6">
                    <div class="titulos">
                        <hr>
                        <p>Telefono y whatsapp: +56 9 5018 6583</p>
                        <p>Dirección física: Entre Talca y la Region de Los
                            Lagos</p>

                        <img class="sociales" src="../img/1200px-Instagram_icon.png" alt>
                        <img class="sociales" src="../img/2048px-Facebook_icon.png" alt>
                    </div>
                    <br>

                </footer>

            </div>
        </div>
    </div>



    <!--modificando el dom-->
    <script>

        const contenidoEndpointPregunta = JSON.parse(<?php echo $endpointPregunta ?>);
        printPregunta(contenidoEndpointPregunta);

        const contenidoEndpointNosotros = JSON.parse(<?php echo $endpointNosotros ?>);
        printNosotros(contenidoEndpointNosotros);

        const contenidoEndpointParcela = JSON.parse(<?php echo $endpointParcela ?>);
        printParcela(contenidoEndpointParcela);

        //funcion endpoint preguntas frecuentes
        function printPregunta(_datos) {
            const pregunta = document.getElementById('accordionExample');
            pregunta.innerHTML = '';
            _datos.data.forEach(element => {
                // console.log(element);
                if (element.activo == true) {
                    const acordeon = document.createElement('div');
                    acordeon.classList.add('accordion-item');
                    /*const acordeonHeader = document.createElement('h2');
                    acordeonHeader.classList.add('accordion-header');
                    const acordeonBtn = document.createElement('button');
                    acordeonBtn.classList.add('accordion-button');
                    const respuesta = document.createElement('div');
                    respuesta.classList.add('accordion-collapse collapse');
                    respuesta.classList.add('collapse');
                    //respuesta.innerHTML = ''
                    //acordeonHeader.innerHTML = ''
                    //acordeonBtn.innerHTML = '';*/
                    acordeon.innerHTML = '<h2 class="accordion-header" id="heading' + element.id + '"><button class="accordion-button" type="button"data-bs-toggle="collapse"data-bs-target="#collapse' + element.id + '" aria-expanded="true"aria-controls="collapse' + element.id + '">' + element.pregunta + '</button></h2><div id="collapse' + element.id + '" class="accordion-collapse collapse"aria-labelledby="heading' + element.id + '"data-bs-parent="#accordionExample"><div class="accordion-body">' + element.respuesta + '</div></div>'



                    //acordeon.appendChild(acordeonHeader);
                    //acordeonHeader.appendChild(acordeonBtn);
                    //acordeon.appendChild(respuesta);
                    pregunta.appendChild(acordeon);
                }

            });
        }
        function printNosotros(_datos) {
            const nosotros = document.getElementById('Nosotros');
            nosotros.innerHTML = '<div class="col-md-6 container titulos py-50"> <h1 class="titulos ">Nosotros</h1></div><section class="container  col-md-6 titulos"><p>' + _datos.data[2].texto + '</p><p>' + _datos.data[5].texto + '</p></section>';



        }
        function printParcela(_datos) {
            const parcelas = document.getElementById('parcelas');
            parcelas.innerHTML = ''
            _datos.data.forEach(element => {
                if (element.activo == true) {
                    const tarjeta = document.createElement('div');


                    tarjeta.innerHTML = '<div class="card paddings" style="width: 14rem; margin-right: 1rem;"><img src="../img/parcela1.png" class="card-img-top" alt="..."><div class="card-body"><h5  class="card-title">' + element.nombre + '</h5><p class="card-text">Pie:' + element.pie + '$\nValor:' + element.valor + '$</p><a href="#contactanos" class="btn btn-primary">Contacto</a></div></div>'

                    parcelas.appendChild(tarjeta);
                }
            });




        }





    </script>
    <!--captcha-->


    <!--otros scripts-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="../JS/script.js"></script>

</body>


</html>