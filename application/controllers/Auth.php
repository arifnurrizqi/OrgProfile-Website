<?php defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function index()
	{
		show_404();
	}

	public function login()
	{
		// Menampilkan CAPTCHA
		$this->load->helper('captcha');
		$this->load->model('landing_model');
		$this->load->model('identitas_model');
		$this->config->load('captcha_config');

		$captcha_config = $this->config->item('captcha');
		$captcha = create_captcha($captcha_config);

		// Simpan nilai CAPTCHA di session untuk validasi nanti
		$this->session->set_userdata('captcha', $captcha['word']);
		$data['captcha_image'] = $captcha['image'];
		$data['profile'] = $this->identitas_model->get();
		$data['landing'] = $this->landing_model->getLandingBy('status', 'true');

		$this->load->view('auth/login_form', $data);
	}

	public function validate_captcha()
	{
		$this->load->model('auth_model');
		$this->load->library('form_validation');

		$rules = $this->auth_model->rules();
		$this->form_validation->set_rules($rules);

		// Mendapatkan nilai CAPTCHA dari session
		$captcha_session = $this->session->userdata('captcha');

		if ($this->form_validation->run() == FALSE) {
			return $this->load->view('auth/login_form', $data);
		}

		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$captcha_input = $this->input->post('captcha');

		if ($this->auth_model->login($username, $password)) {
			if (strtolower($captcha_input) == strtolower($captcha_session)) {
				// CAPTCHA benar
				redirect('admin/dashboard');
			} else {
				// CAPTCHA salah
				$this->session->set_flashdata('message_login_error', ' Security Code salah, pastikan memasukan dengan benar!');
				redirect(site_url('auth/login'));
			}
		} else {
			$this->session->set_flashdata('message_login_error', ' Login Gagal, pastikan username dan passwrod benar!');
			redirect(site_url('auth/login'));
		}
	}

	public function logout()
	{
		$this->load->model('auth_model');
		$this->auth_model->logout();
		redirect(site_url('auth/login'));
	}
}
