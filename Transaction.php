class Transaction {
    public $timestamp;
    public $type;
    public $stock_symbol;
    public $shares;
    public $price;
    public $buyer_public_key;
    public $seller_public_key;

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
