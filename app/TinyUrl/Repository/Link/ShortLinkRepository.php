<?php

namespace TinyUrl\Repository\Link;
use TinyUrl\Service\IdEncode;

class ShortLinkRepository implements LinkRepositoryInterface
{
    protected $_repo;
    protected $_encode;

    public function __construct (DbLinkRepository $_repo, IdEncode $_encode)
    {
        $this->_repo = $_repo;
        $this->_encode = $_encode;
    }

    public function create ($url)
    {
        return $this->_encode->encode($this->_repo->create($url));
    }

    public function find ($id)
    {
        return $this->_repo->find($this->_encode->decode($id));
    }
}
