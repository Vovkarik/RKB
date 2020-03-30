<?php

class DepartmentInfo
{
    public static function getDepartmentsInfo()
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
            ],
            'gynecology' => [
                'departmentName' => 'Гинекология',
                'departmentDescription' => 'Наше отделение имеет 60 коек',
                'departmentImage' => 'gynecology',
                'specialists' => [
                    0 => [
                        'image' => 'gromova',
                        'name' => 'Громова Людмила Петровна',
                        'qualification' => 'Врач акушер-гинеколог высшей квалификационной категории'
                    ],
                    1 => [
                        'image' => 'pimenova',
                        'name' => 'Пименова Дарья Викторовна',
                        'qualification' => 'Врач акушер-гинеколог первой квалификационной категории'
                    ],
                    2 => [
                        'image' => 'hohlova',
                        'name' => 'Хохлова Светлана Нодаровна',
                        'qualification' => 'Врач акушер-гинеколог первой квалификационной категории'
                    ]
                ]
            ],
            'purulent-surgery' => [
                'departmentName' => 'Гнойная хирургия',
                'departmentDescription' => 'Наше отделение имеет 60 коек',
                'departmentImage' => 'purulent_surgery',
                'specialists' => [
                    0 => [
                        'image' => 'kukuev',
                        'name' => 'Кукуев Александр Юрьевич',
                        'qualification' => 'Врач хирург высшей квалификационной категории'
                    ],
                    1 => [
                        'image' => 'zabolotskih',
                        'name' => 'Заболотских Сергей Геннадьевич',
                        'qualification' => 'Врач хирург высшей квалификационной категории'
                    ]
                ]
            ],
            'otorhinolaryngology' => [
                'departmentName' => 'ЛОР',
                'departmentDescription' => 'Наше отделение имеет 60 коек',
                'departmentImage' => 'otorhinolaryngology',
                'specialists' => [
                    0 => [
                        'image' => 'lebedev',
                        'name' => 'Лебедев Леонид Сергеевич',
                        'qualification' => 'Врач оториноларинголог высшей квалификационной категории'
                    ],
                    1 => [
                        'image' => 'aleksandrova',
                        'name' => 'Александрова Надежда Эдуардовна',
                        'qualification' => 'Врач оториноларинголог'
                    ],
                    2 => [
                        'image' => 'golosova',
                        'name' => 'Голосова Наталья Львовна',
                        'qualification' => 'Врач оториноларинголог первой квалификационной категории'
                    ],
                    3 => [
                        'image' => 'kamaleev',
                        'name' => 'Камалеев Андрей Владимирович',
                        'qualification' => 'Врач оториноларинголог высшей квалификационной категории'
                    ],
                ]
            ],
            'neurosurgery' => [
                'departmentName' => 'Нейрохирургия',
                'departmentDescription' => 'Наше отделение имеет 60 коек',
                'departmentImage' => 'neurosurgery',
                'specialists' => [
                    0 => [
                        'image' => 'trifonov',
                        'name' => 'Трифонов Сергей Николаевич',
                        'qualification' => 'Врач нейрохирург высшей квалификационной категории'
                    ],
                    1 => [
                        'image' => 'korolev',
                        'name' => 'Королев Рудольф Александрович',
                        'qualification' => 'Врач нейрохирург второй квалификационной категории'
                    ],
                    2 => [
                        'image' => 'krasilnikov',
                        'name' => 'Красильников Александр Владимирович',
                        'qualification' => 'Врач невролог первой квалификационной категории'
                    ],
                    3 => [
                        'image' => 'sekretarev',
                        'name' => 'Секретарев Алексей Вячеславович',
                        'qualification' => 'Врач нейрохирург высшей квалификационной категории'
                    ],
                    4 => [
                        'image' => 'skomorohov',
                        'name' => 'Скоморохов Олег Юрьевич',
                        'qualification' => 'Врач нейрохирург высшей квалификационной категории'
                    ],
                    5 => [
                        'image' => 'sofronov',
                        'name' => 'Софронов Антон Владимирович',
                        'qualification' => 'Врач нейрохирург первой квалификационной категории'
                    ],
                ]
            ],
            'operating-room' => [
                'departmentName' => 'Операционное отделение',
                'departmentDescription' => 'Наше отделение имеет 60 коек',
                'departmentImage' => 'operating_room',
                'specialists' => [
                    0 => [
                        'image' => 'melnik',
                        'name' => 'Мельник Георгий Александрович',
                        'qualification' => 'Врач хирург высшей квалификационной категории'
                    ]
                ]
            ],
            'resuscitation-2' => [
                'departmentName' => 'Реанимация №2',
                'departmentDescription' => 'Наше отделение имеет 60 коек',
                'departmentImage' => 'resuscitation_2',
                'specialists' => [
                    0 => [
                        'image' => 'shabrukov',
                        'name' => 'Шабруков Владими Николаевич',
                        'qualification' => 'Врач анестезиолог-реаниматолог высшей квалификационной категории'
                    ],
                    1 => [
                        'image' => 'sosoreva',
                        'name' => 'Сососрева Алена Владимировна',
                        'qualification' => 'Врач анестезиолог-реаниматолог второй квалификационной категории'
                    ],
                    2 => [
                        'image' => 'makarenko',
                        'name' => 'Макаренко Ирина Александровна',
                        'qualification' => 'Врач анестезиолог-реаниматолог второй квалификационной категории'
                    ]
                ]
            ],
            'resuscitation-1' => [
                'departmentName' => 'Реанимация №1',
                'departmentDescription' => 'Наше отделение имеет 60 коек',
                'departmentImage' => 'resuscitation_1',
                'specialists' => [
                    0 => [
                        'image' => 'kudryashov',
                        'name' => 'Кудряшов Константин Алексеевич',
                        'qualification' => 'Врач анестезиолог-реаниматолог высшей квалификационной категории'
                    ],
                    1 => [
                        'image' => 'andreev',
                        'name' => 'Андреев Алексей Васильевич',
                        'qualification' => 'Врач анестезиолог-реаниматолог высшей квалификационной категории'
                    ],
                    2 => [
                        'image' => 'antipin',
                        'name' => 'Антипин Вячеслав Олегович',
                        'qualification' => 'Врач анестезиолог-реаниматолог второй квалификационной категории'
                    ],
                    3 => [
                        'image' => 'belozerov',
                        'name' => 'Белозёров Михаил Андреевич',
                        'qualification' => 'Врач анестезиолог-реаниматолог'
                    ],
                    4 => [
                        'image' => 'builin',
                        'name' => 'Буйлин Александр Юрьевич',
                        'qualification' => 'Врач анестезиолог-реаниматолог высшей квалификационной категории'
                    ],
                    5 => [
                        'image' => 'gruzdeva',
                        'name' => 'Груздева Марина Вячеславовна',
                        'qualification' => 'Врач анестезиолог-реаниматолог высшей квалификационной категории'
                    ],
                    6 => [
                        'image' => 'leuhin',
                        'name' => 'Леухин Вячеслав Семенович',
                        'qualification' => 'Врач анестезиолог-реаниматолог'
                    ],
                    7 => [
                        'image' => 'melnik',
                        'name' => 'Мельник Максим Георгиевич',
                        'qualification' => 'Врач анестезиолог-реаниматолог первой квалификационной категории'
                    ],
                    8 => [
                        'image' => 'natfullina',
                        'name' => 'Натфуллина Илнара Забировна',
                        'qualification' => 'Врач анестезиолог-реаниматолог второй квалификационной категории'
                    ],
                    9 => [
                        'image' => 'sokolov',
                        'name' => 'Соколов Антон Александрович',
                        'qualification' => 'Врач анестезиолог-реаниматолог'
                    ]
                ]
            ],
            'thoracic-vascular-surgery' => [
                'departmentName' => 'Торакально-сосудистая хирургия',
                'departmentDescription' => 'Наше отделение имеет 60 коек',
                'departmentImage' => 'thoracic_vascular_surgery',
                'specialists' => [
                    0 => [
                        'image' => 'galkin',
                        'name' => 'Галкин Сергей Владимирович',
                        'qualification' => 'Врач торакальный хирург высшей квалификационной категории'
                    ],
                    1 => [
                        'image' => 'aleksandrov',
                        'name' => 'Александров Андрей Геннадьевич',
                        'qualification' => 'Врач сердечно-сосудистый хирург первой квалификационной категории'
                    ],
                    2 => [
                        'image' => 'deduhin',
                        'name' => 'Дедюхин Игорь Геннадьевич',
                        'qualification' => 'Врач торакальный хирург высшей квалификационной категории'
                    ],
                    3 => [
                        'image' => 'lebedeva',
                        'name' => 'Лебедева Мария Владимировна',
                        'qualification' => 'Врач сердечно-сосудистый хирург второй квалификационной категории'
                    ]
                ]
            ],
            'urology' => [
                'departmentName' => 'Урология',
                'departmentDescription' => 'Наше отделение имеет 60 коек',
                'departmentImage' => 'urology',
                'specialists' => [
                    0 => [
                        'image' => 'dubrovin',
                        'name' => 'Дубровин Василий Николаевич',
                        'qualification' => 'Врач уролог высшей квалификационной категории'
                    ],
                    1 => [
                        'image' => 'egoshin',
                        'name' => 'Егошин Александр Вячеславович',
                        'qualification' => 'Врач уролог высшей квалификационной категории'
                    ],
                    2 => [
                        'image' => 'mihailovskii',
                        'name' => 'Михайловский Олег Владимирович',
                        'qualification' => 'Врач уролог высшей квалификационной категории'
                    ],
                    3 => [
                        'image' => 'tabakov',
                        'name' => 'Табакаов Алексей Викторович',
                        'qualification' => 'Врач уролог высшей квалификационной категории'
                    ],
                    4 => [
                        'image' => 'shakirov',
                        'name' => 'Шакиров Рустам Рафкатович',
                        'qualification' => 'Врач уролог высшей квалификационной категории'
                    ]
                ]
            ],
            'surgery' => [
                'departmentName' => 'Хирургия',
                'departmentDescription' => 'Наше отделение имеет 60 коек',
                'departmentImage' => 'surgery',
                'specialists' => [
                    0 => [
                        'image' => 'kokorin',
                        'name' => 'Кокорин Владимир Анатольевич',
                        'qualification' => 'Врач хирург высшей квалификационной категории'
                    ],
                    1 => [
                        'image' => 'gavrilov',
                        'name' => 'Гаврилов Максим Николаевич',
                        'qualification' => 'Врач хирург высшей квалификационной категории'
                    ],
                    2 => [
                        'image' => 'glazirin',
                        'name' => 'Глазырин Павел Алексеевич',
                        'qualification' => 'Врач хирург первой квалификационной категории'
                    ],
                    3 => [
                        'image' => 'ivanov',
                        'name' => 'Иванов Ирогь Валерьевич',
                        'qualification' => 'Врач хирург высшей квалификационной категории'
                    ],
                    4 => [
                        'image' => 'melnik',
                        'name' => 'Мельник Георгий Александрович',
                        'qualification' => 'Врач хирург высшей квалификационной категории'
                    ]
                ]
            ],
            'maxillofacial-surgery' => [
                'departmentName' => 'Челюстно-лицевая хирургия',
                'departmentDescription' => 'Наше отделение имеет 60 коек',
                'departmentImage' => 'maxillofacial_surgery',
                'specialists' => [
                    0 => [
                        'image' => 'plotnikova',
                        'name' => 'Плотникова Мария Вячеславовна',
                        'qualification' => 'Врач челюстно-лицевой хирург высшей квалификационной категории'
                    ],
                    1 => [
                        'image' => 'kochev',
                        'name' => 'Кочев Константин Юрьевич',
                        'qualification' => 'Врач челюстно-лицевой хирург первой квалификационной категории'
                    ],
                    2 => [
                        'image' => 'reshetova',
                        'name' => 'Решетова Ольга Вячеславовна',
                        'qualification' => 'Врач челюстно-лицевой хирург второй квалификационной категории'
                    ],
                    3 => [
                        'image' => 'shaihutdinov',
                        'name' => 'Шайхутдинов Александр Рифатович',
                        'qualification' => 'Врач челюстно-лицевой хирург'
                    ]
                ]
            ],
        ];
    }
}