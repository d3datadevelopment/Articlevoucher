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

use D3\Articlevoucher\Application\Model\Constants;
use D3\ModCfg\Application\Model\Install\d3install;
use OxidEsales\Eshop\Application as OxidCore;

/**
 * Metadata version
 */
$sMetadataVersion = '2.1';
$logo = '<img src="https://logos.oxidmodule.com/d3logo.svg" alt="(D3)" style="height:1em;width:1em">';

/**
 * Module information
 */
$aModule = [
'id'          => Constants::OXID_MODULE_ID,
'title'       =>
    $logo . ' Artikelgutscheine',
    'description' =>   [
        'de' =>  'Erm&ouml;glicht Artikel als Gutscheinwert zu verwenden',
        'en' =>  '',
    ],
    'thumbnail'   => 'picture.svg',
    'version'     => '5.0.1.0',
    'author'      => 'D&sup3; Data Development (Inh.: Thomas Dartsch)',
    'email'       => 'support@shopmodule.com',
    'url'         => 'https://www.oxidmodule.com/',
    'extend'       => [
        OxidCore\Controller\Admin\VoucherSerieMain::class => D3\Articlevoucher\Modules\Application\Controller\Admin\d3_voucherserie_main_addarticle::class,
        OxidCore\Controller\BasketController::class       => D3\Articlevoucher\Modules\Application\Controller\d3_basket_updatevoucherinfo::class,

        OxidCore\Model\DiscountList::class                => D3\Articlevoucher\Modules\Application\Model\d3_oxdiscountlist_articlevoucher::class,
        OxidCore\Model\Discount::class                    => D3\Articlevoucher\Modules\Application\Model\d3_oxdiscount_articlevoucher::class,
        OxidCore\Model\Basket::class                      => D3\Articlevoucher\Modules\Application\Model\d3_oxbasket_articlevoucher::class,
        OxidCore\Model\BasketItem::class                  => D3\Articlevoucher\Modules\Application\Model\d3_oxbasketitem_articlevoucher::class,
        OxidCore\Model\Article::class                     => D3\Articlevoucher\Modules\Application\Model\d3_oxarticle_articlevoucher::class,
        OxidCore\Model\Voucher::class                     => D3\Articlevoucher\Modules\Application\Model\d3_oxvoucher_articlevoucher::class,
    ],
    'controllers' => [
        'd3articlevoucher'          => D3\Articlevoucher\Application\Model\d3articlevoucher::class,
    ],
    'events'      => [
      'onActivate' => d3install::class . '::checkUpdateStart',
    ],
    'templates'   => [
        '@' . Constants::OXID_MODULE_ID . '/wave/checkout_basket_main_adderrormessages.tpl'   => 'views/smarty/wave/tpl/checkout/checkout_basket_main_adderrormessages.tpl',
        '@' . Constants::OXID_MODULE_ID . '/wave/checkout_basketcontents_basketitem_quantity_list.tpl'   => 'views/smarty/wave/tpl/checkout/checkout_basketcontents_basketitem_quantity_list.tpl',
        '@' . Constants::OXID_MODULE_ID . '/wave/checkout_basketcontents_voucherdiscount.tpl'   => 'views/smarty/wave/tpl/checkout/checkout_basketcontents_voucherdiscount.tpl',
    ],
    'blocks' => [
        // Admin Templateerweiterung and CSS / Javascript
        [
            'template' => 'headitem.tpl',
            'block'    => 'admin_headitem_inccss',
            'file'     => 'views/smarty/admin/blocks/headitem_d3voucher_css.tpl',
        ],
        [
            'template' => 'headitem.tpl',
            'block'    => 'admin_headitem_incjs',
            'file'     => 'views/smarty/admin/blocks/headitem_d3voucher_js.tpl',
        ],
        [
            'template' => 'voucherserie_main.tpl',
            'block'    => 'admin_voucherserie_main_form_discount_type',
            'file'     => 'views/smarty/admin/blocks/d3_voucherserie_main.tpl',
        ],
        // Frontend Templateerweiterung
        [
            'template' => 'page/checkout/inc/basketcontents.tpl',
            'block'    => 'checkout_basketcontents_voucherdiscount',
            'file'     => 'views/smarty/blocks/checkout_basketcontents_voucherdiscount.tpl',
        ],
        [
            'template' => 'page/checkout/inc/basketcontents.tpl',
            'block'    => 'checkout_basketcontents_summary',
            'file'     => 'views/smarty/blocks/checkout_basketcontents_summary.tpl',
        ],
        [
            'template' => 'page/checkout/inc/basketcontents_list.tpl',
            'block'    => 'checkout_basketcontents_basketitem_quantity',
            'file'     => 'views/smarty/blocks/checkout_basketcontents_basketitem_quantity_list.tpl',
        ],
        [
            'template' => 'page/checkout/inc/basketcontents_list.tpl',
            'block'    => 'checkout_basketcontents_basketitem_removecheckbox',
            'file'     => 'views/smarty/blocks/checkout_basketcontents_basketitem_removecheckbox_list.tpl',
        ],
        [
            'template' => 'page/checkout/basket.tpl',
            'block'    => 'checkout_basket_main',
            'file'     => 'views/smarty/blocks/checkout_basket_main_adderrormessages.tpl',
        ],
    ],
    'settings' => [
        [
            'group' => 'd3articlevoucher_buyablestate',
            'name'  => 'blD3AVArticlesArentBuyable',
            'type'  => 'bool',
            'value' => 'false',
        ],
    ],
];
