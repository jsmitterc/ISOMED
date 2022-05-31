<?php

	require'php/conection.php';
	require'../r/admin/Classes/PHPExcel/IOFactory.php';

					
	$fileName = "excel.xlsx" ;					
	$objPHPExcel = PHPExcel_IOFactory::load($fileName);			
	$objPHPExcel->setActiveSheetIndex(0);					
	$numrows = $objPHPExcel->setActiveSheetIndex(0)->getHighestRow();
							
	for ($i = 3; $i <= $numrows ; $i++){
		/*$comuna = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(0,$i)->getCalculatedValue();
		$razonSocial = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(1,$i)->getCalculatedValue();
		$rut = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2,$i)->getCalculatedValue();
		$direccion = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3,$i)->getCalculatedValue();
		$telefono = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4,$i)->getCalculatedValue();
		$fantasia = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5,$i)->getCalculatedValue();
		$email = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6,$i)->getCalculatedValue();
		$contacto = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7,$i)->getCalculatedValue();
		$cpago = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(8,$i)->getCalculatedValue();
		echo "$comuna;$razonSocial;$rut;$direccion;$telefono;$fantasia;$email$contacto</br>";



			$sql ="INSERT INTO clientes(rut, razonSocial, direccion, 
					comuna, telefono, nombreFantasia, email, contacto, cPago) 
					VALUES ('$rut','$razonSocial','$direccion','$comuna',
						'$telefono','$fantasia','$email','$contacto','$cpago')";
			//$mysqli->query($sql);*/
			
			
		$nombre = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2,$i)->getCalculatedValue();
		$categoria = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3,$i)->getCalculatedValue();
		$formato = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4,$i)->getCalculatedValue();
		$unidadXformato = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5,$i)->getCalculatedValue();
		$stock = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6,$i)->getCalculatedValue();
		echo "$nombre;$categoria;$formato;$unidadXformato;$stock</br>";



			$sql ="INSERT INTO productos(nombre,category,formato,unidadXformato,stock) 
					VALUES ('$nombre','$categoria','$formato','$unidadXformato',
						'$stock')";
			$mysqli->query($sql);

	}
	//unlink("excel/".$fileName);

							
			
					
	
	
?>