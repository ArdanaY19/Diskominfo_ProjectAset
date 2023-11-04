<?php

namespace App\Exports;

use App\kontruksi;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class KontruksiExport implements FromCollection, WithHeadings, ShouldAutoSize, WithEvents
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return kontruksi::all();
    }

    public function headings(): array
    {
        return [
            'No',
            'NamaBarang',
            'Tingkat',
            'Beton',
            'Luas',
            'Alamat',
            'DokTgl',
            'DokNo',
            'ThMulai',
            'AsalUsul',
            'StatusTanah',
            'KodeTanah',
            'SpNo',
            'SpTgl',
            'KwNo',
            'KwTgl',
            'BaNo',
            'BaTgl',
            'SkpdPemberi',
            'NilaiKontrak',
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
                $event->sheet->getDelegate()->getStyle('A1:W1')->getFont()->setSize(12)->setBold(true);
            },
        ];
    }
}
