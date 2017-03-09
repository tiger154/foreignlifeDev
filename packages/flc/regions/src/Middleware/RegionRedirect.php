<?php
namespace Flc\Regions\Middleware;

use Closure;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\URL;
use Mockery\CountValidator\Exception;

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
            if ($regionsObj->shouldRedirect()) {
                // 1. Check geoLocation iso code by IP
                $geoCode = $regionsObj->getRegionCodeFromCurrentGeoLocation();
                // 2. Find if there is matched config value. or just use default value(for now GB)
                $region = (array_has($regionsObj->getSupportedRegions(), $geoCode)) ? config('region.supportedRegions.'.$geoCode) : config('region.supportedRegions.'.config('region.region'));
                // 3. Set region(config && currentRegion)
                $regionsObj->setRegion($region['key']);
                // 4. Build sub-domain, request_uri is same.
                $url = $regionsObj->buildSubDomainUrl($region['sub_domain']);
                // 5. Redirect only successfully changed sub_domain
                if ($regionsObj->getSubDomain() !=  $region['sub_domain']) {
                    return Redirect::to($url);
                }
                throw new Exception('Failed to redirect, please check right domain');
            } else {
                $regionsObj->setRegion($regionsObj->getSubDomain());
            }
        } else {
            abort(403, "Sorry It's not supported domain");
        }

        return $next($request);
    }


}