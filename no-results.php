<?php

	/**
	 * NO-RESULTS TEMPLATE
	 */

?>

	<section class="post-list">

		<?php if(is_search()){ ?>
			<nav class="pagination pagination-noresults">
				<span class="pagination-button"><i class="fa fa-close"></i><?php esc_html_e('No Result', 'isentei'); ?>: <?php esc_html_e('Please try another search query.', 'isentei'); ?></span>
			</nav>
		<?php }else{ ?>
			<nav class="pagination pagination-noresults">
				<span class="pagination-button"><i class="fa fa-close"></i><?php esc_html_e('No Result', 'isentei'); ?>: <?php esc_html_e('Please try another query.', 'isentei'); ?></span>
			</nav>
		<?php } ?>

	</section>
