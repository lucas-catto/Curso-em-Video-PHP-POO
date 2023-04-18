<?php
	// Aula Teórica 5 – Exemplo Prático com Objetos
	
	class ContaBanco{
		// Definindo os atributos:
		public    $numConta;
		protected $tipo;
		private   $dono;
		private   $saldo;
		private   $status;

		// ==========================================

		// Definindo os métodos:
		public function abrirConta($contaTipo){
			$setStatus(true);
			if ($contaTipo == "cc"){
				$setTipo("cc");
				$setSaldo(50);
			}
			elseif ($contaTipo == "cp") {
				$setTipo("cp");
				$setSaldo(150);
			}
			else{
				return "Error!";
			}
		}

		public function fecharConta(){
			if($this->getSaldo() > 0){
				echo "Saque o dinheiro restante!";
			}
			elseif ($this->getSaldo() < 0){
				echo "Pague sua dívida antes!";
			}
			else{
				$this->setStatus(false);
				echo "Tudo certo, até uma próxima!";
			}
		}
		public function depositar($valor){
			if ($this->getStatus() ==  true){ // Se a conta estiver aberta
				$this->setSaldo($this->getSaldo() += $valor); // "Lê" o saldo e soma com o valor, depois altera o valor anterior
			}
			else{ // Se a conta estiver fechada
				echo "Impossível depositar!";
			}
		}
		public function sacar($valor){
			if($this->getStatus() == true){ // Se a conta estiver aberta
				if($this->getSaldo() > $valor){ // Se o saldo for maior que $valor
					$this->setSaldo($this->getSaldo() -= $valor);
				}
				else{ // Se o saldo não for suficiente
					echo "Saldo insuficiente!";
				}
			}
			else{ // Se a conta estiver fechada
				echo "Impossível sacar!";
			}
		}
		public function pagarMensal(){
			$var;
			if($this->getTipo() == "cc"){
				$var = 12;
			}
			else{
				$var = 20;
			}

			if($this->getStatus() == true){
				if($this->getSaldo() > $var){
					$this->setSaldo($this->getSaldo() -= $var);
				}
				else{
					echo "Saldo insuficiente!";
				}
			}
		}
		
		// Método construtor:
		function __construct(){
			$this->setSaldo(0);
			$this->setStatus(false);
		}

		// ==========================================

		// Definindo os métodos acessores dos atributos:
		public function setNumConta($alt){
			$this->numConta = $alt;
		}
		public function getNumConta(){
			return $this->numConta;
		}
		// -----------------------------------
		public function setTipo($alt){
			$this->tipo = $alt;
		}
		public function getTipo(){
			return $this->tipo;
		}
		// -----------------------------------
		public function setDono($alt){
			$this->dono = $alt;
		}
		public function getDono(){
			return $this->dono;
		}
		// -----------------------------------
		public function setSaldo($alt){
			$this->saldo = $alt;
		}
		public function getSaldo(){
			return $this->saldo;
		}
		// -----------------------------------
		public function setStatus($alt){
			$this->saldo = $alt;
		}
		public function getStatus(){
			return $this->status;
		}	
	}
?>