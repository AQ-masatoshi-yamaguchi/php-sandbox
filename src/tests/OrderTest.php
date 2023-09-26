<?php
use PHPUnit\Framework\TestCase;
require __DIR__ . '/../app/Order.php';

class OrderTest extends TestCase
{
    private $order;

    protected function setUp(): void
    {
        $this->order = new Order();
    }

    public function testAddItem()
    {
        $this->order->addItem("apple", 100, 1);
        $this->order->addItem("apple", 100, 1);

        $items = $this->order->getItems("apple");

        $this->assertEquals(1, $items["quantity"]);
    }

    public function testRemoveItem()
    {
        $this->order->addItem("apple", 100, 1);
        $this->order->removeItem("apple");

        $items = $this->order->getItems("apple");

        $this->assertNull($items);
    }

    public function testRemoveItemNotItem()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->order->removeItem("orange");
    }

    public function testTotalPriceBeforeTax()
    {
        // Arrange（準備）
        $this->order->addItem("apple", 100, 2);

        // Act（実行）
        $result = $this->order->getTotalPriceBeforeTax();

        // Assert（検証）
        $this->assertEquals(200, $result);
    }

    public function testTotalPriceAfterTax()
    {
        // Arrange（準備）
        $this->order->addItem("apple", 100, 2);
        $this->order->addItem("banana", 200, 1);
        $this->order->setTaxRate(0.10);

        // Act（実行）
        $result = $this->order->getTotalPriceAfterTax();

        // Assert（検証）
        $this->assertEquals(440, $result);
    }

    public function testSetTaxRate()
    {
        $this->order->setTaxRate(0.10);

        $taxRate = $this->order->getTaxRate();

        $this->assertEquals(0.10, $taxRate);
    }

    public function testSetInvalidTaxRate()
    {
        $this->expectException(InvalidArgumentException::class);

        $this->order->setTaxRate(1.2); // 消費税120%
    }
}
