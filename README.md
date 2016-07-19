# sPrInkler
Raspberry pi sprinkler controller - A very basic web based php controller program for controlling a 10 system sprinkler system.

Requirements:

RPi (Any version)

Apache2 (or other web server)

PHP5 for your web server

git


How to install:

1) Install Apache2 or webserver of your choice

2) Install PHP5 for your websever.

3) 'git pull https://github.com/UndefinedIndustries/sPrInkler'

4) In the directory of isntallation, edit line 5 on lib/runsys.sh, change the location of the directory to where it is installed.

(ex /var/www/html/lib.sys.dat to /usr/www/html/lib/sys.dat)

5) In order to allow the 'runsys.sh' script to run when desired, add a cron-job to run at your desired time, or make an entry in /etc/rc.local to run
 'runsys.sh'

6) Log into the page!


Common issues:

====Wont run python scripts?

 in /etc/sudoers add these two lines

 www-data        ALL=(ALL) NOPASSWD: python location/of/install/lib/on.py

 www-data        ALL=(ALL) NOPASSWD: python location/of/install/lib/off.py
 
Where location/of/install/ is where you installed the sPrInkler repo.


How to change when the system runs the schedule:

In location/of/install/lib/runsys.sh there is a if statement on line 8, with in that there is a string of 4 numbers.

This is the time when it runs in a 24hr style.  It does not need a seperator. (e.g. :, or -)
