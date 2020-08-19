<?php
class Status extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
	
		$this->load->model('m_status');
		$this->load->model('m_admins');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->m_status->get_all_status();
		$this->load->view('admin/v_status',$x);
	}
	
	function get_edit(){
		$id=$this->uri->segment(4);
		$x['data']=$this->m_status->get_status_by_id($id);
		$x['data']=$this->m_status->get_all_status();
		$this->load->view('admin/v_edit_status',$x);
	}
	function simpan_status(){
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
	                        $config['width']= 710;
	                        $config['height']= 460;
	                        $config['new_image']= './assets/images/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $gambar=$gbr['file_name'];
													$status=strip_tags($this->input->post('xstatus'));
													$string   = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $status);
													$trim     = trim($string);
													$slug     = strtolower(str_replace(" ", "-", $trim));
													//$kategori_id=strip_tags($this->input->post('xkategori'));
													$data=$this->m_status->get_status_by_id($status_id);
													$q=$data->row_array();
													//$kategori_nama=$q['kategori_nama'];
													//$imgslider=$this->input->post('ximgslider');
													$imgslider='0';
													$kode=$this->session->userdata('idadmin');
													$user=$this->m_admins->get_admins_login($kode);
													$p=$user->row_array();
													$user_id=$p['admins_id'];
													$user_nama=$p['admins_nama'];
													$this->m_status->simpan_status($status);
													echo $this->session->set_flashdata('msg','success');
													redirect('admin/status');
											}else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/status');
	                }

	            }else{
					redirect('admin/status');
				}

	}

	function update_status(){

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
	                        $config['width']= 710;
	                        $config['height']= 460;
	                        $config['new_image']= './assets/images/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $gambar=$gbr['file_name'];
	                        $status_id=$this->input->post('id');
	                        $status=strip_tags($this->input->post('xstatus'));
													//$isi=$this->input->post('xisi');
													$string   = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $status);
													$trim     = trim($string);
													$slug     = strtolower(str_replace(" ", "-", $trim));
													//$kategori_id=strip_tags($this->input->post('xkategori'));
													$data=$this->m_status->get_status_by_id($status_id);
													$q=$data->row_array();
													//$kategori_nama=$q['kategori_nama'];
													//$imgslider=$this->input->post('ximgslider');
													$imgslider='0';
													$kode=$this->session->userdata('idadmin');
													$user=$this->m_admins->get_admins_login($kode);
													$p=$user->row_array();
													$user_id=$p['admins_id'];
													$user_nama=$p['admins_nama'];
													$this->m_status->update_status($status_id,$status);
													echo $this->session->set_flashdata('msg','info');
													redirect('admin/status');

	                }else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/admins');
	                }

	            }else{
									$status_id=$this->input->post('id');
									$status=strip_tags($this->input->post('xstatus'));
									$string   = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $status);
									$trim     = trim($string);
									$slug     = strtolower(str_replace(" ", "-", $trim));
									//$kategori_id=strip_tags($this->input->post('xkategori'));
									$data=$this->m_status->get_status_by_id($status_id);
									$q=$data->row_array();
									//$kategori_nama=$q['kategori_nama'];
									//$imgslider=$this->input->post('ximgslider');
									$imgslider='0';
									$kode=$this->session->userdata('idadmin');
									$user=$this->m_admins->get_admins_login($kode);
									$p=$user->row_array();
									$user_id=$p['admins_id'];
									$user_nama=$p['admins_nama'];
									$this->m_status->update_status_tanpa_img($status_id,$status);
									echo $this->session->set_flashdata('msg','info');
									redirect('admin/status');
	            }

	}

	function hapus_status(){
		$id=$this->input->post('id');
		$gambar=$this->input->post('gambar');
		$path='./assets/images/'.$gambar;
		unlink($path);
		$this->m_status->hapus_status($id);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/status');
	}

}
