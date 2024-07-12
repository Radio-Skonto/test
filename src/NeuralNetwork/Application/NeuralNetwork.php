<?php

namespace App\NeuralNetwork\Application;

use App\NeuralNetwork\Application\Activation\SigmoidActivationFunction;
use App\NeuralNetwork\Application\InitNeuralNetwork\InitializeNeuralNetwork;

class NeuralNetwork
{
    public function createNeuralNetwork()
    {
        $neuralNetwork = new InitializeNeuralNetwork(10, 1, 10, SigmoidActivationFunction::class, 1);
    }
}