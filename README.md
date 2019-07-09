# Search Servise For Laravel

> Search using google service and save result, comment and delete it.

**Installation Steps**

- [Download](#Download)
- [Setup](#Setup)
- [Configuration](#Configuration)
- [Run](#Run)

## Download


open terminal and go to you project, Make Project root of terminal, Ex:


```shell
../../ProjectName$
```

Run Command Below:

```shell
composer require mawdoo3searchpackagetest/searchresults
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
    - Get <strong>Search Engine ID</strong> and save it in <strong>.env</strong> file for <strong>sp_mawdoo3_laravel_cx</strong>
    - Get <strong>Key</strong> from <a href="https://developers.google.com/custom-search/v1/introduction#identify_your_application_to_google_with_api_key">https://developers.google.com/custom-search/v1/introduction#identify_your_application_to_google_with_api_key</a>  and save it in <strong>.env</strong> file for <strong>sp_mawdoo3_laravel_key</strong>
    - Get <strong>API Link</strong> from <a href="https://developers.google.com/custom-search/v1/using_rest">https://developers.google.com/custom-search/v1/using_rest</a> and save it in <strong>.env</strong> file for <strong>sp_mawdoo3_laravel_url</strong>

> May need to restart the server

## Run

You can visit:

```shell
YourWebSite/searchResult
```