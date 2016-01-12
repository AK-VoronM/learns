<?php
class Lessons extends AbstractModel {
    public $date;
      
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
    
    public function getLessonByNumber($lesson_number, $course_id){
        $db = new DB;
        $query = "SELECT * FROM lessons WHERE lesson_number='" . $lesson_number . "' AND course_id='" . $course_id . "'";
        $date = $db->query($query);
        return $date[0];
    }
} 