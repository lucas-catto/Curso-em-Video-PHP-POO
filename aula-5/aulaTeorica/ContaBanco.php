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
		public function $abrirConta($contaTipo){
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

		public function $fecharConta(){
			if($getSaldo() > 0){
				echo "Saque o dinheiro restante!";
			}
			elseif ($getSaldo() < 0){
				echo "Pague sua dívida antes!";
			}
			else{
				$setStatus(false);
				echo "Tudo certo, até uma próxima!";
			}
		}
		public function $depositar($valor){
			if ($getStatus() ==  true){ // Se a conta estiver aberta
				$setSaldo($getSaldo() += $valor); // "Lê" o saldo e soma com o valor, depois altera o valor anterior
			}
			else{ // Se a conta estiver fechada
				echo "Impossível depositar!";
			}
		}
		public function $sacar($valor){
			if($getStatus() == true){ // Se a conta estiver aberta
				if($getSaldo() > $valor){ // Se o saldo for maior que $valor
					$setSaldo($getSaldo() -= $valor);
				}
				else{ // Se o saldo não for suficiente
					echo "Saldo insuficiente!";
				}
			}
			else{ // Se a conta estiver fechada
				echo "Impossível sacar!";
			}
		}
		public function $pagarMensal(){
			$var;
			if($getTipo() == "cc"){
				var = 12;
			}
			else{
				var = 20;
			}

			if($getStatus() == true){
				if($getSaldo() > $var){
					setSaldo($getSaldo() -= $var);
				}
				else{
					echo "Saldo insuficiente!";
				}
			}
		}
		
		// Método construtor:
		function __construct(){
			$setSaldo(0);
			$setStatus(false);
		}

		// ==========================================

		// Definindo os métodos acessores dos atributos:
		public function $setNumConta($alt){
			$this->$numConta = $alt;
		}
		public function $getNumConta(){
			return $this->$numConta;
		}
		// -----------------------------------
		public function $setTipo($alt){
			$this->$tipo = $alt;
		}
		public function $getTipo(){
			return $this->$tipo;
		}
		// -----------------------------------
		public function $setDono($alt){
			$this->$dono = $alt;
		}
		public function $getDono(){
			return $this->$dono;
		}
		// -----------------------------------
		public function $setSaldo($alt){
			$this->$saldo = $alt;
		}
		public function $getSaldo(){
			return $this->$saldo;
		}
		// -----------------------------------
		public function $setStatus($alt){
			$this->$saldo = $alt;
		}
		public function $getStatus(){
			return $this->status;
		}	
	}
?>