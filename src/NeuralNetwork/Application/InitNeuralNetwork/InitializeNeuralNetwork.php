<?php

namespace App\NeuralNetwork\Application\InitNeuralNetwork;

use App\NeuralNetwork\Application\Activation\ActivationInterface;
use App\NeuralNetwork\Application\Structure\NeuralNetworkLayer;

class InitializeNeuralNetwork implements InitializeNeuralNetworkInterface
{

    private int $inputNeuronCount;
    private int $hiddenLayerCount;
    private int $hiddenLayerNeuronCount;
    private ActivationInterface $hiddenLayerActivation;
    private int $outputLayerNeuronCount;
    private array $networkLayers;
    public function __construct(
        int $inputNeuronCount,
        int $hiddenLayerCount,
        int $hiddenLayerNeuronCount,
        ActivationInterface $hiddenLayerActivation,
        int $outputLayerNeuronCount,
    ) {
        $this->inputNeuronCount         = $inputNeuronCount;
        $this->hiddenLayerCount         = $hiddenLayerCount;
        $this->hiddenLayerNeuronCount   = $hiddenLayerNeuronCount;
        $this->hiddenLayerActivation    = $hiddenLayerActivation;
        $this->outputLayerNeuronCount   = $outputLayerNeuronCount;

        for ($layer = 1; $layer < $hiddenLayerCount + 2; $layer++) {
            $this->networkLayers[]      = new NeuralNetworkLayer();
        }
    }
}