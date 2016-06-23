COLOR TEST "Packages/five_easy_color_schemes/Monokai (Dark).tmTheme" "PHP"
<?php

      //
// ^ fg=#f8f8f2 bg=#272822 fs=

    ?>
//  ^^ fg=#f8f8f2 fs=

    <?php
//  ^^^^^ fg=#f8f8f2 fs=

// comment
// ^ fg=#75715e fs=

/* comment*/
// ^ fg=#75715e fs=

/**
 * comment
// ^ fg=#75715e fs=
 */

null;
// ^ fg=#ae81ff fs=

true;
// ^ fg=#ae81ff fs=

false;
// ^ fg=#ae81ff fs=

1234;
// ^ fg=#ae81ff fs=

1.23;
// ^ fg=#ae81ff fs=

'str';
// ^ fg=#e6db74 fs=

array();
// ^ fg=#66d9ef fs=

[];

__FILE__;
// ^ fg=#ae81ff fs=

USER_CONSTANT;
// ^ fg=#ae81ff fs=

   $GLOBALS;
// ^^ fg=#f8f8f2 fs=
   $_SERVER['DOCUMENT_ROOT'];
// ^^ fg=#f8f8f2 fs=
   $_GET['id'];
// ^^ fg=#f8f8f2 fs=
   $_POST['id'];
// ^^ fg=#f8f8f2 fs=
   $_FILES;
// ^^ fg=#f8f8f2 fs=
   $_COOKIE['id'];
// ^^ fg=#f8f8f2 fs=
   $_SESSION['id'];
// ^^ fg=#f8f8f2 fs=
   $_REQUEST['id'];
// ^^ fg=#f8f8f2 fs=
   $_ENV;
// ^^ fg=#f8f8f2 fs=
   $variable;
// ^^ fg=#f8f8f2 fs=

echo 'str';
// ^ fg=#66d9ef fs=

print('str');
// ^ fg=#66d9ef fs=

isset($variable);
// ^ fg=#66d9ef fs=

    const USER_CONSTANT_2 = 1;
//  ^ fg=#f92672 fs=
//        ^ fg=#ae81ff fs=
//                        ^ fg=#f92672 fs=
//                          ^ fg=#ae81ff fs=

    new stdClass();
//  ^ fg=#f92672 fs=
//      ^ fg=#66d9ef fs=italic

    exit;
//  ^ fg=#f92672 fs=

    die;
//  ^ fg=#f92672 fs=

    return;
//  ^ fg=#f92672 fs=

require_once 'somefile.php';
// ^ fg=#f92672 fs=

    if ($arg == 1) {
//  ^ fg=#f92672 fs=
//           ^^ fg=#f92672 fs=
//              ^ fg=#ae81ff fs=
} elseif ($arg === 1) {
// ^ fg=#f92672 fs=
//             ^^^ fg=#f92672 fs=
//                 ^ fg=#ae81ff fs=
} else {
// ^ fg=#f92672 fs=
}

    switch ($expr) {
//  ^ fg=#f92672 fs=
    case 1:
//  ^ fg=#f92672 fs=
//       ^ fg=#ae81ff fs=
        break;
//      ^ fg=#f92672 fs=
    default:
//  ^ fg=#f92672 fs=
        break;
//      ^ fg=#f92672 fs=
}

    while (1 >= 3) {
//  ^ fg=#f92672 fs=
//         ^ fg=#ae81ff fs=
//           ^^ fg=#f92672 fs=
//              ^ fg=#ae81ff fs=
}

    do {
//  ^ fg=#f92672 fs=

} while (false);
// ^ fg=#f92672 fs=

    for ($i = 0; $i < 2; $i++) {
//  ^ fg=#f92672 fs=
}

foreach ($collection as $value) {
// ^ fg=#f92672 fs=
    continue;
//  ^ fg=#f92672 fs=
}

    try {
//  ^ fg=#f92672 fs=

} catch (Exception $e) {
// ^ fg=#f92672 fs=
//          ^ fg=#66d9ef fs=italic
} finally {
// ^ fg=#f92672 fs=
}

phpversion();
// ^ fg=#66d9ef fs=

use_function();
// ^ fg=#f8f8f2 fs=

function name() {}
// ^ fg=#66d9ef fs=italic
//          ^ fg=#a6e22e fs=

interface i_name_a {}
// ^ fg=#66d9ef fs=italic
//          ^ fg=#a6e22e fs=

interface i_name_b {
// ^ fg=#66d9ef fs=italic
//          ^ fg=#a6e22e fs=
    public function a();
//  ^ fg=#f92672 fs=
//              ^ fg=#66d9ef fs=italic
//                  ^ fg=#a6e22e fs=
}

trait t_name_a {}
// ^ fg=#66d9ef fs=italic
//      ^ fg=#a6e22e fs=

class c_name_a {}
// ^ fg=#66d9ef fs=italic
//      ^ fg=#a6e22e fs=

class c_name_b extends c_name_a {}
//      ^ fg=#a6e22e fs=
//              ^ fg=#f92672 fs=
//                      ^ fg=#a6e22e fs=italic underline

class name_impl implements i_name_a {}
//      ^ fg=#a6e22e fs=
//              ^ fg=#f92672 fs=
//                          ^ fg=#a6e22e fs=italic underline

final class name_b {}
// ^ fg=#f92672 fs=
//      ^ fg=#66d9ef fs=italic
//          ^ fg=#a6e22e fs=

abstract class name_c {
// ^ fg=#f92672 fs=
//          ^ fg=#66d9ef fs=italic
//              ^ fg=#a6e22e fs=
    public function a() {}
//  ^ fg=#f92672 fs=
//              ^ fg=#66d9ef fs=italic
//                  ^ fg=#a6e22e fs=
    protected function b() {}
//  ^ fg=#f92672 fs=
//              ^ fg=#66d9ef fs=italic
//                     ^ fg=#a6e22e fs=
    private function c() {}
//  ^ fg=#f92672 fs=
//              ^ fg=#66d9ef fs=italic
//                   ^ fg=#a6e22e fs=
    public static function d() {}
//  ^ fg=#f92672 fs=
//          ^ fg=#f92672 fs=
//                  ^ fg=#66d9ef fs=italic
//                         ^ fg=#a6e22e fs=
    protected static function e() {}
//  ^ fg=#f92672 fs=
//              ^ fg=#f92672 fs=
//                      ^ fg=#66d9ef fs=italic
//                            ^ fg=#a6e22e fs=
    private static function f() {}
//  ^ fg=#f92672 fs=
//          ^ fg=#f92672 fs=
//                      ^ fg=#66d9ef fs=italic
//                          ^ fg=#a6e22e fs=
    abstract public function g();
//  ^ fg=#f92672 fs=
//              ^ fg=#f92672 fs=
//                      ^ fg=#66d9ef fs=italic
//                           ^ fg=#a6e22e fs=
    abstract protected function h();
//  ^ fg=#f92672 fs=
//              ^ fg=#f92672 fs=
//                      ^ fg=#66d9ef fs=italic
//                              ^ fg=#a6e22e fs=
    final public function i() {}
//  ^ fg=#f92672 fs=
//          ^ fg=#f92672 fs=
//                  ^ fg=#66d9ef fs=italic
//                        ^ fg=#a6e22e fs=
    final protected function j() {}
//  ^ fg=#f92672 fs=
//          ^ fg=#f92672 fs=
//                  ^ fg=#66d9ef fs=italic
//                           ^ fg=#a6e22e fs=
    final private function k() {}
//  ^ fg=#f92672 fs=
//          ^ fg=#f92672 fs=
//                  ^ fg=#66d9ef fs=italic
//                         ^ fg=#a6e22e fs=
}
