---
marp: true
title: Introducció al Python
paginate: true
---

# Introducció al Python

---

## Llenguatge de programació

Un llenguatge de programació és un llenguatge informàtic utilitzat per controlar el comportament d'una màquina, normalment un ordinador. Cada llenguatge té una sèrie de regles sintàctiques i semàntiques estrictes que cal seguir per escriure un programa informàtic, i que en descriuen l'estructura i el significat respectivament. Aquestes regles permeten especificar tant el tipus de dades amb què treballarà el programa com les accions que realitzarà.

---

## Llenguatge màquina

El llenguatge màquina és l'únic llenguatge que entén directament lordinador. La seva estructura està completament adaptada als circuits de la màquina i molt allunyada de la forma d'expressió i anàlisi dels problemes propis dels humans. La programació en aquest llenguatge és complicada, de manera que es requereix un coneixement profund de l' arquitectura física de l'ordinador.

https://es.wikipedia.org/wiki/Lenguaje_de_m%C3%A1quina
https://introcs.cs.princeton.edu/java/63programming/

---

## Llenguatge assemblador

El llenguatge assemblador constitueix el primer intent de substitució del llenguatge per un de més proper a l'utilitzat pels humans.

Té la majoria dels inconvenients que té el llenguatge màquina: un repertori molt reduït d'instruccions, el rígid format de les instruccions, la baixa portabilitat i la forta dependència del maquinari.

Aquest tipus de llenguatges fan correspondre a cada instrucció en assemblador una instrucció en codi màquina. Aquesta traducció la duu a terme un programa traductor anomenat assemblador.

https://es.wikipedia.org/wiki/Lenguaje_ensamblador
https://www.geeksforgeeks.org/8086-program-add-two-16-bit-numbers-without-carry/

---

## Llenguatges d'alt nivell

Els llenguatges d'alt nivell tenen com a objectiu facilitar el treball del programador permetent desenvolupar aplicacions independents de la màquina.

Aquests llenguatges més evolucionats utilitzen unes instruccions més fàcils d'entendre i proporcionen facilitats per expressar alteracions del flux de control de manera més intuïtiva.

---

## Python

Python és un llenguatge de programació de **propòsit general** d'alt nivell i **interpretat**:

* propòsit general: permet escriure programari en una gran varietat de camps d'aplicació diferents. A diferència dels llenguatges de programació de domini específic, on hi ha característiques especials adaptades a un sector concret com el cientític, artístic, jocs, web, finances...

* interpretat: executa les instruccions directament, sense que s'hagin d'haver compilat prèviament en un programa de llenguatge màquina.

---

## Per què Python?

* La seva filosofia de disseny fa èmfasi en la llegibilitat del codi, i per tant, és ideal per aprendre a programar.

* És multiplataforma (windows, linux, mac...)

* [Té una gestió de la memòria automàtica](https://ca.wikipedia.org/wiki/Recollida_de_mem%C3%B2ria_brossa)

* [És el llenguatge de programació què més es fa servir](https://pypl.github.io/PYPL.html)

---

## Programació amb Python

Com a [IDE](https://es.wikipedia.org/wiki/Entorno_de_desarrollo_integrado) farem servir Visual Code amb el plugin de Python.

Farem servir Python versió 3.

Recursos:

* https://entrenamiento-python-basico.readthedocs.io/es/latest/leccion1/index.html
* https://aprendepython.es
* https://www.w3schools.com/python/python_intro.asp
* https://www.edx.org/es/course/programacion-para-todos-empezando-con-python

---

## Exercicis de Python I

1. Mostra una missatge de benvinguda
2. Demana el nom de l'usuari i li diu hola amb el nom.
3. Demana el nom i el saluda, pero si el nom és "Alfonso", diu "Hola professor", si no, diu hola com abans
4. Demana l'edat de l'usuari i li diu si és major o menor d'edat
5. Demana l'edat de l'usuari i li diu si és nen, adolescent (13-19), adult o veterà (65+)
6. Demana dos números i els suma.
7. **[AVALUABLE]** Demana dos números i l'operació que és vol fer, que pot ser suma, resta, multiplicació o divisió. Llavors, la fa. Opcionalment, també ha de controlar que no es pugui dividir entre zero.

---

## Exercicis de Python II

1. Mostra 10 vegadas la frase "Pim pam!"
2. Mostra els números del 0 al 10
3. Mostra els números del 10 al 20
4. Mostra els números del 10 al 0
5. Demana un número i mostra els números des del 0 fins aquest número inclós dient si són parells o senars
6. Demana quants números vols sumar l'usuari, demana cada un dels números i mostra la suma al final
7. **[AVALUABLE]** Demana un número entre 1 i 10. Mostra la taula de multiplicar d'aquest número. Opcionalment, controla que el número sigui entre 1 i 10

---

## Exercicis de Python III

1. Fes una llista amb totes les vocals i mostra-la per pantalla, amb una vocal per línea
2. Demana a l'usuari que introdueixi 10 números i mostres tots els números i quant sumen
3. El mateix que abans, però l'usuari diu quants números introduïrà
4. Demana a l'usuari una paraula i mostres les lletres de la paraula, una per línea
5. Demana a l'usuari que introdueixi 10 paraules i les mostres ordenades alfabèticament al final
6. **[AVALUABLE]** El mateix que abans, però l'usuari diu quantes paraules introduirà i les converitiràs a majúscules

---

## Exercicis de Python IV

1. Demana números a l'usuari, els vas suman, fins que introdueixi un zero per acabar el programa
2. Demana paraules a l'usuari, les afegeixes a una llista fins que introdueixi una paraula buïda. Llavors, les mostres en minúscules en ordre alfabètic invers
3. Tría un número a l'atzar entre 1 i 10 i mostra'l per pantalla
4. Tría un número a l'atzar entre 1 i 10 i intenta averiguar-lo
5. **[AVALUABLE]** El mateix que abans, però entre 1 i 100, i que el programa et digui si el que has introduït és major o menor que el triat

---

## Exercicis de Python V

1. Fes una funció que mostri la paraula "Hola" subratllada i crída-la
2. Fes una funció que mostri una paraula qualsevol subratllada i crída-la amb la paraula "Caracola"
3. Demani paraules a l'usuari i crida a la funció anterior, fins que la paraula sigui büida
4. Fes un funció que et digui si un nombre és primer o no i crída-la amb el nombres 10, 13 i també amb 23262139
5. **[AVALUABLE]** Fes una programa que trii nombres a l'atzar entre 2 i 10000 i els mostri, dient si son primers o no. El programa acaba quan en troba un de primer
