[{* D3-Block: basketcontents.tpl::checkout_basketcontents_basketitem_quantity *}]

<td class="quantity">
    [{if $editable}]
        <input type="hidden" name="aproducts[[{$basketindex}]][aid]" value="[{$basketitem->getProductId()}]">
        <input type="hidden" name="aproducts[[{$basketindex}]][basketitemid]" value="[{$basketindex}]">
        <input type="hidden" name="aproducts[[{$basketindex}]][override]" value="1">
        [{if $basketitem->isBundle()}]
            <input type="hidden" name="aproducts[[{$basketindex}]][bundle]" value="1">
        [{/if}]
        [{if !$basketitem->isBundle() || !$basketitem->isDiscountArticle()}]
            [{if $basketproduct->oxarticles__oxisconfigurable->value}]
                [{if $basketitem->getPersParams()}]
                    [{foreach key=sVar from=$basketitem->getPersParams() item=aParam}]
                        <p>
                            <strong>
                                <label for="d3label_param1">
                                    [{oxmultilang ident="d3articlevoucher_PAGE_CHECKOUT_BASKETCONTENTS_PERSPARAM"}]
                                </label>
                            </strong>
                            <input id="d3label_param1" class="textbox persParam" type="text" name="aproducts[[{$basketindex}]][persparam][[{$sVar}]]" value="[{$aParam}]"></p>
                    [{/foreach}]
                [{else}]
                    <p>
                        <strong>
                            <label for="d3label_param2">
                                [{oxmultilang ident="d3articlevoucher_PAGE_CHECKOUT_BASKETCONTENTS_PERSPARAM"}]
                            </label>
                        </strong>
                        <input id="d3label_param2" class="textbox persParam" type="text" name="aproducts[[{$basketindex}]][persparam][details]" value=""></p>
                [{/if}]
            [{/if}]
            <p>
                <input id="am_[{$smarty.foreach.basketContents.iteration}]" type="number" class="textbox" name="aproducts[[{$basketindex}]][am]" value="[{$basketitem->getAmount()}]" size="3" min="0"[{if $oConfig->getConfigParam('blAllowUnevenAmounts')}] step="any"[{/if}]>
            </p>
        [{/if}]
    [{else}]
        [{if !$basketitem->isBundle() || !$basketitem->isDiscountArticle()}]
            [{$basketitem->getAmount()}]
        [{/if}]
    [{/if}]

    [{if $basketitem->getdBundledAmount() > 0 && ($basketitem->isBundle() || $basketitem->isDiscountArticle())}]
        +[{$basketitem->getdBundledAmount()}]
    [{/if}]
</td>
