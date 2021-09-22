<?php namespace Application\Missions\Web\Page;

use Atomino\Mercury\Responder\Smart\SmartResponder;
use Atomino\Mercury\Responder\Smart\Attributes\{Cache, Args, CSS, JS, Init};
use Symfony\Component\HttpFoundation\Response;
use function Atomino\debug;

#[Init( 'web', 'index.twig' )]
#[Args( title: 'MIK Partners',favicon: '/~web/images/favico.png' )]
#[Cache( 0 )]
#[JS('/~web/index.js')]
#[CSS('/~web/index.css')]
class Index extends SmartResponder{
	public array $users;
	protected function prepare(Response $response){	}
}

