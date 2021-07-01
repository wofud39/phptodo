<?php
include("./header.php");

//content
$multitype = array(20, 3.14, 'A',"Bob");
for( $i = 0; $i<count($multitype) ; $i++)
	print($multitype[$i] . "<br>");



include("./footer.php");
?>
<pre class="bg-danger">
<?=print_r($multitype)?>
</pre>
<?php
include("./footer.php");
?>