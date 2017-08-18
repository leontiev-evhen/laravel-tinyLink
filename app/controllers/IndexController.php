<?php

use TinyUrl\Repository\Link\LinkRepositoryInterface;

class IndexController extends BaseController
{
    protected $linkRepo; 
    public function __construct (LinkRepositoryInterface $linkRepo)
    {
        $this->linkRepo = $linkRepo;   
        $this->beforeFilter('auth');
    }

    public function showIndex ()
    {
        return View::make('index.index');
    }

    public function postUrl ()
    {
        $url = Input::get('url');

        $rules = ['url' => 'required|url'];
        $validator = Validator::make(
            ['url' => $url],
            $rules
        );
        
        if($validator->fails())
        {   
            return Redirect::to('/')->withErrors($validator);
        }
        
        $id = $this->linkRepo->create($url);
        $shortUrl = URL::to('/', [$id]);
        return View::make('index.link', ['link' => $shortUrl]);
    }

    public function getRedirect ($id)
    {
        $url = $this->linkRepo->find($id);

        if(!$url)
        {
            $url = '/';
        }
        return Redirect::to($url);
    }
}
