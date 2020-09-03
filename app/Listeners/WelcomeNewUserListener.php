<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class WelcomeNewUserListener implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param object $event
     * @return void
     */
    public function handle($event)
    {
        //Set delay before email sends
        sleep(10);

        $target_endpoint = "https://api.elasticemail.com/v2/email/send";
        $apiKey = env('ELASTIC_MAIL_API_KEY');
        $merge_firstname = $event->create_user->name;
        $msg_to = $event->create_user->email;
        try {
            $post = array(
                "from" => "gabrielilo190@gmail.com",
                "msg_to" => $msg_to,
                "subject" => "New Registration",
                "apiKey" => $apiKey,
                "msg_from" => "gabrielilo190@gmail.com",
                "msg_from_name" => "ProductAPi",
                "reply_to" => "gabrielilo190@gmail.com",
                "reply_to_name" => "ProductAPI",
                'template' => 'design_email',
                'merge_firstname' => $merge_firstname,
            );

            $cl = curl_init();
            curl_setopt($cl, CURLOPT_URL, $target_endpoint);
            curl_setopt($cl, CURLOPT_POST, true);
            curl_setopt($cl, CURLOPT_POSTFIELDS, $post);
            curl_setopt($cl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($cl, CURLOPT_SSL_VERIFYPEER, false);
            curl_exec($cl);
            curl_close($cl);
        } catch (\Exception $ex) {
            //
        }
    }
}
