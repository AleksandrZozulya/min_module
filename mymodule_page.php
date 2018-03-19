<?php
global $smarty;
include( '../../config/config.inc.php' );
include( '../../header.php' );
$smarty->display( dirname(__FILE__) . '/active.tpl' );
include( '../../footer.php' );

?>