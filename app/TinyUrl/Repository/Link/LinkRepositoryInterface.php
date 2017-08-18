<?php
namespace TinyUrl\Repository\Link;

interface LinkRepositoryInterface
{
    public function create($url);
    public function find($id);
}
