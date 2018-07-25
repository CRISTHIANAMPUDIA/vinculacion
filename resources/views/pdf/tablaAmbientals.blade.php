<div class="card text-center">
    <div class="card-header">
        <nav class="navbar navbar-dark bg-primary">
            <a class="navbar-brand" href="#">
                <img src="http://pacto.gob.ec/images/logo-727945605.png"
                     class="d-inline-block align-top" alt="">
            </a>
        </nav>
    </div>
    <div style="overflow-x:auto;">
        <style>
            table {
                font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
                font-size: 12px;
                width: 480px;
                margin-left: auto;
                margin-right: auto;
                border-collapse: collapse;
            }

            th {
                font-size: 13px;
                font-weight: normal;
                padding: 8px;
                background: #b9c9fe;
                border-top: 4px solid #aabcfe;
                border-bottom: 1px solid #fff;
                color: #039;
            }

            td {
                padding: 8px;
                background: #e8edff;
                border-bottom: 1px solid #fff;
                color: #669;
                border-top: 1px solid transparent;
            }

            tr:hover td {
                background: #d0dafd;
                color: #339;
            }

            h1 {
                font-size: 1.7em;
                font-weight: normal;
            }
            footer {
                position: absolute;
                bottom: 0;
                width: 100%;
                height: 40px;
            }
        </style>
        <br/>
        <h1 class="text-center">Reporte de Ambientales
        </h1>
        <h3>
            Fecha:
            <small class="text-muted">
                <?php

                $dias = array("Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sábado");
                $meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

                echo $dias[date('w')] . " " . date('d') . " de " . $meses[date('n') - 1] . " del " . date('Y');
                //Salida: Viernes 24 de Febrero del 2012

                ?>
            </small>
        </h3>
        <br/>
        <h2 class="text-center" style="max-height: 100px;text-align: center">Información</h2>
        <br/>
        <div>
            <table class="table table-responsive" style="border:1px solid black" id="manejoAmbientals-table">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Tipo de Proyecto</th>
                    <th>Categoria Proyecto</th>
                    <th>Unidad Produccion</th>
                </tr>
                </thead>
                <tbody>
                @foreach($manejoAmbientals as $manejoAmbiental)
                    <tr>
                        <td>{!! $manejoAmbiental->nombre !!}</td>
                        <td>{!! $manejoAmbiental->descripcion !!}</td>
                        <td>{!! $manejoAmbiental->tipoproyecto->nombre !!}</td>
                        <td>{!! $manejoAmbiental->categoriaproyecto->nombre !!}</td>
                        <td>{!! $manejoAmbiental->unidadproduccion->nombre !!}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <br/>
    </div>
    <br/>
    <div class="card-footer text-muted footer">
        <footer class="main-footer" style="max-height: 100px;text-align: center">
            <strong>Copyright © 2018 <a href="#">UTE</a>.</strong> All rights reserved.
        </footer>
    </div>
</div>
