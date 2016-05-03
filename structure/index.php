<!DOCTYPE html>
<html lang="en">
  
<? include 'includes/meta.php'; ?>

  <body id="alternative2">
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
						<? include 'includes/structureheader2.php'; ?>
						<hr>
						<? include 'includes/structure-macromolecule-entityligands2.php'; ?>	
						<? include 'includes/structure-functionview2.php'; ?>
						<? include 'includes/structure-experimentalmethod2.php'; ?>
												
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
