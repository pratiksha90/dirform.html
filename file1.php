#create or open file
<?php
	$path=$_GET['t2'];
	if(!file_exists(path))
	{
		$file1=fopen($path,"w");
	}
	else
	{
		$file1=fopen($path,"r");
	}
?>