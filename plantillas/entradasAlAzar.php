<?include_once"app/EscritorEntradas.php";?>
<div class="row">
	<div class="col-md-12">
		<hr>
		<h3>Otras entradas interesantes</h3>
	</div>
	<?php
		for($i=0; $i<count($entradas_al_azar);$i++){
			$entrada_actual=$entradas_al_azar[$i];
		?>
		<div class="col-lg-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<?php echo $entrada_actual->obtener_titulo(); ?>
				</div>
				<div class="panel-body">
					<p>
						<?php echo EscritorEntradas::resumirTexto(nl2br($entrada_actual->obtener_texto()));?>
					</p>
				</div>
			</div>
		</div>
	<?php
	}
	?>
</div>