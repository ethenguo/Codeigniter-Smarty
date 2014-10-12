<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Codeigniter + Smarty Integration
 *
 * @license GPL 2 http://www.gnu.org/licenses/gpl-2.0.html
 * @author  Ethen Guo <Ethen.Guo@Gmail.com>
 * @version 2014-10-12
 */

class MY_Controller extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}
	//smarty使用assign方法赋值
	public function assign($key,$val) {
		$this->mysmarty->assign($key,$val);
	}
	//smarty指定引用的模板文件
	public function display($html) {
		$this->mysmarty->display($html);
	}
}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */
