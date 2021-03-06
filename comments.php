<?php
/**
 * Created by Teapot
 * User: Martin Durak
 * Date: 18.07.2017
 * Time: 16:20
 */

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */

//Get only the approved comments
function add_comment() {

	$commenter = wp_get_current_commenter();
	$req = get_option( 'require_name_email' );
	$aria_req = ( $req ? " aria-required='true'" : '' );
	$fields =  array(
		'author' => '<p class="col-md-4 col-sm-4 col-xs-12 noleftpadding-i padding-left-sm-10 padding-right-sm-10 comment-form-author">' .
		            '<input id="author"  class="col-md-12 col-sm-12 col-xs-12 right-margin-sm-10" name="author" type="text"  placeholder="Jméno"' . esc_attr( $commenter['comment_author'] )  . $aria_req . ' required="required" /></p>',

        'email'  => '<p class="col-md-4 col-sm-4 col-xs-12 noleftpadding-i padding-left-sm-10 padding-right-sm-10 comment-form-email">
		            <input id="email" class="col-md-12 col-sm-12 col-xs-12 right-margin-sm-10 comment-input-email" name="email" type="text"  placeholder="email" ' . esc_attr(  $commenter['comment_author_email'] )  . $aria_req .' required="required" /></p>',

		'web_field'    => '<p class="col-md-4 col-sm-4 col-xs-12 noleftpadding-i padding-left-sm-10 padding-right-sm-10 no-paddin-right-lg comment-form-web">' .
			                  '<input id="url" class="col-md-12 col-sm-12 col-xs-12 right-margin-sm-10 comment-form-web-input" name="url" type="text" placeholder="Web"  /></p>',

	);


	$comments_args = array(
		'fields' =>  $fields
	);

	comment_form($comments_args);
}

?>
	<?php // You can start editing here -- including this comment! ?>
	<?php if ( have_comments() ) : ?>
        <div class="comments-title">
            <p>Komentáře</p>
        </div>

        <ol class="commentlist">
			<?php wp_list_comments( array( 'callback' => 'fws_comment', 'style' => 'ol' ) ); ?>
        </ol><!-- .commentlist -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
            <nav id="comment-nav-below" class="navigation" role="navigation">
                <h1 class="assistive-text section-heading"><?php _e( 'Comment navigation', 'fws' ); ?></h1>
                <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'fws' ) ); ?></div>
                <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'fws' ) ); ?></div>
            </nav>
		<?php endif; // check for comment navigation ?>

		<?php
		/* If there are no comments and comments are closed, let's leave a note.
		 * But we only want the note on posts and pages that had comments in the first place.
		 */
		if ( ! comments_open() && get_comments_number() ) : ?>
            <p class="nocomments"><?php _e( 'Comments are closed.' , 'fws' ); ?></p>
		<?php endif; ?>

	<?php endif; // have_comments() ?>

	<?php add_comment(); ?>




