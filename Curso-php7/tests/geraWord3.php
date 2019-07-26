<html

    xmlns:o='urn:schemas-microsoft-com:office:office'

    xmlns:w='urn:schemas-microsoft-com:office:word'

    xmlns='http://www.w3.org/TR/REC-html40'>
    <head><title>Time</title>
 


</head>
	<body lang=EN-US style='tab-interval:.5in'>
		<?php
			include_once('C:\xampp\htdocs\tests\geraWord.php');

			echo "$doc_body";
			header("Content-type: application/vnd.ms-word");
			header("Content-Disposition: attachment;Filename=report_".date("d_m_Y_G_i").".docx");
		?>

	</body>
</html>



