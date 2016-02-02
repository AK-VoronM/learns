<?php
class UsersController 
{
    
    
        public function actionShowUser(){ 
          
        $auth = Auth::checkAuth();
        
        $view = new View();
        $view->auth = $auth;
        
        if ($auth) {
            
            $action = ['add', 'delete', 'banned'];
            
            $user = Auth::getUser();
            
            $view->user_status = $action[$user->user_status];
            $view->user_login = $user->user_login;
            $view->user_group = $user->user_group; 
            
            $view->display('header.php');
            $view->display('users/user.php');
            $view->display('footer.php');
        }
        
        else{
            header("Location: /learns/");
        }
    }   
	 public function actionDelUser(){
        $auth = Auth::checkAuth();
        
        $view = new View();
        $view->auth = $auth;
        
        if ($auth) {
            
            $action = ['удален', 'обучается', 'заблокирован администрацией'];
            $group = ['Пользователи', 'Администраторы', 'Преподаватели'];
            
            $user = Auth::getUser();
            
            
            $view->user_status = $action[$user->user_status];
            $view->user_login = $user->user_login;
            $view->user_group = $group[$user->user_group]; 
            $view->users = Users::delUser();
            
            $view->display('header.php');
            $view->display('users/user.php');
            $view->display('footer.php');
        }
        
        else{
            header("Location: /learns/");
        }
    }
    
    
    public function actionShowUsers(){     
        
        $auth = Auth::checkAuth();
        
        $view = new View();
        $view->auth = $auth;
        if ($auth) {
            $user = Auth::getUser();
            if ($user->user_group == 1){
                $view->user_login = $user->user_login;
                $view->user_group = $user->user_group;
                
                $view->users = Users::getUsers();
                $view->display('header.php');
                $view->display('users/user_list.php');
            }
            $view->display('footer.php');
        }else{
            header("Location: /learns/");
        }
    }
    
    public function actionAddUser(){ 
        
        //Добавляет нового пользователя в базу
       
    }
        
         
    
    public function actionDeleteUser(){     
        
        //Удаляет пользователя из базы
        
    }
    
}