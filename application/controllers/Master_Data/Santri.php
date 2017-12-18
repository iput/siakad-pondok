<?php 
defined('BASEPATH')OR exit('no direct script access allowed');
/**
* 
*/
class Santri extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if (($this->session->userdata('iduser'))AND($this->session->userdata('username'))) {
			$this->load->model('ModSantri');
			require_once APPPATH."libraries/PHPExcel/Classes/PHPExcel.php";
		}else{
			redirect('login');
		}
	}

	public function index()
	{
		$objPHPExcel = new PHPExcel();
		$objPHPExcel->getProperties()->setCreator('Admin gasek')
									->setLastModifiedBy('Gintoki')
									->setTitle('Office excel 2010 XLXC Document')
									->setSubject('File excel')
									->setDescription('ini adalah file generate dari excel PHP')
									->setKeywords('excel open url')
									->setCategory('result file');
		$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A1:K1');
		$objPHPExcel->setActiveSheetIndex(0)
					->setCellValue('A1','DAFTAR SANTRI');
		$objPHPExcel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_style_Alignment::HORIZONTAL_CENTER);
		$objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);
		$objPHPExcel->setActiveSheetIndex(0)->calculateColumnWidths(true);

		$objPHPExcel->setActiveSheetIndex(0)
					->setCellValue('A3','NOMOR')
					->setCellValue('B3','NAMA')
					->setCellValue('C3','KELAHIRAN')
					->setCellValue('D3','TANGGAL LAHIR')
					->setCellValue('E3','JENIS KELAMIN')
					->setCellValue('F3','ALAMAT')
					->setCellValue('G3','NOMOR TELEPON')
					->setCellValue('H3','NAMA AYAH')
					->setCellValue('I3','ALAMAT AYAH')
					->setCellValue('J3','NAMA IBU')
					->setCellValue('K3','ALAMAT IBU');

		$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(10);
		$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(30);
		$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(30);
		$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(20);
		$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(15);
		$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(40);
		$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(20);
		$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(30);
		$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(30);
		$objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(30);
		$objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(30);

		$objPHPExcel->getActiveSheet()->getStyle('A3:K3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		$objPHPExcel->getActiveSheet()->getStyle('A3:K3')->applyFromArray(
			array(
				'borders'=>array(
					'allborders'=>array(
						'style'=>PHPExcel_Style_Border::BORDER_THIN,
						'color'=>array('argb'=>'9E9E9E9E')
					)
				)
			)
		);

		$objPHPExcel->getActiveSheet()
					->getStyle('A3:K3')
					->getFill()
					->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
					->getStartColor()
					->setARGB('2323B614');
		$daftar_mhs = $this->ModSantri->SemuaSantri();
		$no = 1;
		$baris = 4;
		foreach ($daftar_mhs as $row) {
			$objPHPExcel->setActiveSheetIndex(0)
						->setCellValue('A'.$baris,$no)
						->setCellValue('B'.$baris,$row['nama_santri'])
						->setCellValue('C'.$baris,$row['tempat_lahir'])
						->setCellValue('D'.$baris,$row['tanggal_lahir'])
						->setCellValue('E'.$baris,$row['jenis_kelamin'])
						->setCellValue('F'.$baris,$row['alamat_santri'])
						->setCellValue('G'.$baris,$row['noTelpon_santri'])
						->setCellValue('H'.$baris,$row['nama_ayah'])
						->setCellValue('I'.$baris,$row['alamat_ayah'])
						->setCellValue('J'.$baris,$row['nama_ibu'])
						->setCellValue('K'.$baris,$row['alamat_ibu']);

			$objPHPExcel->getActiveSheet()->getStyle("A".$baris.":C".$baris)->applyFromArray(
				array(
					'borders'=>array(
						'allborders'=>array(
							'style'=>PHPExcel_Style_Border::BORDER_THIN,
							'color'=>array('rgb'=>'9E9E9E9E')
						)
					)
				)
			);

			$objPHPExcel->getActiveSheet()
						->getStyle("A".$baris.":K".$baris)
						->getFill()
						->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
						->getStartColor()
						->setRGB('FBEE03');

			$no++;
			$baris++;

		}

		$objPHPExcel->getActiveSheet()->setTitle('DAFTAR SANTRI');
		$objPHPExcel->setActiveSheetIndex(0);

		header('Content-Type:application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="DAFTAR SANTRI.xlsx"');
		header('Cache-Control:max-age-1');
		header('Expires:Mon,26 Jul 1997 05:00:00 GMT');
		header('Last-Modified: '.gmdate('D, d M Y H:i:s').'GMT');
		header('Cache-Control: cache, must-revalidate');
		header('Pragma : public');
		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel,'Excel2007');
		$objWriter->save('php://output');
		exit;

		unset($objWriter, $objPHPExcel, $daftar_mhs, $no, $baris, $row);

	}
}
 ?>