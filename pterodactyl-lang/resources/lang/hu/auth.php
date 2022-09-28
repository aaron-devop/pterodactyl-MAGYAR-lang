<?php

return [
    'sign_in' => 'Bejelentkezés',
    'go_to_login' => 'Lépjen a Bejelentkezés menüpontra',
    'failed' => 'Nem található ezeknek a hitelesítő adatoknak megfelelő fiók.',

    'forgot_password' => [
        'label' => 'Elfelejtette jelszavát?',
        'label_help' => 'Adja meg fiókja e-mail címét, hogy megkapja a jelszó visszaállításával kapcsolatos utasításokat.',
        'button' => 'Fiók helyreállítása',
    ],

    'reset_password' => [
        'button' => 'Állítsa vissza és jelentkezzen be',
    ],

    'two_factor' => [
        'label' => '2-faktoros token',
        'label_help' => 'Ez a fiók egy második hitelesítési réteget igényel a folytatáshoz. Kérjük, adja meg az eszköze által generált kódot a bejelentkezés befejezéséhez.',
        'checkpoint_failed' => 'A kéttényezős hitelesítési token érvénytelen.',
    ],

    'throttle' => 'Túl sok bejelentkezési kísérlet. Kérjük, próbálja újra :seconds másodperc múlva.',
    'password_requirements' => 'A jelszónak legalább 8 karakter hosszúságúnak kell lennie, és egyedinek kell lennie ezen a webhelyen.',
    '2fa_must_be_enabled' => 'Az adminisztrátor megkövetelte, hogy a panel használatához engedélyezze a kéttényezős hitelesítést a fiókjában.',
];
