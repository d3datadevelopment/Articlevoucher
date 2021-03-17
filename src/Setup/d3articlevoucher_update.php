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
    public $sModVersion = '4.0.2.2';
    public $sModRevision = '4022';
    public $sBaseConf = 'QZ4v2==NFg3TSszRlFackJwS0xCM1E2Vlo4dTl3cVRDSjFreGVjQ3V3eUNNOWszYkUvTHJMVGdTa3FRR
GRVK0xjNGRkSzBBSDV1VS93Wkp3YW40SCsrclhSMG1ua2VHOEE1V0NUVEZUdUFxdzBRYkV1NkhUL2ttR
UhJMjJGenIrQTljZWRzdWNMa2JYS0V3ODcvNGJDbDJNci96NnVuMnhYMFp5WDhyV3hJT3FxZHZWZnhLM
DJxQnhtSC8vaXZUTVVVZUdTdGVtWXFwdXI5WnlOMlZ1VS83TndxT1N1ZWJhVXo0SllhR25tUnF3S2w4b
2dreE5pcnBoeUc2WTM1ZStsbnhnQ2dMNHZ2SDZlRkFmQkhKNFdtdHRIUUQyYlBTbEpYVUxSbnRycGFha
yttTEdTODc4d2JwUmpsbjF1UFZZam1UOVVhbjBKd1N6RUpCbGdOWmRSdWZJNDZRPT0=';
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
