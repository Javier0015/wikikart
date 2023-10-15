

@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="assets/css/style_login.css">

<form action="{{ url('/usuario/'.$usuario->id ) }}" method="post">
@csrf
{{ method_field('PATCH') }}

@include('usuario.form' , ['modo'=>'Editar']);

</form>
            @endsection

