<?php
/**
 * Title: front-page
 * Slug: /front-page
 * Inserter: no
 */
?>
<!-- wp:spacer {"height":"19px"} -->
<div style="height:19px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:template-part {"slug":"header"} /-->

<!-- wp:group {"metadata":{"name":"Intro","categories":["about"],"patternName":"core/intro-area-with-heading-and-image"},"align":"full","className":"alignfull","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","wideSize":"1080px","contentSize":"1920px"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/videos/3196602-hd_1920_1080_25fps.mp4","dimRatio":50,"backgroundType":"video"} -->
<div class="wp-block-cover"><video class="wp-block-cover__video-background intrinsic-ignore" autoplay muted loop playsinline src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/videos/3196602-hd_1920_1080_25fps.mp4" data-object-fit="cover"></video><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
<p class="has-text-align-center has-white-color has-text-color has-link-color"><strong>Un libro per custodire i ricordi più preziosi di coloro che ami</strong></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"viola"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-viola-background-color has-background wp-element-button" href="http://localhost:8883/pagina-prodotto/">Conserva i ricordi ora</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">Le vostre emozioni...</h2>
<!-- /wp:heading -->

<!-- wp:pattern {"slug":"/testimonianze"} /-->

<!-- wp:post-content /-->

<!-- wp:template-part {"slug":"footer"} /-->