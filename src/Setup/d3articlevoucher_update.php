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
    public $sModVersion = '4.1.2.0';
    public $sModRevision = '4120';
    public $sBaseConf = '--------------------------------------------------------------------------------
qp1v2==bUkvMUNHZDJ4eGdveUxmSGdhc3VNczErZ29MRzlIb1FWNENGd0pWR0hacGxQbXNzb2JpTVpId
3pJNGptMDJTNFE1Q3oxaDBhSitkSXZQYkVuK0lObVFxT05WNFo1OUJ1NE4vMHhZNXl4SlBMaXEreHlOV
VRBbUxvTFRlc1E5ODBRdWZ6UHhLNW5xNzJGeDJtRlJJUko3ZEVQR0UvdWFFZVNUekp4RjdyeDA2UW0xV
G96M3BrMzdDMGZUZnptWHRQSTAvTjcza0orekNoaTB6VDZ6OEJKblZLTCtjT3FLR0JtRVZ0WUgrS0cvU
2t4blBwK3FPb0ZrVlpnQURET2hxVW5mSTdTTnE5SjQwWEhMSGlzeWdMcW1kRnhUaUhtbUpjaTFsSDhoR
ThRR2tDb1pXK0NlM3NTR25PK3pZUnVjUGpzUGNQLzFKQ05MWGVuK0JlN291MW1RPT0=
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
