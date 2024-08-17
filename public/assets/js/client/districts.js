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
                url: "districts",
                data: function (data) {
                    data.filter_pname = $('#filter_pname').val();
                    data.province_id = $('#province_id').val();
                    data.division_id = $('#division_id').val();
                }
            },
            // orderCellsTop: true,
            fixedHeader: true,
            "columns": [
                { data: "id" },
                { data: "name" },
                { data: "province_name" },
                { data: "division_name" },
                { data: "created_at" },
                { data: "action" },
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
    $('#province_id').on('change', function () {
		table.draw();
    });
   

    if ($("#form").length) {

        $('#form').validate({
            rules: {
                name: {
                    required: true
                }
            },
            messages: {
                name: {
                    required: "Please enter division name",
                }
            },
            errorPlacement: function(label, element) {
                label.addClass('mt-2 text-danger');
                label.insertAfter(element);
            },
            highlight: function(element, errorClass) {
                $(element).parent().addClass('has-danger')
                $(element).addClass('form-control-danger')
            }
        });
    }

    $(document).on('click', '.delete', function(e) {
        e.preventDefault();
        var el = $(this);
        swal.fire({
            title: "Are you sure to delete district ?",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Delete",
            cancelButtonText: "Cancel",
            closeOnConfirm: false
        }).then((result) => {
            if (result.isConfirmed) {
                $(el).parent().submit();
            } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire(
                    'Cancelled',
                    'Your imaginary file is safe :)',
                    'error'
                )
            }
        })
    });
    
})(jQuery);


