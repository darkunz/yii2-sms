<?php

namespace darkunz\yii2sms;

use yii\base\Component;

/**
 * Class Twilio
 * @package darkunz\yii2sms
 */
class Twilio extends Component implements GatewayInterface
{

    /**
     *
     */
    public $sid;
    
    /**
     *
     */
    public $token;
    
    /**
     *
     */
    public $number;

    /**
     * @var \Services_Twilio
     */
    protected $client;
    
    public function init() {
        parent::init();
        $this->client = new \Services_Twilio($this->sid, $this->token);
    }
    
    /**
     * @param string|RecipientInterface $recipient either mobile number or object implementing RecipientInterface
     * @param string $message
     * @param array $options
     */
    public function send($recipient, $message, $options = []) {

        if ($recipient instanceof RecipientInterface) {
            $recipient = $recipient->getPhoneNumber();
        }

        return $this->client->account->messages->sendMessage($this->number, $recipient, $message);
    }
    
} 