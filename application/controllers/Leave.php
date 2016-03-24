<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Leave extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	 public function viewleave(){

		 $this->load->database();
		 $this->load->model('Employee_leave');
		 $leaves = $this->Employee_leave->get_all_data();
		 $data = array(
			 'leaves' => $leaves,
		 );
		 $this->load->view('admin/base');
		 $this->load->view('admin/viewleave', $data);
	 }

	 public function index(){
		 $this->load->database();
		 $this->load->model('Employee_profile');
		 $employees = $this->Employee_profile->get_all_names();
		 $data = array(
			 'employees' => $employees,
		 );
		 $this->load->view('admin/base');
		 $this->load->view('admin/leaveedit', $data);
	 }

	 public function addleave(){

		 $this->load->database();
		 $this->load->model('Employee_leave');
		 $employees = $this->Employee_leave->check_record( $this->input->post('emp_id'));
		 $data = array(
			'emp_id' => 	$this->input->post('emp_id'),
			'casual' => $this->input->post('casual'),
			'sick' => $this->input->post('sick'),
			'earn' => $this->input->post('earn'),
		);
		 if($employees > 0){
			 $employees = $this->Employee_leave->update_record($data);
		 }else{
			 	 $this->Employee_leave->insert_record($data);
		 }

				redirect('leave/viewleave');

	 }


	 public function holiday(){
		  $this->load->view('admin/base');
		  $this->load->view('admin/holidayedit');
	 }

	 public function viewholiday(){
		 $this->load->database();
		$this->load->model('Employee_leave');
		$holidays = $this->Employee_leave->get_all_holidays();
		$data = array(
			'holidays' => $holidays,
		);
		 $this->load->view('admin/base');
		 $this->load->view('admin/viewholiday', $data);

	 }

	 public function viewshift(){
		 $this->load->database();
		$this->load->model('Employee_leave');
		$shifts = $this->Employee_leave->get_all_shifts();
		$data = array(
			'shifts' => $shifts,
		);
		 $this->load->view('admin/base');
		 $this->load->view('admin/viewshift', $data);

	 }

	 public function viewovertime(){
		$this->load->database();
	 $this->load->model('Employee_leave');
	 $overtimes = $this->Employee_leave->get_all_overtimes();
	 $data = array(
		 'overtimes' => $overtimes,
	 );
		$this->load->view('admin/base');
		$this->load->view('admin/viewovertime', $data);

	}

	 public function addshift(){
		 $this->load->database();
		$this->load->model('Employee_leave');
		$data = array(
			'shift' => $this->input->post('shift'),
			'startTime' => $this->input->post('startTime'),
			'endTime' => $this->input->post('endTime'),
			'fridayTime' => $this->input->post('fridayTime'),
			'lunchStartTime' => $this->input->post('lunchStartTime'),
			'fridayLunch' => $this->input->post('fridayLunch'),
			'lunchDuration' => $this->input->post('lunchDuration'),
			'lateLimit' => $this->input->post('lateLimit'),
			'lateAllow' => $this->input->post('lateAllow'),
		);

		$shifts = $this->Employee_leave->add_shift($data);
		 redirect('leave/viewshift');

	 }


	 public function shift(){
		 $this->load->database();
		$this->load->model('Employee_leave');
		$shifts = $this->Employee_leave->get_all_shifts();
		$data = array(
			'shifts' => $shifts,
		);
		 $this->load->view('admin/base');
		 $this->load->view('admin/shiftedit', $data);

	 }

	 public function addholiday(){
		 $this->load->database();
		$this->load->model('Employee_leave');
		$data = array(
			'date' => $this->input->post('date'),
			'strike' => $this->input->post('strike'),
			'description' => $this->input->post('description'),
		);

		$holidays = $this->Employee_leave->add_holiday($data);
		redirect('leave/viewholiday');
	 }

}
