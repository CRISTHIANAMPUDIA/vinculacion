<table class="table table-responsive" id="desechos-table">
    <thead>
        <tr>
            <th>Fecha</th>
        <th>Peso (kg)</th>
        <th>Biodigestor</th>
        <th>Tipo de Desecho</th>
            <th colspan="3">Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($desechos as $desecho)
        <tr>
            <td>{!! $desecho->fecha !!}</td>
            <td>{!! $desecho->peso !!}</td>
            <td>{!! $desecho->biodigestor->ubicacion !!}</td>
            <td>{!! $desecho->tipodesecho->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['desechos.destroy', $desecho->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    @if(Auth::user()->tipousuario_id===1)
                    <a href="{!! route('desechos.show', [$desecho->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('desechos.edit', [$desecho->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    @else
                    <a href="{!! route('desechos.show', [$desecho->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('desechos.edit', [$desecho->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    @endif 
                    
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
