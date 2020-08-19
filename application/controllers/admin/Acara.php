<?php
class Acara extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_acara');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->m_acara->get_all_acara();
		$this->load->view('admin/v_acara',$x);
	}

	function simpan_acara(){
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
							
							$this->m_acara->simpan_acara($id,$judul,$deskripsi,$photo);
							echo $this->session->set_flashdata('msg','success');
							redirect('admin/acara');
					}else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/acara');
	                }
	                 
	            }else{
	            	$judul=strip_tags($this->input->post('xjudul'));
					$deskripsi=strip_tags($this->input->post('xdeskripsi'));
					
					$this->m_acara->simpan_acara_tanpa_img($id,$judul,$deskripsi);
					echo $this->session->set_flashdata('msg','success');
					redirect('admin/acara');
				}
				
	}

		
	function update_acara(){
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
							

							$this->m_acara->update_acara($id,$judul,$deskripsi,$photo);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/acara');
	                    
	                }else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/acara');
	                }
	                
	            }else{
							$id=$this->input->post('id');
							$judul=strip_tags($this->input->post('xjudul'));
							$deskripsi=strip_tags($this->input->post('xdeskripsi'));


							$this->m_acara->update_acara_tanpa_img($id,$judul,$deskripsi);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/acara');
	            } 

	}

	function hapus_acara(){
		$id=$this->input->post('id');
		$gambar=$this->input->post('gambar');
		$path='./assets/images/'.$gambar;
		unlink($path);
		$this->m_acara->hapus_acara($id);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/acara');
	}

}