<?php
class Users extends AbstractModel {
    /*
     * Таблица users
     *user_group user_hash user_id user_login user_password
     */
    
    /*
     * Таблица users_coures
     * course_id, user_id, course_status
     */
    
    /*
     * Таблица users_lessons
     * user_id, lesson_id, course_id, lesson_status, lesson_test
     */
    
    public $date;
    
    public function getUsers(){
        
        $db = new DB;
        $query = "SELECT user_login, user_id, user_group FROM users";
        $date = $db->query($query);
        
        return $date;
    }
    
    public function getUserCourses($user_id){
        // Возвращает id курсов, на которые подписан пользователь
        
        $date = [1, 2];
        return $date;
    }
    
    public function getUserCourse($user_id, $course_id){
        // Возвращает id курса, если пользователь подписан
        // Возвращает false если нет
        
        $date = false;
        return $date;
    }
    
    public function setUserCourse($user_id, $course_id){
        //Добавляет курс для определенного пользователя и возвращает false или id курса
        //
        
        $date = 1;
        return $date;
    }
    
    public function getUserCourseStatus($user_id, $course_id){
        // Возвращает статус курса для пользователя
        
        $date = 'available';
        return $date;       
    }
    
    public function setUserCourseStatus($user_id, $course_id, $course_status){
        //Устанавливает статус курса для пользователя
        // complete, available, not available
        // Возвращает истину или ложь
        
        $date = true;
        return $date;       
    }
    
    public function getUserLessons($user_id, $course_id){
        //Возвращает массив из списка уроков и их статусов
        // [lesson_number=>lesson_status]
        
        $date = [1 => 'complete', 2 => 'available', 3 => 'notavailable', 4 => 'notavailable', 5 => 'notavailable', 6 => 'notavailable', 7 => 'notavailable', 8 => 'notavailable'];
        return $date;
    }
    
	 public function getUser(){
        //Личный кабинет юзера
        $db = new DB;
        $query = "SELECT user_login, user_group FROM users WHERE user_id='" . $_COOKIE['id'] . "'";
        $user = $db->query($query);
        
        return $user;
    }
	
}