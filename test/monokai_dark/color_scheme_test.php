COLOR TEST "Packages/five_easy_color_schemes/Monokai (Dark).tmTheme" "PHP"
<?php

      //
// ^ fg=#f8f8f2 bg=#272822 fs=

     ?>
<!-- ^^ fg=#f8f8f2 fs= -->

    <?php
//  ^^^^^ fg=#f8f8f2 fs=

    // comment
//  ^^^^^^^^^^ fg=#75715e fs=

    /* comment */
//  ^^^^^^^^^^^^^ fg=#75715e fs=

    /** comment */
//  ^^^^^^^^^^^^^^ fg=#75715e fs=

    /*
//  ^^ fg=#75715e fs=

        comment
// ^^^^^^^^^^^^ fg=#75715e fs=

    */
// ^^^ fg=#75715e fs=

    /**
     * comment
     */
// ^^^^ fg=#75715e fs=

    null;
//  ^ fg=#ae81ff fs=
//      ^ fg=#f8f8f2 fs=

    true;
//  ^ fg=#ae81ff fs=
//      ^ fg=#f8f8f2 fs=

    false;
//  ^ fg=#ae81ff fs=
//       ^ fg=#f8f8f2 fs=

    1234;
//  ^ fg=#ae81ff fs=
//      ^ fg=#f8f8f2 fs=

    1.23;
//  ^ fg=#ae81ff fs=
//      ^ fg=#f8f8f2 fs=

    'str';
//  ^^^^^ fg=#e6db74 fs=
//       ^ fg=#f8f8f2 fs=

    array();
//  ^^^^^ fg=#66d9ef fs=
//       ^^ fg=#f8f8f2 fs=
//         ^ fg=#f8f8f2 fs=

    [];
//  ^^ fg=#f8f8f2 fs=
//    ^ fg=#f8f8f2 fs=

    __FILE__;
//  ^^^^^^^^ fg=#ae81ff fs=
//          ^ fg=#f8f8f2 fs=

    PHP_VERSION;
//  ^ fg=#66d9ef fs=
//             ^ fg=#f8f8f2 fs=

    USER_CONSTANT;
//  ^ fg=#ae81ff fs=
//               ^ fg=#f8f8f2 fs=

   $GLOBALS;
// ^^^^^^^^^ fg=#f8f8f2 fs=

   $_SERVER['DOCUMENT_ROOT'];
// ^^^^^^^^^ fg=#f8f8f2 fs=
//          ^^^^^^^^^^^^^^^ fg=#e6db74 fs=
//                         ^^ fg=#f8f8f2 fs=

   $_GET['id'];
// ^^^^^^ fg=#f8f8f2 fs=
//       ^^^^ fg=#e6db74 fs=
//           ^^ fg=#f8f8f2 fs=

   $_POST['id'];
// ^^^^^^^ fg=#f8f8f2 fs=
//        ^^^^ fg=#e6db74 fs=
//            ^^ fg=#f8f8f2 fs=

   $_FILES;
// ^^^^^^^^ fg=#f8f8f2 fs=

   $_COOKIE['id'];
// ^^^^^^^^^ fg=#f8f8f2 fs=
//          ^^^^ fg=#e6db74 fs=
//              ^^ fg=#f8f8f2 fs=

   $_SESSION['id'];
// ^^^^^^^^^^ fg=#f8f8f2 fs=
//           ^^^^ fg=#e6db74 fs=
//               ^^ fg=#f8f8f2 fs=

   $_REQUEST['id'];
// ^^^^^^^^^^ fg=#f8f8f2 fs=
//           ^^^^ fg=#e6db74 fs=
//               ^^ fg=#f8f8f2 fs=

   $_ENV;
// ^^^^^^ fg=#f8f8f2 fs=

   $var;
// ^^^^^ fg=#f8f8f2 fs=

echo 'str';
// ^ fg=#66d9ef fs=
//   ^^^^^ fg=#e6db74 fs=
//        ^ fg=#f8f8f2 fs=

echo "str";
// ^ fg=#66d9ef fs=
//   ^^^^^ fg=#e6db74 fs=
//        ^ fg=#f8f8f2 fs=

echo "str\t\ning";
// ^ fg=#66d9ef fs=
//   ^^^^ fg=#e6db74 fs=
//       ^^^^ fg=#ae81ff fs=
//           ^^^^ fg=#e6db74 fs=
//               ^ fg=#f8f8f2 fs=

print('str');
// ^ fg=#66d9ef fs=
//   ^ fg=#f8f8f2 fs=
//    ^^^^^ fg=#e6db74 fs=
//         ^^ fg=#f8f8f2 fs=

isset($var);
// ^^ fg=#66d9ef fs=
//   ^^^^^^^ fg=#f8f8f2 fs=

    const USER_CONSTANT_2 = 1;
//  ^ fg=#f92672 fs=
//        ^ fg=#ae81ff fs=
//                        ^ fg=#f92672 fs=
//                          ^ fg=#ae81ff fs=
//                           ^ fg=#f8f8f2 fs=

    new stdClass();
//  ^ fg=#f92672 fs=
//      ^ fg=#66d9ef fs=italic
//              ^^ fg=#f8f8f2 fs=
//                ^ fg=#f8f8f2 fs=

    exit;
//  ^ fg=#f92672 fs=
//      ^ fg=#f8f8f2 fs=

    die;
//  ^ fg=#f92672 fs=
//     ^ fg=#f8f8f2 fs=

    return;
//  ^ fg=#f92672 fs=
//        ^ fg=#f8f8f2 fs=

    require_once 'file.php';
//  ^ fg=#f92672 fs=
//               ^^^^^^^^^ fg=#e6db74 fs=

    if ($arg == 1) {
//  ^^ fg=#f92672 fs=
//     ^^^^^ fg=#f8f8f2 fs=
//           ^^ fg=#f92672 fs=
//              ^ fg=#ae81ff fs=
//               ^ fg=#f8f8f2 fs=
//                 ^ fg=#f8f8f2 fs=
        try {
//      ^^^ fg=#f92672 fs=
//          ^ fg=#f8f8f2 fs=

        } catch (Exception $e) {
//      ^ fg=#f8f8f2 fs=
//        ^^^^^ fg=#f92672 fs=
//              ^ fg=#f8f8f2 fs=
//               ^^^^^^^^^ fg=#66d9ef fs=italic
//                         ^^^ fg=#f8f8f2 fs=
//                             ^ fg=#f8f8f2 fs=
        } finally {
//      ^ fg=#f8f8f2 fs=
//        ^^^^^^^ fg=#f92672 fs=
//                ^ fg=#f8f8f2 fs=
        }
//      ^ fg=#f8f8f2 fs=

        for ($i = 0; $i < 2; $i++) {
//      ^^^ fg=#f92672 fs=
//          ^^^ fg=#f8f8f2 fs=
//              ^ fg=#f92672 fs=
//                ^ fg=#ae81ff fs=
//                 ^ fg=#f8f8f2 fs=
//                   ^^ fg=#f8f8f2 fs=
//                      ^ fg=#f92672 fs=
//                        ^ fg=#ae81ff fs=
//                         ^ fg=#f8f8f2 fs=
//                           ^^ fg=#f8f8f2 fs=
//                             ^^ fg=#f92672 fs=
//                               ^ fg=#f8f8f2 fs=
//                                 ^ fg=#f8f8f2 fs=
        }
//      ^ fg=#f8f8f2 fs=

        foreach ($collection as $value) {
//      ^^^^^^^ fg=#f92672 fs=
//              ^^^^^^^^^^^^ fg=#f8f8f2 fs=
//                           ^^ fg=#f92672 fs=
//                              ^^^^^^^ fg=#f8f8f2 fs=
//                                      ^ fg=#f8f8f2 fs=

            continue;
//          ^^^^^^^^ fg=#f92672 fs=
//                  ^ fg=#f8f8f2 fs=
        }
//      ^ fg=#f8f8f2 fs=

        switch ($expr) {
//      ^^^^^^ fg=#f92672 fs=
//             ^^^^^^^ fg=#f8f8f2 fs=
//                     ^ fg=#f8f8f2 fs=

            case 1:
//          ^^^^ fg=#f92672 fs=
//               ^ fg=#ae81ff fs=
//                ^ fg=#f8f8f2 fs=
                break;
//              ^^^^^ fg=#f92672 fs=
//                   ^ fg=#f8f8f2 fs=

            default:
//          ^^^^^^^ fg=#f92672 fs=
//                 ^ fg=#f8f8f2 fs=
                break;
//              ^^^^^ fg=#f92672 fs=
//                   ^ fg=#f8f8f2 fs=
        }
//      ^ fg=#f8f8f2 fs=

    } elseif ($arg === 1) {
//  ^ fg=#f8f8f2 fs=
//    ^^^^^ fg=#f92672 fs=
//           ^^^^^ fg=#f8f8f2 fs=
//                 ^^^ fg=#f92672 fs=
//                     ^ fg=#ae81ff fs=
//                      ^ fg=#f8f8f2 fs=
//                        ^ fg=#f8f8f2 fs=

        while (1 >= 3) {
//      ^^^^^ fg=#f92672 fs=
//            ^ fg=#f8f8f2 fs=
//             ^ fg=#ae81ff fs=
//               ^^ fg=#f92672 fs=
//                  ^ fg=#ae81ff fs=
//                   ^ fg=#f8f8f2 fs=
//                     ^ fg=#f8f8f2 fs=
        }
//      ^ fg=#f8f8f2 fs=

    } else {
//  ^ fg=#f8f8f2 fs=
//    ^^^^ fg=#f92672 fs=
//         ^ fg=#f8f8f2 fs=

        do {
//      ^^ fg=#f92672 fs=
//         ^ fg=#f8f8f2 fs=
        } while (false);
//      ^ fg=#f8f8f2 fs=
//        ^^^^^ fg=#f92672 fs=
//              ^ fg=#f8f8f2 fs=
//               ^^^^^ fg=#ae81ff fs=
//                    ^^ fg=#f8f8f2 fs=
    }
//  ^ fg=#f8f8f2 fs=

phpversion();
// ^^^^^^^ fg=#66d9ef fs=
//        ^^ fg=#f8f8f2 fs=
//          ^ fg=#f8f8f2 fs=

use_func();
// ^^^^^^^^ fg=#f8f8f2 fs=

function name() {}
// ^^^^^ fg=#66d9ef fs=italic
//       ^^^^ fg=#a6e22e fs=
//           ^^ fg=#f8f8f2 fs=
//              ^^ fg=#f8f8f2 fs=

interface i_name_a {}
// ^ fg=#66d9ef fs=italic
//        ^ fg=#a6e22e fs=
//                 ^^ fg=#f8f8f2 fs=

interface i_name_b {
// ^ fg=#66d9ef fs=italic
//        ^ fg=#a6e22e fs=
//                 ^ fg=#f8f8f2 fs=

    public function a();
//  ^ fg=#f92672 fs=
//         ^ fg=#66d9ef fs=italic
//                  ^ fg=#a6e22e fs=
//                   ^^^ fg=#f8f8f2 fs=

   }
// ^ fg=#f8f8f2 fs=

trait t_name_a {}
// ^ fg=#66d9ef fs=italic
//    ^ fg=#a6e22e fs=

class c_name_a {}
// ^ fg=#66d9ef fs=italic
//    ^ fg=#a6e22e fs=

class c_name_b extends c_name_a {}
//    ^ fg=#a6e22e fs=
//             ^ fg=#f92672 fs=
//                     ^ fg=#a6e22e fs=italic

class name_impl implements i_name_a {}
//    ^ fg=#a6e22e fs=
//              ^ fg=#f92672 fs=
//                         ^ fg=#a6e22e fs=italic

final class name_b {}
// ^ fg=#f92672 fs=
//    ^ fg=#66d9ef fs=italic
//          ^ fg=#a6e22e fs=

abstract class name_c {
// ^ fg=#f92672 fs=
//       ^ fg=#66d9ef fs=italic
//             ^ fg=#a6e22e fs=

    public function a() {}
//  ^ fg=#f92672 fs=
//         ^ fg=#66d9ef fs=italic
//                  ^ fg=#a6e22e fs=

    protected function b() {}
//  ^ fg=#f92672 fs=
//            ^ fg=#66d9ef fs=italic
//                     ^ fg=#a6e22e fs=

    private function c() {}
//  ^ fg=#f92672 fs=
//          ^ fg=#66d9ef fs=italic
//                   ^ fg=#a6e22e fs=

    public static function d() {}
//  ^ fg=#f92672 fs=
//         ^ fg=#f92672 fs=
//                ^ fg=#66d9ef fs=italic
//                         ^ fg=#a6e22e fs=

    protected static function e() {}
//  ^ fg=#f92672 fs=
//            ^ fg=#f92672 fs=
//                   ^ fg=#66d9ef fs=italic
//                            ^ fg=#a6e22e fs=

    private static function f() {}
//  ^ fg=#f92672 fs=
//          ^ fg=#f92672 fs=
//                 ^ fg=#66d9ef fs=italic
//                          ^ fg=#a6e22e fs=

    abstract public function g();
//  ^ fg=#f92672 fs=
//           ^ fg=#f92672 fs=
//                  ^ fg=#66d9ef fs=italic
//                           ^ fg=#a6e22e fs=

    abstract protected function h();
//  ^ fg=#f92672 fs=
//           ^ fg=#f92672 fs=
//                     ^ fg=#66d9ef fs=italic
//                              ^ fg=#a6e22e fs=

    final public function i() {}
//  ^ fg=#f92672 fs=
//        ^ fg=#f92672 fs=
//               ^ fg=#66d9ef fs=italic
//                        ^ fg=#a6e22e fs=

    final protected function j() {}
//  ^ fg=#f92672 fs=
//        ^ fg=#f92672 fs=
//                  ^ fg=#66d9ef fs=italic
//                           ^ fg=#a6e22e fs=

    final private function k() {}
//  ^ fg=#f92672 fs=
//        ^ fg=#f92672 fs=
//                ^ fg=#66d9ef fs=italic
//                         ^ fg=#a6e22e fs=

   }
// ^ fg=#f8f8f2 fs=
