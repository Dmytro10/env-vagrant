#!/usr/bin/env bash
#sudo su
# root password
ROOTPASSWD=12345678
if [ ! -f /home/ubuntu/db.txt ]; then
    echo "Databases not found!"
    # create database
    mysql -uroot -p${ROOTPASSWD} -e "CREATE DATABASE IF NOT EXISTS 1800option /*\!40100 DEFAULT CHARACTER SET utf8 */;"
    mysql -uroot -p${ROOTPASSWD} -e "CREATE DATABASE IF NOT EXISTS BinaryUno /*\!40100 DEFAULT CHARACTER SET utf8 */;"
    mysql -uroot -p${ROOTPASSWD} -e "CREATE DATABASE IF NOT EXISTS GlenmoreInvestments /*\!40100 DEFAULT CHARACTER SET utf8 */;"
    mysql -uroot -p${ROOTPASSWD} -e "CREATE DATABASE IF NOT EXISTS eqblackrock /*\!40100 DEFAULT CHARACTER SET utf8 */;"
    mysql -uroot -p${ROOTPASSWD} -e "CREATE DATABASE IF NOT EXISTS MedianMarketing /*\!40100 DEFAULT CHARACTER SET utf8 */;"
    mysql -uroot -p${ROOTPASSWD} -e "CREATE DATABASE IF NOT EXISTS VitalCapital /*\!40100 DEFAULT CHARACTER SET utf8 */;"
    mysql -uroot -p${ROOTPASSWD} -e "CREATE DATABASE IF NOT EXISTS BOFX /*\!40100 DEFAULT CHARACTER SET utf8 */;"
    mysql -uroot -p${ROOTPASSWD} -e "CREATE DATABASE IF NOT EXISTS AlphaPromotions /*\!40100 DEFAULT CHARACTER SET utf8 */;"
    mysql -uroot -p${ROOTPASSWD} -e "CREATE DATABASE IF NOT EXISTS RoyalPromotions /*\!40100 DEFAULT CHARACTER SET utf8 */;"
    mysql -uroot -p${ROOTPASSWD} -e "CREATE DATABASE IF NOT EXISTS RoyalCapitalPro /*\!40100 DEFAULT CHARACTER SET utf8 */;"
    mysql -uroot -p${ROOTPASSWD} -e "CREATE DATABASE IF NOT EXISTS TradeTTN /*\!40100 DEFAULT CHARACTER SET utf8 */;"
    mysql -uroot -p${ROOTPASSWD} -e "CREATE DATABASE IF NOT EXISTS UltraTrade /*\!40100 DEFAULT CHARACTER SET utf8 */;"
    mysql -uroot -p${ROOTPASSWD} -e "CREATE DATABASE IF NOT EXISTS Learningsystems /*\!40100 DEFAULT CHARACTER SET utf8 */;"
    mysql -uroot -p${ROOTPASSWD} -e "FLUSH PRIVILEGES;"
    # Restore database
    mysql -uroot -p${ROOTPASSWD} 1800option < /home/ubuntu/databases/promotions.1800option.sql;
    mysql -uroot -p${ROOTPASSWD} BinaryUno < /home/ubuntu/databases/BinaryUno.sql;
    mysql -uroot -p${ROOTPASSWD} GlenmoreInvestments < /home/ubuntu/databases/GlenmoreInvestments.sql;
    mysql -uroot -p${ROOTPASSWD} eqblackrock < /home/ubuntu/databases/eqblackrock.sql;
    mysql -uroot -p${ROOTPASSWD} MedianMarketing < /home/ubuntu/databases/MedianMarketing.sql;
    mysql -uroot -p${ROOTPASSWD} VitalCapital < /home/ubuntu/databases/VitalCapital.sql;
    mysql -uroot -p${ROOTPASSWD} BOFX < /home/ubuntu/databases/BOFX.sql;
    mysql -uroot -p${ROOTPASSWD} AlphaPromotions < /home/ubuntu/databases/AlphaPromotions.sql;
    mysql -uroot -p${ROOTPASSWD} RoyalPromotions < /home/ubuntu/databases/RoyalPromotions.sql;
    mysql -uroot -p${ROOTPASSWD} RoyalCapitalPro < /home/ubuntu/databases/RoyalCapitalPro.sql;
    mysql -uroot -p${ROOTPASSWD} TradeTTN < /home/ubuntu/databases/TradeTTN.sql;
    mysql -uroot -p${ROOTPASSWD} UltraTrade < /home/ubuntu/databases/UltraTrade.sql;
    mysql -uroot -p${ROOTPASSWD} Learningsystems < /home/ubuntu/databases/learningsystems.sql;
    echo "Creates databases: OK!"
    touch /home/ubuntu/db.txt
else
    echo "DATABASE ALREADY EXISTS!"
fi
