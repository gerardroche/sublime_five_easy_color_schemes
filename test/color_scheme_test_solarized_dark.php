COLOR TEST "Packages/five_easy_color_schemes/Solarized (Dark).tmTheme" "PHP"
<?php

// #002b36  | base03    | 0, 43, 54           | Background Tone
// #073642  | base02    | 7, 54, 66           | Background Tone
// #268bd2  | blue      | 38, 139, 210        | Accent
// #2aa198  | cyan      |                     | Accent
// #586e75  | base01    |                     | Content Tones
// #657b83  | base00    |                     | Content Tones
// #6c71c4  | violet    |                     | Accent
// #839496  | base0     |                     | Content Tones
// #859900  | green     | 133, 153, 0         | Accent
// #93a1a1  | base1     |                     | Content Tones
// #b58900  | yellow    |                     | Accent
// #cb4b16  | orange    | 203, 75, 22         | Accent
// #d33682  | magenta   |                     | Accent
// #dc322f  | red       |                     | Accent
// #eee8d5  | base2     |                     | Background Tone
// #fdf6e3  | base3     |                     | Background Tone

      //
// ^ fg=#839496 bg=#042029 fs=

    ?>
//  ^^ fg=#d30102 fs=

    <?php
//  ^^^^^ fg=#d30102 fs=

// comment
// ^ fg=#586e75 fs=

/* comment*/
// ^ fg=#586e75 fs=

/**
 * comment
// ^ fg=#586e75 fs=
 */

null;
// ^ fg=#b58900 fs=

true;
// ^ fg=#b58900 fs=

false;
// ^ fg=#b58900 fs=

1234;
// ^ fg=#269186 fs=

1.23;
// ^ fg=#269186 fs=

'str';
// ^ fg=#269186 fs=

array();
// ^ fg=#a57800 fs=

[];

__FILE__;
// ^ fg=#b58900 fs=

USER_CONSTANT;
// ^ fg=#cb4b16 fs=

   $GLOBALS;
// ^ fg=#859900 fs=
//  ^ fg=#268bd2 fs=
   $_SERVER['DOCUMENT_ROOT'];
// ^ fg=#859900 fs=
//  ^ fg=#268bd2 fs=
   $_GET['id'];
// ^ fg=#859900 fs=
//  ^ fg=#268bd2 fs=
   $_POST['id'];
// ^ fg=#859900 fs=
//  ^ fg=#268bd2 fs=
   $_FILES;
// ^ fg=#859900 fs=
//  ^ fg=#268bd2 fs=
   $_COOKIE['id'];
// ^ fg=#859900 fs=
//  ^ fg=#268bd2 fs=
   $_SESSION['id'];
// ^ fg=#859900 fs=
//  ^ fg=#268bd2 fs=
   $_REQUEST['id'];
// ^ fg=#859900 fs=
//  ^ fg=#268bd2 fs=
   $_ENV;
// ^ fg=#859900 fs=
//  ^ fg=#268bd2 fs=
   $variable;
// ^ fg=#859900 fs=
//  ^ fg=#268bd2 fs=

echo 'str';
// ^ fg=#d30102 fs=

print('str');
// ^ fg=#d30102 fs=

isset($variable);
// ^ fg=#a57800 fs=

    const USER_CONSTANT_2 = 1;
//  ^ fg=#738a05 fs=
//        ^ fg=#cb4b16 fs=

    new stdClass();
//  ^ fg=#cb4b16 fs=
//      ^ fg=#859900

    exit;
//  ^ fg=#859900 fs=

    die;
//  ^ fg=#859900 fs=

    return;
//  ^ fg=#859900 fs=

require_once 'somefile.php';
// ^ fg=#bd3800 fs=

    if (true) {
//  ^ fg=#859900 fs=
} elseif (true) {
// ^ fg=#859900 fs=
} else {
// ^ fg=#859900 fs=
}

    switch ($expr) {
//  ^ fg=#859900 fs=
    case 1:
//  ^ fg=#859900 fs=
        break;
//      ^ fg=#859900 fs=
    default:
//  ^ fg=#859900 fs=
        break;
//      ^ fg=#859900 fs=
}

    while (false) {
//  ^ fg=#859900 fs=
}

    do {
//  ^ fg=#859900 fs=

} while (false);
// ^ fg=#859900 fs=

    for ($i = 0; $i < 2; $i++) {
//  ^ fg=#859900 fs=
}

foreach ($collection as $value) {
// ^ fg=#859900 fs=
    continue;
//  ^ fg=#859900 fs=
}

    try {
//  ^ fg=#859900 fs=

} catch (Exception $e) {
// ^ fg=#859900 fs=
//          ^ fg=#859900
} finally {
// ^ fg=#859900 fs=
}

phpversion();
// ^ fg=#268bd2 fs=

use_function();
// ^ fg=#839496 fs=

function name() {}
// ^ fg=#bd3800 fs=
//          ^ fg=#899090 fs=

interface i_name_a {}
// ^ fg=#738a05 fs=
//          ^ fg=#839496 fs=

interface i_name_b {
// ^ fg=#738a05 fs=
//          ^ fg=#839496 fs=
    public function a();
//  ^ fg=#738a05 fs=
//              ^ fg=#bd3800 fs=
//                  ^ fg=#899090 fs=
}

trait t_name_a {}
// ^ fg=#738a05 fs=
//      ^ fg=#839496 fs=

class c_name_a {}
// ^ fg=#a57800 fs=
//      ^ fg=#839496 fs=

class c_name_b extends c_name_a {}
//      ^ fg=#839496 fs=
//              ^ fg=#a57800 fs=
//                      ^ fg=#839496 fs=

class name_impl implements i_name_a {}
//      ^ fg=#839496 fs=
//              ^ fg=#738a05 fs=
//                          ^ fg=#839496 fs=

final class name_b {}
// ^ fg=#738a05 fs=
//      ^ fg=#a57800 fs=
//          ^ fg=#839496 fs=

abstract class name_c {
// ^ fg=#738a05 fs=
//          ^ fg=#a57800 fs=
//              ^ fg=#839496 fs=
    public function a() {}
//  ^ fg=#738a05 fs=
//              ^ fg=#bd3800 fs=
//                  ^ fg=#899090 fs=
    protected function b() {}
//  ^ fg=#738a05 fs=
//              ^ fg=#bd3800 fs=
//                     ^ fg=#899090 fs=
    private function c() {}
//  ^ fg=#738a05 fs=
//              ^ fg=#bd3800 fs=
//                   ^ fg=#899090 fs=
    public static function d() {}
//  ^ fg=#738a05 fs=
//          ^ fg=#738a05 fs=
//                  ^ fg=#bd3800 fs=
//                         ^ fg=#899090 fs=
    protected static function e() {}
//  ^ fg=#738a05 fs=
//              ^ fg=#738a05 fs=
//                      ^ fg=#bd3800 fs=
//                            ^ fg=#899090 fs=
    private static function f() {}
//  ^ fg=#738a05 fs=
//          ^ fg=#738a05 fs=
//                      ^ fg=#bd3800 fs=
//                          ^ fg=#899090 fs=
    abstract public function g();
//  ^ fg=#738a05 fs=
//              ^ fg=#738a05 fs=
//                      ^ fg=#bd3800 fs=
//                           ^ fg=#899090 fs=
    abstract protected function h();
//  ^ fg=#738a05 fs=
//              ^ fg=#738a05 fs=
//                      ^ fg=#bd3800 fs=
//                              ^ fg=#899090 fs=
    final public function i() {}
//  ^ fg=#738a05 fs=
//          ^ fg=#738a05 fs=
//                  ^ fg=#bd3800 fs=
//                        ^ fg=#899090 fs=
    final protected function j() {}
//  ^ fg=#738a05 fs=
//          ^ fg=#738a05 fs=
//                  ^ fg=#bd3800 fs=
//                           ^ fg=#899090 fs=
    final private function k() {}
//  ^ fg=#738a05 fs=
//          ^ fg=#738a05 fs=
//                  ^ fg=#bd3800 fs=
//                         ^ fg=#899090 fs=
}
