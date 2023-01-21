<?php

class Block {
    public int $timestamp;
    public array $transactions;
    public string $prev_hash;
    public string $hash;
    public int $nonce;

    public function __construct($transactions, $prev_hash) {
        $this->timestamp = time();
        $this->transactions = $transactions;
        $this->prev_hash = $prev_hash;
        $this->nonce = 0;
        $this->hash = $this->calculateHash();
    }

    public function calculateHash() {
        return hash("sha256", $this->prev_hash . $this->timestamp . json_encode($this->transactions) . $this->nonce);
    }

    public function mineBlock($difficulty) {
        while (substr($this->hash, 0, $difficulty) !== str_repeat("0", $difficulty)) {
            $this->nonce++;
            $this->hash = $this->calculateHash();
        }
    }
}

?>
