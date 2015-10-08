<?=fuel_edit($author->id, 'Edit Author: '.$author->name, 'blog/users')?>

<div class="section">
	<div class="row">
		<div class="cell cell-full">
			<h2><?=$author->name?></h2>
		</div>
	</div>
</div>

<div class="section main blog-author-detail">
	<div class="row">
		<?php if (!empty($author->avatar_image)) : ?>
			<div class="cell cell-two">
				<?=$author->get_avatar_img_tag(array('class' => 'img_right', 'alt' => $author->name))?>
			</div>
		<?php endif; ?>
		<div class="cell <?php if (!empty($author->avatar_image)) : ?>cell-six<?php else: ?>cell-full<?php endif; ?>">
			<div class="blog-author-detail-about">
				<?=$author->about_formatted?>
			</div>
			<div class="blog-author-detail-meta">
				<?php if (!empty($author->email)) : ?>
					<p><?=safe_mailto($author->email)?></p>
				<?php endif; ?>
				
				<?php if (!empty($author->website)) : ?>
					<p><?=$author->website_link?></p>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>

<div class="section main blog-author">
	<div class="row">
		<div class="cell cell-six">

			<?php $posts = $author->posts; ?>
				<?php if (!empty($posts)) : ?>
				<h4>Posts By <?=$author->name?></h4>
				<ul>
					<?php foreach($posts as $post) : ?>
					<li><a href="<?=$post->url ?>"><?=$post->title?></a></li>
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>


		</div><div class="cell cell-two">
			<?php $this->load->view('_blocks/sidebar', $this->sidebar_model->get_sidebar()); ?>
		</div>
	</div>
</div>