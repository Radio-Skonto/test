<?php

namespace App\NeuralNetwork\Application\InitWeight;

use App\NeuralNetwork\Application\Structure\NeuralNetworkLayer;
use App\NeuralNetwork\Application\Structure\NeuralNetworkLayerInterface;

interface InitializeWeightInterface
{
    public function initializeWeight(NeuralNetworkLayerInterface $neuralNetworkLayer);
}