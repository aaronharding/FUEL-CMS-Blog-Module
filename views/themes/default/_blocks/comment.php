<div class="<?=($comment->is_child()) ? 'comments_list-comment comments_list-comment_child' : 'comments_list-comment'?> comment" id="comment-<?=$comment->id?>">

	<div class="comments_list-comment-content">
		<?=$comment->content_formatted?>
	</div>

	<div class="comments_list-comment-meta">
		<?php if ($comment->is_by_post_author()) :?>
		<?=$comment->post->author->get_avatar_img_tag(array('class' => 'avatar comments_list-comment-avatar'))?>
		<?php endif; ?>
		<p><?=$comment->author_and_link?>, <?=$comment->get_date_formatted('h:iA / M d, Y')?></p>
		<?php if (!$comment->depth <= 3 AND $post->allow_comments AND $post->is_within_comment_time_limit()) : ?>
			<div class="comments_list-comment-reply_btn reply_btn"><a href="<?=$this->fuel->blog->url('comment_reply/'.$comment->id)?>" class="comments_list-comment-comment_reply comment_reply">Reply</a></div>
		<?php endif; ?>
	</div>

	<?php /* ?> For displaying the reply form <?php */ ?>
	<div class="comments_list-comment-comment_form comments_list-comment-comment_reply_form comment_form comment_reply_form" id="comment_form<?=$comment->id?>"></div>

</div>