<?php

namespace App\Exports;

use App\mesin;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Events\BeforeSheet;

class MesinExport implements FromCollection, WithHeadings, ShouldAutoSize, WithEvents
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return mesin::select('id', 'KodeBarang', 'NamaBarang', 'Merk', 'Ukuran', 'Bahan', 'TahunPembuatan', 'NomorPabrik', 'NomorRangka', 'NomorMesin', 'NomorPolisi', 'NomorBPKB', 'FotoBrg', 'FotoBrg2')->get();
    }

    public function headings(): array
    {
        return [
            'No',
            'Kode Barang',
            'Nama Barang',
            'Merk',
            'Ukuran',
            'Bahan',
            'Tahun Pembuatan',
            'Nomor Pabrik',
            'NomorRangka', 
            'NomorMesin', 
            'NomorPolisi', 
            'NomorBPKB',
            'Foto Barang 1',
            'Foto Barang 2',
        ];
    }

    // public function styles(Worksheet $mesin)
    // {
    //     $mesin->getStyle('A1:J1')->getFont()->setBold(true);
    // }

    /**
     * @return array
     */
    public function registerEvents(): array
    {
        return [
            
            AfterSheet::class => function(AfterSheet $event) {
                $event->sheet->getDelegate()->getStyle('A1:N1')->getFont()->setSize(12)->setBold(true);
                
            },
        ];
    }
}
