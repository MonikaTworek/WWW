<?php
require_once(__DIR__ . "/main.php");
$lol = new MyPage("Studia", "studia", "Studia");
echo $lol->Begin();
require_once(__DIR__."/databases.php");
$date=new databases();
$r1=$date->read(1);
$r2=$date->read(2);
$r3=$date->read(3);
$r4=$date->read(4);
$r5=$date->read(5);
$r6=$date->read(6);
?>

        <section id="s1">
            <div class="section-title">
                    <h1>Semestr I</h1>
            </div>
            <div class="scol-6-6">
                <div class="display-1-2">
                    <div class="titled-box">
                        <label for="show-modal0" class="titled-box-name">Opis</label>
                        <input type="checkbox" id="show-modal0" role="button">
                        <div class="titled-box-content">
                            <p>Krótki wstęp do studiowania informatyki: Logika i struktury formalne z dr Szymonem Żeberskim, Analiza 1 z dr Rafałem Kapelko,
                                Algebra z geometrią analityczną z prof. Jackiem Cichoniem oraz Wstęp do informatyki i programowania z dr Przemysławem Kobylańskim.
                                Wtedy jeszcze nie wiedziałam, co mnie czeka...
                            </p>
                        </div>
                    </div>
                </div>
                <div class="display-1-2">
                    <div class="titled-box">
                        <label for="show-modal1" class="titled-box-name">Wyniesione ciekawostki</label>
                        <input type="checkbox" id="show-modal1" role="button">
                        <div class="titled-box-content">
                            <p> Wykłady na 7.30, to zbrodnia. <br/>
                                Rozeznawanie informatyka, czy matematyka, to nie na pierwszym semestrze. <br/>
                                Czuję się jakbym była na koloniach. <br/>
                                To są nowoczesne studia, więc piszemy w c99. <br/>
                                Średnia to 5,12
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="scol-6-6">
                <div class="titled-box">
                    <label for="show-modal0" class="titled-box-name">Wzory</label>
                    <input type="checkbox" id="show-modal1" role="button">
                    <div class="titled-box-content">
                        <p>Analiza 1
                            $$ \int_{a}^{b} f(g(t)) g'(t) dt = \int_{g(b)}^{g(a)} f(x) dx$$

                            Algebra z Geometrią Analityczną
                            $$ dim( \mathbf{V} ) = dim(ker( \mathbf{F} )) + dim(rng( \mathbf{F} ))$$

                            Logika i Struktury Formalne
                            $$ \forall _{X \subseteq \mathbf{R}} (|X| \leq \aleph v |X| = \mathfrak{c}$$
                        </p>
                    </div>
                </div>
            </div>
            <div class="scol-6-6">
                <div class="titled-box">
                    <label for="show-modal0" class="titled-box-name">Komentarze</label>
                    <input type="checkbox" id="show-modal1" role="button">
                    <div class="titled-box-content">
                        <p>
                            <?php
                                foreach ($r1 as $comment)
                                {
                                    echo $comment["text"] . "<br>\n";
                                }
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="s2">
            <div class="section-title">
            <h1>Semestr II</h1>
            </div>
            <div class="scol-6-6">
                <div class="display-1-2">
                    <div class="titled-box">
                        <label for="show-modal2" class="titled-box-name">Opis</label>
                        <input type="checkbox" id="show-modal2" role="button">
                        <div class="titled-box-content">
                            <p> Dalej pilnię się uczę. W sumie ma się uczucie daje vu, bo wszystko ma swój odpowiednik:
                                Analiza 2 zamiast Analizy 1, Matematyka Dyskretna zamiast Logiki, Kurs programowania zamiast
                                Wstępu, Algebra abstrakcyjna zamiast Algebry liniowej... Z ciekawszych rzeczy to zabawa pikselami w Javie
                            </p>
                        </div>
                    </div>
                </div>
                <div class="display-1-2">
                    <div class="titled-box">
                        <label for="show-modal3" class="titled-box-name">Wyniesione ciekawostki</label>
                        <input type="checkbox" id="show-modal3" role="button">
                        <div class="titled-box-content">
                            <p>Serowiec to budynek stworzony, by gnębić studentów. <br/>
                                Każda algebra powinna być abstrakcyjna. <br/>
                                "A teraz wyobraźmy sobie n-wymiarową przestrzeń.." <br/>
                                Jesteśmy bardziej nowocześni - Java z szalonymi pikselami. <br/>
                                Średnia to 5,18
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="scol-6-6">
                <div class="titled-box">
                    <label for="show-modal0" class="titled-box-name">Wzory</label>
                    <input type="checkbox" id="show-modal1" role="button">
                    <div class="titled-box-content">
                        <p>Analiza 2
                            $$ z-z_{0} = (x-x_{0}) \frac{\partial f}{ \partial x}(x_{0}, y_{0}) + (y-y_{0}) \frac{\partial f}{\partial y}(x_{0}, y_{0}) $$

                            Matematyka Dyskretna
                            $$x^{n} = \sum_{k=0}^{ \infty} \{ ^n _{k} \} x^{\underline{k}}$$

                            Algebra Abstrakcyjna i kodowanie
                            $$ \forall_{ x,y \in \overline{X} ^n} d_{n} (x,y) = | \{ k \in \{ 1, ... , n \} : x_{k} \neq y_{k} \} |$$
                        </p>
                    </div>
                </div>
            </div>
            <div class="scol-6-6">
                <div class="titled-box">
                    <label for="show-modal0" class="titled-box-name">Komentarze</label>
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


        <section id="s3">            
            <div class="section-title">
            <h1>Semestr III</h1>
            </div>
            <div class="scol-6-6">
                <div class="display-1-2">
                    <div class="titled-box">
                        <label for="show-modal4" class="titled-box-name">Opis</label>
                        <input type="checkbox" id="show-modal4" role="button">
                        <div class="titled-box-content">
                            <p>Zaczyna się zabawa: Zaczynamy wyglądać jak informatycy- poznajemy Technologie Programowania z wzorcami projektowymi,
                                Bazy Danych przestają mieć przed nami sekret, a na Architekturze Systemów poznajemy świat
                                wewnątrz komputera. Nie zabrakło matematyki -  Metody probabilistyczne i statystyka.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="display-1-2">
                    <div class="titled-box">
                        <label for="show-modal5" class="titled-box-name">Wyniesione ciekawostki</label>
                        <input type="checkbox" id="show-modal5" role="button">
                        <div class="titled-box-content">
                            <p>Jesteśmy szaleni - Java, SQL, Assembler i C. <br/>
                                Wzorzec decorator wcale nie musi pojawić się na teście. <br/>
                                Wzorzec pyłek nie jest tak zabawny jak jego nazwa. <br/>
                                Assemblery są różne. <br/>
                                Drewienko w okienku w C-7 to praca inżynierska. <br/>
                                Średnia to 4,7
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="scol-6-6">
                <div class="titled-box">
                    <label for="show-modal0" class="titled-box-name">Wzory</label>
                    <input type="checkbox" id="show-modal1" role="button">
                    <div class="titled-box-content">
                        <p>Metody probabilistyczne i statystyczne
                            $$ S_{n} = \sum_{ i=0}^{ \infty} \frac{i}{2^n} P[ \frac{i}{2^{n}} \leq x \leq \frac{i+1}{2^n}]$$
                        </p>
                    </div>
                </div>
            </div>
            <div class="scol-6-6">
                <div class="titled-box">
                    <label for="show-modal0" class="titled-box-name">Komentarze</label>
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


        <section id="s4">
            <div class="section-title">
            <h1>Semestr IV</h1>
            </div>
            <div class="scol-6-6">
                <div class="display-1-2">
                    <div class="titled-box">
                        <label for="show-modal6" class="titled-box-name">Opis</label>
                        <input type="checkbox" id="show-modal6" role="button">
                        <div class="titled-box-content">
                            <p>Jeszcze trochę i może będę wiedzieć, czy to jest to. W kńcu
                                poznajemy teraz algorytmy i struktury danych, czy technologie sieciowe. Chociaż
                                w tych ostatnich chyba bardziej liczą się sprawozdania... Na szczęście zawsze jest matematyczny akcent jak
                                Wprowadzenie do Teorii Grafów. Za to dzięki paradygmatom potrafimy teraz pisać w języku, którego nie znamy.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="display-1-2">
                    <div class="titled-box">
                        <label for="show-modal7" class="titled-box-name">Wyniesione ciekawostki</label>
                        <input type="checkbox" id="show-modal7" role="button">
                        <div class="titled-box-content">
                            <p>Poszaleliśmy - Scheme, Haskell, Prolog, Oz, Erlang, Java, Python, Android, Qt... <br/>
                                Ten moment, gdy program na mobilne kompiluje się dłużej niż gotuje się woda na herbatę... <br/>
                                Plus minus n wcale nie musi źle brzmieć. <br/>
                                Średnia to 4,73
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="scol-6-6">
                <div class="titled-box">
                    <label for="show-modal0" class="titled-box-name">Wzory</label>
                    <input type="checkbox" id="show-modal1" role="button">
                    <div class="titled-box-content">
                        <p>Wprowadzenie do Teorii Grafów
                            $$v(G) - e(G) + f(G) = 2 $$
                        </p>
                    </div>
                </div>
            </div>
            <div class="scol-6-6">
                <div class="titled-box">
                    <label for="show-modal0" class="titled-box-name">Komentarze</label>
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


        <section id="s5">
            <div class="section-title">
            <h1>Semestr V</h1>
            </div>
            <div class="scol-6-6">
                <div class="display-1-2">
                    <div class="titled-box">
                        <label for="show-modal11" class="titled-box-name">Opis</label>
                        <input type="checkbox" id="show-modal11" role="button">
                        <div class="titled-box-content">
                            <p>Najsłynniejszy semestr tego kierunku: Kompilatory i macierze. Ciągłe rankingi ile razy
                                wywali się nasz assembler na konkretnych przykładach. Wyścig z czasem, by zdążyć zrobić sprawozdanie
                                przed 21:00. Zasady z kryptografii pojawiające się w połowie semestru i zmieniające się co tydzień.
                                Za to Django potrafi wysypać interpreter pythona. <br/>
                                I najsłynniejsze zdanie: Gębalator i macierze - świąt nie będzie!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="display-1-2">
                    <div class="titled-box">
                        <label for="show-modal" class="titled-box-name">Wyniesione ciekawostki</label>
                        <input type="checkbox" id="show-modal" role="button">
                        <div class="titled-box-content">
                            <p>Nie trzeba uruchamiać programu by, dr Gębala znalazł przykład, który go wysypie. <br/>
                                Umiejętności obsługi Latexa jest czasami cenione wyżej niż obsługi Julii. <br/>
                                To, że coś ma w tytule zasady, wcale nie oznacza, że jest zasadami oceniania. <br/>
                                Średnia to 4,7
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="scol-6-6">
                <div class="titled-box">
                    <label for="show-modal0" class="titled-box-name">Wzory</label>
                    <input type="checkbox" id="show-modal1" role="button">
                    <div class="titled-box-content">
                        <p>Wprowadzenie do Topologii i Teorii Miar
                            $$\lim_{n \rightarrow \infty} inf \int_{E} f_{n} (x) d \mu (x) \ge \int_{E} \lim_{n \rightarrow \infty} f_{n} (x) d \mu x$$
                        </p>
                    </div>
                </div>
            </div>
            <div class="scol-6-6">
                <div class="titled-box">
                    <label for="show-modal0" class="titled-box-name">Komentarze</label>
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
    </section>

<?php
echo $lol->End();
?>