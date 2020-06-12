<?php
/**
 * Created by PhpStorm.
 * User: 4d4k
 * Date: 2018/6/11
 * Time: 17:41
 */

namespace Chasechan\Xunsearch;

/**
 * Interface XunsearchInterface
 * @package Chasechan\Xunsearch
 */
interface XunsearchInterface
{

    /**
     * @param $string
     * @return mixed
     */
    public function search($string);
}