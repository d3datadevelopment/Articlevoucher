<?php
/**
 * This Software is the property of Data Development and is protected
 * by copyright law - it is NOT Freeware.
 *
 * Any unauthorized use of this software without a valid license
 * is a violation of the license agreement and will be prosecuted by
 * civil and criminal law.
 *
 * https://www.d3data.de
 *
 * @copyright (C) D3 Data Development (Inh. Thomas Dartsch)
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
    public $sModVersion = '4.1.0.0';
    public $sModRevision = '4100';
    public $sBaseConf = '--------------------------------------------------------------------------------
2HWv2==dW1lZFhyd3BwV2lUSGVqeEJEeUF6SlZJNTdwVmxuZE9FWVNZeWVkTE5nMkRPT2VNeTVra284T
28rT1VJSHlBaktBdlZxUFFBWVZ4Z2QwTGlxOHc2RlB3QjlramFMTE9OSXlnU2swOHBxS3lBaUtZQXV3V
CtndGR0QlZ6WmsxRllTOFVkYy9LbEZhbFNwWk9YcC9SSWhBT1B6T01YNEdCTURDUXM1QmhwbEl2MkUxZ
UpRUVgyT2FuR01xTkZSS2tQRmJWU08yRzZ1dHlINC9FYk41dnpkbEZBTnIvd0pNem8rUlhtSzVCU1VJc
FdFQTBycC9WSEhMd2Rob05IZkVVR0l3NnZOTWZSczNic2dCaHNJUFVkUnRDWmVIWldZRWloZW94NFpMW
XRYWitqZ1h2SkxPUHJNajd5dUNaNllCRW9ISzJLOWNnMTBJNWw3OGtaM3ErQjZ3PT0=
--------------------------------------------------------------------------------';
    public $sRequirements = '';

    public $sBaseValue = '';

    protected $_aUpdateMethods = [
        [
            'check' => 'checkModCfgItemExist', // prüft mod-cfg-Eintrag und legt ihn ggf. an
            'do'    => 'updateModCfgItemExist'
        ],
        [
            'check' => 'checkFields', // prüft Felder in Tabelle und legt sie ggf. an bzw. modifiziert diese
            'do'    => 'fixFields'
        ],
        [
            'check' => 'hasOldModuleFiles',
            'do'    => 'deleteOldModuleFiles'
        ],
        [
            'check' => 'checkModCfgSameRevision', // prüft mod-cfg-Eintrag und aktualisiert diesen ggf.
            'do'    => 'updateModCfgSameRevision'
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

    public $aOldModuleFiles = [
        'd3/d3articlevoucher/models/d3articlevoucher_update.php'
    ];
}
