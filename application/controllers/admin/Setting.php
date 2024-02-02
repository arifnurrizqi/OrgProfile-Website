<?php defined('BASEPATH') or exit('No direct script access allowed');

class Setting extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('auth_model');
		$this->load->model('feedback_model');
		$this->load->model('identitas_model');
		if (!$this->auth_model->current_user()) {
			redirect('auth/login');
		}
	}

	public function index()
	{
		$data['title'] = 'Settings';
		$data['pesan'] = $this->feedback_model->check_pesan();
		$data['profile'] = $this->identitas_model->get();
		$data['current_user'] = $this->auth_model->current_user();
		$this->load->view('admin/setting/setting', $data);
	}

	public function upload_avatar()
	{
		$this->load->model('user_model');

		$data['title'] = 'Settings';
		$data['pesan'] = $this->feedback_model->check_pesan();
		$data['current_user'] = $this->auth_model->current_user();

		if ($this->input->method() === 'post') {
			// the user id contain dot, so we must remove it
			$file_name = str_replace('.', '', $data['current_user']->id);
			$config['upload_path']          = FCPATH . '/public/img/avatar/';
			$config['allowed_types']        = 'gif|jpg|jpeg|png|webp';
			$config['file_name']            = $file_name;
			$config['overwrite']						= true;
			$config['max_size']             = 1024; // 1MB
			$config['max_width']            = 1300;
			$config['max_height']           = 1300;

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('avatar')) {
				$data['error'] = $this->upload->display_errors();
			} else {
				$uploaded_data = $this->upload->data();

				$new_data = [
					'id' => $data['current_user']->id,
					'avatar' => $uploaded_data['file_name'],
				];

				if ($this->user_model->update($new_data)) {
					$this->session->set_flashdata('message', 'Avatar was updated');
					redirect(site_url('admin/setting'));
				}
			}
		}

		$this->load->view('admin/setting/setting_upload_avatar.php', $data);
	}

	public function remove_avatar()
	{
		$data['title'] = 'Settings';
		$current_user = $this->auth_model->current_user();
		$data['pesan'] = $this->feedback_model->check_pesan();
		$this->load->model('user_model');

		// hapus file
		$file_name = str_replace('.', '', $current_user->id);
		array_map('unlink', glob(FCPATH . "/public/img/avatar/$file_name.*"));

		// set avatar menjadi null
		$new_data = [
			'id' => $current_user->id,
			'avatar' => null,
		];

		if ($this->user_model->update($new_data)) {
			$this->session->set_flashdata('message', 'Avatar dihapus!');
			redirect(site_url('admin/setting'));
		}
	}

	public function edit_identitas()
	{
		$data['title'] = 'Settings';
		$this->load->model('user_model');
		$data['pesan'] = $this->feedback_model->check_pesan();
		$data['profile'] = $this->identitas_model->get();

		$this->load->view('admin/setting/setting_edit_identitas_form.php', $data);
	}

	public function submit_editIdentitas()
	{
		$data['title'] = 'Settings';
		$this->load->model('user_model');
		$data['pesan'] = $this->feedback_model->check_pesan();
		$data['profile'] = $this->identitas_model->get();
		$faviconName = $this->input->post('favicon_name');

		$config['upload_path']          = FCPATH . '/public/img/';
		$config['allowed_types']        = 'gif|jpg|jpeg|png|webp';
		$config['overwrite']						= true;
		$config['max_size']             = 1024;
		$config['max_width']            = 1500;
		$config['max_height']           = 1500;

		$this->load->library('upload', $config);

		if (!empty($_FILES['favicon']['name'])) {
			if (!$this->upload->do_upload('favicon')) {
				$data['upload_error'] = $this->upload->display_errors();
				return $this->load->view('admin/setting/setting_edit_identitas_form.php', $data);
			} else {
				$uploaded_data = $this->upload->data();
				$faviconName = $uploaded_data['file_name'];
			}
		}

		$new_data = [
			'id' => $this->input->post('id'),
			'nama_website' => $this->input->post('nama_website'),
			'email' => $this->input->post('email'),
			'address' => $this->input->post('alamat'),
			'url' => $this->input->post('domain'),
			'maps' => $this->input->post('maps'),
			'keyword' => $this->input->post('seo_keyword'),
			'description' => $this->input->post('seo_deskripsi'),
			'sosmed' => $this->input->post('sosmed'),
			'no_telp' => $this->input->post('telp'),
			'favicon' => $faviconName,
		];

		if ($this->identitas_model->update($new_data)) {
			$this->session->set_flashdata('message', 'Profile website 🌐 was updated');
			redirect(site_url('admin/setting'));
		}
	}

	public function edit_profile()
	{
		$data['title'] = 'Settings';
		$this->load->library('form_validation');
		$this->load->model('user_model');
		$data['pesan'] = $this->feedback_model->check_pesan();
		$data['current_user'] = $this->auth_model->current_user();

		if ($this->input->method() === 'post') {
			$rules = $this->user_model->profile_rules();
			$this->form_validation->set_rules($rules);

			if ($this->form_validation->run() === FALSE) {
				return $this->load->view('admin/setting/setting_edit_profile_form.php', $data);
			}

			$new_data = [
				'id' => $data['current_user']->id,
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
			];

			if ($this->user_model->update($new_data)) {
				$this->session->set_flashdata('message', 'Profile was updated');
				redirect(site_url('admin/setting'));
			}
		}

		$this->load->view('admin/setting/setting_edit_profile_form.php', $data);
	}

	public function edit_password()
	{
		$data['title'] = 'Settings';
		$this->load->library('form_validation');
		$this->load->model('user_model');
		$data['pesan'] = $this->feedback_model->check_pesan();
		$data['current_user'] = $this->auth_model->current_user();

		if ($this->input->method() === 'post') {
			$rules = $this->user_model->password_rules();
			$this->form_validation->set_rules($rules);

			if ($this->form_validation->run() === FALSE) {
				return $this->load->view('admin/setting/setting_edit_password_form.php', $data);
			}

			$new_password_data = [
				'id' => $data['current_user']->id,
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'password_updated_at' => date("Y-m-d H:i:s"),
			];

			if ($this->user_model->update($new_password_data)) {
				$this->session->set_flashdata('message', 'Password was changed');
				redirect(site_url('admin/setting'));
			}
		}

		$this->load->view('admin/setting/setting_edit_password_form.php', $data);
	}
}
