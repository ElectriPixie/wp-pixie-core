<?php
/*
$fields = apply_filters('comment_form_field_comment', array(
           'author' => '<p class="comment-form-author">'.'<label for="author">'.__('Your Name').'</label>'.'<input id="author" placeholder="Your Name" name="author" type="text" value="'.esc_attr($commenter['comment_author']).'"/>'.'</p>',
          'email' => '<p class="comment-form-email">'.'<label for="email">'.__('Your Email').'</label>'.'<input id="email" placeholder="Your Email" name="email" type="text" value="'.esc_attr($commenter['comment_author_email']).'"/>'.'</p>'
            ));
$comment_args = array(
               'fields' => $fields,
               'comment_field' => '<p class="comment-form-comment">'.'<label for="comment">'.__('Let us know what you have to say:').'</label>'.'<textarea id="comment" name="comment" placeholder="tell me your thoughts"></textarea>'.'</p>'
               );
*/
$comments = get_comments(array('post_id'=>$post->ID));
echo "<div class='pc-post-comments'>";
foreach($comments as $comment)
{
  echo '<p>'.$comment->comment_author .'<br />'.$comment->comment_content.'<br /></p>';
}
echo "</div>";
if ('open' == $post->comment_status)
{
  echo "<div class='pc-post-add-comment'>";
  //comment_form($comment_args);
  comment_form();
  echo "</div>";
}
?>
