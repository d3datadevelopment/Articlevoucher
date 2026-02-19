<?php

/**
 * Copyright (c) D3 Data Development (Inh. Thomas Dartsch)
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 *
 * https://www.d3data.de
 *
 * @copyright (C) D3 Data Development (Inh. Thomas Dartsch)
 * @author    D3 Data Development - Daniel Seifert <info@shopmodule.com>
 * @link      https://www.oxidmodule.com
 */

$sArticleVoucherLogo = '<img src="https://logos.oxidmodule.com/d3logo.svg" alt="(D3)" style="height:1em;width:1em">';

// -------------------------------
// RESOURCE IDENTIFIER = STRING
// -------------------------------
return [
    'charset'                               => 'UTF-8',
    'D3ARTVOUCHER_MODUL_NOT_ACTIVE'         => 'Error (' . $sArticleVoucherLogo
        . ' Articlvoucher): License key is missing or module not active',
    'D3_VOUCHERSERIE_MAIN_DISCOUNT_ABS'     => 'abs',
    'D3_VOUCHERSERIE_MAIN_DISCOUNT_PERCENT' => '%',
    'D3_VOUCHERSERIE_MAIN_DISCOUNT_ITEM'    => 'itm',
    'D3_HELP_VOUCHERSERIE_MAIN_DISCOUNT'    => 'In <span class="navipath_or_inputname">Discount</span>, '
        . 'you specify the magnitude of the discount. You can use the selection list '
        . 'after the entry field to specify whether the discount is to be applied as an '
        . 'absolute discount or as a percentage discount:'
        . '<ul>'
        . '<li><span class="userinput_or_code">abs</span>: '
        . 'The discount is an absolute discount, e.g. EUR 5.</li>'
        . '<li><span class="userinput_or_code">%</span>: '
        . 'The discount is a percentage discount, e.g. 10 percent of the purchase price.</li>'
        . '<li><span class="userinput_or_code">itm</span>: '
        . $sArticleVoucherLogo . ' Articlevoucher: The discount is an article.</li>'
        . '</ul>',

    'SHOP_MODULE_GROUP_d3articlevoucher_buyablestate'   => 'Order status of the voucher articles',
    'SHOP_MODULE_blD3AVArticlesArentBuyable'            => 'Voucher items are <b>not</b> directly buyable',
    'HELP_SHOP_MODULE_blD3AVArticlesArentBuyable'       => 'The item assigned to article discounts can also be purchased '.
        'regularly in the standard shop. If this item is explicitly created for the vouchers, tick this box. The item '.
        'can then still be viewed, but can no longer be added to the shopping basket.',
];
