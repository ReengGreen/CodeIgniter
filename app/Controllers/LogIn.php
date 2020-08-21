<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class LogIn extends Controller
{
    public function login()
    {

    //   echo $this->request->getVar('username');
    //   echo $this->request->getVar('password');
      
      if ($this->request->getVar('username')=="Gener" && $this->request->getVar('password')=="Pogi") {
      
        return redirect()->to( base_url('/users') );
      }else{
        
        echo view('welcome_message');
        echo '<script>alert("Wrong! Basta Wrong!")</script>';
          
          
      }
        
        
    }
}