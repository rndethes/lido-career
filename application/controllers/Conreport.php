<?php

defined('BASEPATH') or exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Conreport extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        // Auth Middleware
        $user = getLoggedInUser();
        if ($user) {
            // If authenticated user is not admin
            if ($user['is_candidate'] === true) {
                $this->session->sess_destroy();

                redirect(site_url('auth'));
            }
        } else {
            redirect(site_url('auth'));
        }

        $this->load->model('report');
    }

    public function index()
    {
        if ($this->session->userdata('is_superadmin') == false) {
            show_404();
        }

        $data['kandidat'] = $this->report->getAllData();


        $this->load->view('templates/header');
        $this->load->view('report/tabreport', $data);
        $this->load->view('templates/footer');
    }

    public function filter()
    {
        $firstDate = $this->input->get('tglstart');
        $secondDate = $this->input->get('tglend');
        $data['kandidat'] = $this->report->daterange($firstDate, $secondDate);
        // var_dump($data);
        // print_r($data);
        // exit();

        $this->load->view('templates/header');
        $this->load->view('report/tabreport', $data);
        $this->load->view('templates/footer');
    }

    public function pdf()
    {
        $firstDate = $this->input->get('tglstart');
        $secondDate = $this->input->get('tglend');
        $data['kandidat'] = $this->report->daterange($firstDate, $secondDate);
        // $data['kandidat'] = $this->report->getAllData();


        //    $test =  $this->input->get('tanggal_awal');


        $this->load->library('pdf');
        // $html = $this->load->view('nama view di pdf nanti', $data, true);
        $html = $this->load->view('report/viewpdf', $data, true);

        // $this->pdf->createPDF($html, 'namafilepdf', false);

        $this->pdf->createPDF($html, 'mypdf', false);
    }

    public function createExcel()
    {
        $fileName = 'Laporan_kandidat.xlsx';
        $firstDate = $this->input->get('tglstart');
        $secondDate = $this->input->get('tglend');
        $dataUser = $this->report->daterange($firstDate, $secondDate);
        // impor libararies
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        // set table head
        $sheet->getColumnDimension('A')->setAutoSize(true);
        $sheet->getColumnDimension('B')->setAutoSize(true);
        $sheet->getColumnDimension('C')->setAutoSize(true);
        $sheet->getColumnDimension('D')->setAutoSize(true);
        $sheet->getColumnDimension('E')->setAutoSize(true);
        $sheet->getColumnDimension('F')->setAutoSize(true);
        $sheet->getColumnDimension('G')->setAutoSize(true);
        $sheet->getColumnDimension('H')->setAutoSize(true);
        $sheet->getColumnDimension('I')->setAutoSize(true);

        $sheet->setCellValue('A1', 'Nama');
        $sheet->setCellValue('B1', 'Jenis kelamin');
        $sheet->setCellValue('C1', 'Email');
        $sheet->setCellValue('D1', 'Nomor HP');
        $sheet->setCellValue('E1', 'Tanggal lahir');
        $sheet->setCellValue('F1', 'Alamat');
        $sheet->setCellValue('G1', 'Kode pos');
        $sheet->setCellValue('H1', 'Nomor rumah');
        $sheet->setCellValue('I1', 'Status');

        //row untuk isi mulai dari

        $rows = 2;
        foreach ($dataUser as $val) {
            $sheet->setCellValue('A' . $rows, $val['name_candidate']);
            if ($val['jk_candidate'] == 1) {
                $sheet->setCellValue('B' . $rows, 'Laki-Laki');
            } elseif ($val['jk_candidate'] == 2) {
                $sheet->setCellValue('B' . $rows, 'Perempuan');
            } else {
                $sheet->setCellValue('B' . $rows, 'Netral');
            }
            $sheet->setCellValue('C' . $rows, $val['email_candidate']);
            $sheet->setCellValue('D' . $rows, $val['no_candidate']);
            $sheet->setCellValue('E' . $rows, $val['birthdate_candidate']);
            $sheet->setCellValue('F' . $rows, $val['address_candidate']);
            $sheet->setCellValue('G' . $rows, $val['noaddress_candidate']);
            $sheet->setCellValue('H' . $rows, $val['poskode_candidate']);
            if ($val['is_active'] == 0) {
                $sheet->setCellValue('I' . $rows, 'OFF');
            } elseif ($val['is_active'] == 1) {
                $sheet->setCellValue('I' . $rows, 'AKTIF');
            } else {
                $sheet->setCellValue('I' . $rows, '');
            }
            $rows++;
        }
        $writer = new Xlsx($spreadsheet);

        $writer->save("uploads/" . $fileName);
        header("Content-Type: application/vnd.ms-excel");
        redirect(base_url("uploads/$fileName"));
    }



    // public function getdate() {

    //     $first_date = $this->input->get('tglstart');
    //     $second_date = $this->input->get('tglend');
    //     $data['caritanggal'] = $this->report->date($first_date, $second_date);

    //     $this->load->view('templates/header');
    //     $this->load->view('report/tabreport',$data);
    //     $this->load->view('templates/footer');
    // }

    // public function select_by_date_range() {
    //     $date1 = $this->input->post('tglstart');
    //     $date2 = $this->input->post('tglend');
    //     $data = array(
    //     'date1' => $date1,
    //     'date2' => $date2
    //     );
    //     if ($date1 == "" || $date2 == "") {
    //     $data['date_range_error_message'] = "Both date fields are required";
    //     } else {
    //     $result = $this->report->show_data_by_date_range($data);
    //     if ($result != false) {
    //     $data['result_display'] = $result;
    //     } else {
    //     $data['result_display'] = "No record found !";
    //     }
    //     }
    //     $data['show_table'] = $this->view_table();
    //     $this->load->view('select_form', $data);
    //     }
}
