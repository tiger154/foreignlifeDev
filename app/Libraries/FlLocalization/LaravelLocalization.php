<?php
namespace sinbie\app\Libraries\FlLocalization;

use \Mcamara\LaravelLocalization\LaravelLocalization as BaseLaravelLocalization;
use Illuminate\Config\Repository;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\URL;
use Illuminate\Translation\Translator;
use Illuminate\View\Factory;
use Mcamara\LaravelLocalization\Exceptions\SupportedLocalesNotDefined;
use Mcamara\LaravelLocalization\Exceptions\UnsupportedLocaleException;


class LaravelLocalization extends BaseLaravelLocalization {

    public function getLocalizedURLShowDefaultLocale($locale = null, $url = null, $attributes = [])
    {
        if ($locale === null) {
            $locale = $this->getCurrentLocale();
        }

        if (!$this->checkLocaleInSupportedLocales($locale)) {
            throw new UnsupportedLocaleException('Locale \''.$locale.'\' is not in the list of supported locales.');
        }

        if (empty($attributes)) {
            $attributes = $this->extractAttributes($url, $locale);
        }

        if (empty($url)) {
            if (!empty($this->routeName)) {
                return $this->getURLFromRouteNameTranslated($locale, $this->routeName, $attributes);
            }

            $url = $this->request->fullUrl();
        } else {
            $url = $this->url->to($url);
        }

        if ($locale && $translatedRoute = $this->findTranslatedRouteByUrl($url, $attributes, $this->currentLocale)) {
            return $this->getURLFromRouteNameTranslated($locale, $translatedRoute, $attributes);
        }

        $base_path = $this->request->getBaseUrl();
        $parsed_url = parse_url($url);
        $url_locale = $this->getDefaultLocale();

        if (!$parsed_url || empty($parsed_url['path'])) {
            $path = $parsed_url['path'] = '';
        } else {
            $parsed_url['path'] = str_replace($base_path, '', '/'.ltrim($parsed_url['path'], '/'));
            $path = $parsed_url['path'];
            foreach ($this->getSupportedLocales() as $localeCode => $lang) {
                $parsed_url['path'] = preg_replace('%^/?'.$localeCode.'/%', '$1', $parsed_url['path']);
                if ($parsed_url['path'] !== $path) {
                    $url_locale = $localeCode;
                    break;
                }

                $parsed_url['path'] = preg_replace('%^/?'.$localeCode.'$%', '$1', $parsed_url['path']);
                if ($parsed_url['path'] !== $path) {
                    $url_locale = $localeCode;
                    break;
                }
            }
        }

        $parsed_url['path'] = ltrim($parsed_url['path'], '/');

        if ($translatedRoute = $this->findTranslatedRouteByPath($parsed_url['path'], $url_locale)) {
            return $this->getURLFromRouteNameTranslated($locale, $translatedRoute, $attributes);
        }

        // Here we always show url even though it's default url
        if (!empty($locale)) {
            $parsed_url['path'] = $locale.'/'.ltrim($parsed_url['path'], '/');
        }
        $parsed_url['path'] = ltrim(ltrim($base_path, '/').'/'.$parsed_url['path'], '/');

        //Make sure that the pass path is returned with a leading slash only if it come in with one.
        if (starts_with($path, '/') === true) {
            $parsed_url['path'] = '/'.$parsed_url['path'];
        }
        $parsed_url['path'] = rtrim($parsed_url['path'], '/');

        $url = $this->unparseUrl($parsed_url);

        if ($this->checkUrl($url)) {
            return $url;
        }

        return $this->createUrlFromUri($url);
    }

} 