<?php





class Employee_profile extends CI_Model {

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

            return $this->db->count_all('employeeprofile');

         }

         public function get_all_users(){
           $query = $this->db->get('employeeprofile');
           return $query->result();
         }

         public function get_all_names(){
            $this->db->select('id, Name');
            $this->db->from('employeeprofile');
            $query = $this->db->get();
            return $query->result();
         }

         public function get_all_designations(){
           $query = $this->db->get('designation');
           return $query->result();
         }

         public function get_all_departments(){
           $query = $this->db->get('department');
           return $query->result();
         }

         public function add_employee($data){
            extract($data);
           $this->db->query("INSERT INTO employeeprofile (Name, profileImage, image, fatherName, Gender, cnic, dob, identityMark, address, telephoneNo, mobileNo, email, department_id, designation_id, basic_salary, duty_hour) VALUES('$Name', '$profileImage', '$image', '$fatherName', '$Gender', '$cnic', '$dob', '$identityMark', '$address', '$telephoneNo', '$mobileNo', '$email', '$department_id', '$designation_id', '$basic_salary', '$duty_hour')");
           return "No issue";
         }

         public function add_designation($data){
          //  $str = $this->db->insert_string('designation', $data);
          $name = $data['designation_name'];
           $this->db->query("INSERT INTO designation (designation_name) VALUES('$name')");
           return "No issue";
         }

         public function add_department($data){
          //  $str = $this->db->insert_string('designation', $data);
          $name = $data['department_name'];
           $this->db->query("INSERT INTO department (department_name) VALUES('$name')");
           return "No issue";
         }


}

?>
