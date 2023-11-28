<?php

    require 'vendor/autoload.php';

    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

    $fileName = 'Payment-Report';

    require('db_connect.php');
    $studentQuery = mysqli_query($conn,'SELECT * FROM payments') or die('Query Failed');

    if(mysqli_num_rows($studentQuery) >0)
    {
        $spreadsheet = new Spreadsheet();

        $styleArray = [
            'font' => [
                'bold' => true,
            ],
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
            ],
        
            'borders' => array(
                'allBorders' => array(
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                    'color' => array('argb' => '000000'),
                ),
            ),
        
            'fill' => [
                'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_GRADIENT_LINEAR,
                'rotation' => 90,
                'color' => [
                    'argb' => '9FE2BF',
                ],
                
            ],
        ];

        $styleArray2 = [
            'font' => [
                'bold' => false,
            ],
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
            ],
        
            'borders' => array(
                'allBorders' => array(
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                    'color' => array('argb' => '000000'),
                ),
            ),
        ];

        $spreadsheet->getActiveSheet()->getStyle('A1:J1')->applyFromArray($styleArray);
        $sheet = $spreadsheet->getActiveSheet();

        $sheet->getColumnDimension('A')->setAutoSize(true);
        $sheet->getColumnDimension('B')->setAutoSize(true);
        $sheet->getColumnDimension('C')->setAutoSize(true);
        $sheet->getColumnDimension('D')->setAutoSize(true);
        $sheet->getColumnDimension('E')->setAutoSize(true);
        $sheet->getColumnDimension('F')->setAutoSize(true);
        $sheet->getColumnDimension('G')->setAutoSize(true);
        $sheet->getColumnDimension('H')->setAutoSize(true);
        $sheet->getColumnDimension('I')->setAutoSize(true);
        $sheet->getColumnDimension('J')->setAutoSize(true);

        $sheet->setCellValue('A1', 'Sr. No.');
        $sheet->setCellValue('B1', 'Username');
        $sheet->setCellValue('C1', 'Phone');
        $sheet->setCellValue('D1', 'Email');
        $sheet->setCellValue('E1', 'Address');
        $sheet->setCellValue('F1', 'Location');
        $sheet->setCellValue('G1', 'Amount');
        $sheet->setCellValue('H1', 'Order ID');
        $sheet->setCellValue('I1', 'Razorpay ID');
        $sheet->setCellValue('J1', 'Payment Date');
        
        $sheet->getPageMargins()->setTop(1);
        $sheet->getPageMargins()->setRight(0.75);
        $sheet->getPageMargins()->setLeft(0.75);
        $sheet->getPageMargins()->setBottom(1);

        $rowCount = 2;
        $number = 1;
        foreach ($studentQuery as $data) {
            $sheet->getStyle('A'.$rowCount.':J'.$rowCount)->applyFromArray($styleArray2);
            $sheet->setCellValue('A' . $rowCount, $number);
            $sheet->setCellValue('B' . $rowCount, $data['username']);
            $sheet->setCellValue('C' . $rowCount, $data['phone']);
            $sheet->setCellValue('D' . $rowCount, $data['email']);
            $sheet->setCellValue('E' . $rowCount, $data['address']);
            $sheet->setCellValue('F' . $rowCount, $data['location']);
            $sheet->setCellValue('G' . $rowCount, $data['amount']);
            $sheet->setCellValue('H' . $rowCount, $data['order_id']);
            $sheet->setCellValue('I' . $rowCount, $data['razorpayid']);
            $sheet->setCellValue('J' . $rowCount, $data['paymentdate']);
            
            $number++; 
            $rowCount++;
        }

        $writer = new Xlsx($spreadsheet);
        $filename=$fileName."(".date('d-M-Y').').xlsx';
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="'. urlencode($filename).'"');
        $writer->save('php://output');        
    }
    else
    {
        $_SESSION['message'] = 'No Record Found';
        header('Location: index.php');
    }

?>