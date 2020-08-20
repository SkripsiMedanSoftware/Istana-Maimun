<?php
class Tiket extends CI_Controller{
  function __construct(){
    parent::__construct();
            $url=base_url('tiket');

    $this->load->model('m_tiket');
    $this->load->model('m_transaksi');
    $this->load->library('upload');
  }


  function index(){
    $x['data']=$this->m_tiket->get_all_tiket();
    $this->load->view('depan/v_tiket');
  }

  function simpan_tiket(){
    $config['upload_path'] = './assets/images/'; //path folder
      $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

    $this->upload->initialize($config);
    $gbr = NULL;
              if(!empty($_FILES['filefoto']['name']))
              {
                  if ($this->upload->do_upload('filefoto'))
                  {
                    $gbr = $this->upload->data()['file_name'];
                    
                  }
                  else
                  {
                      echo $this->session->set_flashdata('msg','warning');
                      redirect('tiket');
                  }
                   
              }
              
              //Compress Image
              // $config['image_library']='gd2';
              // $config['source_image']='./assets/images/'.$gbr;
              // $config['create_thumb']= FALSE;
              // $config['maintain_ratio']= FALSE;
              // $config['quality']= '60%';
              // $config['width']= 300;
              // $config['height']= 300;
              // $config['new_image']= 'assets/images/'.$gbr;
              // $this->load->library('image_lib', $config);
              // $this->image_lib->resize();

              // $bukti=$gbr;
              // $nama=$this->input->post('xnama');
              // $kontak=$this->input->post('xkontak');
              // $tanggal=$this->input->post('xtanggal');
              // $dewasa=$this->input->post('xdewasa');
              // $pelajar=$this->input->post('xpelajar');

              // $this->m_tiket->simpan_tiket($bukti,$nama,$kontak,$tanggal,$dewasa,$pelajar);

              $harga_tiket_dewasa = $this->m_tiket->harga_tiket_dewasa();
              $harga_tiket_pelajar = $this->m_tiket->harga_tiket_pelajar();

              $this->m_transaksi->create(array(
                'nama' => $this->input->post('xnama'),
                'kontak' => $this->input->post('xkontak'),
                'tanggal' => $this->input->post('xtanggal'),
                'harga_tiket' => ($harga_tiket_pelajar*(int) $this->input->post('xpelajar') + $harga_tiket_dewasa*(int) $this->input->post('xdewasa')),
                'jumlah_tiket' => ((int) $this->input->post('xdewasa') + (int) $this->input->post('xpelajar')),
                'dewasa' => (int) $this->input->post('xdewasa'),
                'pelajar' => (int) $this->input->post('xpelajar'),
                'bukti_pembayaran' => $gbr
              ));
              echo $this->session->set_flashdata('msg','Terima Kasih, Data Pemesanan Sudah Terkirim');
              redirect('tiket');
  }

  /* 
  function update_tiket(){
    $config['upload_path'] = './assets/images/'; //path folder
              $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
              $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

              $this->upload->initialize($config);
              if(!empty($_FILES['gambar']['name']))
              {
                  if ($this->upload->do_upload('gambar'))
                  {
                          $gbr = $this->upload->data();
                          //Compress Image
                          $config['image_library']='gd2';
                          $config['source_image']='./assets/images/'.$gbr['file_name'];
                          $config['create_thumb']= FALSE;
                          $config['maintain_ratio']= FALSE;
                          $config['quality']= '60%';
                          $config['width']= 300;
                          $config['height']= 300;
                          $config['new_image']= './assets/images/'.$gbr['file_name'];
                          $this->load->library('image_lib', $config);
                          $this->image_lib->resize();
                          $gambar=$this->input->post('gambar');
                         $path='./assets/images/'.$gambar;
                         unlink($path);

                          $bukti=$gbr['gambar'];
                          $id=$this->input->post('id');
              $judul=strip_tags($this->input->post('xjudul'));
              $deskripsi=strip_tags($this->input->post('xdeskripsi'));
              

              $this->m_tiket->update_tiket($id,$judul,$deskripsi,$photo);
              echo $this->session->set_flashdata('msg','info');
              redirect('tiket');
                      
                  }else{
                      echo $this->session->set_flashdata('msg','warning');
                      redirect('admin/tiket');
                  }
                  
              }else{
              $id=$this->input->post('id');
              $judul=strip_tags($this->input->post('xjudul'));
              $deskripsi=strip_tags($this->input->post('xdeskripsi'));


              $this->m_tiket->update_tiket_tanpa_img($id,$judul,$deskripsi);
              echo $this->session->set_flashdata('msg','info');
              redirect('admin/tiket');
              } 

  }*/
  

}