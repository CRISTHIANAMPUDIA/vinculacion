
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<div class="input-group"> <span class="input-group-addon fa fa-search" aria-hidden="true"></span>
    <input id="propietarios-table" type="text" class="form-control" placeholder="Buscar">
</div>
<table class="table table-responsive" id="propietarios-table">
    <thead>
        <tr>
            <th>CI</th>
        <th>Nombre</th>
        <th>Género</th>
        <th>Correo</th>
        <th>Fecha de Nacimiento</th>
        <th>Teléfono</th>
        <th>Observaciones</th>
            <th colspan="3">Acciones</th>
        </tr>
    </thead>
    <tbody class="contenidobusqueda">
    @foreach($propietarios as $propietario)
        <tr>
            <td>{!! $propietario->ci !!}</td>
            <td>{!! $propietario->nombre !!}</td>
            <td>{!! $propietario->genero->nombre!!}</td>
            <td>{!! $propietario->correo !!}</td>
            <td>{!! $propietario->fechaNacimiento !!}</td>
            <td>{!! $propietario->telefono !!}</td>
            <td>{!! $propietario->observaciones !!}</td>
            <td>
                {!! Form::open(['route' => ['propietarios.destroy', $propietario->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    @if(Auth::user()->tipousuario_id===1)
                    <a href="{!! route('propietarios.show', [$propietario->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('propietarios.edit', [$propietario->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    @else
					@if(Auth::user()->tipousuario_id===2)
				<a href="{!! route('propietarios.show', [$propietario->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('propietarios.edit', [$propietario->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
					@else	
				<a href="{!! route('propietarios.show', [$propietario->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
					@endif	
                    
                    @endif 
                    
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<script>
  $(document).ready(function () {
     $('#biodigestors-table').keyup(function () {
        var rex = new RegExp($(this).val(), 'i');
          $('.contenidobusqueda tr').hide();
          $('.contenidobusqueda tr').filter(function () {
              return rex.test($(this).text());
          }).show();

          })

  });
  </script>
