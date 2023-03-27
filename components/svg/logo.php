<?php

/**
 * Display Logo
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Incredible Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.incrediblemarketing.com/
 * @since      1.0.0
 */

$image = get_field('site_logo', 'options');
?>

<?php if ($image) : ?>
	<?php display_image($image, 'full'); ?>
<?php endif; ?>
