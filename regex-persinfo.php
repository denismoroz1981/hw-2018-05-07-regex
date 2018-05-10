<?php
/**
 * Created by PhpStorm.
 * User: denismoroz
 * Date: 10.05.18
 * Time: 21:02
 */
//setlocale(LC_CTYPE, array('ru_RU.utf8', 'ru_UA.utf8'));
//setlocale(LC_ALL, array('ru_RU.utf8', 'ru_UA.utf8'));

$search='I was born on 20.10.1981, my PIN is 1234567890 and passport number is ҐҐ 123456';

echo '<strong>' . $search . '</strong><br>';

//Date of birth
$patDB='/[0123]\d.[01]\d.\d{4}/';

preg_match_all($patDB,$search,$mDB);
echo '<br>Date of Birth<br>';
echo '<em>' . $patDB . '</em><br>';
echo '<pre>' . var_export($mDB, 1) . '</pre>';

//PIN
$patPIN='/\d{10}/';

preg_match_all($patPIN,$search,$mPIN);
echo '<br>PIN (Ukraine)<br>';
echo '<em>' . $patPIN . '</em><br>';
echo '<pre>' . var_export($mPIN, 1) . '</pre>';

//Passport number
$patPIN='/[А-ЯЄ-ЇҐ]{4}\s?\d{6}/';

preg_match_all($patPIN,$search,$mPIN);
echo '<br>PIN (Ukraine)<br>';
echo '<em>' . $patPIN . '</em><br>';
echo '<pre>' . var_export($mPIN, 1) . '</pre>';