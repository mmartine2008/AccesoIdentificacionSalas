<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Identificación Salas</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='{$base_url}/js/jquery-3.6.0.min.js'></script>
    <script src='{$base_url}/js/bootstrap.bundle.min.js'></script>
    
    <link rel='stylesheet' type='text/css' media='screen' href='{$base_url}/css/bootstrap.min.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='{$base_url}/css/jquery.dataTables.min.css'>
</head>
<body>
    <div>
        <div class="d-flex p-2 justify-content-center"><h1>Salas y Eventos Programados por TICs</h1> 
        </div>
        <div class="d-flex p-2 justify-content-center">

            {if $errorlevel == 1}
                <div class="alert alert-danger" role="alert">
                    {$message}
                </div>
                <div>
                    <a class="btn btn-danger" href="/salas">Volver</a>
                </div>
            {/if}
            {if $errorlevel == 0}
                <div class="alert alert-primary" role="alert">
                    {$message}
                </div>            
                <div>
                    <a class="btn btn-success" href="/salas">Continuar</a>
                </div>
            {/if}

        </div>
            
    </div>
</body>
</html>