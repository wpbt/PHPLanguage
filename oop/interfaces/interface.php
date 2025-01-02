<?php
interface Swimmer {
    public function swim();
}

interface Flyer {
    public function fly();
}

class Duck implements Swimmer, Flyer {
    public function swim() {
        return "The duck swims.";
    }

    public function fly() {
        return "The duck flies.";
    }
}

$duck = new Duck;
echo $duck->swim();
echo "\n";
echo $duck->fly();
echo "\n";

interface Vehicle {
    const WHEELS = 4;
    public function drive();
}

class Car implements Vehicle {
    public function drive() {
        return "Driving with " . Vehicle::WHEELS . " wheels.";
    }
}

$car = new Car;
echo $car->drive();
echo "\n";

interface PaymentGateway {
    public function processPayment( float $amount );
    public function refundPayment( float $amount );
}

interface SecurePaymentGateway extends PaymentGateway {
    public function validateTransaction( string $transactionId );
}

class CreditCardPayment implements SecurePaymentGateway {
    public function processPayment(float $amount) {
        return "Processing credit card payment of $amount. \n";
    }

    public function refundPayment(float $amount) {
        return "Refunding credit card payment of $amount. \n";
    }

    public function validateTransaction(string $transactionId) {
        return "Validating credit card transaction: $transactionId. \n";
    }
}

$cc_payment = new CreditCardPayment();
echo $cc_payment->processPayment( 100.86 );
echo $cc_payment->validateTransaction( $transactionId = 123 );
echo $cc_payment->refundPayment( 100.86 );

class PayPalPayment implements PaymentGateway {
    public function processPayment(float $amount) {
        return "Processing PayPal payment of $amount. \n";
    }

    public function refundPayment(float $amount) {
        return "Refunding PayPal payment of $amount. \n";
    }
}

$pp_payment = new PayPalPayment();
echo $pp_payment->processPayment( 109.86 );
echo $pp_payment->refundPayment( 109.86 );