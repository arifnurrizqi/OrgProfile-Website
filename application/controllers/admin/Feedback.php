<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Feedback extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('auth_model');
		$this->load->model('feedback_model');
		if (!$this->auth_model->current_user()) {
			redirect('auth/login');
		}
	}

	public function index()
	{
		$data['title'] = 'Feedback';
		$data['feedbacks'] = $this->feedback_model->get();
		$data['pesan'] = $this->feedback_model->check_pesan();
		$data['current_user'] = $this->auth_model->current_user();
		if (count($data['feedbacks']) <= 0) {
			$this->load->view('admin/feedback/feedback_empty', $data);
		} else {
			$this->load->view('admin/feedback/feedback_list', $data);
		}
	}

	public function delete($id = null)
	{
		if (!$id) {
			show_404();
		}

		$this->load->model('feedback_model');
		$this->feedback_model->delete($id);

		$this->session->set_flashdata('success', 'Data was deleted');
		redirect(site_url('admin/feedback'));
	}

	public function submit_status()
	{
		$api_key = trim($this->input->post('api_key'));
		$status = $this->input->post('status_feedback');

		if ($status) {
			$q = 1;
		} else {
			$q = 0;
		}

		$data = array(
			'status' => $q
		);

		$update = $this->feedback_model->update_status($api_key, $data);
		if ($update > 0) {
			$this->session->set_flashdata('success', 'Update berhasil.');
			redirect(site_url('admin/feedback'));
		} else {
			$this->session->set_flashdata('message', 'Update Gagal. Mohon cek kembali data yang anda masukkan');
			redirect(site_url('admin/feedback'));
		}
	}
}
