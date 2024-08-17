(function ($) {

    "use strict";

    if ($("#dataTable").length) {
        //datatable
        var table = $('#dataTable').DataTable({
            "processing": false,
            "serverSide": true,
            "bSort": false,
            "paging": true,
            "searching": false,
            "iDisplayLength": 50,
            "ajax": {
                url: "provinces",
                data: function (data) {
                    data.filter_pname = $('#filter_pname').val();
                }
            },
            // orderCellsTop: true,
            fixedHeader: true,
            "columns": [
                { data: "id" },
                { data: "name" },
                { data: "created_at" },
            ],
            order: [[0, 'asc']],
            drawCallback: function (row) {
                
                //$('[data-toggle="tooltip"]').tooltip();     
            },
            // "fnDrawCallback": function (row) {
            //     //$('.make-switch').prop( 'checked', row.DisableUser !== 1 ).bootstrapSwitch();
            //     $('[data-toggle="tooltip"]').tooltip();
			// 	$(".form-check label,.form-radio label").append('<i class="input-helper"></i>');
            // },
            
            "fnDrawCallback": function (row) {
                //$(".form-check label,.form-radio label").append('<i class="input-helper"></i>');
                hideloader();
            },
            "language": {
                "sEmptyTable": "No data available in table",
                "sInfo": "Showing" + " _START_ " + "to" + " _END_ " + "of" + " _TOTAL_ " + "records",
                "sInfoEmpty": "Showing" + " 0 " + "to" + " 0 " + "of" + " 0 " + "records",
                "sInfoFiltered": "(" + "filtered" + " " + "from" + " _MAX_ " + "total" + " " + "records" + ")",
                "sInfoPostFix": "",
                "sInfoThousands": ",",
                "sLengthMenu": "Show" + " _MENU_ " + "records",
                "sLoadingRecords": "Loading...",
                "sProcessing": showloader(),
                "sSearch": "Search:",
                "sZeroRecords": "No matching records found",
                "oPaginate": {
                    "sFirst": "First",
                    "sLast": "Last",
                    "sNext": "Next",
                    "sPrevious": "Previous"
                },
            }
        });
    }
   
    $('#filter_pname').on('input', function () {
		table.draw();
    });
   
})(jQuery);


