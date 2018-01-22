<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::textarea('descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipoproyecto Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TipoProyecto_id', 'Tipoproyecto Id:') !!}
    {!! Form::number('TipoProyecto_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Categoriaproyecto Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CategoriaProyecto_id', 'Categoriaproyecto Id:') !!}
    {!! Form::number('CategoriaProyecto_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Unidadproduccion Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('UnidadProduccion_id', 'Unidadproduccion Id:') !!}
    {!! Form::number('UnidadProduccion_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('manejoAmbientals.index') !!}" class="btn btn-default">Cancel</a>
</div>
