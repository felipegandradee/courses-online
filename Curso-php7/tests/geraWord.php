<?php
/*
	// Body's Content
	$doc_body ="
	 <h1>PHP - Export Content to MS Word document</h1>
	 <p>This is a test.<p>
	 <p>This is a test.<p>
	 ";

?>
 <!-- Creating bootom to click -->
<form name="proposal_form" action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post">
	  <input type="submit" name="submit_docs" value="Export as MS Word" class="input-button" />
</form>

<?php
	  if(isset($_POST['submit_docs'])){
	  	// header force a content e low as Word
	          header("Content-Type: application/vnd.msword"); //convert to word
	          header("Expires: 0");//no-cache
	          header("Cache-Control: must-revalidate, post-check=0, pre-check=0");//no-cache
	          header("content-disposition: attachment;filename=reportfiles.doc");
		}

	//print browser
      echo "<html>";
      echo "$doc_body";
      echo "</html>";   

  */   

	// Body's Content
	$doc_body ="
	 <h1>PHP - Export Content to MS Word document</h1>
	 <p>This is a test.<p>
	 <p>This is a test.<p>
	 ";

?>
 <!-- Creating bootom to click -->
<form name="proposal_form" action="geraWord3.php" method="post">
	  <input type="submit" name="submit_docs" value="Export as MS Word" class="input-button" />
</form>

<?php
	  if(isset($_POST['submit_docs'])){
	  	// header force a content e low as Word
	          header("Content-Type: application/vnd.msword"); //convert to word
	          header("Expires: 0");//no-cache
	          header("Cache-Control: must-revalidate, post-check=0, pre-check=0");//no-cache
	          header("content-disposition: attachment;filename=reportfiles.doc");
		}
/*
	//print browser
      echo "<html>";
      echo "$doc_body";
      echo "</html>";       
*/
?> 