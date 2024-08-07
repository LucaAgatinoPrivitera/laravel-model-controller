<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<img src="https://img.shields.io/badge/template-tested-green" alt="Build Status">
<img src="https://img.shields.io/badge/laravel-10.10-red" alt="Laravel 10.10" />
<img src="https://img.shields.io/badge/bootstrap-5.3.2-red" alt="Bootstrap 5.3.2" />
<img src="https://img.shields.io/badge/vite-5.00-red" alt="Vite 5.00" />
<br>
<img src="https://img.shields.io/badge/license-boolean_95-blue" alt="Licensed to Boolean Students #95" />
<img src="https://img.shields.io/badge/license-boolean_109-blue" alt="Licensed to Boolean Students #109" />
<img src="https://img.shields.io/badge/license-boolean_125-blue" alt="Licensed to Boolean Students #125" />
</p>

# INFO

Questo git-template fornisce lo scaffold di una web application realizzata con Laravel 10, Blade, SCSS e Bootstrap. 

- [Documentazione Laravel 10.x](https://laravel.com/docs/10.x).

# SETUP INIZIALE

- Creare un repository a partire da questo template, cliccando in alto a destra sul pulsantone verde `Use this template` e poi su `Create a new repository`
- Clonare il repository appena creato sul proprio PC
- Da phpMyAdmin creare un database, importarvi i dati e segnarvi il nome dato al DB
- Creare un file `.env`. Si può procedere copiandolo da `.env.example`
- Per creare la APP_KEY nel `.env`, lanciare il comando dedicato, ma prima installare le dipendenze composer
	```bash
    composer install
	php artisan key:generate
	```
 - Installare anche le dipendenze NPM
	```bash
	npm i
	```
- Ri-controllare che tutti i dati nel `.env` siano corretti (attenzione al database!)
- Lanciare il progetto tramite il server built-in di PHP
	```bash
	php artisan serve
	```
- Lanciare vite
	```bash
	npm run dev
	```
- Puntare il browser all'indirizzo mostrato in terminale per controllare che tutto funzioni.


:pacco: CONSEGNA
Creare un progetto basandoci su uno Scaffold più avanzato. Questo progetto dovrà collegarsi ad un database per recuperare alcuni dati.

:razzo: COME AVVIARE IL PROGETTO
Create una vostra repo laravel-model-controller a partire dal mio template: con boostrap o senza bootstrap.
Seguite i passaggi descritti nel readme.md della mia repo per configurare ed avviare tutto.
Poi ricordatevi di avviare il progetto usando i DUE terminali.

:data-trek: COME PREDISPORRE I DATI
Tramite phpMyAdmin create un nuovo database laravel_model_controller
Importate in questo database il dump che trovate in allegato.

:pergamena: COME PROCEDERE
Assicuratevi di avere le corrette credenziali nella sezione database del file .ENV (incluso il nome del DB).
Create un model Movie
php artisan make:model Movie
Create un controller che gestirà la rotta "/"
php artisan make:controller Guest/PageController
All’interno della funzione index() del controller, recuperate tutti i film dal database e passateli alla view, che quindi li visualizzerà a schermo.

:regalo: BONUS
Provate a creare più rotte, ad esempio una rotta "/" con un breve paragrafo di benvenuto e poi una rotta "/movies" con la lista dei film.
Avrete bisogno di due rotte, due metodi nel controller e due viste!


Da chiedere: 
	ma devo usare il server del  npm run dev o dell'artisan serve? quest'ultimo non ha css.
	use App/Models/Movie... use sta per usa nel senso di importa?
	Qui si deve usare -> perché accedo ad un attributo dell'array associativo, mentre => si usa quando definisco indice con un nome giusto?