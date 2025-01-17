<?php

namespace Gather\Collect;

use Gather\Kernel\ServiceContainer;

/**
 * Class Application
 *
 * @property \Gather\Collect\Tk\HotKeyword                        $tk_hot_keyword
 * @property \Gather\Collect\Tk\Order                             $tk_order
 * @property \Gather\Collect\Tk\Product                           $tk_product
 * @property \Gather\Collect\Tk\Cate                              $tk_cate
 * @property \Gather\Collect\Tk\Auth                              $tk_auth
 *
 * @property \Gather\Collect\Jd\Cate                              $jd_cate
 * @property \Gather\Collect\Jd\HotKeyword                        $jd_hot_keyword
 * @property \Gather\Collect\Jd\Product                           $jd_product

 * @package Gather\Collect
 */
class Application extends ServiceContainer
{
    /**
     * @var array
     */
    protected $providers = [
        \Gather\Collect\Tk\ServiceProvider::class,
        \Gather\Collect\Jd\ServiceProvider::class,
    ];

    /**
     * @param $name
     * @param $arguments
     *
     * @return mixed
     */
    public function __call($name, $arguments)
    {
        return call_user_func_array([$this['base'],$name],$arguments);
    }
}