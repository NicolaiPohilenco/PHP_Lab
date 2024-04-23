<?php
// Определение класса Transaction с публичными полями
class Transaction
{
    public $transaction_id;
    public $transaction_date;
    public $transaction_amount;
    public $transaction_description;
    public $merchant_name;

    // Конструктор с параметрами для инициализации значений свойств
    public function __construct($id, $date, $amount, $description, $merchant)
    {
        $this->transaction_id = $id;
        $this->transaction_date = $date;
        $this->transaction_amount = $amount;
        $this->transaction_description = $description;
        $this->merchant_name = $merchant;
    }
}

// Создание массива из объектов класса Transaction с использованием конструктора
$transactions = [
    new Transaction(1, "2024-03-22", 350.24, "Payment for healthy", "Invitro"),
    new Transaction(2, "2024-03-14", 430.31, "Dinner with family", "Andys"),
];

// Вывод значений объектов в цикле
foreach ($transactions as $transaction) {
    echo "Transaction ID: " . $transaction->transaction_id . "<br>";
    echo "Transaction Date: " . $transaction->transaction_date . "<br>";
    echo "Transaction Amount: " . $transaction->transaction_amount . "<br>";
    echo "Transaction Description: " . $transaction->transaction_description . "<br>";
    echo "Merchant Name: " . $transaction->merchant_name . "<br><br>";
}