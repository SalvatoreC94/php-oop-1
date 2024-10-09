# PHP OOP 1

## Nome Repo: `php-oop-1`

### Obiettivo dell'Esercizio
Oggi pomeriggio ripassate i primi concetti di programmazione orientata agli oggetti in PHP. Create un file `index.php` in cui:

- È definita una classe `Movie`:
  - **All'interno della classe sono dichiarate delle variabili d'istanza.**
  - **All'interno della classe è definito un costruttore.**
  - **All'interno della classe è definito almeno un metodo.**
- **Vengono istanziati almeno due oggetti `Movie` e vengono stampati a schermo i valori delle relative proprietà.**

### Bonus 1
- **Modificare la classe `Movie` in modo che accetti più di un genere.**

### Bonus 2
- **Creare un layout completo per stampare a schermo una lista di film.**

### Organizzazione del Codice
Facciamo attenzione all'organizzazione del codice, suddividendolo in appositi file e cartelle. Possiamo ad esempio organizzare il codice:

- **Creare un file dedicato ai dati** (ad esempio un array di oggetti) che potremmo chiamare `db.php`.
- **Mettere ciascuna classe nel proprio file** e raggruppare tutte le classi in una cartella dedicata, chiamata `Models/`.
- **Organizzare il layout dividendo la struttura e i contenuti in file e parziali dedicati.**