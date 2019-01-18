	<?php
		echo "PM <br />";
		echo $afterspace;echo $afterspace;echo $afterspace;
		for ($i = 1; $i< 25; $i++){
			$r = rand(0, 11);
			if ($i <10){$space ="&nbsp;&nbsp;";}else{$space = "&nbsp;";}
				$link  = "<span style='padding:1px 5px 1px 5px;background-color:".$ncolor[$r]."; color:".$fcolor[$r]."'><b>".$space.$i.$afterspace."</b></span>";
				echo "<a href = 'http:10.183.2.".$i."' target = '_blank'>$link</a>";
				if($i == 4) echo "&nbsp&nbsp&nbsp";
				if($i == 12) echo "&nbsp&nbsp&nbsp";
				if($i == 20) echo "&nbsp&nbsp&nbsp";
				if ($i == 8) echo "<br /><br />";
				if ($i == 16) echo "<br /><br />";	
		}
				
		
		?>
