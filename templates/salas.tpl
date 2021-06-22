<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Identificación Salas</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='{$base_url}/js/jquery-3.6.0.min.js'></script>
    <script src='{$base_url}/js/bootstrap.bundle.min.js'></script>
    <script src='{$base_url}/js/jquery.dataTables.min.js'></script>
    <script src='{$base_url}/js/main.js'></script>
        <link rel="stylesheet" type="text/css" href="{$base_url}/css/camara.css">
    <link rel='stylesheet' type='text/css' media='screen' href='{$base_url}/css/bootstrap.min.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='{$base_url}/css/jquery.dataTables.min.css'>
</head>
<body>
    <script>
        
        dataSet = '{$salas}'
        dataSet = JSON.parse(dataSet);
        actualizaTabla();
    </script>

    <div class="container">
        <div class="d-flex p-2"><h2>Salas y Eventos Programados por TICs</h2>
        </div>
        <hr>
        <div class="d-flex p-2 justify-content-center" id="div_resultados_busqueda">
        </div>
        <div class="p-2 justify-content-center">
            <table class="table table-striped" id='id_tabla_resultados'>
            </table>
        </div>
</div>
</body>
</html>
