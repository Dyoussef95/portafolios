<!DOCTYPE html>
<html lang="es">
<head>
    <title>David Youssef</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="David Youssef|Portfolio">
    <meta name="author" content="David Youssef">    
    <link rel="shortcut icon" href="favicon.ico">  
    
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'> 
    
    <!-- FontAwesome JS -->
    <script defer src="assets/fontawesome/js/all.js"></script>
    
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">  
    
    <!-- github calendar css -->
    <link rel="stylesheet" href="assets/plugins/github-calendar/dist/github-calendar-responsive.css">
    <!-- github activity css -->  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/octicons/2.0.2/octicons.min.css">  
    <link rel="stylesheet" href="assets/plugins/github-activity/src/github-activity.css">

    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
    
</head> 

<body>
    <!-- ******HEADER****** --> 
    <header class="header">
        <div class="container">     
	        <div class="row align-items-center">
			    <div class="col">         
		            <img class="profile-image img-fluid float-start rounded-circle" src="assets/images/profile.jpg" alt="profile image" />
		            <div class="profile-content">
		                <h1 class="name">David Youssef</h1>
		                <h2 class="desc">PHP Developer</h2>   
		                <ul class="social list-inline">
		                    <li class="list-inline-item"><a href="https://www.facebook.com/augustoyoussef"><i class="fab fa-facebook-f"></i></a></li>
		                    <li class="list-inline-item"><a href="https://www.instagram.com/augustoyoussef/"><i class="fab fa-instagram"></i></a></li>
		                    <li class="list-inline-item"><a href="https://github.com/Dyoussef95"><i class="fab fa-github-alt"></i></a></li>    
		                    <li class="list-inline-item last-item""><a href="https://www.linkedin.com/in/david-youssef-493572106/"><i class="fab fa-linkedin-in"></i></a></li>            
		                </ul> 
		            </div><!--//profile-->
			    </div><!--//col-->
	            <div class="col-12 col-md-auto">
		            <div class="dark-mode-switch d-flex">
						<div class="form-check form-switch mx-auto mx-md-0">
							<input type="checkbox" class="form-check-input me-2" id="darkSwitch" />
							<label class="custom-control-label" for="darkSwitch">Modo Oscuro</label>
						</div>
			        </div><!--//dark-mode-switch-->
	                <a class="btn btn-cta-primary" href="https://wa.link/5jeif8" target="_blank"><i class="fab fa-whatsapp"></i> Contactame</a>        
	            </div><!--//col-->
	        </div><!--//row-->         
        </div><!--//container-->
    </header><!--//header-->
    
    <div class="container sections-wrapper py-5">
        <div class="row">
            <div class="primary col-lg-8 col-12">
                <section class="about section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading">Sobre mi:</h2>
                        <div class="content">
                            <p>Soy estudiante de Ingenieria en Sistemas de Informaci??n de la Universidad Tecnol??gica Nacional - Facultad Regional Tucum??n en San Miguel de Tucum??n. 
                                Me gusta programar y aprender sobre nuevas tecnolog??as. Disfruto trabajar con personas experimentadas y aprender de ellas, adem??s de ser autodidacta y 
                                aprender investigando, leyendo y probando cosas nuevas. Me gusta automatizar mis tareas y optimizar el tiempo de trabajo. 
                                Trabaje desarrollando software y administrando sistemas. Se programar en php y Laravel. Tambien hice algunas cosas con Java y Pascal. 
                                Tengo experiencia trabajando con Moodle, dando soporte a alumnos y docentes y dictando talleres sobre el uso de Campus Virtuales. </p>
                        </div><!--//content-->
                    </div><!--//section-inner-->                 
                </section><!--//section-->
    
               <section class="latest section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading">Ultimos Proyectos</h2>
                        <div class="content">    
                                               
                            <div class="item featured text-center">
                                
                                <div class="featured-image has-ribbon">
                                    <a href="http://patronato.herokuapp.com/" target="_blank">
                                    <img class="img-fluid project-image rounded shadow-sm" src="assets/images/projects/patronato.png" alt="Patronato" />
                                    </a>
                                   <!-- <div class="ribbon">
                                        <div class="text">New</div>
                                    </div>-->
                                </div>
                                
                                <h3 class="title mb-3"><a href="http://patronato.herokuapp.com/" target="_blank">Patronato - Sistema de Gesti??n de Asistidos</a></h3>
                                    
                                <div class="desc text-start">                                    
                                    <p>Sistema desarrollado en Laravel durante una pasant??a en la Direcci??n de Patronato de Internos y Liberados. 
                                        En el se pueden gestionar a los asistidos por la repartici??n, almacenando la informaci??n de los mismos
                                        asi como de su grupo familiar y su situaci??n de salud. Se puede gestionar distintos tipos de usuarios
                                        entre ellos personal de mesa de entrada, profesionales, directores, etc.
                                        </p>
                                    <p>Usuario:dyoussef Contrase??a:123456</p>
                                </div><!--//desc-->         
                                <a class="btn btn-cta-secondary" href="https://github.com/Dyoussef95/Patronato" target="_blank"><i class="fas fa-thumbs-up"></i> Ir al proyecto.</a>                 
                            </div><!--//item-->
                            <hr class="divider" />
                            <div class="item row">
                                <a class="col-md-4 col-12" href="https://matriculacion-moodle.herokuapp.com/" target="_blank">
                                <img class="img-fluid project-image rounded shadow-sm" src="assets/images/projects/moodle.png" alt="project name" />
                                </a>
                                <div class="desc col-md-8 col-12">
                                    <h3 class="title"><a href="https://matriculacion-moodle.herokuapp.com/" target="_blank">Matriculacion Moodle - Sistema generador de archivos .csv</a></h3>
                                    <p class="mb-2">Sistema desarrollado en Laravel, con el que se puede generar un archivo .csv 
                                        para realizar matriculaciones masivas en campus virtuales Moodle.
                                        Se debe cargar un archivo Excel (.xls) con los datos de los alumnos y el sistema generar?? automaticamente el archivo .csv</p>
                                    <p><a class="more-link" href="https://github.com/Dyoussef95/matriculacionUTN" target="_blank"><i class="fas fa-external-link-alt"></i>Ir al proyecto</a></p>
                                </div><!--//desc-->                          
                            </div><!--//item-->
                            <hr class="divider" />
                            <div class="item row">
                                <a class="col-md-4 col-12" href="https://la-siciliana-simulacion.herokuapp.com/" target="_blank">
                                <img class="img-fluid project-image rounded shadow-sm" src="assets/images/projects/siciliana.png" alt="project name" />
                                </a>
                                <div class="desc col-md-8 col-12">
                                    <h3 class="title"><a href="https://la-siciliana-simulacion.herokuapp.com/" target="_blank">Simulaci??n La Siciliana - Simulador de f??brica de pastas</a></h3>
                                    <p class="mb-2">Sistema desarrollado en Php qie realiza una simulaci??n de la producci??n de pastas para la empresa La Siciliana. 
                                        Se deben ingresar la produccion esperada y la cantidad de d??as, y el simulador determinar?? la cantidad de ingredientes 
                                    necesarios, y otros datos importantes para la empresa</p>
                                    <p><a class="more-link" href="https://github.com/Dyoussef95/la-siciliana-simulacion" target="_blank"><i class="fas fa-external-link-alt"></i>Ir al proyecto</a></p>
                                </div><!--//desc-->                          
                            </div><!--//item-->    
                        </div><!--//content-->  
                    </div><!--//section-inner-->                
                </section><!--//section-->
                
                <section class="projects section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading">Otros Proyectos</h2>
                        <div class="content">
                            <div class="item">
                                <h3 class="title"><a href="https://github.com/Dyoussef95/latienda" target="_blank">La Tienda - Sistema de facturaci??n y control de stock</a> <span class="badge badge-theme">En desarrollo</span></h3>
                                <p class="summary">Sistema en progreso desarrollado en Java, para una tienda de venta de Ropa.
                                    El sistema deber?? poder realizar la facturaci??n y el control del stock de la tienda.
                                </p>
                                <p><a class="more-link" href="https://github.com/Dyoussef95/latienda" target="_blank"><i class="fas fa-external-link-alt"></i>Ir al proyecto</a></p>
                            </div><!--//item-->
                            <div class="item">
                                <h3 class="title"><a href="https://github.com/Dyoussef95/Pascal" target="_blank">Resoluci??n de ejercicios de programaci??n en lenguaje Pascal</a></h3>
                                <p class="summary">Soluciones a ejercicios de programaci??n realizados a estudiantes de distintas ingenierias.
                                </p>
                                <p><a class="more-link" href="https://github.com/Dyoussef95/Pascal" target="_blank"><i class="fas fa-external-link-alt"></i>Ir al proyecto</a></p>
                            </div><!--//item-->

                            
                            <a class="btn btn-cta-secondary" href="https://github.com/Dyoussef95">Mas en GitHub <i class="fas fa-chevron-right pt-1"></i></a>
                            
                        </div><!--//content-->  
                    </div><!--//section-inner-->                 
                </section><!--//section-->
                
                <section class="experience section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading">Experiencia de Trabajo</h2>
                        <div class="content">
                            <div class="item">
                                <h3 class="title">Becario - <span class="place"><a href="http://www.frt.utn.edu.ar/">Universidad Tecnol??gica Nacional</a></span> <span class="year">(2018 - Present)</span></h3>
                                <p>Gesti??n y administraci??n del Campus Vitual Moodle. Brindar soporte y dictar talleres para alumnos y docentes de la universidad</p>
                            </div><!--//item-->
                            <div class="item">
                                <h3 class="title">Encargado de Campus Virtual Moodle - <span class="place"><a href="https://uspt.edu.ar/web/">Universidad de San Pablo - T</a></span> <span class="year">(2020 - 2021)</span></h3>
                                <p>Gesti??n y administraci??n de campus virtual Moodle, soporte tecnol??gico en general.</p>
                            </div><!--//item-->
                            <div class="item">
                                <h3 class="title">Pasante de ??rea de Sistemas - <span class="place"><a href="https://www.tucuman.gob.ar/organismos/patronato-de-internos-y-liberados">Patronato de Internos y Liberados</a></span> <span class="year">(2019 - 2020)</span></h3>
                                <p>An??lisis, dise??o y desarrollo de sistemas inform??ticos. Soporte t??cnico en general</p>
                            </div><!--//item-->
                            <div class="item">
                                <h3 class="title">Pasante de Soporte IT - <span class="place"><a href="http://estadistica.tucuman.gov.ar/">Direcci??n de Estad??sticas</a></span> <span class="year">(2019 - 2020)</span></h3>
                                <p>Dar soporte en materia de hardware y software a los empleados de la repartici??n</p>
                            </div><!--//item-->
                            <div class="item">
                                <h3 class="title">Maestro particular de programaci??n - <span class="place"><a href="https://github.com/Dyoussef95/Pascal">Aut??nomo</a></span> <span class="year">(2016 - 2019)</span></h3>
                                <p>Clases particulares de programaci??n en Pascal a alumnos de ingenier??a</p>
                            </div><!--//item--> 
                            
                        </div><!--//content-->  
                    </div><!--//section-inner-->                 
                </section><!--//section-->
                <section class="github section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading">Mi GitHub</h2>
                        <!--<p>You can embed your GitHub contribution graph calendar using IonicaBizau's <a href="https://github.com/IonicaBizau/github-calendar" target="_blank">GitHub Calendar</a> widget. 
                        
                        <div id="github-graph" class="github-graph">

                        </div>--><!--//github-graph-->

                        <!--<p>You can also embed your GitHub activities using Casey Scarborough's <a href="https://github.com/caseyscarborough/github-activity" target="_blank">GitHub Activity Stream</a> widget.-->      
                        <!--//Usage: https://caseyscarborough.com/projects/github-activity/ -->                       
                        <div id="ghfeed" class="ghfeed">
                        </div><!--//ghfeed-->
                        
                    </div><!--//secton-inner-->
                </section><!--//section-->
            </div><!--//primary-->
            <div class="secondary col-lg-4 col-12">
                 <aside class="info aside section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading sr-only">Basic Information</h2>
                        <div class="content">
                            <ul class="list-unstyled">
                                <li><i class="fas fa-map-marker-alt"></i><span class="sr-only">Location:</span>San Miguel de Tucum??n, Tucum??n, Argentina</li>
                                <li><i class="fas fa-envelope"></i><span class="sr-only">Email:</span><a href="#">dayous95@gmail.com</a></li>
                                <li><i class="fas fa-envelope"></i><span class="sr-only">Email:</span><a href="#">davidyoussef@alu.frt.utn.edu.ar</a></li>
                            </ul>
                        </div><!--//content-->  
                    </div><!--//section-inner-->                 
                </aside><!--//aside-->
                
                <aside class="skills aside section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading">Habilidades</h2>
                        <div class="content">
                            <p class="intro">
                                Me gustar??a destacar mi perseverancia y creatividad a la hora de resolver problemas </p>
                            
                            <div class="skillset">
                               
                                <div class="item">
                                    <h3 class="level-title">php &amp; Laravel<span class="level-label" data-bs-toggle="tooltip" data-bs-placement="left" title="Tengo 2 a??os de experiencia desarrollando en Laravel en relaci??n de dependencia, y un poco mas de manera freelance, aun me considero Jr. en esta tecnolog??a."><i class="fas fa-info-circle"></i>Junior</span></h3>

                                    <div class="level-bar progress">
									    <div class="progress-bar level-bar-inner" role="progressbar" style="width: 25%" aria-valuenow="25"  aria-valuemin="0" aria-valuemax="25"></div>
									</div><!--//level-bar-->                               
                                </div><!--//item-->
                                
                                <div class="item">
                                    <h3 class="level-title">HTML, CSS, &amp; JavaScript<span class="level-label" data-bs-toggle="tooltip" data-bs-placement="left" title="Me siento mas orientado al Backend, por lo que estas tecnolog??as no son mi fuerte, pero las cosidero necesarias para cualquier tipo de desarrollo web"><i class="fas fa-info-circle"></i>Junior+</span></h3>
                                    <div class="level-bar progress">
									    <div class="progress-bar level-bar-inner" role="progressbar" style="width: 40%" aria-valuenow="40"  aria-valuemin="0" aria-valuemax="40"></div>
									</div><!--//level-bar-->                                  
                                </div><!--//item-->
                                
                                <div class="item">
                                    <h3 class="level-title">Moodle<span class="level-label" data-bs-toggle="tooltip" data-placement="left" title="La necesidad de trabajo me llev?? a aprender esta poderosa herramienta educativa, luego de a??os de experiencia me considero un profesional en la mat??ria"><i class="fas fa-info-circle"></i>Pro</span></h3>
                                    <div class="level-bar progress">
									    <div class="progress-bar level-bar-inner" role="progressbar" style="width: 86%" aria-valuenow="86"  aria-valuemin="0" aria-valuemax="96"></div>
									</div><!--//level-bar-->                                  
                                </div><!--//item-->

                                <div class="item">
                                    <h3 class="level-title">Autonom??a<span class="level-label" data-bs-toggle="tooltip" data-placement="left" title="La gran mayor??a de mis conocimientos fueron de manera autodidacta, internet es mi biblioteca y trato de exprimirla al m??ximo"><i class="fas fa-info-circle"></i>Expert</span></h3>
                                    <div class="level-bar progress">
									    <div class="progress-bar level-bar-inner" role="progressbar" style="width: 100%" aria-valuenow="100"  aria-valuemin="0" aria-valuemax="100"></div>
									</div><!--//level-bar-->                                  
                                </div><!--//item-->

                                <div class="item">
                                    <h3 class="level-title">Ganas de aprender<span class="level-label" data-bs-toggle="tooltip" data-placement="left" title="Es lo que me motiva a trabajar en Sistemas, creo que uno nunca llega a ser totalmente experto en un ??rea, por lo que siempre hay cosas nuevas para aprender"><i class="fas fa-info-circle"></i>Expert</span></h3>
                                    <div class="level-bar progress">
									    <div class="progress-bar level-bar-inner" role="progressbar" style="width: 100%" aria-valuenow="100"  aria-valuemin="0" aria-valuemax="100"></div>
									</div><!--//level-bar-->                                  
                                </div><!--//item-->
                                
                                <p><a class="more-link" href="#"><i class="fas fa-external-link-alt"></i>More on GitHub</a></p> 
                            </div>              
                        </div><!--//content-->  
                    </div><!--//section-inner-->                 
                </aside><!--//section-->
                
               <!-- <aside class="testimonials aside section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading">Testimonials</h2>
                        <div class="content">
                            <div class="item">
                                <blockquote class="quote">                                  
                                    <p><i class="fas fa-quote-left"></i>James is an excellent software engineer and he is passionate about what he does. You can totally count on him to deliver your projects!</p>
                                </blockquote>                
                                <p class="source"><span class="name">Tim Adams</span><br /><span class="title">Curabitur commodo</span></p>                                                             
                            </div>--><!--//item-->
                            
                           <!-- <p><a class="more-link" href="#"><i class="fas fa-external-link-alt"></i>More on Linkedin</a></p>--> 
                            
                     <!--   </div>//content-->
                  <!--  </div>//section-inner-->
              <!--  </aside>//section-->
                
                <aside class="education aside section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading">Educaci??n</h2>
                        <div class="content">
                            <div class="item">                      
                                <h3 class="title"><i class="fas fa-graduation-cap"></i> Ingenier??a en Sistemas de Informaci??n</h3>
                                <h4 class="university">Universidad Tecnol??gica Nacional <span class="year">(2015-Actual)</span></h4>
                            </div><!--//item-->
                            <div class="item">
                                <h3 class="title"><i class="fas fa-graduation-cap"></i> Diplomatura en Programaci??n Web</h3>
                                <h4 class="university">Universidad de San Pablo - T <span class="year">2019</span></h4>
                            </div><!--//item-->
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section-->
                            
                <aside class="languages aside section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading">Idiomas</h2>
                        <div class="content">
                            <ul class="list-unstyled">
                                <li class="item">
                                    <span class="title"><strong>Espa??ol:</strong></span>
                                    <span class="level">Nativo <br class="visible-xs"/><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> </span>
                                </li><!--//item-->
                                <li class="item">
                                    <span class="title"><strong>English:</strong></span>
                                    <span class="level">Nivel A1 <br class="visible-sm visible-xs"/><i class="fas fa-star"></i> <i class="fas fa-star-half"></i></span>
                                </li><!--//item-->
                            </ul>
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section-->
                
             <!--    <aside class="blog aside section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading">Latest Blog Posts</h2>
                        <p>You can use Sascha Depold's <a href="https://github.com/sdepold/jquery-rss" target="_blank">Vanilla RSS plugin</a> to pull in your blog post feeds.</p>
                        <div id="rss-feeds" class="content">

                        </div>//content
                    </div><!--//section-inner
                </aside><!--//section--> 
                
              <!--   <aside class="list music aside section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading">Favourite coding music</h2>
                        <div class="content">
                            <ul class="list-unstyled">
                                <li><i class="fas fa-headphones"></i> <a href="#">Etiam hendrerit urna nunc</a></li>
                                <li><i class="fas fa-headphones"></i> <a href="#">Ut sollicitudin in mauris non auctor</a></li>
                                <li><i class="fas fa-headphones"></i> <a href="#">Etiam hendrerit urna nunc</a></li>
                                <li><i class="fas fa-headphones"></i> <a href="#">Duis et felis bibendum</a></li>
                            </ul>
                        </div><!--//content
                    </div><!--//section-inner
                </aside><!--//section--> -->
                
               <!--  <aside class="list conferences aside section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading">Conferences</h2>
                        <div class="content">
                            <ul class="list-unstyled">
                                <li><i class="far fa-calendar-alt"></i> <a href="#" target="_blank">WWDC 2030</a> (San Francisco)</li>
                                <li><i class="far fa-calendar-alt"></i> <a href="#">Hive</a> (Seattle)</li>
                            </ul>
                        </div><!--//content
                    </div><!--//section-inner
                </aside><!--//section--> -->
                
                <aside class="credits aside section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading">Credits</h2>
                        <div class="content">
                            <ul class="list-unstyled pb-2">
                                <li><a href="https://getbootstrap.com/" target="_blank"><i class="fas fa-external-link-alt"></i>Bootstrap</a></li>
                                <li><a href="https://fortawesome.github.io/Font-Awesome/" target="_blank"><i class="fas fa-external-link-alt"></i>FontAwesome</a></li>
                                <li><a href="https://github.com/IonicaBizau/github-calendar" target="_blank"><i class="fas fa-external-link-alt"></i>GitHub Calendar Plugin</a></li>
                                
                                <li><a href="https://caseyscarborough.com/projects/github-activity/" target="_blank"><i class="fas fa-external-link-alt"></i>GitHub Activity Stream</a></li>
                                
                                <li><a href="https://github.com/sdepold/vanilla-rss" target="_blank"><i class="fas fa-external-link-alt"></i>Vanilla RSS</a></li>
                                <li><a href="https://github.com/coliff/dark-mode-switch"><i class="fas fa-external-link-alt"></i>Dark Mode Switch</a></li>
                                
                            </ul>
                            
                            <hr/>
                            
                             <p class="pt-2">This Boootstrap portfolio template is handcrafted by UX designer <a href="https://twitter.com/3rdwave_themes" target="_blank">Xiaoying Riley</a> at <a href="https://themes.3rdwavemedia.com/" target="_blank">3rd Wave Media</a> for developers and is <strong>FREE</strong> as long as you keep the footer attribution link.</p>
                             <p>If you???d like to <strong>use this template without the attribution link</strong>, you can <a href="https://themes.3rdwavemedia.com/bootstrap-templates/resume/free-bootstrap-portfolio-theme-for-web-developers/" target="_blank">buy the commercial license</a>.</p>
                             
                             <a class="btn btn-cta-primary btn-download" href="https://themes.3rdwavemedia.com/bootstrap-templates/resume/free-bootstrap-portfolio-theme-for-web-developers/" target="_blank"><i class="fas fa-download"></i> I want to download</a>
                            <hr/>
                            <h5 class="subheading pt-3">Want more free Bootstrap themes and templates?</h5>
                            <p>Check out our <a href="https://themes.3rdwavemedia.com/bootstrap-templates/free/">collection of free themes and templates.</a></p>
                            <p>Follow <a href="https://twitter.com/3rdwave_themes" target="_blank">Xiaoying</a> on twitter so you don't miss any future freebies!</p> 
                            
                            <a class="btn btn-cta-secondary btn-follow" href="https://twitter.com/3rdwave_themes" target="_blank"><i class="fab fa-twitter"></i> Follow on twitter</a>
                            
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section-->
              
            </div><!--//secondary-->    
        </div><!--//row-->
    </div><!--//masonry-->
    
    <!-- ******FOOTER****** --> 
    <footer class="footer">
        <div class="container text-center">
                <!--/* This template is free as long as you keep the attribution link below. Thank you for your support. :) If you'd like to use the template without the attribution, you can buy the commercial license via our website: themes.3rdwavemedia.com */-->
                <small class="copyright">Designed with <i class="fas fa-heart"></i> by <a href="https://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>
        </div><!--//container-->
    </footer><!--//footer-->
 
    <!-- Javascript -->    
    <script type="text/javascript" src="assets/plugins/popper.min.js"></script> 
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>    
    <script type="text/javascript" src="assets/plugins/vanilla-rss/dist/rss.global.min.js"></script> 
    <script type="text/javascript" src="assets/plugins/dark-mode-switch/dark-mode-switch.min.js"></script> 
    <!-- github calendar plugin -->
    <script type="text/javascript" src="assets/plugins/github-calendar/dist/github-calendar.min.js"></script>
    <!-- github activity plugin -->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/mustache.js/0.7.2/mustache.min.js"></script>
    <script type="text/javascript" src="assets/plugins/github-activity/src/github-activity.js"></script>
    <!-- custom js -->
    <script type="text/javascript" src="assets/js/main.js"></script>            
</body>
</html> 

