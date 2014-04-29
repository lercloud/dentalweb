<div id="odontogramPlaceholder">

	<div id="odontogramTools" >
		<div id="progressBar" class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
	    <span class="sr-only">45% Complete</span>
	  	</div>

		<div class="odontogramToolData" >
			<?php echo __("Paciente").": "; ?><span id="odontogramPacientName" ></span><br>
			<?php echo __("Odontograma No").": "; ?><span id="odontogramOdontoNumber" ></span><br>
			<?php echo __("Fecha y Hora").": "; ?><span id="odontogramDate" ></span><br>
			<?php echo __("Ultima Edicion").": "; ?><span id="odontogramLasUpdate" ></span>
		</div>


		<div data-toolId="tornillo" class="odontogramTool tornillo" ><?php echo $this->Html->image("/css/odontogram_images/tornillo_sup.png", array("heigth"=>95, "width"=>45)); ?><br>
			Tornillo</div>
		<div data-toolId="endodoncia" class="odontogramTool endodoncia" ><?php echo $this->Html->image("/css/odontogram_images/endodoncia.png", array("heigth"=>95, "width"=>45)); ?><br>Endodoncia</div>
		<div data-toolId="faltante" class="odontogramTool faltante" ><?php echo $this->Html->image("/css/odontogram_images/cross.png", array("heigth"=>95, "width"=>45)); ?><br>Faltante</div>
		<div data-toolId="sano" class="odontogramTool sano" ><?php echo $this->Html->image("/css/odontogram_images/good_or_tick.png", array("heigth"=>95, "width"=>45)); ?><br>Sano</div>

		<br style="clear:both;" >
		
				<label class="radio">
                    <input class="odontogramToolPresentacion" type="radio" name="tratamiento" value="sano">Sano <span class="boxPresentacion sano"></span>
                </label>
		
                <label class="radio">
                    <input class="odontogramToolPresentacion" type="radio" name="tratamiento" value="caries">Caries <span class="boxPresentacion caries"></span>
                </label>
        
                <label class="radio">
                    <input class="odontogramToolPresentacion" type="radio" name="tratamiento" value="sellante">Sellante <span class="boxPresentacion sellante"></span>
                </label>

                <label class="radio">
                    <input class="odontogramToolPresentacion" type="radio" name="tratamiento" value="amalgama">Amalgama <span class="boxPresentacion amalgama"></span>
                </label>

                <label class="radio">
                    <input class="odontogramToolPresentacion" type="radio" name="tratamiento" value="composite">Composite <span class="boxPresentacion composite"></span>
                </label>

                <label class="radio">
                    <input class="odontogramToolPresentacion" type="radio" name="tratamiento" value="incrustacion">Incrustacion <span class="boxPresentacion incrustacion"></span>
                </label>

                <label class="radio">
                    <input class="odontogramToolPresentacion" type="radio" name="tratamiento" value="fractura">Fractura <span class="boxPresentacion fractura"></span>
                </label>
        


	</div>


	<div id="mouthArea" >

		<div id="leftArea" >

			<?php 

			$rowsArea = array("1"=>8, "5"=>5, "8"=>5, "4"=>8);

			foreach ($rowsArea as $key => $value) {
?>
		<div class="teethRow teethRow<?php echo $key; ?>" >
<?php
				for($x=1;$x<=$value; $x++){
			?>

			
				<div data-toothId="<?php echo $key.$x; ?>" class="toothHolder toothHolder<?php echo $key.$x; ?>" >
					<div data-toothId="<?php echo $key.$x; ?>" class="tooth tooth<?php echo $key.$x; ?>" ></div>
					<div data-toothId="<?php echo $key.$x; ?>" class="toothLabel" ><?php echo $key.".".$x; ?></div>
								<div data-toothId="<?php echo $key.$x; ?>" class="toothCross toothCross<?php echo $key.$x; ?>" >

									<div id="vSide<?php echo $key.$x; ?>" data-sideId="vSide" data-toothId="<?php echo $key.$x; ?>" class="vSide vSide<?php echo $key.$x; ?>" >V</div>

									<div id="vSide<?php echo $key.$x; ?>" data-sideId="dSide" data-toothId="<?php echo $key.$x; ?>" class="dSide dSide<?php echo $key.$x; ?>" >D</div>

									<div id="oSide<?php echo $key.$x; ?>" data-sideId="oSide" data-toothId="<?php echo $key.$x; ?>" class="oSide oSide<?php echo $key.$x; ?>" >O</div>

									<div id="mSide<?php echo $key.$x; ?>" data-sideId="mSide" data-toothId="<?php echo $key.$x; ?>" class="mSide mSide<?php echo $key.$x; ?>" >M</div>

									<div id="pSide<?php echo $key.$x; ?>" data-sideId="pSide" data-toothId="<?php echo $key.$x; ?>" class="pSide pSide<?php echo $key.$x; ?>" >P</div>

								</div>
				</div>
							

			<?php
		}//endfor
		?>
		</div>
		<?php
			}//endforeach

		?>


		</div>

		<div id="rightArea" >

			<?php 

			$rowsArea = array(2=>8, 6=>5, 7=>5, 3=>8);

			foreach ($rowsArea as $key => $value) {
?>
		<div class="teethRow teethRow<?php echo $key; ?>" >
<?php
				for($x=1;$x<=$value; $x++){
			?>

			
				<div data-toothId="<?php echo $key.$x; ?>" class="toothHolder toothHolder<?php echo $key.$x; ?>" >
					<div data-toothId="<?php echo $key.$x; ?>" class="tooth tooth<?php echo $key.$x; ?>" ></div>
					<div data-toothId="<?php echo $key.$x; ?>" class="toothLabel" ><?php echo $key.".".$x; ?></div>
								<div data-toothId="<?php echo $key.$x; ?>" class="toothCross toothCross<?php echo $key.$x; ?>" >

									<div id="vSide<?php echo $key.$x; ?>" data-sideId="vSide" data-toothId="<?php echo $key.$x; ?>" class="vSide vSide<?php echo $key.$x; ?>" >V</div>

									<div id="vSide<?php echo $key.$x; ?>" data-sideId="dSide" data-toothId="<?php echo $key.$x; ?>" class="dSide dSide<?php echo $key.$x; ?>" >D</div>

									<div id="oSide<?php echo $key.$x; ?>" data-sideId="oSide" data-toothId="<?php echo $key.$x; ?>" class="oSide oSide<?php echo $key.$x; ?>" >O</div>

									<div id="mSide<?php echo $key.$x; ?>" data-sideId="mSide" data-toothId="<?php echo $key.$x; ?>" class="mSide mSide<?php echo $key.$x; ?>" >M</div>

									<div id="pSide<?php echo $key.$x; ?>" data-sideId="pSide" data-toothId="<?php echo $key.$x; ?>" class="pSide pSide<?php echo $key.$x; ?>" >P</div>

								</div>
				</div>
							

			<?php
		}//endfor
		?>

		</div>

		<?php
			}//endforeach

		?>

			
		</div>

		</div>


	</div>

</div>

<script>

initOdontogram("<?php echo  $odontogramId; ?>");
var odontogramId = "<?php echo  $odontogramId; ?>";

</script>