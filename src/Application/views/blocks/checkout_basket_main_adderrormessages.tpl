[{* D3 ArticleVoucher START *}]
[{d3modcfgcheck modid="d3articlevoucher"}][{/d3modcfgcheck}]
[{if $mod_d3articlevoucher}]
    [{if $oModCfg_d3articlevoucher->isThemeIdMappedTo('azure')}]
        [{include file='checkout_basket_main_adderrormessages_azure.tpl'}]
    [{elseif $oModCfg_d3articlevoucher->isThemeIdMappedTo('flow')}]
        [{include file='checkout_basket_main_adderrormessages_flow.tpl'}]
    [{elseif $oModCfg_d3articlevoucher->isThemeIdMappedTo('wave')}]
        [{include file='checkout_basket_main_adderrormessages_wave.tpl'}]
    [{else}]
  [{/if}]
[{/if}]
[{* D3 ArticleVoucher END *}]
[{$smarty.block.parent}]