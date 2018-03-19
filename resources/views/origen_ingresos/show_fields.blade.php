<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $origenIngresos->id !!}</p>
</div>

<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{!! $origenIngresos->nombre !!}</p>
</div>

<!-- Unidadproduccion Id Field -->
<div class="form-group">
    {!! Form::label('UnidadProduccion_id', 'Unidad de Producción:') !!}
    <p>{!! $origenIngresos->UnidadProduccion->nombre!!}</p>
</div>

<!-- Propietario Id Field -->
<div class="form-group">
    {!! Form::label('Propietario_id', 'Propietario:') !!}
    <p>{!! $origenIngresos->Propietario->nombre !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $origenIngresos->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $origenIngresos->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $origenIngresos->deleted_at !!}</p>
</div>
