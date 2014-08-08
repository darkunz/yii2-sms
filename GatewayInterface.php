<?php

namespace darkunz\yii2sms;

/**
 * Interface GatewayInterface
 * @package darkunz\yii2sms
 */
interface GatewayInterface {

    /**
     * @param string|RecipientInterface $recipient
     * @param $message
     * @return mixed
     */
    public function send($recipient, $message, $options = []);
    
} 