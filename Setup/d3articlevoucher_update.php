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
    public $sModVersion = '5.0.0.0';
    public $sModRevision = '5000';
    public $sBaseConf = '--------------------------------------------------------------------------------
C8pv2==eWpDWjMzaFgxSEtRK2d3KzRJWVhZNXdiQk16eWpOUi8xYktDSFg3ckFsYmFZV1Ztb3htUWltQ
TNxTnJqN1B2MFVMVElDOW1rck1qQm9tZHBldE5NNE1OUEdSc2tjQ2RjaVRUaUlUOURXQ2FYR04xQUFNS
GZIMGlvQytKTEdlWmRwTFhodnp0UW5rMkNJVVZLUVZFMG1RbXEzaGRJSSt2ZjVxL2xZckUvOS9jZTRmQ
jBGYlUxalhvdDRiaEx5SEFWUDR5UUdCRktYT0xFMTB5d0l0MnFlN0gyMU1qV21lTkxSYkhSZTJxSlVTQ
W5abjdCQ012OGhhTmNpRlg4b2tITTZBM0FIZkF1OXhlOThCaWw4Q0pITDNmQitRMndLYXZOMUd0WmxMZ
DRXSC9BNjV1UDRvbkg5a2VEQUJ2UzF6aUFtcitZNHJSc0V4VXNyajEyS3ZxWjh3PT0=
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
