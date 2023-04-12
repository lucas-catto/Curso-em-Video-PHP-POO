<?php

	class ContaBanco{

		// atributos:
		public    $numConta;
		protected $tipo;
		private   $dono;
		private   $saldo;
		private   $status;

		// métodos:
		public function abrirConta($tipo){
			$this->setTipo($tipo);
			$this->setStatus(true);
			if($tipo == "cc"){
				$this->setSaldo(50);
			}
			elseif ($tipo == "cp"){
				$this->setSaldo(150);
			}
			//else{}
		}
		public function fecharConta(){
			if ($this->getSaldo() == 0) {
				$this->setStatus(false);
				echo "<p>Conta de ".$this->getDono()." fechada com sucesso!</p>";
			}
			else {
				if($this->getSaldo() >= 0){
					echo "<p>Antes, favor sacar o dinheiro restante!</p>";
				}
				else if ($this->getSaldo() <= 0){
					echo "<p>Antes, pague sua dívida!</p>";
				}
			}
		}
		public function depositar($valor){
			if($this->getStatus() == true){
				$this->setSaldo($this->getSaldo() + $valor);
				echo "<p>Depósito de R$$valor na conta de ".$this->getDono()."</p>";
			}
			else{
				echo "<p>Conta não existe!</p>";
			}
		}
		public function sacar($valor){
			if($this->getStatus()){
				if($this->getSaldo() >= $valor){
					$this->setSaldo($this->getSaldo() - $valor);
					echo "<p>Saque de R$$valor autorizado na conta de ".$this->getDono()."</p>";
				}
				else{
					echo "<p>Saldo incuficiente!</p>";
				}
			}
			else{
				echo "<p>Conta não ativa!</p>";
			}
		}
		public function pagarMensal(){
			if ($this->getTipo() == "cc") {
				$valor = 12;
			}
			elseif ($this->getTipo() == "cp"){
				$valor = 20;
			}
			if ($this->getStatus()) {
				$this->setSaldo($this->getSaldo() - $valor);
				echo "<p>Mensalidade de R$$valor debitada na conta de ".$this->getDono()."</p>";
			} else {
				echo "<p>Problemas com a conta. Não posso cobrar.</p>";
			}
			
		}

		// Método construtor:
		public function __construct(){
			$this->setSaldo(0);
			$this->setStatus(false);
			echo "<p>Conta criada com sucesso!</p>";
		}

		// Métodos acessores aos atributos:
		public function setNumConta($valor){
			$this->numConta = $valor;
		}
		public function getNumConta(){
			return $this->numConta;
		}
		// ---------------------------------
		public function setTipo($tipo){
			$this->tipo = $tipo; 
		}
		public function getTipo(){
			return $this->tipo;
		}
		// ---------------------------------
		public function setDono($dono){
			$this->dono = $dono;
		}
		public function getDono(){
			return $this->dono;
		}
		// ---------------------------------
		public function setSaldo($saldo){
			$this->saldo = $saldo;
		}
		public function getSaldo(){
			return $this->saldo;
		}
		// ---------------------------------
		public function setStatus($status){
			$this->status = $status;
		}
		public function getStatus(){
			return $this->status;
		}
		// ---------------------------------

	}

?>