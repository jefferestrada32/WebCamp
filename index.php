<?php include_once 'includes/templates/header.php'; ?>

    <section class="seccion contenedor">
        <h2>La mejor conferencia de diseño web en español</h2>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas, non sed corrupti inventore ea ab eos dolore, magnam dolores, culpa voluptatibus labore blanditiis odio cum fugit illo alias similique quam?</p>
    </section>

    <section class="programa">
        <div class="contenedor-video">
            <video autoplay loop>  <!-- poster="img/bg-talleres.jpg"-->
                <source src="video/video.mp4" type="video/mp4">
                <source src="video/video.webm" type="video/webm">
                <source src="video/video.ogv" type="video/ogv">
            </video>
        </div>

        <div class="contenido-programa">
            <div class="contenedor">
                <div class="programa-evento">
                    <h2>Programa del evento</h2>
                    <nav class="menu-programa">
                        <a href="#talleres"> <i class="fas fa-code"></i> Talleres</a>
                        <a href="#conferencias"> <i class="fas fa-comment"></i>Conferencias</a>
                        <a href="#seminarios"> <i class="fas fa-university"></i>Seminarios</a>
                    </nav>

                    <div id="talleres" class="info-curso ocultar">
                        <div class="detalle-evento">
                            <h3>HTML, CSS y JavaScript</h3>
                            <p> <i class="fas fa-clock"></i> 4:00pm</p>
                            <p> <i class="fas fa-calendar-alt"></i> 24 de agosto</p>
                            <p> <i class="fas fa-user"></i> Jefferson Estrada</p>
                        </div>

                        <div class="detalle-evento">
                            <h3>Responsive web design</h3>
                            <p> <i class="fas fa-clock"></i> 4:00pm</p>
                            <p> <i class="fas fa-calendar-alt"></i> 24 de agosto</p>
                            <p> <i class="fas fa-user"></i> Jefferson Estrada</p>
                        </div>
                        <div class="boton-contenedor">
                            <a href="" class="boton">Ver todos</a>
                        </div>
                    </div>



                    <div id="conferencias" class="info-curso ocultar">
                        <div class="detalle-evento">
                            <h3>Diseño UI/UX para moviles</h3>
                            <p> <i class="fas fa-clock"></i> 4:00pm</p>
                            <p> <i class="fas fa-calendar-alt"></i> 27 de septiembre</p>
                            <p> <i class="fas fa-user"></i> Jefferson Estrada</p>
                        </div>

                        <div class="detalle-evento">
                            <h3>Responsive web design</h3>
                            <p> <i class="fas fa-clock"></i> 3:30pm</p>
                            <p> <i class="fas fa-calendar-alt"></i> 28 de septiembre</p>
                            <p> <i class="fas fa-user"></i> Jefferson Estrada</p>
                        </div>
                        <div class="boton-contenedor">
                            <a href="" class="boton">Ver todos</a>
                        </div>
                    </div>

                    <div id="seminarios" class="info-curso ocultar">
                        <div class="detalle-evento">
                            <h3>Cómo ser freelancer</h3>
                            <p> <i class="fas fa-clock"></i> 10:00am</p>
                            <p> <i class="fas fa-calendar-alt"></i> 14 de septiembre</p>
                            <p> <i class="fas fa-user"></i> Jefferson Estrada</p>
                        </div>

                        <div class="detalle-evento">
                            <h3>Tecnologias del futuro</h3>
                            <p> <i class="fas fa-clock"></i> 2:00pm</p>
                            <p> <i class="fas fa-calendar-alt"></i> 14 de septiembre</p>
                            <p> <i class="fas fa-user"></i> Jefferson Estrada</p>
                        </div>
                        <div class="boton-contenedor">
                            <a href="" class="boton">Ver todos</a>
                        </div>
                    </div>





                </div>
            </div>
        </div>
    </section>

    <section class="invitados contenedor">
        <h2>Nuestros invitados</h2>
        <ul class="lista-invitados">
            <li>
                <div class="invitado">
                    <img src="img/invitado1.jpg" alt="">
                    <p>Jefferson Estrada</p>
                </div>
            </li>
            <li>
                <div class="invitado">
                    <img src="img/invitado2.jpg" alt="">
                    <p>Jefferson Estrada</p>
                </div>
            </li>
            <li>
                <div class="invitado">
                    <img src="img/invitado3.jpg" alt="">
                    <p>Jefferson Estrada</p>
                </div>
            </li>
            <li>
                <div class="invitado">
                    <img src="img/invitado4.jpg" alt="">
                    <p>Jefferson Estrada</p>
                </div>
            </li>
            <li>
                <div class="invitado">
                    <img src="img/invitado5.jpg" alt="">
                    <p>Jefferson Estrada</p>
                </div>
            </li>
            <li>
                <div class="invitado">
                    <img src="img/invitado6.jpg" alt="">
                    <p>Jefferson Estrada</p>
                </div>
            </li>
        </ul>
    </section>

    <section class="contador parallax">
        <div class="contenedor">
            <ul class="resumen-evento">
                <li>
                    <p class="numero"></p>
                    <span>Invitados</span>
                </li>
                <li>
                    <p class="numero"></p>
                    <span>Talleres</span>
                </li>
                <li>
                    <p class="numero"></p>
                    <span>Días</span>
                </li>
                <li>
                    <p class="numero"></p>
                    <span>Conferencias</span>
                </li>
            </ul>
        </div>
    </section>

    <section class="contenedor">
        <h2>PRECIOS</h2>
        <div class="precios">


            <div class="tarjeta">
                <p class="precio">
                    $30
                </p>
                <h3>Pase por un días</h3>
                <div class="descripcion">
                    <p><i class="fas fa-check"></i> Bocadillos gratis</p>
                    <p><i class="fas fa-check"></i>Todas las conferencias</p>
                    <p><i class="fas fa-check"></i>Todos los talleres</p>
                </div>
                <a href="registro.php" class="boton boton-comprar">comprar</a>
            </div>

            <div class="tarjeta tarjeta-medio">
                <p class="precio" style="font-weight: bold;">
                    $50
                </p>
                <h3>Pase  completo</h3>
                <div class="descripcion">
                    <p><i class="fas fa-check"></i> Bocadillos gratis</p>
                    <p><i class="fas fa-check"></i>Todas las conferencias</p>
                    <p><i class="fas fa-check"></i>Todos los talleres</p>
                </div>
                <a href="registro.php" class="boton boton-comprar">comprar</a>
            </div>

            <div class="tarjeta">
                <p class="precio" >
                    $45
                </p>
                <h3>Pase por dos días</h3>
                <div class="descripcion">
                    <p><i class="fas fa-check"></i> Bocadillos gratis</p>
                    <p><i class="fas fa-check"></i>Todas las conferencias</p>
                    <p><i class="fas fa-check"></i>Todos los talleres</p>
                </div>
                <a href="registro.php" class="boton  boton-comprar">comprar</a>
            </div>
        </div>
    </section>

    <div class="mapa" id="mapa">

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d991.5823589582493!2d-75.58097726554475!3d6.220217372788985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4429ce7cb5edf9%3A0x798bb8f10d92a164!2sParque%20San%20Pablo!5e0!3m2!1ses!2sco!4v1598466334280!5m2!1ses!2sco"
            width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>

    <section class="seccion">
        <h2>Testimoniales</h2>
        <div class="testimoniales contenedor">


            <div class="testimonial">
                <blockquote>
                    <p>Sed mollis velit sit amet felis condimentum ultrices. Fusce vehicula ut sem vitae semper. Nullam blandit neque eu semper ullamcorper. Duis commodo quam in orci condimentum ultricies.</p>
                    <footer class="info-testimonial">
                        <img src="img/testimonial.jpg" alt="">
                        <cite>Jefferson Estrada <br> <span>Desarrollador web</span></cite>
                    </footer>
                </blockquote>
            </div>

            <div class="testimonial">
                <blockquote>
                    <p>Sed mollis velit sit amet felis condimentum ultrices. Fusce vehicula ut sem vitae semper. Nullam blandit neque eu semper ullamcorper. Duis commodo quam in orci condimentum ultricies.</p>
                    <footer class="info-testimonial">
                        <img src="img/testimonial.jpg" alt="">
                        <cite>Jefferson Estrada <br> <span>Desarrollador web</span></cite>
                    </footer>
                </blockquote>
            </div>

            <div class="testimonial">
                <blockquote>
                    <p>Sed mollis velit sit amet felis condimentum ultrices. Fusce vehicula ut sem vitae semper. Nullam blandit neque eu semper ullamcorper. Duis commodo quam in orci condimentum ultricies.</p>
                    <footer class="info-testimonial">
                        <img src="img/testimonial.jpg" alt="">
                        <cite>Jefferson Estrada <br> <span>Desarrollador web</span></cite>
                    </footer>
                </blockquote>
            </div>
        </div>
    </section>

    <div class="newsletter parallax">
        <div class="contenido contenedor">
            <p>Registrate para recibir noticias</p>
            <h3>WebCamp</h3>
            <a href="registro.html" class="boton">Registro</a>
        </div>
    </div>

    <section class="seccion">
        <h2>Faltan: </h2>
        <div class="cuenta-regresiva contenedor">
            <ul>
                <li>
                    <p id="dias" class="numero"></p>
                    <p>Dias</p>
                </li>
                <li>
                    <p id="horas" class="numero"></p>
                    <p>Horas</p>
                </li>
                <li>
                    <p id="minutos" class="numero"></p>
                    <p>Minutos</p>
                </li>
                <li>
                    <p id="segundos" class="numero"></p>
                    <p>Segundos</p>
                </li>
            </ul>
        </div>
    </section>

    <?php include_once 'includes/templates/footer.php'; ?>