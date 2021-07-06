<?php
namespace App\Services\Notifications;


class Sms
{
    /**
     * @var
     */
    protected $phone;

    /**
     * @var string
     */
    protected $sender;

    /**
     * @var string
     */
    protected $key;

    /**
     * @var
     */
    protected $message;

    public function __construct($phone, $message)
    {
        $this->phone = $phone;
        $this->sender = "NEXTSMS";
       
        // $this->key = "TkVYVFNNU0RFTU86TmV4dHNtc0AxMjM0";  true key
        $this->key = "VEJTX0FETUlOOlRic0AyMDE5";
        $this->message = $message;
    }

    public function send()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://smsapi.nextbyte.co.tz/sms/1/text/single",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "{ \"from\":\"{$this->sender}\", \"to\":\"{$this->phone}\", \"text\":\"{$this->message}\" }",
            CURLOPT_HTTPHEADER => array(
                "accept: application/json",
                "authorization: Basic {$this->key}",
                "content-type: application/json"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            $return = "cURL Error #:" . $err;
        } else {
            $return = $response;
        }

        return $return;
    }
}
