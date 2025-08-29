<?php

namespace App\Helpers;

use Illuminate\Support\Facades\App;

class Language
{
    const LOCALE = [
        'en' => 'English',
        'es' => 'Español',
        'fr' => 'Français',
        'pt' => 'Português',
    ];
    /**
     * Retrieves the locale from the request segment.
     *
     * @return string The locale if it exists in the supported locales, otherwise an empty string.
     */
    public static function getLocale(): string
    {
        return array_key_exists($locale = request()->segment(1), self::LOCALE) ? $locale : '';
    }
    /**
     * Retrieve the URI of a given locale.
     *
     * @param string $locale The locale to get the URI for.
     * @return string The URI of the given locale.
     */
    public static function getUri(string $locale): string
    {
        // If the current locale is the default locale, we need to add the locale to the URI
        if (App::getLocale() === env('APP_LOCALE')) {
            if ($locale !== env('APP_LOCALE')) {
                // Append the locale to the URI if it's not the default locale
                return url('/').'/'.$locale.(request()->path() !== '/' ? '/'.request()->path() : '');
            }
        }
        // If the current locale is not the default locale, we need to remove the locale from the URI
        if ($locale === env('APP_LOCALE')) {
            // Remove the locale from the URI if it's the default locale
            return str_replace('/'.App::getLocale(), '', url()->current());
        }else{
            // Replace the current locale with the given locale in the URI
            if (str_contains(url()->current(), '//'.App::getLocale()) ){
                $array = explode('//'.App::getLocale(), url()->current());
                $url = str_replace('/'.App::getLocale(), '/'.$locale, str_replace(str_replace(App::getLocale(), '', $_SERVER['HTTP_HOST']), '', $array[1]));
            }else{
                $url=str_replace('/'.App::getLocale(), '/'.$locale, url()->current());
            }
            return $url;
        }
    }
}
