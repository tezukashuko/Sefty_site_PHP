<?php
  $navarr = array('Home', 'Gallery', 'Resume');
  $cur_page =  basename($_SERVER["SCRIPT_NAME"],".php");
  function navRender($navarr, $cur_page)
  {
    $output = ''; 
    foreach ($navarr as $key) {
      if($cur_page == $key)
      {
        $output .= "<li><a href='$key.php'class='active'>$key</a></li>";
      }
      elseif ($key == 'Home') {
        $output .= $cur_page =='index'?"<li><a href='index.php'class='active'>$key</a></li>": "<li><a href='index.php'>$key</a></li>";
      } 
      else $output .= "<li><a href='$key.php'>$key</a></li>";
    }
    echo $output;
  }
?>