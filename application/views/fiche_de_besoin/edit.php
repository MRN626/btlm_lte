<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Fiche De Besoin Edit</h3>
            </div>
			<?php echo form_open('fiche_de_besoin/edit/'.$fiche_de_besoin['ID']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="ID_AGENT" class="control-label">Agent</label>
						<div class="form-group">
							<select name="ID_AGENT" class="form-control">
								<option value="">select agent</option>
								<?php 
								foreach($all_agent as $agent)
								{
									$selected = ($agent['ID'] == $fiche_de_besoin['ID_AGENT']) ? ' selected="selected"' : "";

									echo '<option value="'.$agent['ID'].'" '.$selected.'>'.$agent['ID'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="ID_SERVICE_GEN" class="control-label">Service Gen</label>
						<div class="form-group">
							<select name="ID_SERVICE_GEN" class="form-control">
								<option value="">select service_gen</option>
								<?php 
								foreach($all_service_gen as $service_gen)
								{
									$selected = ($service_gen['ID'] == $fiche_de_besoin['ID_SERVICE_GEN']) ? ' selected="selected"' : "";

									echo '<option value="'.$service_gen['ID'].'" '.$selected.'>'.$service_gen['ID'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="ID_CHEF_DEP" class="control-label">Chef Departement</label>
						<div class="form-group">
							<select name="ID_CHEF_DEP" class="form-control">
								<option value="">select chef_departement</option>
								<?php 
								foreach($all_chef_departement as $chef_departement)
								{
									$selected = ($chef_departement['ID'] == $fiche_de_besoin['ID_CHEF_DEP']) ? ' selected="selected"' : "";

									echo '<option value="'.$chef_departement['ID'].'" '.$selected.'>'.$chef_departement['ID'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="NOM_PRODUIT" class="control-label">NOM PRODUIT</label>
						<div class="form-group">
							<input type="text" name="NOM_PRODUIT" value="<?php echo ($this->input->post('NOM_PRODUIT') ? $this->input->post('NOM_PRODUIT') : $fiche_de_besoin['NOM_PRODUIT']); ?>" class="form-control" id="NOM_PRODUIT" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="DESCRIPTION" class="control-label">DESCRIPTION</label>
						<div class="form-group">
							<input type="text" name="DESCRIPTION" value="<?php echo ($this->input->post('DESCRIPTION') ? $this->input->post('DESCRIPTION') : $fiche_de_besoin['DESCRIPTION']); ?>" class="form-control" id="DESCRIPTION" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="RAISON" class="control-label">RAISON</label>
						<div class="form-group">
							<input type="text" name="RAISON" value="<?php echo ($this->input->post('RAISON') ? $this->input->post('RAISON') : $fiche_de_besoin['RAISON']); ?>" class="form-control" id="RAISON" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="DEPARTEMENT" class="control-label">DEPARTEMENT</label>
						<div class="form-group">
							<input type="text" name="DEPARTEMENT" value="<?php echo ($this->input->post('DEPARTEMENT') ? $this->input->post('DEPARTEMENT') : $fiche_de_besoin['DEPARTEMENT']); ?>" class="form-control" id="DEPARTEMENT" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="NOM_DEMANDEUR" class="control-label">NOM DEMANDEUR</label>
						<div class="form-group">
							<input type="text" name="NOM_DEMANDEUR" value="<?php echo ($this->input->post('NOM_DEMANDEUR') ? $this->input->post('NOM_DEMANDEUR') : $fiche_de_besoin['NOM_DEMANDEUR']); ?>" class="form-control" id="NOM_DEMANDEUR" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="TELEPHONE_DEMANDEUR" class="control-label">TELEPHONE DEMANDEUR</label>
						<div class="form-group">
							<input type="text" name="TELEPHONE_DEMANDEUR" value="<?php echo ($this->input->post('TELEPHONE_DEMANDEUR') ? $this->input->post('TELEPHONE_DEMANDEUR') : $fiche_de_besoin['TELEPHONE_DEMANDEUR']); ?>" class="form-control" id="TELEPHONE_DEMANDEUR" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="DATE_LIVRAISON_SOUHAITE" class="control-label">DATE LIVRAISON SOUHAITE</label>
						<div class="form-group">
							<input type="text" name="DATE_LIVRAISON_SOUHAITE" value="<?php echo ($this->input->post('DATE_LIVRAISON_SOUHAITE') ? $this->input->post('DATE_LIVRAISON_SOUHAITE') : $fiche_de_besoin['DATE_LIVRAISON_SOUHAITE']); ?>" class="has-datetimepicker form-control" id="DATE_LIVRAISON_SOUHAITE" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="ADRESSE_LIVRAISON" class="control-label">ADRESSE LIVRAISON</label>
						<div class="form-group">
							<input type="text" name="ADRESSE_LIVRAISON" value="<?php echo ($this->input->post('ADRESSE_LIVRAISON') ? $this->input->post('ADRESSE_LIVRAISON') : $fiche_de_besoin['ADRESSE_LIVRAISON']); ?>" class="form-control" id="ADRESSE_LIVRAISON" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="HEURE_LIVRAISON" class="control-label">HEURE LIVRAISON</label>
						<div class="form-group">
							<input type="text" name="HEURE_LIVRAISON" value="<?php echo ($this->input->post('HEURE_LIVRAISON') ? $this->input->post('HEURE_LIVRAISON') : $fiche_de_besoin['HEURE_LIVRAISON']); ?>" class="has-datetimepicker form-control" id="HEURE_LIVRAISON" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="ETAT_FICHE" class="control-label">ETAT FICHE</label>
						<div class="form-group">
							<input type="text" name="ETAT_FICHE" value="<?php echo ($this->input->post('ETAT_FICHE') ? $this->input->post('ETAT_FICHE') : $fiche_de_besoin['ETAT_FICHE']); ?>" class="form-control" id="ETAT_FICHE" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="SIGNATURE_CHEF_DEP" class="control-label">SIGNATURE CHEF DEP</label>
						<div class="form-group">
							<input type="text" name="SIGNATURE_CHEF_DEP" value="<?php echo ($this->input->post('SIGNATURE_CHEF_DEP') ? $this->input->post('SIGNATURE_CHEF_DEP') : $fiche_de_besoin['SIGNATURE_CHEF_DEP']); ?>" class="form-control" id="SIGNATURE_CHEF_DEP" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="SIGNATURE_SERVICE_GEN" class="control-label">SIGNATURE SERVICE GEN</label>
						<div class="form-group">
							<input type="text" name="SIGNATURE_SERVICE_GEN" value="<?php echo ($this->input->post('SIGNATURE_SERVICE_GEN') ? $this->input->post('SIGNATURE_SERVICE_GEN') : $fiche_de_besoin['SIGNATURE_SERVICE_GEN']); ?>" class="form-control" id="SIGNATURE_SERVICE_GEN" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="SIGNATURE_DAF" class="control-label">SIGNATURE DAF</label>
						<div class="form-group">
							<input type="text" name="SIGNATURE_DAF" value="<?php echo ($this->input->post('SIGNATURE_DAF') ? $this->input->post('SIGNATURE_DAF') : $fiche_de_besoin['SIGNATURE_DAF']); ?>" class="form-control" id="SIGNATURE_DAF" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="SIGNATURE_DG" class="control-label">SIGNATURE DG</label>
						<div class="form-group">
							<input type="text" name="SIGNATURE_DG" value="<?php echo ($this->input->post('SIGNATURE_DG') ? $this->input->post('SIGNATURE_DG') : $fiche_de_besoin['SIGNATURE_DG']); ?>" class="form-control" id="SIGNATURE_DG" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="PROFORMAT_1" class="control-label">PROFORMAT 1</label>
						<div class="form-group">
							<input type="text" name="PROFORMAT_1" value="<?php echo ($this->input->post('PROFORMAT_1') ? $this->input->post('PROFORMAT_1') : $fiche_de_besoin['PROFORMAT_1']); ?>" class="form-control" id="PROFORMAT_1" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="PROFORMAT_2" class="control-label">PROFORMAT 2</label>
						<div class="form-group">
							<input type="text" name="PROFORMAT_2" value="<?php echo ($this->input->post('PROFORMAT_2') ? $this->input->post('PROFORMAT_2') : $fiche_de_besoin['PROFORMAT_2']); ?>" class="form-control" id="PROFORMAT_2" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="PROFORMAT_3" class="control-label">PROFORMAT 3</label>
						<div class="form-group">
							<input type="text" name="PROFORMAT_3" value="<?php echo ($this->input->post('PROFORMAT_3') ? $this->input->post('PROFORMAT_3') : $fiche_de_besoin['PROFORMAT_3']); ?>" class="form-control" id="PROFORMAT_3" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="DATE_CREATION" class="control-label">DATE CREATION</label>
						<div class="form-group">
							<input type="text" name="DATE_CREATION" value="<?php echo ($this->input->post('DATE_CREATION') ? $this->input->post('DATE_CREATION') : $fiche_de_besoin['DATE_CREATION']); ?>" class="has-datetimepicker form-control" id="DATE_CREATION" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="DATE_MODIFICATION" class="control-label">DATE MODIFICATION</label>
						<div class="form-group">
							<input type="text" name="DATE_MODIFICATION" value="<?php echo ($this->input->post('DATE_MODIFICATION') ? $this->input->post('DATE_MODIFICATION') : $fiche_de_besoin['DATE_MODIFICATION']); ?>" class="has-datetimepicker form-control" id="DATE_MODIFICATION" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="DATE_SUPPRESSION" class="control-label">DATE SUPPRESSION</label>
						<div class="form-group">
							<input type="text" name="DATE_SUPPRESSION" value="<?php echo ($this->input->post('DATE_SUPPRESSION') ? $this->input->post('DATE_SUPPRESSION') : $fiche_de_besoin['DATE_SUPPRESSION']); ?>" class="has-datetimepicker form-control" id="DATE_SUPPRESSION" />
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>