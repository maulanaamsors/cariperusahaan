<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Swift_Transport;
use Swift_Message;
use Swift_Mailer;
use App\Mail\ActivateUser;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }


    public function email()
    {
        //send email
        Mail::to('taufiqnugraha48@gmail.com')->send(new ActivateUser());


        return redirect('/home');
    }

    public function mail()
    {
        $data_toview = array();
        $data_toview['bodymessage'] = "Hello send test email";
        $email_to='taufiqnugraha48@gmail.com';

        $data['emailto'] = $email_to;

        Mail::send('emails.html', $data_toview, function($message) use ($data) {
            $message->to($data['emailto']);
            $message->subject('E-Mail Example');
        });

        dd('Mail Send Successfully');
    }


    // public function sendemail()
    // {
 
    //         $data_toview = array();
    //         $data_toview['bodymessage'] = "Hello send test email";
 
    //         $email_sender   = 'faisal.ishak92@gmail.com';
    //         $email_pass     = 'shineetaemintz09';
    //         $email_to       = 'taufiqnugraha48@gmail.com';
 
    //         // Backup your default mailer
    //         $backup = \Mail::getSwiftMailer();
 
    //         try{
 
    //                     //https://accounts.google.com/DisplayUnlockCaptcha
    //                     // Setup your gmail mailer
    //                     $transport = \Swift_SmtpTransport::newInstance('smtp.gmail.com', 587, 'tls');
    //                     $transport->setUsername($email_sender);
    //                     $transport->setPassword($email_pass);
 
    //                     // Any other mailer configuration stuff needed...
    //                     $gmail = new Swift_Mailer($transport);
 
    //                     // Set the mailer as gmail
    //                     \Mail::setSwiftMailer($gmail);
 
    //                     $data['emailto'] = $email_sender;
    //                     $data['sender'] = $email_to;
    //                     //Sender dan Reply harus sama
 
    //                     Mail::send('emails.html', $data_toview, function($message) use ($data)
    //                     {
 
    //                         $message->from($data['sender'], 'Laravel Mailer');
    //                         $message->to($data['emailto'])
    //                         ->replyTo($data['sender'], 'Laravel Mailer')
    //                         ->subject('Test Email');
 
    //                         echo 'The mail has been sent successfully';
 
    //                     });
 
    //         }catch(\Swift_TransportException $e){
    //             $response = $e->getMessage() ;
    //             echo $response;
    //         }
 
 
    //         // Restore your original mailer
    //         Mail::setSwiftMailer($backup);
 
    // }
}
