<?php



$noMatch = 0;
$noMatchResult = [];
$match = 0;
$matchResult = [];

$cities = [
    [
        "id"         => 0,
        "welsh_name" => "Shahrestān-e Naz̧arābād"
    ],
    [
        "id"         => 1,
        "welsh_name" => "Naz̧arābād"
    ],
    [
        "id"         => 2,
        "welsh_name" => "Al Ghayz̧ah"
    ],
    [
        "id"         => 3,
        "welsh_name" => "Ấp Tân Ngãi"
    ],
    [
        "id"         => 4,
        "welsh_name" => "Đưc Trọng"
    ],
    [
        "id"         => 5,
        "welsh_name" => "Vị Thanh"
    ],
    [
        "id"         => 6,
        "welsh_name" => "Thị xã Phú Thọ"
    ],
    [
        "id"         => 7,
        "welsh_name" => "Thị Xã Phước Long"
    ],
    [
        "id"         => 8,
        "welsh_name" => "Thị Xã Phú Mỹ"
    ],
    [
        "id"         => 9,
        "welsh_name" => "Thị Xã Ninh Hòa"
    ],
    [
        "id"         => 10,
        "welsh_name" => "Thị Xã Mưòng Lay"
    ],
    [
        "id"         => 11,
        "welsh_name" => "Thị Xã Gò Công"
    ],
    [
        "id"         => 12,
        "welsh_name" => "Thị Xã Chí Linh"
    ],
    [
        "id"         => 13,
        "welsh_name" => "Thị Xã Bắc Kạn"
    ],
    [
        "id"         => 14,
        "welsh_name" => "Thị Trấn Tân Thành"
    ],
    [
        "id"         => 15,
        "welsh_name" => "Nam Định"
    ],
    [
        "id"         => 16,
        "welsh_name" => "Huyện Đức Trọng"
    ],
    [
        "id"         => 17,
        "welsh_name" => "Huyện Đức Phổ"
    ],
    [
        "id"         => 18,
        "welsh_name" => "Huyện Đức Hòa"
    ],
    [
        "id"         => 19,
        "welsh_name" => "Huyện Đức Huệ"
    ],
    [
        "id"         => 20,
        "welsh_name" => "Huyện Đức Cơ"
    ],
    [
        "id"         => 21,
        "welsh_name" => "Huyện Định Quán"
    ],
    [
        "id"         => 22,
        "welsh_name" => "Huyện Đạ Tẻh"
    ],
    [
        "id"         => 23,
        "welsh_name" => "Huyện Đông Triều"
    ],
    [
        "id"         => 24,
        "welsh_name" => "Huyện Ðức Thọ"
    ],
    [
        "id"         => 25,
        "welsh_name" => "Huyện Yên Định"
    ],
    [
        "id"         => 26,
        "welsh_name" => "Huyện Vụ Bản"
    ],
    [
        "id"         => 27,
        "welsh_name" => "Huyện Vị Xuyên"
    ],
    [
        "id"         => 28,
        "welsh_name" => "Huyện Vặn Quan"
    ],
    [
        "id"         => 29,
        "welsh_name" => "Huyện Vĩnh Cửu"
    ],
    [
        "id"         => 30,
        "welsh_name" => "Huyện Tân Trụ"
    ],
    [
        "id"         => 31,
        "welsh_name" => "Huyện Trực Ninh"
    ],
    [
        "id"         => 32,
        "welsh_name" => "Huyện Tiểu Cần"
    ],
    [
        "id"         => 33,
        "welsh_name" => "Huyện Tiền Hải"
    ],
    [
        "id"         => 34,
        "welsh_name" => "Huyện Tiên Lữ"
    ],
    [
        "id"         => 35,
        "welsh_name" => "Huyện Thủ Thừa"
    ],
    [
        "id"         => 36,
        "welsh_name" => "Huyện Thọ Xuân"
    ],
    [
        "id"         => 37,
        "welsh_name" => "Huyện Thạnh Trị"
    ],
    [
        "id"         => 38,
        "welsh_name" => "Huyện Thái Thụy"
    ],
    [
        "id"         => 39,
        "welsh_name" => "Huyện Sơn Tịnh"
    ],
    [
        "id"         => 40,
        "welsh_name" => "Huyện Quỳnh Phụ"
    ],
    [
        "id"         => 41,
        "welsh_name" => "Huyện Quỳ Hợp"
    ],
    [
        "id"         => 42,
        "welsh_name" => "Huyện Quảng Ðiền"
    ],
    [
        "id"         => 43,
        "welsh_name" => "Huyện Phù Cừ"
    ],
    [
        "id"         => 44,
        "welsh_name" => "Huyện Phong Điền"
    ],
    [
        "id"         => 45,
        "welsh_name" => "Huyện Ngọc Lặc"
    ],
    [
        "id"         => 46,
        "welsh_name" => "Huyện Ngọc Hồi"
    ],
    [
        "id"         => 47,
        "welsh_name" => "Huyện Nam Trực"
    ],
    [
        "id"         => 48,
        "welsh_name" => "Huyện Mộ Đức"
    ],
    [
        "id"         => 49,
        "welsh_name" => "Huyện Lục Yên"
    ],
    [
        "id"         => 50,
        "welsh_name" => "Huyện Lục Ngạn"
    ],
    [
        "id"         => 51,
        "welsh_name" => "Huyện Lục Nam"
    ],
    [
        "id"         => 52,
        "welsh_name" => "Huyện Hiệp Đức"
    ],
    [
        "id"         => 53,
        "welsh_name" => "Huyện Giồng Riềng"
    ],
    [
        "id"         => 54,
        "welsh_name" => "Huyện Diễn Châu"
    ],
    [
        "id"         => 55,
        "welsh_name" => "Huyện Cẩm Xuyên"
    ],
    [
        "id"         => 56,
        "welsh_name" => "Huyện Cẩm Thủy"
    ],
    [
        "id"         => 57,
        "welsh_name" => "Huyện Cẩm Khê"
    ],
    [
        "id"         => 58,
        "welsh_name" => "Huyện Cẩm Giàng"
    ],
    [
        "id"         => 59,
        "welsh_name" => "Huyện Chợ Đồn"
    ],
    [
        "id"         => 60,
        "welsh_name" => "Huyện Chợ Mới"
    ],
    [
        "id"         => 61,
        "welsh_name" => "Huyện Chợ Lách"
    ],
    [
        "id"         => 62,
        "welsh_name" => "Huyện Chợ Gạo"
    ],
    [
        "id"         => 63,
        "welsh_name" => "Huyện Châu Đức"
    ],
    [
        "id"         => 64,
        "welsh_name" => "Huyện Bến Lức"
    ],
    [
        "id"         => 65,
        "welsh_name" => "Huyện Bình Lục"
    ],
    [
        "id"         => 66,
        "welsh_name" => "Huyện Ba Chẽ"
    ],
    [
        "id"         => 67,
        "welsh_name" => "Huyện Ba Bể"
    ],
    [
        "id"         => 68,
        "welsh_name" => "Cẩm Phả Mines"
    ],
    [
        "id"         => 69,
        "welsh_name" => "Cẩm Phả"
    ],
    [
        "id"         => 70,
        "welsh_name" => "Cao Bằng"
    ],
    [
        "id"         => 71,
        "welsh_name" => "Bỉm Sơn"
    ],
    [
        "id"         => 72,
        "welsh_name" => "Tehran"
    ]
];

//print_r($cities);

foreach ($cities as $city) {
    $welsh_name = $city["welsh_name"];
    $english_name = replace_spec_char($welsh_name);
    similar_text($welsh_name, $english_name, $percent);

    if ($percent < 100) {
        $noMatch++;
        $noMatchResult[] = [
            "welsh_name"   => $welsh_name,
            "english_name" => $english_name,
            "arrayOfCharacter" => mb_convert_encoding(CharactersExceptEnglishAndNumbersAndSomeSymbols($welsh_name), 'UTF-8', 'UTF-8'),
            "similar_text" => round($percent),
        ];
    }
    else {
        $match++;
        $matchResult[] = [
            "welsh_name"   => $welsh_name,
            "english_name" => $english_name,
            "similar_text" => round($percent),
        ];
    }
}


$data = [
    "all"           => count($cities),
    "match"         => $match,
    "matchResult"   => $matchResult,
    "noMatch"       => $noMatch,
    "noMatchResult" => $noMatchResult
];

header('Content-type: Application/json');
echo json_encode($data);

/*
 * This function removes all Arabic characters from the text
 */
function removeArabic($string)
{
    return preg_replace('/[\x{0600}-\x{06FF}]/u', '', $string);
}


/*
 * @param $text
 *
 * This pattern finds all characters except English and numbers and some symbols from our text
 * @return array
 *
 */

function CharactersExceptEnglishAndNumbersAndSomeSymbols($text)
{
    preg_match_all("/[^a-zA-Z ,\-'.()0-9–\[\]&·\/]+/", $text, $arrayOfCharacter);
    return $arrayOfCharacter;
}


/*
 * @param $text
 *
 * This function returns all non-English special characters to English characters
 *
 * @return string
 */
function replace_spec_char($subject)
{
    $subject = mb_convert_encoding(removeArabic($subject), 'UTF-8', 'UTF-8');
    $char_map = array(
        "ṯ"  => "t",
        "ṟ"  => "r",
        "ǫ"  => "o",
        "̀"  => "",
        "Ḏ"  => "D",
        "ḏ"  => "d",
        "ṭ"  => "t",
        "Ј"  => "J",
        "Ḥ"  => "H",
        "ẖ"  => "h",
        "ḥ"  => "h",
        "̱"  => "",
        "ṣ"  => "s",
        "ṭ"  => "t",
        "ḯ"  => "i",
        "Ṭ"  => "T",
        "ṅ"  => "n",
        "ḍ"  => "d",
        "̇̄" => "",
        "İ"  => "I",
        "”"  => "'",
        "’"  => "'",
        "ồ"  => "o",
        "ệ"  => "e",
        "ủ"  => "u",
        "ộ"  => "o",
        "ỹ"  => "y",
        "ắ"  => "a",
        "ấ"  => "a",
        "ố"  => "o",
        "ế"  => "e",
        "ỳ"  => "y",
        "ậ"  => "a",
        "ả"  => "a",
        "ứ"  => "u",
        "ổ"  => "o",
        "ẻ"  => "e",
        "ề"  => "e",
        "ụ"  => "u",
        "ặ"  => "a",
        "ử"  => "u",
        "ự"  => "u",
        "ể"  => "e",
        "ữ"  => "u",
        "ừ"  => "u",
        "ợ"  => "o",
        "ễ"  => "e",
        "ẩ"  => "a",
        "ẽ"  => "e",
        "ằ"  => "a",
        "ỉ"  => "i",
        "̧"  => "",
        "ị"  => "i",
        "ọ"  => "o",
        "Ấ"  => "A",
        "Ẕ"  => "Z",
        "Ẕ"  => "Z",
        "ḑ"  => "d",
        "Z̄" => "Z",
        "s̄" => "s",
        "S̄" => "S",
        "S̄" => "S",
        "z̄" => "z",
        "ḩ"  => "h",
        "ẕ"  => "z",
        "‘"  => "",
        "ầ"  => "a",
        "ơ"  => "o",
        "ờ"  => "o",
        "ỏ"  => "o",
        "ạ"  => "a",
        "ớ"  => "o",
        "ъ"  => "-",
        "ь"  => "-",
        "Ъ"  => "-",
        "Ь"  => "-",
        "А"  => "A",
        "Ă"  => "A",
        "Ǎ"  => "A",
        "Ą"  => "A",
        "À"  => "A",
        "Ã"  => "A",
        "Á"  => "A",
        "Æ"  => "A",
        "Â"  => "A",
        "Å"  => "A",
        "Ǻ"  => "A",
        "Ā"  => "A",
        "א"  => "A",
        "Б"  => "B",
        "ב"  => "B",
        "Þ"  => "B",
        "Ĉ"  => "C",
        "Ć"  => "C",
        "Ç"  => "C",
        "Ц"  => "C",
        "צ"  => "C",
        "Ċ"  => "C",
        "Č"  => "C",
        "©"  => "C",
        "ץ"  => "C",
        "Д"  => "D",
        "Ď"  => "D",
        "Đ"  => "D",
        "ד"  => "D",
        "Ð"  => "D",
        "È"  => "E",
        "Ę"  => "E",
        "É"  => "E",
        "Ë"  => "E",
        "Ê"  => "E",
        "Е"  => "E",
        "Ē"  => "E",
        "Ė"  => "E",
        "Ě"  => "E",
        "Ĕ"  => "E",
        "Є"  => "E",
        "Ə"  => "E",
        "ע"  => "E",
        "Ф"  => "F",
        "Ƒ"  => "F",
        "Ğ"  => "G",
        "Ġ"  => "G",
        "Ģ"  => "G",
        "Ĝ"  => "G",
        "Г"  => "G",
        "ג"  => "G",
        "Ґ"  => "G",
        "ח"  => "H",
        "Ħ"  => "H",
        "Х"  => "H",
        "Ĥ"  => "H",
        "ה"  => "H",
        "I"  => "I",
        "Ï"  => "I",
        "Î"  => "I",
        "Í"  => "I",
        "Ì"  => "I",
        "Į"  => "I",
        "Ĭ"  => "I",
        "I"  => "I",
        "И"  => "I",
        "Ĩ"  => "I",
        "Ǐ"  => "I",
        "י"  => "I",
        "Ї"  => "I",
        "Ī"  => "I",
        "І"  => "I",
        "Й"  => "J",
        "Ĵ"  => "J",
        "ĸ"  => "K",
        "כ"  => "K",
        "Ķ"  => "K",
        "К"  => "K",
        "ך"  => "K",
        "Ł"  => "L",
        "Ŀ"  => "L",
        "Л"  => "L",
        "Ļ"  => "L",
        "Ĺ"  => "L",
        "Ľ"  => "L",
        "ל"  => "L",
        "מ"  => "M",
        "М"  => "M",
        "ם"  => "M",
        "Ñ"  => "N",
        "Ń"  => "N",
        "Н"  => "N",
        "Ņ"  => "N",
        "ן"  => "N",
        "Ŋ"  => "N",
        "נ"  => "N",
        "ŉ"  => "N",
        "Ň"  => "N",
        "Ø"  => "O",
        "Ó"  => "O",
        "Ò"  => "O",
        "Ô"  => "O",
        "Õ"  => "O",
        "О"  => "O",
        "Ő"  => "O",
        "Ŏ"  => "O",
        "Ō"  => "O",
        "Ǿ"  => "O",
        "Ǒ"  => "O",
        "Ơ"  => "O",
        "פ"  => "P",
        "ף"  => "P",
        "П"  => "P",
        "ק"  => "Q",
        "Ŕ"  => "R",
        "Ř"  => "R",
        "Ŗ"  => "R",
        "ר"  => "R",
        "Р"  => "R",
        "®"  => "R",
        "Ş"  => "S",
        "Ś"  => "S",
        "Ș"  => "S",
        "Š"  => "S",
        "С"  => "S",
        "Ŝ"  => "S",
        "ס"  => "S",
        "Т"  => "T",
        "Ț"  => "T",
        "ט"  => "T",
        "Ŧ"  => "T",
        "ת"  => "T",
        "Ť"  => "T",
        "Ţ"  => "T",
        "Ù"  => "U",
        "Û"  => "U",
        "Ú"  => "U",
        "Ū"  => "U",
        "У"  => "U",
        "Ũ"  => "U",
        "Ư"  => "U",
        "Ǔ"  => "U",
        "Ų"  => "U",
        "Ŭ"  => "U",
        "Ů"  => "U",
        "Ű"  => "U",
        "Ǖ"  => "U",
        "Ǜ"  => "U",
        "Ǚ"  => "U",
        "Ǘ"  => "U",
        "В"  => "V",
        "ו"  => "V",
        "Ý"  => "Y",
        "Ы"  => "Y",
        "Ŷ"  => "Y",
        "Ÿ"  => "Y",
        "Ź"  => "Z",
        "Ž"  => "Z",
        "Ż"  => "Z",
        "З"  => "Z",
        "ז"  => "Z",
        "а"  => "a",
        "ă"  => "a",
        "ǎ"  => "a",
        "ą"  => "a",
        "à"  => "a",
        "ã"  => "a",
        "á"  => "a",
        "æ"  => "a",
        "â"  => "a",
        "å"  => "a",
        "ǻ"  => "a",
        "ā"  => "a",
        "א"  => "a",
        "б"  => "b",
        "ב"  => "b",
        "þ"  => "b",
        "ĉ"  => "c",
        "ć"  => "c",
        "ç"  => "c",
        "ц"  => "c",
        "צ"  => "c",
        "ċ"  => "c",
        "č"  => "c",
        "©"  => "c",
        "ץ"  => "c",
        "Ч"  => "ch",
        "ч"  => "ch",
        "д"  => "d",
        "ď"  => "d",
        "đ"  => "d",
        "ד"  => "d",
        "ð"  => "d",
        "è"  => "e",
        "ę"  => "e",
        "é"  => "e",
        "ë"  => "e",
        "ê"  => "e",
        "е"  => "e",
        "ē"  => "e",
        "ė"  => "e",
        "ě"  => "e",
        "ĕ"  => "e",
        "є"  => "e",
        "ə"  => "e",
        "ע"  => "e",
        "ф"  => "f",
        "ƒ"  => "f",
        "ğ"  => "g",
        "ġ"  => "g",
        "ģ"  => "g",
        "ĝ"  => "g",
        "г"  => "g",
        "ג"  => "g",
        "ґ"  => "g",
        "ח"  => "h",
        "ħ"  => "h",
        "х"  => "h",
        "ĥ"  => "h",
        "ה"  => "h",
        "i"  => "i",
        "ï"  => "i",
        "î"  => "i",
        "í"  => "i",
        "ì"  => "i",
        "į"  => "i",
        "ĭ"  => "i",
        "ı"  => "i",
        "и"  => "i",
        "ĩ"  => "i",
        "ǐ"  => "i",
        "י"  => "i",
        "ї"  => "i",
        "ī"  => "i",
        "і"  => "i",
        "й"  => "j",
        "Й"  => "j",
        "Ĵ"  => "j",
        "ĵ"  => "j",
        "ĸ"  => "k",
        "כ"  => "k",
        "ķ"  => "k",
        "к"  => "k",
        "ך"  => "k",
        "ł"  => "l",
        "ŀ"  => "l",
        "л"  => "l",
        "ļ"  => "l",
        "ĺ"  => "l",
        "ľ"  => "l",
        "ל"  => "l",
        "מ"  => "m",
        "м"  => "m",
        "ם"  => "m",
        "ñ"  => "n",
        "ń"  => "n",
        "н"  => "n",
        "ņ"  => "n",
        "ן"  => "n",
        "ŋ"  => "n",
        "נ"  => "n",
        "ŉ"  => "n",
        "ň"  => "n",
        "ø"  => "o",
        "ó"  => "o",
        "ò"  => "o",
        "ô"  => "o",
        "õ"  => "o",
        "о"  => "o",
        "ő"  => "o",
        "ŏ"  => "o",
        "ō"  => "o",
        "ǿ"  => "o",
        "ǒ"  => "o",
        "ơ"  => "o",
        "פ"  => "p",
        "ף"  => "p",
        "п"  => "p",
        "ק"  => "q",
        "ŕ"  => "r",
        "ř"  => "r",
        "ŗ"  => "r",
        "ר"  => "r",
        "р"  => "r",
        "®"  => "r",
        "ş"  => "s",
        "ś"  => "s",
        "ș"  => "s",
        "š"  => "s",
        "с"  => "s",
        "ŝ"  => "s",
        "ס"  => "s",
        "т"  => "t",
        "ț"  => "t",
        "ט"  => "t",
        "ŧ"  => "t",
        "ת"  => "t",
        "ť"  => "t",
        "ţ"  => "t",
        "ù"  => "u",
        "û"  => "u",
        "ú"  => "u",
        "ū"  => "u",
        "у"  => "u",
        "ũ"  => "u",
        "ư"  => "u",
        "ǔ"  => "u",
        "ų"  => "u",
        "ŭ"  => "u",
        "ů"  => "u",
        "ű"  => "u",
        "ǖ"  => "u",
        "ǜ"  => "u",
        "ǚ"  => "u",
        "ǘ"  => "u",
        "в"  => "v",
        "ו"  => "v",
        "ý"  => "y",
        "ы"  => "y",
        "ŷ"  => "y",
        "ÿ"  => "y",
        "ź"  => "z",
        "ž"  => "z",
        "ż"  => "z",
        "з"  => "z",
        "ז"  => "z",
        "ſ"  => "z",
        "™"  => "tm",
        "@"  => "at",
        "Ä"  => "ae",
        "Ǽ"  => "ae",
        "ä"  => "ae",
        "æ"  => "ae",
        "ǽ"  => "ae",
        "ĳ"  => "ij",
        "Ĳ"  => "ij",
        "я"  => "ja",
        "Я"  => "ja",
        "Э"  => "je",
        "э"  => "je",
        "ё"  => "jo",
        "Ё"  => "jo",
        "ю"  => "ju",
        "Ю"  => "ju",
        "œ"  => "oe",
        "Œ"  => "oe",
        "ö"  => "oe",
        "Ö"  => "oe",
        "щ"  => "sch",
        "Щ"  => "sch",
        "ш"  => "sh",
        "Ш"  => "sh",
        "ß"  => "ss",
        "Ü"  => "ue",
        "Ж"  => "zh",
        "ж"  => "zh",
        "Ḩ"  => "H",
        "ü"  => "u",
        "`"  => "",
    );
    return strtr($subject, $char_map);
}