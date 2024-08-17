<!-- partial -->
<div class="content-wrapper">
   <div class="row grid-margin">
      <div class="col-12">
         <div class="card">
            <div class="card-body">
               <h4 class="card-title clearfix"> <a class="btn btn-outline-dark btn-sm float-right" href="{{route('provinces.index')}}"> <i class="fa fa-arrow-left"></i> Back</a>  </h4>
               
                  <div class="col-md-6">
                     <div class="row">
                        <div class="col-lg-4">
                           <label class="col-form-label labelUserName">Name:</label>
                        </div>
                        <div class="col-lg-8">
                           <input type="text" class="form-control" placeholder="Enter Province Name" name="name" id="name"  @if(isset($record)) value="{{isset($record->name)?$record->name:old('name')}}" @else value="{{old('name')}}" @endif>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="form-group row mt-4">
                  <div class="col-lg-4">
                     <label class="col-form-label"></label>
                  </div>
                  <div class="col-lg-8">
                     <button type="submit" class="btn btn-info">
                     <i class="fa fa-check"></i> {{trans("Save")}}
                     </button>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@section('scripts')
<script src="{{url('assets/vendors/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{url('assets/js/client/provinces.js')}}"></script>
@endsection