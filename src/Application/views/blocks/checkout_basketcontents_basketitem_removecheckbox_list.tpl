[{d3modcfgcheck modid="d3articlevoucher"}]
[{/d3modcfgcheck}]
[{if $mod_d3articlevoucher}]
    [{if $oModCfg_d3articlevoucher->isThemeIdMappedTo('wave') || $oModCfg_d3articlevoucher->isThemeIdMappedTo('flow')}]
        [{if $basketitem->getdBundledAmount() <=0 || (!$basketitem->isBundle() && !$basketitem->isDiscountArticle())}]
            [{$smarty.block.parent}]
        [{/if}]
    [{else}]
        [{$smarty.block.parent}]
    [{/if}]
[{else}]
    [{$smarty.block.parent}]
[{/if}]