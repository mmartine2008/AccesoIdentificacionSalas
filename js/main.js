/**
 * Ing. Mariano Martinez
 * 2021
 * Configura los eventos a cada componente.
 * Define funciones de acceso
 */
var dataSet = [];

function actualicePatronBusqueda(pattern) {
    console.log('Searching '+pattern);
    $('#div_resultados_busqueda').append('Resultados para la busqueda de:&nbsp;<b>'+pattern+'</b>');
    $('#id_search').val('');
}


function updateData(pattern) {

    dataSet = [ 
        [101, "2021-07-14", "16:30", "Ciencias I", "Virginia Mauco", "ccomp1@exa.unicen.edu.ar"],
        [102, "2021-07-21", "17:30", "Algoritmos II", "Virginia Cifuentes", "algol2@exa.unicen.edu.ar"]
    ];
    
}

function createLinkAccesoSala(fila) {
    var link = $("<a>");
    link.attr("href","/sala/"+fila.id);
    link.attr("title","Acceso a sala"+fila.Nombre);
    link.text("Acceder");
    link.addClass("link");

    return link;
}

function addFilaResultado(fila) {wget 
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

function actualizaTabla() {
    $('#id_tabla_resultados').dataTable().fnClearTable();
    $('#id_tabla_resultados').dataTable().fnAddData(dataSet);
}

function search() {
    var pattern = $('#id_search').val();
    $('#div_resultados_busqueda').empty();
    if (pattern != '') {
        actualicePatronBusqueda(pattern);
        updateData(pattern);
        actualizaTabla();
    } 
}


$( document ).ready(function() {
    // Handler for .ready() called.
    $('#bt_buscar').click(search);

    $('#id_tabla_resultados').DataTable( {
        data: dataSet,
        columns: [
            { title: "Fecha" },
            { title: "Hora" },
            { title: "Nombre" },
            { title: "Responsable/Anfitrion" },
            { title: "Mail institucional" },
            { title: "Acceso" }
        ],
        columnDefs: [
            {"targets": 0, "render": function ( data, type, row ) { return row[1];}}, 
            {"targets": 1, "render": function ( data, type, row ) { return row[2];}}, 
            {"targets": 2, "render": function ( data, type, row ) { return row[3];}}, 
            {"targets": 3, "render": function ( data, type, row ) { return row[4];}}, 
            {"targets": 4, "render": function ( data, type, row ) { return row[5];}}, 
            {
                "targets": 5,
                "render": function ( data, type, row ) {
               return '<a name="deleteAnchor" id="deleteAnchor" class="ajaxCallDelete" value="'+row[0]+'" href="/acceder/'+row[0]+'">Acceder</a>';
                   },
                "className": 'text-center'
               }
        ]
    } );
  });
