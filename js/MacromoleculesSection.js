//Purpose: Macromolecule Section Toggling

$(document).ready(function()
{
	console.log("Macromolecule Section");	
	$('#MacromoleculesSection_Nucleic_Acids').hide();
	$('.NextFiveRows').hide();
	
	$( "#Macromolecules_Proteins" ).click(function() {
		console.log("Macromolecule Section Proteins");	
		$('#Macromolecules_Nucleic_Acids').removeClass("active");
		$('#Macromolecules_Proteins').addClass("active");
		$('#MacromoleculesSection_Nucleic_Acids').hide();
		$('#MacromoleculesSection_Proteins').show();
	});
	
	$( "#Macromolecules_Nucleic_Acids" ).click(function() {
		console.log("Macromolecule Section Nucleic Acid");	
		$('#Macromolecules_Proteins').removeClass("active");
		$('#Macromolecules_Nucleic_Acids').addClass("active");
		$('#MacromoleculesSection_Proteins').hide();
		$('#MacromoleculesSection_Nucleic_Acids').show();
	});
	
	$( "#Next5Row" ).click(function() {
		console.log("Next 5 Row");	
		$('.NextFiveRows').show();
	});
});