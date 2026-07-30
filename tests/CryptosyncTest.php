<?php
/**
 * Tests for CryptoSync
 */

use PHPUnit\Framework\TestCase;
use Cryptosync\Cryptosync;

class CryptosyncTest extends TestCase {
    private Cryptosync $instance;

    protected function setUp(): void {
        $this->instance = new Cryptosync(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Cryptosync::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
