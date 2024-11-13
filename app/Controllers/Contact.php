<?php

namespace App\Controllers;

use App\Models\ContactModel;
use App\Libraries\PhpMailerLib;


class Contact extends BaseController
{
    public function index()
    { 
       
       
         return view('home/contact');
    }

    public function save(){
        $Return = array('result' => array(),'error'=>'');
        $ContactModel = new ContactModel();
        $rules = [
            'name' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => lang('Validation.required.name')
                ]
            ],
            'organization' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => lang('Validation.required.organization'),
                   
                ]
                ],
            'email' => [
                    'rules'  => 'required|valid_email',
                    'errors' => [
                        'required' => lang('Validation.required.email'),
                       
                    ]
                ],
        ];
    
    

        if (!$this->validate($rules)) {
         
            if ($this->validation->getError('name')) {
                $Return['error'] = $this->validation->getError('name');
            } 
             if ($this->validation->getError('email')) {
                $Return['error'] = $this->validation->getError('email');
            }
            if ($this->validation->getError('organization')) {
                $Return['error'] = $this->validation->getError('organization');
            }
        }else{
            $name = $this->request->getVar('name');
            $email = $this->request->getVar('email');
            $organization = $this->request->getVar('organization');
            $question = $this->request->getVar('question');
		
            $form_data = [
                'name'=>$name,
                'email'=>$email,
                'organization'=>$organization,
                'question'=>$question,
            ];
	    
            $ContactModel->insert($form_data);

            // Send an email
            //$this->load->library('email');

            //$this->email->from('anand@xcriptech.com', 'Anand Kumar');
            //$this->email->to($this->request->getVar('email'));

            //$this->email->subject('Thank you for contacting us');
            //$this->email->message('Thank you for filling out our form!');

            //$this->email->send();
			$to = 'info@trialvalue.com';
			$subject = 'Thank you for contacting us';
		    $message = '<p><strong>Name:</strong> ' . $name . '</p>' .
                   '<p><strong>Email:</strong> ' . $email . '</p>' .
                   '<p><strong>Organization:</strong> ' . $organization . '</p>' .
                   '<p><strong>Question:</strong> ' . $question . '</p>';			   

            $phpMailerLib = new PhpMailerLib();
            $phpMailerLib->sendEmail($to, $subject, $message);
            $this->session->setFlashdata('success', "Thanks for filling out our form!");
        }

    return $this->output($Return);

    }
    
}
