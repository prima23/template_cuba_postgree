<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/**
 * Description of kontrol model
 *
 * @author Prima Aulia
 */

class Model_whitelist extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    /*Fungsi Get Data List*/
    var $search = array('keterangan', 'module_name', 'class_name', 'method_name');
    public function get_datatables() {
        $this->_get_datatables_query();
        if($_POST['length'] != -1)
            $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function count_filtered() {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all() {
        return $this->db->count_all_results('xi_sa_white_list');
    }

    private function _get_datatables_query() {
        $this->db->select('id_white_list,
                           keterangan,
                           module_name,
                           class_name,
                           method_name,
                           id_status,
                           id_module,
                           id_kontrol,
                           id_fungsi');
        $this->db->from('xi_sa_white_list');
        $i = 0;
        foreach ($this->search as $item) { // loop column
            if($_POST['search']['value']) { // if datatable send POST for search
                if($i===0) { // first loop
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
                if(count($this->search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }
        $this->db->order_by('id_white_list ASC');
    }

    /*Fungsi get data edit by id*/
    public function getDataDetailWhiteList($id) {
        $this->db->where('id_white_list', abs($id));
        $query = $this->db->get('xi_sa_white_list');
        return $query->row_array();
    }

    /* Fungsi untuk insert data */
    public function insertDataWhiteList() {
        //get data
        $create_by    = $this->app_loader->current_account();
        $create_date  = gmdate('Y-m-d H:i:s', time()+60*60*7);
        $create_ip    = $this->input->ip_address();
        $module     = explode('-',escape($this->input->post('module', TRUE)));
        $kontrol    = explode('-',escape($this->input->post('kontrol', TRUE)));
        $fungsi     = explode('-',escape($this->input->post('fungsi', TRUE)));

        //cek nama kontrol duplicate
        $this->db->where(array(
            'id_module'     => $module[0],
            'id_kontrol'    => $kontrol[0],
            'id_fungsi'     => $fungsi[0]
        ));
        $qTot = $this->db->count_all_results('xi_sa_white_list');
        if($qTot > 0)
            return array('response'=>'DUP');
        else {
            $data = array(
                'keterangan'        => escape($this->input->post('keterangan', TRUE)),
                'module_name'       => $module[1],
                'class_name'        => $kontrol[1],
                'method_name'       => $fungsi[1],
                'id_module'         => $module[0],
                'id_kontrol'        => $kontrol[0],
                'id_fungsi'         => $fungsi[0],

                'create_by'         => $create_by,
                'create_date'       => $create_date,
                'create_ip'         => $create_ip,
                'mod_by'            => $create_by,
                'mod_date'          => $create_date,
                'mod_ip'            => $create_ip,
                'id_status'         => escape($this->input->post('status', TRUE))
            );
            /*query insert*/
            $this->db->insert('xi_sa_white_list', $data);
            return array('response'=>'SUCCESS');
        }
    }

    /* Fungsi untuk update data */
    public function updateDataWhiteList() {
        //get data
        $create_by      = $this->app_loader->current_account();
        $create_date    = gmdate('Y-m-d H:i:s', time()+60*60*7);
        $create_ip      = $this->input->ip_address();
        $id	            = $this->encryption->decrypt(escape($this->input->post('tokenId', TRUE)));
        $module     = explode('-',escape($this->input->post('module', TRUE)));
        $kontrol    = explode('-',escape($this->input->post('kontrol', TRUE)));
        $fungsi     = explode('-',escape($this->input->post('fungsi', TRUE)));

        //cek data by id
        $dataKontrol = $this->getDataDetailWhiteList($id);
        if(count($dataKontrol) <= 0)
            return array('response'=>'ERROR', 'message' => 'Data tidak ditemukan');
        else {
            //cek nama kontrol duplicate
            $this->db->where(array(
                'id_module'     => $module[0],
                'id_kontrol'    => $kontrol[0],
                'id_fungsi'     => $fungsi[0]
            ));
            $this->db->where('id_white_list !=', $id);
            $qTot = $this->db->count_all_results('xi_sa_white_list');
            if($qTot > 0)
                return array('response'=>'DUP');
            else {
                $data = array(
                    'keterangan'        => escape($this->input->post('keterangan', TRUE)),
                    'module_name'       => $module[1],
                    'class_name'        => $kontrol[1],
                    'method_name'       => $fungsi[1],
                    'id_module'         => $module[0],
                    'id_kontrol'        => $kontrol[0],
                    'id_fungsi'         => $fungsi[0],
                    'mod_by'            => $create_by,
                    'mod_date'          => $create_date,
                    'mod_ip'            => $create_ip,
                    'id_status'         => escape($this->input->post('status', TRUE))
                );
                /*query update*/
                $this->db->where('id_white_list', abs($id));
                $this->db->update('xi_sa_white_list', $data);
                return array('response'=>'SUCCESS');
            }
        }
    }

    /* Fungsi untuk delete data */
    public function deleteDataWhiteList() {
        $id = $this->encryption->decrypt(escape($this->input->post('tokenId', TRUE)));
        //cek data by id
        $dataKontrol = $this->getDataDetailWhiteList($id);
        if (count($dataKontrol) <= 0)
            return array('response'=>'ERROR');
        else {
            $this->db->where('id_white_list', abs($id));
            $this->db->delete('xi_sa_white_list');
            return array('response'=>'SUCCESS');
        }
    }

    public function getDataModule(){
        $option = array('' => "Pilih Module");
        $datas = $this->db->get_where('xi_sa_module',array('id_status' => 1))->result();
        foreach($datas as $data){
            $option[$data->id_module."-".$data->nama_module] = $data->label_module;
        }
        return $option;
    }
    public function getDataKontrol(){
        $option = array('' => "Pilih Kontrol");
        $datas = $this->db->get_where('xi_sa_kontrol',array('id_status' => 1))->result();
        foreach($datas as $data){
            $option[$data->id_kontrol."-".$data->nama_kontrol] = $data->label_kontrol;
        }
        return $option;
    }
    public function getDataFungsi(){
        $option = array('' => "Pilih Fungsi");
        $datas = $this->db->get_where('xi_sa_fungsi',array('id_status' => 1))->result();
        foreach($datas as $data){
            $option[$data->id_fungsi."-".$data->nama_fungsi] = $data->label_fungsi;
        }
        return $option;
    }
}

// This is the end of auth signin model
