<?php
/**
* POSM Attribut Lagerbestands Manager für Zen Cart 1.5.7k deutsch
* Part of the "Product Options Stock Manager" plugin by Cindy Merkin (www.vinosdefrutastropicales.com)
* Copyright (c) 2015-2026 Vinos de Frutas Tropicales
* Copyright 2003-2026 Zen Cart Development Team
* Zen Cart German Specific (210 code in 157)
* Zen Cart German Version - www.zen-cart-pro.at
* @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
* @version $Id: attributes_controller_posm.php 2026-06-28 12:25:29Z webchills $
*/
if (isset($_GET['action']) && isset($_GET['products_filter'])) {
    if (is_pos_product($_GET['products_filter'])) {
        $caution_message = '';
        switch ($_GET['action']) {
            case 'delete_option_name_values_confirm':
                $caution_message = POSM_JS_CAUTION_OPTION_REMOVAL;
                break;
            case 'delete_product_attribute':
                if (isset($_GET['attribute_id'])) {
                    $check = $db->Execute(
                        "SELECT COUNT(*) AS count
                           FROM " . TABLE_PRODUCTS_OPTIONS_STOCK_ATTRIBUTES . " posa
                                INNER JOIN " . TABLE_PRODUCTS_ATTRIBUTES . " pa
                                    ON pa.products_attributes_id = " . (int)$_GET['attribute_id'] . "
                          WHERE posa.products_id = pa.products_id
                            AND posa.options_id = pa.options_id
                            AND posa.options_values_id = pa.options_values_id"
                    );
                    if ($check->fields['count'] !== null) {
                        $caution_message = sprintf(POSM_JS_CAUTION_ATTRIBUTE_REMOVAL, $check->fields['count']);
                    }
                }
            default:
                break;
        }
        if ($caution_message !== '') {
?>
<script>
window.addEventListener('DOMContentLoaded', function(){
    alert('<?php echo $caution_message; ?>');
});
</script>
<?php
        }
    }
}
