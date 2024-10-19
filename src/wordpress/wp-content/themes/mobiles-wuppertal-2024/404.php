<?php
/**
 * Error 404 template
 *
 * @package WordPress
 * @subpackage wp-blank
 * @since wp-blank 1.0
 * @date 2015-05-10
 * @edit 2019-10-24 Arne Kamola <arne@arne.xyz>
 */

get_header(); ?>

	<main id="content">

		<article class="page error404">

			<header>
				<h1><?php _e('Seite nicht gefunden', 'wpblank'); ?></h1>
			</header>

			<p><code class="error"><?php _e('Error Code 404', 'wpblank'); ?></code></p>

			<p><?php _e('Der gesuchte Inhalte konnte leider nicht gefunden werden.', 'wpblank'); ?></p>

		</article>

	</main>

<?php get_footer(); ?>