<?php

namespace App\NeuralNetwork\Application\Activation;

class SigmoidActivationFunction implements ActivationInterface
{
    public function forwardCalculation(float $value)
    {
        return 1 / (1 + exp(-$value));
    }

    public function backwardCalculation(float $value)
    {
        return $value * (1 - $value);
    }
}