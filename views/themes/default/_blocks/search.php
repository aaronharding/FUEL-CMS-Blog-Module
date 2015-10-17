<!-- <div class="blog_search">
	<form method="get"">
		<input type="text" name="q" value="" id="q">
		<input type="button" value="Search" class="search_btn">
		
		<?php
		if ($this->config->item('csrf_protection')) :
		    $this->security->csrf_set_cookie();
		?>
		    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>"/>
		<?php endif;?>
	</form>
</div>
 -->
<form action="<?=$this->fuel->blog->url('search')?>" method="get">
	
	<input type="text" value="" name="q" id="q" class="q" placeholder="Search De Visionarissen">
	<input type="submit" class="search-submit" value="Search">

	<?php
	if ($this->config->item('csrf_protection')) :
	    $this->security->csrf_set_cookie();
	?>
	    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>"/>
	<?php endif;?>

</form>