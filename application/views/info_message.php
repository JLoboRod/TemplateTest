<?php if(isset($message)):?>
	<div class="info-box alert">
		<span>
    	<i class="fa fa-info"></i>
			&nbsp; &nbsp;Info – <?=$message?>
		</span>
		<a class="mboxes_close" href="#">
			<i class="fa fa-times"></i>
		</a>
	</div>
<?php endif;?>