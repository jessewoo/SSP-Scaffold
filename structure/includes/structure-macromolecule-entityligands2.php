<div class="panel panel-default">
  <div class="panel-heading">
    <div class="panel-title">
		Structural Data: Macromolecules & Ligands
		<!-- View All Structural Data -->
		<a href="#structure" aria-controls="structure" role="tab" data-toggle="tab">
			<button type="button" class="btn btn-default btn-xs pull-right">View All Macromolecule & Ligands Data</button>
		</a>
	</div>
  </div>
  <div class="panel-body">
		<div class="row">
		    <div class="col-md-12 col-sm-12">
				<h4>Macromolecule (Entity) Data</h4>
				<p>Function: <a href="#">Oxygen Transport</a> | Structure Weight: <a href="#">64737.73</a> | Organism: <a href="#">Homo Sapiens</a></p>
				<table class="table table-bordered">
				  <thead>
				        <tr class="active">
		  				  <th>Entity #</th>
				          <th>Entity Molecule</th>
						  <th>Entity Type</th>	
				          <th>Entity Length</th>
				          <th>Chains</th>
						  <th>Load Entity Views</th>
				        </tr>
			      </thead>
					<tbody>
				        <tr>
		  				  <td>1</td>
				          <td>Hemoglobin (Deoxy) (Alpha Chain)</td>
						  <td>Protein</td>
				          <td>141</td>
				          <td>A, C</td>
						  <td>
				          	  <button class="btn btn-default btn-sm" type="submit">Protein Feature View</button>
							  <button class="btn btn-default btn-sm" type="submit">Gene View</button>
				          </td>
				        </tr>
						<tr>
		  				  <td>2</td>
				          <td>Hemoglobin (Deoxy) (Beta Chain)</td>
						  <td>Protein</td>
				          <td>146</td>
				          <td>B, D</td>
						  <td>
				          	  <button class="btn btn-default btn-sm" type="submit">Protein Feature View</button>
							  <button class="btn btn-default btn-sm" type="submit">Gene View</button>
				          </td>
				        </tr>
			      </tbody>	
				</table>

				<div role="tabpanel">
				  <!-- Nav tabs -->
				  <ul class="nav nav-tabs" role="tablist">
				    <li role="presentation" class="active"><a href="#pfv1" aria-controls="pfv1" role="tab" data-toggle="tab">Entity #1: Protein Feature View P69905</a></li>
				    <li role="presentation"><a href="#gv1" aria-controls="gv1" role="tab" data-toggle="tab">Entity #1: Gene View HBA1 and HBA2</a></li>
				  </ul>

				  <!-- Tab panes -->
				  <div class="tab-content">
				    <div role="tabpanel" class="tab-pane active" id="pfv1">
				    	<h5>UniProtKB for Entity #1</h5>
						<p>The "Protein Feature View" comparing <a href="http://www.uniprot.org/uniprot/P69905" target="_blank">UniProt P69905</a>. See <a href="#">related structures</a> to the entity.</p>
						<img src="/images/4hhb/P68871_PFV.png" class="img-responsive">
				    </div>
				    <div role="tabpanel" class="tab-pane" id="gv1">
				    	<h5>Gene View for Entity #1</h5>
						<p>The "Gene View" comparing <a href="http://www.rcsb.org/pdb/gene/HBA1" target="_blank">HBA1</a> and <a href="#">HBA2</a> to the entity.</p>
						<img src="/images/4hhb/HBB_GeneView.png" class="img-responsive">

				    </div>
				  </div>
				<hr>	

				</div>
				<button type="button" class="btn btn-primary center-block" id="entitynext">
				  <span class="glyphicon glyphicon-download" aria-hidden="true"></span> Load Entity #2 Protein Feature and Gene View
				</button>
		    </div>
		</div>
		<!-- Row 1: Entity Data End -->
		<br>
		<hr>
		<div class="row" id="Ligands">
			<div class="col-sm-12">
				<h4>Ligand Data</h4>
				<table class="table table-bordered">
				  <thead>
				        <tr class="active">
				          <th>Ligand ID</th>
						  <th>Name / Formula / Weight</th>
						  <th>Binding Affinity <small>(External Data)</small></th>
						  <th>2D Diagram</th>
						<th>Poseview</th>
				          <th>View Interactions</th>
				        </tr>
			      </thead>
					<tbody>
				        <tr>
				          <th scope="row"><a href="#">HEM</a></th>
							<td>Protoporphyrin IX Containing FE<br>
								C<sub>3</sub><sub>4</sub> H<sub>3</sub><sub>2</sub> Fe N<sub>4</sub> O<sub>4</sub><br>
									616.49</td>				  
				          <td class="warning">

							<p>ΔH: -123 - -66.9 kJ/mol (99 - 100) <span class="label label-warning">BindingDB</span></p> 
							<p>Kd: 0.00004 nM <span class="label label-warning">PDBbind</span></p>
						</td>
						<td><a href="#"><img src="http://www.rcsb.org/pdb/images/HEM_120.gif"></a></td>	
						<td><a href="#"><img src="http://www.rcsb.org/pdb/images/BTN:1STP_psv_v_100.png"></a></td>	
				          <td>
							  <button class="btn btn-default btn-sm" type="submit">Ligand Explorer View</button>
							  <button class="btn btn-default btn-sm" type="submit">Jmol View</button>
					      </td>
				        </tr>
				        <tr>
				          <th scope="row"><a href="#">PO4</a></th>
							<td>Phosphate Ion<br>O<sub>4</sub> P<br>94.97</td>

						<td>N/A</td>
						<td><a href="#"><img src="http://www.rcsb.org/pdb/images/PO4_120.gif"></a></td>
						<td><a href="#"><img src="http://www.rcsb.org/pdb/images/BTN:1STP_psv_v_100.png"></a></td>	
				          <td>
				          	  <button class="btn btn-default btn-sm" type="submit">Ligand Explorer View</button>
							  <button class="btn btn-default btn-sm" type="submit">Jmol View</button>

				          </td>
				        </tr>

			      </tbody>	
				</table>
			</div>
		</div>
		<!-- Row 2: Ligands End -->
	
	
	
	
	</div>
</div>
<div class="clearfix"></div>




