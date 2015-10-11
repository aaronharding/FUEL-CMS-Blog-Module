<div class="post-content">
	<?=fuel_edit($post)?>
	
	<?=blog_block('post_unpublished', array('post' => $post))?>
	
	<div class="post-content-content post-content-content_formatted">
		<?=$post->content_formatted?>
	</div>
	
	<div class="post-content-meta">
		<?=$post->author->get_avatar_img_tag(array('class' => 'avatar post-content-meta-avatar'))?>
		<?=lang('blog_post_published')?> 
		<span class="post_content_date"><?=$post->get_date_formatted(lang('blog_post_date_format'))?></span> 
		<?=lang('blog_post_published_by')?> 
		<span class="post_author_name"><?=$post->author_link?></span>
	</div>
	
</div>


<?php if ($post->comments_count > 0) : ?>

	<div class="post-comments">
		<div class="post-comments_list comments_list comments">

			<h4 id="comments"><?=lang($post->comments_count === 1 ? 'blog_comment_heading' : 'blog_comments_heading')?></h4>

			<?=$post->comments_formatted?>
			
			<?php /* Another example without the nesting... ?>
			<?php foreach($post->comments as $comment) : ?>

				<div class="<?=($comment->is_child()) ? 'comment child' : 'comment'?>">

					<div class="comment_content" id="comment<?=$comment->id?>">
						<?=$comment->content_formatted?>
					</div>

					<div class="comment_meta">
						<cite><?=$comment->author_and_link?>, <?=$comment->get_date_formatted('h:iA / M d, Y')?></cite>
					</div>
				</div>
			<?php endforeach; ?>

			<?php */ ?>

		</div>
	</div>
<?php endif; ?>

<?php if ($post->allow_comments) : ?>
	<div class="post-comment_form comment_form" id="comments_form">

	<?php if ($post->is_within_comment_time_limit()) : ?>
		<?php if (empty($thanks)) : ?>
		<h4><?=lang('blog_leave_comment_heading')?></h4>
		<?php else: ?>
		<?=$thanks?>
		<?php endif;
		 ?>
		<?=$comment_form?>
	<?php else: ?>
		<p><?=lang('blog_comments_off')?></p>
	<?php endif; ?>
	</div>

<?php else: ?>
	<p><?=lang('blog_comments_off')?></p>
<?php endif; ?>

	<div class="post-navigation">
		<div class="post-navigation-prev">
			<?php if(!empty($post->prev_post)): ?>
				<p><a href="<?=$post->get_prev_post_url()?>">« <?=$post->prev_post->title?></a></p>	
			<?php else: ?>
				&nbsp;
			<?php endif; ?>	
		</div>
		<div class="post-navigation-next">
			<?php if(!empty($post->next_post)): ?>
				<p><a href="<?=$post->get_next_post_url()?>"><?=$post->next_post->title?> »</a></p>
			<?php else: ?>
				&nbsp;
			<?php endif; ?>
		</div>
	</div>