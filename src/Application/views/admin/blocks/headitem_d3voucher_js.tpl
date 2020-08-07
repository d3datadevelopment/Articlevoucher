[{* Standard-Block: headitem.tpl::admin_headitem_incjs *}]

[{$smarty.block.parent}]

[{d3modcfgcheck modid="d3articlevoucher"}][{/d3modcfgcheck}]
[{if $mod_d3articlevoucher}]
    [{if $oViewConf->getActiveClassName() == 'voucherserie_main'}]
        <script type="text/javascript" src="[{$oViewConf->getModuleUrl('d3articlevoucher', 'out/admin/src/js/d3articlevoucher.js')}]"></script>
    [{/if}]
[{/if}]