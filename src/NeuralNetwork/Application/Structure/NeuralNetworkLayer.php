<?php

namespace App\NeuralNetwork\Application\Structure;

use App\NeuralNetwork\Application\Activation\ActivationInterface;

class NeuralNetworkLayer implements NeuralNetworkLayerInterface
{
    private int $layerId;

    private array $neuronValue;

    private array $weight;

    private float $bias;

    private ActivationInterface $activationFunction;

    public function __construct(
        float $bias,
        int $inputNeuronCount,
        int $outputNeuronCount,
    ) {
        $this->bias     = $bias;
        for ($input = 0; $input < $inputNeuronCount; $input++) {
            $this->weight[] = array_fill(0, $outputNeuronCount, rand(0,10000) / 10000);
        }
    }

    public function getLayerId(): int
    {
        return $this->layerId;
    }

    public function setLayerId(int $layerId): void
    {
        $this->layerId = $layerId;
    }

    public function getNeuronValue(): array
    {
        return $this->neuronValue;
    }

    public function setNeuronValue(array $neuronValue): void
    {
        $this->neuronValue = $neuronValue;
    }

    public function getWeight(): array
    {
        return $this->weight;
    }

    public function setWeight(array $weight): void
    {
        $this->weight = $weight;
    }

    public function getBias(): float
    {
        return $this->bias;
    }

    public function setBias(float $bias): void
    {
        $this->bias = $bias;
    }

    public function getActivationFunction(): ActivationInterface
    {
        return $this->activationFunction;
    }

    public function setActivationFunction(ActivationInterface $activationFunction): void
    {
        $this->activationFunction = $activationFunction;
    }
}