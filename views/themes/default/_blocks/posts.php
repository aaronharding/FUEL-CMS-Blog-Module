<?php
/**
 * 	_blocks/post.php
 */
?>
<div class="posts">

	<?=fuel_edit('create', 'Create Post', 'blog/posts')?>
	<?php if (!empty($posts)) : ?>
		<ul>
			<?php foreach($posts as $post) : ?>
				<li class="post">

					<?=fuel_edit($post)?>

					<?php
						if(function_exists('blog_block')) {
							blog_block('post_unpublished', array('post' => $post));
						} 
					?>
				
					<h4><a href="<?=$post->url?>"><?=$post->title?></a></h4> 

					<!-- <div class="post_date">
						Published <?=$post->get_date_formatted(lang('blog_post_date_format'))?>
						by <strong><span class="post_author_name"><?=$post->author_name?></span></strong>
					</div> -->

					<p class="post-content">
						<?=$post->excerpt_formatted?> 
					</p>

					<div class="post-sub">

						<?php if(isset($hide_author) === false || !$hide_author): ?>
							<p><?=lang('blog_post_published_by')?> <?=$post->author_link?></p>
						<?php endif; ?>
						<p>
							<?=$post->get_date_formatted(lang('blog_post_date_format'))?>
							<?php if ($post->comments_count > 0) : ?>
								— <a href="<?=$post->url?>#comments"><?=$post->comments_count?> <?php echo $post->comments_count !== 1 ? lang('blog_post_text_comments') : lang('blog_post_text_comment'); ?></a>
							<?php endif; ?>
						</p>
					</div>

					<!-- <div class="post_meta">
						<?=$post->tags_linked ?> 
					</div> -->
				</li>
			<?php endforeach; ?>

		</ul>
		
		<?php if(!isset($is_preview) && !$is_preview): ?>
			<div class="posts-archive">
				<div class="posts-pagination">
					<?php if (!empty($pagination)) : ?><?=$pagination?>  &nbsp;<?php endif; ?>
				</div>
				<p>Looking for older posts? <a href="<?=blog_url('archives')?>">View our Archives</a></p>
			</div>
		<?php endif; ?>
		
	<?php else: ?>
		<div class="posts-no_posts">
			<p>There are no posts available.</p>
		</div>
	<?php endif; ?>
</div>