<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Libraries\PhpMailerLib;


class Login extends BaseController
{
    public function index()
    {
     
        $data['title']="Login";
        return view('backend/Auth/login',$data);
    }

   

    public function dologin(){

        
       
        $Return = array('result' => array(),'error1'=>'','error'=>'');
        $rules = [
            'username' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => lang('Validation.required.username')
                ]
            ],
            'password' => [
                'rules'  => 'required|min_length[5]',
                'errors' => [
                    'required' => lang('Validation.required.password'),
                    'min_length' => lang('Validation.valid.password')
                ]
            ]
        ];
    
    

        if (!$this->validate($rules)) {
         
            if ($this->validation->getError('username')) {
                $Return['error'] = $this->validation->getError('username');
            } else if ($this->validation->getError('password')) {
                $Return['error'] = $this->validation->getError('password');
            }
        }else{
           

            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');
            $UsersModel = new UserModel();
            $data = $UsersModel
           
            ->where('username', $username)->where('active', 'Y')->where('deleted', 'N')->first();
            
            if ($data) {
               
                if (password_verify($password, $data['password'])) {
                    $session_data = [
                        'user_id' => $data['user_id'],
                        'username' => $data['username'],
                        'name' => $data['first_name'] . ' ' . $data['last_name'],
                        'first_name' => $data['first_name'],
                        'last_name' => $data['last_name'],
                        'created_at' => $data['created_at'],
                        'email' => $data['email'],
                        'username' => $data['username'],

                    ];
                    // Add user data in session
                    $this->session->set('user_data', $session_data);
                    $this->session->set('user_id', $data['user_id']);
                  
                    $this->session->set('isLoggedIn', 1);

                    $UsersModel->set('last_login_date', 'NOW()', FALSE)
                        ->set('is_logged_in', 'Y')
                        ->update($data['user_id']);

                   // $this->session->setFlashdata('success', lang('Message.login_success'));
                   

                   $Return['result'] = lang('Message.login_success');
                    
                    
                } else {
                    $Return['error'] = lang('Error.invalid_login_credentials');
                }
            } else {
                $Return['error'] = lang('Error.invalid_login_credentials');
            }


        }
        return $this->output($Return);
    }

    public function regsiterSave(){
		
        $Return = array('result' => array(),'error1'=>'','error'=>'');
		
        $rules = [
            'email' => [
                'rules'  => 'required|valid_email',
                'errors' => [
                    'required' => lang('Validation.required.username')
                ]
            ],
            'first_name' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => lang('Validation.required.password'),
                   
                ]
                ],
            'password' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => lang('Validation.required.password'),
                  
                ]
                ]
            
        ];
					
        if (!$this->validate($rules)) {
             if ($this->validation->getError('password')) {
                $Return['error'] = $this->validation->getError('password');
            }
            if ($this->validation->getError('first_name')) {
                $Return['error'] = $this->validation->getError('first_name');
            }
            if ($this->validation->getError('email')) {
                $Return['error'] = $this->validation->getError('email');
            }
        }else{
            $UsersModel = new UserModel();

            $form_data=[
                'first_name'=>$this->request->getVar('first_name'),
                'email'=>$this->request->getVar('email'),
                'password'=>$this->request->getVar('password'),
                'username'=>$this->request->getVar('email'),
            ];

            $UsersModel->insert($form_data);
			$to = $this->request->getVar('email');
			$subject = 'Congratulations! Your Signup is Complete';
		    $message ='<p><strong>Email:</strong> ' . $to . '</p>' .
                   '<p><strong>Password:</strong> ' .$this->request->getVar('password'). '</p>';			   

            $phpMailerLib = new PhpMailerLib();
            $phpMailerLib->sendEmail($to, $subject, $message);
            $Return['result'] = "your account has been successfully created.";

        }
        return $this->output($Return);
        
    }
    public function logout()
    {
        $UsersModel = new UserModel();
        $UsersModel->set('last_logout_date', 'NOW()', FALSE)
            ->set('is_logged_in', 'N')
            ->update($this->session->get('user_id'));
        $this->session->destroy();
        return redirect()->to('admin-login');
    }

    public function customerLogin(){
        $settingmodel = new SettingsModel();
        $data['setting'] = $settingmodel->select('*')->first(1);
        return view('front/login',$data);
    } 
    public function customerRegister(){
        $settingmodel = new SettingsModel();
        $data['setting'] = $settingmodel->select('*')->first(1);
        return view('front/register',$data);
    }

    public function resetPassword()
    {


        $Return = array('result' => '', 'error' => '', 'csrf_hash' => '', 'redirect' => '');
        $UsersModel = new UserModel();
        $message ='';
        $rules = [
            'new-password' => [
                'rules'  =>  'required|min_length[5]',
                'errors' => [
                    'required' => lang('Validation.required.password'),
                    'min_length' => lang('Validation.valid.password')
                ]
            ],
            'confirm-password' => [
                'rules'  =>  'required|min_length[5]|matches[new-password]',
                'errors' => [
                    'required' => lang('Validation.required.password'),
                    'min_length' => lang('Validation.valid.password'),
                    'matches' => lang('Validation.valid.match_password')
                ]
            ],
        ];
        if (!$this->validate($rules)) {
                if ($this->validation->getError('new-password')) {
                    $Return['error'] = $this->validation->getError('new-password');
                   
                    //$Return['error']  = "Please check it once";
                } 
                 if ($this->validation->getError('confirm-password')) {
                  
                    $Return['error'] = $this->validation->getError('confirm-password');
                }
               
        }
        else
        {
          
            $hashedPassword = password_hash($this->request->getVar('confirm-password'), PASSWORD_DEFAULT);
             $data['user_data']= $UsersModel->where('user_id', $this->request->getVar('getting_user_id'))->first();
             $form_data=[
                'password'=>$hashedPassword,
             ];
            $UsersModel->update( $this->request->getVar('getting_user_id'),$form_data);
            $Return['redirect'] = site_url('login');
            $Return['result'] = "success";
         
        }   
       
     return $this->output($Return); 
    
    }




    public function verifyotp()
    {
        $Return = array('result' => '', 'error' => '', 'csrf_hash' => '', 'redirect' => '');
        $UsersModel = new UserModel();
        $message ='';
        $rules = [
            'otp' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => lang('Validation.required.otp')
                ]
            ],
        ];
        if (!$this->validate($rules)) {
         
            if ($this->validation->getError('otp')) {
                $message = "Please Enter OTP";
            } 
        }
        else
        {
            /// check otp 
            $data['user_data']= $UsersModel->where('user_id', $this->request->getVar('getting_user_id'))->first();
            $save_otp = $data['user_data']['otp'];
            if($save_otp == $this->request->getVar('otp'))
            {
                $Return['result'] = "success";
            }
            else
            {
                $Return['result'] = "fail";
                $Return['error'] = "Wrong OTP";
            }

        }    
    return $this->output($Return); 
}
    public function forgotpassword()
    {
        return view('front/forgotpassword');
    }
    
    public function sendmailforotp()
    {
     
       
        $message ='';
        $rules = [
            'emailforotp' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => lang('Validation.required.email')
                ]
            ],
        ];
        if (!$this->validate($rules)) {
         
            if ($this->validation->getError('email')) {
                $message = "Please Enter email address";
            } 
    }
    else{
        /// send mail for otp 

        $Return = array('result' => '', 'error' => '', 'csrf_hash' => '', 'redirect' => '');
        $characters = '0123456789';
           $UsersModel = new UserModel();
            $otp = '';
            $length = strlen($characters);

            // Generate a random 6-digit OTP
            for ($i = 0; $i < 6; $i++) {
                $otp .= $characters[rand(0, $length - 1)];
            }

            $data['user_data']= $UsersModel->where('email', $this->request->getVar('emailforotp'))->first();
            if($data['user_data']!=NULL)
            {
                $id = $data['user_data']['user_id'];
                $form_data = [
                    'otp'=>$otp,
                ];
                $UsersModel->update($id,$form_data);
                $Return['result'] = "success";
                $Return['user_id'] = $id;
                $Return['email'] = $this->request->getVar('emailforotp');
            }
            else{
                 $Return['result'] = "fail";
                 $Return['error'] = "Invalid Email Address";
            }
          
      
         return $this->output($Return);  
       
    }
}


    public function customerLoginCheack(){

        
       
        $message ='';
        $rules = [
            'username' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => lang('Validation.required.username')
                ]
            ],
            'password' => [
                'rules'  => 'required|min_length[5]',
                'errors' => [
                    'required' => lang('Validation.required.password'),
                    'min_length' => lang('Validation.valid.password')
                ]
            ]
        ];
    
    

        if (!$this->validate($rules)) {
         
            if ($this->validation->getError('username')) {
                $message = $this->validation->getError('username');
            } else if ($this->validation->getError('password')) {
                $message = $this->validation->getError('password');
            }
        }else{
            

            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');
            $UsersModel = new UserModel();
            $data = $UsersModel->select('users.*,roles.role')
            ->join("roles", "roles.id = users.role_id", "INNER")
            ->where('username', $username)->where('active', 'Y')->where('deleted', 'N')->first();
            
            if ($data) {
                if (password_verify($password, $data['password'])) {
                    $session_data = [
                        'customer_id' => $data['user_id'],
                        'customer_username' => $data['username'],
                        'customer_name' => $data['first_name'] . ' ' . $data['last_name'],
                        'customer_first_name' => $data['first_name'],
                        'customer_last_name' => $data['last_name'],
                        'created_at' => $data['created_at'],
                        'email' => $data['email'],
                       
                        'customer_user_role_id' => $data['role_id'],
                
                    ];
                    // Add user data in session
                    $this->session->set('customer_user_data', $session_data);
                    $this->session->set('customer_user_id', $data['user_id']);
                    $this->session->set('customer_user_role', $data['role']);
                    $this->session->set('CustomerisLoggedIn', 1);
                    // $this->session->set('isLoggedIn', 1);

                    $UsersModel->set('last_login_date', 'NOW()', FALSE)
                        ->set('is_logged_in', 'Y')
                        ->update($data['user_id']);

                    $this->session->setFlashdata('success', lang('Message.login_success'));

                    if($this->session->has('cartLoginCheack')){
                       
                        return  redirect()->to('cart-login'); 

                    }else{
                        return redirect()->to('/'); 
                    }
                        // return redirect()->to('/');
                    
                    
                } else {
                    $message = lang('Error.invalid_login_credentials');
                }
            } else {
                $message = lang('Error.invalid_login_credentials');
            }


        }


        
        $this->session->setFlashdata('error', $message);

      
        return redirect()->to('login');
    }
    public function customerRegisterSave(){
        $message ='';
        $rules = [
            'email' => [
                'rules'  => 'required|is_unique[users.email]',
                'errors' => [
                    'required' => lang('Validation.required.email'),
                    'is_unique' => lang('Validation.unique.email')
                ]
            ],
            'password' => [
                'rules'  => 'required|min_length[5]',
                'errors' => [
                    'required' => lang('Validation.required.password'),
                    'min_length' => lang('Validation.valid.password')
                ]
            ]
        ];
    
    

        if (!$this->validate($rules)) {
         
            if ($this->validation->getError('email')) {
                $message = $this->validation->getError('email');
            } else if ($this->validation->getError('password')) {
                $message = $this->validation->getError('password');
            }
        }else{
            $form_data = [
                'username' => $this->request->getVar('email'),
                'password' => $this->request->getVar('password'),
                'role_id' => 3,
                'first_name' => $this->request->getVar('first_name'),
                'last_name' => $this->request->getVar('last_name'),
                'email' => $this->request->getVar('email'),
                'contact_nu' => $this->request->getVar('contact_nu'),
               
    
            ];
            $usermodal = new UserModel();
            $usermodal->insert($form_data);
           $this->session->setFlashdata('success', lang('Message.register_success'));
            return redirect()->to('login');

              
        }
        $this->session->setFlashdata('error', $message);

      
        return redirect()->to('register');
       

    }
    public function customerlogout()
    {
        $UsersModel = new UserModel();
        $UsersModel->set('last_logout_date', 'NOW()', FALSE)
            ->set('is_logged_in', 'N')
            ->update($this->session->get('customer_user_id'));
        $this->session->destroy();
        return redirect()->to('/');
    }
}
