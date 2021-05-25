<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Html Generated</title>
    <meta name="description" content="Figma htmlGenerator">
    <meta name="author" content="htmlGenerator">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class=e4_0>
        <div class=e11_59>
            <div class="e4_7"></div>
            <span class="e4_10">Cari apa bang</span>
            <span class="e9_8">Berita Fashion</span>
            <div class=e4_92>
                <div class="e4_9">
                    <input style="width: 231px; height: 29px; background-color: transparent; border: 0px;" action="GET"></input>
                </div>
            </div>
            <div class="e8_7"></div>
            <div class="e8_8"></div>
            <div class="e8_9"></div>
        </div>
        <div class=e11_58>
            <div class="e10_3"></div><span class="e9_6">a million inspirations your's outfit !</span><span class="e9_7">Fashion secara khusus berarti gaya dalam berpakaian yang di gunakan sehari-hari oleh
                seseorang, mau itu di dalam kehidupan kesehariannya atau ketika orang tersebut menghadiri acara tertentu
                yang bertujuan menunjang penampilannya.

                Definisi fashion adalah gaya pakaian yang populer di suatu budaya atau merupakan suatu mode. Ada orang
                yang berpendapat bahwa fashion adalah gaya pakaian yang dapat menentukan penampilan seseorang. Fashion
                pada dasarnya dimulai dengan bahasa Inggris, yang berarti fashion yang berarti bahwa itu adalah model,
                mode, metode, gaya atau bentuk kebiasaan.</span>
            <div class="e9_11"></div>
        </div>
        <div class=e11_57>
            <div class="e4_8"></div>
            <div class="e9_14"></div>
            <div class="e11_5"></div>
            <span class="e4_93">Women’s Outfit Inspiration</span>
            <span class="e11_6">Men’s Outfit Inspiration</span>
            <button style="background-color: transparent; border: 0px;" class="e9_2">Casual</button>
            <button style="background-color: transparent; border: 0px;" class="e11_7">Casual</button>
            <button style="background-color: transparent; border: 0px;" class="e9_3">Formal</button>
            <button style="background-color: transparent; border: 0px;" class="e11_8">Formal</button>
            <button style="background-color: transparent; border: 0px;" class="e9_4">Hijabers</button>
            <button style="background-color: transparent; border: 0px;" class="e11_9">Sporty</button>
            <button style="background-color: transparent; border: 0px;" class="e9_5">Weding Dress</button>
        </div>
        <div class=e11_56>
            <div class="e4_1"></div>
            <a class="e11_56" onclick="myFunction()">Dark</a>
            <span class="e4_4">OALA.CO</span>
            <a href="index.html" class="e4_2">Home</a>
            <a href="list.html" class="e4_22">list</a>
            <a href="profil.html" class="e4_3">Profil</a>
        </div>
        <span class="e11_61">@a.syifa.a</span>
    </div>


    <script>
        function myFunction() {
            var element = document.body;
            element.classList.toggle(changeMode());
        }

        function changeMode() {
            var styleId = 'styles_dark';
            if (!document.getElementById(styleId)) {
                var head = document.getElementsByTagName('head')[0];
                var link = document.createElement('link');
                link.id = styleId;
                link.rel = 'stylesheet';
                link.type = 'text/css';
                link.media = 'all';
                link.href = 'styles_dark.css'
                head.appendChild(link);
            }
        }
    </script>
</body>

</html>