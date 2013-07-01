recover_crontab
===============

A PHP script to recover a destroyed crontab under Ubuntu 12.04 +

I ran this on MAC OSX 10.7 under MAMP


For this to work, you must follow the following steps:

1) Run "zgrep -i cron /var/log/syslog*" - This will output a log of your crontab from the last week to the terminal
2) Copy that output into a text file on your local machine
3) Name that textfile 'crontab_log'
4) Change 'USER' to the user for who's cron commands you are trying to recover
5) Run the script in a browser
