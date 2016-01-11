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
    
}