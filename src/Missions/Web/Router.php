<?php namespace Application\Missions\Web;

use Atomino\Bundle\Authenticate\SessionAuthenticator;
use Atomino\Mercury\Responder\Smart\Cache\Middleware\Cache;

class Router extends \Atomino\Mercury\Router\Router {

	public function __construct(protected SessionAuthenticator $authenticator) { }

	public function route():void{
		$this(method: 'GET', path: '/')?->pipe(Cache::class)->pipe(Page\Index::class);
        $this(path:'/post/**')?->pipe(Api\RegistrationApi::class);
        $this(path:'/access/**')?->pipe(Api\ScannerApi::class);
        $this(path:'/get/**')?->pipe(Api\QRcodeApi::class);
        $this(path:'/stat/**')?->pipe(Api\StatApi::class);

		$this()?->pipe(Page\Error404::class);
	}

}
