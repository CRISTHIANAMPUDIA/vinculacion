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

<h1>Reporte de Productos</h1>
<table class="table table-responsive" id="productos-table">
    <thead>
        <tr>
            <th>Nombre</th>
        <th>Tipoproducto Id</th>
         
        </tr>
    </thead>
    <tbody>
    @foreach($productos as $producto)
        <tr>
            <td>{!! $producto->nombre !!}</td>
            <td>{!! $producto->tipoproducto->nombre !!}</td>
            
            </tr>
   
    @endforeach
    </tbody>
</table>