<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pdf 
{
    function createPDF($html, $filename='', $download=TRUE, $paper='A4', $orientation='portrait'){
	$dompdf = new Dompdf\Dompdf();
        $dompdf->load_html($html);
        $dompdf->set_paper($paper, $orientation);

        $dompdf->render();
		$dompdf->stream($filename.'.pdf', array('Attachment' => 1));
        
    }    
	
	function createPDFLandScape($html, $filename='', $download=TRUE, $paper='A4', $orientation='landscape'){
	$dompdf = new Dompdf\Dompdf();
        $dompdf->load_html($html);
        $dompdf->set_paper($paper, $orientation);

        $dompdf->render();
		$dompdf->stream($filename.'.pdf', array('Attachment' => 1));
        
    }
}
?>
