<?php

namespace Vis\DetectBrowser\Middleware;

use Closure;

use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Config;

use Jenssegers\Agent\Agent;

class DetectBrowser
{
    private function getConfigValue($value)
    {
        return Config::get('detect-browser.'.$value);
    }

    private function getConfigBrowsers()
    {
        return $this->getConfigValue('browsers');
    }

    private function getConfigViewLocation()
    {
        return $this->getConfigValue('view_location');
    }

    private function getAllowedVersion($browsers,$browser)
    {
        return isset($browsers['browsers'][$browser]) ? $browsers['browsers'][$browser]['allowed_version'] : 0;
    }

    private function getMajorVersion($version)
    {
        return (int) explode(".", $version)[0];
    }

    public function handle($request, Closure $next, $guard = null)
    {
        $agent = new Agent();
        $browser = $agent->browser();
        $version = $agent->version($browser);

        $browsers = $this->getConfigBrowsers();

        $majorVersion   = $this->getMajorVersion($version);
        $allowedVersion = $this->getAllowedVersion($browsers,$browser);




        if($allowedVersion > $majorVersion){

            $oldVersionPage = view($this->getConfigViewLocation(), compact("browsers"));

            return Response::make($oldVersionPage, '200')->header('Content-Type', 'text/html');
        }

        return $next($request);
    }
}
