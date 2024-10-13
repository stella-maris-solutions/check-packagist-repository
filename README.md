# check-packagist-repository

The idea of this plugin is to make certain packages from packagist.org available in the
plugin search within the admin-backend of a WordPress site.

So it would not only possible to use the one-click installer to install packages from the WordPress plugin repository
(WPPR) but also plugins that are available on packagist.org.

Currently this is not yet a Proof of Concept but a work in Progress. Feel free to take a look
and check the process. I'd be happy about constructive feedback!

A plugin that should be installable from packagist.org needs to fulfill a few requirements:

* The package type needs to be `wordpress-plugin`
* The zip-file that can be downloaded as package needs to contain everything just like a plugin installable via the
  WPPR.
* You do not need a readme.txt file. I am investigating whether it is actually necessary and if so will create one
  when installing the package. The metadata will be taken from the `composer.json` file.
* The plugin-slug will be `packagist- ` followed by the package-name with the `/` replaced by a `-`. So the package
  `namespace/plugin` will become the plugin `packagist-namespace-plugin`. The reasoning is that we do not want subfolders for
  plugins. I decided against providing an arbitrarx slug as that will inevitably lead to chaos. Prefixing the plugin
  with `packagist` will allow other repositories to use a similar approach without interfering with one another.
* I am thinking about being able to specify the name of an uploaded artifact to install instead of the default ZIP file
  from a git repo. But that might be very specific depending on the underlying package. So for now you will need to
  check in all required files into the repo. As this package is **not** handling dependencies or autoloading this needs
  to be done by the plugin-developer. We are using packagist as plugin repository but not
  composer for installation and dependency management!

Any other ideas or recommendations? Feel free to start a Discussion or raise an issue.


This is the result of this Mastodon post and thread:

<iframe src="https://phpc.social/@heiglandreas/113298896531725865/embed" class="mastodon-embed" style="max-width: 100%; border: 0" width="400" allowfullscreen="allowfullscreen"></iframe><script src="https://phpc.social/embed.js" async="async"></script>
