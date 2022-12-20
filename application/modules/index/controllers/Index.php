<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/**
 * Description of home class
 *
 * @author Prima Aulia
 * https://www.facebook.com/prima.aulia23
 */

class Index extends SLP_Controller {
    protected $_vwName  = '';
    protected $_uriName = '';
    public function __construct() {
        parent::__construct();
        $this->load->model(array('Mindex' => 'modelu'));
        $this->_vwName  = '';
        $this->_uriName = 'index/index';
    }

    public function index() {
        dd("hello");
        $this->breadcrumb->add('Dashboard', site_url('home'));
        $this->breadcrumb->add('Nontpp', '#');
        $this->breadcrumb->add('Module', site_url($this->_uriName));
        $this->session_info['page_name'] = "Home";
        $this->session_info['page_css']	 = $this->load->view($this->_vwName.'/vcss', array('siteUri'=>$this->_uriName), true);
        $this->session_info['page_js']   = $this->load->view($this->_vwName . '/vjs', array('siteUri' => $this->_uriName), true);
        $this->template->build('vpage', $this->session_info);
    }
}

// This is the end of home clas
