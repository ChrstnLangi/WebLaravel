<?php

namespace Database\Seeders\new_project\database\seeders;

use App\Models\Web;
use App\Models\Help;
use App\Models\Join;
use App\Models\Page;
use App\Models\Text;
use App\Models\User;
use App\Models\About;
use App\Models\Hired;
use App\Models\Gambar;
use App\Models\Option;
use App\Models\Review;
use App\Models\Article;
use App\Models\Program;
use App\Models\Category;
use App\Models\Homepage;
use App\Models\Aboutdesk;
use App\Models\Aboutjudul;
use App\Models\Aboutgambar;
use App\Models\Aboutreview;
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
            'judul' => 'Apa Saja Dapartemen Yang Dapat Kamu Pilih'
        ]);

        Aboutgambar::create([
            'aboutjudul_id' => 1,
            'background' => 1,
            'img' => '/Assets/20220728_193418_0000.png'
        ]);
        Aboutgambar::create([
            'aboutjudul_id' => 3,
            'background' => 1,
            'img' => '/Assets/20220728_193418_0001.png'
        ]);
        Aboutgambar::create([
            'aboutjudul_id' => 3,
            'background' => 0,
            'aboutreview_id' => 1,
            'img' => '/Assets/dummy_1.png'
        ]);
        Aboutgambar::create([
            'aboutjudul_id' => 3,
            'background' => 0,
            'aboutreview_id' => 2,
            'img' => '/Assets/dummy_2.png'
        ]);
        Aboutgambar::create([
            'aboutjudul_id' => 3,
            'background' => 0,
            'aboutreview_id' => 3,
            'img' => '/Assets/dummy_3.png'
        ]);
        Aboutgambar::create([
            'aboutjudul_id' => 4,
            'background' => 0,
            'img' => '/Assets/20220728_193418_0000.png'
        ]);
        Aboutgambar::create([
            'aboutjudul_id' => 5,
            'background' => 0,
            'img' => '/Assets/dummy_1.png'
        ]);
        Aboutgambar::create([
            'aboutjudul_id' => 5,
            'background' => 0,
            'img' => '/Assets/dummy_2.png'
        ]);
        Aboutgambar::create([
            'aboutjudul_id' => 5,
            'background' => 0,
            'img' => '/Assets/dummy_3.png'
        ]);
        Aboutgambar::create([
            'aboutjudul_id' => 5,
            'background' => 0,
            'img' => '/Assets/dummy_4.png'
        ]);
        Aboutgambar::create([
            'aboutjudul_id' => 5,
            'background' => 0,
            'img' => '/Assets/dummy_4.png'
        ]);
        Aboutgambar::create([
            'aboutjudul_id' => 5,
            'background' => 0,
            'img' => '/Assets/dummy_3.png'
        ]);
        Aboutgambar::create([
            'aboutjudul_id' => 5,
            'background' => 0,
            'img' => '/Assets/dummy_2.png'
        ]);
        Aboutgambar::create([
            'aboutjudul_id' => 5,
            'background' => 0,
            'img' => '/Assets/dummy_1.png'
        ]);
        Aboutgambar::create([
            'aboutjudul_id' => 6,
            'background' => 1,
            'img' => '/Assets/20220728_193418_0002.png'
        ]);
        Aboutgambar::create([
            'aboutjudul_id' => 6,
            'background' => 0,
            'img' => '/Assets/dummy_1.png'
        ]);
        Aboutgambar::create([
            'aboutjudul_id' => 6,
            'background' => 0,
            'img' => '/Assets/dummy_2.png'
        ]);
        Aboutgambar::create([
            'aboutjudul_id' => 6,
            'background' => 0,
            'img' => '/Assets/dummy_3.png'
        ]);
        Aboutgambar::create([
            'aboutjudul_id' => 6,
            'background' => 0,
            'img' => '/Assets/dummy_4.png'
        ]);

        Aboutdesk::create([
            'aboutjudul_id' => 1,
            'text' => "Gabung Sekarang!",
        ]);
        Aboutdesk::create([
            'aboutjudul_id' => 2,
            'text' => "Halo teman-teman mahasiswa kedokteran gigi maupun non kedokteran gigi yang ingin mengembangkan minat dan kreativitas kalian, yuk bergabung bersama DENTS.TALK melalui program internship kami yaitu “DentsArmy”. Disini kamu bisa memilih departemen yang sesuai dengan keminatan kamu loh! Yuk disimak departemen apa saja yang bisa kamu pilih.",
        ]);
        Aboutdesk::create([
            'aboutjudul_id' => 6,
            'text' => "Lorem ipsum",
        ]);
        Aboutdesk::create([
            'aboutjudul_id' => 6,
            'text' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe totam commodi velit dolore deserunt neque, asperiores culpa, excepturi exercitationem accusamus eveniet dolorum? Praesentium iusto natus quis dolore illum quas laborum.",
        ]);

        Aboutreview::create([
            'text' => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam laboriosam vero at reiciendis labore cupiditate quos beatae voluptatem, quae, fugit autem sit eveniet, et placeat a unde obcaecati ipsum ex.",
            'nama' => "Lorem ipsum",
            'role' => "dolor sit"
        ]);
        Aboutreview::create([
            'text' => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam laboriosam vero at reiciendis labore cupiditate quos beatae voluptatem, quae, fugit autem sit eveniet, et placeat a unde obcaecati ipsum ex.",
            'nama' => "Dolor sit",
            'role' => "Lorem ipsum"
        ]);
        Aboutreview::create([
            'text' => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam laboriosam vero at reiciendis labore cupiditate quos beatae voluptatem, quae, fugit autem sit eveniet, et placeat a unde obcaecati ipsum ex.",
            'nama' => "Dolor sit",
            'role' => "Lorem ipsum"
        ]);

        Web::create([
            'judul'=>"Home"
        ]);
        Web::create([
            'judul'=>"Program"
        ]);
        Web::create([
            'judul'=>"Article"
        ]);
        Web::create([
            'judul'=>"About"
        ]);

        Page::create([
            'judul'=>'DentsLearn HandsOn',
            'slug'=>'dentslearn-handson',
            'web_id'=>2
        ]);
        Page::create([
            'judul'=>'DentsLearn Webinar',
            'slug'=>'dentslearn-webinar',
            'web_id'=>2
        ]);
        Page::create([
            'judul'=>'DentsPractice',
            'slug'=>'dentspractice',
            'web_id'=>2
        ]);

        Page::create([
            'judul'=>'Internship Program',
            'slug'=>'internship-program',
            'web_id'=>4
        ]);
        Page::create([
            'judul'=>'Company Profile',
            'slug'=>'company-profile',
            'web_id'=>4
        ]);

        Text::create([
            'text'=>'DentsLearn:',
            'page_id'=>1
        ]);
        Text::create([
            'text'=>'Hands On',
            'page_id'=>1
        ]);
        Text::create([
            'text'=>'Dapatkan ilmu-ilmu baru seputar kedokteran gigi dan kembangkan skill kedokteran gigimu di DentsLearn: Hands On! <br>Hands On juga sudah terverifikasi PDGI! Jadi, kamu akan dapat poin SKP juga.',
            'page_id'=>1
        ]);
        Text::create([
            'text'=>'Lihat Hands On Bulan Ini!',
            'page_id'=>1
        ]);
        Text::create([
            'text'=>'Webinar Bulan Ini',
            'page_id'=>1
        ]);
        Text::create([
            'text'=>'DentsLearn: HandsOn 17<br>Operculectomy Using Conventional Technic',
            'page_id'=>1
        ]);
        Text::create([
            'text'=>'DentsLearn: Hands On Sebelumnya',
            'page_id'=>1
        ]);
        Text::create([
            'text'=>'DentsLearn: HandsOn 13<br>Simple Dental Wire',
            'page_id'=>1
        ]);

        Gambar::create([
            'img'=>'/Assets/20220728_193425_0000.png',
            'background'=>1,
            'page_id'=>1
        ]);
        Gambar::create([
            'img'=>'/Assets/program_1.jpg',
            'background'=>0,
            'page_id'=>1
        ]);
        Gambar::create([
            'img'=>'/Assets/20220728_193433_0001.png',
            'background'=>1,
            'page_id'=>1
        ]);
        Gambar::create([
            'img'=>'/Assets/program_2.png',
            'background'=>0,
            'page_id'=>1
        ]);

        Text::create([
            'text'=>'DentsLearn:',
            'page_id'=>2
        ]);
        Text::create([
            'text'=>'Webinar',
            'page_id'=>2
        ]);
        Text::create([
            'text'=>'Ketahui sudut pandang dari narasumber yang berkompeten dalam menunjang karir dan pendidikan di kedokteran gigi.<br>Webinar juga sudah terverifikasi PDGI! Jadi, kamu akan dapat poin SKP juga.',
            'page_id'=>2
        ]);
        Text::create([
            'text'=>'Webinar Bulan Ini',
            'page_id'=>2
        ]);
        Text::create([
            'text'=>'Lihat Hands On Bulan Ini!',
            'page_id'=>2
        ]);
        Text::create([
            'text'=>'DentsLearn: Webinar 17<br>Operculectomy: When We Need That Procedure?',
            'page_id'=>2
        ]);
        Text::create([
            'text'=>'DentsLearn: Webinar Sebelumnya',
            'page_id'=>2
        ]);
        Text::create([
            'text'=>'DentsLearn: Webinar 13<br>Penatalaksanaan Trauma Dentoalveolar pada prakter sehari hari',
            'page_id'=>2
        ]);

        Gambar::create([
            'img'=>'/Assets/20220728_194108_0000.png',
            'background'=>1,
            'page_id'=>2
        ]);
        Gambar::create([
            'img'=>'/Assets/program_1.jpg',
            'background'=>0,
            'page_id'=>2
        ]);
        Gambar::create([
            'img'=>'/Assets/20220728_193433_0001.png',
            'background'=>1,
            'page_id'=>2
        ]);
        Gambar::create([
            'img'=>'/Assets/program_2.png',
            'background'=>0,
            'page_id'=>2
        ]);

        Text::create([
            'text'=>'DentsPractice',
            'page_id'=>3
        ]);
        Text::create([
            'text'=>'COMING SOON!',
            'page_id'=>3
        ]);

        Gambar::create([
            'img'=>'/Assets/20220728_193407_0000.png',
            'background'=>1,
            'page_id'=>3
        ]);

        User::create([
            'nama'=>'Admin',
            'umur'=>'0',
            'NPA'=>'-',
            'nohp'=>'-',
            'email'=>'Admin@gmail.com',
            'role'=>'Admin',
            'password'=>bcrypt('12345')
        ]);

        Article::create([
            'title' => 'First Article that has the first position cause its a first article',
            'category_id' => 1,
            'image' => '20220728_193418_0000.png',
            'author' => 'Wisnu',
            'date' => 'September 2022',
            'slug' => 'first-article',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis voluptatem repellat vitae expedita ipsam vel veritatis sapiente odit quis unde cumque temporibus, dolor blanditiis corrupti dolorem ad aperiam id iure hic esse accusamus optio reprehenderit. Ipsam dicta eaque aspernatur eos fuga nihil, quam officia deserunt, animi sequi, ad vel ea!'
        ]);

        Article::create([
            "title" => "Second Article that has the second position cause its a second article",
            'category_id' => 2,
            "image" => "20220728_193418_0000.png",
            "author" => "Still Wisnu",
            "date" => "August 2022",
            "slug" => "second-article",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta nihil corrupti officiis perferendis repellendus ea dolores. Excepturi numquam aperiam similique ad quis deleniti vel autem ratione accusantium, inventore architecto ab."
        ]);

        Article::create([
            "title" => "Third Article that has the third position cause its a third article",
            'category_id' => 3,
            "image" => "20220728_193418_0000.png",
            "author" => "Wisnu Again",
            "date" => "October 2022",
            "slug" => "third-article",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi neque fugit molestiae sunt quibusdam odio dolor at vel qui eos suscipit architecto, consectetur distinctio! Esse mollitia minus dolor dolores, sint doloremque necessitatibus maiores vero fugit. Obcaecati laudantium sit alias magni expedita sed quidem a aut at, temporibus adipisci velit magnam architecto illum laborum neque ducimus, odit maiores accusamus recusandae harum?"
        ]);

        Category::create([
            'name' => 'Pengetahuan Umum',
            'slug' => 'pengetahuan-umum',
        ]);

        Category::create([
            'name' => 'Design',
            'slug' => 'design',
        ]);

        Category::create([
            'name' => 'Gigi',
            'slug' => 'gigi',
        ]);
    }
}
