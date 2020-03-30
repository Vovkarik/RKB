<?php

class DepartmentInfo
{
    public static function getTraumatologyInfo()
    {
        return [
            'traumatology' => [
                'departmentName' => 'Травмотология',
                'departmentDescription' => 'Наше отделение имеет 60 коек',
                'departmentImage' => 'traumatology',
                'specialists' => [
                    0 => [
                        'image' => 'gatiatulin',
                        'name' => 'Гатиатулин Раиль Гадилевич',
                        'qualification' => 'Врач травматолог-ортопед высшей квалификационной категории'
                    ],
                    1 => [
                        'image' => 'bogatirev',
                        'name' => 'Богатырев Андрей Александрович',
                        'qualification' => 'Врач травматолог-ортопед высшей квалификационной категории'
                    ],
                    2 => [
                        'image' => 'vasilev',
                        'name' => 'Васильев Михаил Борисович',
                        'qualification' => 'Врач травматолог-ортопед высшей квалификационной категории'
                    ],
                    3 => [
                        'image' => 'gabdullin',
                        'name' => 'Габдуллин Марат Мансурович',
                        'qualification' => 'Врач травматолог-ортопед первой квалификационной категории'
                    ],
                    4 => [
                        'image' => 'perevozchikov',
                        'name' => 'Перевозчиков Михаил Павлович',
                        'qualification' => 'Врач травматолог-ортопед высшей квалификационной категории'
                    ],
                    5 => [
                        'image' => 'tokarev',
                        'name' => 'Токарев Игорь Геннадьевич',
                        'qualification' => 'Врач травматолог-ортопед первой квалификационной категории'
                    ]
                ]
            ]
        ];
    }
}