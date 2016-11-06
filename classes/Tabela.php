<?php

 class Tabela {
 	public $amostras;
 	public $numero_amostras;
 	public $col1;
 	public $col2;

 	public function __construct( array $amostras ) {
 		$this->numero_amostras = count($amostras);
 		$this->amostras = $amostras;
 	}


 	public function gera_tabela() {
	 	
	 	function sum($carry, $item) {
		    $carry += $item[2];
		    return $carry;
		}

 		$html = '';
		$Fi = 0;
		$total = array_reduce($this->amostras, "sum");

 		foreach ($this->amostras as $key => $value) {
 			$html .= '<tr>';
 			$Fi += $value[2];
 			$html .= '<td>'.$value[0].' a '.$value[1].'</td>';
 			$html .= '<td>'.$value[2].'</td>';
 			$html .= '<td>'.$Fi.'</td>';
 			$decimal = number_format($value[2] / $total, 2);
 			$html .= '<td>'.$decimal.'</td>';
 			$html .= '<td>'.($value[0] + $value[1]) / 2 .'</td>';
 			$html .= '</tr>';
 		}
 		return $html;
 	}

 	static function separa_amostras($array, $increment = 10, $init = 0) {
	
		$soma = 0;
		$i = 0;

		foreach ($array as $key => $value) {

			if ($value <= $init + $increment) {
				$soma++;
			} else {
				$matriz[$i][0] = $init;
				$matriz[$i][1] = $init + $increment;
				$matriz[$i][2] = $soma;
				$i++;
				$init += $increment;
				$soma = 0;
			}

		}

		$matriz[$i][0] = $init;
		$matriz[$i][1] = $init + $increment;
		$matriz[$i][2] = $soma;
		
		return $matriz;
	}
 }