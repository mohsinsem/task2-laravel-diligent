@extends('layouts.client_app')
@section('title')
{{trans("Edit Province")}}
@endsection

@section('content')
<div class="">
    <form method="POST" action="{{route('provinces.update',$record['id'])}}"  enctype="multipart/form-data" id="form" >
        <!-- /.card-header -->
        <div class="" id="main-panel"  data-id="methods">
            @csrf
			@method('put')
            @include('provinces._form')
        </div>
    </form>
</div>
@endsection
