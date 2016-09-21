<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cruddata extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("fungsi_model");
	}

	public function index()
	{
		$data['listData'] = $this->fungsi_model->getAllProducts();
		$this->load->view('form', $data);
	}

	public function addProduct()
	{
		$this->load->view('form');
	}

	public function addProductDb()
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'email' => $this->input->post('email')
			 );
		$this->fungsi_model->addProduct($data);

		redirect('','refresh');
	}

	public function updateProduct()
	{
		$data['listData'] = $this->fungsi_model->getProduct($id)->row();
		$this->load->view('form',$data);
	}

	public function updateProductDb()
	{
		$id['id'] = $this->input->post('id');
		$data = array('nama' => $this->input->post('nama'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'email' => $this->input->post('email'));
		$this->fungsi_model->deleteProduct($data,$id);
		redirect('','refresh');
	}

	public function deleteProductDb($id)
	{
		$this->fungsi_model->deleteProduct($id);
		redirect('','refresh');
	}
	
	public function _set_rules(){
$rules['id'] = 'trim|required|numeric';
$rules['nama'] = 'trim|required';
$rules['email'] = 'trim|required|valid_email';
$this->validation->set_rules($rules);
$this->validation->set_message('required', '* harus diisi');
$this->validation->set_message('numeric', '* hanya boleh diisi dengan angka');
$this->validation->set_message('valid_email', '* email tidak valid');
$this->validation->set_error_delimiters('<p>', '</p>');
}
}
?>