<h6><?=lang('blog_comment_thanks')?></h6>
<?php if ($this->fuel->blog->config('monitor_comments')){ ?>
	<p class="success"><?=lang('blog_comments_monitored')?></p>
<?php } ?>
