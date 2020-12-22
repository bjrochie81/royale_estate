<?php 
    class crud{
        // private database object
        private $db;
        
        // constructor to initialize private variable to the database connection
        function __construct($conn){
            $this->db = $conn;
        }
        // function to insert a new recordd into the visitor database
        public function insertVisitors($fname,$lname,$datein,$dateout,$vehicle_type,$plate_number,$email,$visit_purpose){
            try {
                // define sql statement to be executed
                $sql = "INSERT INTO visitor (firstname,lastname,datein,dateout,vehicle_type,plate_number,email,visit_purpose_id)
                VALUES (:fname,:lname,:datein,:dateout,:vehicle_type,:plate_number,:email,:visit_purpose)";
                // prepare the sql statement for execution
                $stmt = $this->db->prepare($sql);
                // bind all placeholder to the actual values
                $stmt->bindparam(':fname',$fname);
                $stmt->bindparam(':lname',$lname);
                $stmt->bindparam(':datein',$datein);
                $stmt->bindparam(':dateout',$dateout);
                $stmt->bindparam(':vehicle_type',$vehicle_type);
                $stmt->bindparam(':plate_number',$plate_number);
                $stmt->bindparam(':email',$email); 
                $stmt->bindparam(':visit_purpose',$visit_purpose);
                // execute statement
                $stmt->execute();
                return true;
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }
        public function editVisitor($id,$fname,$lname,$datein,$dateout,$vehicle_type,$plate_number,$email,$visit_purpose){
            try{
                $sql = "UPDATE `visitor` SET `firstname`=:fname,`lastname`=:lname,`datein`=:datein,`dateout`=:dateout,
                `vehicle_type`=:vehicle_type,`plate_number`=:plate_number,`email`=:email,`visit_purpose_id`=:visit_purpose 
                WHERE visitor_id = :id";
                $stmt = $this->db->prepare($sql);
                // bind all placeholder to the actual values
                $stmt->bindparam(':id',$id);
                $stmt->bindparam(':fname',$fname);
                $stmt->bindparam(':lname',$lname);
                $stmt->bindparam(':datein',$datein);
                $stmt->bindparam(':dateout',$dateout);
                $stmt->bindparam(':vehicle_type',$vehicle_type);
                $stmt->bindparam(':plate_number',$plate_number);
                $stmt->bindparam(':email',$email); 
                $stmt->bindparam(':visit_purpose',$visit_purpose);
                // execute statement
                $stmt->execute();
                return true;
            }catch(PDOException $e) {
                echo $e->getMessage();
                return false;
            }
            
        }
        public function getVisitors(){
            try{
                $sql = "SELECT * FROM `visitor` a inner join visitor_purpose s on a.visit_purpose_id = s.visit_purpose_id";
                $results = $this->db->query($sql);
                return $results;
            }catch(PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }    
        public function getVisitorDetails($id){
            try{
                $sql = "select * from visitor a inner join visitor_purpose s on a.visit_purpose_id = s.visit_purpose_id where visitor_id = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id', $id);
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;

            }catch(PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }    
        public function deleteVisitor($id){
            try{
                $sql = "delete from visitor where visitor_id =:id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id', $id);
                $stmt->execute();
                return true;
            }catch(PDOException $e) {
                echo $e->getMessage();
                return false;
            }           
        }
        public function getVisitorsPurpose(){
            try{
                $sql = "SELECT * FROM `visitor_purpose`";
                $result = $this->db->query($sql);
                return $result;
            }catch(PDOException $e) {
                echo $e->getMessage();
                return false;
            }           
        }
        public function getVisitorsPurposeById($id){
            try{
                $sql = "SELECT * FROM `visitor_purpose` where visitor_purpose_id = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id', $id);
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
         
        }
    }
?>
