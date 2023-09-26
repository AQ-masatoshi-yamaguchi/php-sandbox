<?php

//namespace app;

class Order {
    private array $items = [];
    private float $taxRate = 0.10;

    public function addItem($name, $price, $quantity): void {
        $this->items[$name] = [
            'price' => $price,
            'quantity' => $quantity
        ];
    }

    public function removeItem($name): void {
        if (!isset($this->items[$name])) {
            throw new InvalidArgumentException("Item '{$name}' doesn't exist.");
        }

        unset($this->items[$name]);
    }

    public function getTotalPriceBeforeTax(): int {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item['price'] * $item['quantity'];
        }
        return $total;
    }

    public function getTotalPriceAfterTax(): int {
        return round($this->getTotalPriceBeforeTax() * (1 + $this->taxRate));
    }

    public function setTaxRate($rate): void {
        if ($rate < 0 || $rate > 1) {
            throw new InvalidArgumentException("Invalid tax rate. Must be between 0 and 1.");
        }

        $this->taxRate = $rate;
    }

    public function getItems($name)
    {
        if (!isset($this->items[$name])) {
            return null;
        }
        return $this->items[$name];
    }

    public function getTaxRate(): float
    {
        return $this->taxRate;
    }
}

