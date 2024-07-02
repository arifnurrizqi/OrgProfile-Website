<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('landing_model');
		$this->load->model('identitas_model');
		$this->load->model('feedback_model');
		$this->load->model('templates_model');
	}
	public function index()
	{
		$this->load->model('service_model');

		$data['identitas'] = $this->identitas_model->get();
		$data['landing'] = $this->landing_model->getLandingBy('status', 'true');
		$data['data_service'] = $this->service_model->get($data['landing'][0]->id);

		$data['title'] = $this->identitas_model->get()[0]->nama_website .' ' . $data['landing'][0]->slug;

		// contact form
		$this->contact_form();

		$this->load->view( $this->getTemplate() . '/home', $data);
	}

	public function about($slug = null)
	{
		$this->load->model('pengurus_model');
		$this->load->model('filosofi_model');
		$this->load->model('fokusIsu_model');

		$data['identitas'] = $this->identitas_model->get();

		if ($slug != null) {
			$data['landing'] = $this->landing_model->getLandingBy('slug', $slug);
		} else {
			$data['landing'] = $this->landing_model->getLandingBy('status', 'true');
		}

		$data['data_filosofi'] = $this->filosofi_model->get($data['landing'][0]->id);
		$data['data_fokusIsu'] = $this->fokusIsu_model->get($data['landing'][0]->id);
		$data['data_presWapres'] = $this->pengurus_model->findPositionByIdLanding('1', $data['landing'][0]->id);
		$data['data_koordinator'] = $this->pengurus_model->findPositionByIdLanding('2', $data['landing'][0]->id);

		$data['title'] = 'About '. $this->identitas_model->get()[0]->nama_website .' ' . $data['landing'][0]->slug;

		$this->load->view( $this->getTemplate() . '/about', $data);
	}

	public function ketum($id = null, $slug =null)
	{
		$data['identitas'] = $this->identitas_model->get();
		
		if ($slug != null) {
			$data['landing'] = $this->landing_model->getLandingBy('slug', $slug);
		} else {
			$data['landing'] = $this->landing_model->getLandingBy('status', 'true');
		}

		$data['data_presWapres'] = $this->pengurus_model->findPositionByIdLanding('1', $data['landing'][0]->id);
		$data['data_koordinator'] = $this->pengurus_model->findPositionByIdLanding('2', $data['landing'][0]->id);

		$data['title'] = 'Presiden & Wakil Presiden' . $data['landing'][0]->kabinet;

		$this->load->view( $this->getTemplate() . '/detail/ketum', $data);
	}

	public function kemenkoan($id = null, $slug =null)
	{
		$data['identitas'] = $this->identitas_model->get();
		
		if ($slug != null) {
			$data['landing'] = $this->landing_model->getLandingBy('slug', $slug);
		} else {
			$data['landing'] = $this->landing_model->getLandingBy('status', 'true');
		}

		$data['menko'] = $this->pengurus_model->find($id);
		$data['data_menteri'] = $this->pengurus_model->findMenteriByIdKoordinator($id, $data['landing'][0]->id);

		$kemenkoan = str_replace("Menko", "Kemnekoan", $data['menko']->jabatan);
		$data['title'] = $kemenkoan ;

		$this->load->view( $this->getTemplate() . '/detail/kemenkoan', $data);
	}

	public function kementerian($id = null, $slug =null)
	{
		$data['identitas'] = $this->identitas_model->get();
		
		if ($slug != null) {
			$data['landing'] = $this->landing_model->getLandingBy('slug', $slug);
		} else {
			$data['landing'] = $this->landing_model->getLandingBy('status', 'true');
		}

		$data['menteri'] = $this->pengurus_model->find($id);
		$data['data_staf'] = $this->pengurus_model->findStafByIdMenteri($id, $data['landing'][0]->id);

		$kementerian = str_replace("Menteri", "Kementerian", $data['menteri']->jabatan);
		$data['title'] = $kementerian ;

		$this->load->view( $this->getTemplate() . '/detail/kementerian', $data);
	}

	public function booklet($slug = null)
	{
		$data['identitas'] = $this->identitas_model->get();

		if ($slug != null) {
			$data['landing'] = $this->landing_model->getLandingBy('slug', $slug);
		} else {
			$data['landing'] = $this->landing_model->getLandingBy('status', 'true');
		}
		
		$data['title'] = 'Booklet BEM UNWIKU ' . $data['landing'][0]->slug;

		$this->load->view( $this->getTemplate() . '/detail/booklet', $data);
	}

	public function contact()
	{
		redirect(site_url('/#contact'));
	}

	public function arsip($slug = null) 
	{
		$this->load->model('service_model');

		$data['identitas'] = $this->identitas_model->get();

		if ($slug != null) {
			$data['landing'] = $this->landing_model->getLandingBy('slug', $slug);
			$data['data_service'] = $this->service_model->get($data['landing'][0]->id);
			
			$data['title'] = $this->identitas_model->get()[0]->nama_website .' ' . $data['landing'][0]->slug;

			$this->contact_form();

			if ($data['landing'][0]->id) {
				$this->load->view( $this->getTemplate() . '/home', $data);
			} else {
				redirect(site_url('/'));
			}
		} else {
			$data['title'] = 'Arsip '.  $this->identitas_model->get()[0]->nama_website;
			$data['data_landing'] = $this->landing_model->getLandingAndPengurus();

			$this->load->view( $this->getTemplate() . '/detail/arsip', $data);
		}
	}

	private function contact_form(){
		// contact form
		$this->load->library('form_validation');

		if ($this->input->method() === 'post') {
			$this->load->model('feedback_model');

			$rules = $this->feedback_model->rules();
			$this->form_validation->set_rules($rules);

			if ($this->form_validation->run() == FALSE) {
				$this->session->set_flashdata('message', 'Pesan gagal terkirim. Mohon cek kembali data yang anda masukkan');
				return $this->load->view( $this->getTemplate() . '/home', $data);
			}

			$feedback = [
				'id' => uniqid('', true),
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'message' => $this->input->post('message'),
				'status' => 0,
			];

			$feedback_saved = $this->feedback_model->insert($feedback);

			if ($feedback_saved > 0) {
				$this->session->set_flashdata('success', 'Terimaksih! Pesan anda telah kami terima.');
				redirect(site_url('/#contact'));
			} else {
				$this->session->set_flashdata('message', 'Pesan gagal terkirim. Mohon cek kembali data yang anda masukkan');
				redirect(site_url('/#contact'));
			}
		}
	}

	private function getTemplate() {
		$templates = $this->templates_model->getTemplateBy('status', 'true');

		return $templates[0]->folder;
	}
}
