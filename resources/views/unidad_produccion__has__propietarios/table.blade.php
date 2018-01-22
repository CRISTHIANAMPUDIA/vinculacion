<table class="table table-responsive" id="unidadProduccionHasPropietarios-table">
    <thead>
        <tr>
            <th>Propietario Ci</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($unidadProduccionHasPropietarios as $unidadProduccionHasPropietario)
        <tr>
            <td>{!! $unidadProduccionHasPropietario->Propietario_ci !!}</td>
            <td>
                {!! Form::open(['route' => ['unidadProduccionHasPropietarios.destroy', $unidadProduccionHasPropietario->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('unidadProduccionHasPropietarios.show', [$unidadProduccionHasPropietario->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('unidadProduccionHasPropietarios.edit', [$unidadProduccionHasPropietario->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>