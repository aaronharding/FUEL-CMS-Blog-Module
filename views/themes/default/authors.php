<div class="section">
	<div class="row">
		<div class="cell cell-full">
			<h2>Authors</h2>
		</div>
	</div>
</div>

<div class="section main blog-authors">
	<div class="row">
		<div class="cell cell-six">

			<?php foreach($authors as $key => $author) : ?>
				<div class="blog-authors-author blog-authors-author-<?=($key === 0 ? "odd" : "even")?>">
					<?php if (!empty($author->avatar_image)) : ?>
						<?=anchor($author->url, $author->get_avatar_img_tag(array('class' =>"blog-authors-author-image", 'alt' => $author->name)))?>
					<?php endif; ?>
					<div class="blog-authors-author-detail">
						<p><?=anchor($author->url, $author->name)?></p>
						<p><?=$author->about_first_sentence?></p>
					</div>
				</div>
			<?php endforeach; ?>

		</div><div class="cell cell-two">
			<?php $this->load->view('_blocks/sidebar', $this->sidebar_model->get_sidebar()); ?>
		</div>
	</div>
</div>