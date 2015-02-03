
<style>
.form span{
	font-family: helvetica;
	font-size: 1.1em;
	color:#d24842;
}
	#select-register-form {
		background: #d24842;
		margin-top: -4.3%;
		margin-bottom: 2%;	
		width: 100%;
	}
	#select-register-form ul{
		margin:auto;
		width: 100%;
		text-align: center;

	}
	#select-register-form ul li{
		display: inline-block;	
		color: white; 
		width: 24%;
		height: 25px;
		font-size: 1.2em;
		border-bottom: 1px solid red;
		-webkit-transition:color 1s;
		margin-top: -1%;
	}
	#select-register-form ul li:hover{
		background: white;
		cursor: pointer;
		color:silver;


	}
	
	#list-triangle{
		margin:auto;
		width: 100%;
		text-align: left;
		margin-top:-2.3%; 
		margin-bottom: 2%;
	}
	#list-triangle li{
		display: inline;		
	}
	#list-triangle img{
		width:10%;height:10%;
	}
	
</style>
<div style="color:silver;font-size:23px;">
	<p><strong style="color:#d24842;">CheckLife</strong> es nuevo para ti - Registrate!</p>
	<hr style="height:5px;background:white;border:1.9px solid #d24842;border-right:2px solid #d24842">
</div>
<div id="select-register-form">
	<ul>
		<li id="estilo1" style="width:24%;background:white;color:silver;" onclick="doctor()">Medico G </li>
		<li id="estilo2" style="width:24.1%;margin-left:-5px;" onclick="especialista()">Especialista </li>
		<li id="estilo3" style="width:25%;margin-left:-5px;" onclick="paciente()">Paciente </li>
		<li id="estilo4" style="width:26.5%;margin-left:-4.5px;"onclick="empresa()">Empresa </li>
	</ul>
</div>
<ul id="list-triangle">
	<li>
		<img id="triangle1" stlyle="display:block;float:left;" src="../img/icons/trial.png" alt="">
	</li>
	<li>
		<img id="triangle2" style="display: none;margin-left:25%;" src="../img/icons/trial.png" alt="">
	</li>
	<li>
		<img id="triangle3" style="display: none;margin-left:50%;" src="../img/icons/trial.png" alt="">
	</li>
	<li>
		<img id="triangle4" style="display: none;margin-left:75%;" src="../img/icons/trial.png" alt="">
	</li>
</ul>
<div id="form_doctor" style="display:block;">
<form action="POST" class="form" >
	<input id="kfk" name="txtNombre" type="text" onkeypress="return soloLetras(event)" placeholder="Nombre">
	<input name="txtApellidos" type="text" onkeypress="return soloLetras(event)" placeholder="Apellidos">
	<input name="txtEmail" type="text" placeholder="Correo Electrónico">
	<span>País .:</span> &nbsp <select name="mes" id="" style="width:85px;">
		<option value="enero">Enero</option>
		<option value="febrero">Febrero</option>
		<option value="marzo">Marzo</option>
		<option value="abril">Abril</option>
		<option value="mayo">Mayo</option>
		<option value="junio">Junio</option>
		<option value="julio">Julio</option>
		<option value="agosto">Agosto</option>
		<option value="septiembre">Septiembre</option>
		<option value="octubre">Octubre</option>
		<option value="noviembre">Noviembre</option>
		<option value="diciembre">Diciembre</option>
	</select>
	<input name="txtContrasena"type="password" placeholder="Contraseña">
	<input name="txtContrasena2"type="password" placeholder="Repetir Contraseña">
	<span>Fecha de nacimiento.:</span> &nbsp
	<select name="mes" id="" style="width:85px;">
		<option value="enero">Enero</option>
		<option value="febrero">Febrero</option>
		<option value="marzo">Marzo</option>
		<option value="abril">Abril</option>
		<option value="mayo">Mayo</option>
		<option value="junio">Junio</option>
		<option value="julio">Julio</option>
		<option value="agosto">Agosto</option>
		<option value="septiembre">Septiembre</option>
		<option value="octubre">Octubre</option>
		<option value="noviembre">Noviembre</option>
		<option value="diciembre">Diciembre</option>
	</select>
	<select name="dia" id="" style="width:55px;">
		<option value="">31</option>
		<option value="">31</option>
	</select>
	<select name="anio" id="" style="width:70px;">
		<option value="">1213</option>
		<option value="">3112</option>
	</select>
	<input name="txtTell" type="text" placeholder="Telefono.: 000 000 0000">
	<input name="txtCell" type="text" placeholder="Celular.: 000 000 0000">
	<input name="txtDni" type="text" placeholder="DNI / PASSPORT">
	<input name="txtContrasena2"type="password" placeholder="Repetir Contraseña">
	
	
	<br><br>
	<input type="submit" name="enviar" value="Registrate doctor!" style="margin-top:-2%;width:47%;" class="btn btn-danger">
</form>
</div>
<div id="form_enfermero" style="display:none;">
<form action="POST" class="form">
	<input name="txtNombre" type="text" onkeypress="return soloLetras(event)" placeholder="Nombre">
	<input name="txtNombre" type="text" onkeypress="return soloLetras(event)" placeholder="Nombre">
	<input name="txtApellidos" type="text" onkeypress="return soloLetras(event)" placeholder="Apellidos">
	<input name="txtEmail" type="text" placeholder="Correo ">
	<input name="txtApellidos" type="text" onkeypress="return soloLetras(event)" placeholder="Apellidos">
	<input name="txtEmail" type="text" placeholder="Email">
	<select name="sector" id="">
		<option value="">Sector</option>
	</select>
	<input name="txtContrasena"type="password" placeholder="Contrasena">
	<input name="txtContrasena2"type="password" placeholder="Repetir contrasena">
	
	<select name="mes" id="" style="width:85px;">
		<option value="enero">Enero</option>
		<option value="febrero">Febrero</option>
		<option value="marzo">Marzo</option>
		<option value="abril">Abril</option>
		<option value="mayo">Mayo</option>
		<option value="junio">Junio</option>
		<option value="julio">Julio</option>
		<option value="agosto">Agosto</option>
		<option value="septiembre">Septiembre</option>
		<option value="octubre">Octubre</option>
		<option value="noviembre">Noviembre</option>
		<option value="diciembre">Diciembre</option>
	</select>
	<select name="dia" id="" style="width:55px;">
		<option value="">31</option>
		<option value="">31</option>
	</select>
	<select name="anio" id="" style="width:70px;">
		<option value="">1213</option>
		<option value="">3112</option>
	</select>
	
	<br><br>
	<input type="submit" name="enviar" value="Registrate especialista!" style="margin-top:-2%;width:47%;" class="btn btn-danger">
</form>
</div>
<div id="form_paciente" style="display:none;">
<form action="POST" class="form">
	<input name="txtNombre" type="text" onkeypress="return soloLetras(event)" placeholder="Nombre">
	<input name="txtApellidos" type="text" onkeypress="return soloLetras(event)" placeholder="Apellidos">
	<input name="txtEmail" type="text" placeholder="Email">
	<input name="txtApellidos" type="text" onkeypress="return soloLetras(event)" placeholder="Apellidos">
	<input name="txtEmail" type="text" placeholder="Email">
	<select name="sector" id="">
		<option value="">Sector</option>
	</select>
	<input name="txtContrasena"type="password" placeholder="Contrasena">
	<input name="txtContrasena2"type="password" placeholder="Repetir contrasena">
	
	<select name="mes" id="" style="width:85px;">
		<option value="enero">Enero</option>
		<option value="febrero">Febrero</option>
		<option value="marzo">Marzo</option>
		<option value="abril">Abril</option>
		<option value="mayo">Mayo</option>
		<option value="junio">Junio</option>
		<option value="julio">Julio</option>
		<option value="agosto">Agosto</option>
		<option value="septiembre">Septiembre</option>
		<option value="octubre">Octubre</option>
		<option value="noviembre">Noviembre</option>
		<option value="diciembre">Diciembre</option>
	</select>
	<select name="dia" id="" style="width:55px;">
		<option value="">31</option>
		<option value="">31</option>
	</select>
	<select name="anio" id="" style="width:70px;">
		<option value="">1213</option>
		<option value="">3112</option>
	</select>

	<br><br>
	<input type="submit" name="enviar" value="Registrate paciente!" style="margin-top:-2%;width:47%;" class="btn btn-danger">
</form>
</div>
<div id="form_empresa" style="display:none;">
<form action="POST" class="form">
	<input name="txtNombre" type="text" onkeypress="return soloLetras(event)" placeholder="Nombre">
	<input name="txtNombre" type="text" onkeypress="return soloLetras(event)" placeholder="Nombre">
	<input name="txtApellidos" type="text" onkeypress="return soloLetras(event)" placeholder="Apellidos">
	<input name="txtEmail" type="text" placeholder="Email">
	<input name="txtEmail" type="text" placeholder="Email">
	<select name="sector" id="">
		<option value="">Sector</option>
	</select>
	<input name="txtContrasena"type="password" placeholder="Contrasena">
	<input name="txtContrasena2"type="password" placeholder="Repetir contrasena">
	
	<select name="mes" id="" style="width:85px;">
		<option value="enero">Enero</option>
		<option value="febrero">Febrero</option>
		<option value="marzo">Marzo</option>
		<option value="abril">Abril</option>
		<option value="mayo">Mayo</option>
		<option value="junio">Junio</option>
		<option value="julio">Julio</option>
		<option value="agosto">Agosto</option>
		<option value="septiembre">Septiembre</option>
		<option value="octubre">Octubre</option>
		<option value="noviembre">Noviembre</option>
		<option value="diciembre">Diciembre</option>
	</select>
		<select name="mes" id="" style="width:85px;">
		<option value="enero">Enero</option>
		<option value="febrero">Febrero</option>
		<option value="marzo">Marzo</option>
		<option value="abril">Abril</option>
		<option value="mayo">Mayo</option>
		<option value="junio">Junio</option>
		<option value="julio">Julio</option>
		<option value="agosto">Agosto</option>
		<option value="septiembre">Septiembre</option>
		<option value="octubre">Octubre</option>
		<option value="noviembre">Noviembre</option>
		<option value="diciembre">Diciembre</option>
	</select>
	<select name="dia" id="" style="width:55px;">
		<option value="">31</option>
		<option value="">31</option>
	</select>
	<select name="anio" id="" style="width:70px;">
		<option value="">1213</option>
		<option value="">3112</option>
	</select>
	<br><br>
	<input type="submit" name="enviar" value="Registrate empresa!" style="margin-top:-2%;width:47%;" class="btn btn-danger">
</form>
</div>
<script type="text/javascript">

function doctor(){
	document.getElementById("estilo1").style.color="silver";
	document.getElementById("estilo1").style.background="white";

	document.getElementById("estilo2").style.color="white";
	document.getElementById("estilo2").style.background="#d24842";

	document.getElementById("estilo3").style.color="white";
	document.getElementById("estilo3").style.background="#d24842";

	document.getElementById("estilo4").style.color="white";
	document.getElementById("estilo4").style.background="#d24842";

	document.getElementById("form_doctor").style.display="block";
	document.getElementById("form_enfermero").style.display="none";
	document.getElementById("form_paciente").style.display="none";
	document.getElementById("form_empresa").style.display="none";

	document.getElementById("triangle1").style.display="block";
	document.getElementById("triangle2").style.display="none";
	document.getElementById("triangle3").style.display="none";
	document.getElementById("triangle4").style.display="none";
}
function especialista(){
	document.getElementById("estilo1").style.color="white";
	document.getElementById("estilo1").style.background="#d24842";

	document.getElementById("estilo2").style.color="silver";
	document.getElementById("estilo2").style.background="white";

	document.getElementById("estilo3").style.color="white";
	document.getElementById("estilo3").style.background="#d24842";

	document.getElementById("estilo4").style.color="white";
	document.getElementById("estilo4").style.background="#d24842";

	document.getElementById("form_doctor").style.display="none";
	document.getElementById("form_enfermero").style.display="block";
	document.getElementById("form_paciente").style.display="none";
	document.getElementById("form_empresa").style.display="none";

	document.getElementById("triangle1").style.display="none";
	document.getElementById("triangle2").style.display="block";
	document.getElementById("triangle3").style.display="none";
	document.getElementById("triangle4").style.display="none";
}
function paciente(){
	document.getElementById("estilo1").style.color="white";
	document.getElementById("estilo1").style.background="#d24842";

	document.getElementById("estilo2").style.color="white";
	document.getElementById("estilo2").style.background="#d24842";

	document.getElementById("estilo3").style.color="silver";
	document.getElementById("estilo3").style.background="white";

	document.getElementById("estilo4").style.color="white";
	document.getElementById("estilo4").style.background="#d24842";

	document.getElementById("form_doctor").style.display="none";
	document.getElementById("form_enfermero").style.display="none";
	document.getElementById("form_paciente").style.display="block";
	document.getElementById("form_empresa").style.display="none";

	document.getElementById("triangle1").style.display="none";
	document.getElementById("triangle2").style.display="none";
	document.getElementById("triangle3").style.display="block";
	document.getElementById("triangle4").style.display="none";
}
function empresa(){
	document.getElementById("estilo1").style.color="white";
	document.getElementById("estilo1").style.background="#d24842";

	document.getElementById("estilo2").style.color="white";
	document.getElementById("estilo2").style.background="#d24842";

	document.getElementById("estilo3").style.color="white";
	document.getElementById("estilo3").style.background="#d24842";

	document.getElementById("estilo4").style.color="silver";
	document.getElementById("estilo4").style.background="white";

	document.getElementById("form_doctor").style.display="none";
	document.getElementById("form_enfermero").style.display="none";
	document.getElementById("form_paciente").style.display="none";
	document.getElementById("form_empresa").style.display="block";

	document.getElementById("triangle1").style.display="none";
	document.getElementById("triangle2").style.display="none";
	document.getElementById("triangle3").style.display="none";
	document.getElementById("triangle4").style.display="block";
}
	 function soloLetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }
</script>