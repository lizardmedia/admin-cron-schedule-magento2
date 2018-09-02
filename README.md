[![Build Status](https://scrutinizer-ci.com/g/lizardmedia/admin-cron-schedule-magento2/badges/build.png?b=master)](https://scrutinizer-ci.com/g/lizardmedia/admin-cron-schedule-magento2/build-status/master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/lizardmedia/admin-cron-schedule-magento2/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/lizardmedia/admin-cron-schedule-magento2/?branch=master)
[![Latest Stable Version](https://poser.pugx.org/lizardmedia/module-admin-cron-schedule/v/stable)](https://packagist.org/packages/lizardmedia/module-admin-cron-schedule)
[![License](https://poser.pugx.org/lizardmedia/module-admin-cron-schedule/license)](https://packagist.org/packages/lizardmedia/module-admin-cron-schedule)

# Magento2 Admin Cron Schedule #

Module LizardMedia_CronScheduler allows you to:

* view the list of all scheduled cron jobs and cancel selected
* view cron jobs configuration (all cron jobs configured via XML files)

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Prerequisites

* Magento 2.2
* PHP 7.1

### Installing

#### Download the module

##### Using composer (suggested)

Simply run

```
composer require lizardmedia/module-admin-cron-schedule
```

##### Downloading ZIP

Download a ZIP version of the module and unpack it into your project into
```
app/code/LizardMedia/CronScheduler
```

#### Install the module

Run this command
```
bin/magento module:enable LizardMedia_CronScheduler
bin/magento setup:upgrade
```

## Usage

#### Admin panel

* Enter System -> Cron Jobs
* Enter System -> Cron Jobs Configuration

## Versioning

We use [SemVer](http://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://github.com/lizardmedia/admin-cron-schedule-magento2/tags).

## Authors

* **Michał Wejwoda**
* **Krzysztof Kuźniar**

See also the list of [contributors](https://github.com/lizardmedia/admin-cron-schedule-magento2/contributors) who participated in this project.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details