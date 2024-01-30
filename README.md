# Hyvä Newsletter Popup

**Hyvä Newsletter Popup is a part of MageINIC Newsletter Popup extension that adds Hyvä features.** This extension extends Newsletter Popup definitions.

## 1. How to install

Run the following command in Magento 2 root folder:

```
composer require mageinic/hyva-newsletter-popup

php bin/magento maintenance:enable
php bin/magento setup:upgrade
php bin/magento setup:di:compile
php bin/magento setup:static-content:deploy
php bin/magento maintenance:disable
php bin/magento cache:flush
```

**Note:**
Magento 2 Newsletter Popup requires installing [MageINIC Newsletter Popup](https://github.com/mageinic/newsletter-popup) in your Magento installation.

**Or Install via composer [Recommend]**
```
composer require mageinic/newsletter-popup
```

## 2. Get Support

- Feel free to [contact us](https://www.mageinic.com/contact.html) if you have any further questions.
- Like this project, Give us a **Star**