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
    public $sModVersion = '4.1.1.0';
    public $sModRevision = '4110';
    public $sBaseConf = '--------------------------------------------------------------------------------
RHCv2==bHd4eXd1T2lOZlVkWlp1Vmw5VnlpVFhnL1R1U1VJR0xrWVB4MWJWbVUwQksrQVhBOWlmRGQre
mFXUlNPK1F2Ukx1VTlabGhPVFdjdkczU1dCVm9jMWRXaU5jejZRRzY2ZWRvZWxCV1lqTXRzL3I5M1R3K
2R1MjJJK1c0SDkvRU51RG9NaUY1NFYxMzhWOGh5WmxTdXZIZFpZZUJGaHRMOWhKZ3pzUEtHa29pQ3Bhd
G1OMC85ay9ydytjS0RWSXY2Y3dGZFVsUnVSS2dTOFdmMktEK0Ryb3JUaitnRjFMRmw2T3ZnMzgvUzdLS
mF4cnRSZjMzUE15ckJLV1VqU25hZWNpRUxJSXZDa1ZPeGd2UUpwMG5NOHBqSzIyYU9DUm9kaUVPekJPN
itYbHp1azRFaTNTcTFwZWVkNzhVRzBtMVErUzNoM3k2bnQ0UG0xWXNSV2ZtbVpRPT0=
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
