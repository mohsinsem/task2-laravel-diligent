@extends('layouts.client_app')
@section('title')
    Provinces
@endsection
@section('content')
@section('css')
    <link rel="stylesheet" href="{{ url('assets/vendors/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
	  
	
    <style>
        .odd {
            background-color: #fff !important;
        }

        .card-body {
            padding: 10px !important;
            border: 1px solid #aeaeae00;
        }
        td:nth-child(7){
			text-align: center;
		}
		.mr-10{
			margin-right: 12px;
		}
		.lastTd{
			display: none;
		}
		.table, .jsgrid .jsgrid-table {
			margin-bottom: 0 !important;
			width: 100% !important;
			border-collapse: collapse;
		}
		.table td {
			padding: 8px !important;
			text-align: left;
			white-space: nowrap !important;
			overflow: hidden;
			text-overflow: ellipsis;
		}
		.form-check .form-check-label input[type="checkbox"] + .input-helper:before{
			width: 15px !important;
		    height: 15px !important;
			margin-top: 3px !important;
		}
		th:nth-child(6), td:nth-child(7) { 
			text-align: center !important; 
		}
    </style>
@endsection
 <form action="" method="post">
    @csrf
									
<!-- partial -->
<div class="container-fluid page-body-wrapper">
    <div class="main-panel" id="main-panel"  data-id="invoices">
        <div class="content-wrapper">
			
			<div class="block-header">
				<div class="row">
					<div class="col-lg-5 col-md-8 col-sm-12">                        
						<h2> Provinces </h2>
						
					</div>            
					<div class="col-lg-7 col-md-4 col-sm-12 text-right">
					
					</div>
				</div>
			</div>
			
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body mt-4">
							<div class="accordion accordion-solid-header" id="accordion-4" role="tablist">
								<div class="card">
									<div class="card-header" role="tab" id="heading-10">
										<h6 class="mb-0">
											<a data-toggle="collapse" href="#collapse-10" aria-expanded="true" aria-controls="collapse-10"> <i class="fa fa-reorder"></i> &nbsp Search Provinces</a>
										</h6>
									</div>
									
									<div id="collapse-10" class="collapse show" role="tabpanel" aria-labelledby="heading-10" data-parent="#accordion-4">
										<div class="card-body">
											<form class="form w-100">
												<div class="row">
													
													<div class="col-md-4">
														<div class="form-group">
															<label class="control-label">&nbsp;Province Name</label>
															<input type="text" class="form-control" name="filter_pname" id="filter_pname">
														</div>
													</div>
													
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                               
                                    <div class="clearfix"></div>
                                    <div class="scroll-table-ignore">
										<table class="table table-bordered table-striped" id="dataTable">
											<thead>
												<tr>
													<th>Id</th>
													<th>Name</th>
													<th>Created At</th>
													<!-- <th>{{ trans('Action') }}</th> -->
													
												</tr>
											</thead>
											<tbody>
											</tbody>
										</table>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- content-wrapper ends -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
@endsection
@section('scripts')

<!-- Plugin js for this page-->
<script src="{{ url('assets/vendors/datatables.net/jquery.dataTables.js') }}"></script>
<script src="{{ url('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>

<!-- Custom js for this page-->
<script src="{{ url('assets/js/data-table.js') }}"></script>
<script src="{{ url('assets/js/client/provinces.js') }}"></script>

@endsection
