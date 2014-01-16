How to use compiless.sh
--------------------------------------------

compiless.sh is a bash script to compile and compress all less in this theme.

1. Open a bash shell
2. Go to wp-content/theme/teachnova/assets/less
3. Execute ./compiless.sh

This script will generate two files in assets/css folder
- main.css       : Compiled BootStrap + Application LESS
- main.min.css   : Compiled and compressed BootStrap + Application LESS

Dependencies
--------------------------------------------
- nodejs
- npm
- less
- recess


How to prepare environment in Debian Wheezy
--------------------------------------------

1. Include wheezy-backports in apt/sources.list

$ nano /etc/apt/sources.list

   (...)
   # Backports
   deb http://ftp.debian.org/debian/ wheezy-backports main contrib non-free
   deb-src http://ftp.debian.org/debian/ wheezy-backports main contrib non-free
   (...)

$ apt-get update


2. Install nodeJS and curl

$ apt-get install nodejs nodejs-legacy curl


3. Install npm

$ curl https://npmjs.org/install.sh | bash


4. Install less

$ npm install less -g


5. Install recess

$ npm install recess -g


