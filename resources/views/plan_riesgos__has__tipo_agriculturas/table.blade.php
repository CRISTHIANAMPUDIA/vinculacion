<table class="table table-responsive" id="planRiesgosHasTipoAgriculturas-table">
    <thead>
        <tr>
            <th>Tipoagricultura Id</th>
            <th colspan="3">Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($planRiesgosHasTipoAgriculturas as $planRiesgosHasTipoAgricultura)
        <tr>
            <td>{!! $planRiesgosHasTipoAgricultura->TipoAgricultura_id !!}</td>
            <td>
                {!! Form::open(['route' => ['planRiesgosHasTipoAgriculturas.destroy', $planRiesgosHasTipoAgricultura->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    @if(Auth::user()->tipousuario_id===1)
                    <a href="{!! route('planRiesgosHasTipoAgriculturas.show', [$planRiesgosHasTipoAgricultura->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('planRiesgosHasTipoAgriculturas.edit', [$planRiesgosHasTipoAgricultura->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    @else
                    <a href="{!! route('planRiesgosHasTipoAgriculturas.show', [$planRiesgosHasTipoAgricultura->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('planRiesgosHasTipoAgriculturas.edit', [$planRiesgosHasTipoAgricultura->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    @endif 
                    
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
