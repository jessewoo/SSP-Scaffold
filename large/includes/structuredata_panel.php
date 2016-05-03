<div class="row">
    <div class="col-md-6 col-sm-12 center-block text-center">
		<img src="../large/images/4U26/4u26_jmol.png" class="img-thumbnail">
		<br><br>
		<p class="text-center small">NOTE: Use your mouse to drag, rotate, and zoom in and out of the structure.</p>
		<p class="text-center">Biological assembly 1 assigned by authors</p>
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
		
		</form>
		<br>
		
		<h4>Select Display Mode</h4>
		<button type="button" class="btn btn-default active">Secondary Structure</button>
		<button type="button" class="btn btn-default">Custom</button>
		<button type="button" class="btn btn-default">Export Image</button>
		
		<br>
		<br><br>
		
		<h4>Select a Viewer</h4>
		<p>In-Browser Viewers</p>
		  <button type="button" class="btn btn-default active">JSmol (Javascript)</button>
		  <button type="button" class="btn btn-default">Jmol (Java Applet)</button>
		  <button type="button" class="btn btn-default">PV (WebGL)</button>
		<br><br>
		<p>Standalone Desktop Viewers:</p>
		  <button type="button" class="btn btn-default">Simple Viewer</button>
		  <button type="button" class="btn btn-default">Protein Workshop</button>
		  <button type="button" class="btn btn-default">Ligand Explorer</button>
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
	<div class="col-sm-12">
		<h4>Protein to Ligand Interactions</h4>
		<table class="table table-bordered">
		<caption>4U26 Interactions with <strong>3</strong> ligands. Select the ligand of interest to view ligand's interactions with 4U26 protein.</caption>
		  	<thead>
			        <tr class="active">
			          <th>Ligand ID</th>
					  <th>Name / Formula / Weight</th>
					  <th>2D Diagram</th>
			          <th>3D Interactions</th>
			        </tr>
		      </thead>
				<tbody>
			        <tr>
			          <th scope="row"><a href="#">DOL</a></th>
						<td>5-(2-DIETHYLAMINO-ETHANESULFONYL)-21-HYDROXY- 10-ISOPROPYL-11,19-DIMETHYL-9,26-DIOXA-3,15,28- TRIAZA-TRICYCLO[23.2.1.00,255]OCTACOSA-1(27),12,17,19,25(28)- PENTAENE-2,8,14,23-TETRAONE<br>
							C<sub>3</sub><sub>4</sub> H<sub>5</sub><sub>0</sub> N<sub>4</sub> O<sub>9</sub> S <br>
						</td>				  
			          
					<td><a href="#"><img src="../large/images/4U26/DOL_620.gif" width="150" class="img-responsive"></a></td>	
			          <td>
						  <button class="btn btn-default btn-sm" type="submit">Pocket View in Jmol</button>
				      </td>
			        </tr>
			        
					<tr>
			          <th scope="row"><a href="#">MG</a></th>
						<td>MAGNESIUM Ion<br>
							O<sub>4</sub> P<br>
						</td>

					<td><a href="#"><img src="../large/images/4U26/MG_620.gif" width="150" class="img-responsive"></a></td>
			          <td>
						  <button class="btn btn-default btn-sm" type="submit">Pocket View in Jmol</button>
			          </td>
			        </tr>
		    
					<tr>
			          <th scope="row"><a href="#">ZN</a></th>
						<td>ZINC Ion<br>
							O<sub>4</sub> P<br>
						</td>

					<td><a href="#"><img src="../large/images/4U26/ZN_620.gif" width="150" class="img-responsive"></a></td>
			          <td>
						  <button class="btn btn-default btn-sm" type="submit">Pocket View in Jmol</button>
			          </td>
			        </tr>
		
		      </tbody>
		</table>
    </div>
</div>
