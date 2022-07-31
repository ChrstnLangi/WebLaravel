<?php

namespace Database\Seeders;

use App\Models\Help;
use App\Models\Join;
use App\Models\User;
use App\Models\About;
use App\Models\Aboutgambar;
use App\Models\Aboutjudul;
use App\Models\Hired;
use App\Models\Option;
use App\Models\Review;
use App\Models\Article;
use App\Models\Program;
use App\Models\Homepage;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        Hired::create([
            'name' => 'Dents.Talk',
            'img' => 'Assets/13_20220719_015826_0012.png'
        ]);
        Hired::create([
            'name' => 'PDGI',
            'img' => 'Assets/8_20220719_015826_0007.png'
        ]);

        Join::create([
            'judul' => 'Lorem ipsum',
            'desk' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.',
            'img' => ' '
        ]);
        Join::create([
            'judul' => 'Dolor sit',
            'desk' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.',
            'img' => ' '
        ]);
        Join::create([
            'judul' => 'Amet consectetur',
            'desk' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.',
            'img' => ' '
        ]);
        Join::create([
            'judul' => 'Adipisicing elit',
            'desk' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.',
            'img' => ' '
        ]);
        Join::create([
            'judul' => 'Quas minus',
            'desk' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.',
            'img' => ' '
        ]);

        Program::create([
            'judul' => 'DentsLearn Hands On',
            'desk' => 'Merupakan suatu program yang dapat meningkatkan skill keterampilan dokter gigi dalam melakukan tindakan praktik dengan pemberian materi serta praktik langsung yang dibimbing oleh pemateri yang memiliki kompetensi.',
            'img' => 'Assets/4_20220719_015826_0003.png',
            'link' => 'program_1',
            'mini_link' => 'mini_program_1'
        ]);
        Program::create([
            'judul' => 'DentsLearn Webinar',
            'desk' => 'Merupakan seminar mengenai topik kedokteran gigi yang mendatangkan pemateri berkompeten di bidangnya serta bekerja sama dengan PDGI maupun organisasi terkait.',
            'img' => 'Assets/5_20220719_015826_0004.png',
            'link' => 'program_2',
            'mini_link' => 'mini_program_2'
        ]);
        Program::create([
            'judul' => 'DentsPractice',
            'desk' => 'Merupakan suatu program yang menyediakan fasilitas bagi mahasiswa kedokteran gigi untuk dapat melakukan skill lab di rumah masing-masing yang dikemas dalam materi yang mudah dipahami.',
            'img' => 'Assets/6_20220719_015826_0005.png',
            'link' => 'program_3',
            'mini_link' => 'mini_program_3'
        ]);

        Help::create([
            'judul' => 'Lorem ipsum',
            'desk' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.',
            'img' => 'Assets/dummy_1.png'
        ]);
        Help::create([
            'judul' => 'Lorem ipsum',
            'desk' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.',
            'img' => 'Assets/dummy_2.png'
        ]);
        Help::create([
            'judul' => 'Lorem ipsum',
            'desk' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.',
            'img' => 'Assets/dummy_3.png'
        ]);

        Review::create([
            'judul' => 'Lorem ipsum',
            'desk' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.',
            'img' => 'Assets/dummy_1.png',
            'role' => 'I',
            'link' => 'Lorem_ipsum_I'
        ]);
        Review::create([
            'judul' => 'Lorem ipsum',
            'desk' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.',
            'img' => 'Assets/dummy_2.png',
            'role' => 'II',
            'link' => 'Lorem_ipsum_II'
        ]);
        Review::create([
            'judul' => 'Lorem ipsum',
            'desk' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.',
            'img' => 'Assets/dummy_3.png',
            'role' => 'III',
            'link' => 'Lorem_ipsum_III'
        ]);
        Review::create([
            'judul' => 'Lorem ipsum',
            'desk' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.',
            'img' => 'Assets/dummy_4.png',
            'role' => 'IV',
            'link' => 'Lorem_ipsum_IV'
        ]);
        Review::create([
            'judul' => 'Lorem ipsum',
            'desk' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.',
            'img' => 'Assets/dummy_4.png',
            'role' => 'IV',
            'link' => 'Lorem_ipsum_IV'
        ]);
        Review::create([
            'judul' => 'Lorem ipsum',
            'desk' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.',
            'img' => 'Assets/dummy_3.png',
            'role' => 'III',
            'link' => 'Lorem_ipsum_III'
        ]);
        Review::create([
            'judul' => 'Lorem ipsum',
            'desk' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.',
            'img' => 'Assets/dummy_2.png',
            'role' => 'II',
            'link' => 'Lorem_ipsum_II'
        ]);
        Review::create([
            'judul' => 'Lorem ipsum',
            'desk' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.',
            'img' => 'Assets/dummy_1.png',
            'role' => 'I',
            'link' => 'Lorem_ipsum_I'
        ]);

        Option::create([
            'judul' => 'Lorem ipsum',
            'desk' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.',
            'img' => 'Assets/dummy_1.png',
            'note' => ' '
        ]);
        Option::create([
            'judul' => 'Lorem ipsum',
            'desk' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.',
            'img' => 'Assets/dummy_2.png',
            'note' => ' '
        ]);
        Option::create([
            'judul' => 'Lorem ipsum',
            'desk' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.',
            'img' => 'Assets/dummy_3.png',
            'note' => ' '
        ]);

        Article::create([
            'judul'=> ' ',
            'desk'=> ' ',
            'img1'=> ' ',
            'img2'=> ' '
        ]);

        Homepage::create([
            'judul_hitam' => 'Boots Your Knowledge',
            'judul_putih' => 'In Dentistry',
            'desk' => 'Belajar langsung dari spesialis-spesialis terkemuka di bidangnya bersama DENTS.TALK Indonesia. Jelajahi bidang spesialisis yang manarik perhatian kamu. Hadir untuk mahasiswa dan dokter gigi di seluruh Indonesia',
            'button' => 'Explore Our Programs'
        ]);

        About::create([
            'nama' => 'Internship Program',
            'slug' => 'internship-program'
        ]);
        About::create([
            'nama' => 'Company Profile',
            'slug' => 'company-profile'
        ]);

        Aboutjudul::create([
            'about_id' => 1,
            'judul' => 'Kembangkan Minat dan Kreativitas Kamu bersama DENTS.TALK Internship Program “DentsArmy”!'
        ]);
        Aboutjudul::create([
            'about_id' => 1,
            'judul' => 'Salurkan Ketertarikanmu'
        ]);
        Aboutjudul::create([
            'about_id' => 1,
            'judul' => 'Dengar Apa Yang Mereka Katakan Saat Menjadi DentsArmy'
        ]);
        Aboutjudul::create([
            'about_id' => 1,
            'judul' => 'Magang Dimanapun Kamu Berada Secara Online!'
        ]);
        Aboutjudul::create([
            'about_id' => 1,
            'judul' => 'Explore Yourself at DENTS.TALK!'
        ]);
        Aboutjudul::create([
            'about_id' => 1,
            'judul' => 'Apa Saja Dapartemen YangDapat Kamu Pilih'
        ]);

        Aboutgambar::create([
            'judul_id' => 1,
            'background' => 1,
            'img' => '/Assets/20220728_193418_0000.png'
        ]);
        Aboutgambar::create([
            'judul_id' => 3,
            'background' => 1,
            'img' => '/Assets/20220728_193418_0001.png'
        ]);
        Aboutgambar::create([
            'judul_id' => 3,
            'background' => 0,
            'review_id' => 1,
            'img' => '/Assets/dummy_1.png'
        ]);
        Aboutgambar::create([
            'judul_id' => 3,
            'background' => 0,
            'review_id' => 2,
            'img' => '/Assets/dummy_2.png'
        ]);
        Aboutgambar::create([
            'judul_id' => 3,
            'background' => 0,
            'review_id' => 3,
            'img' => '/Assets/dummy_3.png'
        ]);
        Aboutgambar::create([
            'judul_id' => 4,
            'background' => 0,
            'img' => '/Assets/20220728_193418_0000.png'
        ]);
        Aboutgambar::create([
            'judul_id' => 5,
            'background' => 0,
            'img' => '/Assets/dummy_1.png'
        ]);
        Aboutgambar::create([
            'judul_id' => 5,
            'background' => 0,
            'img' => '/Assets/dummy_2.png'
        ]);
        Aboutgambar::create([
            'judul_id' => 5,
            'background' => 0,
            'img' => '/Assets/dummy_3.png'
        ]);
        Aboutgambar::create([
            'judul_id' => 5,
            'background' => 0,
            'img' => '/Assets/dummy_4.png'
        ]);
        Aboutgambar::create([
            'judul_id' => 5,
            'background' => 0,
            'img' => '/Assets/dummy_4.png'
        ]);
        Aboutgambar::create([
            'judul_id' => 5,
            'background' => 0,
            'img' => '/Assets/dummy_3.png'
        ]);
        Aboutgambar::create([
            'judul_id' => 5,
            'background' => 0,
            'img' => '/Assets/dummy_2.png'
        ]);
        Aboutgambar::create([
            'judul_id' => 5,
            'background' => 0,
            'img' => '/Assets/dummy_1.png'
        ]);
        Aboutgambar::create([
            'judul_id' => 6,
            'background' => 1,
            'img' => '/Assets/20220728_193418_0002.png'
        ]);
        Aboutgambar::create([
            'judul_id' => 6,
            'background' => 0,
            'img' => '/Assets/dummy_1.png'
        ]);
        Aboutgambar::create([
            'judul_id' => 6,
            'background' => 0,
            'img' => '/Assets/dummy_2.png'
        ]);
        Aboutgambar::create([
            'judul_id' => 6,
            'background' => 0,
            'img' => '/Assets/dummy_3.png'
        ]);
        Aboutgambar::create([
            'judul_id' => 6,
            'background' => 0,
            'img' => '/Assets/dummy_4.png'
        ]);
    }
}
