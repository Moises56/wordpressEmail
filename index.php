<!-- re_bmYQBbf3_N7gM7oVTnyujyndRMmRgKBmu -->
<?php
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $basededatos = "formdb";

    $enlace = mysqli_connect($servidor, $usuario, $clave, $basededatos);

//* email conection RESSEND
    // $resend = Resend::client('re_bmYQBbf3_N7gM7oVTnyujyndRMmRgKBmu');

    // $resend->emails->send([
    // 'from' => 'onboarding@resend.dev',
    // 'to' => 'moiavil56@gmail.com',
    // 'subject' => 'Hello World',
    // 'html' => '<p>Congrats on sending your <strong>first email</strong>!</p>'
    // ]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>

</head>
<body>

        <div class="container">
            <div class="row">
                <form action="#" name="formemail" method="POST">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                        <input name="nombre" type="text" class="form-control" placeholder="nombre">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Correo</label>
                        <input name="correo" type="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Telefono</label>
                        <input name="telefono" type="text" class="form-control" placeholder="Telefono">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">descripcion</label>
                        <textarea name="descripcion" class="form-control" rows="3"></textarea>
                    </div>

                    <button type="submit" name="registro" class="btn btn-primary">Enviar</button>
                    <button type="reset" class="btn btn-primary">Reset</button>

                </form>
            </div>
        </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

<?php
    
    if(isset($_POST['registro'])){
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $telefono = $_POST['telefono'];
        $descripcion = $_POST['descripcion'];

        $insertarDatos = "INSERT INTO datos VALUES('$nombre',
                                                    '$correo',
                                                    '$telefono',
                                                    '$descripcion',
                                                    '')";

        $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);

        if(!$ejecutarInsertar){
            echo"Error en la linea de sql";
        }
    }
?>
</html>