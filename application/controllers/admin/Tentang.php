<?php
class Tentang extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_tentang');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->m_tentang->get_all_tentang();
		$this->load->view('admin/v_tentang',$x);
	}

	function simpan_tentang(){
		$config['upload_path'] = './assets/images/'; //path folder
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

		$this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
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

	                        $photo=$gbr['file_name'];
	                        $judul=strip_tags($this->input->post('xjudul'));
							$deskripsi=$this->input->post('xdeskripsi');
							
							$this->m_tentang->simpan_tentang($id,$judul,$deskripsi,$photo);
							echo $this->session->set_flashdata('msg','success');
							redirect('admin/tentang');
					}else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/tentang');
	                }
	                 
	            }else{
	            	$judul=strip_tags($this->input->post('xjudul'));
					$deskripsi=strip_tags($this->input->post('xdeskripsi'));
					
					$this->m_tentang->simpan_tentang_tanpa_img($id,$judul,$deskripsi);
					echo $this->session->set_flashdata('msg','success');
					redirect('admin/tentang');
				}
				
	}

		
	function update_tentang(){
		$config['upload_path'] = './assets/images/'; //path folder
	            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
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

	                        $photo=$gbr['file_name'];
	                        $id=$this->input->post('id');
							$judul=strip_tags($this->input->post('xjudul'));
							$deskripsi=strip_tags($this->input->post('xdeskripsi'));
							

							$this->m_tentang->update_tentang($id,$judul,$deskripsi,$photo);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/tentang');
	                    
	                }else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/tentang');
	                }
	                
	            }else{
							$id=$this->input->post('id');
							$judul=strip_tags($this->input->post('xjudul'));
							$deskripsi=strip_tags($this->input->post('xdeskripsi'));


							$this->m_tentang->update_tentang_tanpa_img($id,$judul,$deskripsi);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/tentang');
	            } 

	}

	function hapus_tentang(){
		$id=$this->input->post('id');
		$gambar=$this->input->post('gambar');
		$path='./assets/images/'.$gambar;
		unlink($path);
		$this->m_tentang->hapus_tentang($id);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/tentang');
	}

}