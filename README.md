# Search Servise

> Search using google service and save result, and comment and delete it.

** Installation Steps **

- [Download](#Download)
- [Setup](#Setup)
- [Configuration](#Configuration)
- [Run](#Run)

[![Build Status](http://img.shields.io/travis/badges/badgerbadgerbadger.svg?style=flat-square)](https://travis-ci.org/badges/badgerbadgerbadger) 
[![Dependency Status](http://img.shields.io/gemnasium/badges/badgerbadgerbadger.svg?style=flat-square)](https://gemnasium.com/badges/badgerbadgerbadger) 
[![Coverage Status](http://img.shields.io/coveralls/badges/badgerbadgerbadger.svg?style=flat-square)](https://coveralls.io/r/badges/badgerbadgerbadger) 
[![Code Climate](http://img.shields.io/codeclimate/github/badges/badgerbadgerbadger.svg?style=flat-square)](https://codeclimate.com/github/badges/badgerbadgerbadger) 
[![Github Issues](http://githubbadges.herokuapp.com/badges/badgerbadgerbadger/issues.svg?style=flat-square)](https://github.com/badges/badgerbadgerbadger/issues) 
[![Pending Pull-Requests](http://githubbadges.herokuapp.com/badges/badgerbadgerbadger/pulls.svg?style=flat-square)](https://github.com/badges/badgerbadgerbadger/pulls) 
[![Gem Version](http://img.shields.io/gem/v/badgerbadgerbadger.svg?style=flat-square)](https://rubygems.org/gems/badgerbadgerbadger) [![License](http://img.shields.io/:license-mit-blue.svg?style=flat-square)](http://badges.mit-license.org) 
[![Badges](http://img.shields.io/:badges-9/9-ff6799.svg?style=flat-square)](https://github.com/badges/badgerbadgerbadger)

## Download


open terminal and go to you project, Make Project root of terminal, Ex:


```shell
../../ProjectName$
```

Run Command Below:

```shell
composer require mawdoo3packagetest/searchresults
```

## Setup

Run below command for migrate database:

```shell
php artisan migrate
```

## Configuration

- Go to <strong>.env</strong> file in root of project, and open it.
- Set below config:

```shell
sp_mawdoo3_laravel_url=URL
sp_mawdoo3_laravel_key=Key
sp_mawdoo3_laravel_cx=CX
```
- Save it.

**Get Google Config**

- Go to <a href="https://cse.google.com" target="_blank">https://cse.google.com</a>.
- Sign-up Or Create Account.
- Create new search engine / or select one if you have.

- *Create New Search Engine:*
    - Set Site to Search.
    - Set Name of *Search Engine*.
    - Press in Create Button.
    - Go to Control Panel.
    - Follow *Select Search Engine* Steps. 

- *Select Search Engine:*
    - Get *Search Engine ID* and save it in *.inv* file *sp_mawdoo3_laravel_cx*
    - Get *Key* from <a href="https://developers.google.com/custom-search/v1/introduction#identify_your_application_to_google_with_api_key">https://developers.google.com/custom-search/v1/introduction#identify_your_application_to_google_with_api_key</a>  and save it in *.inv* file *sp_mawdoo3_laravel_key*
    - Get *API Link* from <a href="https://developers.google.com/custom-search/v1/using_rest">https://developers.google.com/custom-search/v1/using_rest</a> and save it in *.inv* file *sp_mawdoo3_laravel_url*

> May need to restart the server

## Run

You can visit:

```shell
YourWebSite/searchResult
```