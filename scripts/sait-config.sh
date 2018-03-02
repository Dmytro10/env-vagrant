#!/usr/bin/env bash
# Setting up projects
sudo su
cd /var/www/
mkdir /var/www/Alfa-LP
mkdir /var/www/AlfaCMS
mkdir /var/www/alfatrade.com
mkdir /var/www/AlphaPromotions
mkdir /var/www/Ashfordinvestments
mkdir /var/www/BinaryTradeCenter
mkdir /var/www/binaryuno.com
mkdir /var/www/BOFX
mkdir /var/www/BuFunnelPopTraffic
mkdir /var/www/Cashier
mkdir /var/www/ClearersData
mkdir /var/www/CommonFunnelsFiles
mkdir /var/www/CreditCube
mkdir /var/www/Dashboard
mkdir /var/www/Eqblackrock
mkdir /var/www/financial-bulletin.net
mkdir /var/www/GetResponder
mkdir /var/www/GlenmoreInvestments
mkdir /var/www/ICore
mkdir /var/www/LeadCollector
mkdir /var/www/Learningsystems
mkdir /var/www/MedianMarketing
mkdir /var/www/MPA
mkdir /var/www/promotions.1800option.com
mkdir /var/www/prod2.ashfordinvestments.com
mkdir /var/www/Royal-LP
mkdir /var/www/RoyalCapitalPro
mkdir /var/www/RoyalPromotions
mkdir /var/www/S2Trade-LP
mkdir /var/www/S2tradePopFunnels
mkdir /var/www/staging2-TorOptions
mkdir /var/www/staging2.s2trade.com
mkdir /var/www/ToroFunnelPopTraffic
mkdir /var/www/toroption.com
mkdir /var/www/Tradepluscapital
mkdir /var/www/TradeTTN
mkdir /var/www/UltraTrade
mkdir /var/www/VitalCapital
mkdir /var/www/Xo2Trade
mkdir /var/www/fincenter.tech
mkdir /var/www/bo360.com

# Logs
mkdir /var/www/logs

# Site config
cd /home/ubuntu
sed -e 's/DOMAIN/devel._/g;s/REPO/Alfa-LP/g' /home/ubuntu/config/web/apache-conf/template.conf > /etc/apache2/sites-available/Alfa-LP.conf
sed -e 's/DOMAIN/devel._/g;s/REPO/AlfaCMS/g' /home/ubuntu/config/web/apache-conf/template.conf > /etc/apache2/sites-available/AlfaCMS.conf
sed -e 's/DOMAIN/devel.alfatrade.com/g;s/REPO/alfatrade.com/g' /home/ubuntu/config/web/apache-conf/template.conf > /etc/apache2/sites-available/alfatrade.com.conf
sed -e 's/DOMAIN/devel.alpha-promotions.co/g;s/REPO/AlphaPromotions/g' /home/ubuntu/config/web/apache-conf/template.conf > /etc/apache2/sites-available/AlphaPromotions.conf
sed -e 's/DOMAIN/devel.ashfordinvestments.com/g;s/REPO/Ashfordinvestments/g' /home/ubuntu/config/web/apache-conf/template.conf > /etc/apache2/sites-available/Ashfordinvestments.conf
sed -e 's/DOMAIN/devel2.ashfordinvestments.com/g;s/REPO/prod2.ashfordinvestments.com/g' /home/ubuntu/config/web/apache-conf/template.conf > /etc/apache2/sites-available/Ashfordinvestments2.conf
sed -e 's/DOMAIN/devel.binarytradecenter.com/g;s/REPO/BinaryTradeCenter/g' /home/ubuntu/config/web/apache-conf/template.conf > /etc/apache2/sites-available/BinaryTradeCenter.conf
sed -e 's/DOMAIN/devel.binaryuno.com/g;s/REPO/binaryuno.com/g' /home/ubuntu/config/web/apache-conf/template.conf > /etc/apache2/sites-available/binaryuno.com.conf
sed -e 's/DOMAIN/devel.bofx.com/g;s/REPO/BOFX/g' /home/ubuntu/config/web/apache-conf/template.conf > /etc/apache2/sites-available/BOFX.conf
sed -e 's/DOMAIN/devel.burstgid.com/g;s/REPO/BuFunnelPopTraffic/g' /home/ubuntu/config/web/apache-conf/template.conf > /etc/apache2/sites-available/BuFunnelPopTraffic.conf
sed -e 's/DOMAIN/devel._/g;s/REPO/Cashier/g' /home/ubuntu/config/web/apache-conf/template.conf > /etc/apache2/sites-available/Cashier.conf
sed -e 's/DOMAIN/devel._/g;s/REPO/ClearersData/g' /home/ubuntu/config/web/apache-conf/template.conf > /etc/apache2/sites-available/ClearersData.conf
sed -e 's/DOMAIN/devel._/g;s/REPO/CommonFunnelsFiles/g' /home/ubuntu/config/web/apache-conf/template.conf > /etc/apache2/sites-available/CommonFunnelsFiles.conf
sed -e 's/DOMAIN/devel.creditcude.com/g;s/REPO/CreditCube/g' /home/ubuntu/config/web/apache-conf/template.conf > /etc/apache2/sites-available/CreditCube.conf
sed -e 's/DOMAIN/devel.dashboard.com/g;s/REPO/Dashboard/g' /home/ubuntu/config/web/apache-conf/template.conf > /etc/apache2/sites-available/Dashboard.conf
sed -e 's/DOMAIN/devel.eqblackrock.com/g;s/REPO/Eqblackrock/g' /home/ubuntu/config/web/apache-conf/template.conf > /etc/apache2/sites-available/Eqblackrock.conf
sed -e 's/DOMAIN/devel.financial-bulletin.net/g;s/REPO/financial-bulletin.net/g' /home/ubuntu/config/web/apache-conf/template.conf > /etc/apache2/sites-available/bulletin.conf
sed -e 's/DOMAIN/devel.dashboard.com/g;s/REPO/GetResponder/g' /home/ubuntu/config/web/apache-conf/template.conf > /etc/apache2/sites-available/GetResponder.conf
sed -e 's/DOMAIN/devel.glenmoreinvestments.com/g;s/REPO/GlenmoreInvestments/g' /home/ubuntu/config/web/apache-conf/template.conf > /etc/apache2/sites-available/GlenmoreInvestments.conf
sed -e 's/DOMAIN/devel._/g;s/REPO/ICore/g' /home/ubuntu/config/web/apache-conf/template.conf > /etc/apache2/sites-available/ICore.conf
sed -e 's/DOMAIN/devel.dashboard.com/g;s/REPO/LeadCollector/g' /home/ubuntu/config/web/apache-conf/template.conf > /etc/apache2/sites-available/LeadCollector.conf
sed -e 's/DOMAIN/devel.learningsystems.co/g;s/REPO/Learningsystems/g' /home/ubuntu/config/web/apache-conf/template.conf > /etc/apache2/sites-available/Learningsystems.conf
sed -e 's/DOMAIN/devel.medianmarketing.co/g;s/REPO/MedianMarketing/g' /home/ubuntu/config/web/apache-conf/template.conf > /etc/apache2/sites-available/MedianMarketing.conf
sed -e 's/DOMAIN/devel._/g;s/REPO/MPA/g' /home/ubuntu/config/web/apache-conf/template.conf > /etc/apache2/sites-available/MPA.conf
sed -e 's/DOMAIN/devel.1800option.com/g;s/REPO/promotions.1800option.com/g' /home/ubuntu/config/web/apache-conf/template.conf > /etc/apache2/sites-available/promotions.1800option.com.conf
sed -e 's/DOMAIN/devel._/g;s/REPO/Royal-LP/g' /home/ubuntu/config/web/apache-conf/template.conf > /etc/apache2/sites-available/Royal-LP.conf
sed -e 's/DOMAIN/devel._/g;s/REPO/RoyalCapitalPro/g' /home/ubuntu/config/web/apache-conf/template.conf > /etc/apache2/sites-available/RoyalCapitalPro.conf
sed -e 's/DOMAIN/devel.royal-promotions.co/g;s/REPO/RoyalPromotions/g' /home/ubuntu/config/web/apache-conf/template.conf > /etc/apache2/sites-available/RoyalPromotions.conf
sed -e 's/DOMAIN/devel.lp.s2trade.com/g;s/REPO/S2Trade-LP/g' /home/ubuntu/config/web/apache-conf/template.conf > /etc/apache2/sites-available/S2Trade-LP.conf
sed -e 's/DOMAIN/devel.s2trade-pops.com/g;s/REPO/S2tradePopFunnels/g' /home/ubuntu/config/web/apache-conf/template.conf > /etc/apache2/sites-available/S2tradePopFunnels.conf
sed -e 's/DOMAIN/devel.staging2-toroption.com/g;s/REPO/staging2-TorOptions/g' /home/ubuntu/config/web/apache-conf/template.conf > /etc/apache2/sites-available/staging2-TorOptions.conf
sed -e 's/DOMAIN/devel.staging2.s2trade.com/g;s/REPO/staging2.s2trade.com/g' /home/ubuntu/config/web/apache-conf/template.conf > /etc/apache2/sites-available/staging2.s2trade.com.conf
sed -e 's/DOMAIN/devel.toro-pops.com/g;s/REPO/ToroFunnelPopTraffic/g' /home/ubuntu/config/web/apache-conf/template.conf > /etc/apache2/sites-available/ToroFunnelPopTraffic.conf
sed -e 's/DOMAIN/devel.toroption.com/g;s/REPO/toroption.com/g' /home/ubuntu/config/web/apache-conf/template.conf > /etc/apache2/sites-available/toroption.com.conf
sed -e 's/DOMAIN/devel.tradepluscapital.com/g;s/REPO/Tradepluscapital/g' /home/ubuntu/config/web/apache-conf/template.conf > /etc/apache2/sites-available/Tradepluscapital.conf
sed -e 's/DOMAIN/devel.tradettn.com/g;s/REPO/TradeTTN/g' /home/ubuntu/config/web/apache-conf/template.conf > /etc/apache2/sites-available/TradeTTN.conf
sed -e 's/DOMAIN/devel.ultratrade.com/g;s/REPO/UltraTrade/g' /home/ubuntu/config/web/apache-conf/template.conf > /etc/apache2/sites-available/UltraTrade.conf
sed -e 's/DOMAIN/devel.vitalcapital.co/g;s/REPO/VitalCapital/g' /home/ubuntu/config/web/apache-conf/template.conf > /etc/apache2/sites-available/VitalCapital.conf
sed -e 's/DOMAIN/devel.xo2trade.com/g;s/REPO/Xo2Trade/g' /home/ubuntu/config/web/apache-conf/template.conf > /etc/apache2/sites-available/Xo2Trade.conf
sed -e 's/DOMAIN/devel.fincenter.tech/g;s/REPO/Xo2Trade/g' /home/ubuntu/config/web/apache-conf/template.conf > /etc/apache2/sites-available/fincenter-tech.conf
sed -e 's/DOMAIN/devel.binaryuno.com/g;s/REPO/bo360.com/g' /home/ubuntu/config/web/apache-conf/template.conf > /etc/apache2/sites-available/bo360.com.conf


# Configuration files
# Funnels
sed -e 's/devel.DOMAIN_NAME/devel.1800option.com/g' /home/ubuntu/config/web/wp-configs/funnels-wp-config.php > /var/www/promotions.1800option.com/wp-config.php
sed -e 's/devel.DOMAIN_NAME/devel.alpha-promotions.co/g' /home/ubuntu/config/web/wp-configs/funnels-wp-config.php > /var/www/AlphaPromotions/wp-config.php
sed -e 's/devel.DOMAIN_NAME/devel.burstgid.com/g' /home/ubuntu/config/web/wp-configs/funnels-wp-config.php > /var/www/BuFunnelPopTraffic/wp-config.php
sed -e 's/devel.DOMAIN_NAME/devel.learningsystems.co/g' /home/ubuntu/config/web/wp-configs/funnels-wp-config.php > /var/www/Learningsystems/wp-config.php
sed -e 's/devel.DOMAIN_NAME/devel.lp.s2trade.com/g' /home/ubuntu/config/web/wp-configs/funnels-wp-config.php > /var/www/S2Trade-LP/wp-config.php
sed -e 's/devel.DOMAIN_NAME/devel.royal-promotions.co/g' /home/ubuntu/config/web/wp-configs/funnels-wp-config.php > /var/www/royal-promotions.co/wp-config.php
sed -e 's/devel.DOMAIN_NAME/devel.s2trade-pops.com/g' /home/ubuntu/config/web/wp-configs/funnels-wp-config.php > /var/www/S2tradePopFunnels/wp-config.php
sed -e 's/devel.DOMAIN_NAME/devel.toro-pops.com/g' /home/ubuntu/config/web/wp-configs/funnels-wp-config.php > /var/www/ToroFunnelPopTraffic/wp-config.php
sed -e 's/devel.DOMAIN_NAME/devel.tradepluscapital.com/g' /home/ubuntu/config/web/wp-configs/funnels-wp-config.php > /var/www/Tradepluscapital/wp-config.php
sed -e 's/devel.DOMAIN_NAME/devel.vitalcapital.co/g' /home/ubuntu/config/web/wp-configs/funnels-wp-config.php > /var/www/VitalCapital/wp-config.php
#sed -e 's/devel.DOMAIN_NAME/devel.fincenter.tech/g' /home/ubuntu/config/web/wp-configs/funnels-wp-config.php > /var/www/fincenter.tech/wp-config.php


# Hompages
cp /home/ubuntu/config/web/wp-configs/hp-wp-config.php /var/www/alfatrade.com/wp-config.php
cp /home/ubuntu/config/web/wp-configs/hp-wp-config.php /var/www/UltraTrade/wp-config.php
cp /home/ubuntu/config/web/wp-configs/hp-wp-config.php /var/www/TradeTTN/wp-config.php
cp /home/ubuntu/config/web/wp-configs/hp-wp-config.php /var/www/toroption.com/wp-config.php
cp /home/ubuntu/config/web/wp-configs/hp-wp-config.php /var/www/staging2.s2trade.com/wp-config.php
cp /home/ubuntu/config/web/wp-configs/hp-wp-config.php /var/www/staging2-TorOptions/wp-config.php
cp /home/ubuntu/config/web/wp-configs/hp-wp-config.php /var/www/BOFX/wp-config.php
cp /home/ubuntu/config/web/wp-configs/hp-wp-config.php /var/www/binaryuno.com/wp-config.php
cp /home/ubuntu/config/web/wp-configs/hp-wp-config.php /var/www/BinaryTradeCenter/wp-config.php

# Painintheass
cp /home/ubuntu/config/web/configs/config.php /var/www/Ashfordinvestments/config/config.php
cp /home/ubuntu/config/web/configs/database.php /var/www/Ashfordinvestments/ave/database/database.php
cp /home/ubuntu/config/web/configs/database.php /var/www/Ashfordinvestments/ar/ave/database/database.php
cp /home/ubuntu/config/web/configs/database.php /var/www/Ashfordinvestments/de/ave/database/database.php
cp /home/ubuntu/config/web/configs/database.php /var/www/Ashfordinvestments/it/ave/database/database.php
cp /home/ubuntu/config/web/configs/database.php /var/www/Ashfordinvestments/ru/ave/database/database.php




# Enable sites
cd /etc/apache2/sites-available
a2ensite *

# Config project
chown -R www-data:www-data /var/www/*
systemctl restart apache2


# Additional
echo "192.168.25.10 devel.eqblackrock.com www.devel.eqblackrock.com" >> /etc/hosts
cp /home/ubuntu/config/web/wp-configs/fincenter-tech-wp-config.php /var/www/fincenter.tech/wp-config.php
