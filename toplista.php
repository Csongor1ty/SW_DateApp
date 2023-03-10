<?php
session_start();
include_once "dateAndsocial.php";
include_once "footer.php";
include "functions.php";
?><!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <link href="./img/Darth-Vader.ico" rel="icon">
    <title>Toplista</title>
    <link href="./style.css" rel="stylesheet">
    <link href="./font.css" rel="stylesheet">
    <link href="./mquery.css" rel="stylesheet">
</head>
<body>
<div id="banner-content"><img alt="Toplista" src="./img/toplist.jpg"></div>
<div class="menusor" id="lpMenusor">
    <a href="./index.php">Kezdőlap</a>
    <a class="active" href="./toplista.php">Toplista</a>
    <?php if (isset($_SESSION["user"])) { ?>
            <a  href="profile.php">Profilom</a></li>
      <?php } else { ?>
            <a href="signin.php">Bejelentkezés</a></li>
            <a href="regisztracio.php">Regisztráció</a></li>
      <?php } ?>
    
    <a href="./oldalterkep.php">Oldaltérkép</a>
    <a href="./kapcsolat.php">Kapcsolat</a>
</div>
<aside class="sidenav">
<?php
  dateAndsocial();
  ?><a href="#top3">A top három legvonzóbb entitás</a><br/>
    <a href="#top4-6">A következő három legvonzóbb entitás</a><br/>
    <a href="#futottak">Futottak még kategória</a>
    <iframe class="yt" src="https://www.youtube.com/embed/5AiFgN3TppY" title="YouTube video player"></iframe>
    <iframe class="fb" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FStar-Wars-Lovers-1810298222633396&tabs&width=250&height=70&small_header=true&adapt_container_width=false&hide_cover=false&show_facepile=false&appId"></iframe>
    <?php if (isset($_SESSION["user"])) { ?>
      <form method="GET" action="toplista.php" name="range">
        <fieldset>
            <p class="alpont">Értékelje oldalunkat!</p><br/>
            <input class="range_input" list="number" max="5" min="1" step="1" type="range" name="range" >
            <input id="submit_sidenav" type="submit" value="Értékelem">
        </fieldset>
          <?php }  

         if (isset($_GET['range'])) {
          rangeSite();
        }
    ?> </form>
    <?php if (isset($_SESSION["user"])) { ?>
        <audio autoplay="" controls="" loop="">
        <source src="./audio/electroswingcantinatheme.mp3" type="audio/mpeg">
        <p>Böngészője nem támogatja az audio elemet.</p></audio>
    <?php } else{ ?><audio autoplay="" controls=""><source src="audio/toplista.mp3" type="audio/mpeg"><p>Böngészője nem támogatja az audio elemet.</p></audio>
        <?php } ?>
    
</aside>
<table class="Toplistatabla">
    <thead>
    <tr id="top3">
        <th>
        <br/>
            <p>A galaxis második legvonzóbb entitása:</p>
            <p><a href="https://starwars.fandom.com/wiki/Padm%C3%A9_Amidala" rel="noopener" target="_blank">Padmé Amidala makeshift haspólóban</a></p>
            <figure>
                <img alt="Padmé Amidala" class="forgat" src="img/padme.png">
                <figcaption>
                    Padmé két homokdombról bukfencezés közben
                </figcaption>
            </figure>
            <p>Neme: ember - nő</p>
            <p>Foglalkozása: szenátor és ügyeletes fanservice</p>
            <p>Érdeklődési kör: padawanok</p>
            <p class="kommentelo">Bio: „Szabad neked szeretned? Úgy tudom, az tilos a Jediknek, nem?”</p>
        </th>
        <th>
            <p>A galaxis legvonzóbb entitása:</p>
            
            <?php if (isset($_SESSION["user"])) { ?>
                <p><a href="https://starwars.fandom.com/wiki/Jar_Jar_Binks" rel="noopener" target="_blank">Jar Jar Binks</a></p>
                <figure>
                <img alt="Jar Jar Binks" class="forgat" src="img/jarjar.png">
                <figcaption>
                    Jar Jar természetes környezetében, Coruscanton
                </figcaption>
            </figure>
            <p>Neme: gungan - hím</p>
            <p>Foglalkozása: sith na...coruscant-i politikus</p>
            <p>Érdeklődési kör: minden ami mozog és nyelvöltéstávolságra van</p>
            <p class="kommentelo">Bio: „Jar Jar lenni legbefolyásosabb gungan egész galaxisban! Remélni sosem látni Naboo-t újra, Éljen Birodalom soká!”</p>
      <?php } else { ?>
        <figure>
                <img alt="kitudja" class="forgat" src="img/jarjar_2.png">
                <figcaption>
                <a href="regisztracio.php">Regisztrálj</a>, hogy megtudhasd, ki a legvonzóbb entitás!
                </figcaption>
            </figure>
            <p>Neme: ?</p>
            <p>Foglalkozása: ?</p>
            <p>Érdeklődési kör: ?</p>            
      <?php } ?>
            
        </th>
        <th>
        <br/>
    <br/>
            <p>A galaxis harmadik legvonzóbb entitása:</p>
            <p><a href="https://starwars.fandom.com/wiki/Leia_Skywalker_Organa_Solo" rel="noopener" target="_blank">Leia hercegnő kurtizán szolgaként</a></p>
            <figure>
                <img alt="Leia Skywalker" class="forgat" src="img/leia.png">            
                <figcaption>
                    Leia, spacebéka-reggeli előtt
                </figcaption>
            </figure>
            <p>Neme: ember - nő</p>
            <p>Foglalkozása: hutt szolga, szabadidejében lázadó</p>
            <p>Érdeklődési kör: kétes hátterű űrcsempészek</p>
            <p class="kommentelo">Bio: „Inkább csókolnék meg egy vukit!”</p>
        </th>
    </tr>
    </thead>
    <tbody>
    <tr id="top4-6">
        <td>
            <p>#4:</p>
            <p><a href="https://starwars.fandom.com/wiki/Han_Solo" rel="noopener" target="_blank">Han Solo 80-as évekbeli frizurával</a></p>
            <figure>
                <img alt="Han Solo" class="forgat" src="img/solo.png">            
                <figcaption>
                    Han Solo, a galaxis legbecsületesebb és legőszintébb <s>csempésze</s> fuvarozója
                </figcaption>
            </figure>
            <p>Neme: ember - férfi</p>
            <p>Foglalkozása: hivatásos menekítő, vuki jogi aktivista</p>
            <p>Érdeklődési kör: megmentésre szoruló hercegnők</p>
            <p class="kommentelo">Bio: „Nekem csak egy ember parancsol, és az én vagyok!”</p>
        </td>
        <td>
            <p>#5:</p>
            <p><a href="https://starwars.fandom.com/wiki/Jyn_Erso" rel="noopener" target="_blank">Jyn Erso</a></p>
            <figure>
                <img alt="Jyn Erso" class="forgat" src="img/jyn.png">            
                <figcaption>
                    Jyn, aki előtt biztosan fényes jövő áll
                </figcaption>
            </figure>
            <p>Neme: ember - nő</p>
            <p>Foglalkozása: lázadó kém, hobbipiromán</p>
            <p>Érdeklődési kör: Halálcsillag és random pilóták</p>
            <p class="kommentelo">Bio: „Ne tévesszen meg, hogy Galen Erso az apám. Keress, ha akarsz látni egy igazán nagy tüzijátékot!”</p>
        </td>
        <td>
            <p>#6:</p>
            <p><a href="https://starwars.fandom.com/wiki/Darth_Vader" rel="noopener" target="_blank">Romantikus Vader nagyúr</a></p>
            <figure>
                <img alt="Darth Vader" class="forgat" src="img/vader.png">            
                <figcaption>
                    A zord külső néha valóban lágy belsőt takar...
                </figcaption>
            </figure>
            <p>Neme: ember - férfi(de inkább kiborg)</p>
            <p>Foglalkozása: sith tanítvány, alkalmi tömeggyilkos</p>
            <p>Érdeklődési kör: 6 évvel idősebb, szexi királynők</p>
            <p class="kommentelo">Bio: „Az igazán erős emberek nem lenyomnak, hanem felemelnek másokat.”</p>
        </td>
    </tr>
    <tr>
        <td class="valaszto" colspan="3"></td>
    </tr>
    <tr id="futottak">
        <td colspan="3">
            <p>Futottak még:</p>
        </td>
    </tr>
    <tr>
        <td>
            <p>#7:</p>
            <p><a href="https://starwars.fandom.com/wiki/Luke" rel="noopener" target="_blank">Luke Skywalker</a></p>
            <figure>
                <img alt="Luke Skywalker" class="forgat" src="img/luke.png">            
                <figcaption>
                    Lehet, hogy úgy tűnik, mintha csak elkalandozott volna, de közben az Erő titkait fürkészi!
                </figcaption>
            </figure>
            <p>Neme: ember - férfi</p>
            <p>Foglalkozása: ex-padawan, az új Jedi Rend alapítója</p>
            <p>Érdeklődési kör: birodalmi bérgyilkosok (E.U.)</p>
            <p class="kommentelo">Bio: „A kezemet elveszítettem, de Téged nem foglak!”</p>
        </td>
        <td>
            <p>#8:</p>
            <p><a href="https://starwars.fandom.com/wiki/Carasynthia_Dune" rel="noopener" target="_blank">Cara Dune</a></p>
            <figure>
                <img alt="Cara Dune" class="forgat" src="img/cara.png">            
                <figcaption>
                    Így néz ki egy igazi femme fatale!
                </figcaption>
            </figure>
            <p>Neme: ember - nő</p>
            <p>Foglalkozása: lázadó verőember, volt MMA harcos</p>
            <p>Érdeklődési kör: Titokzatos, erős, maszkos férfiak</p>
            <p class="kommentelo">Bio: „Ha túléled a brazil jitsu technikámat, meghívhatsz egy sörre!”</p>
        </td>
        <td>
            <p>#9:</p>
            <p><a href="https://starwars.fandom.com/wiki/Darth_Maul_(disambiguation)" rel="noopener" target="_blank">Darth Maul (pre-félig kiborg testtel)</a></p>
            <figure>
                <img alt="Darth Maul (pre-félig kiborg testtel)" class="forgat" src="img/maul.png">            
                <figcaption>
                    Erő, izom, harag... minden ami egy boldog kapcsolat alapjait képezi
                </figcaption>
            </figure>
            <p>Neme: dathomiri zabrak - férfi</p>
            <p>Foglalkozása: sith tanítvány, mérges ember</p>
            <p>Érdeklődési kör: Obi-Wan Kenobi, néha nők</p>
            <p class="kommentelo">Bio: „Ha megtalállak Obi-Wan, nem csak két darabban végzed!”</p>
        </td>
    </tr>
    <tr>
        <td>
            <p>#10:</p>
            <p><a href="https://starwars.fandom.com/wiki/Jango_Fett" rel="noopener" target="_blank">Jango Fett (fejjel a nyakán)</a></p>
            <figure>
                <img alt="Jango Fett (fejjel a nyakán)" class="forgat" src="img/jango.png">            
                <figcaption>
                    Hmm... mintha már láttam volna valahol ezt az arcot...
                </figcaption>
            </figure>
            <p>Neme: ember - férfi</p>
            <p>Foglalkozása: könyörtelen fejvadász</p>
            <p>Érdeklődési kör: nők, klónok, de leginkább kreditek</p>
            <p class="kommentelo">Bio: „Remélem, hogy a geonosis-i melóm után fürdeni fogok a kreditekben!”</p>
        </td>
        <td>
            <p>#11:</p>
            <p><a href="https://starwars.fandom.com/wiki/Rey_Skywalker" rel="noopener" target="_blank">Rey "Skywalker"</a></p>
            <figure>
                <img alt="Rey ''Skywalker''" class="forgat" src="img/ray.png">            
                <figcaption>
                    Nagyon izgalmas női főszereplő on screen
                </figcaption>
            </figure>
            <p>Neme: ember - nő</p>
            <p>Foglalkozása: Mary Sue</p>
            <p>Érdeklődési kör: hosszú hajú, tinihisztis srácok</p>
            <p class="kommentelo">Bio: „A nevem Rey. Tanulnom semmit nem kellett, minden bennem van, de ez csak természetes!”</p>
        </td>
        <td>
            <p>#12:</p>
            <p><a href="https://starwars.fandom.com/wiki/Asajj_Ventress" rel="noopener" target="_blank">Asajj Ventress</a></p>
            <figure>
                <img alt="Asajj Ventress" class="forgat" src="img/asajj.png">            
                <figcaption>
                    Asajj, sugardaddy-je elleni lázadásra készülve
                </figcaption>
            </figure>
            <p>Neme: dathomiri - nő</p>
            <p>Foglalkozása: bukott sith tanítvány, jó útra tért erőhasználó</p>
            <p>Érdeklődési kör: erős, jóképű, fiatal jedik</p>
            <p class="kommentelo">Bio: „Néha nehezen fogom vissza magam, de szerencsémre jedik esetében ezt a hibát nem követem el.”</p>
        </td>
    </tr>
    </tbody>
</table><br/>
<div id="home">
    <a href="#banner-content"><img alt="Lap tetejére" class="home" src="img/li_icon.gif" title="Lap tetejére"></a>
</div>
<?php
footer();
?>
</body>
</html>