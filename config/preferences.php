<?php

return [
    'Timegridio\Concierge\Models\Business' => [
        'start_at'                      => ['type' => 'time', 'value' => '08:00:00'],
        'finish_at'                     => ['type' => 'time', 'value' => '19:00:00'],
        'show_map'                      => ['type' => 'bool', 'value' => false],
        'show_postal_address'           => ['type' => 'bool', 'value' => false],
        'show_phone'                    => ['type' => 'bool', 'value' => false],
        'appointment_annulation_pre_hs' => ['type' => 'int', 'value' => '48', 'step' => 1, 'icon' => 'hourglass'],
        'appointment_take_today'        => ['type' => 'bool', 'value' => false],
        'appointment_flexible_arrival'  => ['type' => 'bool', 'value' => false],
        'appointment_code_length'       => ['type' => 'int', 'value' => 4, 'icon' => 'barcode'],
        'service_default_duration'      => ['type' => 'int', 'value' => 30, 'step' => 5, 'icon' => 'hourglass'],
        'annulation_policy_advice'      => ['type' => 'string', 'value' => ''],
    ],
];
