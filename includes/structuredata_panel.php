<div class="row">
    <div class="col-md-6 col-sm-12 center-block text-center">
		<img src="/images/4hhb/JmolRendering_4hhb.jpg" class="img-thumbnail" data-toggle="tooltip" data-placement="top" title="Placeholder for Jmol Rendering. Insert Jmol code.">
		<br><br>
		<p class="text-center">Biological assembly 1 assigned by authors and generated by PISA</p>
		<div class="btn-group btn-group " role="group">
		  <button type="button" class="btn btn-default active">JSmol (Javascript)</button>
		  <button type="button" class="btn btn-default">Jmol (Java Applet)</button>
		  <button type="button" class="btn btn-default">PV (WebGL)</button>
		</div>
    </div>
	<div class="col-md-6 col-sm-12">
				
		<h4>Structure Detail</h4>
		<form class="form-horizontal">
		  <div class="form-group">
		    <label class="col-sm-3 control-label">Structure View</label>
		    <div class="col-sm-8">
			    <select class="form-control input-sm">
				  <option>Asymetric Unit</option>
				  <option selected>Bioassembly Unit 1</option>
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
		<form class="form-horizontal">
			<div class="form-group">
			    <label class="col-sm-3 control-label">Current View</label>
			    <div class="col-sm-8">
				    <p class="form-control-static">Front C2 axis</p>
				</div>
			</div>
		</form>		
		<nav id="changeorientation">
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
		<button type="button" class="btn btn-default active">Secondary Structure</button>
		<button type="button" class="btn btn-default">Subunit</button>
		<button type="button" class="btn btn-default">Symmetry</button>
		<button type="button" class="btn btn-default">Custom</button>
		<button type="button" class="btn btn-default">Export Image</button>
    </div>
		
</div>
<hr>
<div class="row">
	<div class="col-md-12 col-sm-12">
		<h4>Custom Scripting <a data-toggle="collapse" href="#collapseCustomScript" aria-expanded="true" aria-controls="collapseCustomScript" class="small">[more]</a></h4>
		<div class="collapse" id="collapseCustomScript">
			<p>Input</p>
			<textarea class="form-control" rows="4" placeholder="Insert Scripts & Enter"></textarea><br>
			<p>History</p>
			<textarea class="form-control" rows="3" placeholder="History log"></textarea><br>
			<p>Console</p>
			<textarea class="form-control" rows="3" placeholder="Console" readonly>			
					<? include 'jmolhistory.php'; ?>
			</textarea>
		</div>
    </div>
</div>
<hr>
<div class="row">
	<div class="col-md-12 col-sm-12">
		<h4>Domain Assignments</h4>
		<table class="table table-bordered">
		<caption>Run the following scripts to view entity domains in Jmol</caption>
		  <thead>
		        <tr class="externalannotation">
		          <th>Domain Assignments</th>
				  <th>Name</th>
				  <th>Location</th>	
		          <th>Classification</th>
		          <th>Run Scripts</th>
		        </tr>
	      </thead>
			<tbody>
		        <tr>
		          <th scope="row"><a href="#">Hemoglobin, alpha-chain</a></th>
				  <td>d4hhba_</td>
				  <td>A</td>	
		          <td>a.1.1.2</td>
		          <td>
					  <button class="btn btn-default btn-sm" type="submit">View Domain</button>
			      </td>
		        </tr>
		        <tr>
		          <th scope="row"><a href="#">Hemoglobin, alpha-chain</a></th>
				  <td>d4hhbc_</td>
				  <td>C</td>	
		          <td>a.1.1.2</td>
		          <td>
					  <button class="btn btn-default btn-sm" type="submit">View Domain</button>
			      </td>
		        </tr>
				<tr>
		          <th scope="row"><a href="#">Hemoglobin, beta-chain</a></th>
				  <td>d4hhbb_</td>
				  <td>B</td>	
		          <td>a.1.1.2</td>
		          <td>
					  <button class="btn btn-default btn-sm" type="submit">View Domain</button>
			      </td>
		        </tr>
				<tr>
		          <th scope="row"><a href="#">Hemoglobin, beta-chain</a></th>
				  <td>d4hhbd_</td>
				  <td>D</td>	
		          <td>a.1.1.2</td>
		          <td>
					  <button class="btn btn-default btn-sm" type="submit">View Domain</button>
			      </td>
		        </tr>
		    
	      </tbody>	
		</table>
		<span class="label label-warning">SCOP Domain Classification</span>
    </div>
</div>	
<hr>
<div class="row">
	<div class="col-sm-12">
		<h4>Protein to Ligand Interactions</h4>
		<table class="table table-bordered">
		<caption>4HHB Interactions with <strong>2</strong> ligands. Select the ligand of interest to view ligand's interactions with 4HHB protein.</caption>
		  	<thead>
			        <tr class="active">
			          <th>Ligand ID</th>
					  <th>Name / Formula / Weight</th>
					  <th>Binding Affinity <small>(External Data)</small></th>
					  <th>2D Diagram</th>
					  <th>2D Interactions </th>
			          <th>3D Interactions</th>
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
					<td><a href="#"><img src="/images/4hhb/HEM_120.gif"></a></td>	
					<td><a href="#"><img src="/images/4hhb/BTN-1STP_psv_v_100.png"></a></td>	
			          <td>
						  <button class="btn btn-default btn-sm" type="submit">Pocket View in Jmol</button>
				      </td>
			        </tr>
			        <tr>
			          <th scope="row"><a href="#">PO4</a></th>
						<td>Phosphate Ion<br>O<sub>4</sub> P<br>94.97</td>

					<td>--</td>
					<td><a href="#"><img src="/images/4hhb/PO4_120.gif"></a></td>
					<td>--</td>	
			          <td>
						  <button class="btn btn-default btn-sm" type="submit">Pocket View in Jmol</button>
			          </td>
			        </tr>
		    
		      </tbody>
		</table>
    </div>
</div>
