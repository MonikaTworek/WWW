<?php
require_once(__DIR__ . "/main.php");
$lol = new MyPage("Karate", "karate", "Karate");
echo $lol->Begin();
?>

    <section id="historia">
        <div class="section-title">
            <h1>Historia</h1>
        </div>
        <div class="scol-6-6">
            <div class="titled-box">
                <label for="show-modal1" class="titled-box-name">Jak to się zaczęło</label>
                <input type="checkbox" id="show-modal1" role="button">
                <div class="titled-box-content">
                    <p>Sztuka walki wywodząca się z małej japońskiej wysepki - Okinawy. Przez zabranie wszelkiej broni
                        (nawet noży do krojenia mięsa), wykształcił się sposób samoobrony przy użyciu tylko i wyłącznie
                        ciała człowieka. Wraz z zakończeniem drugiej wojny światowej i powszechnej edukacji została rozpowszechniona
                        najpierw na całą Japonię, a później na cały świat. Obecnie ma swoich zwolenników niemal w każdym kraju.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="osiagniecia">
        <div class="section-title">
            <h1>Osiągnięcia</h1>
        </div>
        <div class="scol-6-6">
            <div class="display-1-2">
                <div class="titled-box">
                    <label for="show-modal1" class="titled-box-name">Najważniejsze tytuły</label>
                    <input type="checkbox" id="show-modal4" role="button">
                    <div class="titled-box-content">
                        <p><ul>
                            <li>Zdany egzamin na 1 Dan.</li>
                            <li>Mistrzostwa Polski - srebrna medalistka</li>
                            <li>Puchar Polski Dzieci - srebrna i brązowa medalistka</li>
                            <li>Mistrzostwa Młodzików - brązowa i srebrna medalistka</li>
                            <li>Mistrzostwa Województwa Śląskiego - złota, srebrna i brązowa medalistka</li>
                            <li>Gasshuku - brązowa medalistka</li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>
            <div class="display-1-2">
                <div class="titled-box">
                    <label for="show-modal1" class="titled-box-name">Najważniejsze tytuły</label>
                    <input type="checkbox" id="show-modal5" role="button">
                    <div class="titled-box-content">
                        <p>
                        <ul>
                            <li>Puchar Europy - srebrna medalistka</li>
                            <li>Mistrzostwa Bytomia - wielokrotnie złota medalistka</li>
                            <li>Śląska Liga Karate - wielokrotna złota medalistka</li>
                            <li>Otwarte Mistrzostwa Czech - złota, srebrna i brązowa medalistka</li>
                            <li>Silesia Cup - złota, srebrna i brązowa medalistka</li>
                            <li>Valachia Cup - złota, srebrna i brązowa medalistka</li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="muksbytom">
        <div class="section-title">
            <h1>MUKS IPPON BYTOM</h1>
        </div>
        <div class="scol-6-6">
            <div class="titled-box">
                <label for="show-modal1" class="titled-box-name">Krótki opis</label>
                <input type="checkbox" id="show-modal1" role="button">
                <div class="titled-box-content">
                    <p>Klub w Bytomiu, gdzie stawiałam pierwsze kroki na macie. Trener Janusz Sowa ma obecnie 6 dan
                        i wielu medalistów Mistrzostw Polski, Europy i Świata. Poza umiejętnościami fizycznymi przekazuje
                        również zasady budo. Oss!
                        Więcej informacji pod: <br/>
                        <a href="http://www.karatebytom.pl">karatebytom.pl</a>
                    </p>
                </div>
            </div>
        </div>
        </div>
    </section>
    </section>

<?php
echo $lol->End();
?>