This project was forked from [kmain4's repository](https://github.com/kmain4/StatusPage-UptimeRobot), but was edited and expanded out of a simple PHP file due to the ugliness. All credits to them.

It should also go without saying that this repository isn't ready for production, yet. Please do not use this as a public page, as this could lead to your API keys being leaked. Don't worry though, something will be sorted!
-----


# StatusPage-UptimeRobot

`StatusPage-UptimeRobot` is a ~~PHP~~ page that retrieve's [UptimeRobot](https://www.uptimerobot.com "UptimeRobot's Homepage")'s sensors via their API and turns it into a professional service status page.

  - Import's monitor data from UptimeRobot.
  - Extracts monitor IDs that are sorted into each category.
  - Reports current status and recent logs.

This project is designed to be a drag-and-drop solution used in conjunction with a provider like [GitHub.io](https://pages.github.com/) to provide an easy, off-site solution for labs and small service clusters.

### Version
1.0.4

### Included Projects and Libraries

`StatusPage-UptimeRobot` uses a number of projects:

* [Cachet.io](https://github.com/CachetHQ/Cachet) - An open source status page system for everyone.
* [Jaco Strauss' Tech Support Excuse Generator](http://www.strauss.za.com/sla/support.asp) - I.T excuses for downtime.
* [Twitter Bootstrap] - great UI boilerplate for modern web apps
* [jQuery](https://jquery.com/) - duh

### Installation

`StatusPage-UptimeRobot` will run on any web server that can run PHP code and serve HTML. It is recommended to host outside of your network for availability.

*(Hey kmain4, Permanently here! Just a heads up that not all web servers can run PHP, you only said it can be used on any web server that serves HTML. That's not always the case - e.g., if you run this on an Apache2 server and PHP isn't installed then it won't work.)*

*(Hey past Permanently, future Permanently here! You were going to add that PHP isn't even needed as all it does is echo JavaScript into the code, which doesn't hide the API key at all - but then gave it the benefit of the doubt since you're not all that experienced with PHP. Time to get learning!)*

1. Fork this repository
2. Edit the configuration ~~at the top of the file~~ in ~~*config.php*~~ *assets/js/config.js*. (Make sure permissions are set correctly, you don't want someone stealing your API key! Not that it matters too much for UptimeRobot, but it's always good practice.)
3. Add your Monitors' IDs to the `categories` object ~~on line 188~~ in the config file. (Should be obvious where it is) You can find your Monitor IDs by clicking on them in the UptimeRobot website and looking at your URL. Remember to add your API Key, too!

Example: `https://uptimerobot.com/dashboard.php#123456789` The ID for this Monitor is `123456789`.

Head over to GitHub and create a new repository named `username.github.io`, where *username* is simply your username (or organization name) on GitHub. *If the first part of the repository doesn’t exactly match your username, it won’t work, so make sure to get it right!*

Finally, simply push `status.html` to your repository and rename it to `index.html`.

You can also use GitHub.io pages with custom domains like `status.permanently.me`. [Read more about how to here.](https://help.github.com/articles/quick-start-setting-up-a-custom-domain/)


### Images

![](https://cloud.githubusercontent.com/assets/8865327/16458877/c490ebd2-3dee-11e6-956f-871d57679b7c.PNG)

![](https://cloud.githubusercontent.com/assets/8865327/16458880/ca751744-3dee-11e6-8ed9-1940763880c0.PNG)
