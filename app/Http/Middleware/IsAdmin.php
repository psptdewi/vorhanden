<?

namespace App\Http\Middleware;
use Closure;

class IsAdmin
{
	public function handle($request, Closure $next)
	{
		if(auth()->check()&&$request->user()->admin==1){
			return $next($request);
		}
		return redirect->guest('/');
	}
}