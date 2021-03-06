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
    
    <link rel="stylesheet" type="text/css" href="{$base_url}/css/camara.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap');
    </style>
</head>
<body>
    <div class="container">
        <div class="d-flex p-2"><h2>Salas y Eventos Programados por TICs</h2>
        </div>
        <hr>
        <div class="d-flex p-2 justify-content-center">
            {if $errorlevel == 1}
                <div class="alert alert-danger" role="alert">
                    {$message}
                </div>
            {/if}
            {if $errorlevel == 0}
                <div class="alert alert-primary" role="alert">
                    {$message}
                </div>
            {/if}
        </div>
        <div class="d-flex p-2 justify-content-center">
            {if $errorlevel == 0}
            <div>
                <a class="btn btn-success" href="/salas">Continuar</a>
            </div>
            {else}
            <div>
                <a class="btn btn-danger" href="/salas">Volver</a>
            </div>
            {/if}
        </div>

    </div>
</body>
</html>
