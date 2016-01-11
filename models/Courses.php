<?php
class Courses extends AbstractModel {
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
    
    public function getLessons($id){
        // Возвращает список уроков из курса по id
        $db = new DB;
        $query = "SELECT * FROM lessons WHERE course_id='" . $id . "'";
        $date = $db->query($query);
        return $date;       
    }
    
    public function getLesson($id){
        // Возвращает список уроков из курса по id
        $db = new DB;
        $query = "SELECT * FROM lessons WHERE lesson_id='" . $id . "'";
        $date = $db->query($query);
        return $date[0];       
    }
} 