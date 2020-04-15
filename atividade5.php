<?php

	$cpf = $_POST["cpf"];
	
	if(strlen($cpf) != 11 || $cpf == '00000000000' || $cpf == '11111111111' || $cpf == '22222222222' || $cpf == '33333333333' || $cpf == '44444444444' || $cpf == '55555555555' || $cpf == '66666666666' || $cpf == '77777777777' || $cpf == '88888888888' || $cpf == '99999999999') {		
			echo "“CPF Inválido!" ;
	} else {
		//Verificando se o dígito J é válido
		$umJ = intval($cpf[0] * 10);
		$doisJ = intval($cpf[1] * 9);
		$tresJ = intval($cpf[2] * 8);
		$quatroJ = intval($cpf[3] * 7);
		$cincoJ = intval($cpf[4] * 6);
		$seisJ = intval($cpf[5] * 5);
		$seteJ = intval($cpf[6] * 4);
		$oitoJ = intval($cpf[7] * 3);
		$noveJ = intval($cpf[8] * 2);
		
		$totalJ = $umJ+$doisJ+$tresJ+$quatroJ+$cincoJ+$seisJ+$seteJ+$oitoJ+$noveJ;
		$resultadoJ = ($totalJ % 11);
		
		if($resultadoJ == 0 || $resultadoJ == 1) { 
			if($cpf[9] == 0){
				
				//Verificando se o dígito K é válido
				$umK = intval($cpf[0] * 11);
				$doisK = intval($cpf[1] * 10);
				$tresK = intval($cpf[2] * 9);
				$quatroK = intval($cpf[3] * 8);
				$cincoK = intval($cpf[4] * 7);
				$seisK = intval($cpf[5] * 6);
				$seteK = intval($cpf[6] * 5);
				$oitoK= intval($cpf[7] * 4);
				$noveK = intval($cpf[8] * 3);
				$resultadoK = $cpf[9] * 2;
				
				$totalK = $umK+$doisK+$tresK+$quatroK+$cincoK+$seisK+$seteK+$oitoK+$noveK+$resultadoK;
				$resultadoK = ($totalK % 11);
				
				if($resultadoK == 0 || $resultadoK == 1) { 
					if($cpf[10] == 0){
						echo "CPF Válido!" ;
					} else {
						echo "CPF Inválido!" ;
					}			
				}
				elseif ($cpf[10] == (11 - $resultadoK)){
					echo "“CPF Válido!" ;
				} else {
					echo "CPF Inválido!" ;
				}
				
			} else {
				echo "CPF Inválido!" ;
			}			
		}
		elseif ($cpf[9] == (11 - $resultadoJ)){
			
				//Verificando se o dígito K é válido
				$umK = intval($cpf[0] * 11);
				$doisK = intval($cpf[1] * 10);
				$tresK = intval($cpf[2] * 9);
				$quatroK = intval($cpf[3] * 8);
				$cincoK = intval($cpf[4] * 7);
				$seisK = intval($cpf[5] * 6);
				$seteK = intval($cpf[6] * 5);
				$oitoK= intval($cpf[7] * 4);
				$noveK = intval($cpf[8] * 3);
				$resultadoK = $cpf[9] * 2;
				
				$totalK = $umK+$doisK+$tresK+$quatroK+$cincoK+$seisK+$seteK+$oitoK+$noveK+$resultadoK;
				$resultadoK = ($totalK % 11);
				
				if($resultadoK == 0 || $resultadoK == 1) { 
					if($cpf[10] == 0){
						echo "CPF Válido!" ;
					} else {
						echo "CPF Inválido!" ;
					}			
				}
				elseif ($cpf[10] == (11 - $resultadoK)){
					echo "CPF Válido!" ;
				} else {
					echo "CPF Inválido!" ;
				}
		} else {
			echo "CPF Inválido!" ;
		}			
	}	
?>