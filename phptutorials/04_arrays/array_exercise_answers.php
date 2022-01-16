<h1>Chapter 4 Arrays - Array Exercise Answers</h1>

<br/><br/>
(1) 
<br/><br/>

<?php

	$country = array ('uk'=> 'United kingdom', 'ge' => 'Germany', 'fr' => 'France');
	
	?>
	<select name="country">
	<?php	
		foreach($country as $key => $value)
		{	
			?>
            	<option value="<?php echo($key) ?>"><?php echo($value) ?></option>
			<?php		
		}
	?>
	</select>
	<?php


?>


<br/><br/>
(2)
<br/><br/>

<?php

	$colours = array ('red' => '#ff0000', 'green' => '#00ff00');

	?>
	<?php
		foreach($colours as $key => $value)
		{					
			echo($key) 
			?>
            	<input type="radio" name="<?php echo($key) ?>" value="<?php echo($value) ?>" />
            <?php
	    
        }
	?>
	<?php

?>