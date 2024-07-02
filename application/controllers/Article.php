<?php defined('BASEPATH') or exit('No direct script access allowed');

class Article extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('landing_model');
		$this->load->model('identitas_model');
		$this->load->model('article_model');
		$this->load->model('service_model');
	}

	public function index()
	{
		$this->load->library('pagination');

		$config['base_url'] = site_url('/article');
		$config['page_query_string'] = TRUE;
		$config['total_rows'] = $this->article_model->get_published_count();
		$config['per_page'] = 2;

		$config['full_tag_open'] = '<div class="pagination">';
		$config['full_tag_close'] = '</div>';

		$this->pagination->initialize($config);
		$limit = $config['per_page'];
		$offset = html_escape($this->input->get('per_page'));

		$data['articles'] = $this->article_model->get_published($limit, $offset);

		if (count($data['articles']) > 0) {
			$this->load->view('articles/list_article.php', $data);
		} else {
			$this->load->view('articles/empty_article.php');
		}
	}

	public function show($slug = null)
	{
		if (!$slug) {
			show_404();
		}

		$data['identitas'] = $this->identitas_model->get();
		$data['landing'] = $this->landing_model->getLandingBy('status', 'true');
		$data['data_service'] = $this->service_model->get($data['landing'][0]->id);
		$data['title'] = $this->article_model->getTitle($slug);
		$data['article'] = $this->article_model->find_by_slug($slug);
		if (!$data['article']) {
			show_404();
		}

		$this->load->view('simple/articles/show_article.php', $data);
	}
}
