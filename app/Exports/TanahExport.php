<?php

namespace App\Exports;

use App\tanah;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class TanahExport implements FromCollection, WithHeadings, ShouldAutoSize, WithEvents
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return tanah::all();
    }

    public function headings(): array
    {
        return [
            'No',
            'NamaBarang',
            'NoKodeBrg',
            'NoReg',
            'Luas',
            'Tahun',
            'Alamat',
            'StatusHak',
            'SertifTgl',
            'SertifNo',
            'Penggunaan',
            'AsalUsul',
            'Jumlah',
            'HargaPerolehan',
            'SpNo',
            'SpTgl',
            'KwNo',
            'KwTgl',
            'BaNo',
            'BaTgl',
            'SkpdPemberi',
            'KodeBaru',
            'Level1',
            'Level2',
            'Level3',
            'Level4',
            'Level5',
            'FotoBrg',
            'Created At',
            'Updated At',
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
                $event->sheet->getDelegate()->getStyle('A1:AD1')->getFont()->setSize(12)->setBold(true);
            },
        ];
    }
}
