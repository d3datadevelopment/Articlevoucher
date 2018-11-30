/**
 * This Software is the property of Data Development and is protected
 * by copyright law - it is NOT Freeware.
 *
 * Any unauthorized use of this software without a valid license
 * is a violation of the license agreement and will be prosecuted by
 * civil and criminal law.
 *
 * http://www.shopmodule.com
 *
 * @copyright (C) D3 Data Development (Inh. Thomas Dartsch)
 * @link      http://www.oxidmodule.com
 */

function ChangeVoucherType(oObj)
{
    var oHObj = document.getElementById("itmart");
    var oDObj = document.getElementsByName("editval[oxvoucherseries__oxdiscount]")[0];

    if ( oDObj != null && oHObj != null && oObj != null) {
        if ( oObj.value == "discount") {
            oHObj.style.display = "";
            oDObj.style.display = "none";
        } else {
            oHObj.style.display = "none";
            oDObj.style.display = "";
        }
    }
}