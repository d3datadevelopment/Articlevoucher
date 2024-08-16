[{* Standard-Block: headitem.tpl::admin_headitem_inccss *}]

[{$smarty.block.parent}]

[{d3modcfgcheck modid="d3articlevoucher"}]
[{/d3modcfgcheck}]
[{if $mod_d3articlevoucher && $oViewConf->getActiveClassName() == 'voucherserie_main'}]
    <link rel="stylesheet" type="text/css" href="[{$oViewConf->getModuleUrl('d3modcfg_lib', 'out/admin/src/d3_mod_cfg.css')}]">
[{/if}]
