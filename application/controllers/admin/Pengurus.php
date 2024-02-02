<?php defined('BASEPATH') or exit('No direct script access allowed');

class pengurus extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('landing_model');
		$this->load->model('pengurus_model');
		$this->load->model('auth_model');
		$this->load->model('feedback_model');
		if (!$this->auth_model->current_user()) {
			redirect('auth/login');
		}
	}

	public function index()
	{
		$data['title'] = 'Pengurus';
		$data['pesan'] = $this->feedback_model->check_pesan();
		$data['kabinets'] = $this->landing_model->get();
		$data['kabinet_active'] = $this->landing_model->getLandingBy('status', 'true');
		$data['selectedLanding'] = $this->input->get('kabinet');
		$data['data_presWapres'] = $this->pengurus_model->findPositionByIdLanding('1', $data['selectedLanding']);
		$data['data_koordinator'] = $this->pengurus_model->findPositionByIdLanding('2', $data['selectedLanding']);

		$this->load->view('admin/pengurus/pengurus_list.php', $data);
	}

	public function ketum_form($id = null)
	{
		$data['title'] = 'Pres & Wapres';
		$data['pesan'] = $this->feedback_model->check_pesan();
		$data['landing'] = $this->landing_model->find($id);

		$this->load->view('admin/pengurus/addKetum.php', $data);
	}
	public function menko_form($id = null)
	{
		$data['title'] = 'Menteri Koordinator';
		$data['pesan'] = $this->feedback_model->check_pesan();
		$data['landing'] = $this->landing_model->find($id);

		$this->load->view('admin/pengurus/addMenko.php', $data);
	}
	public function menteri_form($id = null)
	{
		$data['title'] = 'Menteri';
		$data['pesan'] = $this->feedback_model->check_pesan();
		$data['landing'] = $this->landing_model->find($id);
		$data['coordinators'] = $this->pengurus_model->findPositionByIdLanding('2', $id);

		$this->load->view('admin/pengurus/addMenteri.php', $data);
	}
	public function staff_form($id = null)
	{
		$data['title'] = 'Staff';
		$data['pesan'] = $this->feedback_model->check_pesan();
		$data['landing'] = $this->landing_model->find($id);
		$data['coordinators'] = $this->pengurus_model->findPositionByIdLanding('3', $id);

		$this->load->view('admin/pengurus/addStaff.php', $data);
	}

	public function submit_addKetum()
	{
		$data['title'] = 'Pengurus';
		$data['pesan'] = $this->feedback_model->check_pesan();

		$id_landing = $this->input->post('id_landing');
		$kabinet = $this->input->post('kabinet');
		$namaKetum = $this->input->post('namaKetum');
		$prodiKetum = $this->input->post('prodiKetum');
		$angkatanKetum = $this->input->post('angkatanKetum');
		$instagramKetum = $this->input->post('igKetum');
		$tiktokKetum = $this->input->post('ttKetum');
		$facebookKetum = $this->input->post('fbKetum');
		$twiterKetum = $this->input->post('twiterKetum');

		$namaWaketum = $this->input->post('namaWaketum');
		$prodiWaketum = $this->input->post('prodiWaketum');
		$angkatanWaketum = $this->input->post('angkatanWaketum');
		$instagramWaketum = $this->input->post('igWaketum');
		$tiktokWaketum = $this->input->post('ttWaketum');
		$facebookWaketum = $this->input->post('fbWaketum');
		$twiterWaketum = $this->input->post('twiterWaketum');

		$data['landing'] = $this->landing_model->find($id_landing);

		$foto_ketum = $kabinet . '-' . $namaKetum;
		$configKetum = [
			'upload_path'   => FCPATH . '/public/img/pengurus/',
			'allowed_types' => 'gif|jpg|jpeg|png|webp',
			'overwrite'     => true,
			'max_size'      => 1024,
			'max_width'     => 0,
			'max_height'    => 0,
			'file_name'     => $foto_ketum
		];
		$this->load->library('upload', $configKetum, 'ketum_upload');
		if (!empty($_FILES['fotoKetum']['name'])) {
			if (!$this->ketum_upload->do_upload('fotoKetum')) {
				$data['upload_error'] = $this->ketum_upload->display_errors();
				redirect('admin/pengurus/ketum_form/' . $id_landing . '?upload_error=' . urlencode($data['upload_error']));
			} else {
				$uploaded_ketum = $this->ketum_upload->data();
			}
		}
		//config Waketum
		$foto_waketum = $kabinet . '-' . $namaWaketum;
		$configKetum = [
			'upload_path'   => FCPATH . '/public/img/pengurus/',
			'allowed_types' => 'gif|jpg|jpeg|png|webp',
			'overwrite'     => true,
			'max_size'      => 1024,
			'max_width'     => 0,
			'max_height'    => 0,
			'file_name'     => $foto_waketum
		];
		$this->load->library('upload', $configKetum, 'waketum_upload');
		if (!empty($_FILES['fotoWaketum']['name'])) {
			if (!$this->waketum_upload->do_upload('fotoWaketum')) {
				$data['upload_error'] = $this->waketum_upload->display_errors();
				redirect('admin/pengurus/ketum_form/' . $id_landing . '?upload_error=' . urlencode($data['upload_error']));
			} else {
				$uploaded_waketum = $this->waketum_upload->data();
			}
		}
		$dataKetum = array(
			'id_landing' => $id_landing,
			'level' => '1',
			'nama' => $namaKetum,
			'jabatan' => 'Presiden',
			'prodi' => $prodiKetum,
			'angkatan' => $angkatanKetum,
			'foto' => $uploaded_ketum['file_name'],
			'ig' => $instagramKetum,
			'tiktok' => $tiktokKetum,
			'fb' => $facebookKetum,
			'twiter' => $twiterKetum,
		);

		$dataWaketum = array(
			'id_landing' => $id_landing,
			'level' => '1',
			'nama' => $namaWaketum,
			'jabatan' => 'Wakil Presiden',
			'prodi' => $prodiWaketum,
			'angkatan' => $angkatanWaketum,
			'foto' => $uploaded_waketum['file_name'],
			'ig' => $instagramWaketum,
			'tiktok' => $tiktokWaketum,
			'fb' => $facebookWaketum,
			'twiter' => $twiterWaketum,
		);

		$saved_ketum = $this->pengurus_model->insert($dataKetum);
		$saved_waketum = $this->pengurus_model->insert($dataWaketum);

		if ($saved_ketum && $saved_waketum) {
			$this->session->set_flashdata('message', 'Kabinet baru telah ditambahkan');
			return redirect('/admin/manage');
		}
	}
	public function submit_addMenko()
	{
		$data['title'] = 'Pengurus';
		$data['pesan'] = $this->feedback_model->check_pesan();

		$id_landing = $this->input->post('id_landing');
		$kabinet = $this->input->post('kabinet');
		$nama = $this->input->post('nama');
		$jabatan = $this->input->post('jabatan');
		$about = $this->input->post('about');
		$prodi = $this->input->post('prodi');
		$angkatan = $this->input->post('angkatan');
		$instagram = $this->input->post('ig');
		$tiktok = $this->input->post('tt');
		$facebook = $this->input->post('fb');
		$twiter = $this->input->post('twiter');

		$data['landing'] = $this->landing_model->find($id_landing);

		$foto_name = $kabinet . '-' . $nama;
		$config['upload_path']          = FCPATH . '/public/img/pengurus/';
		$config['allowed_types']        = 'gif|jpg|jpeg|png|webp|webp';
		$config['overwrite']						= true;
		$config['max_size']             = 1024;
		$config['max_width']            = 0;
		$config['max_height']           = 0;
		$config['file_name']            = $foto_name;

		$this->load->library('upload', $config);

		if (!empty($_FILES['foto']['name'])) {
			if (!$this->upload->do_upload('foto')) {
				$data['upload_error'] = $this->upload->display_errors();
				redirect('admin/pengurus/menko_form/' . $id_landing . '?upload_error=' . urlencode($data['upload_error']));
			} else {
				$uploaded_data = $this->upload->data();
			}
		}

		$data = array(
			'id_landing' => $id_landing,
			'level' => '2',
			'nama' => $nama,
			'jabatan' => 'Menko ' . $jabatan,
			'about' => $about,
			'prodi' => $prodi,
			'angkatan' => $angkatan,
			'foto' => $uploaded_data['file_name'],
			'ig' => $instagram,
			'tiktok' => $tiktok,
			'fb' => $facebook,
			'twiter' => $twiter,
		);

		$saved = $this->pengurus_model->insert($data);

		if ($saved) {
			$this->session->set_flashdata('message', 'Pengurus baru telah ditambahkan');
			return redirect('/admin/pengurus/index?kabinet=' . $id_landing);
		}
	}
	public function submit_addMenteri()
	{
		$data['title'] = 'Pengurus';
		$data['pesan'] = $this->feedback_model->check_pesan();

		$id_landing = $this->input->post('id_landing');
		$kabinet = $this->input->post('kabinet');
		$nama = $this->input->post('nama');
		$jabatan_ref = $this->input->post('jabatan_ref');
		$jabatan = $this->input->post('jabatan');
		$about = $this->input->post('about');
		$prodi = $this->input->post('prodi');
		$angkatan = $this->input->post('angkatan');
		$instagram = $this->input->post('ig');
		$tiktok = $this->input->post('tt');
		$facebook = $this->input->post('fb');
		$twiter = $this->input->post('twiter');

		$data['landing'] = $this->landing_model->find($id_landing);

		$foto_name = $kabinet . '-' . $nama;
		$config['upload_path']          = FCPATH . '/public/img/pengurus/';
		$config['allowed_types']        = 'gif|jpg|jpeg|png|webp';
		$config['overwrite']						= true;
		$config['max_size']             = 1024;
		$config['max_width']            = 0;
		$config['max_height']           = 0;
		$config['file_name']            = $foto_name;

		$this->load->library('upload', $config);
		if (!empty($_FILES['foto']['name'])) {
			if (!$this->upload->do_upload('foto')) {
				$data['upload_error'] = $this->upload->display_errors();
				redirect('admin/pengurus/menteri_form/' . $id_landing . '?upload_error=' . urlencode($data['upload_error']));
			} else {
				$uploaded_data = $this->upload->data();
			}
		}

		$data = array(
			'id_ref' => $jabatan_ref,
			'id_landing' => $id_landing,
			'level' => '3',
			'nama' => $nama,
			'jabatan' => 'Menteri ' . $jabatan,
			'about' => $about,
			'prodi' => $prodi,
			'angkatan' => $angkatan,
			'foto' => $uploaded_data['file_name'],
			'ig' => $instagram,
			'tiktok' => $tiktok,
			'fb' => $facebook,
			'twiter' => $twiter,
		);

		$saved = $this->pengurus_model->insert($data);

		if ($saved) {
			$this->session->set_flashdata('message', 'Pengurus baru telah ditambahkan');
			return redirect('/admin/pengurus/index?kabinet=' . $id_landing);
		}
	}
	public function submit_addStaff()
	{
		$data['title'] = 'Pengurus';
		$data['pesan'] = $this->feedback_model->check_pesan();

		$id_landing = $this->input->post('id_landing');
		$kabinet = $this->input->post('kabinet');
		$nama = $this->input->post('nama');
		$jabatan_ref = $this->input->post('jabatan_ref');
		$jabatan = $this->input->post('jabatan');
		$prodi = $this->input->post('prodi');
		$angkatan = $this->input->post('angkatan');
		$instagram = $this->input->post('ig');
		$tiktok = $this->input->post('tt');
		$facebook = $this->input->post('fb');
		$twiter = $this->input->post('twiter');

		$data['landing'] = $this->landing_model->find($id_landing);

		$foto_name = $kabinet . '-' . $nama;
		$config['upload_path']          = FCPATH . '/public/img/pengurus/';
		$config['allowed_types']        = 'gif|jpg|jpeg|png|webp';
		$config['overwrite']						= true;
		$config['max_size']             = 1024;
		$config['max_width']            = 0;
		$config['max_height']           = 0;
		$config['file_name']            = $foto_name;

		$this->load->library('upload', $config);
		if (!empty($_FILES['foto']['name'])) {
			if (!empty($_FILES['foto']['name'])) {
				if (!$this->upload->do_upload('foto')) {
					$data['upload_error'] = $this->upload->display_errors();
					redirect('admin/pengurus/staff_form/' . $id_landing . '?upload_error=' . urlencode($data['upload_error']));
				} else {
					$uploaded_data = $this->upload->data();
				}
			}
		}

		$data = array(
			'id_ref' => $jabatan_ref,
			'id_landing' => $id_landing,
			'level' => '4',
			'nama' => $nama,
			'jabatan' => 'Staff' . $jabatan,
			'prodi' => $prodi,
			'angkatan' => $angkatan,
			'foto' => $uploaded_data['file_name'],
			'ig' => $instagram,
			'tiktok' => $tiktok,
			'fb' => $facebook,
			'twiter' => $twiter,
		);

		$saved = $this->pengurus_model->insert($data);

		if ($saved) {
			$this->session->set_flashdata('message', 'Pengurus baru telah ditambahkan');
			return redirect('/admin/pengurus/index?kabinet=' . $id_landing);
		}
	}

	public function ketum_edit($id_landing, $id = null)
	{
		$data['title'] = 'Ketua & Wakil ketua';
		$data['pesan'] = $this->feedback_model->check_pesan();
		$data['landing'] = $this->landing_model->find($id_landing);
		$data['pengurus'] = $this->pengurus_model->find($id);

		$this->load->view('admin/pengurus/editKetum.php', $data);
	}
	public function menko_edit($id_landing, $id = null)
	{
		$data['title'] = 'Menteri Koordinator';
		$data['pesan'] = $this->feedback_model->check_pesan();
		$data['landing'] = $this->landing_model->find($id_landing);
		$data['pengurus'] = $this->pengurus_model->find($id);

		$this->load->view('admin/pengurus/editMenko.php', $data);
	}
	public function menteri_edit($id_landing, $id = null)
	{
		$data['title'] = 'Menteri';
		$data['pesan'] = $this->feedback_model->check_pesan();
		$data['landing'] = $this->landing_model->find($id_landing);
		$data['coordinators'] = $this->pengurus_model->findPositionByIdLanding('2', $id_landing);
		$data['pengurus'] = $this->pengurus_model->find($id);

		$this->load->view('admin/pengurus/editMenteri.php', $data);
	}
	public function staff_edit($id_landing, $id = null)
	{
		$data['title'] = 'Staff';
		$data['pesan'] = $this->feedback_model->check_pesan();
		$data['landing'] = $this->landing_model->find($id_landing);
		$data['coordinators'] = $this->pengurus_model->findPositionByIdLanding('3', $id_landing);
		$data['pengurus'] = $this->pengurus_model->find($id);

		$this->load->view('admin/pengurus/editStaff.php', $data);
	}

	public function submit_editKetum()
	{
		$data['title'] = 'Pengurus';
		$data['pesan'] = $this->feedback_model->check_pesan();

		$id = $this->input->post('id_pengurus');
		$id_landing = $this->input->post('id_landing');
		$kabinet = $this->input->post('kabinet');
		$nama = $this->input->post('namaKetum');
		$prodi = $this->input->post('prodiKetum');
		$angkatan = $this->input->post('angkatanKetum');
		$fotoName = $this->input->post('nama_fotoKetum');
		$instagram = $this->input->post('igKetum');
		$tiktok = $this->input->post('ttKetum');
		$facebook = $this->input->post('fbKetum');
		$twiter = $this->input->post('twiterKetum');

		$data['landing'] = $this->landing_model->find($id_landing);
		$data['pengurus'] = $this->pengurus_model->find($id);

		$foto_name = $kabinet . '-' . $nama;
		$config['upload_path']          = FCPATH . '/public/img/pengurus/';
		$config['allowed_types']        = 'gif|jpg|jpeg|png|webp';
		$config['overwrite']						= true;
		$config['max_size']             = 1024;
		$config['max_width']            = 0;
		$config['max_height']           = 0;
		$config['file_name']            = $foto_name;

		$this->load->library('upload', $config);

		if (!empty($_FILES['fotoKetum']['name'])) {
			if (!$this->upload->do_upload('fotoKetum')) {
				$data['upload_error'] = $this->upload->display_errors();
				return $this->load->view('admin/pengurus/editKetum.php', $data);
			} else {
				$uploaded_data = $this->upload->data();
				$fotoName = $uploaded_data['file_name'];
			}
		}
		$data_update = array(
			'id' => $id,
			'id_landing' => $id_landing,
			'level' => '1',
			'nama' => $nama,
			'prodi' => $prodi,
			'angkatan' => $angkatan,
			'foto' => $fotoName,
			'ig' => $instagram,
			'tiktok' => $tiktok,
			'fb' => $facebook,
			'twiter' => $twiter,
		);

		$saved = $this->pengurus_model->update($data_update);

		if ($saved) {
			$this->session->set_flashdata('message', 'Profil pengurus telah diupdate');
			return redirect('/admin/pengurus/index?kabinet=' . $id_landing);
		}
	}
	public function submit_editMenko()
	{
		$data['title'] = 'Pengurus';
		$data['pesan'] = $this->feedback_model->check_pesan();

		$id = $this->input->post('id_pengurus');
		$id_landing = $this->input->post('id_landing');
		$kabinet = $this->input->post('kabinet');
		$nama = $this->input->post('nama');
		$jabatan = $this->input->post('jabatan');
		$about = $this->input->post('about');
		$prodi = $this->input->post('prodi');
		$angkatan = $this->input->post('angkatan');
		$fotoName = $this->input->post('fotoName');
		$instagram = $this->input->post('ig');
		$tiktok = $this->input->post('tt');
		$facebook = $this->input->post('fb');
		$twiter = $this->input->post('twiter');

		$data['landing'] = $this->landing_model->find($id_landing);
		$data['pengurus'] = $this->pengurus_model->find($id);

		$foto_name = $kabinet . '-' . $nama;
		$config['upload_path']          = FCPATH . '/public/img/pengurus/';
		$config['allowed_types']        = 'gif|jpg|jpeg|png|webp';
		$config['overwrite']						= true;
		$config['max_size']             = 1024;
		$config['max_width']            = 0;
		$config['max_height']           = 0;
		$config['file_name']            = $foto_name;

		$this->load->library('upload', $config);

		if (!empty($_FILES['foto']['name'])) {
			if (!$this->upload->do_upload('foto')) {
				$data['upload_error'] = $this->upload->display_errors();
				return $this->load->view('admin/pengurus/editMenko.php', $data);
			} else {
				$uploaded_data = $this->upload->data();
				$fotoName = $uploaded_data['file_name'];
			}
		}
		$data_update = array(
			'id' => $id,
			'id_landing' => $id_landing,
			'level' => '2',
			'nama' => $nama,
			'jabatan' => $jabatan,
			'about' => $about,
			'prodi' => $prodi,
			'angkatan' => $angkatan,
			'foto' => $fotoName,
			'ig' => $instagram,
			'tiktok' => $tiktok,
			'fb' => $facebook,
			'twiter' => $twiter,
		);

		$saved = $this->pengurus_model->update($data_update);

		if ($saved) {
			$this->session->set_flashdata('message', 'Profil pengurus telah diupdate');
			return redirect('/admin/pengurus/index?kabinet=' . $id_landing);
		}
	}
	public function submit_editMenteri()
	{
		$data['title'] = 'Pengurus';
		$data['pesan'] = $this->feedback_model->check_pesan();

		$id = $this->input->post('id_pengurus');
		$id_landing = $this->input->post('id_landing');
		$kabinet = $this->input->post('kabinet');
		$nama = $this->input->post('nama');
		$jabatan = $this->input->post('jabatan');
		$about = $this->input->post('about');
		$prodi = $this->input->post('prodi');
		$angkatan = $this->input->post('angkatan');
		$fotoName = $this->input->post('fotoName');
		$instagram = $this->input->post('ig');
		$tiktok = $this->input->post('tt');
		$facebook = $this->input->post('fb');
		$twiter = $this->input->post('twiter');

		$data['landing'] = $this->landing_model->find($id_landing);
		$data['pengurus'] = $this->pengurus_model->find($id);

		$foto_name = $kabinet . '-' . $nama;
		$config['upload_path']          = FCPATH . '/public/img/pengurus/';
		$config['allowed_types']        = 'gif|jpg|jpeg|png|webp';
		$config['overwrite']						= true;
		$config['max_size']             = 1024;
		$config['max_width']            = 0;
		$config['max_height']           = 0;
		$config['file_name']            = $foto_name;

		$this->load->library('upload', $config);

		if (!empty($_FILES['foto']['name'])) {
			if (!$this->upload->do_upload('foto')) {
				$data['upload_error'] = $this->upload->display_errors();
				return $this->load->view('admin/pengurus/editMenteri.php', $data);
			} else {
				$uploaded_data = $this->upload->data();
				$fotoName = $uploaded_data['file_name'];
			}
		}
		$data_update = array(
			'id' => $id,
			'id_landing' => $id_landing,
			'level' => '3',
			'nama' => $nama,
			'jabatan' => $jabatan,
			'about' => $about,
			'prodi' => $prodi,
			'angkatan' => $angkatan,
			'foto' => $fotoName,
			'ig' => $instagram,
			'tiktok' => $tiktok,
			'fb' => $facebook,
			'twiter' => $twiter,
		);

		$saved = $this->pengurus_model->update($data_update);

		if ($saved) {
			$this->session->set_flashdata('message', 'Profil pengurus telah diupdate');
			return redirect('/admin/pengurus/index?kabinet=' . $id_landing);
		}
	}
	public function submit_editStaff()
	{
		$data['title'] = 'Pengurus';
		$data['pesan'] = $this->feedback_model->check_pesan();

		$id = $this->input->post('id_pengurus');
		$id_landing = $this->input->post('id_landing');
		$kabinet = $this->input->post('kabinet');
		$nama = $this->input->post('nama');
		$prodi = $this->input->post('prodi');
		$angkatan = $this->input->post('angkatan');
		$fotoName = $this->input->post('fotoName');
		$instagram = $this->input->post('ig');
		$tiktok = $this->input->post('tt');
		$facebook = $this->input->post('fb');
		$twiter = $this->input->post('twiter');

		$data['landing'] = $this->landing_model->find($id_landing);
		$data['pengurus'] = $this->pengurus_model->find($id);

		$foto_name = $kabinet . '-' . $nama;
		$config['upload_path']          = FCPATH . '/public/img/pengurus/';
		$config['allowed_types']        = 'gif|jpg|jpeg|png|webp';
		$config['overwrite']						= true;
		$config['max_size']             = 1024;
		$config['max_width']            = 0;
		$config['max_height']           = 0;
		$config['file_name']            = $foto_name;

		$this->load->library('upload', $config);

		if (!empty($_FILES['foto']['name'])) {
			if (!$this->upload->do_upload('foto')) {
				$data['upload_error'] = $this->upload->display_errors();
				return $this->load->view('admin/pengurus/editStaff.php', $data);
			} else {
				$uploaded_data = $this->upload->data();
				$fotoName = $uploaded_data['file_name'];
			}
		}
		$data_update = array(
			'id' => $id,
			'id_landing' => $id_landing,
			'level' => '4',
			'nama' => $nama,
			'prodi' => $prodi,
			'angkatan' => $angkatan,
			'foto' => $fotoName,
			'ig' => $instagram,
			'tiktok' => $tiktok,
			'fb' => $facebook,
			'twiter' => $twiter,
		);

		$saved = $this->pengurus_model->update($data_update);

		if ($saved) {
			$this->session->set_flashdata('message', 'Profil pengurus telah diupdate');
			return redirect('/admin/pengurus/index?kabinet=' . $id_landing);
		}
	}
	public function submit_editPosition()
	{
		$id = $this->input->post('id_pengurus');
		$id_landing = $this->input->post('id_landing');
		$jabatan = $this->input->post('jabatan');
		$jabatan_ref = $this->input->post('jabatan_ref');

		$data['landing'] = $this->landing_model->find($id_landing);
		$data['pengurus'] = $this->pengurus_model->find($id);

		$data_update = array(
			'id' => $id,
			'id_ref' => $jabatan_ref,
			'id_landing' => $id_landing,
			'jabatan' => $jabatan,
		);

		$saved = $this->pengurus_model->update($data_update);

		if ($saved) {
			$this->session->set_flashdata('message', 'Jabatan pengurus telah diupdate');
			return redirect('/admin/pengurus/index?kabinet=' . $id_landing);
		}
	}

	public function delete($id = null, $id_landing)
	{
		if (!$id) {
			show_404();
		}

		$deleted = $this->pengurus_model->delete($id);
		if ($deleted) {
			$this->session->set_flashdata('message', 'Person was deleted');
			redirect('/admin/pengurus/index?kabinet=' . $id_landing);
		}
	}

	public function remove_avatar($id, $id_landing, $foto_name, $level_member)
	{
		$data['title'] = 'Settings';
		$data['pesan'] = $this->feedback_model->check_pesan();

		// hapus file
		array_map('unlink', glob(FCPATH . "/public/img/pengurus/$foto_name.*"));

		// set avatar menjadi null
		$new_data = [
			'id' => $id,
			'foto' => null,
		];

		if ($this->pengurus_model->update($new_data)) {
			$this->session->set_flashdata('message', 'Foto dihapus!');
			if ($level_member == '1') {
				redirect(site_url('admin/pengurus/ketum_edit/' . $id_landing . '/' . $id));
			} elseif ($level_member == '2') {
				redirect(site_url('admin/pengurus/menko_edit/' . $id_landing . '/' . $id));
			} elseif ($level_member == '3') {
				redirect(site_url('admin/pengurus/menteri_edit/' . $id_landing . '/' . $id));
			} else {
				redirect(site_url('admin/pengurus/staff_edit/' . $id_landing . '/' . $id));
			}
		} else {
			$this->session->set_flashdata('message', 'Gagal menghapus foto.');
			if ($level_member == '1') {
				redirect(site_url('admin/pengurus/ketum_edit/' . $id_landing . '/' . $id));
			} elseif ($level_member == '2') {
				redirect(site_url('admin/pengurus/menko_edit/' . $id_landing . '/' . $id));
			} elseif ($level_member == '3') {
				redirect(site_url('admin/pengurus/menteri_edit/' . $id_landing . '/' . $id));
			} else {
				redirect(site_url('admin/pengurus/staff_edit/' . $id_landing . '/' . $id));
			}
		}
	}
}
