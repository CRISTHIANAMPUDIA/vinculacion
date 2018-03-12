<!-- Propietario Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Propietario_id', 'Propietario:') !!}
    {!! Form::select('Propietario_id',$propietario, null, ['class' => 'form-control']) !!}
</div>

<!-- Unidadproduccion Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('UnidadProduccion_id', 'Unidad de Producción:') !!}
    {!! Form::select('UnidadProduccion_id',$unidadproduccion, null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('origenIngresos.index') !!}" class="btn btn-default">Cancelar</a>
</div>
