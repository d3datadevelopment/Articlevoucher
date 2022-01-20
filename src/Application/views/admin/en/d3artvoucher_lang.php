<?php
/**
 * This Software is the property of Data Development and is protected
 * by copyright law - it is NOT Freeware.
 * Any unauthorized use of this software without a valid license
 * is a violation of the license agreement and will be prosecuted by
 * civil and criminal law.
 * https://www.d3data.de
 *
 * @copyright (C) D3 Data Development (Inh. Thomas Dartsch)
 * @link      https://www.oxidmodule.com
 */

use D3\ModCfg\Application\Model\d3utils;

$sLangName           = "English";
$sArticleVoucherLogo = '<img src="https://logos.oxidmodule.com/d3logo.svg" alt="(D3)" style="height:1em;width:1em">';

// -------------------------------
// RESOURCE IDENTIFIER = STRING
// -------------------------------
$aLang = [
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
];

/*
[{oxmultilang ident='ACTIONS_MAIN_YOUWANTTODELETE'}]
*/
