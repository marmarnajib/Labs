<?php
/**
 * 
 * @param
 * @return
 */

 function view($path,$data = array())
 {
     extract($data);
     include(RAT_VIEW_DIR . $path . '.html.php');
 }