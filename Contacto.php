<!doctype html>
<html lang="en">
  <head>
    <title>Samday | Contacto</title>

    <!-- Links de aquí mismo -->
    <link rel="stylesheet" href="CSS/Contacto.css">   
        
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <!-- Link para font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Castoro&display=swap');    
        .Contacto1{
                font-family: 'Castoro';
                text-align: center;
                font-size: 25px;
                padding-top: 5px;
        } 
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap');
        .Contacto2{
            font-family: 'Roboto Slab';
            text-align: center;
            font-size: 20px;
        }        
    </style>
  </head>
  <body>
    <h3 class="Contacto1">INFORMACIÓN DE CONTACTO</h3>
    <h4 class="Contacto2">Comunícate con nosotros</h4>
    
    <div id="divcontacto">
        <div style="width:50%; margin-top:25px;" class="fuente">
            <form id="contact-form" class="contacto" name="contact-form" method="post" action="">
                <div class="form-group">
                    <input type="text" name="nombre" class="form-control name-field" required="required" placeholder="Tu nombre">
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control mail-field" required="required" placeholder="Tu correo">
                </div>
                <div class="form-group">
                    <textarea name="mensaje" id="message" required="required" class="form-control" rows="8" placeholder="Escribe un mensaje"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
        </div>
        <div style="width=45%">
            <img class="raya" src="imgContacto/raya.png" alt="">
        </div>
        <div class="Mapa">
            <iframe class="maps" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14800.01409869026!2d-102.3349452!3d21.972827799999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2smx!4v1606894111955!5m2!1sen!2smx" width="300" height="310" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div class="social">
            <ul>
                <i class="fab fa-facebook-square"><a href="https://www.facebook.com/SamDay-107865224503474/"> Samday</a></i> <br>
                <i class="fas fa-envelope"> realsamday@gmail.com</i> <br>
                <i class="fab fa-whatsapp-square"> +52 449 541 8969</i>
            </ul>
        </div>
    </div>
    
  
    
    <!-- Optional JavaScript; choose one of the two! -->
   
   
   
   
   
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>