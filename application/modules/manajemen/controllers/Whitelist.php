<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/**
 * Description of kontrol class
 *
 * @author Yogi "solop" Kaputra
 */

class Whitelist extends SLP_Controller {
    protected $_vwName  = '';
    protected $_uriName = '';
    public function __construct() {
        parent::__construct();
        $this->load->model(array('model_whitelist' => 'modelu'));
        $this->_vwName = 'whitelist';
        $this->_uriName = 'manajemen/whitelist';
    }

    private function validasiDataValue() {
        $this->form_validation->set_rules('module', 'Module', 'required|trim');
        $this->form_validation->set_rules('kontrol', 'Kontrol', 'required|trim');
        $this->form_validation->set_rules('fungsi', 'Fungsi', 'required|trim');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required|trim');
        $this->form_validation->set_rules('status', 'Status', 'required|trim');
        validation_message_setting();
        if($this->form_validation->run() == FALSE)
            return false;
        else
            return true;
    }

    public function index() {
        $this->breadcrumb->add('Dashboard', site_url('home'));
        $this->breadcrumb->add('Manajemen', '#');
        $this->breadcrumb->add('White List', site_url($this->_uriName));
        $this->session_info['page_name'] = 'Manajemen White List';
        $this->session_info['siteUri']   = $this->_uriName;
        $this->session_info['page_css']	 = $this->load->view($this->_vwName.'/vcss', array('siteUri'=>$this->_uriName), true);
        $this->session_info['page_js']	 = $this->load->view($this->_vwName.'/vjs', array('siteUri'=>$this->_uriName), true);

        $this->session_info['dataModule'] = $this->modelu->getDataModule();
        $this->session_info['dataKontrol'] = $this->modelu->getDataKontrol();
        $this->session_info['dataFungsi'] = $this->modelu->getDataFungsi();

        $this->template->build($this->_vwName.'/vpage', $this->session_info);
    }

    public function listview() {
        if(!$this->input->is_ajax_request()) {
            exit('No direct script access allowed');
        } else {
            $data = array();
            $session = $this->app_loader->current_account();
            if(isset($session)){
                $dataList = $this->modelu->get_datatables();
                $no = $this->input->post('start');
                foreach ($dataList as $key => $dl) {
                    $no++;
                    $row = array();
                    $row[] = '<button type="button" class="btn btn-primary btn-sm mb-1 px-2 py-1 btnEdit" data-id="'.$this->encryption->encrypt($dl['id_white_list']).'" title="Edit data"><i class="fa fa-pencil-square fa-lg"></i></button>
                    <button type="button" class="btn mb-1 btn-danger btn-sm btnDelete px-2 py-1" data-id="'.$this->encryption->encrypt($dl['id_white_list']).'" title="Hapus data"><i class="fa fa-trash-o fa-lg"></i></button>';
                    $row[] = $no;
                    $row[] = $dl['keterangan'];
                    $row[] = $dl['module_name'];
                    $row[] = $dl['class_name'];
                    $row[] = $dl['method_name'];
                    $row[] = convert_status($dl['id_status']);
                    $data[] = $row;
                }
                $output = array(
                    "draw" => $this->input->post('draw'),
                    "recordsTotal" => $this->modelu->count_all(),
                    "recordsFiltered" => $this->modelu->count_filtered(),
                    "data" => $data,
                );
            }
            //output to json format
            $this->output->set_content_type('application/json')->set_output(json_encode($output));
        }
    }

    public function create() {
        if(!$this->input->is_ajax_request()) {
            exit('No direct script access allowed');
        } else {
            $session  = $this->app_loader->current_account();
            $csrfHash = $this->security->get_csrf_hash();
            if(!empty($session)) {
                if($this->validasiDataValue() == FALSE) {
                    $result = array('status' => 'RC404', 'message' => $this->form_validation->error_array(), 'csrfHash' => $csrfHash);
                } else {
                    $data = $this->modelu->insertDataWhiteList();
                    if($data['response'] == 'DUP') {
                        $result = array('status' => 'DUP', 'message' => array('isi' => 'Proses insert data gagal, karena data yang sama telah diinputkan'), 'csrfHash' => $csrfHash);
                    } else if($data['response'] == 'SUCCESS') {
                        $result = array('status' => 'RC200', 'message' => 'Proses insert data white list sukses', 'csrfHash' => $csrfHash);
                    }else{
                        $result = array('status' => 'RC404', 'message' => array('isi' => 'Proses insert data gagal, coba lagi atau hubungi admin'), 'csrfHash' => $csrfHash);
                    }
                }
            } else {
                $result = array('status' => 'RC404', 'message' => array('isi' => 'Proses insert data white list baru gagal, mohon coba kembali'), 'csrfHash' => $csrfHash);
            }
            $this->output->set_content_type('application/json')->set_output(json_encode($result));
        }
    }

    public function details() {
        if(!$this->input->is_ajax_request()) {
            exit('No direct script access allowed');
        } else {
            $session  = $this->app_loader->current_account();
            $csrfHash = $this->security->get_csrf_hash();
            $contId   = $this->input->post('token', TRUE);
            if(!empty($contId) AND !empty($session)) {
                $data = $this->modelu->getDataDetailWhiteList($this->encryption->decrypt($contId));
                $row = array();
                $row['module']	    = !empty($data) ? $data['id_module']."-".$data['module_name'] : '';
                $row['kontrol']	    = !empty($data) ? $data['id_kontrol']."-".$data['class_name'] : '';
                $row['fungsi']	    = !empty($data) ? $data['id_fungsi']."-".$data['method_name'] : '';
                $row['keterangan']	= !empty($data) ? $data['keterangan'] : '';
                $row['status']	    = !empty($data) ? $data['id_status'] : 1;
                $result = array('status' => 'RC200', 'message' => $row, 'csrfHash' => $csrfHash);
            } else {
                $result = array('status' => 'RC404', 'message' => array(), 'csrfHash' => $csrfHash);
            }
            $this->output->set_content_type('application/json')->set_output(json_encode($result));
        }
    }

    public function update() {
        if(!$this->input->is_ajax_request()) {
            exit('No direct script access allowed');
        } else {
            $session  = $this->app_loader->current_account();
            $csrfHash = $this->security->get_csrf_hash();
            $contId   = escape($this->input->post('tokenId', TRUE));
            if(!empty($session) AND !empty($contId)) {
                if($this->validasiDataValue() == FALSE) {
                    $result = array('status' => 'RC404', 'message' => $this->form_validation->error_array(), 'csrfHash' => $csrfHash);
                } else {
                    $data = $this->modelu->updateDataWhiteList();
                    if($data['response'] == 'ERROR') {
                        $result = array('status' => 'RC404', 'message' => array('isi' => 'Proses update data gagal, karena data tidak ditemukan'), 'csrfHash' => $csrfHash);
                    } else if($data['response'] == 'DUP') {
                        $result = array('status' => 'RC404', 'message' => array('isi' => 'Proses update data gagal, karena ditemukan data yang sama'), 'csrfHash' => $csrfHash);
                    } else if($data['response'] == 'SUCCESS') {
                        $result = array('status' => 'RC200', 'message' => 'Proses update data sukses', 'csrfHash' => $csrfHash);
                    }
                }
            } else {
                $result = array('status' => 'RC404', 'message' => array('isi' => 'Proses update data gagal, mohon coba kembali'), 'csrfHash' => $csrfHash);
            }
            $this->output->set_content_type('application/json')->set_output(json_encode($result));
        }
    }

    public function delete() {
        if(!$this->input->is_ajax_request()) {
            exit('No direct script access allowed');
        } else {
            $session  = $this->app_loader->current_account();
            $csrfHash = $this->security->get_csrf_hash();
            $contId   = escape($this->input->post('tokenId', TRUE));
            if(!empty($session) AND !empty($contId)) {
                $data = $this->modelu->deleteDataWhiteList();
                if($data['response'] == 'ERROR') {
                    $result = array('status' => 'RC404', 'message' => 'Proses delete data gagal, karena data tidak ditemukan', 'csrfHash' => $csrfHash);
                } else if($data['response'] == 'SUCCESS') {
                    $result = array('status' => 'RC200', 'message' => 'Proses delete data sukses', 'csrfHash' => $csrfHash);
                }
            } else {
                $result = array('status' => 0, 'message' => 'Proses delete data gagal, mohon coba kembali', 'csrfHash' => $csrfHash);
            }
            $this->output->set_content_type('application/json')->set_output(json_encode($result));
        }
    }
}

// This is the end of fungsi class
