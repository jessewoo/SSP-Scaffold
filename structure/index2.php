<!DOCTYPE html>
<html lang="en">
  
<? include 'includes/meta.php'; ?>

  <body>
	<? include 'includes/navbar.php'; ?>
	<? include 'includes/header.php'; ?>

    <div class="container" id="main_content">
						
		<div class="row">
			<div role="tabpanel" class="col-md-12">	
				<!-- TABS SECTION -->
				<? include 'includes/structuresubnav.php'; ?>
				
				<!-- TAB PANEL -->
				  <div class="tab-content">
					<!-- STRUCTURE SUMMARY -->
				    <div role="tabpanel" class="tab-pane active" id="summary">
						<br>
						<? include 'includes/structureheader.php'; ?>
						<hr>
						<? include 'includes/structure-entityview.php'; ?>	
						<hr>
						<? include 'includes/structure-structuraldata.php'; ?>	
						<hr>
						<? include 'includes/structure-functionview.php'; ?>
						<hr>
						<? include 'includes/structure-experimentalmethod.php'; ?>
												
				    </div>
					
					<!-- STRUCTURE 3D VIEW -->
				    <div role="tabpanel" class="tab-pane" id="structure">
						<? include 'includes/structureheadercompact.php'; ?>
						<hr>
				    	<? include 'includes/structuredata_panel.php'; ?>
				    </div>
					
					<!-- ENTITY VIEW -->
				    <div role="tabpanel" class="tab-pane" id="entity">
						<? include 'includes/structureheadercompact.php'; ?>
						<hr>
				    	<? include 'includes/entitydata_panel.php'; ?>
				    </div>
					
					<!-- FUNCTION VIEW -->
				    <div role="tabpanel" class="tab-pane" id="function">
						<? include 'includes/structureheadercompact.php'; ?>
						<hr>
						---Function---
					</div>
					
					<!-- EXPERIMENTAL VIEW -->
					<div role="tabpanel" class="tab-pane" id="experimental">
						<? include 'includes/structureheadercompact.php'; ?>
						<hr>
						---Experimental---
					</div>
					
				  </div>
				
			</div>	
		</div>
		
		
		
		
      <!-- /END THE FEATURETTES -->
    </div><!-- /.container -->

	<!-- FOOTER -->
	<? include 'includes/footer.php'; ?>
	<? include 'includes/javascript.php'; ?>
    
  </body>
</html>
