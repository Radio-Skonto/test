<?php

namespace App\NeuralNetwork\Application\Activation;

interface ActivationInterface
{
    public function forwardCalculation(float $value);

    public function backwardCalculation(float $value);
}