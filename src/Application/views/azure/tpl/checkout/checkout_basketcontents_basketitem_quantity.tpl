[{* product quantity manager *}]
<td class="quantity">
    [{if $editable}]
        <input type="hidden" name="aproducts[[{$basketindex}]][aid]" value="[{$basketitem->getProductId()}]">
        <input type="hidden" name="aproducts[[{$basketindex}]][basketitemid]" value="[{$basketindex}]">
        <input type="hidden" name="aproducts[[{$basketindex}]][override]" value="1">
        [{if $basketitem->isBundle()}]
            <input type="hidden" name="aproducts[[{$basketindex}]][bundle]" value="1">
        [{/if}]

        [{if !$basketitem->isBundle() || !$basketitem->isDiscountArticle()}]
            <p>
                <input id="am_[{$smarty.foreach.basketContents.iteration}]" type="text" class="textbox" name="aproducts[[{$basketindex}]][am]" value="[{$basketitem->getAmount()}]" size="2">
            </p>
        [{/if}]
[{*** d3 fixed ***}]
    [{elseif !$basketitem->isBundle() || !$basketitem->isDiscountArticle()}]
        [{$basketitem->getAmount()}]
    [{/if}]
    [{if $basketitem->getdBundledAmount() > 0 && ($basketitem->isBundle() || $basketitem->isDiscountArticle())}]
        +[{$basketitem->getdBundledAmount()}]
    [{/if}]
</td>