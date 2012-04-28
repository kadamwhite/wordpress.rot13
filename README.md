# A Rot13 Encoder shortcode for [WordPress](http://www.wordpress.org/)

This plugin is designed to make it excrutiatingly easy to discuss spoilers in your blog posts without potentially offending your readers. Any text enclosed within a [rot13] shortcode in the WordPress editor will be automatically obfuscated using [rot13 encoding](http://www.rot13.com/info.php). By default, a link to [rot13](http://rot13.com/) will be inserted next to the text to aid in decryption.

## Usage

Within the WordPress editor, enclose any text you wish to encode with the [rot13] [shortcode](http://codex.wordpress.org/Shortcode). The shortcode should respect any formatting on your text, so feel free to embolden, italicize or underline your text as you normally would&mdash;and submit an [issue](https://github.com/kadamwhite/wordpress.rot13/issues) if you find that my plugin is messing up your styles!

You may apply the shortcode within any WordPress editor: it should work the same whether you are using the default visual editor, the fullscreen ("distraction free") editor or the HTML mode.

Example:

>This line contains a [rot13]**rot13-encoded** string, which is *really* neat[/rot13].

becomes

>This line contains a **ebg13-rapbqrq fgevat**, juvpu vf *ernyyl* arng ([rot13.com][]).

## Options

### showlink

By default this plugin will include a link to [rot13.com][] after the encoded text, to aid users in decrypting the output (see the example above). If you wish to hide this link, you may specify `showlink="false"` within the opening shortcode tag:

>```php
[rot13 showlink="false"]Some Text![/rot13]
```

will yield

> Some Text!

## Future Enhancements

* Inline decryption using my [jQuery Rot13 plugin](https://github.com/kadamwhite/jquery.rot13)
* Superfluous visual effects: character-by-character decryption animations
* An option to omit the JavaScript component

[rot13.com]: http://rot13.com/