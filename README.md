# DM Browser Detect
Uses shortcodes to wrap content and display or hide it depending on the selected browsers.

### Hiding Content
Use the "dmbrowserdetecthide" shortcode to hide content. The "browsers" attribute is where you list the browsers you wish to  hide content for.

This will hide content in Chrome and Firefox.
```
[dmbrowserdetecthide browsers="chrome firefox"]

Hide this in chrome and firefox

[/dmbrowserdetecthide]
```

### Showing Content
The "dmbrowserdetectshow" shortcode will automatically hide all content inside and only show it if the user using one of the selected browsers.

This will show content only in mobile ios browsers (ipad/ipod/iphone).
```
[dmbrowserdetectshow browsers="ios"]

Show this on ios

[/dmbrowserdetectshow]
```
