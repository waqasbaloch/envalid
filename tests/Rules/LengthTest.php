<?php
/**
 * Created by PhpStorm.
 * User: azi
 * Date: 3/30/17
 * Time: 12:55 PM
 */

namespace azi\Tests\Rules;


use azi\Tests\TestCase;

class LengthTest extends TestCase
{
    public function testItValidatesStringLength()
    {
        $this->validator->validate(['username' => 'azeemhassni'], [
            'username' => 'length:11'
        ]);

        $this->assertTrue($this->validator->passed());
    }

    public function testItValidatesStringLengthWithOperator()
    {
        $this->validator->validate(['string' => '10TenChars'], [
            'string' => 'length:>:10'
        ]);

        $this->assertTrue($this->validator->failed());
    }
}