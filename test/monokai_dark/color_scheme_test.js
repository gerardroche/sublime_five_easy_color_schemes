COLOR TEST "Packages/five_easy_color_schemes/Monokai (Dark).tmTheme" "JavaScript"

      //
// ^ fg=#f8f8f2 bg=#272822 fs=

function $initHighlight(block, cls) {
// ^ fg=#66d9ef fs=italic
//        ^ fg=#a6e22e fs=
  try {
// ^ fg=#f92672 fs=
    if (cls.search(/\bno\-highlight\b/) != -1)
//  ^ fg=#f92672 fs=
//          ^ fg=#66d9ef fs=
//                 ^ fg=#e6db74 fs=
//                  ^^ fg=#f92672 fs=
//                    ^^ fg=#e6db74 fs=
//                      ^^ fg=#ae81ff fs=
//                        ^^^^^^^^^ fg=#e6db74 fs=
//                                 ^^ fg=#f92672 fs=
//                                   ^ fg=#e6db74 fs=
//                                      ^^ fg=#f92672 fs=
//                                         ^ fg=#f92672 fs=
//                                          ^ fg=#ae81ff fs=
      return process(block, true, 0x0F) +
//      ^ fg=#f92672 fs=
//            ^ fg=#66d9ef fs=
//                          ^ fg=#ae81ff fs=
//                                  ^ fg=#ae81ff fs=
//                                      ^ fg=#f92672 fs=
             ` class="${cls}"`;
//                  ^ fg=#e6db74 fs=
  } catch (e) {
//  ^ fg=#f92672 fs=
    /* handle exception */
  }
  for (var i = 0 / 2; i < classes.length; i++) {
// ^ fg=#f92672 fs=
//     ^ fg=#66d9ef fs=italic
//           ^ fg=#f92672 fs=
//             ^ fg=#ae81ff fs=
//               ^ fg=#f92672 fs=
//                 ^ fg=#ae81ff fs=
//                      ^ fg=#f92672 fs=
//                                         ^^ fg=#f92672 fs=
//      ^ fg=#66d9ef fs=italic
    if (checkCondition(classes[i]) === undefined)
//  ^ fg=#f92672 fs=
//      ^ fg=#66d9ef fs=
//                                 ^^^ fg=#f92672 fs=
//                                      ^ fg=#ae81ff fs=
      console.log('undefined');
//      ^ fg=#66d9ef fs=italic
//            ^ fg=#66d9ef fs=
//                  ^ fg=#e6db74 fs=
  }
}

export  $initHighlight;
// ^ fg=#f92672 fs=
