<?php

		$actual_link = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
		$location = "Location: $actual_link"."dashboard";
		header($location);


?>	
