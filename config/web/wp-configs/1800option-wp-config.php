<?php

#include('whitelist.php');

/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', '1800option');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '12345678');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

//Override Memory Limit for WPML string scan.
//define('WP_MEMORY_LIMIT', '128M');

global $active_domain;
global $local_env;
$local_env = false;
define('LOCAL_ENV', false);
if(!empty($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] == 'devel.1800option.com'){
    define('LOCAL_ENV', true);
    $local_env = true;
}
//$domains - required attributes are 'domain','siteurl','home','blogname','primary'
//blogname is basically the site title, also appearing in the browser page titles.
//primary will be used as default base for robot_domain url and for support email url
$domains = array(
    array(
        'domain' => 'promotions.1800option.com',
        'siteurl' => 'http://promotions.1800option.com',
        'home' => 'http://www.1800option.com',
        'blogname' => '1800option',
        'primary' => '1800option.com',
        'robot_domain' => 'www.1800option.com'
    ),
    array(
        'domain' => 'www.millionairesociety.co',
        'siteurl' => 'http://www.millionairesociety.co',
        'home' => 'http://app.millionairesociety.co',
        'blogname' => 'Millionaire Society',
        'primary' => 'millionairesociety.co'
    ),
    array(
        'domain' => 'www.germanbinarybot.net',
        'siteurl' => 'http://germanbinarybot.net',
        'home' => 'http://app.germanbinarybot.net',
        'blogname' => 'German Binary Robot',
        'primary' => 'germanbinarybot.net'
    ),
    array(
        'domain' => 'www.cashscience.co',
        'siteurl' => 'http://www.cashscience.co',
        'home' => 'http://app.cashscience.co',
        'blogname' => 'cashscience.co',
        'primary' => 'cashscience.co'
    ),
    array(
        'domain' => 'www.financial-option.com',
        'siteurl' => 'http://www.financial-option.com',
        'home' => 'http://app.financial-option.com',
        'blogname' => 'financial-option.com',
        'primary' => 'financial-option.com'
    ),
    array(
        'domain' => 'promotions.yourfirstmillion.biz',
        'siteurl' => 'http://promotions.yourfirstmillion.biz',
        'home' => 'http://app.yourfirstmillion.biz',
        'blogname' => 'yourfirstmillion.biz',
        'primary' => 'yourfirstmillion.biz'
    ),
    array(
        'domain' => 'www.qcsystem.co',
        'siteurl' => 'http://www.qcsystem.co',
        'home' => 'http://app.qcsystem.co',
        'blogname' => 'qcsystem.co',
        'primary' => 'qcsystem.co'
    ),
    array(
        'domain' => 'www.algoprime.co',
        'siteurl' => 'http://www.algoprime.co/',
        'home' => 'http://www.algoprime.co/',
        'blogname' => 'AlgoPrime',
        'primary' => 'algoprime.co'
    ),
    array(
        'domain' => 'www.algowealth.co',
        'siteurl' => 'http://www.algowealth.co/',
        'home' => 'http://www.algowealth.co/',
        'blogname' => 'AlgoWealth',
        'primary' => 'algowealth.co'
    ),
    array(
        'domain' => 'www.secret-millionaire.co',
        'siteurl' => 'http://www.secret-millionaire.co/',
        'home' => 'http://www.secret-millionaire.co/',
        'blogname' => 'Secret Millionaire',
        'primary' => 'secret-millionaire.co'
    ),
    array(
        'domain' => 'www.gold-digger.tech',
        'siteurl' => 'http://www.gold-digger.tech/',
        'home' => 'http://www.gold-digger.tech/',
        'blogname' => 'Gold Digger',
        'primary' => 'gold-digger.tech'
    ),
    array(
        'domain' => 'www.saudifortuneclub.com',
        'siteurl' => 'http://www.saudifortuneclub.com/',
        'home' => 'http://www.saudifortuneclub.com/',
        'blogname' => 'Saudi Fortune Club',
        'primary' => 'saudifortuneclub.com'
    ),
    array(
        'domain' => 'www.saudifortune.com',
        'siteurl' => 'http://www.saudifortune.com/',
        'home' => 'http://www.saudifortune.com/',
        'blogname' => 'Saudi Fortune',
        'primary' => 'saudifortune.com'

    ),
    array(
        'domain' => 'www.aussiemethod.club',
        'siteurl' => 'http://www.aussiemethod.club',
        'home' => 'http://www.aussiemethod.club',
        'blogname' => 'The Aussie Method',
        'primary' => 'aussiemethod.club'
    ),
    array(
        'domain' => 'www.dow-focusgroup.online',
        'siteurl' => 'http://www.dow-focusgroup.online',
        'home' => 'http://www.dow-focusgroup.online',
        'blogname' => 'DowJones Focus Group',
        'primary' => 'dow-focusgroup.online'
    ),

    // new domains re https://trello.com/c/qIr4vNmd/256-add-new-domains-to-ms-and-1800
    array(
        'domain' => 'www.binary.investments',
        'siteurl' => 'http://www.binary.investments/',
        'home' => 'http://app.binary.investments/',
        'blogname' => 'Binary.investments',
        'primary' => 'binary.investments'
    ),

    array(
        'domain' => 'www.bo-investments.com',
        'siteurl' => 'http://www.bo-investments.com/',
        'home' => 'http://app.bo-investments.com/',
        'blogname' => 'Bo-investments',
        'primary' => 'bo-investments.com'
    ),

    array(
        'domain' => 'www.brokeroptions.net',
        'siteurl' => 'http://www.brokeroptions.net/',
        'home' => 'http://app.brokeroptions.net/',
        'blogname' => 'Brokeroptions',
        'primary' => 'brokeroptions.net'
    ),

    array(
        'domain' => 'www.clubrokers.com',
        'siteurl' => 'http://www.clubrokers.com/',
        'home' => 'http://app.clubrokers.com/',
        'blogname' => 'Clubrokers',
        'primary' => 'clubrokers.com'
    ),

    array(
        'domain' => 'www.impacticians.com',
        'siteurl' => 'http://www.impacticians.com/',
        'home' => 'http://app.impacticians.com/',
        'blogname' => 'Impacticians',
        'primary' => 'impacticians.com'
    ),

    array(
        'domain' => 'www.moneyformulaleak.com',
        'siteurl' => 'http://www.moneyformulaleak.com/',
        'home' => 'http://app.moneyformulaleak.com/',
        'blogname' => 'Money Formula Leak',
        'primary' => 'moneyformulaleak.com'
    ),

    array(
        'domain' => 'www.themoneyscience.com',
        'siteurl' => 'http://www.themoneyscience.com/',
        'home' => 'http://app.themoneyscience.com/',
        'blogname' => 'The Money Science',
        'primary' => 'themoneyscience.com'
    ),

    array(
        'domain' => 'www.wealthinaweek.co',
        'siteurl' => 'http://www.wealthinaweek.co/',
        'home' => 'http://app.wealthinaweek.co/',
        'blogname' => 'Wealth in a Week',
        'primary' => 'wealthinaweek.co'
    ),

    array(
        'domain' => 'www.x2option.com',
        'siteurl' => 'http://www.x2option.com/',
        'home' => 'http://app.x2option.com/',
        'blogname' => 'X2 option',
        'primary' => 'x2option.com'
    ),
    array(
        'domain' => 'www.fast-cash.club',
        'siteurl' => 'http://www.fast-cash.club',
        'home' => 'http://www.fast-cash.club',
        'blogname' => 'Fast Cash',
        'primary' => 'fast-cash.club'
    ),

    // german clones
    array(
        'domain' => 'www.german-millionaire.com',
        'siteurl' => 'http://german-millionaire.com',
        'home' => 'http://www.german-millionaire.com',
        'blogname' => 'German Millionaire',
        'primary' => 'german-millionaire.com'
    ),

    array(
        'domain' => 'www.germanwealth.co',
        'siteurl' => 'http://www.germanwealth.co',
        'home' => 'http://www.germanwealth.co',
        'blogname' => 'German Wealth',
        'primary' => 'germanwealth.co'
    ),

    array(
        'domain' => 'www.wealthy-germans.co',
        'siteurl' => 'http://www.wealthy-germans.co',
        'home' => 'http://www.wealthy-germans.co',
        'blogname' => 'Wealthy Germans',
        'primary' => 'wealthy-germans.co'
    ),

    array(
        'domain' => 'www.germansuccess.co',
        'siteurl' => 'http://www.germansuccess.co',
        'home' => 'http://www.germansuccess.co',
        'blogname' => 'German Success',
        'primary' => 'germansuccess.co'
    ),

    array(
        'domain' => 'www.german-secrets.com',
        'siteurl' => 'http://www.german-secrets.com',
        'home' => 'http://www.german-secrets.com',
        'blogname' => 'German Secrets',
        'primary' => 'german-secrets.com'
    ),

    // new domains re https://trello.com/c/wXCsbPfF/363-adding-domains-for-ms
    array(
        'domain' => 'www.mega-brokers.co',
        'siteurl' => 'http://www.mega-brokers.co',
        'home' => 'http://www.mega-brokers.co',
        'blogname' => 'Mega Brokers',
        'primary' => 'mega-brokers.co'
    ),
    array(
        'domain' => 'www.millionaires-investments.com',
        'siteurl' => 'http://www.millionaires-investments.com',
        'home' => 'http://www.millionaires-investments.com',
        'blogname' => 'Millionaires Investments',
        'primary' => 'millionaires-investments.com'
    ),
    array(
        'domain' => 'www.wealthy-millionaires.com',
        'siteurl' => 'http://www.wealthy-millionaires.com',
        'home' => 'http://www.wealthy-millionaires.com',
        'blogname' => 'Wealthy Millionaires',
        'primary' => 'wealthy-millionaires.com'
    ),
    array(
        'domain' => 'www.moneymaking-loophole.com',
        'siteurl' => 'http://www.moneymaking-loophole.com',
        'home' => 'http://www.moneymaking-loophole.com',
        'blogname' => 'Moneymaking Loophole',
        'primary' => 'moneymaking-loophole.com'
    ),
    array(
        'domain' => 'www.xyzmoney.co',
        'siteurl' => 'http://www.xyzmoney.co',
        'home' => 'http://www.xyzmoney.co',
        'blogname' => 'Xyzmoney',
        'primary' => 'xyzmoney.co'
    ),
    array(
        'domain' => 'www.best-options.co',
        'siteurl' => 'http://www.best-options.co',
        'home' => 'http://www.best-options.co',
        'blogname' => 'Best Options',
        'primary' => 'best-options.co'
    ),
    array(
        'domain' => 'www.brokers-science.com',
        'siteurl' => 'http://www.brokers-science.com',
        'home' => 'http://www.brokers-science.com',
        'blogname' => 'Brokers Science',
        'primary' => 'brokers-science.com'
    ),
    array(
        'domain' => 'www.mega-millionaires.com',
        'siteurl' => 'http://www.mega-millionaires.com',
        'home' => 'http://www.mega-millionaires.com',
        'blogname' => 'Mega Millionaires',
        'primary' => 'mega-millionaires.com'
    ),
    array(
        'domain' => 'www.make-money.rocks',
        'siteurl' => 'http://www.make-money.rocks',
        'home' => 'http://www.make-money.rocks',
        'blogname' => 'Make Money',
        'primary' => 'make-money.rocks'
    ),
    array(
        'domain' => 'www.millionaires-secret.co',
        'siteurl' => 'http://www.millionaires-secret.co',
        'home' => 'http://www.millionaires-secret.co',
        'blogname' => 'Millionaires Secret',
        'primary' => 'millionaires-secret.co'
    ),
    array(
        'domain' => 'www.millionaires-secret.club',
        'siteurl' => 'http://www.millionaires-secret.club',
        'home' => 'http://www.millionaires-secret.club',
        'blogname' => 'Millionaires Secret',
        'primary' => 'millionaires-secret.club'
    ),
    array(
        'domain' => 'www.millionaires-blackbook.com',
        'siteurl' => 'http://www.millionaires-blackbook.com',
        'home' => 'http://www.millionaires-blackbook.com',
        'blogname' => 'Millionaires Blackbook',
        'primary' => 'millionaires-blackbook.com'
    ),
    array(
        'domain' => 'www.wealthy-tycoons.com',
        'siteurl' => 'http://www.wealthy-tycoons.com',
        'home' => 'http://www.wealthy-tycoons.com',
        'blogname' => 'Wealthy Tycoons',
        'primary' => 'wealthy-tycoons.com'
    ),
    array(
        'domain' => 'www.easy-money.rocks',
        'siteurl' => 'http://www.easy-money.rocks',
        'home' => 'http://www.easy-money.rocks',
        'blogname' => 'Easy Money',
        'primary' => 'easy-money.rocks'
    ),
    array(
        'domain' => 'www.arabicwealth.club',
        'siteurl' => 'http://www.arabicwealth.club',
        'home' => 'http://www.arabicwealth.club',
        'blogname' => 'Arabic Wealth',
        'primary' => 'arabicwealth.club'
    ),

    // new domains by https://blackrock.dapulse.com/projects/5165079
    array(
        'domain' => 'www.millionaires-prodigy.com',
        'siteurl' => 'http://www.millionaires-prodigy.com',
        'home' => 'http://www.millionaires-prodigy.com',
        'blogname' => 'Millionaires Prodigy',
        'primary' => 'millionaires-prodigy.com'
    ),
    array(
        'domain' => 'www.millionaires-dreams.com',
        'siteurl' => 'http://www.millionaires-dreams.com',
        'home' => 'http://www.millionaires-dreams.com',
        'blogname' => 'Millionaires Dreams',
        'primary' => 'millionaires-dreams.com'
    ),
    array(
        'domain' => 'www.secret-formula.co',
        'siteurl' => 'http://www.secret-formula.co',
        'home' => 'http://www.secret-formula.co',
        'blogname' => 'Secret Formula',
        'primary' => 'secret-formula.co'
    ),
    array(
        'domain' => 'www.millionaire-secrets.co',
        'siteurl' => 'http://www.millionaire-secrets.co',
        'home' => 'http://www.millionaire-secrets.co',
        'blogname' => 'Millionaire Secrets',
        'primary' => 'millionaire-secrets.co'
    ),
    array(
        'domain' => 'www.brokers-advantage.com',
        'siteurl' => 'http://www.brokers-advantage.com',
        'home' => 'http://www.brokers-advantage.com',
        'blogname' => 'Brokers Advantage',
        'primary' => 'brokers-advantage.com'
    ),
    array(
        'domain' => 'www.nasdaq-secrets.com',
        'siteurl' => 'http://www.nasdaq-secrets.com',
        'home' => 'http://www.nasdaq-secrets.com',
        'blogname' => 'Nasdaq Secrets',
        'primary' => 'nasdaq-secrets.com'
    ),
    array(
        'domain' => 'www.making-money.online',
        'siteurl' => 'http://www.making-money.online',
        'home' => 'http://www.making-money.online',
        'blogname' => 'Making Money Online',
        'primary' => 'making-money.online'
    ),
    array(
        'domain' => 'www.investing-secrets.co',
        'siteurl' => 'http://www.investing-secrets.co',
        'home' => 'http://www.investing-secrets.co',
        'blogname' => 'Investing Secrets',
        'primary' => 'investing-secrets.co'
    ),
    array(
        'domain' => 'www.wealth-in-a-day.com',
        'siteurl' => 'http://www.wealth-in-a-day.com',
        'home' => 'http://www.wealth-in-a-day.com',
        'blogname' => 'Wealth in a Day',
        'primary' => 'wealth-in-a-day.com'
    ),
    array(
        'domain' => 'www.wealth-in-a-week.com',
        'siteurl' => 'http://www.wealth-in-a-week.com',
        'home' => 'http://www.wealth-in-a-week.com',
        'blogname' => 'Wealth in a Week',
        'primary' => 'wealth-in-a-week.com'
    ),
    array(
        'domain' => 'www.wealth-in-a-month.com',
        'siteurl' => 'http://www.wealth-in-a-month.com',
        'home' => 'http://www.wealth-in-a-month.com',
        'blogname' => 'Wealth in a Month',
        'primary' => 'wealth-in-a-month.com'
    ),
    array(
        'domain' => 'www.million-in-a-week.com',
        'siteurl' => 'http://www.million-in-a-week.com',
        'home' => 'http://www.million-in-a-week.com',
        'blogname' => 'Million in a Week',
        'primary' => 'million-in-a-week.com'
    ),
    array(
        'domain' => 'www.million-in-a-month.com',
        'siteurl' => 'http://www.million-in-a-month.com',
        'home' => 'http://www.million-in-a-month.com',
        'blogname' => 'Million in a Month',
        'primary' => 'million-in-a-month.com'
    ),
    array(
        'domain' => 'www.easy-money.online',
        'siteurl' => 'http://www.easy-money.online',
        'home' => 'http://www.easy-money.online',
        'blogname' => 'Easy Money',
        'primary' => 'easy-money.online'
    ),
    array(
        'domain' => 'www.money-making.net',
        'siteurl' => 'http://www.money-making.net',
        'home' => 'http://www.money-making.net',
        'blogname' => 'Money Making',
        'primary' => 'money-making.net'
    ),
    array(
        'domain' => 'www.brokers-options.com',
        'siteurl' => 'http://www.brokers-options.com',
        'home' => 'http://www.brokers-options.com',
        'blogname' => 'Brokers Options',
        'primary' => 'brokers-options.com'
    ),
    array(
        'domain' => 'www.nyse-winners.com',
        'siteurl' => 'http://www.nyse-winners.com',
        'home' => 'http://www.nyse-winners.com',
        'blogname' => 'Nyse Winners',
        'primary' => 'nyse-winners.com'
    ),
    array(
        'domain' => 'www.financialtechmagazine.co',
        'siteurl' => 'http://www.financialtechmagazine.co',
        'home' => 'http://www.financialtechmagazine.co',
        'blogname' => 'Finanacial Tech Magazine',
        'primary' => 'financialtechmagazine.co',
        'robot_domain' => 'www.1800option.com'
    ),
    //new domains https://blackrock.dapulse.com/boards/4565686/pulses/9470760
    array(
        'domain' => 'www.​money-doing.com',
        'siteurl' => 'http://www.money-doing.com',
        'home' => 'http://www.money-doing.com',
        'blogname' => 'Money Doing',
        'primary' => 'money-doing.com'
    ),
    array(
        'domain' => 'www.timely-money.com',
        'siteurl' => 'http://www.timely-money.com',
        'home' => 'http://www.timely-money.com',
        'blogname' => 'Timely Money',
        'primary' => 'timely-money.com'
    ),
    array(
        'domain' => 'www.awesome-revenue.com',
        'siteurl' => 'http://www.awesome-revenue.com',
        'home' => 'http://www.awesome-revenue.com',
        'blogname' => 'Awesome Revenue',
        'primary' => 'awesome-revenue.com'
    ),
    array(
        'domain' => 'www.amazing-revenue.com',
        'siteurl' => 'http://www.amazing-revenue.com',
        'home' => 'http://www.amazing-revenue.com',
        'blogname' => 'Amazing Revenue',
        'primary' => 'amazing-revenue.com'
    ),
    array(
        'domain' => 'www.revenue-quickly.com',
        'siteurl' => 'http://www.revenue-quickly.com',
        'home' => 'http://www.revenue-quickly.com',
        'blogname' => 'Revenue Quickly',
        'primary' => 'revenue-quickly.com'
    ),
    array(
        'domain' => 'www.money-quickly.com',
        'siteurl' => 'http://www.money-quickly.com',
        'home' => 'http://www.money-quickly.com',
        'blogname' => 'Money Quickly',
        'primary' => 'money-quickly.com'
    ),
    array(
        'domain' => 'www.earn-easily.com',
        'siteurl' => 'http://www.earn-easily.com',
        'home' => 'http://www.earn-easily.com',
        'blogname' => 'Earn Easily',
        'primary' => 'earn-easily.com'
    ),
    array(
        'domain' => 'www.gate-to-richness.com',
        'siteurl' => 'http://www.gate-to-richness.com',
        'home' => 'http://www.gate-to-richness.com',
        'blogname' => 'Gate To Richness',
        'primary' => 'gate-to-richness.com'
    ),
    array(
        'domain' => 'www.easiest-way-to-earn.com',
        'siteurl' => 'http://www.easiest-way-to-earn.com',
        'home' => 'http://www.easiest-way-to-earn.com',
        'blogname' => 'Easiest Way To Earn',
        'primary' => 'easiest-way-to-earn.com'
    ),
    array(
        'domain' => 'www.quick-way-to-earn.com',
        'siteurl' => 'http://www.quick-way-to-earn.com',
        'home' => 'http://www.quick-way-to-earn.com',
        'blogname' => 'Quick Way To Earn',
        'primary' => 'quick-way-to-earn.com'
    ),
    array(
        'domain' => 'www.earn-online.co',
        'siteurl' => 'http://www.earn-online.co',
        'home' => 'http://www.earn-online.co',
        'blogname' => 'Earn Online',
        'primary' => 'earn-online.co'
    ),
    array(
        'domain' => 'www.earn-fast.co',
        'siteurl' => 'http://www.earn-fast.co',
        'home' => 'http://www.earn-fast.co',
        'blogname' => 'Earn Fast',
        'primary' => 'earn-fast.co'
    ),
    array(
        'domain' => 'www.extra-money.co',
        'siteurl' => 'http://www.extra-money.co',
        'home' => 'http://www.extra-money.co',
        'blogname' => 'Extra Money',
        'primary' => 'extra-money.co'
    ),
    array(
        'domain' => 'www.online-cash.co',
        'siteurl' => 'http://www.online-cash.co',
        'home' => 'http://www.online-cash.co',
        'blogname' => 'Online Cash',
        'primary' => 'online-cash.co'
    ),
    array(
        'domain' => 'www.second-salary.co',
        'siteurl' => 'http://www.second-salary.co',
        'home' => 'http://www.second-salary.co',
        'blogname' => 'Second Salary',
        'primary' => 'second-salary.co'
    ),
    array(
        'domain' => 'www.online-earning.co',
        'siteurl' => 'http://www.online-earning.co',
        'home' => 'http://www.online-earning.co',
        'blogname' => 'Online Earning',
        'primary' => 'online-earning.co'
    ),
    array(
        'domain' => 'www.internet-earn.co',
        'siteurl' => 'http://www.internet-earn.co',
        'home' => 'http://www.internet-earn.co',
        'blogname' => 'Internet Earn',
        'primary' => 'internet-earn.co'
    ),
    array(
        'domain' => 'www.need-money.co',
        'siteurl' => 'http://www.need-money.co',
        'home' => 'http://www.need-money.co',
        'blogname' => 'need-money.co',
        'primary' => 'need-money.co'
    ),
    array(
        'domain' => 'www.quick-money.co',
        'siteurl' => 'http://www.quick-money.co',
        'home' => 'http://www.quick-money.co',
        'blogname' => 'quick-money.co',
        'primary' => 'quick-money.co'
    ),
    array(
        'domain' => 'www.money-home.co​​',
        'siteurl' => 'http://www.money-home.co​​',
        'home' => 'http://www.money-home.co​​',
        'blogname' => 'Money Home',
        'primary' => 'money-home.co​​'
    ),

);


/** IMPORATNT: Make sure to Create a Brand Images Folder as well inside /images/
All functions regarding brands are located in inclides/brands-func.php
2.12.2015 - R.L - removed 1800 as a specified brand. It should be the default anyways.
 **/

$brands = array (
    'msco' => array (
        'lp_name_in_crm' => '1800Option-lp-millionaresociety',
        'support_email' => 'support@millionairesociety.co',
        'name' => 'Millionaire Society',
        'multilanguage' => false,
    ),
    'mscl' => array (
        'lp_name_in_crm' => '',
        //'lp_names_in_crm' => array(),
        'support_email' => 'support@1800option.com',
        'name' => 'Millionaire Club',
        'multilanguage' => false,
        //'domain' => ''
    ),
    'Wallstreet' => array (
        'lp_name_in_crm' => '1800Option-lp-WallStreet',
        'support_email' => 'support@1800option.com',
        'name' => 'Wolf on Wall Street',
        'multilanguage' => false,
    ),
    'germanbinaryrobot' => array(
        'lp_name_in_crm' => 'German Binary Robot (Members Page)',
        'support_email' => 'support@germanbinaryrobot.co',
        'name' => 'German Binary Robot',
        'multilanguage' => true,
        'name-en' => 'German Binary Robot',
        'name-ru' => 'Немецкий Бинарный Робот',
        //'domain' => 'www.germanbinarybot.net',
        //'robotdomain' => 'app.germanbinarybot.net',
    ),
    'algoprime' => array(
        'lp_name_in_crm' => '',
        'support_email' => 'support@algoprime.co',
        'name' => 'AlgoPrime',
        'multilanguage' => false,
    ),
    'algowealth' => array(
        'lp_name_in_crm' => '',
        'support_email' => 'support@algowealth.co',
        'name' => 'AlgoWealth',
        'multilanguage' => false,
    ),
    'sm-ru' => array(
        'lp_name_in_crm' => 'Secret Millionaire RU',
        'support_email' => 'support@secret-millionaire.co',
        'name' => 'Secret Millionaire',
        'multilanguage' => true,
        'name-en' => 'Secret Millionaire',
        'name-ru' => 'Подпольный миллионер',
    ),
    'golddigger' => array(
        'lp_name_in_crm' => 'Gold Digger',
        'support_email' => 'support@gold-digger.tech',
        'name' => 'Gold Digger',
        'multilanguage' => false,
    ),
    'fastcash' => array(
        'lp_name_in_crm' => 'Fast Cash Signup1',
        'support_email' => 'support@fast-cash.club',
        'name' => 'Fast Cash',
        'multilanguage' => false,
    ),
    'aussie-method' => array(
        'lp_name_in_crm' => 'The Aussie Method',
        'support_email' => 'Jake@aussiemethod.club',
        'name' => 'The Aussie Method',
        'multilanguage' => false,
    ),
    'dow-focus' => array(
        'lp_name_in_crm' => 'Dow Focus Group',
        'support_email' => 'support@dow-focusgroup.online',
        'name' => 'DowJones Focus Group',
        'multilanguage' => false,
    ),
    '1800option' => array (
        'support_email' => 'support@1800option.com',
        'name' => '1800option',
        'multilanguage' => true,
        'name-en' => '1800option',
        'name-ru' => '1800option',
    ),
    'virtnext' => array(
        'lp_name_in_crm' => 'virtnext',
        'support_email' => 'support@1800option.com',
        'name' => 'Virtnext',
        'multilanguage' => false,
    ),

);


foreach ($domains as $domain => $domainData) {
    if ($_SERVER['HTTP_HOST'] == $domainData['domain']) {
        define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST']);
        define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST']);
        $active_domain = $domainData;
    }
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '$QdPBfTB+<HdX.-Fd55FCE}2iE_~q94p!GQ+=%&S9}AL/[InC<$6T]bEamg5(UWo');
define('SECURE_AUTH_KEY',  '>J|a-i+kUC?Q^ Vd=>/p%9!W+E*)62-~c.CDG: nyA:3OzAFcX}/lzmJ,ZCJU[Ii');
define('LOGGED_IN_KEY',    '/9xS+5aK$u-/-8b&bPU*+LVUhw,fC8V=B+)r6tiNkuiN~CKC5M+Od!jtpg|JovNA');
define('NONCE_KEY',        'r8tvOO|[A!_k!%w}(+`Z#S=uLx+GGRtZB/s+CKvO=O[gqYtS{z~#-h^~>^ah]C?o');
define('AUTH_SALT',        'yBn~S4&E;t:C._Cly+$hSMA$R.-C^BRPt<D |(0?U~nnp.7QqK;c=r]-GMCY4aQO');
define('SECURE_AUTH_SALT', 'ubH}>j6B!>8,E-Hpn4iIvy~O*|R-/~?pa{wq91j6}p-Q(mouQ0|n)7PH8~=k f;g');
define('LOGGED_IN_SALT',   '2 T19G ?o5p+,mI+,?pPH2yKSYRAZ@`7CmhK*VvJ*KbigS[)];On:$l_HmaGtBo3');
define('NONCE_SALT',       '/LE6`s8_k)+{3,*@0L-*/o+T(dxA0zQ;wvg/;Qz}$vk+$ugU+N|-imlIY{v7[A{6');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
