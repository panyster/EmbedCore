<?php
/**
 * Tests for EmbedCore
 */

use PHPUnit\Framework\TestCase;
use Embedcore\Embedcore;

class EmbedcoreTest extends TestCase {
    private Embedcore $instance;

    protected function setUp(): void {
        $this->instance = new Embedcore(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Embedcore::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
