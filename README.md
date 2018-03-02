# README #

See ["Steps for working with projects"](https://github.com/BlackrockM/DevEnviropment/wiki/Steps-for-working-with-projects)  

### Default project adress ###
* BinaryUno: devel.binaryuno.com
* EqBlackRock: devel.eqblackrock.com
* 1800option: devel.1800option.com
* GlenmoreInvestments: devel.glenmoreinvestments.com  
* etc  

### Hosts directives ###
For work you need add this directives in host file:
>192.168.25.10 devel.binaryuno.com www.devel.binaryuno.com  
>192.168.25.10 devel.1800option.com www.devel.1800option.com  
>192.168.25.10 devel.eqblackrock.com www.devel.eqblackrock.com  
>192.168.25.10 devel.glenmoreinvestments.com www.devel.glenmoreinvestments.com  
>192.168.25.10 devel.medianmarketing.com www.devel.medianmarketing.com  
>192.168.25.10 devel.vitalcapital.co www.devel.vitalcapital.co  
>192.168.25.10 devel.bofx.com www.devel.bofx.com  
>192.168.25.10 devel.alpha-promotions.co www.devel.alpha-promotions.co  
>192.168.25.10 devel.royal-promotions.co www.devel.royal-promotions.co  
>192.168.25.10 devel.tradettn.com www.devel.tradettn.com  
>192.168.25.10 devel.ultratrade.com www.devel.ultratrade.com  
>192.168.25.10 devel.mkt.eqblackrock.com www.devel.mkt.eqblackrock.com  
>192.168.25.10 devel.creditcube.com www.devel.creditcube.com  
>192.168.25.10 devel.funnelsystem.com www.devel.funnelsystem.com  
>192.168.25.10 emailcollector.dev www.emailcollector.dev

### Configuration ###
* Apache 2.4.7, MySQL 5.5.54, PHP 5.5.9  
* Database configuration: User - root, passwd - 12345678  

Forwarding ports, additional(If need please enable in Vagrantfile):  
>HTTP guest: 80, host: 8081  
>MySQL guest: 3306, host: 3307  
>xDebug guest: 9001, host: 9001  

* Network adress: 192.168.25.10
* phpMyAdmin
* Projects must be located in the "www" directory

Repository for deployment:
>git clone git@github.com:BlackrockM/1800option.git  
>git clone git@github.com:BlackrockM/BinaryUno.git  
>git clone git@github.com:BlackrockM/GlenmoreInvestments.git  
>git clone git@github.com:BlackrockM/eqblackrock.git  
>git clone git@github.com:BlackrockM/VitalCapital.git  
>git clone git@github.com:BlackrockM/MedianMarketing.git  
>git clone git@github.com:BlackrockM/BOFX.git  
>git clone git@github.com:BlackrockM/AlphaPromotions.git  
>git clone git@github.com:BlackrockM/RoyalPromotions.git  
>git clone git@github.com:BlackrockM/Dashboard.git  
>git clone git@github.com:BlackrockM/MPA.git  

### Connect via SSH to the box ###
**For Windows users:**
1. Open DevEnviropment directory
2. Right-click on the freespace
3. Choose "Git Bash Here"
4. In opened bash terminal type:
    > vagrant ssh
5. You are now connected to the box
6. To exit from the box terminal press **CTRL+D** or type **logout**

**For Linux users:**
1. Open terminal and change directory to where you cloned **DevEnviropment** repository
   or open terminal from this directory in your filemanager
2. If you've started vagrant as root type (in other case type without **sudo**):
   > sudo vagrant ssh
3. You are now connected to the vagrant box

### PHP switch ###
If it's needed to switch PHP versions for your projects **(module php5.6 enabled by default)**

1. Connect to the vagrant box via **ssh**
2. To determine which php module is enabled type:
    > switch-php-to
3. To switch version of module just add argument with varsion number after script(i.e.):
    > switch-php-to 5

### Use xDebug ###
In /home/vagrant/scripts directory is xdebug.sh script. Run this script for on or off xDebug mode.  
In Vagrant:  
>sudo sh ./home/vagrant/scripts/xdebug.sh 

You will see the message:  
>"xDEBAG mode ON" or "xDEBAG mode OFF"

### Additional settings ###
If needed please Manual Config for your Project in Vagrant file:
* config.vm.hostname
* config.vm.synced_folder
* vb.name
* apache virtualhost in /config/web/ and sait-config.sh
* You can use a reverse proxy Nginx to redirect http traffic from 8080 to port 80.
* In the "nginx-proxy" directory contains a file to configure revers-proxy for nginx
