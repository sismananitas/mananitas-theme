<?php 
/**
 * page.php
 * Default template of pages.
 */

get_header();

$page_id    = ( get_post_meta( $post->ID, 'pinar_page_id' ) != null ? get_post_meta( $post->ID, 'pinar_page_id', true ) : '' );
$page_class = ( get_post_meta( $post->ID, 'pinar_page_class' ) != null ? get_post_meta( $post->ID, 'pinar_page_class', true ) : '' );
?>
<section
	<?= (isset($page_id) && $page_id !='' ? ('id="'.esc_attr( $page_id ).'"') : '') ?>
	class="container main-page-container<?= ($page_class !== '' ? esc_attr( $page_class ) : '') ?>"
>
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : ?>
			<?php
				$post_id = get_the_id();
				the_post();
				the_content();
			?>
			<div class="comments-container">
				<h3>
					<?php comments_number( '', ravis_fn_title_effect(esc_html__( '1 Comment' )), ravis_fn_title_effect(esc_html__( '% Comments' )) ) ?>
				</h3>
				<?php
					comments_template();
					$comment_form_fields = array(
						'author' =>'<div></div>',
						'email' =>'',
						'url' =>'',
					);
					
					$comment_form_arg = array(
						'titlm_reply'          => ravis_fn_title_effect(esc_html__('Leave a Message', 'pinar')),
						'title_reply_to'       => ravis_fn_title_effect(esc_html__('Leave a Reply to %s', 'pinar')),
						'cancel_reply_link'    => esc_html__('Cancel', 'pinar'),
						'logged_in_as'         => '', 
						'comment_field'        => '
							<div class="message-field row">
								<textarea name="comment" id="message-field" placeholder="Mensaje *" required="" data-parsley-id="2996"></textarea><ul class="parsley-errors-list" id="parsley-id-2996"></ul><!-- Main Message Field -->
							</div>',
						'must_log_in'          => '<p class="must-log-in">' .  sprintf( balancetags( esc_html__( 'You must be <a href="%s">logged in</a> to share your review.' , 'pinar' ) ), wp_login_url( apply_filters( 'the_permalink', get_permalink( ) ) ) ) . '</p>',                                
						'fields'               => apply_filters( 'comment_form_default_fields', $comment_form_fields ),
					);
				?>
				<?php comment_form($comment_form_arg); ?>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
</section>
<?php get_footer(); ?>
