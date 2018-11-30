[{* D3 ArticleVoucher *}]
[{d3modcfgcheck modid="d3articlevoucher"}][{/d3modcfgcheck}]
[{if $mod_d3articlevoucher}]
    [{if $oViewConf->getShowVouchers()}]
        [{foreach from=$oxcmp_basket->getVouchers() item=sVoucher key=key name=Voucher}]
            <tr class="couponData">
                <th><span><strong>[{oxmultilang ident="d3articlevoucher_COUPON"}]</strong>&nbsp;([{oxmultilang ident="d3articlevoucher_NUMBER_2"}] [{$sVoucher->sVoucherNr}])</span>
                    [{if $editable}]
                        <a href="[{$oViewConf->getSelfLink()}]&amp;cl=basket&amp;fnc=removeVoucher&amp;voucherId=[{$sVoucher->sVoucherId}]&amp;CustomError=basket" class="removeFn">[{oxmultilang ident="d3articlevoucher_REMOVE"}]</a>
                    [{/if}]
                </th>
                <td><strong style="line-height: 17px;">[{if $sVoucher->fVoucherdiscount != '0,00' && $sVoucher->fVoucherdiscount != '0.00'}]- [{$sVoucher->fVoucherdiscount}] [{$currency->sign}][{/if}]</strong></td>
            </tr>
        [{/foreach}]
    [{/if}]
[{* D3 ArticleVoucher *}]
[{else}]
    [{$smarty.block.parent}]
[{/if}]
