<?php
$color="";
echo "这是一个变色列表";
echo "<ul>";
for ($i=1; $i < 6; $i++) { 
	if ($i%2==0) {
		$color="red";
	}else{
		$color="yellow";
	}
	echo "<li style='background:".$color.";width:300'>第".$i."行内容</li>";
}
echo "</ul>";
?>