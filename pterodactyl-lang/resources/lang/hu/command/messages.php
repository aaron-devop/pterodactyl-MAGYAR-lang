<?php

return [
    'location' => [
        'no_location_found' => 'Nem található a megadott rövid kódnak megfelelő rekord.',
        'ask_short' => 'Hely rövid kódja',
        'ask_long' => 'Hely leírása',
        'created' => 'Sikeresen létrehoztunk egy új helyet (:name) :id azonosítóval.',
        'deleted' => 'A kért hely sikeresen törölve.',
    ],
    'user' => [
        'search_users' => 'Adjon meg egy felhasználónevet, felhasználói azonosítót vagy e-mail címet',
        'select_search_user' => 'A törölni kívánt felhasználó azonosítója (az újbóli kereséshez írja be a \'0\' értéket)',
        'deleted' => 'A felhasználó sikeresen törölve a Panelből.',
        'confirm_delete' => 'Biztosan törli ezt a felhasználót a Panelből?',
        'no_users_found' => 'A megadott keresési kifejezésre nem található felhasználó.',
        'multiple_found' => 'A megadott felhasználóhoz több fiók is található, de a --no-interaction jelző miatt nem lehet törölni egy felhasználót.',
        'ask_admin' => 'Ez a felhasználó Adminisztrátor?',
        'ask_email' => 'Email Cím',
        'ask_username' => 'Felhasználónév',
        'ask_name_first' => 'Vezetéknév',
        'ask_name_last' => 'Keresztnév',
        'ask_password' => 'Jelszó',
        'ask_password_tip' => 'Ha szeretne létrehozni egy fiókot a felhasználónak e-mailben elküldött véletlenszerű jelszóval, futtassa újra ezt a parancsot (CTRL+C), és adja át a "--no-password" jelzőt.',
        'ask_password_help' => 'A jelszavaknak legalább 8 karakter hosszúságúnak kell lenniük, és legalább egy nagybetűt és számot kell tartalmazniuk.',
        '2fa_help_text' => [
            'Ez a parancs letiltja a 2-faktoros hitelesítést a felhasználói fiókban, ha az engedélyezve van. Ezt csak fiók-helyreállítási parancsként szabad használni, ha a felhasználó ki van zárva a fiókjából.',
            'Ha nem ezt akarta, nyomja le a CTRL+C billentyűkombinációt a folyamatból való kilépéshez.',
        ],
        '2fa_disabled' => 'A 2-faktoros hitelesítés le van tiltva a(z) :email számára.',
    ],
    'schedule' => [
        'output_line' => 'Dispatching job for first task in `:schedule` (:hash).',
    ],
    'maintenance' => [
        'deleting_service_backup' => 'A szolgáltatás biztonsági másolatának törlése :file.',
    ],
    'server' => [
        'rebuild_failed' => 'A ":name" (#:id) újraépítési kérelme a ":node" csomóponton meghiúsult a következő hibával: :message',
        'reinstall' => [
            'failed' => 'A ":name" (#:id) újratelepítési kérelme a ":node" csomóponton meghiúsult a következő hibával: :message',
            'confirm' => 'Újratelepítésre készül egy kiszolgálócsoport ellen. Szeretnéd folytatni?',
        ],
        'power' => [
            'confirm' => ':actiont készül végrehajtani a :count szerverek ellen. Szeretnéd folytatni?',
            'action_failed' => 'A ":name" (#:id) számára a ":node" csomóponton lévő energiaellátási művelet kérése sikertelen volt a következő hibával: :message',
        ],
    ],
    'environment' => [
        'mail' => [
            'ask_smtp_host' => 'SMTP Host (e.g. smtp.gmail.com)',
            'ask_smtp_port' => 'SMTP Port',
            'ask_smtp_username' => 'SMTP Felhasználónév',
            'ask_smtp_password' => 'SMTP Jelszó',
            'ask_mailgun_domain' => 'Mailgun Domain',
            'ask_mailgun_endpoint' => 'Mailgun Endpoint',
            'ask_mailgun_secret' => 'Mailgun Secret',
            'ask_mandrill_secret' => 'Mandrill Secret',
            'ask_postmark_username' => 'Postmark API Key',
            'ask_driver' => 'Melyik illesztőprogramot érdemes használni az e-mailek küldéséhez?',
            'ask_mail_from' => 'Az e-mail címeknek az e-maileknek innen kell származniuk',
            'ask_mail_name' => 'Név, amelyről az e-maileket meg kell jeleníteni',
            'ask_encryption' => 'Használandó titkosítási módszer',
        ],
    ],
];
