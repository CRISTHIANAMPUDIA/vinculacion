@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tendencia de Tierra
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tendenciaTierra, ['route' => ['tendenciaTierras.update', $tendenciaTierra->id], 'method' => 'patch']) !!}

                        @include('tendencia_tierras.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection