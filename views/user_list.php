<div id="content" class="row">
	<ul>
		<?php
		for($i = 0; $i < $rows; $i++) { 
			echo '<a class="col-12 med-col-6" href="index.php?id='.$users[$i]->id.'"><li>'.$users[$i]->user_fname.' '.$users[$i]->user_lname.'</li></a>';
		}
		?>
	</ul>
</div>
<div id="content" class="row"><a href="http://localhost:8888/oualifi_a_MVC/index.php?task=create"> create new user</a></div>