<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class News extends Controller
{
    private $data;
    public function __construct()
    {
        $this->data = array();
        $this->set_news();
    }
    
    public function index()
    {
        return view('news.index')->with('news', $this->data);
    }

    public function show($id) {
        return view('news.show')->with('news', $this->get_data($id));
    }

    public function get_data($id = 0)
    {
        return $this->data[$id];
    }

    private function set_news()
    {
        $this->data = array(
            (object) array(
                'img' => 'img/1.jpg',
                'title' => 'Basicamente o primeiro post',
                'excerpt' => 'Basicamente o conteúdo da Notícia...',
                'content' => '<p>Basicamente o conteúdo da Notícia, basicamente é somente isso e basicamente vamos para a próxima notícia!</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita ab maxime magni in deleniti, ea cum hic atque ullam voluptates cumque quia enim consectetur facere autem, mollitia, tempore labore accusantium!</p><p>Laboriosam eaque fuga tempora illo sapiente aut doloremque facilis culpa sit quasi nemo deleniti sed, aliquam, voluptatibus voluptatum harum nam molestiae repudiandae suscipit, consequuntur eum voluptate cum. Unde, asperiores dolores.</p><p>Ipsa fugit officia eius deserunt natus dicta ratione voluptate praesentium quaerat est? Veniam, magnam, vel? Enim suscipit hic atque vitae exercitationem illo, natus autem, similique sint fugit porro impedit fuga!</p>',
                'created' => date('Y-m-d h:i:s')
            ),(object) array(
                'img' => 'img/2.jpg',
                'title' => 'Basicamente o segundo post',
                'excerpt' => 'Basicamente o conteúdo da Notícia...',
                'content' => '<p>Basicamente o conteúdo da Notícia, basicamente é somente isso e basicamente vamos para a próxima notícia!</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita ab maxime magni in deleniti, ea cum hic atque ullam voluptates cumque quia enim consectetur facere autem, mollitia, tempore labore accusantium!</p><p>Laboriosam eaque fuga tempora illo sapiente aut doloremque facilis culpa sit quasi nemo deleniti sed, aliquam, voluptatibus voluptatum harum nam molestiae repudiandae suscipit, consequuntur eum voluptate cum. Unde, asperiores dolores.</p><p>Ipsa fugit officia eius deserunt natus dicta ratione voluptate praesentium quaerat est? Veniam, magnam, vel? Enim suscipit hic atque vitae exercitationem illo, natus autem, similique sint fugit porro impedit fuga!</p>',
                'created' => date('Y-m-d h:i:s')
            ),(object) array(
                'img' => 'img/3.jpg',
                'title' => 'Basicamente o terceiro post',
                'excerpt' => 'Basicamente o conteúdo da Notícia...',
                'content' => '<p>Basicamente o conteúdo da Notícia, basicamente é somente isso e basicamente vamos para a próxima notícia!</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita ab maxime magni in deleniti, ea cum hic atque ullam voluptates cumque quia enim consectetur facere autem, mollitia, tempore labore accusantium!</p><p>Laboriosam eaque fuga tempora illo sapiente aut doloremque facilis culpa sit quasi nemo deleniti sed, aliquam, voluptatibus voluptatum harum nam molestiae repudiandae suscipit, consequuntur eum voluptate cum. Unde, asperiores dolores.</p><p>Ipsa fugit officia eius deserunt natus dicta ratione voluptate praesentium quaerat est? Veniam, magnam, vel? Enim suscipit hic atque vitae exercitationem illo, natus autem, similique sint fugit porro impedit fuga!</p>',
                'created' => date('Y-m-d h:i:s')
            ),(object) array(
                'img' => 'img/4.jpg',
                'title' => 'Basicamente o quarto post',
                'excerpt' => 'Basicamente o conteúdo da Notícia...',
                'content' => '<p>Basicamente o conteúdo da Notícia, basicamente é somente isso e basicamente vamos para a próxima notícia!</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita ab maxime magni in deleniti, ea cum hic atque ullam voluptates cumque quia enim consectetur facere autem, mollitia, tempore labore accusantium!</p><p>Laboriosam eaque fuga tempora illo sapiente aut doloremque facilis culpa sit quasi nemo deleniti sed, aliquam, voluptatibus voluptatum harum nam molestiae repudiandae suscipit, consequuntur eum voluptate cum. Unde, asperiores dolores.</p><p>Ipsa fugit officia eius deserunt natus dicta ratione voluptate praesentium quaerat est? Veniam, magnam, vel? Enim suscipit hic atque vitae exercitationem illo, natus autem, similique sint fugit porro impedit fuga!</p>',
                'created' => date('Y-m-d h:i:s')
            ),(object) array(
                'img' => 'img/5.jpg',
                'title' => 'Basicamente estou muito feliz com o curso!',
                'excerpt' => 'Parabéns ao Wesley, que é um excelente professor!',
                'content' => '<p>Basicamente estou muito feliz, e estou aprendendo muito com esse cara tão sensacional!</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita ab maxime magni in deleniti, ea cum hic atque ullam voluptates cumque quia enim consectetur facere autem, mollitia, tempore labore accusantium!</p><p>Laboriosam eaque fuga tempora illo sapiente aut doloremque facilis culpa sit quasi nemo deleniti sed, aliquam, voluptatibus voluptatum harum nam molestiae repudiandae suscipit, consequuntur eum voluptate cum. Unde, asperiores dolores.</p><p>Ipsa fugit officia eius deserunt natus dicta ratione voluptate praesentium quaerat est? Veniam, magnam, vel? Enim suscipit hic atque vitae exercitationem illo, natus autem, similique sint fugit porro impedit fuga!</p>',
                'created' => date('Y-m-d h:i:s')
            )
        );
    }
}
