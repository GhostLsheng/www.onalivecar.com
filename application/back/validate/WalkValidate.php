<?php

namespace app\back\validate;

use app\common\validate\Validate;

class WalkValidate extends Validate
{

    /**
     * @var array
     */
    protected $rule = [
        'name|标签','require',
    ];

    /**
     * @var array
     */
    protected $message = [
        'name.require'  =>  ':attribute 不能为空',
    ];

    /**
     * @var array
     */
    protected $scene = [
        'create'   =>  ['name'],
        'update'  =>  [],
        'save'  =>  [],
        'not'  =>  [],
    ];

}