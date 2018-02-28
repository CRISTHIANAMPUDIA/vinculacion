@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Evacuación de Agua de Lluvia
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('evacuacion_agua_lluvias.show_fields')
                    <a href="{!! route('evacuacionAguaLluvias.index') !!}" class="btn btn-default">Volver</a>
                </div>
            </div>
        </div>
    </div>
@endsection
