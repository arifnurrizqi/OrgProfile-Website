<?php defined('BASEPATH') or exit('No direct script access allowed');

class Service extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('auth_model');
    $this->load->model('landing_model');
    $this->load->model('service_model');
    $this->load->model('feedback_model');
    if (!$this->auth_model->current_user()) {
      redirect('auth/login');
    }
  }

  public function index()
  {
    $data['title'] = 'Service';
    $data['page_title'] = 'Our Service';
    $data['pesan'] = $this->feedback_model->check_pesan();
    $data['landing'] = $this->landing_model->getLandingBy('status', 'true');
    $data['data_service'] = $this->service_model->get($data['landing'][0]->id);

    if (count($data['data_service']) <= 0) {
      $this->load->view('admin/service/service_empty.php', $data);
    } else {
      $this->load->view('admin/service/service.php', $data);
    }
  }

  public function new()
  {
    $data['title'] = 'service';
    $data['landing'] = $this->landing_model->getLandingBy('status', 'true');
    $data['pesan'] = $this->feedback_model->check_pesan();
    $data['current_user'] = $this->auth_model->current_user();
    $this->load->view('admin/service/service_new_form.php', $data);
  }

  public function edit($id = null)
  {
    $data['title'] = 'Service';
    $data['pesan'] = $this->feedback_model->check_pesan();
    $data['current_user'] = $this->auth_model->current_user();
    $data['service'] = $this->service_model->find($id);
    $this->load->view('admin/service/service_edit_form.php', $data);
  }

  public function submit_add()
  {
    $data['title'] = 'Service';
    $data['pesan'] = $this->feedback_model->check_pesan();

    $landing   = $this->input->post('landing');
    $service   = $this->input->post('service');
    $keterangan   = $this->input->post('keterangan');
    $link  = $this->input->post('backlink');

    $data = array(
      'id_landing' => $landing,
      'name_service' => $service,
      'keterangan' => $keterangan,
      'link' => $link
    );

    $saved = $this->service_model->insert($data);
    if ($saved) {
      $this->session->set_flashdata('message', 'New service was created');
      return redirect('admin/service');
    }
  }

  public function submit_edit()
  {
    $data['title'] = 'Service';
    $data['pesan'] = $this->feedback_model->check_pesan();

    $id = $this->input->post('id');
    $service  = $this->input->post('service');
    $keterangan  = $this->input->post('keterangan');
    $link  = $this->input->post('backlink');

    $data['service'] = $this->service_model->find($id);

    // Gunakan file yang sesuai
    $data_service = [
      'id'         => $id,
      'name_service' => $service,
      'keterangan'   => $keterangan,
      'link'   => $link
    ];

    $updated_service = $this->service_model->update($id, $data_service);

    if ($updated_service) {
      $this->session->set_flashdata('message', 'Layanan was updated');
      redirect('admin/service');
    }
  }

  public function delete($id)
  {
    $update = $this->service_model->delete($id);
    if ($update > 0) {
      $this->session->set_flashdata('message', 'Service was deleted');
      return redirect('admin/service');
    }
  }
}
