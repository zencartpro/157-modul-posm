<?php
/**
* POSM Attribut Lagerbestands Manager für Zen Cart 1.5.7k deutsch
* Part of the "Product Options Stock Manager" plugin by Cindy Merkin (www.vinosdefrutastropicales.com)
* Copyright (c) 2015-2026 Vinos de Frutas Tropicales
* Copyright 2003-2026 Zen Cart Development Team
* Zen Cart German Specific (210 code in 157)
* Zen Cart German Version - www.zen-cart-pro.at
* @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
* @version $Id: product_posm.php 2026-06-28 12:25:29Z webchills $
*/
if (($_GET['action'] ?? '') !== 'new_product' || !(function_exists('is_pos_product') && isset($_GET['pID']) && is_pos_product($_GET['pID']))) {
    return;
}

// -----
// Transform the product's quantity elements to a link to the Products' Options' Stock Manager page.
//
$posm_quantity_html =
    '<div class="form-group">' .
        zen_draw_label(POSM_TEXT_PRODUCTS_QTY_CLICK, 'products_price', 'class="col-sm-3 control-label"') .
        '<div class="col-sm-9 col-md-6">' .
            '<a href="' . zen_href_link(FILENAME_PRODUCTS_OPTIONS_STOCK, 'pID=' . $_GET['pID']) . '&category_id=' . $current_category_id . '" class="btn btn-primary" role="button">' .
                POSM_BUTTON_MANAGE_STOCK .
            '</a>' .
            zen_draw_hidden_field('products_quantity', zen_get_products_stock($_GET['pID'])) .
        '</div>' .
    '</div>';
?>
<script>
$(function(){
    $('input[name="products_quantity"]').closest('div.form-group').replaceWith('<?= $posm_quantity_html ?>');
});
</script>
