<div class="section">
	<div class="row">
		<div class="cell cell-full">
			<?php if ($searched): ?>
				<h2><?=lang('blog_search', count($posts), $q)?></h2>
			<?php else: ?>
				<h2>Search</h2>
			<?php endif; ?>
		</div>
	</div>
</div>

<div class="section main blog-search">
	<div class="row">
		<div class="cell cell-six">

			<?php if ($searched) : ?>
	
				<?php if (!empty($posts)) : ?>

					<?php foreach($posts as $post) : ?>
						<div class="blog-search-search_result">
							<h4><a href="<?=$post->url?>"><?=highlight_phrase($post->title, $q, '<span class="search_highlight">', '</span>')?></a></h4>
							<p><?=highlight_phrase(($post->get_excerpt_formatted(300, '', TRUE)), $q, '<span class="search_highlight">', '</span>')?></p>
							<div class="blog-search-result_result-meta">
								<p><?=lang('blog_post_published_by')?> <?=$post->author_name?></p>
								<p>
									<?=$post->get_date_formatted(lang('blog_post_date_format'))?>
									<?php if ($post->comments_count > 0) : ?>
										— <a href="<?=$post->url?>#comments"><?=$post->comments_count?> <?php echo $post->comments_count !== 1 ? lang('blog_post_text_comments') : lang('blog_post_text_comment'); ?></a>
									<?php endif; ?>
								</p>
							</div>
						</div>
					<?php endforeach; ?>

				<?php else : ?>

					<p>There were no search results returned.</p>
					<p>Input your search below:</p>
					<?=$search_input?>

				<?php endif; ?>
				
			<?php else : ?>
				
				<p>Input your search below:</p>

				<?=$search_input?>
				
			<?php endif; ?>

		</div><div class="cell cell-two">
			<?php $this->load->view('_blocks/sidebar', $this->sidebar_model->get_sidebar()); ?>
		</div>
	</div>
</div>

