<?php
namespace Flc\Regions;

use Mockery\CountValidator\Exception;

class Regions {

    /**
     * Config repository.
     *
     * @var \Illuminate\Config\Repository
     */
    protected $configRepository;

    /**
     * Illuminate view Factory.
     *
     * @var \Illuminate\View\Factory
     */
    protected $view;

    /**
     * Illuminate translator class.
     *
     * @var \Illuminate\Translation\Translator
     */
    protected $translator;

    /**
     * Illuminate router class.
     *
     * @var \Illuminate\Routing\Router
     */
    protected $router;

    /**
     * Illuminate request class.
     *
     * @var \Illuminate\Routing\Request
     */
    protected $request;

    /**
     * Illuminate url class.
     *
     * @var \Illuminate\Routing\UrlGenerator
     */
    protected $url;

    /**
     * Illuminate request class.
     *
     * @var Illuminate\Foundation\Application
     */
    protected $app;

    /**
     * Illuminate request class.
     *
     * @var string
     */
    protected $baseUrl;

    /**
     * Default locale.
     *
     * @var string
     */
    protected $defaultRegion;

    /**
     * Supported Locales.
     *
     * @var array
     */
    protected $supportedRegions;

    /**
     * Current locale.
     *
     * @var string
     */
    protected $currentRegion = false;

    /**
     * An array that contains all routes that should be translated.
     *
     * @var array
     */
    protected $translatedRoutes = [];

    /**
     * Name of the translation key of the current route, it is used for url translations.
     *
     * @var string
     */
    protected $routeName;


    const CHECK_REAL_IP_URL = 'http://ipecho.net/plain';

    /**
     * Creates new instance.
     *
     * @throws UnsupportedLocaleException
     */
    public function __construct()
    {
        $this->app = app();

        $this->configRepository = $this->app['config'];
        $this->view = $this->app['view'];
        $this->translator = $this->app['translator'];
        $this->router = $this->app['router'];
        $this->request = $this->app['request'];
        $this->url = $this->app['url'];

        // set default locale
        $this->defaultRegion = $this->configRepository->get('region.region');
        $supportedRegions = $this->getSupportedRegions();

        if (empty($supportedRegions[$this->defaultRegion])) {
            throw new Exception('Laravel default region is not in the supportedRegions array.');
        }
    }


    /**
     * Return Location by real IP
     *
     * @return array
     */
    public function getGeoLocation() {
        $ip = $this->request->server('REMOTE_ADDR');
        $ip = (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE)) ? $ip : file_get_contents(self::CHECK_REAL_IP_URL);
        $geo = geoip($ip);
        return $geo;
    }

    /**
     * Return an array of all supported Regions.
     *
     * @throws Exception
     *
     * @return array
     */
    public function getSupportedRegions()
    {

        if (!empty($this->supportedRegions)) {
            return $this->supportedRegions;
        }

        $regions = $this->configRepository->get('laravelregions.supportedRegions');

        if (empty($regions) || !is_array($regions)) {
            throw new Exception('Supported Regions Not Defined');
        }

        $this->supportedRegions = $regions;

        return $regions;
    }

} 