<?php
 if (! function_exists('dateToDMY')) {
    function dateToDMY($date) {
      return date('d-M-Y', strtotime($date));
    }
  }
?>
