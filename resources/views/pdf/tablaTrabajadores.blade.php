<style>
table {     
	font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
    font-size: 12px;    
	margin: 45px;     
	width: 480px; 
	text-align: left;    
	border-collapse: collapse; }

th {     
	font-size: 13px;     
	font-weight: normal;     
	padding: 8px;     
	background: #b9c9fe;
    border-top: 4px solid #aabcfe;    
	border-bottom: 1px solid #fff; 
	color: #039; }

td {    
	padding: 8px;     
	background: #e8edff;     
	border-bottom: 1px solid #fff;
    color: #669;    
	border-top: 1px solid transparent; }

tr:hover td { 
	background: #d0dafd; 
	color: #339; 
	}
h1 {  
	font-size:1.7em;
	font-weight: normal;
}
</style>
<h1>Reporte de Trabajadores</h1>
<table class="table table-responsive" id="trabajadores-table">
    <thead>
        <tr>
            <th>Nombre</th>
        <th>Apellido</th>
        <th>Fecha de Nacimiento</th>
        <th>Género</th>
        <th>País</th>
        <th>Nacionalidad</th>
        <th>Instrucción Formal</th>
        <th>Horas de Trabajo</th>
        <th>Salario</th>
        <th>Plan de Gestión de Riesgos</th>
            
        </tr>
    </thead>
    <tbody>
    @foreach($trabajadores as $trabajadores)
        <tr>
            <td>{!! $trabajadores->nombre !!}</td>
            <td>{!! $trabajadores->apellido !!}</td>
            <td>{!! $trabajadores->fechaDeNacimiento !!}</td>
            <td>{!! $trabajadores->genero->nombre !!}</td>
            <td>{!! $trabajadores->pais->nombre!!}</td>
            <td>{!! $trabajadores->nacionalidad!!}</td>
            <td>{!! $trabajadores->instruccionFormal !!}</td>
            <td>{!! $trabajadores->horasTrabajo !!}</td>
            <td>{!! $trabajadores->salario !!}</td>
            <td>{!! $trabajadores->plandegestionderiesgos->nombre !!}</td>
           
        </tr>
    @endforeach
    </tbody>
</table>