<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use Log;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    private $messageQuery;
    // private $email;
    // private $phone;
    // private $name;
    // public $subject;

//    public function __construct($messageQuery,$email,$phone,$name,$subject,$branding,$social,$digitalMarketing,$webStrategy,$uiux,$cGeneration,$eventManagement)
//    {
//
//        $this->messageQuery = $messageQuery;
//        $this->email = $email;
//        $this->phone = $phone;
//        $this->name = $name;
//        $this->subject = $subject;
//        $this->branding = $branding;
//        $this->social = $social;
//        $this->digitalMarketing = $digitalMarketing;
//        $this->webStrategy = $webStrategy;
//        $this->uiux = $uiux;
//        $this->cGeneration = $cGeneration;
//        $this->eventManagement = $eventManagement;
///*        $this->coverLetter = $coverLetter;
//        $this->cvSend = $cvSend;
//        $this->portfolioLink = $portfolioLink;*/
//    }
//
//    public function build()
//    {
//        return $this->view('email.client')->subject($this->subject)->with([
//            'subject' => $this->subject,
//            'messageQuery' => $this->messageQuery,
//            'Email' => $this->email,
//            'Phone' => $this->phone,
//            'Name' => $this->name,
//            'clientQueryRequest1' => $this->branding,
//            'clientQueryRequest2' => $this->social,
//            'clientQueryRequest3' => $this->digitalMarketing,
//            'clientQueryRequest4' => $this->webStrategy,
//            'clientQueryRequest5' => $this->uiux,
//            'clientQueryRequest6' => $this->cGeneration,
//            'clientQueryRequest7' => $this->eventManagement,
///*            'coverLetter' => $this->coverLetter,
//            'cvSend' => $this->cvSend,
//            'portfolioLink' => $this->portfolioLink,*/
//        ]);
//    }

    public function __construct($data=[])
        {
            $this->data = $data;
        }


    public function build(){
        Log::info("This is mail Model");
        if ($this->data['document'] != NULL){
            return $this ->from('rana@nexkraft.com')->subject($this->data['subject'])->view
            ('email.client')->with('data', $this->data)->attach($this->data['document']->getRealPath(),
                [
                    'as' => $this->data['document']->getClientOriginalName(),
                    'mime' => $this->data['document']->getClientMimeType(),
                ]);
        }
        else{
            return $this ->from('rana@nexkraft.com')->subject('BlackBoard Query')->view
            ('email.client')->with('data', $this->data);
        }

    }

}