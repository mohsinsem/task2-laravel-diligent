@extends('layouts.client_app')
@section('title')
    Divisions
@endsection
@section('content')
@section('css')

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
						<h2> Divisions </h2>
						
					</div>            
					<div class="col-lg-7 col-md-4 col-sm-12 text-right">
					    <a href="{{route('divisions.create')}}" class="btn btn-info btn-sm float-right">
                        <i class="fa fa-plus"></i> Add New
                    </a>
        
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
											<a data-toggle="collapse" href="#collapse-10" aria-expanded="true" aria-controls="collapse-10"> <i class="fa fa-reorder"></i> &nbsp Search Divisions</a>
										</h6>
									</div>
									                              
									<div id="collapse-10" class="collapse show" role="tabpanel" aria-labelledby="heading-10" data-parent="#accordion-4">
										<div class="card-body">
											<form class="form w-100">
												<div class="row">
													
													<div class="col-md-4">
														<div class="form-group">
															<label class="control-label">&nbsp;Divisions Name</label>
															<input type="text" class="form-control" name="filter_pname" id="filter_pname">
														</div>
													</div>

													<div class="col-lg-4">
													<label class="control-label">&nbsp;Province Name</label>
														<select class="form-control form-control-lg select2-single" id="province_id" name="province_id" required="">
															<option value="">Select Province *</option>
															@foreach ($provinces as $value)
															<option value="{{ $value->id }}">{{ $value->name }}</option>
															@endforeach
														</select>
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
													<th>Province</th>
													<th>Created At</th>
													<th>Action</th>
													
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

<script src="{{ url('assets/js/client/divisions.js') }}"></script>

@endsection
