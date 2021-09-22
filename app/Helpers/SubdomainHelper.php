<?php

namespace App\Helpers;

class SubdomainHelper {

    public static function base() {
        return baseUrl();
    }

    public static function api() {
        return apiUrl();
    }

}

if (! function_exists('baseUrl')) {
    function baseUrl() {
        return config('app.host_url');
    }
}

if (! function_exists('apiUrl')) {
    function apiUrl() {
        return config('subdomain.api') . '.' . baseUrl();
    }
}
