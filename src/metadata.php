<?php
/**
 * This Software is the property of Data Development and is protected
 * by copyright law - it is NOT Freeware.
 *
 * Any unauthorized use of this software without a valid license
 * is a violation of the license agreement and will be prosecuted by
 * civil and criminal law.
 *
 * http://www.shopmodule.com
 *
 * @copyright (C) D3 Data Development (Inh. Thomas Dartsch)
 * @link      http://www.oxidmodule.com
 */

use D3\ModCfg\Application\Model\d3utils;
use D3\ModCfg\Application\Model\Install\d3install;
use OxidEsales\Eshop\Application as OxidCore;

/**
 * Metadata version
 */
$sMetadataVersion = '2.0';

/**
 * Module information
 */
$aModule = array(
'id'          => 'd3articlevoucher',
'title'       => 
    '<img src="https://logos.oxidmodule.com/d3logo.svg" alt="(D3)" style="height:1em;width:1em"> '.
    'Artikelgutscheine',
    'description' =>   array(
        'de' =>  'Erm&ouml;glicht Artikel als Gutscheinwert zu verwenden',
        'en' =>  '',
    ),
    'thumbnail'   => 'picture.png',
    'version'     => '4.0.2.2',
    'author'      => 'D&sup3; Data Development (Inh.: Thomas Dartsch)',
    'email'       => 'support@shopmodule.com',
    'url'         => 'http://www.oxidmodule.com/',
    'extend'       => array(
        OxidCore\Controller\Admin\VoucherSerieMain::class => D3\Articlevoucher\Modules\Application\Controller\Admin\d3_voucherserie_main_addarticle::class,
        OxidCore\Controller\BasketController::class       => D3\Articlevoucher\Modules\Application\Controller\d3_basket_updatevoucherinfo::class,

        OxidCore\Model\DiscountList::class                => D3\Articlevoucher\Modules\Application\Model\d3_oxdiscountlist_articlevoucher::class,
        OxidCore\Model\Discount::class                    => D3\Articlevoucher\Modules\Application\Model\d3_oxdiscount_articlevoucher::class,
        OxidCore\Model\Basket::class                      => D3\Articlevoucher\Modules\Application\Model\d3_oxbasket_articlevoucher::class,
        OxidCore\Model\BasketItem::class                  => D3\Articlevoucher\Modules\Application\Model\d3_oxbasketitem_articlevoucher::class,
        OxidCore\Model\Article::class                     => D3\Articlevoucher\Modules\Application\Model\d3_oxarticle_articlevoucher::class,
        OxidCore\Model\Voucher::class                     => D3\Articlevoucher\Modules\Application\Model\d3_oxvoucher_articlevoucher::class

    ),
    'controllers' => array(
        'd3articlevoucher'          => D3\Articlevoucher\Application\Model\d3articlevoucher::class,
    ),
    'events'      => array(
      'onActivate' => d3install::class . '::checkUpdateStart',
    ),
    'templates'   => array(
        'headitem_d3voucher_css.tpl' => 'd3/articlevoucher/Application/views/admin/blocks/headitem_d3voucher_css.tpl',
        'headitem_d3voucher_js.tpl'  => 'd3/articlevoucher/Application/views/admin/blocks/headitem_d3voucher_js.tpl',
        'd3_voucherserie_main.tpl'   => 'd3/articlevoucher/Application/views/admin/blocks/d3_voucherserie_main.tpl',

        //Azure
        'checkout_basket_main_adderrormessages_azure.tpl'                => 'd3/articlevoucher/Application/views/azure/tpl/checkout/checkout_basket_main_adderrormessages.tpl',
        'checkout_basketcontents_basketitem_quantity_list_azure.tpl'     => 'd3/articlevoucher/Application/views/azure/tpl/checkout/checkout_basketcontents_basketitem_quantity_list.tpl',
        'checkout_basketcontents_basketitem_quantity_table_azure.tpl'    => 'd3/articlevoucher/Application/views/azure/tpl/checkout/checkout_basketcontents_basketitem_quantity_table.tpl',
        'checkout_basketcontents_voucherdiscount_azure.tpl'              => 'd3/articlevoucher/Application/views/azure/tpl/checkout/checkout_basketcontents_voucherdiscount.tpl',

        //Flow
        'checkout_basket_main_adderrormessages_flow.tpl'                => 'd3/articlevoucher/Application/views/flow/tpl/checkout/checkout_basket_main_adderrormessages.tpl',
        'checkout_basketcontents_basketitem_quantity_list_flow.tpl'     => 'd3/articlevoucher/Application/views/flow/tpl/checkout/checkout_basketcontents_basketitem_quantity_list.tpl',
        'checkout_basketcontents_basketitem_quantity_table_flow.tpl'    => 'd3/articlevoucher/Application/views/flow/tpl/checkout/checkout_basketcontents_basketitem_quantity_table.tpl',
        'checkout_basketcontents_voucherdiscount_flow.tpl'              => 'd3/articlevoucher/Application/views/flow/tpl/checkout/checkout_basketcontents_voucherdiscount.tpl',

        //Wave
        'checkout_basket_main_adderrormessages_wave.tpl'                => 'd3/articlevoucher/Application/views/wave/tpl/checkout/checkout_basket_main_adderrormessages.tpl',
        'checkout_basketcontents_basketitem_quantity_list_wave.tpl'     => 'd3/articlevoucher/Application/views/wave/tpl/checkout/checkout_basketcontents_basketitem_quantity_list.tpl',
        'checkout_basketcontents_basketitem_quantity_table_wave.tpl'    => 'd3/articlevoucher/Application/views/wave/tpl/checkout/checkout_basketcontents_basketitem_quantity_table.tpl',
        'checkout_basketcontents_voucherdiscount_wave.tpl'              => 'd3/articlevoucher/Application/views/wave/tpl/checkout/checkout_basketcontents_voucherdiscount.tpl',
    ),
    'blocks' => array(
        // Admin Templateerweiterung and CSS / Javascript
        array(
            'template' => 'headitem.tpl',
            'block'    => 'admin_headitem_inccss',
            'file'     => 'Application/views/admin/blocks/headitem_d3voucher_css.tpl'
        ),
        array(
            'template' => 'headitem.tpl',
            'block'    => 'admin_headitem_incjs',
            'file'     => 'Application/views/admin/blocks/headitem_d3voucher_js.tpl'
        ),
        array(
            'template' => 'voucherserie_main.tpl',
            'block'    => 'admin_voucherserie_main_form_discount_type',
            'file'     => 'Application/views/admin/blocks/d3_voucherserie_main.tpl'
        ),
        // Frontend Templateerweiterung
        array(
            'template' => 'page/checkout/inc/basketcontents.tpl',
            'block'    => 'checkout_basketcontents_voucherdiscount',
            'file'     => 'Application/views/blocks/checkout_basketcontents_voucherdiscount.tpl'
        ),
        array(
            'template' => 'page/checkout/inc/basketcontents.tpl',
            'block'    => 'checkout_basketcontents_summary',
            'file'     => 'Application/views/blocks/checkout_basketcontents_summary.tpl'
        ),
        array(
            'template' => 'page/checkout/inc/basketcontents_list.tpl',
            'block'    => 'checkout_basketcontents_basketitem_quantity',
            'file'     => 'Application/views/blocks/checkout_basketcontents_basketitem_quantity_list.tpl'
        ),
        array(
            'template' => 'page/checkout/inc/basketcontents_table.tpl',
            'block'    => 'checkout_basketcontents_basketitem_quantity',
            'file'     => 'Application/views/blocks/checkout_basketcontents_basketitem_quantity_table.tpl'
        ),
        array(
            'template' => 'page/checkout/basket.tpl',
            'block'    => 'checkout_basket_main',
            'file'     => 'Application/views/blocks/checkout_basket_main_adderrormessages.tpl'
        ),
    ),
    'settings' => array(
        array(
            'group' => 'd3articlevoucher_buyablestate',
            'name'  => 'blD3AVArticlesArentBuyable',
            'type'  => 'bool',
            'value' => 'false'
        ),
    )
);
