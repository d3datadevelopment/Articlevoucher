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
    public $sModVersion = '4.0.2.1';
    public $sModRevision = '4021';
    public $sBaseConf = 'L9qv2==NnlISGJVVWNBOHEvenVHSmZFamVsWWIvQnV6dHhwZ3BWVHJhMkV1WmQ3RVUrTjljTUxsQmsrc
FAwaVNRRThVa0VGSm1PaFpMUmNVeHA4d1B0a05tUjl3UlJYQ3NCd0VVUUJNNURWRDZ1VW9SbldaRi9BL
0dxNkNGYzR5cXB0T2hPNnpsZHVQQUJkZkhaMllBd05DSzd1V09LUUtqSTdWdHNQcTdneFMzenR5a2dHc
0JQdFJKTHArZHdmbW1CYXp5Z2RJcDdHNzIwZ3cyMkhYcDUveXNMOUZKWEorQStzSTEyS1dDblIrMzJxS
VJWM1c1eXhEdnNOVlZCVjNpd2pIOWo5SzNnN2pOQlpVaHZOUjZqejZtQU1lVUwwWXE1STNidWczK2pvb
1E0OW9mYnFQSEN6SGp3aTNMMUZqS1MzOHlvL2EzcHRDcEQxdUZ0cDVVQ3BHekNBPT0=';
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
