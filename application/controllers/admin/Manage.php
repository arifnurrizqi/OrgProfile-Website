<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Manage extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('auth_model');
		$this->load->model('landing_model');
		$this->load->model('pengurus_model');
		$this->load->model('about_model');
		$this->load->model('filosofi_model');
		$this->load->model('fokusIsu_model');
		$this->load->model('feedback_model');
		if (!$this->auth_model->current_user()) {
			redirect('auth/login');
		}
	}

	public function index()
	{
		$data['title'] = 'Manage';
		$data['page_title'] = 'Database';
		$data['pesan'] = $this->feedback_model->check_pesan();
		$data['data_landing'] = $this->landing_model->get();
		$data['keyword'] = $this->input->get('keyword');

		if (!empty($this->input->get('keyword'))) {
			$data['landing'] = $this->landing_model->search($data['keyword']);
		}

		$this->load->view('admin/manage/manage', $data);
	}
	public function filosofi($id = null)
	{
		$data['title'] = 'Manage';
		$data['pesan'] = $this->feedback_model->check_pesan();
		$data['landing'] = $this->landing_model->find($id);
		$data['data_filosofi'] = $this->filosofi_model->get($id);
		$data['current_user'] = $this->auth_model->current_user();

		if (count($data['data_filosofi']) <= 0) {
			$this->load->view('admin/manage/filosofi_empty.php', $data);
		} else {
			$this->load->view('admin/manage/filosofi.php', $data);
		}
	}

	public function fokusIsu($id = null)
	{
		$data['title'] = 'Manage';
		$data['pesan'] = $this->feedback_model->check_pesan();
		$data['landing'] = $this->landing_model->find($id);
		$data['data_fokusIsu'] = $this->fokusIsu_model->get($id);
		$data['current_user'] = $this->auth_model->current_user();

		if (count($data['data_fokusIsu']) <= 0) {
			$this->load->view('admin/manage/fokus_isu_empty.php', $data);
		} else {
			$this->load->view('admin/manage/fokus_isu.php', $data);
		}
	}

	public function new()
	{
		$data['title'] = 'Manage';
		$data['pesan'] = $this->feedback_model->check_pesan();
		$data['current_user'] = $this->auth_model->current_user();
		$this->load->view('admin/manage/manage_new_form.php', $data);
	}
	public function new_about($id = null)
	{
		$data['title'] = 'Manage';
		$data['pesan'] = $this->feedback_model->check_pesan();
		$data['landing'] = $this->landing_model->find($id);
		$data['current_user'] = $this->auth_model->current_user();
		$this->load->view('admin/manage/manage_new_about.php', $data);
	}
	public function new_filosofi($id = null)
	{
		$data['title'] = 'Manage';
		$data['pesan'] = $this->feedback_model->check_pesan();
		$data['landing'] = $this->landing_model->find($id);
		$data['current_user'] = $this->auth_model->current_user();
		$this->load->view('admin/manage/filosofi_new_form.php', $data);
	}
	public function new_fokusIsu($id = null)
	{
		$data['title'] = 'Manage';
		$data['pesan'] = $this->feedback_model->check_pesan();
		$data['landing'] = $this->landing_model->find($id);
		$data['current_user'] = $this->auth_model->current_user();
		$this->load->view('admin/manage/fokus_isu_new_form.php', $data);
	}

	public function edit($id = null)
	{
		$data['title'] = 'Manage';
		$data['pesan'] = $this->feedback_model->check_pesan();
		$data['current_user'] = $this->auth_model->current_user();
		$data['landing'] = $this->landing_model->find($id);
		$data['about'] = $this->about_model->find($id);
		$this->load->view('admin/manage/manage_edit_form.php', $data);
	}
	public function edit_filosofi($id_landing, $id_filosofi)
	{
		$data['title'] = 'Manage';
		$data['pesan'] = $this->feedback_model->check_pesan();
		$data['current_user'] = $this->auth_model->current_user();
		$data['landing'] = $this->landing_model->find($id_landing);
		$data['filosofi'] = $this->filosofi_model->find($id_filosofi);
		$this->load->view('admin/manage/filosofi_edit_form.php', $data);
	}
	public function edit_fokusIsu($id_landing, $id)
	{
		$data['title'] = 'Manage';
		$data['pesan'] = $this->feedback_model->check_pesan();
		$data['current_user'] = $this->auth_model->current_user();
		$data['landing'] = $this->landing_model->find($id_landing);
		$data['fokusIsu'] = $this->fokusIsu_model->find($id);
		$this->load->view('admin/manage/fokus_isu_edit_form.php', $data);
	}

	public function submit_add()
	{
		$data['title'] = 'Manage';
		$data['pesan'] = $this->feedback_model->check_pesan();

		$organisasi 	= $this->input->post('organisasi');
		$universitas 	= $this->input->post('universitas');
		$kabinet = $this->input->post('kabinet');
		$periode = $this->input->post('periode');
		$about = $this->input->post('about');

		// Generate unique id and slug
		$id = uniqid('', true);
		$slug = url_title($this->input->post('periode'), 'dash', TRUE);

		$logo_name = $kabinet . '-logo';
		$config['upload_path']          = FCPATH . '/public/img/logo/';
		$config['allowed_types']        = 'gif|jpg|jpeg|png|webp';
		$config['overwrite']						= true;
		$config['max_size']             = 1024;
		$config['max_width']            = 0;
		$config['max_height']           = 0;
		$config['file_name']            = $logo_name;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('logo')) {
			$data['upload_error'] = $this->upload->display_errors();
			return $this->load->view('admin/manage/manage_new_form.php', $data);
		} else {
			$uploaded_data = $this->upload->data();

			$data = array(
				'id' => $id,
				'organisasi' => $organisasi,
				'universitas' => $universitas,
				'kabinet' => $kabinet,
				'tahun_periode' => $periode,
				'about' => $about,
				'logo' => $uploaded_data['file_name'],
				'slug' => $slug
			);

			$saved = $this->landing_model->insert($data);
			if ($saved) {
				$this->session->set_flashdata('message', 'Landing page was created');
				return redirect('admin/manage/new_about/' . $id);
			}
		}
	}
	public function submit_about()
	{
		$data['title'] = 'Manage';
		$data['pesan'] = $this->feedback_model->check_pesan();

		$id_landing 	= $this->input->post('id_landing');
		$kabinet = $this->input->post('kabinet');
		$visi 	= $this->input->post('visi');
		$misi 	= $this->input->post('misi');
		$sejarah = $this->input->post('filosofi');

		$booklet_name =  'Booklet-' . $kabinet;
		$configBooklet = [
			'upload_path'         => FCPATH . '/public/file/',
			'allowed_types'       => 'pdf',
			'overwrite'						=> true,
			'max_size'            => 51200, // 50 MB maksimal
			'max_width'           => 0,
			'max_height'          => 0,
			'file_name'           => $booklet_name,
		];

		$this->load->library('upload', $configBooklet, 'booklet_upload');

		if (!empty($_FILES['booklet']['name'])) {
			if (!$this->booklet_upload->do_upload('booklet')) {
				$data['upload_error'] = $this->booklet_upload->display_errors();
				redirect('admin/manage/new_about/' . $id_landing . '?upload_booklet_error=' . urlencode($data['upload_error']));
			} else {
				$uploaded_booklet = $this->booklet_upload->data();
			}
		}

		$cover_name = $kabinet . '-cover';
		$configCover = [
			'upload_path'         => FCPATH . '/public/img/about/',
			'allowed_types'       => 'gif|jpg|jpeg|png|webp|webp',
			'overwrite'						=> true,
			'max_size'            => 1024, // 1 MB maksimal
			'max_width'           => 0,
			'max_height'          => 0,
			'file_name'           => $cover_name,
		];

		$this->load->library('upload', $configCover, 'cover_upload');

		if (!$this->cover_upload->do_upload('cover')) {
			$data['upload_error'] = $this->cover_upload->display_errors();
			redirect('admin/manage/new_about/' . $id_landing . '?upload_cover_error=' . urlencode($data['upload_error']));
		} else {
			$uploaded_cover = $this->cover_upload->data();
		}

		$data = array(
			'id_landing' => $id_landing,
			'visi' => $visi,
			'misi' => $misi,
			'filosofi' => $sejarah,
			'booklet' => $uploaded_booklet['file_name'],
			'img_cover' => $uploaded_cover['file_name']
		);

		$saved = $this->about_model->insert($data);
		if ($saved) {
			$this->session->set_flashdata('message', 'Landing page was created');
			return redirect('admin/pengurus/ketum_form/' . $id_landing);
		}
	}
	public function submit_edit()
	{
		$data['title'] = 'Manage';
		$data['pesan'] = $this->feedback_model->check_pesan();

		$id = $this->input->post('id');
		$organisasi  = $this->input->post('organisasi');
		$universitas  = $this->input->post('universitas');
		$kabinet = $this->input->post('kabinet');
		$periode = $this->input->post('periode');
		$visi = $this->input->post('visi');
		$misi = $this->input->post('misi');
		$about = $this->input->post('about');
		$sejarah = $this->input->post('filosofi');
		$logo = $this->input->post('logoname');
		$cover = $this->input->post('covername');
		$booklet = $this->input->post('bookletname');

		$data['landing'] = $this->landing_model->find($id);
		$data['about'] = $this->about_model->find($id);
		$slug = url_title($this->input->post('periode'), 'dash', TRUE);

		// Konfigurasi logo
		$logo_name = $kabinet . '-logo';
		$configLogo = [
			'upload_path'   => FCPATH . '/public/img/logo/',
			'allowed_types' => 'gif|jpg|jpeg|png|webp',
			'overwrite'     => true,
			'max_size'      => 1024,
			'max_width'     => 0,
			'max_height'    => 0,
			'file_name'     => $logo_name
		];
		$this->load->library('upload', $configLogo, 'logo_upload');

		// Upload logo
		if (!empty($_FILES['logo']['name'])) {
			if (!$this->logo_upload->do_upload('logo')) {
				$data['upload_logo_error'] = $this->logo_upload->display_errors();
				return $this->load->view('admin/manage_edit_form.php', $data);
			} else {
				$uploaded_logo = $this->logo_upload->data();
				$logo = $uploaded_logo['file_name'];
			}
		}
		// Konvigurasi bokklet
		$booklet_name =  'Booklet-' . $kabinet;
		$configBooklet = [
			'upload_path'         => FCPATH . '/public/file/',
			'allowed_types'       => 'pdf',
			'overwrite'						=> true,
			'max_size'            => 51200, // 50 MB maksimal
			'max_width'           => 0,
			'max_height'          => 0,
			'file_name'           => $booklet_name,
		];

		$this->load->library('upload', $configBooklet, 'booklet_upload');

		if (!empty($_FILES['booklet']['name'])) {
			if (!$this->booklet_upload->do_upload('booklet')) {
				$data['upload_error'] = $this->booklet_upload->display_errors();
				redirect('admin/manage/new_about/' . $id_landing . '?upload_booklet_error=' . urlencode($data['upload_error']));
			} else {
				$uploaded_booklet = $this->booklet_upload->data();
				$booklet = $uploaded_booklet['file_name'];
			}
		}

		// Konfigurasi cover
		$cover_name = $kabinet . '-cover';
		$configCover = [
			'upload_path'   => FCPATH . '/public/img/about/',
			'allowed_types' => 'gif|jpg|jpeg|png|webp|webp',
			'overwrite'     => true,
			'max_size'      => 1024,
			'max_width'     => 0,
			'max_height'    => 0,
			'file_name'     => $cover_name
		];
		$this->load->library('upload', $configCover, 'cover_upload');

		// Upload cover
		if (!empty($_FILES['cover']['name'])) {
			if (!$this->cover_upload->do_upload('cover')) {
				$data['upload_cover_error'] = $this->cover_upload->display_errors();
				return $this->load->view('admin/manage/manage_edit_form.php', $data);
			} else {
				$uploaded_cover = $this->cover_upload->data();
				$cover = $uploaded_cover['file_name'];
			}
		}

		// Gunakan file yang sesuai
		$data_landing = [
			'id'            => $id,
			'organisasi'    => $organisasi,
			'universitas'   => $universitas,
			'kabinet'       => $kabinet,
			'tahun_periode' => $periode,
			'about'         => $about,
			'logo'          => $logo,
			'slug'          => $slug
		];
		$data_about = [
			'id_landing'    => $id,
			'visi'          => $visi,
			'misi'          => $misi,
			'filosofi'      => $sejarah,
			'booklet'      => $booklet,
			'img_cover'     => $cover,
		];

		$updated_landing = $this->landing_model->update($data_landing);
		$updated_about = $this->about_model->update($data_about);

		if ($updated_landing && $updated_about) {
			$this->session->set_flashdata('message', 'Landing page was updated');
			redirect('admin/manage');
		}
	}
	public function submit_filosofi()
	{
		$data['title'] = 'Manage';
		$data['pesan'] = $this->feedback_model->check_pesan();

		$id_landing 	= $this->input->post('id_landing');
		$element = $this->input->post('element');
		$keterangan = $this->input->post('keterangan');

		$element_name = str_replace('.', '', ($id_landing . $element));
		$config['upload_path']          = FCPATH . '/public/img/logo/filosofi/';
		$config['allowed_types']        = 'gif|jpg|jpeg|png|webp';
		$config['overwrite']						= true;
		$config['max_size']             = 1024; // 1 MB maksimal
		$config['max_width']            = 3000;
		$config['max_height']           = 3000;
		$config['file_name']            = $element_name;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('element_logo')) {
			$data['upload_error'] = $this->upload->display_errors();
			redirect('admin/manage/new_filosofi/' . $id_landing . '?upload_error=' . urlencode($data['upload_error']));
		} else {
			$uploaded_data = $this->upload->data();

			$data = array(
				'id_landing' => $id_landing,
				'img_logo' => $uploaded_data['file_name'],
				'nama_element' => $element,
				'makna_element' => $keterangan
			);

			$saved = $this->filosofi_model->insert($data);
			if ($saved) {
				$this->session->set_flashdata('message', 'Filosofi logo was created');
				return redirect('admin/manage/filosofi/' . $id_landing);
			}
		}
	}

	public function submit_edit_filosofi()
	{
		$data['title'] = 'Manage';
		$data['pesan'] = $this->feedback_model->check_pesan();

		$id = $this->input->post('id');
		$id_landing 	= $this->input->post('id_landing');
		$elementName = $this->input->post('elementName');
		$element = $this->input->post('element');
		$keterangan = $this->input->post('keterangan');

		$element_name = str_replace('.', '', ($id_landing . $element));
		$config['upload_path']          = FCPATH . '/public/img/logo/filosofi/';
		$config['allowed_types']        = 'gif|jpg|jpeg|png|webp';
		$config['overwrite']						= true;
		$config['max_size']             = 1024; // 1 MB maksimal
		$config['max_width']            = 3000;
		$config['max_height']           = 3000;
		$config['file_name']            = $element_name;

		$this->load->library('upload', $config);

		if (!empty($_FILES['element_logo']['name'])) {
			if (!$this->upload->do_upload('element_logo')) {
				$data['upload_error'] = $this->upload->display_errors();
				redirect('admin/manage/edit_filosofi/' . $id_landing . '?upload_error=' . urlencode($data['upload_error']));
			} else {
				$uploaded_data = $this->upload->data();
				$elementName = $uploaded_data['file_name'];
			}
		}
		$data_update = array(
			'id_landing' => $id_landing,
			'img_logo' => $elementName,
			'nama_element' => $element,
			'makna_element' => $keterangan
		);

		$saved = $this->filosofi_model->update($id, $data_update);
		if ($saved) {
			$this->session->set_flashdata('message', 'Filosofi logo was updated');
			return redirect('admin/manage/filosofi/' . $id_landing);
		} else {
			$this->session->set_flashdata('message', 'Filosofi logo was updated');
			return redirect('admin/manage/filosofi/' . $id_landing);
		}
	}

	public function submit_fokusIsu()
	{
		$data['title'] = 'Manage';
		$data['pesan'] = $this->feedback_model->check_pesan();

		$id_landing 	= $this->input->post('id_landing');
		$fokus = $this->input->post('fokus');
		$poin = $this->input->post('poin');

		$data = array(
			'id_landing' => $id_landing,
			'lingkup' => $fokus,
			'poin_fokus' => $poin
		);

		$saved = $this->fokusIsu_model->insert($data);
		if ($saved) {
			$this->session->set_flashdata('message', 'Fokus Isu baru telah dibuat');
			return redirect('admin/manage/fokusIsu/' . $id_landing);
		}
	}

	public function submit_edit_fokusIsu()
	{
		$data['title'] = 'Manage';
		$data['pesan'] = $this->feedback_model->check_pesan();

		$id = $this->input->post('id');
		$id_landing 	= $this->input->post('id_landing');
		$fokus = $this->input->post('fokus');
		$poin = $this->input->post('poin');

		$data_update = array(
			'id_landing' => $id_landing,
			'lingkup' => $fokus,
			'poin_fokus' => $poin
		);

		$saved = $this->fokusIsu_model->update($id, $data_update);
		if ($saved > 0) {
			$this->session->set_flashdata('message', 'Fokus Isu was updated');
			return redirect('admin/manage/fokusIsu/' . $id_landing);
		}
	}

	public function delete_filosofi($id_landing, $id)
	{
		$update = $this->filosofi_model->delete($id);
		if ($update > 0) {
			$this->session->set_flashdata('message', 'Filosofi logo was deleted');
			return redirect('admin/manage/filosofi/' . $id_landing);
		}
	}
	public function delete_fokusIsu($id_landing, $id)
	{
		$update = $this->fokusIsu_model->delete($id);

		if ($update > 0) {
			$this->session->set_flashdata('message', 'Data was deleted');
			return redirect('admin/manage/fokusIsu/' . $id_landing);
		}
	}
	public function submit_status_landing()
	{
		$api_key = trim($this->input->post('api_key'));

		$update = $this->landing_model->update_status_landing($api_key);
		if ($update) {
			$this->session->set_flashdata('message', 'Update berhasil.');
			redirect(site_url('admin/manage'));
		}
	}
}
