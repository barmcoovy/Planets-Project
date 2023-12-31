# Projekt - część trzecia

## Struktura projektu

- Folder `components` - będzie zawierać szablony importowane na pozostałych stronach

- Folder `scripts` - będzie zawierać skrypty logowania, rejestracji, wylogowania, połączenia z bazą danych itp.

- Folder `styles` - będzie zawierać arkusze stylów aplikacji

- Folder `static` - pliki statyczne, głównie multimedia

- Folder `static/objects` - pliki graficzne ciał niebieskich

- Reszta plików 

## Nowe pliki

- `static/brak.png` oraz `brak.xcf` - plik `.png` należy umieścić wewnątrz wskazanego folderu i używać w przypadku gdy obiekt nie ma swojego obrazka do wyświetlenia. Plik `.xcf` jest szablonem programu GIMP, można go otworzyć i edytować aby dostosować np. kolory.

- `components/profile_card.php` - funkcja generująca krótką reprezentacje użytkownika z bazy danych. Wyświetlać ona będzie jego nazwę, ilość dodanych obiektów oraz sygnaturę czasową kiedy konto zostało stworzone. Funkcja zwraca za pomocą `return` zmienną przechowującą ciało HTML.
(Funkcja, ponieważ będziemy mogli jej użyć np. wewnątrz pętli, aby wygenerować listę użytkowników)
Np.

```js
/**
 * 
 *  @param profil - wynik działania funkcji get_profile() wewnątrz pliku `db.php`.
 *
 **/
function profile_card($profil, $obiekty) {
   $ileObiektow = sizeof($obiekty);
   $body = <<<END
      <div class='klasa'>
         <h3>{$profil['login']}</h3>
      </div>
   END;
   return $body;
}
```

- `components/object_card.php` - funkcja generująca widok pojedynczego ciała niebieskiego. Wyświetla jego twórcę, id, nazwę, typ, datę, obraz dodania oraz odległość. Używana w plikach `objects.php` oraz `profile.php`. Funkcja zwraca za pomocą `return` zmienną przechowującą ciało HTML.

- `profile.php` - strona profilu użytkownika. Zawierać będzie min. wygenerowaną przez `profile_card.php` kartę informacyjną o użytkowniku, oraz za pomocą `object_card.php` listę ciał niebieskich, dodanych przez zalogowanego użytkownika.
Na stronie należy umieścić przycisk z napisem "Ustawienia" który przekieruje użytkownika do pliku `settings.php`. (nie tworzymy go)

Osoby niezalogowane nie mogą przebywać na tej stronie i należy je przekierować do pliku `login.php`

- `styles/profile_card.css` - styl CSS elementu zwracanego przez funkcję w pliku `components/profile_card.php`. Używany w pliku `profile.php`. 

- `styles/object_card.css` - styl CSS elementu zwracanego przez funkcję w pliku `components/object_card.php`. Używany w plikach `objects.php` oraz `profile.php`. 

## Modyfikacja istniejących plików

- `scripts/db.php` - napisanie dwóch funkcji: `get_profile()` oraz `get_profile_objects()`. Pierwsza, zwróci wszystkie dane z tabeli `uzytkownicy` dla przekazanego jej np. za pomocą `$id` użytkownika. Druga, zwróci wszystkie ciała niebieskie dodane przez wskazanego użytkownika. Polecam ten sposób:
```php
while($row = mysqli_fetch_assoc($wynik)) {
   array_push($array, $row);
}
return $array;
```

- `create.php` - dodanie pola obsługującego przesyłanie plików

- `scripts/create_script.php` - dodanie obsługi przesyłania plików **graficznych**. Skrypt ma odrzucać pliki które nie posiadają rozszerzeń `.jpg` oraz `.png`. Za pomocą `move_uploaded_file()` przenosi obraz obiektu do folderu `static/objects/` pod następującą nazwą pliku:
   - `$nazwaUżytkownika$sygnarutaCzasowa_$nazwaObiektu.$rozszerzeniePliku` np.
   
   > `user1702653236_Merkury.jpg`

Owa nazwa pliku również zostaje zapisana w tabeli `obiekty` **do nowej kolumny**: `obraz`.

- `objects.php` - modyfikacja sposobu wyświetlania wszystkich obiektów. Należy posłużyć się *komponentem* `object_card.php` oraz plikiem CSS `object_card.css` aby wygenerować wszystkie ciała niebieskie wewnątrz tabeli `obiekty`.
Jak się nie uda to trudno, można zostawić stare wyświetlanie. To tylko 1pkt.

## Style

- Wszystkie pliki CSS należy zapisywać w folderze `styles`

- Reguły ogólne dla całego projektu należy umieścić w pliku `root.css` (np. resetowanie marginesu dla znacznika `body`, `p` itp.)

- Reguły dla pliku `components/header.php` umieszczamy w pliku `header.css`

- Reguły dla formularzy (logowania i rejestracji) umieszczamy w pliku `form.css` (Uwaga: plik ten ma formatować tylko formularz, może być to znacznik `form` lub jego kontener. Położenie formularza na stronach można stworzyć w stylu wewnętrznym)

- Reguły dla pliku `object.php` umieszczamy w pliku `objects.css`

## Baza danych

Modyfikujemy tabelę `obiekty` poprzez dodanie po kolumnie `odleglosc` nowej kolumny o nazwie <u>**`obraz`**</u>

> `obraz : TEXT NULL`


## Punktacja

-  **[1pkt]** - zachowanie struktury projektu
-  **[1pkt]** - poprawne zastrzeżenie się do pisania reguł CSS w odpowiednich plikach


<br>

- **[1pkt]** - strona `profile.php` przekierowuje niezalogowanych użytkowników do pliku `login.php`
- **[1pkt]** - przekierowanie użytkownika na stronę formularza obiektu, jeżeli przesyłany plik nie jest grafiką `.jpg` lub `.png`
- **[1pkt]** - przesyłany plik zostaje zapisany w folderze `static/objects/` pod wskazaną nazwą.
- **[1pkt]** - poprawne stworzenie ciała niebieskiego w bazie danych

<hr>

- **[1pkt]** - zastosowanie komponentu `object_card.php` dla pliku `objects.php`
- **[1pkt]** - zastosowanie komponentu `object_card.php` dla pliku `profile.php`
- **[1pkt]** - zastosowanie komponentu `profile_card.php` dla pliku `profile.php`


## Wskazania

Sygnaturę czasową otrzymamy za pomocą funkcji `time()`

```php
$teraz = time();
```

<br>

Aby używać funkcji napisanych wewnątrz pliku `db.php` (`get_profile()`, `get_profile_objects()`) i za pomocą zwracanych wartości wypełniać komponenty, należy wszystkie pliki **zaimportować** za pomocą `include` np.

```php
// profile.php
<?php
   session_start();
   include 'scripts/db.php';
   include 'components/profile_card.php';
   include 'components/object_card.php';

   $id = $_SESSION['login_id'];
   $profil = get_profile($id, $con);
   $obiekty = get_profile_objects($id, $con);
>
<!DOCTYPE html>
...
```
```html
...
<div class='profile-card-kontener'>
   <?php echo profile_card($profil, $obiekty);  ?>
</div>
```

<hr>

Aby używać reguł CSS jak na zrzutach ekranu należy napisać funkcje generujące obiekty tak, aby zwracały **kontener** dla **pojedynczego** obiektu. 
Wtedy można napisać różne reguły dla pliku `objects.php` oraz `profile.php`
```html
// profile.php

<div class="obiekty-kontener obiekty-kolumny">
   // pętla dla każdego obiektu przesłanego przez profil a wewnątrz niej
   
   echo object_card($obiekt) // funkcja z pliku `components/object_card.php`
</div>
```
```html
// objects.php

<div class="obiekty-kontener obiekty-flex">
// pętla dla każdego obiektu przesłanego przez profil a wewnątrz niej
   
   echo object_card($obiekt) // funckja z pliku `components/object_card.php``
</div>
```

A następnie w CSS użyć następujących selektorów:

```css
.obiekty-kontener.obiekty-flex {
   /* giętkie wyświetlanie */
}
.obiekty-kontener.obiekty-kolumny {
   /* wyświetlanie np. w dwóch kolumnach */
}
```
