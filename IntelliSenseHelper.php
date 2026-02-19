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

namespace D3\Articlevoucher\Modules\Application\Controller
{
    use OxidEsales\Eshop\Application\Controller\BasketController;

    class d3_basket_updatevoucherinfo_parent extends BasketController
    {
    }
}

namespace D3\Articlevoucher\Modules\Application\Controller\Admin
{
    use OxidEsales\Eshop\Application\Controller\Admin\VoucherSerieMain;

    class d3_voucherserie_main_addarticle_parent extends VoucherSerieMain
    {
    }
}

namespace D3\Articlevoucher\Modules\Application\Model
{
    use OxidEsales\Eshop\Application\Model\Article;
    use OxidEsales\Eshop\Application\Model\Basket;
    use OxidEsales\Eshop\Application\Model\BasketItem;
    use OxidEsales\Eshop\Application\Model\Discount;
    use OxidEsales\Eshop\Application\Model\DiscountList;
    use OxidEsales\Eshop\Application\Model\Voucher;

    class d3_oxarticle_articlevoucher_parent extends Article
    {
    }
    class d3_oxbasket_articlevoucher_parent extends Basket
    {
    }
    class d3_oxbasketitem_articlevoucher_parent extends BasketItem
    {
    }
    class d3_oxdiscount_articlevoucher_parent extends Discount
    {
    }
    class d3_oxdiscountlist_articlevoucher_parent extends DiscountList
    {
    }
    class d3_oxvoucher_articlevoucher_parent extends Voucher
    {
    }
}
