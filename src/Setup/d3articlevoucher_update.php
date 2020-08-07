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
    public $sModVersion = '4.0.2.0';
    public $sModRevision = '4020';
    public $sBaseConf = '3QFv2==TFhNQzZkK1hxaHU0V2pmTlFrSVJWdG5wZkhnOCtjNkRldnFwNzhnaHFvOCsrbGlYRmdYZGh5V
1FKbmsram1ES29JOTNJZUpsS3Urdk1kZTgxVzZFbG5hNlNZUWVZUmlzdDgrNHorRTJTNDJiSThRWlRjU
zNRK0p0bCtxZGVSREJzd2VLUytuUDNERkhMUXVxZ3hMaVcvZTk5VzQ3cDRhUGRkZm13VHI0eS83R3k5d
3QvNmNKOHNGNjBaRXpqRWk1bnpoMnVrdjBYT3puNnovS2RWY2JLVDI1aWlmMVN2dnVRb2R5c3RTa1VjQ
2J1RDF2QTJwNEF1OExmVjhnamd3UXVGWFI2K1dIMGQxY3M4bFk1c3ZiMWpYOVhuUXUyRWorNWY4YlYza
m1ZZHhyZDkwK0pJa2Zkc1U3L2pYdTBhRWRDZndQakdRbTJzVFU1WmhiUS8xdzdRPT0=';
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
