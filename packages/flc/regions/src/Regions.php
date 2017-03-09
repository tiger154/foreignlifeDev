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
     * Current region.
     *
     * @var string
     */
    protected $currentRegion = false;

    /**
     * Current Geo Location
     * @var Location
     */
    protected $currentRegionGeo = false;

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

    protected $supportedSubDomain = ['www','dev'];

    /**
     * To get real IP address
     */
    const CHECK_REAL_IP_URL = 'https://api.ipify.org';
    //const CHECK_REAL_IP_URL = 'http://ipecho.net/plain';  // it's not stable

    /**
     * Creates new instance.
     *
     * @throws Exception
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
        $this->currentRegionGeo = $this->getGeoLocation();
        // set default region
        $this->defaultRegion = $this->configRepository->get('region.region');
        $this->isSupportedRegionOrSubDomain();
    }


    /**
     * Set config region as well
     *
     * @param $region
     */
    public function setRegion($region) {
        config('region.region', $region);
        $this->setCurrentRegion($region);
    }

    public function setCurrentRegion($region) {
        $this->currentRegion = $region;
    }

    public function getCurrentRegion() {
        return $this->currentRegion;
    }


    /**
     * 1. If subdomain and region is not matched
     * 2. If it's supported sub-domain(www, dev)
     * @return bool
     */
    public function shouldRedirect(){
        return (!$this->subDomainAndRegionMatched() && ($this->isSupportedSubDomain()));
    }

    public function subDomainAndRegionMatched() {
        return ($this->getSubDomain() == $this->getRegionCodeFromCurrentGeoLocation());
    }


    //www,dev,gb,ko,ie -> okay
    public function isSupportedRegionOrSubDomain() {
        $supportedRegions = $this->getSupportedRegions();
        if (!empty($supportedRegions[strtoupper($this->getSubDomain())]) || in_array($this->getSubDomain(), $this->supportedSubDomain)) {
            return true;
        }
        throw new Exception('Laravel default region is not in the supportedRegions array. or not supported subdomain');
    }

    /**
     * check sub-domain is supported ex) www, dev
     *
     * @return bool
     */
    public function isSupportedSubDomain() {
        return (in_array($this->getSubDomain(), $this->supportedSubDomain));
    }


    public function getSupportedSubDomain() {
        return $this->supportedSubDomain;
    }

    /**
     * get subdomain. It should added to Route class
     * @return mixed
     */
    public function getSubDomain() {
        $server = explode('.', $this->request->server('HTTP_HOST'));
        return $server[0];
    }

    public function buildSubDomainUrl($subDomain = null, $uri = null) {
        $protocol = stripos(app('request')->server('SERVER_PROTOCOL'),'https') === true ? 'https://' : 'http://';
        $domain = (!is_null($subDomain)) ? $subDomain.config('session.domain') : app('request')->server('SERVER_NAME');
        $port = (app('request')->server('SERVER_PORT') == "80") ? "" : ":".app('request')->server('SERVER_PORT');
        $host = explode(":",app('request')->server('HTTP_HOST'));
        if (count($host) > 1) {
            $port = ':'.$host[1];
        }
        $request_uri = (is_null($uri)) ? app('request')->server('REQUEST_URI') : $uri;
        return $protocol.$domain.$port.$request_uri;
    }

    /**
     * get country code by IP
     * @return mixed
     */
    public function getRegionCodeFromCurrentGeoLocation() {
        return $this->currentRegionGeo->iso_code;
    }

    /**
     * Return Location by real IP
     *
     * @return array
     */
    public function getGeoLocation() {
        $ip = $this->request->server('REMOTE_ADDR');
        if (config('region.realIP')) {
            $ip = (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE)) ? $ip : file_get_contents(self::CHECK_REAL_IP_URL);
        }
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