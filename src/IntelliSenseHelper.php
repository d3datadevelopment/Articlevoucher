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

namespace D3\Articlevoucher\Modules\Application\Controller
{
    class d3_basket_updatevoucherinfo_parent extends \OxidEsales\Eshop\Application\Controller\BasketController {}
}

namespace D3\Articlevoucher\Modules\Application\Controller\Admin
{
    class d3_voucherserie_main_addarticle_parent extends \OxidEsales\Eshop\Application\Controller\Admin\VoucherSerieMain {}
}

namespace D3\Articlevoucher\Modules\Application\Model
{
    class d3_oxarticle_articlevoucher_parent extends \OxidEsales\Eshop\Application\Model\Article {}
    class d3_oxbasket_articlevoucher_parent extends \OxidEsales\Eshop\Application\Model\Basket {}
    class d3_oxbasketitem_articlevoucher_parent extends \OxidEsales\Eshop\Application\Model\BasketItem {}
    class d3_oxdiscount_articlevoucher_parent extends \OxidEsales\Eshop\Application\Model\Discount {}
    class d3_oxdiscountlist_articlevoucher_parent extends \OxidEsales\Eshop\Application\Model\DiscountList {}
    class d3_oxvoucher_articlevoucher_parent extends \OxidEsales\Eshop\Application\Model\Voucher {}
}
