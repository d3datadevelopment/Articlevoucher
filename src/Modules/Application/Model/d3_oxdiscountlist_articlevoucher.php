<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Artikelgutscheine @version 4.1.1.0 SourceGuardian (03.01.2023) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2023, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
