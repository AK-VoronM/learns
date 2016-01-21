<?php
class AdminController 
{
    public function actionPanel(){ 
        
        $auth = Auth::checkAuth();
        
        $view = new View();
        $view->auth = $auth;
        if ($auth) {
            $user = Auth::getUser();
            $view->display('header.php');
            $view->display('admin/main.php');
            $view->display('footer.php');
            $view->admin = $admin;
        }
        else{
           header("Location: /learns/");
        }
        
    }

}