<!-- partial -->
<div class="content-wrapper">
   <div class="row grid-margin">
      <div class="col-12">
         <div class="card">
            <div class="card-body">
               <h4 class="card-title clearfix"> <a class="btn btn-outline-dark btn-sm float-right" href="{{route('divisions.index')}}"> <i class="fa fa-arrow-left"></i> Back</a>  </h4>

               <div class="form-group row mt-4">
                  <div class="col-md-6">
                     <div class="row">
                        <div class="col-lg-4">
                           <label class="col-form-label labelUserName">Select Province:</label>
                        </div>
                        <div class="col-lg-8">
                           <select class="form-control form-control-lg select2-single" id="province_id" name="province_id" required="">
                              <option value="">Select Province *</option>
                              @foreach ($provinces as $value)
                              <option value="{{ $value->id }}">{{ $value->name }}</option>
                              @endforeach
                           </select>
                        </div>
                     </div>
                  </div>
               </div>


               <div class="form-group row mt-4">
                  <div class="col-md-6">
                     <div class="row">
                        <div class="col-lg-4">
                           <label class="col-form-label labelUserName">Division Name:</label>
                        </div>
                        <div class="col-lg-8">
                           <input type="text" class="form-control" placeholder="Enter Division Name" name="name" id="name"  @if(isset($record)) value="{{isset($record->name)?$record->name:old('name')}}" @else value="{{old('name')}}" @endif>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="form-group row">
                  <div class="col-md-6">
                     <div class="row">
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
   </div>
</div>
</div>
@section('scripts')
<script src="{{url('assets/vendors/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{url('assets/js/client/divisions.js')}}"></script>
@endsection