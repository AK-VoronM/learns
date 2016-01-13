<?php
class Courses extends AbstractModel {
    private $course_fulldescription, $course_id, $course_name, $course_shortdescription, $course_status;
            
    public $date;
    
    public function getCourses(){
        
        $db = new DB;
        $query = "SELECT * FROM courses";
        $date = $db->query($query);
        return $date;       
    }
    
    public function getCourse($id){
        // Возвращает описание курса по id
        $db = new DB;
        $query = "SELECT * FROM courses WHERE course_id='" . $id . "'";
        $date = $db->query($query);
        return $date[0];
    }
} 