<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Artikelgutscheine @version 4.1.1.0 SourceGuardian (03.01.2023) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2023, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
