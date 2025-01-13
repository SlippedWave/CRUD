$(document).ready(function(){
    $('#table').DataTable( {
        ajax: {
            url: 'assets/php/fetchSeries.php',
            method: "POST",
            columns: [
                { data: "serie" },
                { data: "fechaIn" },
                { data: "fechaFn" },
                { data: "productor" },
                { data: "estado" },
                { data: "acciones" }
            ]
        }
    })
});