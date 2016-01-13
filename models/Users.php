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
        
        $date = 1;
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
        
        $date = 'В процессе';
        return $date;       
    }
    
    public function setUserCourseStatus($user_id, $course_id, $course_status){
        //Устанавливает статус курса для пользователя
        // Пройден, В процессе, Не доступен
        // Возвращает истину или ложь
        
        $date = true;
        return $date;       
    }
    
    public function getUserLessons($user_id, $course_id){
        //Возвращает массив из списка уроков и их статусов
        // [lesson_number=>lesson_status]
        
        $date = [1 => 'Пройден', 2 => 'В процессе', 3 => 'Не доступен', 4 => 'Не доступен', 5 => 'Не доступен', 6 => 'Не доступен', 7 => 'Не доступен', 8 => 'Не доступен'];
        return $date;
    }
    
}