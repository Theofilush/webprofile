<?php
/**
 * Helpher untuk mencetak tanggal dalam format bahasa indonesia
 *
 * @package CodeIgniter
 * @category Helpers
 * @author Ardianta Pargo (ardianta_pargo@yhaoo.co.id)
 * @link https://gist.github.com/ardianta/ba0934a0ee88315359d30095c7e442de
 * @version 1.0
 */
/**
 * Fungsi untuk merubah bulan bahasa inggris menjadi bahasa indonesia
 * @param int nomer bulan, Date('m')
 * @return string nama bulan dalam bahasa indonesia
 */
if (!function_exists('bulan')) {
    function bulan(){
        $bulan = Date('m');
        switch ($bulan) {
            case 1:
                $bulan = "Januari";
                break;
            case 2:
                $bulan = "Februari";
                break;
            case 3:
                $bulan = "Maret";
                break;
            case 4:
                $bulan = "April";
                break;
            case 5:
                $bulan = "Mei";
                break;
            case 6:
                $bulan = "Juni";
                break;
            case 7:
                $bulan = "Juli";
                break;
            case 8:
                $bulan = "Agustus";
                break;
            case 9:
                $bulan = "September";
                break;
            case 10:
                $bulan = "Oktober";
                break;
            case 11:
                $bulan = "November";
                break;
            case 12:
                $bulan = "Desember";
                break;
            default:
                $bulan = Date('F');
                break;
        }
        return $bulan;
    }
}
if (!function_exists('hari')) {
    function hari(){
        $hari = Date('l');
        switch ($hari) {
            case 'Monday':
                $hari = "Senin";
                break;
            case 'Tuesday':
                $hari = "Selasa";
                break;
            case 'Wednesday':
                $hari = "Rabu";
                break;
            case 'Thursday':
                $hari = "Kamis";
                break;
            case 'Friday':
                $hari = "Jumat";
                break;
            case 'Saturday':
                $hari = "Sabtu";
                break;
            case 'Sunday':
                $hari = "Minggu";
                break;            
            default:
                $hari = Date('D');
                break;
        }
        return $hari;
    }
}
/**
 * Fungsi untuk membuat tanggal dalam format bahasa indonesia
 * @param void
 * @return string format tanggal sekarang (contoh:Senin, 22 Desember 2016)
 */
if (!function_exists('tanggal')) {
    function tanggal() {
        $tanggal = hari().", " . Date('d') . " " .bulan(). " ".Date('Y');
        return $tanggal;
    }
}