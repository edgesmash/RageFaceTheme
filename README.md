----------------------------------------
README for RageFaceTheme
----------------------------------------

There is no warranty for this software. I just made it because I was bored. You're on your own. Have fun!

# Installation #

Installation depends on your IM client. Currently, RageFaceTheme supports [Pidgin](https://www.pidgin.im/), [Colloquy](http://colloquy.info/), and [Adium](http://adium.im/).

## Pidgin ##

1. Grab the latest version from [here](https://github.com/edgesmash/RageFaceTheme/blob/master/releases/troll-pidgin_latest.zip).
1. Decompress archive to %APPDATA%\.purple\smileys (if you're using Windows) or ~/.purple/smileys (if you're using Linux or Mac).
1. Restart Pidgin (maybe, sometimes you don't need to).
1. Select theme in preferences.
1. PROFIT!!!

## Adium ##

1. Grab the latest version from [here](https://github.com/edgesmash/RageFaceTheme/blob/master/releases/RageFaces.AdiumEmoticonset_latest.zip). 
2. Decompress the archive anywhere.
3. Double-click the "RageFaces.AdiumEmoticonset" file.
4. PROFIT!!!

*N.B.: I don't have a Mac, so I can't test this. I got the instructions from [here](http://adium.im/help/pgs/AdvancedFeatures-AdiumXtras-EmoticonSets.html), so let me know if I'm missing a step.*

## Colloquy ##

1. Grab the latest version from [here](https://github.com/edgesmash/RageFaceTheme/blob/master/releases/troll-colloquy_latest.zip).
2. Decompress the archive to ~/Library/Application Support/Colloquy/Emoticons.
3. Restart Colloquy (alternatively, type `/reload plugins` or `/reload styles`).
4. PROFIT!!!

*N.B.:  I don't have a Mac, so I can't test this. I got the instructions from [here](http://colloquy.info/project/wiki/FAQs#WheredoIinstallnewStylesEmoticonsorPlugins), so let me know if I'm missing a step.*

# Usage #

Simply use the emoticon picker from your application of choice to insert the faces. Alternatively, you can manually type out the token for the face. In pidgin, that would look like this:

> :et I am so excited!

And that would appear in chat like this:

> ![](https://raw.github.com/edgesmash/RageFaceTheme/master/troll/ExcitedTroll.png) I am so excited!

Of course, the people you are chatting with need to have the theme installed as well to see the faces. (I believe Adium has some sort of auto-send emoticon functionality, but I can't test it, as I don't have a Mac).

# Development #

To alter the theme:

1.  Make the changes in the "troll" directory (which is the source directory for the pidgin theme).
1.  That's it, you're done!

To generate the archives for Pidgin, Colloquy, and Adium, as well as the php and xml:

1.  Run the powershell script "Generate archives.ps1".
1.  The archives are created in zip files, as well as the xml and php files (in the xml and php folders).

The php file contains a single method, `smiley`, that replaces all tokens with an image tag pointing to the image in the relative path of `troll\<filename>`.

Prerequisites:

- Powershell
- Powershell community extension (http://pscx.codeplex.com/)
- A sense of hilarity
