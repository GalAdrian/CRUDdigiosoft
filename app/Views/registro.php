<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>CRUD Digiosoft</title>
</head>

<body>
    <div class="container">
        <h1>CRUD con Codeinigter</h1>
        <div class="row">
            <div class="col-sm-8">
                <form action="<?php echo base_url() . '/crear' ?>" method="post">
                    <label for="nombre">Nombre(s)</label>
                    <input class="form-control" type="text" name="nombre" id="nombre">
                    <label for="apellido">Apellido(s)</label>
                    <input class="form-control" type="text" name="apellido" id="apellido">
                    <label for="rfc">RFC</label>
                    <input class="form-control" type="text" name="rfc" id="rfc">
                    <label for="email">Email</label>
                    <input class="form-control" type="email" name="email" id="email">
                    <label for="telefono">N&uacute;mero de tel&eacute;fono</label>
                    <input class="form-control" type="tel" name="telefono" id="telefono">
                    <br>
                    <div class="row ">
                        <button class="btn btn-primary">Guardar</button>
                        <a class=" ml-auto btn btn-success" href="<?php echo base_url() . '/consulta' ?>">Ver registros</a>
                    </div>

            </div>
        </div>
    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
    <script type="text/javascript">
        let mensaje = '<?php echo $mensaje ?>';

        if (mensaje == '1') {
            alert('Agregado con exito');
        } else if (mensaje == '0') {
            alert('no se agrego')
        }
        else if(mensaje == '2'){
            alert('Actualizado con exito')
        }
        else if(mensaje == '3'){
            alert('No se pudo actualizar')
        } else if(mensaje == '4'){
            alert('Eliminado con exito')
        }
        else if(mensaje == '5'){
            alert('No se pudo eliminar')
        }
    </script>
</body>

</html>