<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Codeigniter + Smarty Integration
 *
 * @license GPL 2 http://www.gnu.org/licenses/gpl-2.0.html
 * @author  Ethen Guo <Ethen.Guo@Gmail.com>
 * @version 2014-10-12
 */

//调用Smarty核心文件
require_once( APPPATH . 'libraries/Smarty-3.1.19/libs/Smarty.class.php' );

//创建和实例化smarty类
class Mysmarty extends Smarty {
	//保护变量ci
	protected $ci;
	public function  __construct() {
		//实例化父类
		parent::__construct();
		//引用ci的对象
		$this->ci = & get_instance();
		//加载smarty的配置文件
		$this->ci->load->config('smarty');
		//获取相关的配置项
		$this->template_dir		= $this->ci->config->item('template_dir');
		$this->compile_dir		= $this->ci->config->item('compile_dir');
		$this->cache_dir		= $this->ci->config->item('cache_dir');
		$this->caching			= $this->ci->config->item('caching');
		$this->cache_lifetime	= $this->ci->config->item('cache_lifetime');
		$this->left_delimiter	= $this->ci->config->item('left_delimiter');
		$this->right_delimiter	= $this->ci->config->item('right_delimiter');
	}
}

/* End of file Mysmarty.php */
/* Location: ./application/libraries/Mysmarty.php */
