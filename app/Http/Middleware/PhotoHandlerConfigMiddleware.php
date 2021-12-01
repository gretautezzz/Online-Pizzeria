<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Services\PhotoHandleService;

class PhotoHandlerConfigMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
private $photoHandler;

public function __construct(PhotoHandleService $photoHandler) {
$this->photoHandler = $photoHandler;
}

    public function handle(Request $request, Closure $next,$config)
    {
        $this->photoHandler->config($config);

        return $next($request);
    }
}
