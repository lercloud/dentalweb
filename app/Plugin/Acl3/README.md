# Description

This plugin is used to manage your already existing ACL/ACO/ARO setup. 

Requirements:
* CakePHP 2.0 or 2.1

# Installation

1. Two options, if your using git for your project and have git 1.6.0 you can use a submodule:
 a. From the root directory of your git checkout: git submodule add git://github.com/interlock/acl_plugin.git app/plugins/acl
  Or, if your not using git or have an older version of git:
 b. Within plugins: git clone git://github.com/interlock/acl_plugin.git acl

2. Add plugin to your Config/bootstrap.php and enable routes:

  `CakePlugin::load('Acl',array('routes'=>true));`

3. Navigate to /admin/acl/acl for your project to access the plugin

OR

1. Install Composer in your root CakePHP project or app directory: http://packagist.org/

2. ./composer.phar require interlock/acl_plugin
