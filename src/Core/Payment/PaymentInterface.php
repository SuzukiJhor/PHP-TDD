<?php 

namespace Core\Payment;

interface PaymentInterface
{
   public function createPlan(): array;
   public function findClienById(string $id): ?object;
   public function makePayment(array $data): bool;
}