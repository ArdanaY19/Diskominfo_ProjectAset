<?php

namespace App\Exports;

use App\gedungBgn;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class GedungExport implements FromCollection, WithHeadings, ShouldAutoSize, WithEvents
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return gedungBgn::all();
    }

    public function headings(): array
    {
        return [
            'No',
            'NoKodeBrg',
            'NamaBarang',
            'NoReg',
            'KondisiBgn',
            'KBTingkat',
            'KBPondasi',
            'LuasLt',
            'Luas',
            'DokTgl',
            'DokNo',
            'KodeTanah',
            'StatusTanah',
            'AsalUsul',
            'JumlahGd',
            'Alamat',
            'HargaPerolehan',
            'SpNo',
            'SpTgl',
            'KwNo',
            'KwTgl',
            'BaNo',
            'BaTgl',
            'SkpdPemberi',
            'KodeLama',
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
                $event->sheet->getDelegate()->getStyle('A1:AI1')->getFont()->setSize(12)->setBold(true);
            },
        ];
    }
}
