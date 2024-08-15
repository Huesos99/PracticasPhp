<?php

declare(strict_types=1);

abstract class Procesador //Herencia y abstracción con PHP
{
        protected $generation;
        protected $model;
        protected $velocity;
        protected $cores;
        protected $threads;

        public function __construct($generation, $model, $velocity, $cores, $threads)
        {
            $this->generation = $generation;
            $this->model = $model;
            $this->velocity = $velocity;
            $this->cores = $cores;
            $this->threads = $threads;
        }

        public function model(): string
        {
            return $this->model;
        }

        public function generation(): string
        {
            return $this->generation;
        }

        public function velocity(): float
        {
            return $this->velocity;
        }

        public function arquitecture(): string
        {
            return $this->cores. " cores and " .$this->threads. " threads";
        }

}