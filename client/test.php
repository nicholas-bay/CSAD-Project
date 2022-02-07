<?php
function php_func()
{
  echo "Stay Safe";
}
?>

<button onclick="alert('<?php php_func(); ?>');"> Click </button>