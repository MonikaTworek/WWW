<?php

$GREETING_TMPL = <<<GRT
    <section id="{{ID}}">
        <div class="greeting col-10">
            <h1>{{CONTENT}}</h1>
        </div>
GRT;
$MAIN_MENU_TMPL = <<<EOT
 <div class="navbar">
            <label for="show-menu" class="show-menu">menu</label>
            <input type="checkbox" id="show-menu" role="button">
            <ul id="menu">
                <li>{{M1}}</li>
                <li>
                    {{M2}}
                    <ul class="hidden">
                        <li>{{M2.1}}</li>
                        <li>{{M2.2}}</li>
                        <li>{{M2.3}}</li>
                        <li>{{M2.4}}</li>

                    </ul>
                </li>
                <li>
                    {{M3}}
                    <ul class="hidden">
                        <li>{{M3.1}}</li>
                        <li>{{M3.2}}</li>
                        <li>{{M3.3}}</li>
                        <li>{{M3.4}}</li>
                        <li>{{M3.5}}</li>

                    </ul>
                </li>
                <li>
                    {{M4}}
                    <ul class="hidden">
                        <li>{{M4.1}}</li>
                        <li>{{M4.2}}</li>
                        <li>{{M4.3}}</li>
                    </ul>
                </li>
            </ul>
        </div>
EOT;

$MAIN_MENU_ITEMS = [
    "M1" => ["Strona głowna", "mainPage.php"],
    "M2" => ["Podróże", "podroze.php"],
    "M2.1" => ["Wiedeń", "podroze.php#wieden"],
    "M2.2" => ["Budapeszt", "podroze.php#budapeszt"],
    "M2.3" => ["Gran Canaria", "podroze.php#grancanaria"],
    "M2.4" => ["Włochy", "podroze.php#wlochy"],
    "M3" => ["Studia", "university.php"],
    "M3.1" => ["Semestr 1", "university.php#s1"],
    "M3.2" => ["Semestr 2", "university.php#s2"],
    "M3.3" => ["Semestr 3", "university.php#s3"],
    "M3.4" => ["Semestr 4", "university.php#s4"],
    "M3.5" => ["Semestr 5", "university.php#s5"],
    "M4" => ["Karate", "karate.php"],
    "M4.1" => ["Historia", "karate.php#historia"],
    "M4.2" => ["Osiągnięcia", "karate.php#osiagniecia"],
    "M4.3" => ["MUKS BYTOM", "karate.php#muksbytom"]

];

$MAIN_MENU_A = '<a href="{{H}}">{{T}}</a>';

class MyPage
{
    private $Title = "";
    private $Id = "";
    private $Content = "";

    public function __construct($Title = "", $id = "", $content = "")
    {
        $this->Title = $Title;
        $this->Id = $id;
        $this->Content = $content;
    }

    public function Begin()
    {
        global $GREETING_TMPL;

        $s = "<!DOCTYPE html>\n";
        $s .= "<html lang='pl'>\n";
        $s .= "<head>\n";
        $s .= "<meta charset='utf-8'>\n";
        $s .= "<title>" . $this->Title . "</title>\n";
        $s .= "<meta name='author' content='Monika Tworek'>\n";
        $s .= "<meta name='viewport' content = 'width=device-width, initial-scale=1.0'/>\n";
        $s .= "<link rel='stylesheet' href='css/styles.min.css'>\n";
        $s .= "<link href=\"https://fonts.googleapis.com/css?family=Lobster%7CMontserrat\" rel=\"stylesheet\">\n";
        $s .= "</head>\n";
        $current = basename($_SERVER['REQUEST_URI']);
        $path = (string)str_replace("php", "jpg", $current);
        $s .= "<script src='https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.4/latest.js?config=TeX-MML-AM_CHTML' async></script>";
        $s .= "<body style=\"background-image: url('$path ');\">\n";
        $s .= "<script type='text/x-mathjax-config'>MathJax.Hub.Config({tex2jax: {inlineMath: [['$','$']]}});</script>";
        $s .= $this->Generate_menu();
        $s .= (string)str_replace(["{{ID}}", "{{CONTENT}}"], [$this->Id, $this->Content], $GREETING_TMPL);
        return $s;
    }

    public function End()
    {
        $s = "</section>\n";
        $s .= "<script src='./load.js'></script>";
        $s = "</body>\n";
        $s .= "</html>";
        return $s;
    }

    public function Generate_menu()
    {
        global $MAIN_MENU_TMPL, $MAIN_MENU_ITEMS, $MAIN_MENU_A;
        $s = $MAIN_MENU_TMPL;
        foreach ($MAIN_MENU_ITEMS as $key => $array) {
            $mkey = "{{" . $key . "}}";
            $item = $MAIN_MENU_A;
            $item = (string)str_replace(["{{T}}", "{{H}}"], $array, $item);
            $s = (string)str_replace($mkey, $item, $s);
        }
        return $s;
    }
}

?>


