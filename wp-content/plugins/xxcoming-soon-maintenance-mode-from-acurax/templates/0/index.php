<?php
$acx_csma_custom_html_val = get_option('acx_csma_custom_html_val');
$acx_csma_custom_html_val = apply_filters( 'the_content', $acx_csma_custom_html_val);
echo $acx_csma_custom_html_val;
?>