<?php
/**
 *	manual.php
 * 	Manual template
 *  Template Name: Manual Covid
 */
global $pinar_opt;
$price_unit = !empty($pinar_opt['pinar-booking-currency']) ? ravis_currency_converter($pinar_opt['pinar-booking-currency']) : '&#36;';

get_header();

//header("Content-type: application/pdf");
//header("Content-Disposition: inline; filename=documento.pdf");
//readfile("protocolo-covid.pdf");
?>
<div id="welcome" class="" style="margin-top: 15px; margin-bottom: 10px; margin-left: 14px; margin-right: 14px; min-height: 200px">
    <?php
        if (have_posts()) {
            global $pinar_opt;
            while (have_posts()) {
                the_post();
                the_content();
            }
        }
    ?>
</div>
<?php
get_footer();
