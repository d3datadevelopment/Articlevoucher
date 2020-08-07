<?php
/**
 * This Software is the property of Data Development and is protected
 * by copyright law - it is NOT Freeware.
 * Any unauthorized use of this software without a valid license
 * is a violation of the license agreement and will be prosecuted by
 * civil and criminal law.
 * http://www.shopmodule.com
 *
 * @copyright (C) D3 Data Development (Inh. Thomas Dartsch)
 * @link      http://www.oxidmodule.com
 */

$sLangName           = "Deutsch";
$sArticleVoucherLogo = (class_exists(D3\ModCfg\Application\Model\d3utils::class) ? D3\ModCfg\Application\Model\d3utils::getInstance()->getD3Logo() : 'D&sup3;');

// -------------------------------
// RESOURCE IDENTIFIER = STRING
// -------------------------------

$aLang = array(
    'charset'                               => 'UTF-8',
    'D3ARTVOUCHER_MODUL_NOT_ACTIVE'         => 'Fehler (' . $sArticleVoucherLogo
        . ' Artikelgutschein): Lizensschlüssel fehlt oder Modul nicht aktiv',
    'D3_VOUCHERSERIE_MAIN_DISCOUNT_ABS'     => 'abs',
    'D3_VOUCHERSERIE_MAIN_DISCOUNT_PERCENT' => '%',
    'D3_VOUCHERSERIE_MAIN_DISCOUNT_ITEM'    => 'Artikel',
    'D3_HELP_VOUCHERSERIE_MAIN_DISCOUNT'    => 'Bei <span class="navipath_or_inputname">Rabatt</span> '
        . 'stellen Sie ein, wie hoch der Rabatt des Gutscheins sein soll sein soll. '
        . 'Mit der Auswahlliste hinter dem Eingabefeld können Sie auswählen, '
        . 'ob der Rabatt absolut oder prozentual sein soll:'
        . '<ul>'
        . '<li><span class="userinput_or_code">abs</span>: '
        . 'Der Rabatt ist absolut, z. B. 5 Euro.</li>'
        . '<li><span class="userinput_or_code">%</span>: '
        . 'Der Rabatt ist prozentual, z. B. 10 Prozent vom Einkaufswert.</li>'
        . '<li><span class="userinput_or_code">itm</span>: '
        . $sArticleVoucherLogo . ' Artikelgutschein: Der Rabatt ist ein Artikel.</li>'
        . '</ul>',

    'SHOP_MODULE_GROUP_d3articlevoucher_buyablestate'   => 'Bestellstatus der Gutscheinartikel',
    'SHOP_MODULE_blD3AVArticlesArentBuyable'            => 'Gutscheinartikel sind <b>nicht</b> direkt kaufbar',
    'HELP_SHOP_MODULE_blD3AVArticlesArentBuyable'       => 'Der zu Artikelrabatten zugeordnete Artikel l&auml;&szlig;t '.
        'sich im Standardshop auch regulär kaufen. Ist dieser Artikel explizit für die Gutscheine angelegt, setzen Sie '.
        'diesen Haken. Dann kann der Artikel noch aufgerufen werden, jedoch nicht mehr in den Warenkorb gelegt werden.',
);
