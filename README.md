# PMA-4.4-Dark
Dark theme for PHPMyAdmin 4.4

## A dark minimal theme for phpMyAdmin 4.4.x.x (tested on 4.4.15.10)

---
This theme is simply an updated fork from [mjohnson8165/pma8165-theme](https://github.com/mjohnson8165/pma8165-theme) but instead of using `pma8165-theme` as a base, the _official_ `pmahomme` is used as the base. The design and look and feel of `pma8165-theme` was then applied to it.

Among other things, this versions completes the original work by fixing several issues and providing a full dark theme for the database relation view.

## Installation

* Go to your themes directory:
`cd /usr/share/phpmyadmin/themes`

* Clone the repository: `sudo git clone https://git@github.com/madmath03/pmadarktheme.git pmadarktheme`

* Go to your phpMyAdmin page and select the *pmadarktheme* theme

## Screenshots

And here are a couple of screenshots of what you'll be getting:

![alt text](https://github.com/madmath03/pmadarktheme/blob/master/screenshot-1.png "PMA Dark Theme - Screenshot #1")

![alt text](https://github.com/madmath03/pmadarktheme/blob/master/screenshot-2.png "PMA Dark - Screenshot #2")

## Caution

The *img* directory is a mess - most icons in there are not even used and the sprites file was tampered manually, so attempting to run the *generate-sprites* script is entirely unadvisable at the moment, unless you really know what you're doing...
