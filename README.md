<img src="http://i.imgur.com/YoGNUXR.png" alt="Existence" align="left" height="60" />

# Existence *for Craft CMS*

> This plugin is no longer maintained. I'm committing to Craft 3 development only. Feel free to use the source code as you like. If you're looking for a Craft 3 version of this plugin, it's likely I've merged parts or all of this plugin into my [Helpers module.](https://github.com/marknotton/craft-module-helpers)

Simple filter that checks if a file or directory string exists locally.

#### Usage
```
{{ "/assets/images/logo.png"|exists }}
```

Will return a Boolean. **true** if found and **false** if not. The same filter can be used to check if a directory exists.

You can also pass in ```false``` if you want to check files relative to the system root ('public_html/public'). Or ```true``` if your files are relative to each locale directory.

By default this is set to ```false``` unless you amend the plugin settings.

```
{{ "/assets/images/logo.png"|exists(true) }}
```
