<?php
/**
 * Session's Instructor profile
 *
 *
 * @see        https://docs.woocommerce.com/document/template-structure/
 * @author     Ismara
 * @package
 * @version    1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>

<div class="row" style="border: 1px solid grey; padding: 1em; margin-bottom: 5em;">
	<?php
	global $instructor;
	$instructor = get_field('session_instructor', get_the_ID());
  ?>

	<div class="col-12">
		<h1 class="product_title entry-title"> Instructor </h1>'
  </div>

	<div class="col-12 col-md-3">
		<div class="tripMap ml-5 ml-md-0">
			<?php echo  $instructor['user_avatar']; ?>
  	</div>
	</div>

	<div class="col-12 col-md-9">
		<h2> <?php echo  $instructor['display_name']; ?> </h2>'
		<?php
		echo $instructor['user_email'];
		echo '<br>';
		echo '<br>';
		echo $instructor['user_description'];
		echo '<br>';
		echo '<br>';
		?>
  </div>
</div>