<?php
  $url = isset($_SERVER['HTTP_REFERER']) ? htmlspecialchars($_SERVER['HTTP_REFERER']) : '';
?>
<a href="<?=$url?>"></a>