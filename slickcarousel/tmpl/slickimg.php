<?php
/**
 * @package     Joomla.Plugin
 * @subpackage  Fields.Slickcarousel
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JLoader::register('JFolder', JPATH_LIBRARIES . '/joomla/filesystem/folder.php');

$folder = $field->value;
if (!$folder){
	return;
}

$slideshow_items    = $fieldParams->get('slideshow_items');
$customclass        = $fieldParams->get('customclass', 'myslick');
$accessibility      = $fieldParams->get('accessibility');
$adaptiveHeight     = $fieldParams->get('adaptiveheight');
$autoplay           = $fieldParams->get('autoplay');
$autoplaySpeed      = $fieldParams->get('autoplayspeed');
$arrows             = $fieldParams->get('arrows');
$asNavFor           = $fieldParams->get('asnavfor',);
$appendArrows       = $fieldParams->get('appendarrows');
$appendDots         = $fieldParams->get('appenddots');
$prevArrow          = $fieldParams->get('prevarrow');
$nextArrow          = $fieldParams->get('nextarrow');
$centerMode         = $fieldParams->get('centermode');
$centerPadding      = $fieldParams->get('centerpadding');
$cssEase            = $fieldParams->get('cssease');
$customPaging       = $fieldParams->get('custompaging');
$dots               = $fieldParams->get('dots');
$dotsClass          = $fieldParams->get('dotsclass');
$draggable          = $fieldParams->get('draggable');
$fade               = $fieldParams->get('fade');
$focusOnSelect      = $fieldParams->get('focusonselect');
$easing             = $fieldParams->get('easing');
$edgeFriction       = $fieldParams->get('edgefriction');
$infinite           = $fieldParams->get('infinite');
$initialSlide       = $fieldParams->get('initialslide');
$lazyLoad           = $fieldParams->get('lazyload');
$mobileFirst        = $fieldParams->get('mobilefirst');
$pauseOnFocus       = $fieldParams->get('pauseonfocus');
$pauseOnHover       = $fieldParams->get('pauseonhover');
$pauseOnDotsHover   = $fieldParams->get('pauseondotshover');
$respondTo          = $fieldParams->get('respondto');
$responsive         = $fieldParams->get('responsive');
$rows               = $fieldParams->get('rows');
$slide              = $fieldParams->get('slide');
$slidesPerRow       = $fieldParams->get('slidesperrow');
$slidesToScroll     = $fieldParams->get('slidestoscroll');
$speed              = $fieldParams->get('speed');
$swipe              = $fieldParams->get('swipe');
$swipeToSlide       = $fieldParams->get('swipetoslide');
$touchMove          = $fieldParams->get('touchmove',);
$touchThreshold     = $fieldParams->get('touchthreshold');
$useCSS             = $fieldParams->get('usecss');
$useTransform       = $fieldParams->get('usetransform');
$variableWidth      = $fieldParams->get('variablewidth');
$vertical           = $fieldParams->get('vertical');
$verticalSwiping    = $fieldParams->get('verticalswiping');
$rtl                = $fieldParams->get('rtl');
$waitForAnimate     = $fieldParams->get('waitforanimate');
$zIndex             = $fieldParams->get('zindex');

if (!empty($slideshow_items)){

	$folderpath = 'images/' . $folder . '/';

	JHtml::_('jquery.framework');
	JHtml::_('script', 'media/plg_fields_slickimg/js/slick.min.js');
	JHtml::_('stylesheet', 'media/plg_fields_slickimg/css/slick.css');
	JHtml::_('stylesheet', 'media/plg_fields_slickimg/css/slick-theme.css');
?>

	<div class="<?php echo ($customclass) ? $customclass : 'myslick'; ?>">
        <?php foreach ($slideshow_items as $item) : ?>
            <div class="slickitem">
                <img class="slickimg" src="<?php echo empty($item->slideshow_img) ? '' : $item->slideshow_img; ?>" />
            </div>
        <?php endforeach; ?>
	</div>

	<script>
		(function ($) {
			$('.<?php echo ($customclass) ? $customclass : ''; ?>').slickCarousel({
				<?php echo ($items) ? 'items:' . $items . ',' : ''; ?>
				<?php echo ($margin) ? 'margin:' . $margin . ',' : ''; ?>
				<?php echo ($stagepadding) ? 'stagePadding:' . $stagepadding . ',' : ''; ?>
				<?php echo ($center) ? 'center:' . $center . ',' : ''; ?>
				<?php echo ($autowidth) ? 'autoWidth:' . $autowidth . ',' : ''; ?>
				<?php echo ($loop) ? 'loop:' . $loop . ',' : ''; ?>
				<?php echo ($rewind) ? 'rewind:' . $rewind . ',' : ''; ?>
				<?php echo ($lazyload) ? 'lazyLoad:' . $lazyload . ',' : ''; ?>
				<?php echo ($mousedrag) ? 'mouseDrag:' . $mousedrag . ',' : ''; ?>
				<?php echo ($touchdrag) ? 'touchDrag:' . $touchdrag . ',' : ''; ?>
				<?php echo ($pulldrag) ? 'pullDrag:' . $pulldrag . ',' : ''; ?>
				<?php echo ($freedrag) ? 'freeDrag:' . $freedrag . ',' : ''; ?>
				<?php echo ($nav) ? 'nav:' . $nav . ',' : ''; ?>
				<?php echo ($nav && $navtext) ? 'navText:[' . $navtext . '],' : ''; ?>
				<?php echo ($dots) ? 'dots:' . $dots . ',' : ''; ?>
				<?php echo ($autoplay) ? 'autoplay:' . $autoplay . ',' : ''; ?>
				<?php echo ($autoplay && $hoverpause) ? 'autoplayHoverPause:' . $hoverpause . ',' : ''; ?>
				<?php echo ($autoplay && $autoplayspeed) ? 'autoplaySpeed:' . $autoplayspeed . ',' : ''; ?>
				<?php echo ($animatein) ? "animateIn:'" . $animatein . "'," : ""; ?>
				<?php echo ($animateout) ? "animateOut:'" . $animateout . "'," : ""; ?>
				<?php echo ($responsive) ? $responsiveoptions : ''; ?>
			});
		})(jQuery);
	</script>

	<?php
}
