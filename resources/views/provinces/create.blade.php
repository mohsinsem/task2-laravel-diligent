@extends('layouts.client_app')

@section('title')
{{trans("Create Province")}}
@endsection

@section('css')

@endsection


@section('content')
<div class="">
    <form method="POST" action="{{route('provinces.store')}}"  enctype="multipart/form-data" id="form" >
        <!-- /.card-header -->
        <div class=""  id="main-panel"  data-id="methods">
            @csrf
            @include('provinces._form')
        </div>
    </form>
</div>
@endsection
