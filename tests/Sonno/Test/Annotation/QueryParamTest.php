<?php

/**
 * @category Sonno
 * @package  Test
 * @author   Dave Hauenstein <davehauenstein@gmail.com>
 * @author   Tharsan Bhuvanendran <me@tharsan.com>
 */

namespace Sonno\Test\Annotation;

use Sonno\Annotation\QueryParam;

/**
 * Class level documentation.
 *
 * @category Sonno
 * @package  Test
 */
class QueryParamTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructorSettingAndGetters()
    {
        $params = array('valA', 'valB');
        $param  = new QueryParam($params);
        $this->assertEquals($params, $param->getParams());
    }
}
