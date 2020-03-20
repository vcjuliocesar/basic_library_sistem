<?php
namespace App\Core;
use App\Core\App;
use App\Core\Session;
class Login
{
    private static $loggedin = false;
    public static $arrUsuario = array();

   private function checkSession()
   {
     if(!empty($_SESSION['user']) && !empty($_SESSION['password'])) {
       return self::checkLogin($_SESSION['user'],$_SESSION['password']);
     }
      return false;
   }

   public static function checkLogin($user = '', $pass = '')
   {
     $User = App::get('database')->selectWhere('Users',['email'=>$user,'password'=>$pass]);

     if($user == $User[0]->email && $pass == $User[0]->password) {
       session_start();
       //Session::init();
       self::$loggedin = true;
       self::$arrUsuario['user'] = $user;
       Session::add('user',$user);
       Session::add('password',$pass);
       //$_SESSION['user'] = $user;
       //$_SESSION['password'] = $pass;
       return true;
     }

     return false;
   }

   public static function Logout()
   {
     Session::close();
     Session::remove('user');
     Session::remove('password');
     //session_destroy();
     self::$arrUsuario['user'] = array();
     //unset($_SESSION['user']);
     //unset($_SESSION['password']);*/
     self::$loggedin = false;
   }
}
