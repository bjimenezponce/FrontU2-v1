<?php
function getEndpointByToken($_endpoint, $_token)
{
    //echo 'endpoint: ' . $_endpoint . ' | token: ' . $_token;
    //Configuracion de la solicitud con cURL
    $ch = curl_init($_endpoint);
    //configurar Headers
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Authorization: Bearer ' . $_token
    ));
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
$endpointContacto = getEndpointByToken('http://localhost/BackU3/V1/info_contacto/', 'get');
// echo $endpointContacto;
//transformar el contenido del endpoint en formato JSON
$endpointContacto = json_encode($endpointContacto);
// echo $endpointContacto;
//echo 'la funcion devuelve: ' . getEndpointByToken('http://localhost/backend-sec71-2024t1/v1/services/', 'ciisa');
$endpointPregunta = getEndpointByToken('http://localhost/BackU3/V1/pregunta_frecuente/', 'get');
$endpointPregunta = json_encode($endpointPregunta);

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frontend 71</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body id="home">

    <nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#">Logo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#nosotros">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#servicios">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contacto">Contacto</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <section id="nosotros">
        <div class="container">
            <div class="row">
                <h2>Nosotros</h2>
                <div id="aboutUs" class="col-md-6">
                    <h3>Titulo 1</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    <h3>Título 2</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                </div>
                <div class="col-md-6">
                    <img src="" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="servicios">
        <div class="container">
            <h2>Servicios</h2>
            <div id="rowServices" class="row">
                <div class="col-md-3">
                    <div class="card h-100">
                        <div class="card-header">
                            <h5 class="card-title">t1</h5>
                        </div>
                        <div class="card-body">
                            <p>p1</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card h-100">
                        <div class="card-header">
                            <h5 class="card-title">t2</h5>
                        </div>
                        <div class="card-body">
                            <p>p2</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card h-100">
                        <div class="card-header">
                            <h5 class="card-title">t3</h5>
                        </div>
                        <div class="card-body">
                            <p>p3</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card h-100">
                        <div class="card-header">
                            <h5 class="card-title">t4</h5>
                        </div>
                        <div class="card-body">
                            <p>p4</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="preguntas">
    <div>
            <div class="col-md-6 container titulos">
                <h1 class="titulos ">Preguntas frecuentes</h1>
            </div>

            <div class="accordion container" id="pregunta">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#respuesta" aria-expanded="true"
                            aria-controls="respuesta">
                            ¿Cómo solicito una cotización?
                        </button>
                    </h2>
                    <div id="respuesta" class="accordion-collapse collapse"
                        aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Puedes contactarnos por mensaje directo en instagram
                            o facebook y nos pides la cotización.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false"
                            aria-controls="collapseTwo">
                            ¿Cómo veo una Pregunta o casa?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse"
                        aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Puedes solicitar visita virtual por mensaje directo
                            en instagram o facebook
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapseThree"
                            aria-expanded="false" aria-controls="collapseThree">
                            ¿Cómo veo los temas de financiamiento directo?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse"
                        aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Puedes contactarnos por mensaje directo en instagram
                            o facebook y nos indicas que buscas financiamientos.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contacto">
        <div class="container">
            <div class="row">
                <h2>Contacto</h2>
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Ingrese su nombre">
                        <label for="floatingInput">Nombre</label>
                    </div>
                    <div class="form-floating">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option selected>Seleccione un servicio</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <label for="floatingSelect">Seleccione un servicio</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Ingrese su mensaje" id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Mensaje</label>
                    </div>
                    <button type="button" class="btn btn-outline-primary" disabled>Enviar</button>
                </div>
            </div>
        </div>
    </section>

    <footer>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        //partimos con una constante que contiene un JSON, que corresponde a la salida esperada
        const aboutUSCONST = {
            "data": [{
                    "mision": {
                        "titulo": {
                            "esp": "Misión"
                        },
                        "descripcion": {
                            "esp": "Nuestra misión es ofrecer soluciones digitales innovadoras y de alta calidad que impulsen el éxito de nuestros clientes, ayudándolos a alcanzar sus objetivos empresariales a través de la tecnología y la creatividad."
                        }
                    }
                },
                {
                    "vision": {
                        "titulo": {
                            "esp": "Visión"
                        },
                        "descripcion": {
                            "esp": "Nos visualizamos como líderes en el campo de la consultoría y desarrollo de software, reconocidos por nuestra excelencia en el servicio al cliente, nuestra capacidad para adaptarnos a las necesidades cambiantes del mercado y nuestra contribución al crecimiento y la transformación digital de las empresas."
                        }
                    }
                }
            ]
        };
        //mostramos el contenido de la constante
        // console.log(aboutUSCONST);

        //otra forma de simular el consumo de API
        //fetch(url).then(respuesta => {...}.then(datos => {...}.catch(error => {...})));
        /*fetch('assets/json/about-us.json')
            .then(respuesta => {
                // if (!respuesta.ok) {
                if (respuesta.status != 200) {
                    throw new Error('con el json');
                }
                return respuesta.json();
            })
            .then(datos => {
                // console.log(datos.data[0].mision.descripcion.esp);
                // console.log(datos.data[1].vision);
                //DOM: Modelo de Objeto de Documento
                const aboutUs = document.getElementById('aboutUs');
                //vaciamos el contenido del div
                aboutUs.innerHTML = '';
                //creamos nuevos objetos
                const titulo1 = document.createElement('h3');
                const titulo2 = document.createElement('h3');
                const parrafo1 = document.createElement('p');
                const parrafo2 = document.createElement('p');
                titulo1.innerText = datos.data[0].mision.titulo.esp;
                titulo2.innerText = datos.data[1].vision.titulo.esp;
                parrafo1.innerText = datos.data[0].mision.descripcion.esp;
                parrafo2.innerText = datos.data[1].vision.descripcion.esp;
                // console.log(aboutUs);}
                //agregamos los objetos al aboutUs
                aboutUs.appendChild(titulo1);
                aboutUs.appendChild(parrafo1);
                aboutUs.appendChild(titulo2);
                aboutUs.appendChild(parrafo2);


            })
            .catch(error => {
                console.error('Error en el fetch: ', error);
            });
            */
        //pegaremos al endpoint generado en backend: services
        // fetch('http://localhost/backend-sec71-2024t1/v1/services/', {
        //         method: 'GET',
        //         headers: {
        //             'Authorization': 'Bearer ciisa',
        //             'Content-Type': 'application/json'
        //         }
        //     })
        //     .then(respuesta => {
        //         if (respuesta.status != 200) {
        //             throw new Error('no tenemos acceso al endpoint');
        //         }
        //         return respuesta.json();
        //     })
        //     .then(datos => {
        //         printContacto(datos);
        //     })
        //     .catch(error => {
        //         console.error('Q penita: ', error);
        //     });

        const contenidoEndpointContacto = JSON.parse(<?php echo $endpointContacto ?>);
        //console.log(contenidoEndpointContacto);
        printContacto(contenidoEndpointContacto);

        const contenidoEndpointPregunta = JSON.parse(<?php echo $endpointPregunta ?>);
        printPregunta(contenidoEndpointPregunta);

        function printContacto(_datos) {
            // console.log(datos);
            let totalColumnasSM = 0;
            let totalColumnasMD = 0;
            let totalColumnasXL = 0;
            _datos.data.forEach(element => {
                if (element.activo == true) {
                    totalColumnasXL++;
                }
            });

            // const totalColumnas = 12 / _datos.data.length;
            //¿cuantos elementos necesito generar?
            //4 por fila
            if (_datos.data.length <= 4) {
                totalColumnasXL = Math.round(12 / totalColumnasXL);
            } else {
                totalColumnasXL = 3;
            }
            totalColumnasMD = Math.round(totalColumnasXL * 2);
            totalColumnasSM = Math.round(totalColumnasXL * 2 * 2);
            // console.log(totalColumnasXL);
            // console.log(totalColumnasMD);
            // console.log(totalColumnasSM);
            // console.log('propiedad md-' + totalColumnas);
            const rowServices = document.getElementById('rowServices');
            rowServices.innerHTML = '';
            _datos.data.forEach(element => {
                // console.log(element);
                if (element.activo == true) {
                    const columna = document.createElement('div');
                    columna.classList.add('col-sm-' + totalColumnasSM);
                    columna.classList.add('col-md-' + totalColumnasMD);
                    columna.classList.add('col-xl-' + totalColumnasXL);
                    columna.classList.add('my-2');
                    const tarjeta = document.createElement('div');
                    tarjeta.classList.add('card');
                    tarjeta.classList.add('h-100');
                    const tarjetaHeader = document.createElement('div');
                    tarjetaHeader.classList.add('card-header');
                    const tarjetaBody = document.createElement('div');
                    tarjetaBody.classList.add('card-body');
                    const tarjetaFooter = document.createElement('div');
                    tarjetaFooter.classList.add('card-footer');
                    tarjetaFooter.innerHTML = '<a href="#contacto"><button onclick="cambiarServicio(`' + element.id + '`)">Contáctanos</button></a>'
                    tarjetaHeader.innerHTML = '<h5 class="card-title">' + element.nombre + '</h5>';
                    tarjetaBody.innerHTML = '<p>' + element.texto.esp + '</p>';
                    tarjeta.appendChild(tarjetaHeader);
                    tarjeta.appendChild(tarjetaBody);
                    tarjeta.appendChild(tarjetaFooter);
                    columna.appendChild(tarjeta);
                    rowServices.appendChild(columna);

                    
                }
            });
            
        }
        function printPregunta(_datos){
            const pregunta = document.getElementById('pregunta');
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
                    acordeon.innerHTML = '<h2 class="accordion-header" id="headingOne"><button class="accordion-button" type="button"data-bs-toggle="collapse"data-bs-target="#respuesta" aria-expanded="true"aria-controls="respuesta">' + element.pregunta + '</button></h2><div id="respuesta" class="accordion-collapse collapse"aria-labelledby="headingOne"data-bs-parent="#accordionExample"><div class="accordion-body">' + element.respuesta + '</div></div>'


                    
                    //acordeon.appendChild(acordeonHeader);
                    //acordeonHeader.appendChild(acordeonBtn);
                    //acordeon.appendChild(respuesta);
                    pregunta.appendChild(acordeon);
                }
            });
        }

        function cambiarServicio(_parametro) {
            alert(_parametro);
        }
    </script>
</body>

</html>