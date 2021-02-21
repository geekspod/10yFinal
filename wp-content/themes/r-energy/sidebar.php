<?php
/**
* The sidebar containing the main widget area
*
* @package WordPress
* @subpackage R-Energy
* @since R-Energy 1.0
*/
?>
<div id="nt-sidebar" class="nt-sidebar col-md-4">
    <div class="nt-sidebar-inner">
        <?php
        if (is_active_sidebar( 'sidebar-1' )) {
            dynamic_sidebar( 'sidebar-1' );
        }
        ?>
    </div>
</div>
