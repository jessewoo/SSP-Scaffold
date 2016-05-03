<a href="#structure" aria-controls="structure" role="tab" data-toggle="tab">
	<button type="button" class="btn btn-default btn-sm pull-right">View All Structural 3D Data</button>
</a>
<h3>Structural 3D Data</h3>

<div class="row">
    <div class="col-md-12 col-sm-12">
		<h4>Macromolecules</h4>
		<h5>Entity Data</h5>
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
				<img src="/images/4hhb/P68871_PFV.png" class="img-thumbnail">
		    </div>
		    <div role="tabpanel" class="tab-pane" id="gv1">
		    	<h5>Gene View for Entity #1</h5>
				<p>The "Gene View" comparing <a href="http://www.rcsb.org/pdb/gene/HBA1" target="_blank">HBA1</a> and <a href="#">HBA2</a> to the entity.</p>
				<img src="/images/4hhb/HBB_GeneView.png" class="img-thumbnail">
		
		    </div>
		  </div>

		</div>
		<button type="button" class="btn btn-primary center-block" id="entitynext">
		  <span class="glyphicon glyphicon-download" aria-hidden="true"></span> Load Entity #2 Protein Feature and Gene View
		</button>
    </div>
	
</div>
