<?php
 	function menuTienda () {?>
		<style type="text/css">
			.boton{
				background-color: #e0d2e2;
				border: #c3dcdd; 
				border-radius: 5px;
				margin: 10px;
				padding: 0.5em;
				color: black;
			}

		</style>

		<div style="margin-top:40px"> </div>
		<div align="center"><label  style="color:#9CA1B0"><h3>Categorías principales</h3></label></div>
			
			<div class="row" align="center" style="padding:1em; justify-content: space-between; display: flex">
	       		<div class="col-1"></div>
	       		<div class="col-10">
	       			<a class="boton" href="#" >LIBROS DE ORIGAMI</a>
					<a class="boton" href="#">PAPELES</a>
					<a class="boton" href="#">ACCESORIOS</a>
					<a class="boton" href="#">ORIGAMIS</a>
					<a class="boton" href="#" >PAPELERIA</a>
					<a class="boton" href="#">NOVEDADES</a>
				</div>
				<div class="col-1"></div>
		</div>
	<?php
	}
?>