FORMULARIO DE EDICIÓN DE USUARIO

<form action="{{ url('/usuario/'.$usuario->id ) }}" method="post">
@csrf
{{ method_field('PATCH') }}

@include('usuario.form' , ['modo'=>'Editar']);

</form>


