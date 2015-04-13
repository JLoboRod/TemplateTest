<?php if(isset($message)):?>
	<div class="error-box alert">
		<span>
    	<i class="fa fa-exclamation-triangle"></i>
			&nbsp; &nbsp;Error – <?=$message?>
		</span>
		<a class="mboxes_close" href="#">
			<i class="fa fa-times"></i>
		</a>
	</div>
<?php endif;?>