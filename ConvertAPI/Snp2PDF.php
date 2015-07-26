<?php

namespace ConvertAPI;

require_once('Abstract2PDF.php');

 /**
  * Extends the ConvertAPI class to convert Access Report Snapshots documents 
  * into PDF format via convertapi.com.
  *
  * @see http://convertapi.com/snp-pdf-api
  */
class Snp2Pdf extends Abstract2Pdf {

    protected $_https = true;

 /**
  * URL of the appropriate convertapi.com API.
  */
	protected $_apiUrl = '//do.convertapi.com/Snp2Pdf';

 /**
  * An array of valid input file formats for this conversion. Overrides the
  * parent array.
  */
	protected $_validInputFormats = array('snp');

}