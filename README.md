MTAV
==================================

## Table of Contents

*   [Introduction](#introduction)
*   [Install WP Cli](#install-wp-cli)
*   [Wp-config.php file edits](#Update-wp-config)
*   [Local Project Setup](#Local-Project-Setup)
*   [Daily Project run commands](#Daily-Project-run-commands)

## Introduction

## Install WP Cli

see docs to install wp-cli which is used to install & update
core wordpress files & plugins

```bash
  curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
  chmod +x wp-cli.phar
  sudo mv wp-cli.phar /usr/local/bin/wp
```

## Update wp-config

add following after `$table_prefix`

```php
define( 'MTAV_ENABLE_LOCAL_SETTINGS', true );
define('WP_ENV', 'development');
define('WP_SITEURL', 'http://mtav.local/');
define('WP_HOME', 'http://mtav.local/');

define('WP_DEBUG',true);
define('WP_DEBUG_LOG',true);
define('WP_DEBUG_DISPLAY',false);

```

## Local Project Setup

```bash
Step 1: Clone the project using SSH/HTTP to your machine.

Step 2: cd mtav (Go to project folder)

Step 3: yarn install (Only once when initial project setup)

Step 4: yarn sniff:setup (Only once when initial project setup)

Step 5: yarn docker:start (Keep running the script on same terminal tab)

Step 6: yarn docker:setup (On new terminal tab and execute the command only once when initial project setup)

Step 7: yarn start (Execute the command on same tab)

```

## Daily Project run commands

```
  01) yarn docker:start

  02) yarn docker:ip
      (Copy IP address and use the same in host file of local machine and docker container)

  03) sudo nano /etc/hosts
      (Use the copied IP address and paste in the file with below example)

      example:- 172.27.0.4 mtav.local

      (Replace IP address in above example with yours and save the file)

  04) yarn docker:shell

      (Use the copied IP address and paste in the file with below example)

      example:- echo "172.27.0.4 mtav.local" >> /etc/hosts

      (Replace IP address in above example with yours and save the file)

  05) yarn start
```


#### MIT License
