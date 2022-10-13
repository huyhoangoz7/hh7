<?php 
	chong_pha_hoai();
?>
<script type="text/javascript" >
	var FCKeditor = function( instanceName, width, height, toolbarSet, value )
{
	// Properties
	this.InstanceName	= instanceName ;
	this.Width			= width			|| '100%' ;
	this.Height			= height		|| '200' ;
	this.ToolbarSet		= toolbarSet	|| 'Default' ;
	this.Value			= value			|| '' ;
	//this.BasePath		= FCKeditor.BasePath ;
	<?php 
	
		$duong_dan_ll=$thu_muc_bao_mat."fckeditor/";
		echo "this.BasePath='";
		echo $duong_dan_ll;
		echo "';";
		
	?>

	this.CheckBrowser	= true ;
	this.DisplayErrors	= true ;
	
	//alert(FCKeditor.BasePath);

	this.Config			= new Object() ;

	// Events
	this.OnError		= null ;	// function( source, errorNumber, errorDescription )
}
</script>