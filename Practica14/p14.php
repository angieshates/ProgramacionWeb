<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title> </title>
  <link rel="stylesheet" type="text/css" href="css/jquery-ui.css" />
  <script type="text/javascript" src="external/jquery/jquery.js"></script>
  <script type="text/javascript" src="js/jquery-ui.js"></script>
  <script>
  $(function(){
    //$(function(){
      $.ajax({
        url:"opciones.php",
        dataType:"json",
        success: function(data){
          data.forEach(function (x) {
            var opcion="<option value'"+x.Id+"'>"+x.nombre+"</option>";
            $('#colonia').append(opcion);
          });
        }
      })
  //});

    function ajax1(){
      $.ajax({
          url:'ejercicio14b.php',
          type:'POST',
          data:'nom='+ $('#nom').val(),
          success:function(data){
            //Se ejecuta si no tiene errores
            $('#contenido').html(data);
          },
          error:function(xhr,status){
            //Se ejecuta si tuvo errores
          },
          complete:function(xhr,status){
            //Se ejecut siempre
            alert('Peticion terminada');
          }
      })
    }
  </script>
</head>
<body>
  nombre:
  <input type="text" name="nom" id="nom" placeholder="Nombre">
  Colonia:<select id="colonia">

  </select>

  <button id="bt1" onclick="ajax1()">Saludo</button>
  <button id="bt2" onclick="$.ajax({})">Confirmar datos</button>
  <div id="contenido"></div>
</body>
</html>
