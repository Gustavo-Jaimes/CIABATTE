<?php
    //check if form was sent
    if($_POST){
        $to = 'gjaimes@galletamkt.com';
        
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $fecha = $_POST['fecha'];
        $hora = $_POST['hora'];
        $personas = $_POST['personas'];
        $mail = $_POST['mail'];
        $subject = "Nueva Reservacion";
        $contenido = "Este mensaje fue enviado por: " . $name ."\nE-mail: " . $mail . "\nTelefono: " . $phone .  "\nFecha de reserva: " . $fecha . "\nHora de reserva: " . $hora."\nCantidad de personas: " . $personas;
        //honey pot field
        $honeypot = $_POST['firstname'];
        //check if the honeypot field is filled out. If not, send a mail.
        if( ! empty( $honeypot ) ){
            return; //you may add code here to echo an error etc.
        }else{
        
            mail( $to, $subject, $contenido);
            echo'<script type="text/javascript">
        alert("Formulario enviado correctamente, Gracias por tu solicitud, tu reservación será confirmada vía telefónica.");
        window.location.href="index.php";
        </script>';
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>LA CIABATTA BUFFET</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv=Content-Type content="text/html; charset=ISO-8859-1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" href="css/uikit.min.css" />
        <link rel="stylesheet" href="./css/index.css">
        <!-- UIkit CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.9.4/dist/css/uikit.min.css" />
        <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    </head>
    <body>

        <!-- Botones Burbuja -->
        <a href="https://api.whatsapp.com/send?phone=+523315399383" class="btn-wsp uk-flex uk-flex-middle uk-flex-center" target="_blank">
            <i class="fa fa-whatsapp icono"></i>
        </a>
        <a href="tel:+523316459428" class="btn-phone uk-flex uk-flex-middle uk-flex-center" target="_blank">
            <i class="fa fa-phone" aria-hidden="true"></i>
        </a>

        <!-- Seccion banner principal -->
        <section class="banner-principal">
            <div class="uk-text-center uk-flex uk-flex-middle" uk-grid>
                <div class="uk-width-1-4@m">
                    <div class="container-logo">
                        <img src="./images/LOGO CIABATTA.png" alt="">
                    </div>
                </div> 
                <div class="uk-width-expand@m"></div>
                <div class="uk-width-1-3@m container-navbar  uk-visible@m">
                    <nav class="uk-navbar-container" uk-navbar>
                        <div class="uk-navbar-center">
                            <ul class="uk-navbar-nav">
                                <li><a href="#"> HOME</a></li>
                                <li><a href="https://www.wiki-menu.app/qr/866?container=1114" target="_blank">MENU</a></li>
                                <li><a data-scroll href="#reservar">RESERVACIONES</a></li>
                             </ul>
                        </div>
                    </nav>
                </div>
                <div class="uk-width-1-1@m uk-margin-remove">
                    <div class="container-buffet">
                        <div class="uk-card container-texto">
                            <p>Te damos una experiencia con  nuestro innovador</p>
                        </div>
                        <img src="./images/titulo-buffet.png" alt="">
                        <div class="container-icon-redes">
                            <a href="https://api.whatsapp.com/send?phone=+523315399383" class="uk-icon-button uk-margin-small-right" target="_blank" uk-icon="whatsapp"></a>
                            <a href="https://www.facebook.com/laciabattabuffet" class="uk-icon-button  uk-margin-small-right" target="_blank" uk-icon="facebook"></a>
                            <a href="https://www.instagram.com/laciabattabuffetitaliano/" class="uk-icon-button" target="_blank" uk-icon="instagram"></a>
                       </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Seccion de reservaciones -->
        <section  class="banner2" id="reservar">
            <div class="uk-text-center" uk-grid>
                <div class="uk-width-1-2@m uk-visible@m">
                    <div class="uk-flex uk-flex-left container-img2">
                        <img src="./images/16-16.jpg" alt="">
                    </div>
                </div>
                <div class="uk-width-1-2@m">
                    <div class="container-formulario" >
                        <form class="form" name="formulario" action="#my-form" method="post" id="my-form" >
                            <fieldset class="uk-fieldset">
                        
                                <legend class="uk-legend">&iquestQUIERES RESERVAR?</legend>
                                <p class="uk-margin-remove p1">Nos caracterizamos por nuestro sazon y colores.</p>
                                <p class="uk-margin-remove p2">&#191No nos crees? &#105Caele y te chuparas los dedos!</p>
                        
                                <div class="uk-margin uk-width-1-1@m input">
                                    <input class="uk-input" name="name" type="text" placeholder="Nombre" required>
                                </div>

                                <input style="display: none;" name="firstname" type="text" id="firstname" class="hide-robot">

                                <div class="uk-margin uk-width-1-1@m input">
                                    <input name="phone" class="uk-input" type="text" placeholder="Telefono" required>
                                </div>

                                <div class="uk-text-center" uk-grid>    
                                    <div class="uk-width-expand@m reserva-txt">
                                        <label for="fecha">Fecha de reserva <br></label>
                                        <input class="input-reserva" name="fecha" type="date" id="fecha">
                                    </div>
                                    <div class="uk-width-1-4@m reserva-txt">
                                        <label for="hora">Hora</label>
                                        <input type="time" name="hora">
                                        <div id="hora"></div>
                                    </div>
                                    <div class="uk-width-1-4@m reserva-txt">
                                        <label for="personas">Personas <br></label>
                                        <input class="input-reserva-personas" id="personas" type="number" name="personas" required>
                                    </div>
                                </div>
                                <div class="uk-margin input">
                                    <input class="uk-input" name="mail" type="email" placeholder="Correo electronico" required></input>
                                </div>
                                <div class="uk-margin boton">
                                    <input type="submit" value="ENVIAR">
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Seccion del footer -->
        <footer>
            <div class="uk-text-center container-footer" uk-grid>
                <div class="uk-width-auto@m uk-visible@m">
                    <div class="uk-card uk-card-body"></div>
                </div>
                <div class="uk-width-expand@m  uk-flex uk-flex-middle uk-flex-center">
                    <div class="container-p1">
                        <a href="https://goo.gl/maps/wiqJgAFJ4A2YX21F8" style="text-decoration: none;" target="_blank">
                            <p class="uk-margin-remove">Rayon 300 44160 <br> Guadalajara, Jalisco, Mexico <i class="fa fa-map-marker" aria-hidden="true"></i></p>
                            <p class="uk-margin-remove"></p>
                        </a>
                    </div>
                </div>
                <div class="uk-width-1-3@m uk-flex uk-flex-middle uk-flex-center uk-padding-remove" style="width: 22em">
                    <div class="uk-text-center" uk-grid>
                        <div class="uk-width-1-2@m">
                            <div class="uk-card container-span">
                                <span class="span1"><a href="tel:+523316459428" target="_blank"><img src="./images/telefono.png" alt=""></span></a>
                                <a href="tel:+523316459428" target="_blank" style="text-decoration: none;"><span class="span2">33 1645 9428</span> </a>
                            </div>
                        </div>
                        <div class="uk-width-1-2@m">
                            <div class="uk-card container-span">
                                <span class="span1"><a href="https://api.whatsapp.com/send?phone=+523315399383" target="_blank"><img src="./images/whatsapp.png" alt=""></i></span></a>
                                <a href="https://api.whatsapp.com/send?phone=+523315399383" target="_blank" style="text-decoration: none;"><span class="span2">33 1539 9383</span> </a>
                            </div>
                        </div>
                    </div>    
                </div>
                <div class="uk-width-expand@m  uk-flex uk-flex-middle uk-flex-center uk-padding-remove">
                    <div class="container-p1" style="padding: 2em 0;">
                        <a href="mailto:ciabatta.gastropub@gmail.com?Subject=Reservacion%20restaurant%20ciabatta"><p class="uk-margin-remove">ciabatta.gastropub@gmail.com</p></a>
                    </div>
                </div>
                <div class="uk-width-auto@m uk-visible@m">
                    <div class="uk-card uk-card-body"></div>
                </div>
            </div>
        </footer>
        
        <!-- UIkit JS -->
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.9.4/dist/js/uikit.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.9.4/dist/js/uikit-icons.min.js"></script>
       
        <!-- Script para reservar fecha-->
        <script>
            let today = new Date();
            let dd = today.getDate();
            let mm = today.getMonth() + 1; //January is 0!
            let yyyy = today.getFullYear();
            if (dd < 10) {
                dd = '0' + dd
            }
            if (mm < 10) {
                mm = '0' + mm
            }

            today = yyyy + '-' + mm + '-' + dd;

            let search_date = document.getElementById("fecha");

            search_date.min = today;
        </script>

        <!-- Script para hora -->
        <script>
            const limit=[
                ["10:00", "20:00"]
            ];
            
            document.querySelector("input[type=time]").addEventListener("change", function() {
                // obtenemos el valor introducido por el usuario
                const user = this.value.split(":");
            
                // recorremos todas las fechas limite
                // Si devuelve true, esta entre algunas de las fechas
                const result = limit.some(el => {
                    let start = el[0].split(":");
                    let end = el[1].split(":");
            
                    // comprobamos que este entre las fechas limite
                    return (start[0]<user[0] || (start[0]==user[0] && start[1]<=user[1])) && (end[0]>user[0] || (end[0]==user[0] && end[1]>=user[1]))
                });
            
                document.getElementById("hora").innerHTML = result ? " " : "Fuera de servicio";
            });
        </script>
        
    </body>
</html>