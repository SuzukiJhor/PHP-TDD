<?php 

namespace Core\Payment;

interface PaymentInterface
{
   public function createPlan(): bool;
   public function findClienById(string $id): ?object;
   public function makePayment(array $data): bool;
}