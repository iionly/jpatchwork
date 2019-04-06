JPatchwork plugin for Elgg 3.0 and newer Elgg 3.X
=================================================

Latest Version: 3.0.0  
Released: 2018-08-12  
Contact: iionly@gmx.de  
License: GNU General Public License version 2  
Copyright: (c) iionly


Description
-----------

This is a proof-of-concept implementation of embedding Java applets in Elgg. For demonstation purposes it includes a sample applet and also a little game (Frozen Bubble).


Installation
------------

The client side needs to have a Java runtime environment plugin installed in their browser for the Java applets to work.

1. If you have a previous version of the JPatchwork plugin installed, disable it in the admin are of your site and remove the jpatchwork folder of the old version from the mod directory,
2. Copy the jpatchwork folder in the mod directory of your Elgg installation,
3. Enable the plugin in the admin section.


End of life of the JPatchwork plugin
------------------------------------

Recent versions of the most used browsers don't support the Java plugins anymore. That means that running Java applets in these browsers won't work anymore at all. Therefore, it makes no sense to support the JPatchwork plugin any more. If you happen to have for example the Palemoon browser installed (I guess there are some others that also still support Java applets) you could still try it out but I don't think there's any use-case on production sites for Java applets anymore. I would think that HTML5 can be used to replace usage of Java applets in most cases. Version 3.0.0 of the JPatchwork plugin is the first and at the same time last release for Elgg 3 and it's also the final release I will make of this plugin. Have fun with it as long as you get it working!
