@extends('layouts.app')
@section('content')



<form action="{{ url('/usuario/'.$usuario->id ) }}" method="post">
@csrf
{{ method_field('PATCH') }}



</form>
            @endsection

