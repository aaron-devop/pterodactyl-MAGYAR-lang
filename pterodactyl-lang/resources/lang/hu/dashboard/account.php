<?php

return [
    'email' => [
        'title' => 'Frissítse e-mail címét',
        'updated' => 'Az e-mail címed frissült.',
    ],
    'password' => [
        'title' => 'Változtasd meg a jelszavadat',
        'requirements' => 'Az új jelszónak legalább 8 karakter hosszúságúnak kell lennie.',
        'updated' => 'A jelszavad frissítve lett.',
    ],
    'two_factor' => [
        'button' => 'Konfigurálja a 2-faktoros hitelesítést',
        'disabled' => 'A kétlépcsős hitelesítést letiltottuk fiókjában. A továbbiakban nem kell tokent megadni bejelentkezéskor.',
        'enabled' => 'A kétlépcsős hitelesítés engedélyezve van a fiókjában! Ezentúl a bejelentkezéskor meg kell adnia a készüléke által generált kódot.',
        'invalid' => 'A megadott token érvénytelen.',
        'setup' => [
            'title' => 'Kétfaktoros hitelesítés beállítása',
            'help' => 'Nem tudja beolvasni a kódot? Írja be az alábbi kódot az Applikációból:',
            'field' => 'Írja be a tokent',
        ],
        'disable' => [
            'title' => 'A kéttényezős hitelesítés letiltása.(Nem javasoljuk!)',
            'field' => 'Írja be a tokent',
        ],
    ],
];
