<?php

declare(strict_types=1);

namespace App\Examples;

class DatabaseConnection {
    private $connection;

    public function __construct($host, $user, $password, $dbname) {
        $this->connection = new mysqli($host, $user, $password, $dbname);
        if ($this->connection->connect_error) {
            throw new Exception("Connection failed: " . $this->connection->connect_error);
        }
    }

    public function query($sql) {
        $result = $this->connection->query($sql);
        if (!$result) {
            throw new Exception("Query failed: " . $this->connection->error);
        }
        return $result;
    }

    public function getLastInsertId() {
        return $this->connection->insert_id;
    }

    public function close() {
        $this->connection->close();
    }
}

class OrderValidator {
    public function validate($order) {
        if (empty($order['customer_name']) || empty($order['customer_email']) || empty($order['items'])) {
            throw new InvalidArgumentException("Invalid order data");
        }
    }
}

class OrderCalculator {
    public function calculateTotal($items) {
        $total = 0;
        foreach ($items as $item) {
            $total += $item['price'] * $item['quantity'];
        }
        return $total;
    }
}

class OrderRepository {
    private $db;

    public function __construct(DatabaseConnection $db) {
        $this->db = $db;
    }

    public function saveOrder($order, $total) {
        $sql = "INSERT INTO orders (customer_name, customer_email, total_amount) VALUES ('" . $order['customer_name'] . "', '" . $order['customer_email'] . "', " . $total . ")";
        $this->db->query($sql);
        return $this->db->getLastInsertId();
    }

    public function saveOrderItems($orderId, $items) {
        foreach ($items as $item) {
            $sql = "INSERT INTO order_items (order_id, product_name, quantity, price) VALUES (" . $orderId . ", '" . $item['name'] . "', " . $item['quantity'] . ", " . $item['price'] . ")";
            $this->db->query($sql);
        }
    }
}

class EmailService {
    public function sendOrderConfirmation($email) {
        mail($email, "Order Confirmation", "Thank you for your order!");
    }
}

class OrderProcessor {
    private OrderValidator $validator;
    private OrderCalculator $calculator;
    private OrderRepository $repository;
    private EmailService $emailService;

    public function __construct(OrderValidator $validator, OrderCalculator $calculator, OrderRepository $repository, EmailService $emailService) {
        $this->validator = $validator;
        $this->calculator = $calculator;
        $this->repository = $repository;
        $this->emailService = $emailService;
    }

    public function process($order) {
        $this->validator->validate($order);
        $total = $this->calculator->calculateTotal($order['items']);
        $orderId = $this->repository->saveOrder($order, $total);
        $this->repository->saveOrderItems($orderId, $order['items']);
        $this->emailService->sendOrderConfirmation($order['customer_email']);
    }
}
