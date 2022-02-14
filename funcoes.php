<?php
function issetfuncion($sql){
	$con = mysqli_connect("localhost","root","","tcc") or die("Erro!");
	
	if(!($result = mysqli_query($con, $sql))){
		echo "<p>Não existem audiobooks relacionados com a sua pesquisa.</p>";
		return;
	}
			
	$reg = mysqli_fetch_array($result);
	if ($reg==0)
	{
		echo "<div style='margin:27px'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Não existem audiobooks relacionados a sua pesquisa</div>";
		exit;
	}

	while ($reg!=0)
	{
			$id = 			$reg["id"];
			$nome = 	    $reg["nome"];
			$caregoria =    $reg["categoria"];
			$arquivo = 	    $reg["arquivo"];

		echo "$arquivo";

		$reg = mysqli_fetch_array($juncao);		
	} 
	exit();
}
?>