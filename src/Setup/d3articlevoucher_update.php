<?php
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
    public $sModVersion = '4.0.3.0';
    public $sModRevision = '4030';
    public $sBaseConf = '--------------------------------------------------------------------------------
SRgv2==dEpLN2luUjJpR0tWTWxGNTY1ZWFBSmFEQ29BZE12NjNtK0JlRHhXaVV4STZ2TXN1cFRoQ1B0a
2laSExWMXVsRE9WaEZwVEM1S3J5TnhtVUdrUXByZUwreThFSS8xN3NTZnVpUjdFV0hBWUhKM1A4MHJmc
jZCU3l4S1h4QkNlczZhQ1pqMzhoQXhQWjRPM0RVL2ZyU2Y1bFJ5UHN3ZkhxekxhVGxaaTRzTFowZVRqc
zltcldYZjBadmVNc0NDamc5WTF6am00dWhqTDV5Ky80TW1rdUV6K25adzdJNVhDOXVtODNpV01YemNXT
jRUQTdVV2MrUk5MbEtOeXYzNVRVOWRUWmdyQUxOZnAwRVVhb3JON3Z0OFBCU1psVUdMUW9Cc2t0RnBUe
WxYdXNyRk5Od0dPNGJLMCtOQWFXZU4rYk05Q0hTTEZEc0xlVVgxTjNFK1pEVVRRPT0=
--------------------------------------------------------------------------------';
    public $sRequirements = '';

    public $sBaseValue = '';

    protected $_aUpdateMethods = array(
        array(
            'check' => 'checkModCfgItemExist', // prüft mod-cfg-Eintrag und legt ihn ggf. an
            'do'    => 'updateModCfgItemExist'
        ),
        array(
            'check' => 'checkFields', // prüft Felder in Tabelle und legt sie ggf. an bzw. modifiziert diese
            'do'    => 'fixFields'
        ),
        array(
            'check' => 'hasOldModuleFiles',
            'do'    => 'deleteOldModuleFiles'
        ),
        array(
            'check' => 'checkModCfgSameRevision', // prüft mod-cfg-Eintrag und aktualisiert diesen ggf.
            'do'    => 'updateModCfgSameRevision'
        ),
    );

    // Standardwerte füü checkFields(), _addTable() und fixFields()
    public $aFields = array(
        array(
            'sTableName' => 'oxvoucherseries',
            'sFieldName' => 'OXDISCOUNTTYPE',
            'sType' => "ENUM('percent','absolute','discount')",
            'blNull' => false,
            'sDefault' => 'absolute',
            'sComment' => false,
            'sExtra' => '',
            'blMultilang' => false,
        ),
        array(
            'sTableName' => 'oxvoucherseries',
            'sFieldName' => 'D3DISCOUNTID',
            'sType' => 'VARCHAR(32)',
            'blNull' => false,
            'sDefault' => false,
            'sComment' => 'd3articlevoucher',
            'sExtra' => '',
            'blMultilang' => false,
        ),
    );

    // alle zu aktualisierenden Module, verwendet nicht onDeactivate-Handler
    protected $_aRefreshMetaModuleIds = array('d3articlevoucher');

    public $aOldModuleFiles = array(
        'd3/d3articlevoucher/models/d3articlevoucher_update.php'
    );

}
