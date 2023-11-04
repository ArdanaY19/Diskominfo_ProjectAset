<?php

namespace App\Exports;

use App\asetLain;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class AlainExport implements FromCollection, WithHeadings, ShouldAutoSize, WithEvents
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return asetLain::all();
    }

    public function headings(): array
    {
        return [
            'No',
            'NamaBarang',
            'NoReg',
            'Merk',
            'Ukuran',
            'Bahan',
            'TahunPembuatan',
            'NomorPabrik',
            'NomorRangka',
            'NomorMesin',
            'NomorPolisi',
            'NomorBPKB',
            'CaraPerolehan',
            'JmlBrg',
            'HargaSatuan',
            'HargaPerolehan',
            'SpNo',
            'SpTgl',
            'KwNo',
            'KwTgl',
            'BaNo',
            'BaTgl',
            'SkpdPemberi',
            'KodeLama',
            'Uraian',
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
                $event->sheet->getDelegate()->getStyle('A1:AB1')->getFont()->setSize(12)->setBold(true);
            },
        ];
    }
}
