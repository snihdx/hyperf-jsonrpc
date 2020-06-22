<?php


namespace longxiaoyang\jsonrpc;


interface UserServiceInterface
{

    public function createUser(Array $data);

    public function dataList();

    public function getUserInfo(Array $where, Array $columns = ['*']);

}