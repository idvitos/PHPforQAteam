<?php
//Написати функцію для перевірки валідності корпоративної емейл адреси (без регулярних виразів),
//яка повертає TRUE якщо емейл валідний і FALSE в іншому випадку.

$email = 'v.popovych@internetdevels.ua';

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "TRUE";
}
else {
    echo "FALSE";
}


