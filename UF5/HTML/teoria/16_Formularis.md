---
marp: true
title: Formularis
paginate: true
---

# Formularis

---

## Entrada de dades

De vegades cal que l'usuari **introdueixi dades**. Per exemple, en situacions com:

* registrar-se i iniciar la sessió a llocs web
* introduir informació personal (nom, adreça, dades de la targeta de crèdit ...)
* filtrar contingut (mitjançant desplegables, caselles de selecció ...)
* realitzant una cerca
* càrrega de fitxers

---

## Formularis

Per adaptar-se a aquestes necessitats d'entrada de dades, HTML proporciona **controls de formulari interactius**:

* entrades de text (per a una o diverses línies)
* botons d'opció
* caselles de selecció
* desplegables
* selector de fitxers per carregar
* botons d'enviament

Aquests controls fan servir diferents **etiquetes HTML**.

---

## L'element Form

El `<form>` és un element de nivell de bloc que defineix una part **interactiva** d'una pàgina web. Com a resultat, tots els controls de formulari (com ara `<input>`, `<textarea>` o `<button>`) han d'aparèixer _dins_ d'un element `<form>`.

L'etiqueta `<form>` té dos atributs:

* `action` conté una adreça que defineix _on_ s'enviarà la informació del formulari
* `method` pot ser **GET** o **POST** i defineix [_com_ s'enviarà la informació del formulari](https://www.w3schools.com/tags/att_form_method.asp)

Normalment, la informació del formulari s’envia a un **servidor**.

---

## Exemple de formulari d'inici de sessió I

Un formulari és una col·lecció de controls d'entrada que funcionen junts per realitzar una operació **única**. Si escriviu un formulari d'inici de sessió, podríeu tenir **3** controls:

* una entrada de correu electrònic `<input type ="email">`
* una entrada de contrasenya `<input type ="password">`
* un botó d'enviament `<input type ="submit">`

Aquests 3 elements HTML s'inclourien dins d'un únic element `<form>`

---

## Exemple de formulari d'inici de sessió II

```html
<form action ="/login" method="POST">
    <input type ="email" name="email">
    <input type ="password" name="contrasenya">
    <input type ="submit">
</form>
```

Els atributs `name` afegits serveixen per a identificar les dades al **servidor**.

---

## Entrades de text

Gairebé tots els formularis requereixen una entrada **textual** per part dels usuaris, perquè puguin introduir el seu nom, correu electrònic, contrasenya, adreça ... Els controls de formularis de text presenten diferents variacions:

* Text: `<input type="text">`
* Correu electrònic: `<input type="email">`
* Contrasenya: `<input type="password">`
* Número: `<input type="number">`
* Telèfon: `<input type="tel">`
* Text de diverses línies: `<textarea></textarea>`

---

## Marcadors de posició

Les entrades de text poden mostrar un text de **marcador de posició** amb l'atribut `placeholder`, que desapareixerà tan bon punt s'introdueixi algun text.

```html
<input type="text" placeholder="Introduïu el vostre nom">
```

Si comenceu a escriure alguna cosa, veureu que desapareix el text _Introduïu el vostre nom_.

---

## Label

Com que els elements de formulari per si sols no són molt descriptius, solen anar precedits d'un **de text** amb l'etiqueta `label`.

```html
<label> Correu electrònic </label>
<input type="email">
```

Les etiquetes `<label>` només es poden fer servir dins dels formularis i es poden emparellar amb un control de formulari amb l'atribut `for` i fent coincidir el seu valor amb el `id` de l'entrada.

```html
<label for="first_name"> Nom </label>
<input id="first_name" type="text">
```

En fer clic al text del `<label>` el cursor es col·locarà a dins del `<input>`.

---

## Checkbox

Els **checkbox** són controls de formulari que només tenen 2 estats: marcats o no marcats. Bàsicament permeten a l'usuari dir "Sí" o "No" a alguna cosa.

```html
<input type="checkbox"> Recordeu-me
```

Com que pot ser difícil fer clic a un checkbox, es recomana embolicar una `<label>` al voltant del checkbox i la seva descripció.

```html
<label>
  <input type="checkbox"> Accepto els termes
</label>
```

Si fas clic a _Accepto els termes_ per canviar el checkbox.

---

## Checkbox "checked"

Per defecte, es desmarca una entrada de checkbox. Podeu marcar-lo com a marcat per defecte mitjançant l’atribut simplement anomenat `checked`.

```html
<label>
  <input type="checkbox" checked> Utilitzar com a adreça de facturació
</label>
```

---

## Radio buttons

Podeu presentar a l’usuari una **llista d’opcions** per triar mitjançant els botons d’opció.

Perquè aquest control de formulari funcioni, el vostre codi HTML ha de **agrupar** una llista de botons d'opció. Això s'aconsegueix utilitzant el mateix valor per a l'atribut `name`:

```html
<label> Color preferit </label>
<label><input type="radio" name="color">Vermell</label>
<label><input type="radio" name="color">Verd</label>
<label><input type="radio" name="color">Blau</label>
```

Com que tots els botons d'opció utilitzen el mateix _valor_ per al seu atribut `name`, en seleccionar una opció es desseleccionaran totes les altres. Es diu que els botons d’opció són **mútuament excloents**.

---

## Diferència entre checkbox i radio

Els _checkbox_ poden apareixer sols, en canvi els _radio buttons_ només poden aparèixer com a **llista** (el que significa tenir almenys _2_ opcions).

A més, fer clic a un _checkbox_ és **opcional**, mentre que triar un dels _radio buttons_és **obligatori**. Per això, és impossible desmarcar un botó d’opció tret que trieu una opció de germà. Però, al final, sempre es selecciona un dels botons d’opció.

---

## Selects

Si el nombre d'opcions per triar ocupa massa espai, podeu utilitzar els menús desplegables `<select>`.

Funcionen com botons de ràdio. Només el seu disseny és diferent.

```html
<select>
  <option> Dilluns </option>
  <option> Dimarts </option>
  <option> Dimecres </option>
  <option> Dijous </option>
  <option> Divendres </option>
  <option> Dissabte </option>
  <option> Diumenge </option>
</select>
```

---

## Select d'elecció múltiple

Si afegiu l'atribut `multiple`, podeu proporcionar la possibilitat de seleccionar diverses opcions.

```html
<label> Quins navegadors teniu? </label>
<select multiple>
  <option> Google Chrome </option>
  <option> Internet Explorer </option>
  <option> Mozilla Firefox </option>
  <option> Opera </option>
  <option> Safari </option>
</select>
```

Seleccioneu diverses opcions mantenint `CTRL` i fent clic. Aquesta pot ser una bona alternativa a l’ús de diverses caselles de selecció seguides.

---

## Submit del formulari

Defineix un botó per enviar les dades del formulari al servidor. 

```html
<form action="/action_page.php" method="POST">
  <label for="nom">Nom:</label>
  <input type="text" id="nom" name="nom" value="Alfonso">
  <input type="submit" value="Actualitzar">
</form>
```

L'atribut `value` del `<input>` serveix per a posar un valor per defecte al nom, en aquest cas.

---

## Preguntes que heu de respondre a la [pràctica 1](https://moodle.insjoaquimmir.cat/mod/assign/view.php?id=42051)

1. Busca quines diferència hi ha entre posar en un formulari el valor `GET` o `POST` a l'atribut `method`.
