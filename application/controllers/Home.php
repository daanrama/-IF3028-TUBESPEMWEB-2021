<?php
class Home extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->helper("url");
        $this->load->model('home_model');
        $this->load->library('form_validation');
    }
 
    public function index(){
        $data['laporan'] = $this->home_model->Laporan();
        $this->load->view('home/index', $data);
    }

    public function judul()
    {
        $data['judulan'] = $this->home_model->cariJudul(true);
        $this->load->view('/home/judul', $data);
    }

    public function tampil($id)
    {
        $data['tampilan'] = $this->home_model->Tampilan($id);
        $this->load->view('tampil/index', $data);
    }

    public function tambah(){
        $this->load->view('tambah/index');
    }

    public function tambahbaru(){
    $this->form_validation->set_rules('judul','Judul','required[20]');
        if($this->form_validation->run() == FALSE){

           $this->load->view('tambah/index');
       } else {
        date_default_timezone_set('Asia/Jakarta');
        $tanggal=date("Y-m-d H:i:s");

        $file=$_FILES['file'];
        if($file=''){
        }else {
            $config['upload_path']='./uploads';
            $config['allowed_types'] = 'xls|xlsx|ppt|pptx|doc|docx|pdf';
            
            $this->load->library('upload', $config);

            if(!$this->upload->do_upload('file')){
                echo "Gagal Upload";
            }else{
                $file=$this->upload->data('file_name');
            }
        }
        $data =         
            [
            'judul'=>$this->input->POST('judul'),
            'aspek'=>$this->input->POST('aspek'),
            'file'=>$file,
            'tanggal'=>$tanggal
        ];
        $this->db->insert('laporan', $data);
        echo "<script>alert('Data telah ditambahkan'); document.location.href='../';</script>";
        }
    }
    
}
