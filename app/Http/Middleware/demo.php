<?php namespace App\Http\Middleware;

use Closure;

class demo {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		if($request->is('article/create') && $request->has('foo'))
		{
			return redirect('article');
		}
		return $next($request);
	}
}
