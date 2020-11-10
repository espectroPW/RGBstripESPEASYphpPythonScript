RGB strip

ESP easy

PHP5 and python3 script

to controll RGB STRIP USING ESP 8266


For mobile phone and normal web pages


PL:

Zasada działania:


Sekcia suwaków
Index.php  (JavaScript) -> rgb.php -> rgb.py ->  ESP EASY -> EGB Strip

Sekcja Custom color:
Index.php -> action_page.php -> rgb.py ->  ESP EASY -> EGB Strip

Sekcja buttonów:
Index.php -> relay.py -> ESP EASY -> RELAY nr 1 or 2 and state.

Zrobione jest dlatego że po naciskaniu buttona cała strona czeka na odpowiedz z ESP EASY.
Zrobiłem aby skrypt przesyłał nr relaya oraz stan do pliku relay.py co rozwiącało problem.








ENG:


How it works:


Slider section
Index.php  (JavaScript) -> rgb.php -> rgb.py ->  ESP EASY -> EGB Strip

Section Custom color:
Index.php -> action_page.php -> rgb.py ->  ESP EASY -> EGB Strip

Section buttons:
Index.php -> relay.py -> ESP EASY -> RELAY nr 1 or 2 and state.

This is because when we click button it wait for response from ESP EASY and it freezing all site.
Thats why i send relay number and state to activate or deactivate in other file like relay.py





Have fun.

Site and 90% of site is not mine.
All rights to Nazmus Nasir - Nazm.us - Owner of EasyProgramming.net
I just edited it for my own custom usage.

All technology used in project:

jQuery v3.3.1 - https://github.com/jquery/jquery
Pickr 1.4.5 - https://github.com/Simonwep/pickr
Including its css: classic.min.css
noUiSlider 14.0.3 - https://github.com/leongersen/noUiSlider
Including its CSS
wNumb.js (dependency of noUiSlider) - https://github.com/rudza/meteor-wnumb/blob/master/wNumb.js
Bootstrap v4.3.1 - https://github.com/twbs/bootstrap
CSS only
Fonts
obitron.css
sourcecodepro.css

All devices used in project:

Raspi 2b+ as Apache2 server, and python package and php installed....
ESP 8266 as controller for Relays and RBW strip on ESP EASY custom software to controll RGB.

To build rgb strip controll i used MOSFETs like IRLZ34N and connected to power suply 12 V.
![Screenshot](https://dordnung.de/raspberrypi-ledstrip/img/rgb/small/led_3.jpg?ver=1.0)






