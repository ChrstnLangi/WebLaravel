<?php

namespace App\Models;


class Post
{
    private static $hireds = [
        [
        "name" => "Dents.Talk",
        "image" => "Assets/13_20220719_015826_0012.png"
        ],
        [
        "name" => "PDGI",
        "image" => "Assets/8_20220719_015826_0007.png"
        ]
    ];

    private static $joins = [
        [
            "judul" => "Lorem ipsum",
            "deskripsi" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.",
            "img" => " "
        ],
        [
            "judul" => "Dolor sit",
            "deskripsi" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.",
            "img" => ""
        ],
        [
            "judul" => "Amet consectetur",
            "deskripsi" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.",
            "img" => ""
        ],
        [
            "judul" => "Adipisicing elit",
            "deskripsi" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.",
            "img" => ""
        ],
        [
            "judul" => "Quas minus",
            "deskripsi" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.",
            "img" => ""
        ]
        ];

        private static $programs = [
            [
                "judul" => "DentsLearn Hands On",
                "deskripsi" => "Merupakan suatu program yang dapat meningkatkan skill keterampilan dokter gigi dalam melakukan tindakan praktik dengan pemberian materi serta praktik langsung yang dibimbing oleh pemateri yang memiliki kompetensi.",
                "img" => "Assets/4_20220719_015826_0003.png",
                "link" => "program_1",
                "mini_link" =>"mini_program_1"
            ],
            [
                "judul" => "DentsLearn Webinar",
                "deskripsi" => "Merupakan seminar mengenai topik kedokteran gigi yang mendatangkan pemateri berkompeten di bidangnya serta bekerja sama dengan PDGI maupun organisasi terkait",
                "img" => "Assets/5_20220719_015826_0004.png",
                "link" => "program_2",
                "mini_link" =>"mini_program_2"
            ],
            [
                "judul" => "DentsPractice",
                "deskripsi" => "Merupakan suatu program yang menyediakan fasilitas bagi mahasiswa kedokteran gigi untuk dapat melakukan skill lab di rumah masing-masing yang dikemas dalam materi yang mudah dipahami",
                "img" => "Assets/6_20220719_015826_0005.png",
                "link" => "program_3",
                "mini_link" =>"mini_program_3"
            ]
            ];

            private static $help = [
            [
                "judul" => "Lorem ipsum",
                "deskripsi" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.",
                "img" => "Assets/dummy_1.png"
            ],
            [
                "judul" => "Lorem ipsum",
                "deskripsi" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.",
                "img" => "Assets/dummy_2.jpg"
            ],
            [
                "judul" => "Lorem ipsum",
                "deskripsi" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.",
                "img" => "Assets/dummy_3.jpg"
            ],
            [
                "judul" => "Lorem ipsum",
                "deskripsi" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.",
                "img" => "Assets/dummy_4.png"
            ]
            ];
            private static $reviews_1 = [
        [
            "judul" => "Lorem ipsum",
            "deskripsi" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.",
            "img" => "Assets/dummy_1.png",
            "role" => "I",
            "link" => "Lorem_ipsum_I"
        ],
        [
            "judul" => "Lorem ipsum",
            "deskripsi" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.",
            "img" => "Assets/dummy_2.jpg",
            "role" => "II",
            "link" => "Lorem_ipsum_II"
        ],
        [
            "judul" => "Lorem ipsum",
            "deskripsi" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.",
            "img" => "Assets/dummy_3.jpg",
            "role" => "III",
            "link" => "Lorem_ipsum_III"
        ],
        [
            "judul" => "Lorem ipsum",
            "deskripsi" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.",
            "img" => "Assets/dummy_4.png",
            "role" => "IV",
            "link" => "Lorem_ipsum_IV"
        ]
        ];
        private static $reviews_2 = [
        [
                "judul" => "Lorem ipsum",
                "deskripsi" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.",
                "img" => "Assets/dummy_4.png",
                "role" => "IV",
                "link" => "Lorem_ipsum_IV"
        ],
        [
                "judul" => "Lorem ipsum",
                "deskripsi" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.",
                "img" => "Assets/dummy_3.jpg",
                "role" => "III",
                "link" => "Lorem_ipsum_III"
        ],
        [
                "judul" => "Lorem ipsum",
                "deskripsi" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.",
                "img" => "Assets/dummy_2.jpg",
                "role" => "II",
                "link" => "Lorem_ipsum_II"
        ],
        [
                "judul" => "Lorem ipsum",
                "deskripsi" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.",
                "img" => "Assets/dummy_1.png",
                "role" => "I",
                "link" => "Lorem_ipsum_I"
        ]
        ];

        private static $options = [
        [
                "judul" => "Lorem ipsum",
                "deskripsi" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.",
                "img" => "Assets/dummy_1.png",
                "note" => "Lorem ipsum"
        ],
        [
                "judul" => "Lorem ipsum",
                "deskripsi" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.",
                "img" => "Assets/dummy_2.jpg",
                "note" => ""
        ],
        [
                "judul" => "Lorem ipsum",
                "deskripsi" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.",
                "img" => "Assets/dummy_3.jpg",
                "note" => ""
        ]
        ];

        private static $articles = [
        [
            "judul" => "",
            "link" => ""
        ]
        ];

        public static function hired()
        {
            return self::$hireds;
        }
        public static function join()
        {
            return self::$joins;
        }
        public static function program()
        {
            return self::$programs;
        }
        public static function help()
        {
            return self::$help;
        }
        public static function review1()
        {
            return self::$reviews_1;
        }
        public static function review2()
        {
            return self::$reviews_2;
        }
        public static function article()
        {
            return self::$articles;
        }
        public static function option()
        {
            return self::$options;
        }
}
