<?php

namespace App\NeuralNetwork\Application\Structure;

interface NeuralNetworkLayerInterface
{
    public function __construct(
        float $bias,
        int $inputNeuronCount,
        int $outputNeuronCount,
    );
}