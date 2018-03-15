@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Permeabilidad Suelo
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'permeabilidadSuelos.store']) !!}

                        @include('permeabilidad_suelos.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
