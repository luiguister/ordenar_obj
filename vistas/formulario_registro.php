
<form action="index.php?op=registrar" method="post">
    <input type="text" name="id" placeholder="ID persona"/>
    <br/><input type="text" name="nombre" placeholder="nombre persona"/>
    <br/><input type="text" name="apellido" placeholder="apellido persona"/>
    <br/><input type="number" name="edad" placeholder="edad persona"/>
    	<h3>Parametro de ordenamiento</h3>
		<input type="radio" name="group1" value="nombre"> Nombre<br>
		<input type="radio" name="group1" value="apellido" > Apellido<br>
		<input type="radio" name="group1" value="edad"> Edad
<hr>
		<input type="radio" name="group2" value="quicksort" >Metodo Quicksort<br>
		<input type="radio" name="group2" value="selection"> Metodo Secuencial
	    <br/><input type="submit" value="Registrar"/>
    <hr>
</form>