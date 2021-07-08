[{* D3-Block: basketcontents.tpl::checkout_basketcontents_basketitem_quantity *}]

[{* D3 ArticleVoucher *}]
[{d3modcfgcheck modid="d3articlevoucher"}]
    [{* hole Informationen zur Modulpr�fung *}]
[{/d3modcfgcheck}]

[{if $mod_d3articlevoucher}]
    [{if $oModCfg_d3articlevoucher->isThemeIdMappedTo('azure')}]
        [{include file='checkout_basketcontents_basketitem_quantity_list_azure.tpl'}]
    [{elseif $oModCfg_d3articlevoucher->isThemeIdMappedTo('flow')}]
        [{include file='checkout_basketcontents_basketitem_quantity_list_flow.tpl'}]
    [{elseif $oModCfg_d3articlevoucher->isThemeIdMappedTo('wave')}]
        [{include file='checkout_basketcontents_basketitem_quantity_list_wave.tpl'}]
    [{else}]
    [{/if}]
[{* D3 ArticleVoucher *}]
[{else}]
    [{$smarty.block.parent}]
[{/if}]
