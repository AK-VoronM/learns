<?php
class IndexController 
{
    public function actionShow(){ 
        
        $auth = Auth::checkAuth();
        
        $view = new View();
        $view->auth = $auth;
        if ($auth) {
            $user = Auth::getUser();

            $view->user_login = $user->user_login;
            $view->user_group = $user->user_group;
            
        }
        
        if ($auth){
             header("Location: /learns/?ctrl=Courses&act=ShowAll");
        }else{
            $view->display('header.php');
            $view->display('auth/auth.php');
            $view->display('footer.php');
        }
        
    }
    
    public function actionJSTasks(){
         
        $task_list = Index::getTaskList();
        $view = new View(); 
        
        if (isset($_GET['task'])){
            $task = 'jstasks/' . $_GET['task'] . '.php';
            
        }else{
            $task = 'jstasks/tasklist.php';
        }
        
        $view->date = $date_start;
        $view->task_list = $task_list;
        $view->display('header.php');
        $view->display($task);
        $view->display('footer.php');
    }
    
}