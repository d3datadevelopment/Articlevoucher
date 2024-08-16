<?php

/**
 * Copyright (c) D3 Data Development (Inh. Thomas Dartsch)
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 *
 * https://www.d3data.de
 *
 * @copyright (C) D3 Data Development (Inh. Thomas Dartsch)
 * @author    D3 Data Development - Daniel Seifert <info@shopmodule.com>
 * @link      https://www.oxidmodule.com
 */

$sArticleVoucherLogo = '<img src="https://logos.oxidmodule.com/d3logo.svg" alt="(D3)" style="height:1em;width:1em">';

// -------------------------------
// RESOURCE IDENTIFIER = STRING
// -------------------------------

return [
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
];
