<?php

class td_block_homepage_full_1 extends td_block {


    function render($atts, $content = null)
    {
        parent::render($atts); // sets the live atts, $this->atts, $this->block_uid, $this->td_query (it runs the query)
	    $buffy = $this->get_block_js(); //output buffer

        $buffy .= '<div class="' . $this->get_block_classes() . '" ' . $this->get_block_html_atts() . '>';
        $buffy .= '<div id=' . $this->block_uid . ' class="td_block_inner">';
        $buffy .= $this->inner($this->td_query->posts);//inner content of the block
        $buffy .= '</div>';
        $buffy .= '</div> <!-- ./block -->';
        return $buffy;
    }

    function inner($posts, $td_column_number = '') {
        ob_start();
        if (!empty($posts[0])) {
            $post = $posts[0]; //we get only one post
            $td_post_featured_image = td_util::get_featured_image_src($post->ID, 'full');
            $td_mod_single = new td_module_single($post);

	        $el_class = $this->get_att('el_class');

            //make the js template
            ?>
            <script type="text/template" id="<?php echo $this->block_uid . '_tmpl' ?>">
                <div id="post-<?php echo $td_mod_single->post->ID; ?>" class="td-post-template-6 <?php echo $el_class ?>">
                    <div class="template6-header">
                        <div class="td-post-header td-container td-parallax-header" id="td_parallax_header_6">
                            <header class="td-pb-padding-side">
                                <?php echo $td_mod_single->get_category(); ?>
                                <?php echo $td_mod_single->get_title(); ?>
                                <?php if (!empty($td_mod_single->td_post_theme_settings['td_subtitle'])) { ?>
                                    <p class="td-post-sub-title"><?php echo $td_mod_single->td_post_theme_settings['td_subtitle']; ?></p>
                                <?php } ?>
                                <div class="meta-info">
                                    <?php echo $td_mod_single->get_author(); ?>
                                    <?php echo $td_mod_single->get_date(false); ?>
                                    <?php echo $td_mod_single->get_views(); ?>
                                    <?php echo $td_mod_single->get_comments(); ?>
                                </div>
                                <div class="td-read-down"><a href="#"><i class="td-icon-read-down"></i></a></div>
                            </header>
                        </div>
                    </div>
                </div>
            </script>
            <?php

	        $js = $this->getTmplJsScript( $post );
	        td_js_buffer::add_to_footer($js);
        }
        return ob_get_clean();

    }

	private function getTmplJsScript( $post ) {
		$td_post_featured_image = td_util::get_featured_image_src($post->ID, 'full');

		ob_start();
		?>
		<script>

			(function() {

		        var tdHomepageFullItem = new tdHomepageFull.item();

				tdHomepageFullItem.theme_name = '<?php echo TD_THEME_NAME ?>';

				tdHomepageFullItem.postId = '<?php echo $post->ID ?>';
				tdHomepageFullItem.blockUid = '<?php echo $this->block_uid ?>';
				tdHomepageFullItem.postFeaturedImage = '<?php echo $td_post_featured_image ?>';

				tdHomepageFull.addItem( tdHomepageFullItem );
	        })();

		</script>
		<?php
		$buffer = ob_get_clean();
		$js = "\n". td_util::remove_script_tag($buffer);

		return $js;
	}



	function js_tdc_callback_ajax() {
		$buffy = '';

		// add a new composer block - that one has the delete callback
		$buffy .= $this->js_tdc_get_composer_block();

		$posts = $this->td_query->posts;

		if (!empty($posts[0])) {

			return $buffy . $this->getTmplJsScript( $posts[0] );
		}
		return $buffy;
	}
}