<?php

use PHPUnit\Framework\TestCase;


class UserTest extends TestCase{
    
    public function testFullName(){
        require 'user.php';
        $user = new User;
        
        $user->first_name = "Bryan";
        $user->surname = "Choo";
        
        $this->assertEquals('Bryan Choo', $user->getFullName());
        
    }
}