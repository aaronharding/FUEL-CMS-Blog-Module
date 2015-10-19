<div class="section">
	<div class="row">
		<div class="cell cell-full">
			<h2><?=lang('blog_archives')?></h2>
		</div>
	</div>
</div>

<div class="section main blog-archives">
	<div class="row">
		<div class="cell cell-six">

			<?php if (!empty($archives_by_month)) : ?>
				<?php foreach($archives_by_month as $month => $archives) : 
					$month_str = date('F Y', strtotime(str_replace('/', '-', $month).'-01'));
				?>
					<div class="blog-archives-month">
						<h4><?=$month_str?></h4>
						<ul>
							<?php foreach($archives as $post) : ?>
							<li><?=fuel_edit($post->id, 'Edit Post: '.$post->title, 'blog/posts')?>
								<a href="<?=$post->url?>"><?=$post->title?></a> 
								door <?=$post->author_name?>
							</li>
							<?php endforeach; ?>
						</ul>
					</div>
				<?php endforeach; ?>
			<?php else: ?>
				<p>Er bevindt zich op dit moment niks in het archief.</p>
			<?php endif; ?>

		</div><div class="cell cell-two">
			<?php $this->load->view('_blocks/sidebar', $this->sidebar_model->get_sidebar()); ?>
		</div>
	</div>
</div>
