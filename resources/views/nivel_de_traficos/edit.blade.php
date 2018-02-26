@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Nivel de Tráfico
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($nivelDeTrafico, ['route' => ['nivelDeTraficos.update', $nivelDeTrafico->id], 'method' => 'patch']) !!}

                        @include('nivel_de_traficos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection