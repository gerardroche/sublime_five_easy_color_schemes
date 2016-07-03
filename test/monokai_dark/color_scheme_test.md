COLOR TEST "Packages/five_easy_color_schemes/Monokai (Dark).tmTheme" "Markdown"

   //
//^ fg=#f8f8f2 bg=#272822 fs=

Headers

# This is an <h1> tag
// ^ fg=#fd971f fs=bold
## This is an <h2> tag
// ^ fg=#fd971f fs=bold
###### This is an <h6> tag
// ^ fg=#fd971f fs=bold
//      ^ fg=#fd971f fs=bold

Emphasis

*This text will be italic*
// ^ fg=#f8f8f2 fs=italic
_This will also be italic_
// ^ fg=#f8f8f2 fs=italic

**This text will be bold**
// ^ fg=#f8f8f2 fs=bold
__This will also be bold__
// ^ fg=#f8f8f2 fs=bold

_You **can** combine them_
// ^ fg=#f8f8f2 fs=italic
//   ^^^^^^^ fg=#f8f8f2 fs=bold
//           ^ fg=#f8f8f2 fs=italic

Lists

Unordered

* Item 1
* Item 2
  * Item 2a
  * Item 2b

Ordered

1. Item 1
2. Item 2
3. Item 3
   * Item 3a
   * Item 3b

Images

![GitHub Logo](/images/logo.png)
//              ^ fg=#66d9ef fs=underline
Format: ![Alt Text](url)
//                  ^ fg=#66d9ef fs=underline

Links

http://github.com - automatic!
[GitHub](http://github.com)
//        ^ fg=#66d9ef fs=underline

Blockquotes

As Kanye West said:

  > We're living the future so
  > the present is our past.
//^ fg=#75715e bg=#3e3d32 fs=italic
//  ^ fg=#f8f8f2 bg=#3e3d32 fs=italic

Inline code

I think you should use an
`<addr>` element here instead.

Syntax highlighting

Here's an example of how you can use syntax highlighting with GitHub Flavored Markdown:

```javascript
function fancyAlert(arg) {
  if(arg) {
    $.facebox({div:'#foo'})
  }
}
```

You can also simply indent your code by four spaces:

    function fancyAlert(arg) {
      if(arg) {
        $.facebox({div:'#foo'})
      }
    }

Here's an example of Python code without syntax highlighting:

def foo():
    if not bar:
        return True

Task Lists

- [x] @mentions, #refs, [links](), **formatting**, and <del>tags</del> supported
- [x] list syntax required (any unordered or ordered list supported)
- [x] this is a complete item
- [ ] this is an incomplete item

If you include a task list in the first comment of an Issue, you will get a handy progress indicator in your issue list. It also works in Pull Requests!