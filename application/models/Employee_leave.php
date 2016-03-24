<?php





class Employee_leave extends CI_Model {

        public $title;
        public $content;
        public $date;

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function insert_info(){

         }

         public function get_row_count(){

            return $this->db->count_all('leave_avail');

         }

         public function check_record($id){
           $this->db->select('*');
           $this->db->from('leave_avail');
           $this->db->where('emp_id', $id);
           $query = $this->db->get();
           return $query->num_rows();
         }

         public function update_record($data){
           $id = $data['emp_id'];
           $this->db->select('*');
           $this->db->from('leave_avail');
           $this->db->where('emp_id', $id);
           unset($data['emp_id']);
           $this->db->update('leave_avail', $data);
         }

         public function insert_record($data){
          $this->db->insert('leave_avail', $data);
         }

         public function get_all_holidays(){
           $this->db->select('*');
           $this->db->from('gazzatedholidays');
           $query = $this->db->get();
           return $query->result();
         }

         public function get_all_shifts(){
           $this->db->select('*');
           $this->db->from('shifttimings');
           $query = $this->db->get();
           return $query->result();
         }

         public function add_holiday($data){
           $this->db->insert('gazzatedholidays', $data);
         }

         public function add_shift($data){
           $this->db->insert('shifttimings', $data);
         }

         public function get_all_data(){
          //  $query = $this->db->get('leave_avail');
           $this->db->select('*');
           $this->db->from('leave_avail');
           $this->db->join('employeeprofile', 'employeeprofile.id = leave_avail.emp_id');
           $query = $this->db->get();
           return $query->result();
         }

         public function get_all_overtimes(){
          //  $query = $this->db->get('leave_avail');
           $this->db->select('*');
           $this->db->from('employee_overtime');
           $this->db->join('employeeprofile', 'employeeprofile.id = employee_overtime.employee_id');
           $query = $this->db->get();
           return $query->result();
         }

         public function add_leaves($data){
            extract($data);
           $this->db->query("INSERT INTO employeeprofile (Name, profileImage, image, fatherName, Gender, cnic, dob, identityMark, address, telephoneNo, mobileNo, email, department_id, designation_id, basic_salary, duty_hour) VALUES('$Name', '$profileImage', '$image', '$fatherName', '$Gender', '$cnic', '$dob', '$identityMark', '$address', '$telephoneNo', '$mobileNo', '$email', '$department_id', '$designation_id', '$basic_salary', '$duty_hour')");
           return "No issue";
         }




}

?>
