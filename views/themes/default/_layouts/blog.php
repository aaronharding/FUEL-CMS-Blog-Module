<?php 
fuel_set_var('body_class', 'blog');
$current_post = $this->fuel->blog->current_post();
if (isset($current_post) AND !$is_home)
{
	fuel_set_var('canonical', $post->url);
	if ($post->has_page_title()) fuel_set_var('page_title', $post->page_title);
	if ($post->has_meta_description()) fuel_set_var('meta_description', $post->meta_description);
	if ($post->has_meta_keywords()) fuel_set_var('meta_keywords', $post->meta_keywords);	
}

?>
<?php $this->load->view('_blocks/header')?>

	<?php echo fuel_var('body', ''); ?>
	
<?php $this->load->view('_blocks/footer')?>
