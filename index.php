<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">

    <head>
        <title>DavidFriel - Photographie</title>

        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="DavidFriel - Photographie" />
        <meta name="keywords" content="Fotos, Photos, Photo, Foto, Fotograf, Photograph, Street" />
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="robots" content="index, nofollow">
        <link href="https://fonts.googleapis.com/css?family=Zilla+Slab" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="style.css"  />
    </head>

    <body>
        <main>
            <h1 class="invisible">David Friel</h1>
            <p class="invisible">Das hier ist eine Webseite, die fast ausschließlich Fotos zeigt. Deshalb gibt es auf dem Screenreader nicht so viel zu lesen... Sorry!</p>

            <img class="titel" src="davidfriel.svg" alt=""/>
            <img class="titel-h" src="davidfriel-h.svg" alt=""/>

            <div class="flex">
                <?php
                    $fotos=array( //groß, klein, width, height, flickr (1=ja, 0=nein)
                        array("https://farm5.staticflickr.com/4297/35613157210_274023f517_b.jpg","https://farm5.staticflickr.com/4297/35613157210_274023f517_z.jpg",640,425,1),
                        array("https://farm5.staticflickr.com/4570/26773871959_77f44104b6_b.jpg","https://farm5.staticflickr.com/4570/26773871959_77f44104b6_z.jpg",425,640,1),
                        array("https://farm5.staticflickr.com/4458/37787784241_6759b9f9ba_b.jpg","https://farm5.staticflickr.com/4458/37787784241_6759b9f9ba_z.jpg",640,425,1),
                        array("https://farm5.staticflickr.com/4410/36654785871_24f0cfe647_b.jpg","https://farm5.staticflickr.com/4410/36654785871_24f0cfe647_z.jpg",640,425,1),
                        array("https://farm5.staticflickr.com/4237/34868632494_465fd27027_b.jpg","https://farm5.staticflickr.com/4237/34868632494_465fd27027_z.jpg",640,425,1),
                        array("https://farm5.staticflickr.com/4239/35112509360_797150f3ac_b.jpg","https://farm5.staticflickr.com/4239/35112509360_797150f3ac_z.jpg",425,640,1),
                        array("https://c1.staticflickr.com/5/4202/34112991343_29213d244e_b.jpg","https://c1.staticflickr.com/5/4202/34112991343_29213d244e_z.jpg",640,425,1),
                        //array("https://c1.staticflickr.com/5/4166/34804424035_fb5b2e12eb_b.jpg","https://c1.staticflickr.com/5/4166/34804424035_fb5b2e12eb_z.jpg",640,425,1),
                        array("https://c1.staticflickr.com/5/4185/34641890592_47fd614b10_b.jpg","https://c1.staticflickr.com/5/4185/34641890592_47fd614b10_z.jpg",425,640,1),
                        array("https://c1.staticflickr.com/5/4174/33867818833_2d80f5f7cb_b.jpg","https://c1.staticflickr.com/5/4174/33867818833_2d80f5f7cb_z.jpg",640,420,1),
                        array("https://c1.staticflickr.com/5/4164/34457556721_6b02d41b27_b.jpg","https://c1.staticflickr.com/5/4164/34457556721_6b02d41b27_z.jpg",425,640,1),
                        array("https://c1.staticflickr.com/5/4156/34534530505_be60218043_b.jpg","https://c1.staticflickr.com/5/4156/34534530505_be60218043_z.jpg",425,640,1),
                        array("https://c1.staticflickr.com/5/4173/33691769124_6cfd19876f_b.jpg","https://c1.staticflickr.com/5/4173/33691769124_6cfd19876f_z.jpg",640,425,1),
                        array("https://c1.staticflickr.com/3/2816/34127329811_18ccf2c89a_b.jpg","https://c1.staticflickr.com/3/2816/34127329811_18ccf2c89a_z.jpg",425,640,1),
                        array("images/img57.jpg","images/img57_s.jpg",800,400,0),
                        array("images/img58.jpg","images/img58_s.jpg",266,400,0),
                        array("images/img59.jpg","images/img59_s.jpg",800,400,0),
                        array("images/img56.jpg","images/img56_s.jpg",602,400,0),
                        array("images/img55.jpg","images/img55_s.jpg",266,400,0),
                        array("images/img50.jpg","images/img50_s.jpg",800,400,0),
                        array("images/img48.jpg","images/img48_s.jpg",602,400,0),
                        array("images/img52.jpg","images/img52_s.jpg",711,400,0),
                        array("images/img49.jpg","images/img49_s.jpg",266,400,0),
                        array("images/img53.jpg","images/img53_s.jpg",602,400,0),
                        array("images/img47.jpg","images/img47_s.jpg",602,400,0),
                        array("images/img46.jpg","images/img46_s.jpg",266,400,0),
                        array("images/img41.jpg","images/img41_s.jpg",602,400,0),
                        array("images/img39.jpg","images/img39_s.jpg",266,400,0),
                        array("images/img38.jpg","images/img38_s.jpg",266,400,0),
                        array("images/img37.jpg","images/img37_s.jpg",266,400,0),
                        array("images/img23.jpg","images/img23_s.jpg",266,400,0),
                        array("images/img33.jpg","images/img33_s.jpg",266,400,0),
                        array("images/img32.jpg","images/img32_s.jpg",600,400,0),
                        array("images/img21.jpg","images/img21_s.jpg",266,400,0),
                        array("images/img18.jpg","images/img18_s.jpg",602,400,0),
                        array("images/img26.jpg","images/img26_s.jpg",600,400,0),
                        array("images/img25.jpg","images/img25_s.jpg",600,400,0),
                        array("images/img09.jpg","images/img09_s.jpg",600,400,0),
                        array("images/img07.jpg","images/img07_s.jpg",602,400,0)
                    );

		            $first=array_shift($fotos);
                    //shuffle($fotos);
                    echo"
                <div class='flex-item'>
                    <img src='".$first[1]."' sizes='90vw' srcset='".$first[1]." ".$first[2]."w, ".$first[0]." 1024w' />
                </div>";

                    foreach($fotos as $f){
                        $a="
                <div class='flex-item'>
                    <img class='lazy' data-original='".$f[1]."' sizes='90vw' data-original-set='".$f[1]." ".$f[2]."w, ".$f[0]." 1024w' />
                </div>";
                        echo $a;
                    }
                ?>


            </div>
        </main>
        <footer class="rotiert">
            <div class="text">
                <p>Diese Fotos und noch viel mehr gibt es auch bei <a href="https://www.flickr.com/photos/taefit/" target="_blank">Flickr</a>.</p>
                <p>Alle Fotos auf dieser Seite stehen unter einer <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">Creative Commons Namensnennung - Nicht-kommerziell - Weitergabe unter gleichen Bedingungen 4.0 International Lizenz</a>. Soll hei&szlig;en: frei verf&uuml;gbar f&uuml;r alle, die damit kein Geld verdienen, solange die Quelle (also ich bzw. diese Webseite) deutlich genannt wird und das entstandene Werk auch als CC lizensiert wird.</p>

                <p>Außerdem mache ich noch Webseiten wie zB. <a href="http://physiotherapie-aichach.de" target="_blank">für Physiotherapeuten</a> oder <a href="http://es-spiegel.tu-chemnitz.de" target="_blank">für Uni-Projekte</a>.

                <p><a href="impressum.html">Kontakt &amp; Impressum</a></p>
            </div>
        </footer>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-lazyload/10.0.0/lazyload.min.js"></script>
        <script>
            var lazyLazy = new LazyLoad({elements_selector: ".lazy", threshold: 200});
        </script>
    </body>
</html>
