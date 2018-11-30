[{* D3 ArticleVoucher START *}]
[{d3modcfgcheck modid="d3articlevoucher"}][{/d3modcfgcheck}]
[{if $mod_d3articlevoucher}]
  [{if count($Errors)>0 && count($Errors.loginBoxErrors) > 0}]
    [{foreach from=$Errors.loginBoxErrors item=oEr key=key }]
        [{if $oEr->getErrorClassType() == 'oxVoucherException'}]
            <div class="status error corners">
                [{oxmultilang ident="COUPON_NOT_ACCEPTED" args=$oEr->getValue('voucherNr')}]
                <br><strong>[{ oxmultilang ident="REASON" suffix="COLON"}]</strong>
                [{$oEr->getOxMessage()}]
            </div>
        [{/if}]
    [{/foreach}]
  [{/if}]
[{/if}]
[{* D3 ArticleVoucher END *}]
[{$smarty.block.parent}]