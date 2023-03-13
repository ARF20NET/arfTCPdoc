<h2 class="text-primary">arfTCP: <small><i>Reference</i></small></h2>
<hr>
<?php 
  if (!isset($_GET["reference"])) {
    include("./pages/reference/arfTCP.html");
  }
  else{
    $reference = $_GET["reference"];
	check($reference);
	include("./pages/reference/$reference");
	
  }
?>