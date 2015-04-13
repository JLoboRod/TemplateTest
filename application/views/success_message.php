<?php if(isset($message)):?>
	<div class="success-box alert">
		<span>
    	<i class="fa fa-thumbs-o-up"></i>
			&nbsp; &nbsp;Success – <?=$message?>
		</span>
		<a class="mboxes_close" href="#">
			<i class="fa fa-times"></i>
		</a>
	</div>
<?php endif;?>