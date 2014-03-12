<div id="prescriptionArea" >

	<div id="prescriptionHeader" >

		<div id="prescriptionLogo" >
			<?php echo $this->Html->image('dental_receta_logo.png', array('alt' => 'logo', "id"=>"prescriptionImage")) ?>
		</div>

		<div id="prescriptionTitles" >

			<div id="prescriptionTopTitle" >
				<span id="prescriptionCompanyName" >Clinica Dental Arcoiris</span>   Ortodoncia & Implantes
			</div>
			<div id="prescriptionBottomTitle" >
				Blvd. Venustiano Carranza, No. 1767, Col. González Ortega<br>
				Teléfono (686)562-6944, Móvil (686)212-9704

			</div>
			


		</div>

	</div>

	<div id="prescriptionContent" >

		<div id="prescriptionPersonalInfo" >

			<div id="prescriptionPacient" >Paciente: <span><?php echo $prescription["Paciente"]["fullName"]; ?></span></div>
			<div id="prescriptionDate" >Fecha: <span><?php echo $prescription["Prescription"]["created"]; ?></span></div>
			<div id="prescriptionAge" >Edad: <span><?php echo $prescription["Paciente"]["edad"]; ?></span></div>
			

		</div>

		<div id="prescriptionMedicaments" >
			<span>Rx.</span>
			<div id="prescriptionMedicamentsList" >

				<?php foreach ($prescription["Medicament"] as $medicament) {
				 ?>
				<div class="prescriptionMedicamentElement" >
					<div class="prescriptionMedicamentName" >** <?php echo $medicament["name"]; ?> (<?php echo $medicament["activeElement"] ?>) </div>
					<div class="prescriptionMedicamentPresentation" ><?php echo $medicament["presentation"]." ".$medicament["size"]; ?> :</div>
					<div class="prescriptionMedicamentInstructions" ><?php echo$medicament["intructions"]; ?></div>

				</div>

				<?php } ?>
			</div>

		</div>

	</div>

	<div id="prescriptionFooter" >

		<div id="prescriptionFooterInfo" >
			CD. José Carlos Lopez Padilla / Cirujano Dentista y Ortodoncista <br>
			Cedula Profesional 5415839 / U.A.B.C. 

		</div>

		<div id="prescriptionFooterSignature" >FIRMA</div>

	</div>



</div>