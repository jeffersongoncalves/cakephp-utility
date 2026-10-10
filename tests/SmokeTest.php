<?php

use PHPUnit\Framework\TestCase;

/**
 * Every class the plugin ships autoloads (catches syntax errors, bad namespaces and missing dependencies).
 */
class SmokeTest extends TestCase
{
    /**
     * @dataProvider classes
     */
    public function testClassLoads(string $class): void
    {
        $this->assertTrue(class_exists($class) || interface_exists($class) || trait_exists($class), $class);
    }

    public function classes(): array
    {
        return [
            ['JeffersonSimaoGoncalves\\Utility\\CallbackTrait'],
            ['JeffersonSimaoGoncalves\\Utility\\Lib\\CallbackFunction'],
            ['JeffersonSimaoGoncalves\\Utility\\Lib\\HtmlTrait'],
            ['JeffersonSimaoGoncalves\\Utility\\Lib\\RenderTrait'],
            ['JeffersonSimaoGoncalves\\Utility\\Links\\RenderBase'],
            ['JeffersonSimaoGoncalves\\Utility\\Links\\RenderForm'],
            ['JeffersonSimaoGoncalves\\Utility\\Links\\RenderLink'],
            ['JeffersonSimaoGoncalves\\Utility\\Model\\Transformer\\LinkBaseTransformer'],
            ['JeffersonSimaoGoncalves\\Utility\\Plugin'],
            ['JeffersonSimaoGoncalves\\Utility\\TableUtility'],
            ['JeffersonSimaoGoncalves\\Utility\\TypeLink'],
        ];
    }
}
