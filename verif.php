<?php
	include("var.php");

	if( $camp )
	{
		if ( $compa ) 
		{
			$magic;
			header("location:curriculum.php");
		} else{
				header("location:curiculum.php?id=false_index");
			}
	} 
	else{
			header("location:curiculum.php?id=false_camp");
		}
?>