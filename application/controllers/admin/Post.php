<?php defined('BASEPATH') or exit('No direct script access allowed');

class Post extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('article_model');
		$this->load->model('auth_model');
		$this->load->model('feedback_model');
		$this->load->model('kategori_model');
		if (!$this->auth_model->current_user()) {
			redirect('auth/login');
		}
	}

	public function index()
	{
		$data['current_user'] = $this->auth_model->current_user();

		$this->load->library('pagination');

		$data['title'] = 'Artikel';
		$data['pesan'] = $this->feedback_model->check_pesan();
		$config['base_url'] = site_url('/admin/post');
		$config['page_query_string'] = TRUE;
		$config['total_rows'] = $this->article_model->count();
		$config['per_page'] = 10;

		$config['full_tag_open'] = '<div class="flex gap-2 py-2 px-3">';
		$config['full_tag_close'] = '</div>';

		$this->pagination->initialize($config);
		$limit = $config['per_page'];
		$offset = html_escape($this->input->get('per_page'));

		$data['articles'] = $this->article_model->get($limit, $offset);

		$data['keyword'] = $this->input->get('keyword');

		if (!empty($this->input->get('keyword'))) {
			$data['articles'] = $this->article_model->search($data['keyword']);
		}

		if (count($data['articles']) <= 0 && !$this->input->get('keyword')) {
			$this->load->view('admin/post/post_empty.php', $data);
		} else {
			$this->load->view('admin/post/post_list.php', $data);
		}
	}

	public function kategori()
	{
		$data['current_user'] = $this->auth_model->current_user();

		$this->load->library('pagination');

		$data['title'] = 'Kategori';
		$data['pesan'] = $this->feedback_model->check_pesan();
		$config['page_query_string'] = TRUE;
		$config['total_rows'] = $this->kategori_model->count();
		$config['per_page'] = 10;

		$config['full_tag_open'] = '<div class="pagination">';
		$config['full_tag_close'] = '</div>';

		$this->pagination->initialize($config);
		$limit = $config['per_page'];
		$offset = html_escape($this->input->get('per_page'));

		$data['categories'] = $this->kategori_model->get($limit, $offset);

		$data['keyword'] = $this->input->get('keyword');

		if (!empty($this->input->get('keyword'))) {
			$data['categories'] = $this->kategori_model->search($data['keyword']);
		}

		if (count($data['categories']) <= 0 && !$this->input->get('keyword')) {
			$this->load->view('admin/post/kategori_empty.php', $data);
		} else {
			$this->load->view('admin/post/kategori_list.php', $data);
		}
	}

	public function new()
	{
		$data['title'] = 'Artikel';
		$data['current_user'] = $this->auth_model->current_user();
		$data['pesan'] = $this->feedback_model->check_pesan();
		$data['categories'] = $this->kategori_model->get();
		$this->load->library('form_validation');

		if ($this->input->method() === 'post') {
			// Lakukan validasi sebelum menyimpan ke model
			$rules = $this->article_model->rules();
			$this->form_validation->set_rules($rules);

			if ($this->form_validation->run() === FALSE) {
				return $this->load->view('admin/post/post_new_form.php', $data);
			}

			$kategori = $this->input->post('id_kategori');
			$title = $this->input->post('title');
			$slug = url_title($this->input->post('title'), 'dash', TRUE);

			$config['upload_path']          = FCPATH . '/upload/artikel/';
			$config['allowed_types']        = 'gif|jpg|jpeg|png|webp|webp';
			$config['overwrite']						= true;
			$config['max_size']             = 5120;
			$config['max_width']            = 0;
			$config['max_height']           = 0;

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('cover_artikel')) {
				$data['upload_error'] = $this->upload->display_errors();
				redirect('admin/post/new?upload_error=' . urlencode($data['upload_error']));
			} else {
				$uploaded_data = $this->upload->data();

				$article = [
					'id_kategori' => $kategori,
					'title' => $title,
					'slug' => $slug,
					'content' => $this->input->post('content'),
					'gambar' => $uploaded_data['file_name'],
					'keterangan_gambar' => $this->input->post('keterangan'),
					'draft' => $this->input->post('draft'),
					'created_at' => $this->input->post('waktu')
				];

				$saved = $this->article_model->insert($article);

				if ($saved) {
					$this->session->set_flashdata('message', 'Article was created');
					return redirect('admin/post');
				}
			}
		}

		$this->load->view('admin/post/post_new_form.php', $data);
	}

	public function new_kategori()
	{
		$data['title'] = 'Kategori';
		$data['current_user'] = $this->auth_model->current_user();
		$data['pesan'] = $this->feedback_model->check_pesan();

		$this->load->view('admin/post/kategori_new_form.php', $data);
	}

	public function submit_new_kategori()
	{
		$data['title'] = 'Kategori';
		$data['current_user'] = $this->auth_model->current_user();
		$data['pesan'] = $this->feedback_model->check_pesan();

		$nama_kategori = $this->input->post('nama_kategori');
		$sidebar = $this->input->post('urutan');
		$uploaded_data = '';
		$slug = str_replace(' ', '-', strtolower($this->input->post('nama_kategori')));

		$cover_name = 'cover-' . $nama_kategori;
		$config['upload_path']          = FCPATH . '/upload/artikel/';
		$config['allowed_types']        = 'gif|jpg|jpeg|png|webp|webp';
		$config['overwrite']						= true;
		$config['max_size']             = 1024;
		$config['max_width']            = 0;
		$config['max_height']           = 0;
		$config['file_name']            = $cover_name;

		$this->load->library('upload', $config);

		if (!empty($_FILES['cover_kategori']['name'])) {
			if (!$this->upload->do_upload('cover_kategori')) {
				$data['upload_error'] = $this->upload->display_errors();
				redirect('admin/post/new_kategori?upload_error=' . urlencode($data['upload_error']));
			} else {
				$uploaded_data = $this->upload->data();
			}
		}

		$data = array(
			'nama_kategori' => $nama_kategori,
			'kategori_seo' => $slug,
			'sidebar' => $sidebar,
			'gambar_utama' => $uploaded_data['file_name']
		);

		$saved = $this->kategori_model->insert($data);

		if ($saved) {
			$this->session->set_flashdata('message', 'Category was created');
			return redirect('admin/post/kategori');
		}
	}

	public function edit($id = null)
	{
		$data['title'] = 'Artikel';
		$data['current_user'] = $this->auth_model->current_user();
		$data['pesan'] = $this->feedback_model->check_pesan();
		$data['article'] = $this->article_model->find($id);
		$data['categories'] = $this->kategori_model->get();
		$this->load->library('form_validation');

		if (!$data['article'] || !$id) {
			show_404();
		}
		$kategori = $this->input->post('id_kategori');
		$title = $this->input->post('title');
		$slug = url_title($this->input->post('title'), 'dash', TRUE);
		$gambarName = $this->input->post('gambarName');

		if ($this->input->method() === 'post') {
			// lakukan validasi data seblum simpan ke model
			$rules = $this->article_model->rules();
			$this->form_validation->set_rules($rules);

			if ($this->form_validation->run() === FALSE) {
				return $this->load->view('admin/post_edit_form.php', $data);
			}

			$config['upload_path']          = FCPATH . '/upload/artikel/';
			$config['allowed_types']        = 'gif|jpg|jpeg|png|webp|webp';
			$config['overwrite']						= true;
			$config['max_size']             = 5120;
			$config['max_width']            = 0;
			$config['max_height']           = 0;

			$this->load->library('upload', $config);

			if (!empty($_FILES['cover_artikel']['name'])) {
				if (!$this->upload->do_upload('cover_artikel')) {
					$data['upload_error'] = $this->upload->display_errors();
					return $this->load->view('admin/post/post_edit_form.php', $data);
				} else {
					$uploaded_data = $this->upload->data();
					$gambarName = $uploaded_data['file_name'];
				}
			}
			$article = [
				'id' => $id,
				'id_kategori' => $kategori,
				'title' => $title,
				'slug' => $slug,
				'content' => $this->input->post('content'),
				'gambar' => $gambarName,
				'keterangan_gambar' => $this->input->post('keterangan'),
				'draft' => $this->input->post('draft'),
				'created_at' => $this->input->post('waktu')
			];
			$updated = $this->article_model->update($article);
			if ($updated) {
				$this->session->set_flashdata('message', 'Article was updated');
				redirect('admin/post');
			}
		}

		$this->load->view('admin/post/post_edit_form.php', $data);
	}

	public function edit_kategori($id = null)
	{
		$data['title'] = 'Kategori';
		$data['current_user'] = $this->auth_model->current_user();
		$data['pesan'] = $this->feedback_model->check_pesan();
		$data['kategori'] = $this->kategori_model->find($id);

		$this->load->view('admin/post/kategori_edit_form.php', $data);
	}

	public function submit_edit_kategori()
	{
		$data['title'] = 'Kategori';
		$data['current_user'] = $this->auth_model->current_user();
		$data['pesan'] = $this->feedback_model->check_pesan();

		$id = $this->input->post('id_kategori');
		$nama_kategori = $this->input->post('nama_kategori');
		$sidebar = $this->input->post('urutan');
		$nameCover_kategori = $this->input->post('nameCover_kategori');
		$slug = str_replace(' ', '-', strtolower($this->input->post('nama_kategori')));

		$data['kategori'] = $this->kategori_model->find($id);

		$cover_name = 'cover-' . $nama_kategori;
		$config['upload_path']          = FCPATH . '/upload/artikel/';
		$config['allowed_types']        = 'gif|jpg|jpeg|png|webp|webp';
		$config['overwrite']						= true;
		$config['max_size']             = 1024;
		$config['max_width']            = 0;
		$config['max_height']           = 0;
		$config['file_name']            = $cover_name;

		$this->load->library('upload', $config);

		if (!empty($_FILES['cover_kategori']['name'])) {
			if (!$this->upload->do_upload('cover_kategori')) {
				$data['upload_error'] = $this->upload->display_errors();
				return $this->load->view('admin/post/kategori_edit_form.php', $data);
			} else {
				$uploaded_data = $this->upload->data();
				$nameCover_kategori = $uploaded_data['file_name'];
			}
		}

		$new_data = [
			'nama_kategori' => $this->input->post('nama_kategori'),
			'kategori_seo' => $slug,
			'sidebar' => $sidebar,
			'gambar_utama' => $nameCover_kategori
		];

		$saved = $this->kategori_model->update($id, $new_data);

		if ($saved) {
			$this->session->set_flashdata('message', 'Category was updated');
			return redirect('admin/post/kategori');
		}
	}

	public function delete($id = null)
	{
		if (!$id) {
			show_404();
		}

		$deleted = $this->article_model->delete($id);
		if ($deleted) {
			$this->session->set_flashdata('message', 'Article was deleted');
			redirect('admin/post');
		}
	}

	public function delete_kategori($id = null)
	{
		if (!$id) {
			show_404();
		}

		$deleted = $this->kategori_model->delete($id);
		if ($deleted) {
			$this->session->set_flashdata('message', 'Category was deleted');
			redirect('admin/post/kategori');
		}
	}

	public function submit_status_kategori()
	{
		$api_key = trim($this->input->post('api_key'));
		$status = $this->input->post('status_kategori');

		if ($status) {
			$q = 'true';
		} else {
			$q = 'false';
		}

		$data = array(
			'status' => $q
		);

		$update = $this->kategori_model->update_status_kategori($api_key, $data);
		if ($update) {
			$this->session->set_flashdata('message', 'Update berhasil.');
			redirect(site_url('admin/post/kategori'));
		}
	}
}
