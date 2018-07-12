<table class="table table-responsive" id="planRiesgosHasTipoAlimentos-table">
    <thead>
        <tr>
            <th>Tipoalimentos Id</th>
            <th colspan="3">Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($planRiesgosHasTipoAlimentos as $planRiesgosHasTipoAlimentos)
        <tr>
            <td>{!! $planRiesgosHasTipoAlimentos->TipoAlimentos_id !!}</td>
            <td>
                {!! Form::open(['route' => ['planRiesgosHasTipoAlimentos.destroy', $planRiesgosHasTipoAlimentos->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    @if(Auth::user()->tipousuario_id===1)
                    <a href="{!! route('planRiesgosHasTipoAlimentos.show', [$planRiesgosHasTipoAlimentos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('planRiesgosHasTipoAlimentos.edit', [$planRiesgosHasTipoAlimentos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    @else
                    <a href="{!! route('planRiesgosHasTipoAlimentos.show', [$planRiesgosHasTipoAlimentos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('planRiesgosHasTipoAlimentos.edit', [$planRiesgosHasTipoAlimentos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    @endif 
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
