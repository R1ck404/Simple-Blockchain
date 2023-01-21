<?php

class Transaction {
    public int $timestamp;
    public string $type;
    public string $stock_symbol;
    public int $shares;
    public float $price;
    public string $buyer_public_key;
    public string $seller_public_key;

    public function __construct($type, $stock_symbol, $shares, $price, $buyer_public_key, $seller_public_key) {
        $this->timestamp = time();
        $this->type = $type;
        $this->stock_symbol = $stock_symbol;
        $this->shares = $shares;
        $this->price = $price;
        $this->buyer_public_key = $buyer_public_key;
        $this->seller_public_key = $seller_public_key;
    }
}

?>
