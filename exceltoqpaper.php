<?php
	require_once "Classes/PHPExcel.php";
	require('fpdf.php');
	$phpExcel=new PHPExcel;
	$excelReader = PHPExcel_IOFactory::createReaderForFile($_FILES['file']['tmp_name']);
    $excelObj = $excelReader->load($_FILES['file']['tmp_name']);

    $writer = PHPExcel_IOFactory::createWriter($phpExcel, "Excel2007");
    $sheet = $phpExcel ->getActiveSheet();
    $sheet->setTitle('Paper');
	$sheet ->getCell('A1')->setValue('Questions');
	$sheet ->getCell('B1')->setValue('Marks');
    $sheet->getStyle('A1:B1')->getFont()->setBold(true)->setSize(14);   
    $sheet->getDefaultStyle()->getFont()->setBold(false)->setSize(12);   

    $worksheet = $excelObj->getSheet(0);
    $max = $worksheet->getHighestRow()-1;
    $ct=0;
    $ct4=0;
    $ct6=0;
    $ct8=0;
    $a;
	for ($ct = 0; $ct <= 10; $ct++) 
	{
		$a=(rand(2,$max));
		if($worksheet->getCell('A'.$a)->getValue()==4 && $ct4<6)
		{
			$ct4++;
			$ct++;
			$sheet ->getCell('A'.($ct4+1))->setValue($worksheet->getCell('B'.$a)->getValue());	
			echo "val:".$worksheet->getCell('B'.$a)->getValue();					
			$sheet ->getCell('B'.($ct4+1))->setValue($worksheet->getCell('A'.$a)->getValue());
		}
		else if($worksheet->getCell('A'.$a)->getValue()==6 && $ct6<2)
		{
			$ct6++;
			$ct++;
			$sheet ->getCell('A'.($ct6+7))->setValue($worksheet->getCell('B'.$a)->getValue());	
			echo "val:".$worksheet->getCell('B'.$a)->getValue();				
			$sheet ->getCell('B'.($ct6+7))->setValue($worksheet->getCell('A'.$a)->getValue());
		}
		else if($worksheet->getCell('A'.$a)->getValue()==8 && $ct8<2)
		{
			$ct8++;
			$ct++;		
			$sheet ->getCell('A'.($ct8+9))->setValue($worksheet ->getCell('B'.$a)->getValue());
			echo "val:".$worksheet->getCell('B'.$a)->getValue();						
			$sheet ->getCell('B'.($ct8+9))->setValue($worksheet ->getCell('A'.$a)->getValue());

		}
	}
    echo "val:".$worksheet ->getCell('A'.$a)->getValue();
    $sheet->getColumnDimension('A')->setAutoSize(true);
    $sheet->getColumnDimension('B')->setAutoSize(true);

    $writer->save('QuestionPaper.xlsx');
      header("Location:success.php");
  exit();

?>