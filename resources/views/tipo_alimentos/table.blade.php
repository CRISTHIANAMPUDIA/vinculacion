<table class="table table-responsive" id="tipoAlimentos-table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tipoAlimentos as $tipoAlimentos)
        <tr>
            <td>{!! $tipoAlimentos->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['tipoAlimentos.destroy', $tipoAlimentos->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tipoAlimentos.show', [$tipoAlimentos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tipoAlimentos.edit', [$tipoAlimentos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>