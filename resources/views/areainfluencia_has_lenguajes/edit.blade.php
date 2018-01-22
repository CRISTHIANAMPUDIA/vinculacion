@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Areainfluencia Has Lenguaje
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($areainfluenciaHasLenguaje, ['route' => ['areainfluenciaHasLenguajes.update', $areainfluenciaHasLenguaje->id], 'method' => 'patch']) !!}

                        @include('areainfluencia_has_lenguajes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection