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
    public $sModVersion = '4.0.3.1';
    public $sModRevision = '4031';
    public $sBaseConf = '--------------------------------------------------------------------------------
ha8v2==bXFvUGlJMVBGN3UySTQ5aUdZQ1ZPWmEyUk1UVGFUMUFhcjk2bnNUb2luQk9yTWNDKzZoQXFPQ
ng4cVlxUkwxc0EwbTJ4a1NKMVRsUk9yNFZxRUZObUF3Z1ZYeTBHT1RQcmw3TDdXQmZmUXBCSFVNalNhV
0IzMDVaNzVjdDk1OUVGaW5OTzBjbXIyN0Q4T0tRUVNUQTJSQkhZQW9YYWJORWgvazY2TVNpREpyeUh6d
WFuYzF5eEl6aURQbTI3cFYxZU1BdmJqZ25TR0gvb2tmWlpPVzVCS0NHam9HZzA4LzJHWTNFRk9sOEpTY
UV1OTNRRXhCTzI3SXpVQk1KdHpJUnVOQXpObU5WU3pBZ3RLMmZRczFBZHVFWmVnUEdMaUE5STYxWXR4Z
3hGN3RWVlRhZ3AwQzdINzhhTS9mcWhSak1oa01QWnlWUU9FWFFvZFFKTVlZNUdBPT0=
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
