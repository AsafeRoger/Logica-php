<?php
require_once("Estado.php");


    class Cidade{

        private string $nome;
        private int $qtdAbitantes;
        private int $altitude;
        private Estado $estado;

        /**
         * Get the value of nome
         */
        public function getNome(): string
        {
                return $this->nome;
        }

        /**
         * Set the value of nome
         */
        public function setNome(string $nome): self
        {
                $this->nome = $nome;

                return $this;
        }

        /**
         * Get the value of qtdAbitantes
         */
        public function getQtdAbitantes(): int
        {
                return $this->qtdAbitantes;
        }

        /**
         * Set the value of qtdAbitantes
         */
        public function setQtdAbitantes(int $qtdAbitantes): self
        {
                $this->qtdAbitantes = $qtdAbitantes;

                return $this;
        }

        /**
         * Get the value of altitude
         */
        public function getAltitude(): int
        {
                return $this->altitude;
        }

        /**
         * Set the value of altitude
         */
        public function setAltitude(int $altitude): self
        {
                $this->altitude = $altitude;

                return $this;
        }

        /**
         * Get the value of estado
         */
        public function getEstado(): Estado
        {
                return $this->estado;
        }

        /**
         * Set the value of estado
         */
        public function setEstado(Estado $estado): self
        {
                $this->estado = $estado;

                return $this;
        }
    }
