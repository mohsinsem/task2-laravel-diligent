@extends('layouts.client_app')
@section('title')
{{trans("Edit District")}}
@endsection

@section('content')
<div class="">
    <form method="POST" action="{{route('districts.update',$record['id'])}}"  enctype="multipart/form-data" id="form" >
        <!-- /.card-header -->
        <div class="" id="main-panel"  data-id="methods">
            @csrf
			@method('put')
            @include('districts._form')
        </div>
    </form>
</div>
@endsection
