<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Artikelgutscheine @version 4.1.2.0 SourceGuardian (15.06.2023) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2023, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B3C47E8120AAQAAAAXAAAABHAAAACABAAAAAAAAAD/tf+YjT2Ah8S6Wx1fVY+YvKZfjjSnin4FtJ8ZGUB2V0YtaIeoT488f/jahvOxMwrBnHW2BhwCaD0Y26WPOiry1luIGN8H4KISJQbrH0hqMFSazqu6XblANItvKPiONhJIpWhsuPg+yhepDT8GPcPwyggAAACwBQAAtiW7u57PMXYqvORZK03E3kh6+cnodTjhEDemUd6kwJoIegjpXcL4E5VTw1IBdDTMPsKUKDj+y5HAAkDhugVCTyVFjXDlxc5pIbn+iR6ubi0eMq1fYacsukUptCN2nTfVU0W3a5t/EMkOaLn1UxJfdnsNVuI0T7Im/H2X00dcyMUQqAYOAG3bbYh6f/RWfgxuPfTfEF64mCzIHz5F8oUMP3tUZB+MeWV6Q7O5KCPW+QQYdTpabbsg6gZqZhnUTNTdv5N0GmtydCOXXelp2AMdGQUHe02WIBPiezWD0j9wiA2RMQwobjTRaUp733HIGORVumWKvuQ0Te59AsCnSN7SMLhsqMFS/kk2mtjkUaAX2zrMYA4l2zm39AbKjL/TrWtO9EM/4d0Hc00twRa907daSh/0rMr5SAnsSY+6ioj+VMhdVespmIWDWxoj2/HwO+MnBoAEMPcs/jojod3bSVctwkDPgcXJ1K7WcnZ9cglUEZzYJ2RvNsMcWLHLV8AzlBRZcHvZXmhxvPptOtVD1oTgeLeHrSAj35g6nOAYjY/acm3ELj8Qnyk4Ls3anGX6iSEckprKXfTuCe+jxX3BzUidTNQtyf+pDcrBdh2rzR51G5Vt89P0+QhSQ7Cr9bdqzfPYGlqbDDfFFs34SGmyVi/NbF927mcc16ZbV+XDmZnGE4iscC2+9zGF4cLNYXjwmGrPfLPgzdwrcI+GKHeZW/cPvI8mAUdLZDF/pihp9v3VzIgbe6pCz9IgJD8mKddEDpCogC+xnOjYhubkX9U5OBYZHDbyJTC5OWBymxBG90dyrXt8oqBsmSZf2ytHsyoKv21Fvxr161oG5YbPUSe1n1h4ajpJ9YxeqZQJQNxjQRRvfjYnA2yDX8ogsDCbWeW2JeJNQx2wOJRfSuMeEAhXguApbpFAheJPjE3ItvNoT26dZzJ+mJX/qfwMKqzQGHhuhEXVjU7VbIQVaCkoD0Iq3Lp0GElnEfojnkUnSdFIBc9Bc1UGhvb28R3Ar+7qeIFq/MF/ci0n4+4kccsY0bSrKLz4D3boCQeQ6ye6PvuL3D7Lnwq788/7fqbX19HA0CUqEw5oKTDO++J0DkVA+eLxR1WNIj+ZnUVPh/owrkIIXlNnMn7CSSHLGpyVc7gf/SmXGHim/6Sb54hjkR98F2U8/0TsKXdYmAp7IMA1k1sYTaubQqnHk3mnjAgjxSkaQBdu/RiAQRC6ZKp9xrdPRt9Q00gSCwuFJTXXx8eCyPmMVH9CCNcVH/IClvHCAr4XWS41H6QihUU8QtHtKF53FTvF6d7VWkVJze3o58JZhHBKVwe8A/WcMWtEzC8ik84b2yII/MtUINsLZan90sS/F7E1zOaa0mpCgxotjb2121j4jhfm4vJ6oxZOKfX1tuykRK39WS+0iaH+FkXtl+cA06rWjX58HbheDTwyYiQYVO04J80NcG1zL6bL8dc2zd6RSWaJx7BTZeZ8pMMzhG89WU1g6klA3HKQ7r+ORawyKr37jsGrCAZHsKHN82aNOAHbNKBYE+MPSjaOIet8gbUpR1Nj1aGf5foaaE9K7o14K8auMK5NPdIXIHqRFD7iFSDxhcQGhGV+oLGdt1QlXe2KNg7I82ih7LcppKmVerdVOtbVPQhx+sLtfLFJZe3tJ0KWmu6b5LxK6MYX6SkInTqLUkWOGFk2MFZCobiNzFWXDErJiYnUMU0aiynmsDYIL0b1JiJrw6TgrgN522snzN3fDd/RquTSRoN8sum7aleJw2OffbFeUKubyA7TsJ0Wvq8Cd4dVKRU+8yLUr5eavylgKydXOptRwL5hufbYf6ZcWwWqmdz+ll0enKFGwLqaNd1sdqONBI8docRThaGblcr7+Bw2h0OSZz7GBlhPAzq3+cnsJGiVH/F19nSaPNOcqKskWHCUahp+C5AGwDxNnJX7OlwZw3A4xVEAAACoBQAAwgMtO1A7mjeaWXhEZVwKOb2JvyhxmkgVyqhsMf5agAiFPLg3AXvXqwad5BnOwaWgzt3JbYXJ84qE+Vm1wjoPgXfa+mFym4whRv3SZXDzhtdX3jkRmr5RsEOkPBQKqujpCryLioVoC9zXwVAIsQ6HYLh1d7SHLI+4yJNeEy3mz/OS5zVSAfEMgu7AaHjQ3B+KqtvbUeBm6S+q/MPuZMrz+Xtn8b52J5L4aQwBiMt2Bsovqhxp7XX6L1EBc6zw1vvz7NvNaSrabV5O96EFxRmDLsVXFpC0Qs0WwiWpchuRetgP4luER3kbeSxZzb8fR8ObTh7eSFc2XXEv1EK7UVO7pO5Hun4/p8o9i5DFIICFiQLWUkb7HLGWlf/7xKdDPuOuj3qd05EhpA2jh/JjWd/AnaEJi9p3G++tHsufCYj7vmzfkV7R++rjkc21hb/OUUp3B+qai4+6pd8K75+a2KSwJiUxR50zWnPpFXmBt03l8AYvFfMscTUnzWa8eOtRg/9Xcpe4GjlLzfmxWfH3yjwHrMJbqbf9myjmr0mRMiF/fgd2vL7Vpi/1tYQSghgugdPnBjYt3psgxvYSu79XJr3PxojPjBFsKG4SgJIA5RLamblAZIR6kEAuASccS0Fa6ZQ0/OiuBdaotw2R+QuHSOXzQvV0b4/xuyCnAywUj+FkkFswBDMudA5RtRzoopAvwhly8R9ur5iKk0aFYjtWorp7Mu9QkMg69lb5gDZoMjBG7M/UOM0cRqazhDJ/hDzhgK8fMYgBneaBE10+y2P5AP7NDcDa3DX1WlhUVmf7nYWe/nFaUybemKEJKphscaqNMo7UQdsU01SG1rpmDbCgkv82h5Gfn5Es0B5gd/Ys14DUoxO5lUSh767Maec43tr+DPkY7OkBPqnEB97AIHsN6bZmQ0rxlOKWy34z9/HqibNyPEIiPckbAaF/W3kDhIm0psgo60pzSA/kigRoagShqAZvzIdtdmxvlT79cU0gVfn7ZXuLlfULQLU5dCObSbXJ/dVcQhJY/Bg+emBhcR9Dt0mhu3+ZKiBGuSR6/7aRvqqnfl3dNTaGC1MCN4fZWN+L+4GVhg6/iWyejtFLxny56jA9lV4eu+9jQP/sbXUZvP1sjnwm/bxcl6Bq5kC1lawF7FTF5L4smBti6QGfM+QuC+XWc3fhjhGiuff8pgSX9j9IJjXW3vv6sspObhwOFpuoPCUKzWeOBsTtOkXLcIm38SkCf6eyyBDlGquwwzBh20uLoCwM7Ee0Kmi/BAGNcYGHPrLalSF/Zt/Tb4fBw73gqIU0QaSArwVo66nBYxuNCqgdXShFyb7UaFNZVkIwAAYxjsphbe6fALTnjHa5ALgDi3BfFVhN+GAysmnVVy7orr5wzNovBHKphMPFcrDf/LTDd6xDmpT48IWNqWU/Ycf17w0nrOLaE4kCsLQM7h2/SNuiRrY5m7Z2Mr5oJcGGJ32/KkM3pqibXZ4tI3lYtaTioAQ/waVjxCu1hrNqE0aBB9B9L82VYtJtbye0+TB4/QS8jMIwreFlNn4Z6RWYRsR+wB1U9SjGa5ndNWxJZzqMfr4ydVCDnLYerHHE5gussE2V70ArWcEZT+wduKYEReti2PUUMh6709i24P51fcQEKrG5LDhC1r2I3Zj/cB3VilptzR5jTNrFL6CWsraGKyU6IhcvisI5cnS5tnlMOqy47NIBZub9LMKr48O2DGHux3uC1yzgHdcrMbRwGnUdHx7RmFrH9pD0zV+l2tVG1T4xv5NFrYFgT3Ajl2fI1HMfH5Xsf0UjCk1AfWIuq4YG7kBecgXT7hbojJSdBnpZGS9G1R/65Fx/BQlEFr4NHxRcCh6voVaA4bL5xK0LO0M1tbxpUFlp5u0jQ9qhBv9W3kupZ7di1Ew7jdPegfkL9EAVc0J25+jT5Y0ZzJGGJtkAAAAA');
