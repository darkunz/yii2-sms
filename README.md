SMS Component for Yii 2
========================

Note: Only using Twilio at the moment.

### Setup


```
// app/config/main.php
return [
    ...
    'components' => [
        ...
        'sms' => [
            'class' => 'darkunz\yii2sms\Twilio',
            'sid' => ''
            'token' => '',
            'number' => '',
        ]
        ...
    ]
    ...
];
```

### Usage

```
class User extends AR implements RecipientInterface {
    ...
    public function getMobileNumber() {
        return $this->profile->mobile_number;
    }
    ...
}

$user = User::findByPk(1);
Yii::$app->sms->send($user, 'Hi');

// or

Yii::$app->sms->send('+612345678910', 'Hi');
```