<!DOCTYPE html>
<html>
<body>

<?php
define("constant1", "Welcome to Baabtra.com!<br>");
echo constant1;
define("constant2", "  Monitoring partner<br>");
echo constant2;
$copyconstant = constant1;
global $copyconstant;
 define("copyconstant", "bbbbbbbbbbb<br>");
echo $copyconstant;
?> 

</body>
</html>