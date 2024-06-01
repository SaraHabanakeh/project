<?php

namespace App\Tests\Entity;

use App\Entity\Product;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    public function testSetName(): void
    {
        $product = new Product();
        $name = 'Test Product';
        $product->setName($name);
        $this->assertEquals($name, $product->getName());
    }

    public function testSetValue(): void
    {
        $product = new Product();
        $value = 100;
        $product->setValue($value);
        $this->assertEquals($value, $product->getValue());
    }
}
