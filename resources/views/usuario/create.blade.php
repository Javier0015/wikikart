@extends('layouts.app')
@section('content')
            <form action="{{ url('/usuario') }}" method="post">
                @csrf
                @include('usuario.form', ['modo'=>'Crear'] );
            </form>


            @endsection


