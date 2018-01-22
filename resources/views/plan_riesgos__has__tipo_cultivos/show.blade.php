@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Plan Riesgos  Has  Tipo Cultivos
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('plan_riesgos__has__tipo_cultivos.show_fields')
                    <a href="{!! route('planRiesgosHasTipoCultivos.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
