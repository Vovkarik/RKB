<?php

class DepartmentInfo
{
    public static function getDepartmentsInfo()
    {
        return [
            'traumatology' => [
                'departmentName' => 'Травматолого-ортопедическое отделение',
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
                'departmentName' => 'Гинекологическое отделение',
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
                'departmentName' => 'Отделение гнойной хирургии и проктологии',
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
                'departmentName' => 'Нейрохирургическое отделение',
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
                'departmentName' => 'Урологическое отделение',
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
                'departmentName' => 'Хирургическое отделение',
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
                'departmentName' => 'Отделение челюстно-лицевой хирургии',
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
            'bacteriological-laboratory' => [
                'departmentName' => 'Бактериологическая лаборатория',
                'departmentDescription' => 'Наше отделение имеет 60 коек',
                'departmentImage' => 'bacteriological_laboratory',
                'specialists' => [
                    0 => [
                        'image' => 'zernova',
                        'name' => 'Зернова Галина Николаевна',
                        'qualification' => 'Врач бактериолог высшей квалификационной категории'
                    ]
                ]
            ],
            'clinical-diagnostic-laboratory' => [
                'departmentName' => 'Клинико-диагностические лаборатория',
                'departmentDescription' => 'Наше отделение имеет 60 коек',
                'departmentImage' => 'clinical_diagnostic_laboratory',
                'specialists' => [
                    0 => [
                        'image' => 'ostashenko',
                        'name' => 'Осташенко Светлана Владимировна',
                        'qualification' => 'Врач лаборант высшей квалификационной категории'
                    ]
                ]
            ],
            'pathology-department' => [
                'departmentName' => 'Патологоанатомическое отделение',
                'departmentDescription' => 'Наше отделение имеет 60 коек',
                'departmentImage' => 'pathology_department',
                'specialists' => [
                    0 => [
                        'image' => 'zuev',
                        'name' => 'Зуев Артем Юрьевич',
                        'qualification' => 'Врач патологоанатом высшей квалификационной категории'
                    ],
                    1 => [
                        'image' => 'zverev',
                        'name' => 'Зверев Алексей Сергеевич',
                        'qualification' => 'Врач патологоанатом'
                    ],
                    2 => [
                        'image' => 'novoselov',
                        'name' => 'Новоселов Николай Юрьевич',
                        'qualification' => 'Врач патологоанатом высшей квалификационной категории'
                    ],
                    3 => [
                        'image' => 'ohotnikov',
                        'name' => 'Охотников Михаил Александрович',
                        'qualification' => 'Врач патологоанатом второй квалификационной категории'
                    ]
                ]
            ],
            'reception-office' => [
                'departmentName' => 'Приемное отделение',
                'departmentDescription' => 'Наше отделение имеет 60 коек',
                'departmentImage' => 'reception_office',
                'specialists' => [
                    0 => [
                        'image' => 'gabdullin',
                        'name' => 'Габдуллин Марат Мансурович',
                        'qualification' => 'Врач травматолог-ортопед первой квалификационной категории'
                    ]
                ]
            ],
            'radiology' => [
                'departmentName' => 'Рентгенология',
                'departmentDescription' => 'Наше отделение имеет 60 коек',
                'departmentImage' => 'radiology',
                'specialists' => [
                    0 => [
                        'image' => 'agroskin',
                        'name' => 'Агроскин Леонид Семенович',
                        'qualification' => 'Врач рентгенолог высшей квалификационной категории'
                    ],
                    1 => [
                        'image' => 'agapitov',
                        'name' => 'Агапитов Юрий Владиславович',
                        'qualification' => 'Врач рентгенолог высшей квалификационной категории'
                    ],
                    2 => [
                        'image' => 'andreeva',
                        'name' => 'Андреева Алевтина Александровна',
                        'qualification' => 'Врач рентгенолог высшей квалификационной категории'
                    ],
                    3 => [
                        'image' => 'galkina',
                        'name' => 'Галкина Анна Альбертовна',
                        'qualification' => 'Врач рентгенолог высшей квалификационной категории'
                    ],
                    4 => [
                        'image' => 'goncharova',
                        'name' => 'Гончарова Ольга Викторовна',
                        'qualification' => 'Врач рентгенолог высшей квалификационной категории'
                    ],
                    5 => [
                        'image' => 'nikolaev',
                        'name' => 'Николаев Дмитрий Леонидович',
                        'qualification' => 'Врач рентгенолог высшей квалификационной категории'
                    ],
                    6 => [
                        'image' => 'ovchinnikov',
                        'name' => 'Овчинников Юрий Алексеевич',
                        'qualification' => 'Врач рентгенолог высшей квалификационной категории'
                    ],
                    7 => [
                        'image' => 'peretyagina',
                        'name' => 'Перетягина Галина Геннадьевна',
                        'qualification' => 'Врач рентгенолог высшей квалификационной категории'
                    ],
                    8 => [
                        'image' => 'sadrieva',
                        'name' => 'Садриева Гульзия Камилевна',
                        'qualification' => 'Врач рентгенолог второй квалификационной категории'
                    ]
                ]
            ],
            'functional-diagnostics' => [
                'departmentName' => 'Отделение функциональной диагностики',
                'departmentDescription' => 'Наше отделение имеет 60 коек',
                'departmentImage' => 'functional_diagnostics',
                'specialists' => [
                    0 => [
                        'image' => 'kudryashova',
                        'name' => 'Кудряшова Наталья Александровна',
                        'qualification' => 'Врач функциональной диагностики высшей квалификационной категории'
                    ],
                    1 => [
                        'image' => 'horoshaeva',
                        'name' => 'Хорошаева Надежда Александровна',
                        'qualification' => 'Врач функциональной диагностики второй квалификационной категории'
                    ],
                    2 => [
                        'image' => 'snopchenkoes',
                        'name' => 'Снопченко Екатерина Станиславовна',
                        'qualification' => 'Врач рентгенолог второй квалификационной категории'
                    ],
                    3 => [
                        'image' => 'snopchenkoso',
                        'name' => 'Снопченко Станислав Олегович',
                        'qualification' => 'Врач ультразвуковой диагностики высшей квалификационной категории'
                    ]
                ]
            ],
            'endoscopy' => [
                'departmentName' => 'Эндоскопическое отделение',
                'departmentDescription' => 'Наше отделение имеет 60 коек',
                'departmentImage' => 'endoscopy',
                'specialists' => [
                    0 => [
                        'image' => 'rizhkov',
                        'name' => 'Рыжков Виктор Леонидович',
                        'qualification' => 'Врач эндоскопист высшей квалификационной категории'
                    ],
                    1 => [
                        'image' => 'furina',
                        'name' => 'Фурина Раиса Рустэмовна',
                        'qualification' => 'Врач эндоскопист высшей квалификационной категории'
                    ],
                    2 => [
                        'image' => 'ureva',
                        'name' => 'Юрьева Светлана Николаевна',
                        'qualification' => 'Врач эндоскопист второй квалификационной категории'
                    ]
                ]
            ],
            'gastroenterology' => [
                'departmentName' => 'Гастроэнтерологическое  отделение',
                'departmentDescription' => 'Наше отделение имеет 60 коек',
                'departmentImage' => 'gastroenterology',
                'specialists' => [
                    0 => [
                        'image' => 'sitnov',
                        'name' => 'Ситнов Андрей Александрович',
                        'qualification' => 'Врач гастроэнтеролог высшей квалификационной категории'
                    ],
                    1 => [
                        'image' => 'kupriyanova',
                        'name' => 'Куприянова Нина Александровна',
                        'qualification' => 'Врач гастроэнтеролог высшей квалификационной категории'
                    ]
                ]
            ],
            'hemodialysis' => [
                'departmentName' => 'Отделение гемодиализа',
                'departmentDescription' => 'Наше отделение имеет 60 коек',
                'departmentImage' => 'hemodialysis',
                'specialists' => [
                    0 => [
                        'image' => 'rufov',
                        'name' => 'Руфов Аркадий Николаевич',
                        'qualification' => 'Врач нефролог высшей квалификационной категории'
                    ],
                    1 => [
                        'image' => 'oraspaev',
                        'name' => 'Ороспаев Михаил Владимирович',
                        'qualification' => 'Врач нефролог второй квалификационной категории'
                    ]
                ]
            ],
            'cardiology' => [
                'departmentName' => 'Кардиологическое отделение',
                'departmentDescription' => 'Наше отделение имеет 60 коек',
                'departmentImage' => 'cardiology',
                'specialists' => [
                    0 => [
                        'image' => 'kanisheva',
                        'name' => 'Канышева Светлана Владимировна',
                        'qualification' => 'Врач кардиолог высшей квалификационной категории'
                    ],
                    1 => [
                        'image' => 'ardishev',
                        'name' => 'Ардышев Александр Николаевич',
                        'qualification' => 'Врач кардиолог первой квалификационной категории'
                    ],
                    2 => [
                        'image' => 'nikolaeva',
                        'name' => 'Николаева Татьяна Евгеньевна',
                        'qualification' => 'Врач кардиолог первой квалификационной категории'
                    ],
                    3 => [
                        'image' => 'sredina',
                        'name' => 'Средина Ольга Сергеевна',
                        'qualification' => 'Врач кардиолог высшей квалификационной категории'
                    ]
                ]
            ],
            'neurology' => [
                'departmentName' => 'Неврологическое отделение',
                'departmentDescription' => 'Наше отделение имеет 60 коек',
                'departmentImage' => 'neurology',
                'specialists' => [
                    0 => [
                        'image' => 'kazakova',
                        'name' => 'Казакова Татьяна Александровна',
                        'qualification' => 'Врач невролог высшей квалификационной категории'
                    ],
                    1 => [
                        'image' => 'naimushin',
                        'name' => 'Наймушин Виктор Анисифович',
                        'qualification' => 'Врач кардиолог высшей квалификационной категории'
                    ]
                ]
            ],
            'nephrology' => [
                'departmentName' => 'Нефрологическое отделение',
                'departmentDescription' => 'Наше отделение имеет 60 коек',
                'departmentImage' => 'nephrology',
                'specialists' => [
                    0 => [
                        'image' => 'orehova',
                        'name' => 'Орехова Галина Александровна',
                        'qualification' => 'Врач нефролог высшей квалификационной категории'
                    ],
                    1 => [
                        'image' => 'orospaev',
                        'name' => 'Ороспаев Михаил Владимирович',
                        'qualification' => 'Врач нефролог второй квалификационной категории'
                    ]
                ]
            ],
            'rehabilitation-department' => [
                'departmentName' => 'Отделение восстановительного лечения',
                'departmentDescription' => 'Наше отделение имеет 60 коек',
                'departmentImage' => 'rehabilitation_department',
                'specialists' => [
                    0 => [
                        'image' => 'appakova',
                        'name' => 'Аппакова Светлана Анатольевна',
                        'qualification' => 'Врач физиотерепевт высшей квалификационной категории'
                    ]
                ]
            ],
            'pulmonology' => [
                'departmentName' => 'Пульмонологическое отделение',
                'departmentDescription' => 'Наше отделение имеет 60 коек',
                'departmentImage' => 'pulmonology',
                'specialists' => [
                    0 => [
                        'image' => 'nifaneva',
                        'name' => 'Нифаньева Татьяна Николаевна',
                        'qualification' => 'Врач пульмонолог первой квалификационной категории'
                    ],
                    1 => [
                        'image' => 'krasilnikova',
                        'name' => 'Красильникова Людмила Владимировна',
                        'qualification' => 'Врач пульмонолог высшей квалификационной категории'
                    ],
                    2 => [
                        'image' => 'kurochkina',
                        'name' => 'Курочкина Галина Михайловна',
                        'qualification' => 'Врач пульмонолог высшей квалификационной категории'
                    ],
                    3 => [
                        'image' => 'tihonova',
                        'name' => 'Тихонова Тамара Алексеевна',
                        'qualification' => 'Врач пульмонолог высшей квалификационной категории'
                    ]
                ]
            ],
            'rheumatology' => [
                'departmentName' => 'Ревматологическое отделение',
                'departmentDescription' => 'Наше отделение имеет 60 коек',
                'departmentImage' => 'rheumatology',
                'specialists' => [
                    0 => [
                        'image' => 'pozdeeva',
                        'name' => 'Поздеева Лариса Михайловна',
                        'qualification' => 'Врач ревматолог высшей квалификационной категории'
                    ],
                    1 => [
                        'image' => 'glazirina',
                        'name' => 'Глазырина Светлана Юрьевна',
                        'qualification' => 'Врач ревматолог'
                    ],
                    2 => [
                        'image' => 'gorbunova',
                        'name' => 'Горбунова Марина Евгеньевна',
                        'qualification' => 'Врач ревматолог высшей квалификационной категории'
                    ]
                ]
            ],
            'endocrinology' => [
                'departmentName' => 'Эндокринологическое отделение',
                'departmentDescription' => 'Наше отделение имеет 60 коек',
                'departmentImage' => 'endocrinology',
                'specialists' => [
                    0 => [
                        'image' => 'egoshina',
                        'name' => 'Егошина Людмила Васильевна',
                        'qualification' => 'Врач эндокринолог высшей квалификационной категории'
                    ],
                    1 => [
                        'image' => 'alekseev',
                        'name' => 'Алексеев Константин Валентинович',
                        'qualification' => 'Врач эндокринолог высшей квалификационной категории'
                    ],
                    2 => [
                        'image' => 'antipina',
                        'name' => 'Антипина Татьяна Геннадьевна',
                        'qualification' => 'Врач эндокринолог второй квалификационной категории'
                    ],
                    3 => [
                        'image' => 'shakirova',
                        'name' => 'Шакирова Мария Миъайловна',
                        'qualification' => 'Врач эндокринолог высшей квалификационной категории'
                    ]
                ]
            ],
            'clinic' => [
                'departmentName' => 'Республиканская консультативная поликлиника',
                'departmentDescription' => 'Наше отделение имеет 60 коек',
                'departmentImage' => 'clinic',
                'specialists' => [
                    0 => [
                        'image' => 'zavot',
                        'name' => 'Еникеева Татьяна Евгеньевна',
                        'qualification' => 'Врач терапевт высшей квалификационной категории'
                    ],
                    1 => [
                        'image' => 'alekseev',
                        'name' => 'Алексеев Константин Валентинович',
                        'qualification' => 'Врач эндокринолог высшей квалификационной категории'
                    ],
                    2 => [
                        'image' => 'andreeva',
                        'name' => 'Андреева Ольга Викторовна',
                        'qualification' => 'Врач ревматолог высшей квалификационной категории'
                    ],
                    3 => [
                        'image' => 'badina',
                        'name' => 'Бадьина Валентина Николаевна',
                        'qualification' => 'Врач аллерголог-иммунолог'
                    ],
                    4 => [
                        'image' => 'belyaeva',
                        'name' => 'Беляева Галина Александровна',
                        'qualification' => 'Врач кардиолог'
                    ],
                    5 => [
                        'image' => 'kachmashev',
                        'name' => 'Качмашев Евгений Геннадьевич',
                        'qualification' => 'Врач хирург'
                    ],
                    6 => [
                        'image' => 'myagkova',
                        'name' => 'Мягкова Евгения Михайловна',
                        'qualification' => 'Врач терапевт'
                    ]
                ]
            ],
        ];
    }
}