<?php
/**
 * Sidebar template part.
 *
 * @package AMP
 */

 ?>

<amp-sidebar id="sidebar" layout="nodisplay" side="left" role="navigation">
  <div class="amp-sidebar-header">
    <a href="#" on="tap:sidebar.toggle" aria-label="close sidebar" tabindex="0">✕</a>
  </div>
  <?php wp_nav_menu(array('theme_location' => "custom-menu-name", 'walker' => new ampsidebar_dropdown_walker())); ?>
</amp-sidebar>
