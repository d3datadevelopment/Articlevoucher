[{* D3-Block: basketcontents.tpl::checkout_basketcontents_basketitem_quantity *}]

<div class="quantity">
    [{if $editable}]
        <input type="hidden" name="aproducts[[{$basketindex}]][aid]" value="[{$basketitem->getProductId()}]">
        <input type="hidden" name="aproducts[[{$basketindex}]][basketitemid]" value="[{$basketindex}]">
        <input type="hidden" name="aproducts[[{$basketindex}]][override]" value="1">
        [{if $basketitem->isBundle()}]
            <input type="hidden" name="aproducts[[{$basketindex}]][bundle]" value="1">
        [{/if}]

        [{if !$basketitem->isBundle() || !$basketitem->isDiscountArticle()}]
            <div class="input-group input-group-sm justify-content-end">
                <input id="am_[{$smarty.foreach.basketContents.iteration}]" type="number" class="textbox form-control text-center" name="aproducts[[{$basketindex}]][am]" value="[{$basketitem->getAmount()}]" size="3" min="0" style="width:60px;float:right;"[{if $oConfig->getConfigParam('blAllowUnevenAmounts')}] step="any"[{/if}]>
                <span class="input-group-append">
                    <span class="input-group-text">
                        [{if $basketitem->oxarticles__oxunitname->value}]
                            [{$basketitem->oxarticles__oxunitname->value}]
                        [{else}]
                            [{oxmultilang ident="PCS"}]
                        [{/if}]
                    </span>
                    <button class="btn btn-sm btn-warning float-right" id="basketUpdate-[{$smarty.foreach.basketContents.iteration}]" type="submit" name="updateBtn" title="[{oxmultilang ident="UPDATE"}]">
                        <i class="fas fa-sync"></i>
                    </button>
                </span>
            </div>
        [{/if}]
[{*** D3 fixed ***}]
    [{elseif !$basketitem->isBundle() || !$basketitem->isDiscountArticle()}]
        [{$basketitem->getAmount()}]
    [{/if}]

    [{if $basketitem->getdBundledAmount() > 0 && ($basketitem->isBundle() || $basketitem->isDiscountArticle())}]
        +[{$basketitem->getdBundledAmount()}]
    [{/if}]
</div>

