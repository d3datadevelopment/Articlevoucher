[{d3modcfgcheck modid="d3articlevoucher"}][{/d3modcfgcheck}]
[{if $mod_d3articlevoucher}]
    [{* D3 ArticleVoucher *}]
    [{if $oViewConf->getShowVouchers()}]
        <div id="basketSummary" class="pull-right summary[{if $oViewConf->getActiveClassName() == 'order'}] orderSummary[{/if}]">
            [{*  basket summary  *}]
            <table class="table table-bordered table-striped">
                [{* D3 ArticleVoucher  * mod next line *}]
                [{if !( $oxcmp_basket->getDiscounts() || ($oViewConf->getShowVouchers() && $oxcmp_basket->getVoucherDiscValue()) || $oxcmp_basket->d3hasArticleVoucher())}]
                    [{block name="checkout_basketcontents_nodiscounttotalnet"}]
                        <tr>
                            <th>[{oxmultilang ident="TOTAL_NET"}]</th>
                            <td id="basketTotalProductsNetto">[{$oxcmp_basket->getProductsNetPrice()}]&nbsp;[{$currency->sign}]</td>
                        </tr>
                    [{/block}]

                    [{block name="checkout_basketcontents_nodiscountproductvats"}]
                        [{foreach from=$oxcmp_basket->getProductVats() item=VATitem key=key}]
                            <tr>
                                <th>[{ oxmultilang ident="VAT_PLUS_PERCENT_AMOUNT" suffix="COLON" args=$key }]</th>
                                <td>[{$VATitem}]&nbsp;[{$currency->sign}]</td>
                            </tr>
                        [{/foreach}]
                    [{/block}]

                    [{block name="checkout_basketcontents_nodiscounttotalgross"}]
                        <tr>
                            <th>[{ oxmultilang ident="TOTAL_GROSS" suffix="COLON" }]</th>
                            <td id="basketTotalProductsGross">[{$oxcmp_basket->getFProductsPrice()}]&nbsp;[{$currency->sign}]</td>
                        </tr>
                    [{/block}]
                [{else}]
                    [{if $oxcmp_basket->isPriceViewModeNetto() }]
                        [{block name="checkout_basketcontents_discounttotalnet"}]
                            <tr>
                                <th>[{oxmultilang ident="TOTAL_NET"}]</th>
                                <td id="basketTotalProductsNetto">[{$oxcmp_basket->getProductsNetPrice()}]&nbsp;[{$currency->sign}]</td>
                            </tr>
                        [{/block}]
                    [{else}]
                        [{block name="checkout_basketcontents_discounttotalgross"}]
                            <tr>
                                <th>[{ oxmultilang ident="TOTAL_GROSS" suffix="COLON" }]</th>
                                <td id="basketTotalProductsGross">[{$oxcmp_basket->getFProductsPrice()}]&nbsp;[{$currency->sign}]</td>
                            </tr>
                        [{/block}]
                    [{/if}]

                    [{block name="checkout_basketcontents_discounts"}]
                        [{foreach from=$oxcmp_basket->getDiscounts() item=oDiscount name=test_Discounts}]
                            <tr>
                                <th>
                                    <b>[{if $oDiscount->dDiscount < 0}][{oxmultilang ident="SURCHARGE"}][{else}][{oxmultilang ident="DISCOUNT"}][{/if}]&nbsp;</b>
                                    [{$oDiscount->sDiscount}]
                                </th>
                                <td>
                                    [{if $oDiscount->dDiscount < 0}][{$oDiscount->fDiscount|replace:"-":""}][{else}]-[{$oDiscount->fDiscount}][{/if}]&nbsp;[{$currency->sign}]
                                </td>
                            </tr>
                        [{/foreach}]
                    [{/block}]

                    [{if !$oxcmp_basket->isPriceViewModeNetto() }]
                        [{block name="checkout_basketcontents_totalnet"}]
                            <tr>
                                <th>[{oxmultilang ident="TOTAL_NET"}]</th>
                                <td id="basketTotalNetto">[{$oxcmp_basket->getProductsNetPrice()}]&nbsp;[{$currency->sign}]</td>
                            </tr>
                        [{/block}]
                    [{/if}]

                    [{block name="checkout_basketcontents_productvats"}]
                        [{foreach from=$oxcmp_basket->getProductVats() item=VATitem key=key}]
                            <tr>
                                <th>[{ oxmultilang ident="VAT_PLUS_PERCENT_AMOUNT" suffix="COLON" args=$key }]</th>
                                <td>[{$VATitem}]&nbsp;[{$currency->sign}]</td>
                            </tr>
                        [{/foreach}]
                    [{/block}]

                    [{if $oxcmp_basket->isPriceViewModeNetto() }]
                        [{block name="checkout_basketcontents_totalgross"}]
                            <tr>
                                <th>[{ oxmultilang ident="TOTAL_GROSS" suffix="COLON" }]</th>
                                <td id="basketTotalGross">[{$oxcmp_basket->getFProductsPrice()}]&nbsp;[{$currency->sign}]</td>
                            </tr>
                        [{/block}]
                    [{/if}]
                [{/if}]

                [{block name="checkout_basketcontents_voucherdiscount"}]
                    [{if $oViewConf->getShowVouchers() && $oxcmp_basket->getVoucherDiscValue()}]
                        [{foreach from=$oxcmp_basket->getVouchers() item=sVoucher key=key name=Voucher}]
                            <tr class="couponData">
                                <th><span><strong>[{oxmultilang ident="COUPON"}]</strong>&nbsp;([{oxmultilang ident="NUMBER"}] [{$sVoucher->sVoucherNr}])</span>
                                    [{if $editable}]
                                        <a href="[{$oViewConf->getSelfLink()}]&amp;cl=basket&amp;fnc=removeVoucher&amp;voucherId=[{$sVoucher->sVoucherId}]&amp;CustomError=basket" class="removeFn">[{oxmultilang ident="REMOVE"}]</a>
                                    [{/if}]
                                </th>
                                <td>-<strong>[{$sVoucher->fVoucherdiscount}]&nbsp;[{$currency->sign}]</strong></td>
                            </tr>
                        [{/foreach}]
                    [{/if}]
                [{/block}]

                [{block name="checkout_basketcontents_delcosts"}]
                    [{assign var="deliveryCost" value=$oxcmp_basket->getDeliveryCost()}]
                    [{if $deliveryCost && ($oxcmp_basket->getBasketUser() || $oViewConf->isFunctionalityEnabled('blCalculateDelCostIfNotLoggedIn') ) }]
                        [{if $oViewConf->isFunctionalityEnabled('blShowVATForDelivery') }]
                            <tr>
                                <th>[{ oxmultilang ident="SHIPPING_NET" suffix="COLON" }]</th>
                                <td id="basketDeliveryNetto">[{oxprice price=$deliveryCost->getNettoPrice() currency=$currency }]</td>
                            </tr>
                            [{if $deliveryCost->getVatValue()}]
                                <tr>
                                    [{if $oxcmp_basket->isProportionalCalculationOn() }]
                                        <th>[{oxmultilang ident="BASKET_TOTAL_PLUS_PROPORTIONAL_VAT" suffix="COLON"}]</th>
                                    [{else}]
                                        <th>[{oxmultilang ident="VAT_PLUS_PERCENT_AMOUNT" suffix="COLON" args=$deliveryCost->getVat()}]</th>
                                    [{/if}]
                                    <td id="basketDeliveryVat">[{oxprice price=$deliveryCost->getVatValue() currency=$currency}]</td>
                                </tr>
                            [{/if}]
                        [{else}]
                            <tr>
                                <th>[{ oxmultilang ident="SHIPPING_COST" suffix="COLON" }]</th>
                                <td id="basketDeliveryGross">[{oxprice price=$deliveryCost->getBruttoPrice() currency=$currency}]</td>
                            </tr>
                        [{/if}]
                    [{/if}]
                [{/block}]

                [{block name="checkout_basketcontents_paymentcosts"}]
                    [{assign var="paymentCost" value=$oxcmp_basket->getPaymentCost()}]
                    [{if $paymentCost && $paymentCost->getPrice() }]
                        [{if $oViewConf->isFunctionalityEnabled('blShowVATForPayCharge') }]
                            <tr>
                                <th>[{if $paymentCost->getPrice() >= 0}][{ oxmultilang ident="SURCHARGE" }][{else}][{ oxmultilang ident="DEDUCTION" }][{/if}] [{ oxmultilang ident="PAYMENT_METHOD" suffix="COLON"}]</th>
                                <td id="basketPaymentNetto">[{oxprice price=$paymentCost->getNettoPrice() currency=$currency }]</td>
                            </tr>
                            [{if $paymentCost->getVatValue()}]
                                <tr>
                                    [{if $oxcmp_basket->isProportionalCalculationOn() }]
                                        <th>[{ oxmultilang ident="BASKET_TOTAL_PLUS_PROPORTIONAL_VAT" suffix="COLON" }]</th>
                                    [{else}]
                                        <th>[{ oxmultilang ident="SURCHARGE_PLUS_PERCENT_AMOUNT" suffix="COLON" args=$paymentCost->getVat() }]</th>
                                    [{/if}]
                                    <td id="basketPaymentVat">[{oxprice price=$paymentCost->getVatValue() currency=$currency }]</td>
                                </tr>
                            [{/if}]
                        [{else}]
                            <tr>
                                <th>[{if $paymentCost->getPrice() >= 0}][{ oxmultilang ident="SURCHARGE" }][{else}][{ oxmultilang ident="DEDUCTION" }][{/if}] [{ oxmultilang ident="PAYMENT_METHOD" suffix="COLON" }]</th>
                                <td id="basketPaymentGross">[{oxprice price=$paymentCost->getBruttoPrice() currency=$currency }]</td>
                            </tr>
                        [{/if}]
                    [{/if}]
                [{/block}]

                [{block name="checkout_basketcontents_wrappingcosts"}]
                    [{if $oViewConf->getShowGiftWrapping() }]

                        [{assign var="wrappingCost" value=$oxcmp_basket->getWrappingCost()}]
                        [{if $wrappingCost && $wrappingCost->getPrice() > 0 }]
                            [{if $oViewConf->isFunctionalityEnabled('blShowVATForWrapping') }]
                                <tr>
                                    <th>[{ oxmultilang ident="BASKET_TOTAL_WRAPPING_COSTS_NET" suffix="COLON" }]</th>
                                    <td id="basketWrappingNetto">[{oxprice price=$wrappingCost->getNettoPrice() currency=$currency}]</td>
                                </tr>
                                [{if $oxcmp_basket->getWrappCostVat() }]
                                    <tr>
                                        <th>[{ oxmultilang ident="PLUS_VAT" suffix="COLON" }]</th>
                                        <td id="basketWrappingVat">[{oxprice price=$wrappingCost->getVatValue() currency=$currency}]</td>
                                    </tr>
                                [{/if}]
                            [{else}]
                                <tr>
                                    <th>[{ oxmultilang ident="GIFT_WRAPPING" suffix="COLON" }]</th>
                                    <td id="basketWrappingGross">[{oxprice price=$wrappingCost->getBruttoPrice() currency=$currency }]</td>
                                </tr>
                            [{/if}]
                        [{/if}]

                        [{assign var="giftCardCost" value=$oxcmp_basket->getGiftCardCost()}]
                        [{if $giftCardCost && $giftCardCost->getPrice() > 0 }]
                            [{if $oViewConf->isFunctionalityEnabled('blShowVATForWrapping') }]
                                <tr>
                                    <th>[{ oxmultilang ident="BASKET_TOTAL_GIFTCARD_COSTS_NET" suffix="COLON" }]</th>
                                    <td id="basketGiftCardNetto">[{oxprice price=$giftCardCost->getNettoPrice() currency=$currency }]</td>
                                </tr>
                                <tr>
                                    [{if $oxcmp_basket->isProportionalCalculationOn() }]
                                        <th>[{ oxmultilang ident="BASKET_TOTAL_PLUS_PROPORTIONAL_VAT" suffix="COLON" }]</th>
                                    [{else}]
                                        <th>[{ oxmultilang ident="VAT_PLUS_PERCENT_AMOUNT" suffix="COLON" args=$giftCardCost->getVat() }] </th>
                                    [{/if}]
                                    <td id="basketGiftCardVat">[{oxprice price=$giftCardCost->getVatValue() currency=$currency}]</td>
                                </tr>
                            [{else}]
                                <tr>
                                    <th>[{ oxmultilang ident="GREETING_CARD" suffix="COLON" }]</th>
                                    <td id="basketGiftCardGross">[{oxprice price=$giftCardCost->getBruttoPrice() currency=$currency}]</td>
                                </tr>
                            [{/if}]
                        [{/if}]
                    [{/if}]
                [{/block}]

                [{block name="checkout_basketcontents_grandtotal"}]
                    <tr>
                        <th class="lead"><strong>[{oxmultilang ident="GRAND_TOTAL" suffix="COLON"}]</strong></th>
                        <td id="basketGrandTotal" class="lead"><strong>[{oxprice price=$oxcmp_basket->getPrice() currency=$currency}]</strong></td>
                    </tr>
                [{/block}]

                [{if $oxcmp_basket->hasSkipedDiscount() }]
                    <tr>
                        <th><span class="note">**</span> [{oxmultilang ident="MESSAGE_COUPON_NOT_APPLIED_FOR_ARTICLES"}]</span></th>
                        <td></td>
                    </tr>
                [{/if}]
            </table>
        </div>
    [{else}]
        [{$smarty.block.parent}]
    [{/if}]
    [{* D3 ArticleVoucher *}]
[{else}]
    [{$smarty.block.parent}]
[{/if}]
