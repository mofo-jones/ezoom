var BeTableDatatables = function () {
    // Override a few DataTable defaults, for more examples you can check out https://www.datatables.net/
    var exDataTable = function () {
        jQuery.extend(jQuery.fn.dataTable.ext.classes, {
            sWrapper: "dataTables_wrapper dt-bootstrap4"
        });
    };

    // Init full DataTable, for more examples you can check out https://www.datatables.net/
    var initDataTableFull = function () {
        jQuery('.js-dataTable-full').dataTable({
            // columnDefs: [ { orderable: false, targets: [ 4 ] } ],
            pageLength: 10,
            lengthMenu: [
                [10, 25, 50, 100],
                [10, 25, 50, 100]
            ],
            autoWidth: true,
            "oLanguage": {
                "sEmptyTable": "Nenhum registro encontrado",
                "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
                "sInfoFiltered": "(Filtrados de _MAX_ registros)",
                "sInfoPostFix": "",
                "sInfoThousands": ".",
                "sLengthMenu": "_MENU_ resultados por página",
                "sLoadingRecords": "Carregando...",
                "sProcessing": "Processando...",
                "sZeroRecords": "Nenhum registro encontrado",
                "sSearch": "Pesquisar",
                "oPaginate": {
                    "sNext": "Próximo",
                    "sPrevious": "Anterior",
                    "sFirst": "Primeiro",
                    "sLast": "Último"
                },
                "oAria": {
                    "sSortAscending": ": Ordenar colunas de forma ascendente",
                    "sSortDescending": ": Ordenar colunas de forma descendente"
                }
            }
        });
    };


    return {
        init: function () {
            // Override a few DataTable defaults
            exDataTable();
            // Init Datatables
            initDataTableFull();
        }
    };
}();

$(document).on('click', '.deleteClick', function () {
    event.preventDefault();
    var row = $(this).closest('tr');
    $.ajax({
        url: $(this).attr("href"),
        type: 'DELETE',
        success: function (response) {
            $(row).addClass('animated bounceOut');
            setTimeout(function () {
                var table = $('.js-dataTable-full').DataTable();
                table.row(row).remove().draw(false);
            }, 1000);
        }
    });
});

// Initialize when page loads
jQuery(function () {
    BeTableDatatables.init();
});