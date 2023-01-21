# Simple-Blockchain
This is a basic implementation of a blockchain in PHP. It demonstrates how a blockchain works by creating blocks that contain transactions and linking them together using a hash function. The example includes a Block class and a Blockchain class.

The Block class has properties for the timestamp, transactions, previous hash, current hash, and nonce. The Blockchain class has properties for the chain of blocks and the difficulty of the proof-of-work algorithm.

The Block class has methods for calculating the hash of a block, mining a block, and a constructor that takes in an array of transactions and a previous block hash.

The Blockchain class has methods for adding a new block to the chain, getting the latest block, and checking if the blockchain is valid.

It's important to note that this is a basic implementation and it is not suitable for any production use as it does not provide enough security features, and it's not integrated with any payment gateway. Additionally, it's worth noting that the use of typed properties is only available in PHP 7 and above.

This code is intended for educational or research purposes only and should not be used for any production use.
