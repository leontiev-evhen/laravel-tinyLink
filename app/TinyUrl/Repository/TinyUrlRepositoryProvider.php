<?php
namespace TinyUrl\Repository;
use Illuminate\Support\ServiceProvider;

class TinyURLRepositoryProvider extends ServiceProvider
{
	public function register()
	{
		$this->app->bind('TinyUrl\Repository\Link\DbLinkRepository', function(){
			return new \TinyUrl\Repository\Link\DbLinkRepository(new \Link);
		});

		$this->app->bind('\TinyUrl\Repository\Link\LinkRepositoryInterface', '\TinyUrl\Repository\Link\ShortLinkRepository');
	}
}
