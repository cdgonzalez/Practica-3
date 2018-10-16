<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reservaciones</title>
    <link rel="stylesheet" href="css/reservaciones.css">
    <link rel="stylesheet" href="css/bootstrap.css">

</head>
<body>
    <h1 class="text-center">Reserva tu Hotel</h1>

   <div style="margin-top: 15%;" class="row text-center">
    <div class="col m6 l6 s6">
           <form action="pedir.php" class="form-group">
             <div class="row">
                 <div class="col m4 l4 s4">
                     <div class="container">
                        <div id="avion" class="container">
                            <h4 class="text-center">Aviones</h4>
                            <label class="col-form-label" for="origen_avion">Origen: <div class="form-control selector-origen"><select name="" id=""></select></div></label>
                            <label class="col-form-label" for="destino_avion">Destino: <div class="form-control selector-destino"><select name="" id=""></select></div></label>
                        </div>
                     </div>
                 </div>
                 <div class="col m4 l4 s4">
                     <div class="container">
                        <div id="hote" class="container">
                             <h4 class="text-center text-white">Hoteles</h4>
                             <label class="text-white col-form-label" for="fecha_hotel">Fecha preferida: <input class="form-control" type="date" id="fecha_hotel" name="fecha_hotel"></label>
                        </div>
                     </div>
                 </div>
             </div>
             <input class="btn btn-success" style="margin-top: 2%;" type="submit" value="Reserva tu viaje">
            </form>
          </div>
    </div>


</body>
<script src="js/jquery-3.3.1.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script type="text/javascript">

    $(document).ready(function() {
        $.ajax({
            type: "POST",
            url: "getDestino.php",
            success: function(response)
            {
                $('.selector-origen select').html(response).fadeIn();
            }
        });
        $.ajax({
            type: "POST",
            url: "https://localhost:8080/aviones/index.php/getAvionDestino",
            success: function(response)
            {
                $('.selector-destino select').html(response).fadeIn();
            }
        });
    });

    </script>


</html>
