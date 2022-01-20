[{if is_array($Errors) && count($Errors)>0 && is_array($Errors.loginBoxErrors) && count($Errors.loginBoxErrors) > 0}]
    [{foreach from=$Errors.loginBoxErrors item=oEr key=key }]
        [{if $oEr->getErrorClassType() == 'oxVoucherException'}]
            <div class="alert alert-danger">
                [{oxmultilang ident="COUPON_NOT_ACCEPTED" args=$oEr->getValue('voucherNr')}]
                <strong>[{ oxmultilang ident="REASON" suffix="COLON"}]</strong>
                [{$oEr->getOxMessage()}]
            </div>
        [{/if}]
    [{/foreach}]
[{/if}]
