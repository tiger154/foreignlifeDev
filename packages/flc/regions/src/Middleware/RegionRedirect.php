<?php
namespace Flc\Regions\Middleware;

use Closure;

/**
 * Class RegionRedirect
 *  - It should be
 *
 *
 * @package Flc\Regions\Middleware
 */
class RegionRedirect {

    public function handle($request, Closure $next)
    {
        // app create singleton
        $regionsObj = app('laravelregions');
        // supported sub-domain or region only
        if ($regionsObj->isSupportedRegionOrSubDomain()) {
            if (!$regionsObj->subDomainAndRegionMatched() && (in_array($regionsObj->getSubDomain(), $regionsObj->getSupportedSubDomain()))) {
                // #1. check geoLocation iso code by IP
                $geoCode = $regionsObj->getRegionCodeFromCurrentGeoLocation();
                // #2. Find if there is matched config value. or just use default value(for now GB)
                $region = (array_has($regionsObj->getSupportedRegions(), $geoCode)) ? config('region.supportedRegions.'.$geoCode) : config('region.supportedRegions.'.config('region.region'));
                return app('redirect')->route('front',['region' => $region['sub_domain']]);
            }
        } else {
            abort(403, "Sorry It's not supported domain");
        }

        return $next($request);
    }


}