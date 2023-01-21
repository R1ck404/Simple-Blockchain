<?php

class Blockchain {
    public $chain;
    public $difficulty;

    public function __construct($difficulty) {
        $this->chain = array(new Block(array(), "0"));
        $this->difficulty = $difficulty;
    }

    public function addBlock($block) {
        $block->prev_hash = $this->getLatestBlock()->hash;
        $block->mineBlock($this->difficulty);
        array_push($this->chain, $block);
    }

    public function getLatestBlock() {
        return end($this->chain);
    }

    public function isValid() {
        for ($i = 1; $i < count($this->chain); $i++) {
            $current_block = $this->chain[$i];
            $prev_block = $this->chain[$i - 1];

            if ($current_block->hash !== $current_block->calculateHash()) {
                return false;
            }

            if ($current_block->prev_hash !== $prev_block->hash) {
                return false;
            }
        }

        return true;
    }
}

?>
