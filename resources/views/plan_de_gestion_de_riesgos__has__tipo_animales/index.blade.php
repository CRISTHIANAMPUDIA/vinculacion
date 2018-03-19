@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Plan De Gestion De Riesgos  Has  Tipo Animales</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('planDeGestionDeRiesgosHasTipoAnimales.create') !!}">Add New</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('plan_de_gestion_de_riesgos__has__tipo_animales.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

