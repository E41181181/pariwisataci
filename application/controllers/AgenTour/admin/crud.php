<?php 

class Crud extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
                $this->load->helper('url');
	}

	function index(){
		$data['konten'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_tampil',$data);
    }
  function list(){
    $data['konten'] = $this->m_data->tampil_data()->result();
    $this->load->view('list',$data);
   
  }

    function tambah(){
		$this->load->view('v_input'); 
    }
    
    //function tambah diatas berfungsi untuk menampilkan v_input agar dapat memasukan data.
    function admin(){
      $this->load->view('indexadmin'); 
      }

    function ftambah(){
		$this->load->view('formtambah'); 
    }

    function tambah_aksi(){
		$judul = $this->input->post('judul');
		$fasilitas = $this->input->post('fasilitas');
		$harga = $this->input->post('harga');
 
		$data = array(
			'judul' => $judul,
			'fasilitas' => $fasilitas,
			'harga' => $harga
			);
		$this->m_data->input_data($data,'konten');
		redirect('AgenTour/admin/crud/admin');
    }
    //Pada fungsi tambah_aksi data yang diinputkan akan dimasukkan kedalam array $data kemudia diparsing ke model m_data

    function hapus($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'konten');
		redirect('AgenTour/admin/crud/admin');
    }
    //fungsi hapus menghapus data pada table dengan parameter id

    function edit($id){
		$where = array('id' => $id);
		$data['konten'] = $this->m_data->edit_data($where,'konten')->result();
		$this->load->view('v_edit',$data);
    }

    function editkntn($id){
      $where = array('id' => $id);
      $data['konten'] = $this->m_data->edit_data($where,'konten')->result();
      $this->load->view('formedit',$data);
      }
    //sama seperti hapus data, pada fungsi edit ini id dipilih sebagai parameter kemudian data yang ada di id itu ditampilkan melalui model
    //kemudian data tersebut disimpan kembali dengan id yang sama.

    function update(){
        $id = $this->input->post('id');
        $judul = $this->input->post('judul');
        $fasilitas = $this->input->post('fasilitas');
        $harga = $this->input->post('harga');
    
        $data = array(
            'judul' => $judul,
            'fasilitas' => $fasilitas,
            'harga' => $harga
        );
    
        $where = array(
            'id' => $id
        );
    
        $this->m_data->update_data($where,$data,'konten');
        redirect('AgenTour/admin/crud/admin');
    }
    //sama seperti hapus data, pada fungsi edit ini id dipilih sebagai parameter kemudian data yang ada di id itu ditampilkan pada array
    // melalui model
    //kemudian data tersebut disimpan kembali dengan id yang sama.
    
}
