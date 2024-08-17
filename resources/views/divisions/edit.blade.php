@extends('layouts.client_app')
@section('title')
{{trans("Edit Division")}}
@endsection

@section('content')
<div class="">
    <form method="POST" action="{{route('divisions.update',$record['id'])}}"  enctype="multipart/form-data" id="form" >
        <!-- /.card-header -->
        <div class="" id="main-panel"  data-id="methods">
            @csrf
			@method('put')
            @include('divisions._form')
        </div>
    </form>
</div>
@endsection
