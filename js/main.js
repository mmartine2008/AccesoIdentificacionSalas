/**
 * Ing. Mariano Martinez
 * 2021
 * Configura los eventos a cada componente.
 * Define funciones de acceso
 */
function actualicePatronBusqueda(pattern) {
    console.log('Searching '+pattern);
    $('#div_resultados_busqueda').append('Resultados para la busqueda de:&nbsp;<b>'+pattern+'</b>');
    $('#id_search').val('');
    $('#id_tabla_resultados tbody').empty();
}


function getResult(pattern) {

    results = [ {
            "id": 101,
            "Fecha": "2021-07-14",
            "Hora": "16:30",
            "Nombre": "Ciencias I",
            "Responsable": "Virginia Mauco",
            "Mail": "ccomp1@exa.unicen.edu.ar",
        },
        {
            "id": 102,
            "Fecha": "2021-07-21",
            "Hora": "17:30",
            "Nombre": "Algoritmos II",
            "Responsable": "Virginia Cifuentes",
            "Mail": "algol2@exa.unicen.edu.ar",
        }
    ];

    return results;
}

function createLinkAccesoSala(fila) {
    var link = $("<a>");
    link.attr("href","/sala/"+fila.id);
    link.attr("title","Acceso a sala"+fila.Nombre);
    link.text("Acceder");
    link.addClass("link");

    return link;
}

function addFilaResultado(fila) {
    var link = createLinkAccesoSala(fila);

    $("#id_tabla_resultados").find('tbody')
    .append($('<tr>')
        .append($('<td>')
            .append(fila.Fecha)
        )
        .append($('<td>')
            .append(fila.Hora)
        )
        .append($('<td>')
            .append(fila.Nombre)
        )
        .append($('<td>')
            .append(fila.Responsable)
        )
        .append($('<td>')
            .append(fila.Mail)
        )
        .append($('<td>')
            .append(link)
        )

    );    
}
function mostrarResultados(results)
{
    for (var i = 0; i < results.length; i++) {
        addFilaResultado(results[i])
    }    

}

function search() {
    var pattern = $('#id_search').val();
    $('#div_resultados_busqueda').empty();
    if (pattern != '') {
        actualicePatronBusqueda(pattern);
        results = getResult(pattern);
        mostrarResultados(results);
    } 
}

$( document ).ready(function() {
    // Handler for .ready() called.
    $('#bt_buscar').click(search);

  });