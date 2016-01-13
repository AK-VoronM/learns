<?php
class LessonsController 
{

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
            $lessons = Lessons::getLessons($id);
            $lessons_status = Users::getUserLessons($user->user_id, $id);
            $isUserCourse = Users::getUserCourse($user->user_id, $id);
            
            $view->user_login = $user->user_login;
            $view->user_group = $user->user_group;
            $view->lessons = $lessons;
            $view->lessons_status = $lessons_status;
            $view->course = $course;
            
            $view->display('header.php');
            $view->display('lessons/lessons_head.php');
            if(!$lessons){
                 $view->display('lessons/lessons_error.php');
            }else{
                if(!$isUserCourse){
                        $view->display('lessons/lessons_list.php'); 
                }else{
                        $view->display('lessons/lessons_list_auth.php'); 
                }
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
            $lesson = Lessons::getLesson($id);
            $course = Courses::getCourse($lesson->course_id);
            $lesson_prew = Lessons::getLessonByNumber($lesson->lesson_number - 1, $lesson->course_id);
            $lesson_next = Lessons::getLessonByNumber($lesson->lesson_number + 1, $lesson->course_id);
            
            
            $view->user_login = $user->user_login;
            $view->user_group = $user->user_group;
            $view->lesson = $lesson;
            $view->course = $course;
            $view->lesson_prew = $lesson_prew;
            $view->lesson_next = $lesson_next;
            
            $view->display('header.php');
            $view->display('lessons/lesson_view.php'); 
            $view->display('footer.php');
        }else{
            header("Location: /learns/");
        }
        
    }
    
}