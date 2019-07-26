<?php


$diaDaSemana = date("w") + 3 ;

 echo "<h2> 3 Days after today: $diaDaSemana </h2>";

switch($diaDaSemana) {

	case 0:
	echo "Domingo";
	break;

	case 1:
	echo "Segunda-feira";
	break;

	case 2:
	echo "Terça-feira";
	break;

	case 3:
	echo "Quarta-feira";
	break;

	case 4:
	echo "Quinta-feira";
	break;

	case 5:
	echo "Sexta-feira";
	break;

	case 6:  
	echo "Sábado";
	break;

	default:
	echo "Dia não encontrado";
}
 
?>


<form name="proposal_form" action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post">
	  <input type="submit" name="submit_docs" value="Export as MS Word" class="input-button" />
</form>


<?php
	  if(isset($_POST['submit_docs'])){
	  	// header force a content e low as Word
	          header("Content-Type: application/vnd.msword"); //convert to word
	          header("Expires: 0");//no-cache
	          header("Cache-Control: must-revalidate, post-check=0, pre-check=0");//no-cache
	          header("content-disposition: attachment;filename=reportfiles.docx");
		}     
?> 