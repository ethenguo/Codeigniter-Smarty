<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Codeigniter + Smarty Integration
 *
 * @license GPL 2 http://www.gnu.org/licenses/gpl-2.0.html
 * @author  Ethen Guo <Ethen.Guo@Gmail.com>
 * @version 2014-10-12
 */

$config['theme']        = 'default';
$config['template_dir'] = APPPATH . 'views';
$config['compile_dir']  = APPPATH . 'templates_c';
$config['cache_dir']    = APPPATH . 'cache';
$config['caching']      = 0;
$config['cache_lifetime']     = 1800; # This is the length of time in seconds that a template cache is valid. Once this time has expired, the cache will be regenerated.
$config['left_delimiter'] = "{";
$config['right_delimiter'] = "}";

/* End of file smarty.php */
/* Location: ./application/config/smarty.php */
