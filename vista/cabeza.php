<!DOCTYPE html>
<html>
<head>
    <!--iconos de redes sociales-->
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="publico/css/materialize.min.css" media="screen,projection"/>
    <!--Compiled and minified CSS-->
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
    <!--Compiled and minified JavaScript-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="publico/js/materialize.min.js"></script>
    <!--iniciador del menu nav del proyecto-->
    <script>
        document.addEvenListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.sidenav');
            var instances = m.Sidenav.init(elems)
        });
    </script>

    <!--iniciador de la galeria de imagenes-->
    <script>
document.addEventListener('DOMContentLoaded', function() {
var elems = document.querySelectorAll('.slider');
var instances = M.Slider.init(elems); }); </script>

    <!--iniciador de la galeria de imagenes aumentadas-->
    <script>
document.addEventListener('DOMContentLoaded', function() {
var elems = document.querySelectorAll('.materialboxed');
var instances = M.Materialbox.init(elems);
});
</script>
    
    <!--iniciador de videos-->
    <script>
$(document).ready(function(){
$('.slider').slider();
});
$(document).ready(function(){
$('ul.tabs').tabs();
});
</script>
    
    <!--iniciador de modal de inicio de sesion--> 
</body>
</html>