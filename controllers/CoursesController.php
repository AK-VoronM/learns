<?php
class CoursesController 
{
    public function actionShowAll(){ 
          
        $auth = Auth::checkAuth();
        
        $view = new View();
        $view->auth = $auth;
        
        if ($auth) {
            $user = Auth::getUser();
            $courses = Courses::getCourses();

            $view->user_login = $user->user_login;
            $view->user_group = $user->user_group;
            $view->courses = $courses;
            
            $view->display('header.php');
            $view->display('courses/courses_list.php');
            $view->display('footer.php');
        }else{
            header("Location: /learns/");
        }
        
    }
    
    public function actionShowLessons(){ 
          
        $auth = Auth::checkAuth(); 
        
        $view = new View();
        $view->auth = $auth;
        
        if (!isset($_GET['id'])){
                header("Location: /learns/");
            }
        
        if ($auth) {
            $user = Auth::getUser();
            $id = $_GET['id'];
            $course = Courses::getCourse($id);     
            $lessons = Courses::getLessons($id);
            
            $view->user_login = $user->user_login;
            $view->user_group = $user->user_group;
            $view->lessons = $lessons;
            $view->course = $course;
            
            $view->display('header.php');
            $view->display('courses/lessons_head.php');
            if($lessons){
                $view->display('courses/lessons_list.php'); 
            }else{
                $view->display('courses/lessons_error.php');
            }
            $view->display('courses/course_info.php');
            $view->display('footer.php');
        }else{
            header("Location: /learns/");
        }
        
    }
    
    public function actionShowLesson(){ 
          
        $auth = Auth::checkAuth(); 
        
        $view = new View();
        $view->auth = $auth;
        
        if (!isset($_GET['id'])){
                header("Location: /learns/");
            }
        
        if ($auth) {
            $user = Auth::getUser();
            $id = $_GET['id'];   
            $lesson = Courses::getLesson($id);
            $course = Courses::getCourse($lesson->course_id);
            $lesson_prew = Courses::getLessonByNumber($lesson->lesson_number - 1, $lesson->course_id);
            $lesson_next = Courses::getLessonByNumber($lesson->lesson_number + 1, $lesson->course_id);
            
            
            $view->user_login = $user->user_login;
            $view->user_group = $user->user_group;
            $view->lesson = $lesson;
            $view->course = $course;
            $view->lesson_prew = $lesson_prew;
            $view->lesson_next = $lesson_next;
            
            $view->display('header.php');
            $view->display('courses/lesson_view.php'); 
            $view->display('footer.php');
        }else{
            header("Location: /learns/");
        }
        
    }
    
}