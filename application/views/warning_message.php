<?php if(isset($message)):?>
	<div class="warning-box alert">
		<span>
    	<i class="fa fa-exclamation"></i>
			&nbsp; &nbsp;Warning – <?=$message?>
		</span>
		<a class="mboxes_close" href="#">
			<i class="fa fa-times"></i>
		</a>
	</div>
<?php endif;?>