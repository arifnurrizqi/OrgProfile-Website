<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('auth_model');
		if (!$this->auth_model->current_user()) {
			redirect('auth/login');
		}
	}

	public function index()
	{
		$this->load->model('article_model');
		$this->load->model('feedback_model');
		$this->load->model('kategori_model');
		$this->load->model('landing_model');
		$this->load->model('pengurus_model');

		$data = [
			"title" => 'Dashboard',
			"current_user" => $this->auth_model->current_user(),
			"article_count" => $this->article_model->count(),
			"feedback_count" => $this->feedback_model->count(),
			"pesan_unread" => $this->feedback_model->check_pesan(),
			"kategori_count" => $this->kategori_model->count(),
			"landing_count" => $this->landing_model->count(),
			"pengurus_count" => $this->pengurus_model->count(),
			"pesan" => $this->feedback_model->check_pesan(),
			"articles" => $this->article_model->get(3, 0)
		];

		$this->load->view('admin/dashboard.php', $data);
	}

	public function getDataKunjungan()
	{
		$data['query_result'] = $this->model_kunjungan->grafik_kunjungan(); // Gantilah dengan metode yang sesuai di model

		header('Content-Type: application/json');
		echo json_encode($data['query_result']);
	}
}
