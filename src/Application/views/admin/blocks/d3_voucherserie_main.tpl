[{* D3-Block: voucherserie_main.tpl::d3_admin_voucherserie_main_voucher *}]

[{* D3 ArticleVoucher *}]
[{d3modcfgcheck modid="d3articlevoucher"}]
    [{* hole Informationen zur Modulprüfung *}]
[{/d3modcfgcheck}]

[{* Hinweis-Meldung anzeigen, wenn Modul nicht Aktiv bzw. Lizenzschlüssel fehlt *}]
[{if !$mod_d3articlevoucher}]
    [{block name="d3d3articlevoucher_modul_not_active"}]
        <tr>
            <td colspan="2">
                <div class="extension_error">
                    [{oxmultilang ident="D3ARTVOUCHER_MODUL_NOT_ACTIVE"}]
                </div>

            </td>
        </tr>
    [{/block}]

    [{$smarty.block.parent}]
[{else}]
    <tr>
        <td class="edittext">
            <label for="oxdiscount">[{oxmultilang ident="VOUCHERSERIE_MAIN_DISCOUNT"}]</label>
        </td>
        <td class="edittext">
            <input id="oxdiscount" [{if !$blD3DisplayItem}]style="display:none;"[{/if}] class="editinput" type="text" size="15" name="editval[oxvoucherseries__oxdiscount]" value="[{$edit->oxvoucherseries__oxdiscount->value}]" onClick="this.select()" [{$readonly}]>
            <select class="editinput" name="editval[oxvoucherseries__oxdiscounttype]" onChange="ChangeVoucherType(this);" [{$readonly}]>
                <option value="absolute" [{if $edit->oxvoucherseries__oxdiscounttype->value == "absolute"}]selected[{/if}]>
                    [{oxmultilang ident="D3_VOUCHERSERIE_MAIN_DISCOUNT_ABS"}]
                </option>
                <option value="percent" [{if $edit->oxvoucherseries__oxdiscounttype->value == "percent"}]selected[{/if}]>
                    [{oxmultilang ident="D3_VOUCHERSERIE_MAIN_DISCOUNT_PERCENT"}]
                </option>
                <option value="discount" [{if $edit->oxvoucherseries__oxdiscounttype->value == "discount"}]selected[{/if}]>
                    [{oxmultilang ident="D3_VOUCHERSERIE_MAIN_DISCOUNT_ITEM"}]
                </option>
            </select>
            [{oxinputhelp ident="D3_HELP_VOUCHERSERIE_MAIN_DISCOUNT"}]
        </td>
    </tr>
    <tr id="itmart" [{if $blD3DisplayItem}]style="display: none;"[{/if}]>
        <td class="edittext">
            <label for="d3discountid">[{oxmultilang ident="VOUCHERSERIE_MAIN_DISCOUNT"}]</label>
        </td>
        <td class="edittext">
            <select id="d3discountid" name="editval[oxvoucherseries__d3discountid]" class="editinput" style="width:220px;" [{$readonly}]>
                <option value="">---</option>
                [{foreach from=$discountlist item=discount}]
                    <option value="[{$discount->oxdiscount__oxid->value}]" [{if $edit->oxvoucherseries__d3discountid->value == $discount->getId()}]SELECTED[{/if}]>
                        [{$discount->oxdiscount__oxtitle->value}]
                    </option>
                [{/foreach}]
            </select>
        </td>
    </tr>
[{/if}]
[{* D3 ArticleVoucher *}]