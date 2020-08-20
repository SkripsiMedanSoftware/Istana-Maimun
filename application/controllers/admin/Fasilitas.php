<?php
class Fasilitas extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_fasilitas');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->m_fasilitas->get_all_fasilitas();
		$this->load->view('admin/v_fasilitas',$x);
	}

	function simpan_fasilitas(){
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
							
							$this->m_fasilitas->simpan_fasilitas($id,$judul,$deskripsi,$photo);
							echo $this->session->set_flashdata('msg','success');
							redirect('admin/fasilitas');
					}else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/fasilitas');
	                }
	                 
	            }else{
	            	$judul=strip_tags($this->input->post('xjudul'));
					$deskripsi=strip_tags($this->input->post('xdeskripsi'));
					
					$this->m_fasilitas->simpan_fasilitas_tanpa_img($id,$judul,$deskripsi);
					echo $this->session->set_flashdata('msg','success');
					redirect('admin/fasilitas');
				}
				
	}

		
	function update_fasilitas(){
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
							$deskripsi=$this->input->post('xdeskripsi');
							

							$this->m_fasilitas->update_fasilitas($id,$judul,$deskripsi,$photo);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/fasilitas');
	                    
	                }else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/fasilitas');
	                }
	                
	            }else{
							$id=$this->input->post('id');
							$judul=strip_tags($this->input->post('xjudul'));
							$deskripsi=$this->input->post('xdeskripsi');


							$this->m_fasilitas->update_fasilitas_tanpa_img($id,$judul,$deskripsi);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/fasilitas');
	            } 

	}

	function hapus_fasilitas(){
		$id=$this->input->post('id');
		$gambar=$this->input->post('gambar');
		$path='./assets/images/'.$gambar;
		unlink($path);
		$this->m_fasilitas->hapus_fasilitas($id);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/fasilitas');
	}

}