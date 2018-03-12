@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Plande Gestionde Riesgos
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($plandeGestiondeRiesgos, ['route' => ['plandeGestiondeRiesgos.update', $plandeGestiondeRiesgos->id], 'method' => 'patch']) !!}

                        @include('plande_gestionde_riesgos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection