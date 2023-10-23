<?php
class lat1 extends CI_Controller
{
    public function index()
    {
    echo "Selamat datang & selamat berbelanja";
    }
    public function penjumlahan($n1, $n2) 
    {
        $this->load->model('model_lat1'); 
 
        $data['nilai1'] = $n1;
        $data['nilai2'] = $n2;
        $data['hasil'] = $this->model_lat1->jumlah($n1, $n2);
        
        $this->load->view('view-latihan', $data);
    }    
}
?>