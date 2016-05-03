<h3>3D Structure View</h3>
<div class="row">
    <div class="col-md-6 col-sm-12">
		<img src="/images/4hhb/JmolRendering_4hhb.jpg" class="img-thumbnail" data-toggle="tooltip" data-placement="top" title="Placeholder for Jmol Rendering. Insert Jmol code.">
    </div>
	<div class="col-md-6 col-sm-12">
		<h4>Structure Detail</h4>
		<form class="form-horizontal">
		  <div class="form-group">
		    <label class="col-sm-3 control-label">Structure View</label>
		    <div class="col-sm-8">
			    <select class="form-control input-sm">
				  <option>Assymetric Unit</option>
				  <option>Bioassembly Unit 1</option>
				  <option>Bioassembly Unit 2</option>
				</select>
			</div>
		  </div>
		<div class="form-group">
		    <label class="col-sm-3 control-label">Symmetry Type</label>
		    <div class="col-sm-8">
			    <select class="form-control input-sm">
				  <option>Global Symmetry</option>
				  <option>Global Psudeo-symmetry</option>
				</select>
			</div>
		  </div>
		<div class="form-group">
		    <label class="col-sm-3 control-label">Symmetry</label>
		    <div class="col-sm-8">
			    <p class="form-control-static">C2</p>
			</div>
		  </div>
		<div class="form-group">
		    <label class="col-sm-3 control-label">Stoichiometry</label>
		    <div class="col-sm-8">
			    <p class="form-control-static">A2B2</p>
			</div>
		  </div>
		</form>
		<hr>
		<h4>Select Orientation</h4>
		<p class="form-control-static">Front C2 axis</p>
		<nav>
		  <ul class="pagination">
		    <li>
		      <a href="#" aria-label="Previous">
		        <span aria-hidden="true">&laquo;</span>
		      </a>
		    </li>
		    <li class="active"><a href="#">1</a></li>
		    <li><a href="#">2</a></li>
		    <li><a href="#">3</a></li>
		    <li><a href="#">4</a></li>
		    <li><a href="#">5</a></li>
		    <li>
		      <a href="#" aria-label="Next">
		        <span aria-hidden="true">&raquo;</span>
		      </a>
		    </li>
		  </ul>
		</nav>
		<hr>
		<h4>Select Display Mode</h4>
		<button type="button" class="btn btn-default">Secondary Structure</button>
		<button type="button" class="btn btn-default">Subunit</button>
		<button type="button" class="btn btn-default">Symmetry</button>
		<button type="button" class="btn btn-default">Custom</button>
		<button type="button" class="btn btn-default">Export Image</button>
    </div>
		
</div>
<hr>
<div class="row">
	
	<div class="col-md-4 col-sm-12">
		<h4>Custom Scripting</h4>
		<textarea class="form-control" rows="2" placeholder="Insert Scripts"></textarea><br>
		<textarea class="form-control" rows="2" placeholder="Console Log"></textarea><br>
		<textarea class="form-control" rows="3" placeholder="History"></textarea>
    </div>
	<div class="col-md-8 col-sm-12">
		<h4>Domain Assignments</h4>
		<table class="table table-bordered">
		<caption>Run scripts to view entity domains in Jmol</caption>
		  <thead>
		        <tr class="warning">
		          <th>Domain Assignments</th>
				  <th>Name</th>
				  <th>Location</th>	
		          <th>Classification</th>
		          <th>View Specific Domains</th>
		        </tr>
	      </thead>
			<tbody>
		        <tr>
		          <th scope="row"><a href="#">Hemoglobin, alpha-chain</a></th>
				  <td>d4hhba_</td>
				  <td>A</td>	
		          <td>a.1.1.2</td>
		          <td>
					  <button class="btn btn-default btn-sm" type="submit">View Domain (Jmol)</button>
			      </td>
		        </tr>
		        <tr>
		          <th scope="row"><a href="#">Hemoglobin, alpha-chain</a></th>
				  <td>d4hhbc_</td>
				  <td>C</td>	
		          <td>a.1.1.2</td>
		          <td>
					  <button class="btn btn-default btn-sm" type="submit">View Domain (Jmol)</button>
			      </td>
		        </tr>
				<tr>
		          <th scope="row"><a href="#">Hemoglobin, beta-chain</a></th>
				  <td>d4hhbb_</td>
				  <td>B</td>	
		          <td>a.1.1.2</td>
		          <td>
					  <button class="btn btn-default btn-sm" type="submit">View Domain (Jmol)</button>
			      </td>
		        </tr>
				<tr>
		          <th scope="row"><a href="#">Hemoglobin, beta-chain</a></th>
				  <td>d4hhbd_</td>
				  <td>D</td>	
		          <td>a.1.1.2</td>
		          <td>
					  <button class="btn btn-default btn-sm" type="submit">View Domain (Jmol)</button>
			      </td>
		        </tr>
		    
	      </tbody>	
		</table>
    </div>
</div>	
<hr>
<div class="row">
	<h4>Protein to Ligand Interactions</h4>
	<div class="col-sm-12">
		<table class="table table-bordered">
		<caption>4HHB Interactions with <strong>2</strong> ligands. Select the ligand of interest to view ligand's interactions with 4HHB protein.</caption>
		  <thead>
		        <tr class="warning">
		          <th>Ligand ID</th>
				  <th>Name</th>
				  <th>2D Model</th>	
		          <th>Formula</th>
		          <th>View Interactions</th>
		        </tr>
	      </thead>
			<tbody>
		        <tr>
		          <th scope="row"><a href="#">HEM</a></th>
					<td>Protoporphyrin IX Containing FE</td>
				  <td><a href="#"><img src="http://www.rcsb.org/pdb/images/HEM_120.gif"></a></td>	
		          <td>C<sub>3</sub><sub>4</sub> H<sub>3</sub><sub>2</sub> Fe N<sub>4</sub> O<sub>4</sub></td>
		          
		          <td>
					  <button class="btn btn-default btn-sm" type="submit">View Ligand in Pocket (Jmol)</button>
			      </td>
		        </tr>
		        <tr>
		          <th scope="row"><a href="#">PO4</a></th>
					<td>Phosphate Ion</td>
				  <td><a href="#"><img src="http://www.rcsb.org/pdb/images/PO4_120.gif"></a></td>
		          <td>O<sub>4</sub> P</td>
		          
		          <td>
					  <button class="btn btn-default btn-sm" type="submit">View Ligand in Pocket (Jmol)</button>
		
		          </td>
		        </tr>
		    
	      </tbody>	
		</table>
    </div>
</div>
