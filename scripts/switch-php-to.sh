#!/bin/bash
NC=$(echo -e "\033[0m")
YW=$(echo -e "\033[33m")
RD=$(echo -e "\033[31m")
BD=$(echo -e "\033[1m")
current=$(apachectl -M | grep php._module | sed -e s/[^5,7]//g)
switchtofive () {
    echo "$BD$YW-> Switching from 7th to 5th version of PHP$NC"
if [ "$current" != "5" ]; then
    sudo a2dismod php7.1
    sudo update-alternatives --set php /usr/bin/php5.6
    sudo a2enmod php5.6
    echo "$BD$YW-> Restarting Apache$NC"
    sudo systemctl restart apache2
else
    echo mod_php version is $current
fi
}
switchtoseven () {
    echo "$BD$YW-> Switching from 5th to 7th version of PHP$NC"
if [ "$current" != "7" ]; then
    sudo a2dismod php5.6
    sudo update-alternatives --set php /usr/bin/php7.1
    sudo a2enmod php7.1
    echo "$BD$YW-> Restarting Apache$NC"
    sudo systemctl restart apache2
else
    echo mod_php version is $current
fi
}
case $1 in
    5)
    switchtofive;;
    7)
    switchtoseven;;
    *)
    echo "$YW->Enabled module: $BD$current$NC"
    echo "Usage: $0 [5 | 7]"
esac
