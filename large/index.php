<!DOCTYPE html>
<html lang="en">
  
<? include 'includes/meta.php'; ?>

  <body id="alternative2">
	<? include '../includes/navbar.php'; ?>
	<? include '../includes/header.php'; ?>

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
						<? include 'includes/structure-macromoleculedata.php'; ?>
						
						<? include 'includes/structure-liganddata.php'; ?>	
						<? include 'includes/structure-experimentalmethod.php'; ?>
												
				    </div>
					
					<!-- STRUCTURE 3D VIEW -->
				    <div role="tabpanel" class="tab-pane " id="structure">
						<? include 'includes/structureheadercompact.php'; ?>
						<hr>
				    	<? include 'includes/structuredata_panel.php'; ?>
				    </div>
					
					<!-- ENTITY Details -->
				    <div role="tabpanel" class="tab-pane " id="entity">
						<? include 'includes/structureheadercompact.php'; ?>
						<hr>
				    	<? include 'includes/entitydata_panel.php'; ?>
				    </div>
					
				  </div>
				
			</div>	
		</div>
		
      <!-- /END THE FEATURETTES -->
    </div><!-- /.container -->

	<!-- FOOTER -->
	<? include '../includes/footer.php'; ?>
	<? include '../includes/javascript.php'; ?>
    
  </body>
</html>
