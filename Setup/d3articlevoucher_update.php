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

namespace D3\Articlevoucher\Setup;

use D3\ModCfg\Application\Model\Install\d3install_updatebase;

/**
 * Class d3articlevoucher_update
 */
class d3articlevoucher_update extends d3install_updatebase
{
    /*******************************************************************************************/
    /***** Standardwerte für aufgerufene Funktionen ********************************************/
    /*******************************************************************************************/

    public $sModKey = 'd3articlevoucher';
    public $sModName = 'Artikelgutscheine';
    public $sModVersion = '5.0.1.0';
    public $sModRevision = '5010';
    public $sBaseConf = '--------------------------------------------------------------------------------
mGlv2==Nk5NRTM2QkxFTzcxampXellrTVNqWEN3K05LY0wvd0tCQmlVaWpiMjNlRWpJSTVGbllsbTVUY
TM0RFUzd1JMclpwYlJXWHgxVGliNjAzNzhFWk1BTHVzdDJnMWZvelBXT3BRK0V0WS9leTVNRVArTERZZ
XpndEh3ckJuNXkyKzBQSHZIc2ZWeldoZDA2SDdsN2RhenplcXhBdG4zRXZPQjkrZkxiNE1IUzI2L3BTc
2MrVE5KUk5kR0NIbVFqUHlPK3JvR0xUWUg2N0R4TjA4aml3bWJ5TGVOUUpIRFZnaVZab0EvamYrL1RHM
3JBRHpUTER0Zit0OWNRWlUvdE4xcGoxMkpRS3E5Tng2dHgxd082QVJsVk5mWDN4eDIrNGszNDFrREpnV
VpMUjBMQk00QXd0RUpUdEhZRmdSaUFvcVRkc0t2ZnVvZ1BDbVpGQ1p4SFBDQWV3PT0=
--------------------------------------------------------------------------------';
    public $sRequirements = '';

    public $sBaseValue = '';

    protected $_aUpdateMethods = [
        [
            'check' => 'checkModCfgItemExist', // prüft mod-cfg-Eintrag und legt ihn ggf. an
            'do'    => 'updateModCfgItemExist',
        ],
        [
            'check' => 'checkFields', // prüft Felder in Tabelle und legt sie ggf. an bzw. modifiziert diese
            'do'    => 'fixFields',
        ],
        [
            'check' => 'checkModCfgSameRevision', // prüft mod-cfg-Eintrag und aktualisiert diesen ggf.
            'do'    => 'updateModCfgSameRevision',
        ],
    ];

    // Standardwerte für checkFields(), _addTable() und fixFields()
    public $aFields = [
        [
            'sTableName' => 'oxvoucherseries',
            'sFieldName' => 'OXDISCOUNTTYPE',
            'sType' => "ENUM('percent','absolute','discount')",
            'blNull' => false,
            'sDefault' => 'absolute',
            'sComment' => false,
            'sExtra' => '',
            'blMultilang' => false,
        ],
        [
            'sTableName' => 'oxvoucherseries',
            'sFieldName' => 'D3DISCOUNTID',
            'sType' => 'VARCHAR(32)',
            'blNull' => false,
            'sDefault' => false,
            'sComment' => 'd3articlevoucher',
            'sExtra' => '',
            'blMultilang' => false,
        ],
    ];

    // alle zu aktualisierenden Module, verwendet nicht onDeactivate-Handler
    protected $_aRefreshMetaModuleIds = ['d3articlevoucher'];
}
