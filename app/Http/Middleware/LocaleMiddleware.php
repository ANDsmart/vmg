<?php

namespace App\Http\Middleware;

use Closure;
use Carbon\Carbon;
use Illuminate\Http\Request;

/**
 * Class LocaleMiddleware.
 */
class LocaleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     *
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        /*
         * Locale is enabled and allowed to be changed
         */
        if (config('locale.status')) {
            if (session()->has('locale') && in_array(session()->get('locale'), array_keys(config('locale.languages')))) {

                /*
                 * Set the Laravel locale
                 */
                app()->setLocale(session()->get('locale'));

                /*
                 * setLocale for php. Enables ->formatLocalized() with localized values for dates
                 */
                setlocale(LC_TIME, config('locale.languages')[session()->get('locale')][1]);

                /*
                 * setLocale to use Carbon source locales. Enables diffForHumans() localized
                 */
                Carbon::setLocale(config('locale.languages')[session()->get('locale')][0]);
            }
        }

        return $next($request);
    }
}
