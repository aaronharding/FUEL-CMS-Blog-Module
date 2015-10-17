<div class="section">
	<div class="row">
		<div class="cell cell-full">
			<h2><?=$post->title?></h2>
		</div>
	</div>
</div>

<div class="section main blog-post">
	<div class="row">
		<div class="cell cell-six">

			<?=$this->fuel->blog->block('post')?>

		</div><div class="cell cell-two">
			<?php $this->load->view('_blocks/sidebar', $this->sidebar_model->get_sidebar()); ?>
		</div>
	</div>
</div>