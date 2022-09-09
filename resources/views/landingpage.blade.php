<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Stuart - Landing Page</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="public/assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><!--<img src="assets/img/navbar-logo.svg" alt="..." />--><div class="masthead-subheading">CASA DE STUART</div></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menú
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#services">Servicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Platillos</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">Historia</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">Cocineros</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Recervar</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">¡Bienvenido a nuestro restaurante, la mejor comida mexicana de todas!</div>
                <div class="masthead-heading text-uppercase">LA CASA DE STUART</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#services">CONOCENOS</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Servicio</h2>
                    <h3 class="section-subheading text-muted">¡LA CASA DE STUART busca siembre brindar el mejor servicio a sus clientes ofreciendo grandes cosas!</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <!-- <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i> -->
                            <i class="fas fa-certificate fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Cocina tradicional</h4>
                        <p class="text-muted">Nuestra especialidad son los platillos tradicionales mexicanos, aquí encontrarás una gran gastronomia mexicana y también de otros paises gracias a la multiculturalidad que existe en la cocina.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <!-- <i class="fas fa-laptop fa-stack-1x fa-inverse"></i> -->
                            <i class="fa fa-usd fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Precios bajos</h4>
                        <p class="text-muted">Sabemos que el precio en los restaurantes no siempre es muy amigable, pero con nosotros encontrarás comida de alta calidad por el mejor precio, además aprovecha de <b>¡PROMOCIONES!</b>. ¡Lo rico de un plato debe estar equilibrado con el precio!</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <!-- <i class="fas fa-lock fa-stack-1x fa-inverse"></i> -->
                            <i class="fas fa-unlock fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Atencion al cliente abierta</h4>
                        <p class="text-muted">Estamos abiertos a cualquier critica, consejo o ayuda que nos quieran proporcionar con el objetivo de seguir brindado un gran servicio y se sientan comodos. ¡Puedes compartir tus comentarios aquí mismo en el sistio web!</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Platillos</h2>
                    <h3 class="section-subheading text-muted">Estos son los platillos más populares que puedes consumir, son ¡DELICIOSOS!</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/mole.png" alt="mole-poblano" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Mole Poblano</div>
                                <div class="portfolio-caption-subheading text-muted">Puebla</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/chochinitapibil.png" alt="cochinita-pibil" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Cochinita Pibil</div>
                                <div class="portfolio-caption-subheading text-muted">Yucatán</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/tamales.png" alt="tamales-mexicanos" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Tamales Mexicanos</div>
                                <div class="portfolio-caption-subheading text-muted">Todo Mexico</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/tacos.png" alt="tacos-al-pastor" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Tacos al Pastor</div>
                                <div class="portfolio-caption-subheading text-muted">Baja California</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/chilaquiles.png" alt="chilaquiles" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Chilaquiles</div>
                                <div class="portfolio-caption-subheading text-muted">Todo Mexico</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/chilesennogada.png" alt="chiles-en-nogada" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Chiles en Nogada</div>
                                <div class="portfolio-caption-subheading text-muted">Puebla</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Historia</h2>
                    <h3 class="section-subheading text-muted">Queremos que conozcas más de nuestra historia en la gastronomia mexicana.</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/inicios.png" alt="inicios-restaurante" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2016-2017</h4>
                                <h4 class="subheading">Nuestros inicios</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">La idea del restaurante nacio durante una cena familiar. A falta de ingresos economicos y aprovechando nuestras habilidades para cocinar, se propuso la idea de abrir nuestro restaurante mexicano.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/restaurante_inicios.png" alt="primer-restaurante" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Marzo 2018</h4>
                                <h4 class="subheading">Nace el restaurante</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Iniciamos como un pequeño negocio familiar en Tonala y desde entonces hemos sido fieles a la comida tradicional mexicana en nuestro menú.</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/restaurante.png" alt="la-casa-de-stuart" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Diciembre 2019</h4>
                                <h4 class="subheading">Establecerse como restaurante reconocido</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Ya con varios años laborando en el restaurante, logramos consolidarnos como un establecimiento reconocido a nivel estatal por ofrecer una rica comida mexicana. Comenzaron a llegar nuevos empleados entre los que destacaban chefs que buscaban oportunidades de demostrar lo que saben hacer!</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/sitioweb.png" alt="sitio-web" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Septiembre 2022</h4>
                                <h4 class="subheading">Expanción</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Con las nuevas tecnologias y debido a la pandemia, hemos decidido expandirnos por la web en busca de nuevas oportunidades para lograr ser un restaurante más conocido a nivel nacional y buscamos seguir creciendo mucho más en el apartado de las nuevas tecnologias!</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Se parte
                                <br />
                                de Nuestra
                                <br />
                                Historia!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Nuestros Asombrosos Chefs</h2>
                    <h3 class="section-subheading text-muted">Conoce más a nuestros chefs profesionales encargados de preparar la mejor comida del restaurante.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/chef.png" alt="jefe-cocina" />
                            <h4>Stuart Perez</h4>
                            <p class="text-muted">Jefe de Cocina</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/chef1.png" alt="sous-chef" />
                            <h4>Remi Ochoa</h4>
                            <p class="text-muted">Sous Chef</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/chef2.png" alt="chef-de-partie" />
                            <h4>Roberto Hernandez</h4>
                            <p class="text-muted">Chef de Partie</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Mediante esta pagina web buscamos abrir nuestro negocio a una nueva area, descubre más de LA CASA DE STUART visitando cada pestaña disponible de la pagina. Te encontrarás con grandes sorpresas y no olvides hacer tu reservación!</p></div>
                </div>
                <div class="row">
                    <h4>Dirección física:</h4>
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">También nos encuentras en Av.Chida #24, Colonia Sencilla, Guadalajara o puedes llamarnos al numero 1234567890</p></div>
                </div>
            </div>
        </section>
        <!-- Clients-->
        <div class="py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/insta.svg" alt="instagram" aria-label="Microsoft Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/google.svg" alt="google" aria-label="Google Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/facebook.svg" alt="facebook" aria-label="Facebook Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/twitter.png" alt="twitter" aria-label="IBM Logo" /></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact-->
        <!-- <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div> -->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <!-- <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group"> -->
                                <!-- Name input-->
                                <!-- <input class="form-control" id="name" type="text" placeholder="Your Name *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-group"> -->
                                <!-- Email address input-->
                                <!-- <input class="form-control" id="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <div class="form-group mb-md-0"> -->
                                <!-- Phone number input-->
                                <!-- <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0"> -->
                                <!-- Message input-->
                                <!-- <textarea class="form-control" id="message" placeholder="Your Message *" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                        </div>
                    </div> -->
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <!-- <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div> -->
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <!-- <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div> -->
                    <!-- Submit Button-->
                    <!-- <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Send Message</button></div>
                </form>
            </div>
        </section> -->
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; LA CASA DE STUART 2022</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Politicas de privacidad</a>
                        <a class="link-dark text-decoration-none" href="#!">Terminos y usos</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Mole Poblano</h2>
                                    <!-- <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p> -->
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/mole.png" alt="mole-poblano" />
                                    <p>El <b>mole poblano</b> es una especialidad cultural culinaria de la ciudad de Puebla. Originalmente consistía principalmente en una salsa de una gran variedad de ingredientes vertida sobre piezas de guajolote, aunque actualmente es común su uso con pollo u otras carnes, siendo uno de los platillos más representativos de Puebla!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Región:</strong>
                                            Puebla
                                        </li>
                                        <li>
                                            <strong>Ingrediente principal:</strong>
                                            Pollo
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Cerrar Platillo
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Cochinita Pibil</h2>
                                    <!-- <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p> -->
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/chochinitapibil.png" alt="cochinita-pibil" />
                                    <p>La <b>cochinita pibil</b> es un guiso correspondiente a la Gastronomía de México, basado en carne de cerdo adobada en achiote, envuelta en hoja de plátano y cocida dentro de un horno de tierra usando una técnica prehispánica conocida como píib. Según recetas de principios de 1900, el puerco entero (eviscerado y con el pelo quemado) era cocido en el horno de tierra. La cochinita pibil se acompaña con cebolla morada, naranja agria y chile habanero, muy común en la región.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Región:</strong>
                                            Yucatán
                                        </li>
                                        <li>
                                            <strong>Ingrediente principal:</strong>
                                            Carne de puerco y achiote
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Cerrar Platillo
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Tamales Mexicanos</h2>
                                    <!-- <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p> -->
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/tamales.png" alt="tamales-mexicanos" />
                                    <p>Los <b>Tamales</b> se clasifican dependiendo al estado en el que te encuentres, pero en este caso ofrecemos especificamente tamales de Guadalara. Son esponjosos de masa y hoja de maíz, por lo general hay rojos de mole y verdes pero también los puede encontrar de costilla chicharrón, pollo con verduras, rajas con requesón y champiñones, acelgas con queso, flor de calabaza con elote, de dulce son de fresa, piña, cajeta, nuez, atole de arroz, champurrado, fresa, guayaba etc. En la localidad de Tlaquepaque, los más típicos son los llamados tamales tapatíos.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Región:</strong>
                                            Todo México
                                        </li>
                                        <li>
                                            <strong>Ingrediente principal:</strong>
                                            Maza y relleno variado
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Cerrar Platillo
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 4 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Tacos al Pastor</h2>
                                    <!-- <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p> -->
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/tacos.png" alt="tacos-al-pastor" />
                                    <p>Los <b>Tacos al Pastor</b> o de trompo son la variedad de tacos más populares en la mayor parte de México. En julio de 2019, fueron elegidos como la mejor comida del mundo por el sitio de guía gastronómica Taste Atlas. Sus ingredientes principales son carne adobada, asada, servida en finas rebanadas sobre pequeñas tortillas de maíz, la carne puede ser una combinación de carne de cerdo y carne de ternera, aunque lo más común es que sea solo carne de puerco.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Región:</strong>
                                            Baja California
                                        </li>
                                        <li>
                                            <strong>Ingrediente principal:</strong>
                                            Carne adobada y tortillas
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Cerrar Platillo
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 5 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Chilaquiles</h2>
                                    <!-- <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p> -->
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/chilaquiles.png" alt="chilaquiles" />
                                    <p>Los <b>chilaquiles</b> son elaborados a base de tortillas cortadas, fritas o tostadas, que se cocinan en una salsa picante que es roja o verde dependiendo del tipo de chile usado. Se suele aromatizar con cilantro o epazote y se acompañan con guarnición de frijoles.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Región:</strong>
                                            Todo México
                                        </li>
                                        <li>
                                            <strong>Ingrediente principal:</strong>
                                            Totopos y salsa roja o verde
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Cerrar Platillo
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 6 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Chiles en Nogada</h2>
                                    <!-- <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p> -->
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/chilesennogada.png" alt="chiles-en-nogada" />
                                    <p>El <b>chile en nogada</b> es uno de los platillos típicos de la gastronomía del estado de Puebla. Ha sido llamado el "platillo mexicano por excelencia". Se prepara con chile poblano, relleno de un guisado de picadillo y frutas, que incluye acitrón, y para finalizar, se cubre con crema de nuez de Castilla (nogada), hojas de perejil y granos de granada. Los colores del chile en nogada son: verde (del perejil), blanco (de la nogada) y rojo (de la granada) simbolizan los de la bandera de México.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Región:</strong>
                                            Puebla
                                        </li>
                                        <li>
                                            <strong>Ingrediente principal:</strong>
                                            Chile poblano y nogada
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Cerrar Platillo
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
