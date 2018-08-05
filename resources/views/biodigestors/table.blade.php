<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<div style="overflow-x:auto;">
<div class="input-group"> <span class="input-group-addon fa fa-search" aria-hidden="true"></span>
    <input id="biodigestors-table" type="text" class="form-control" placeholder="Buscar">
</div>
<table class="table table-responsive" id="biodigestors-table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Tamaño Propiedad (m^2)</th>
            <th>Imagen</th>
            <th>Video</th>
            <th>Ancho Biodigestor (m)</th>
            <th>Altura Biodigestor (m)</th>
            <th>Radio Biodigestor (m)</th>
            <th>Profundidad Biodigestor (m)</th>
            <th>Volumen Biodigestor (m^3)</th>
            <th>Ancho Caja AD (m)</th>
            <th>Largo Caja AD (m)</th>
            <th>Profundidad Caja AD (m)</th>
            <th>Volumen Caja AD (m^3)</th>
            <th>Temperatura (°C)</th>
            <th>Unidad de Producción</th>
            <th colspan="3">Acciones</th>
        </tr>
    </thead>
    <tbody class="contenidobusqueda">

    @foreach($biodigestors as $biodigestor)
        <tr>
            <td>{!! $biodigestor->ubicacion !!}</td>
            <td>{!! $biodigestor->tamañoPropiedad !!}</td>
            <td><img width="50px" src="{{ Storage::url($biodigestor->imagen) }}"/></td>
            <td>{!! $biodigestor->video !!}</td>
            <td>{!! $biodigestor->anchoBio !!}</td>
            <td>{!! $biodigestor->largoBio !!}</td>
            <td>{!! $biodigestor->profundBio/2 !!}</td>
            <td>{!! $biodigestor->profundBio !!}</td>
            <td>{!! $biodigestor->profundBio/2 * $biodigestor->profundBio/2 * $biodigestor->largoBio * 3.141592654!!}</td>
            <td>{!! $biodigestor->anchoCaja !!}</td>
            <td>{!! $biodigestor->largoCaja !!}</td>
            <td>{!! $biodigestor->profundCaja !!}</td>
            <td>{!! $biodigestor->anchoCaja * $biodigestor->largoCaja * $biodigestor->profundCaja !!}</td>
            <td>{!! $biodigestor->temperatura !!}</td>
            <td>{!! $biodigestor->unidadproduccion->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['biodigestors.destroy', $biodigestor->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    @if(Auth::user()->tipousuario_id===1)
                    <a href="{!! route('biodigestors.show', [$biodigestor->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('biodigestors.edit', [$biodigestor->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>


				    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}

                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    @else
					@if(Auth::user()->tipousuario_id===2)
				<a href="{!! route('biodigestors.show', [$biodigestor->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('biodigestors.edit', [$biodigestor->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
					@else
				<a href="{!! route('biodigestors.show', [$biodigestor->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
					@endif

                    @endif


                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>

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
