<?php
/**
 * حذف ردیف‌های تکراری یک آرایهٔ چندبعدی بر اساس یک کلید (اولین ردیف نگه داشته می‌شود)
 */
if (!function_exists('unique_multidim_array')) {
    function unique_multidim_array($array, $key)
    {
        $temp_array = array();
        $i = 0;
        $key_array = array();
        foreach ($array as $val) {
            if (!in_array($val[$key], $key_array)) {
                $key_array[$i] = $val[$key];
                $temp_array[$i] = $val;
            }
            $i++;
        }
        return $temp_array;
    }
}

$words_v = [
    ["jp" => "え", "ro" => "e", "me" => "picture", "tr" => "عکس، تصویر"],
    ["jp" => "い", "ro" => "i", "me" => "stomach", "tr" => "شکم"],
    ["jp" => "あい", "ro" => "ai", "me" => "love", "tr" => "عشق"],
    ["jp" => "あお", "ro" => "ao", "me" => "blue", "tr" => "آبی"],
    ["jp" => "あう", "ro" => "au", "me" => "to meet", "tr" => "ملاقات کردن"],
    ["jp" => "あおい", "ro" => "aoi", "me" => "blue", "tr" => "صفت آبی"],
    ["jp" => "いえ", "ro" => "ie", "me" => "house", "tr" => "خانه"],
    ["jp" => "うえ", "ro" => "ue", "me" => "up, above", "tr" => "بالا"],
    ["jp" => "いい", "ro" => "ii", "me" => "good", "tr" => "خوب"],
    ["jp" => "いいえ", "ro" => "iie", "me" => "no", "tr" => "نه"],
    ["jp" => "おい", "ro" => "oi", "me" => "hey", "tr" => "سلام"],
    ["jp" => "おおい", "ro" => "ooi", "me" => "many", "tr" => "زیاد"],
    ["jp" => "おう", "ro" => "ou", "me" => "king", "tr" => "پادشاه"],
    ["jp" => "えい", "ro" => "ei", "me" => "ray", "tr" => "پرتو"],
    ["jp" => "うお", "ro" => "uo", "me" => "fish", "tr" => "ماهی"],
];
array_multisort(array_column($words_v, 'ro'), SORT_ASC, $words_v);

$words_k = [
    ["jp" => "か", "ro" => "ka", "me" => "mosquito", "tr" => "پشه"],
    ["jp" => "かく", "ro" => "kaku", "me" => "to write", "tr" => "نوشتن"],
    ["jp" => "あか", "ro" => "aka", "me" => "red", "tr" => "قرمز"],
    ["jp" => "あかい", "ro" => "akai", "me" => "red", "tr" => "صفت قرمز"],
    ["jp" => "あき", "ro" => "aki", "me" => "automn", "tr" => "پاییز"],
    ["jp" => "かい", "ro" => "kai", "me" => "shellfish", "tr" => "صدف"],
    ["jp" => "あけ", "ro" => "ake", "me" => "open/ dawn", "tr" => "آغاز، سپیده‌دم"],
    ["jp" => "あいおい", "ro" => "aioi", "me" => "coexistence", "tr" => "همزیستی، زندگی مشترک"],
    ["jp" => "いけ", "ro" => "ike", "me" => "pond", "tr" => "برکه"],
    ["jp" => "うけ", "ro" => "uke", "me" => "receiver/acceptance", "tr" => "پذیرش، دریافت"],
    ["jp" => "かお", "ro" => "kao", "me" => "face", "tr" => "صورت"],
    ["jp" => "けいこ", "ro" => "keiko", "me" => "training, practice", "tr" => "تمرین، آموزش"],
    ["jp" => "きおく", "ro" => "kioku", "me" => "memory, storage", "tr" => "حافظه، به خاطر سپردن"],
    ["jp" => "けいあい", "ro" => "keiai", "me" => "respect and affection", "tr" => "احترام و محبت"],
    ["jp" => "こい", "ro" => "koi", "me" => "love", "tr" => "عشق"],
    ["jp" => "くう", "ro" => "kuo", "me" => "eat", "tr" => "خوردن"],
    ["jp" => "こえ", "ro" => "koe", "me" => "voice", "tr" => "صدا"],
    ["jp" => "えき", "ro" => "eki", "me" => "station", "tr" => "ایستگاه"],
    ["jp" => "きあい", "ro" => "kiai", "me" => "shout, yell", "tr" => "فریاد"],
    ["jp" => "おおきい", "ro" => "ookii", "me" => "big", "tr" => "بزرگ"],
    ["jp" => "かげ", "ro" => "kage", "me" => "shadow", "tr" => "سایه"],
    ["jp" => "きく", "ro" => "kiku", "me" => "to listen", "tr" => "گوش کردن"],
    ["jp" => "えいぎ", "ro" => "eigi", "me" => "movie", "tr" => "فیلم"],
    ["jp" => "かくい", "ro" => "kakui", "me" => "great", "tr" => "بزرگ"],

];
array_multisort(array_column($words_k, 'ro'), SORT_ASC, $words_k);

$words_s = [
    ["jp" => "あし", "ro" => "ashi", "me" => "foot/ leg", "tr" => "پا"],
    ["jp" => "あさ", "ro" => "asa", "me" => "morning", "tr" => "صبح"],
    ["jp" => "あせ", "ro" => "ase", "me" => "sweat", "tr" => "عرق"],
    ["jp" => "かさ", "ro" => "kasa", "me" => "umbrella", "tr" => "چتر"],
    ["jp" => "ここ", "ro" => "koko", "me" => "here", "tr" => "اینجا"],
    ["jp" => "そこ", "ro" => "soko", "me" => "there", "tr" => "آنجا"],
    ["jp" => "こし", "ro" => "koshi", "me" => "hip", "tr" => "کمر"],
    ["jp" => "くし", "ro" => "kushi", "me" => "comb", "tr" => "شانه سر"],
    ["jp" => "うし", "ro" => "ushi", "me" => "cow", "tr" => "گاو"],
    ["jp" => "いし", "ro" => "ishi", "me" => "stone", "tr" => "سنگ"],
    ["jp" => "しかくい", "ro" => "shikakui", "me" => "square, rectangle", "tr" => "چهارگوش، مربع"],
    ["jp" => "しお", "ro" => "shio", "me" => "salt", "tr" => "نمک"],
    ["jp" => "うそ", "ro" => "uso", "me" => "lie", "tr" => "دروغ، غلط"],
    ["jp" => "そう", "ro" => "sou", "me" => "yes", "tr" => "صحیح، درست"],
    ["jp" => "さいこう", "ro" => "saikou", "me" => "superb", "tr" => "فوق‌العاده"],
    ["jp" => "さか", "ro" => "saka", "me" => "slope", "tr" => "شیب"],
    ["jp" => "さけ", "ro" => "sake", "me" => "sake", "tr" => "ساکی نوشیدنی الکلی"],
    ["jp" => "しあい", "ro" => "shiai", "me" => "match", "tr" => "مسابقه"],
    ["jp" => "すいか", "ro" => "suika", "me" => "watermelon", "tr" => "هندوانه"],
    ["jp" => "すこし", "ro" => "sukoshi", "me" => "a little", "tr" => "کم، مقدار کمی"],
    ["jp" => "すし", "ro" => "sushi", "me" => "sushi", "tr" => "سوشی"],
    ["jp" => "いす", "ro" => "isu", "me" => "chair", "tr" => "صندلی"],
    ["jp" => "せいこう", "ro" => "seikou", "me" => "success", "tr" => "موفقیت"],
    ["jp" => "せかい", "ro" => "sekai", "me" => "world", "tr" => "جهان"],
    ["jp" => "そうけい", "ro" => "soukei", "me" => "totsl, sum", "tr" => "مجموع، جمع کل"],
    ["jp" => "きそく", "ro" => "kisoku", "me" => "rule, regulation", "tr" => "قانون"],
    ["jp" => "すくい", "ro" => "sukui", "me" => "help, rescure", "tr" => "کمک، نجات"],
    ["jp" => "ず", "ro" => "ju", "me" => "figure, diagram", "tr" => "نمودار"],
    ["jp" => "じこ", "ro" => "jiko", "me" => "accident", "tr" => "تصادف"],
    ["jp" => "すき", "ro" => "suki", "me" => "like", "tr" => "دوست داشتن"],
    ["jp" => "ぞう", "ro" => "jou", "me" => "elephant", "tr" => "فیل"],
    ["jp" => "おかし", "ro" => "okashi", "me" => "candy", "tr" => "شیرینی، شکلات"],
    ["jp" => "さいご", "ro" => "saigo", "me" => "last, final", "tr" => "نهایی"],
    ["jp" => "そうぞう", "ro" => "soujou", "me" => "imagination", "tr" => "تصور"],
];
array_multisort(array_column($words_s, 'ro'), SORT_ASC, $words_s);

$words_t = [
    ["jp" => "つなみ", "ro" => "tsunami", "me" => "sunami", "tr" => "سونامی"],
    ["jp" => "ちさい", "ro" => "chisai", "me" => "small", "tr" => "کوچک"],
    ["jp" => "かっこい", "ro" => "kakkoi", "me" => "cool", "tr" => "سرد"],
    ["jp" => "かた", "ro" => "kata", "me" => "shoulder", "tr" => "شانه"],
    ["jp" => "したがって", "ro" => "shitagatte", "me" => "therefore", "tr" => "بنابراین"],
    ["jp" => "て", "ro" => "te", "me" => "hand", "tr" => "دست"],
    ["jp" => "くつ", "ro" => "kutsu", "me" => "shoes", "tr" => "کفش"],
    ["jp" => "ちず", "ro" => "chizu", "me" => "map", "tr" => "نقشه"],
    ["jp" => "でし", "ro" => "deshi", "me" => "apprentice", "tr" => "شاگرد، کارآموز"],
    ["jp" => "たて", "ro" => "tate", "me" => "vertical", "tr" => "عمودی، ایستاده"],
    ["jp" => "たつ", "ro" => "tatsu", "me" => "to stand", "tr" => "ایستادن"],
    ["jp" => "とおい", "ro" => "tooi", "me" => "far", "tr" => "دور"],
    ["jp" => "つづく", "ro" => "tsudjuku", "me" => "to continue", "tr" => "ادامه داشتن"],
    ["jp" => "どち", "ro" => "docgi", "me" => "which", "tr" => "کدام"],
    ["jp" => "だいがく", "ro" => "daigaku", "me" => "university", "tr" => "دانشگاه"],
    ["jp" => "あさって", "ro" => "asatte", "me" => "the day after tomorrow", "tr" => "پس فردا"],
    ["jp" => "あさて", "ro" => "asate", "me" => "tomorrow", "tr" => "فردا"],
    ["jp" => "おちつく", "ro" => "ochitsuku", "me" => "to calm down", "tr" => "آرامش داشتن"],

];
array_multisort(array_column($words_t, 'ro'), SORT_ASC, $words_t);

$words_n = [
    ["jp" => "ねこ", "ro" => "neko", "me" => "cat", "tr" => "گربه"],
    ["jp" => "なに", "ro" => "nani", "me" => "what", "tr" => "چه؟"],
    ["jp" => "いぬ", "ro" => "inu", "me" => "dog", "tr" => "سگ"],
    ["jp" => "にじ", "ro" => "niji", "me" => "rainbow", "tr" => "رنگین کمان"],
    ["jp" => "おかね", "ro" => "okane", "me" => "money", "tr" => "پول"],
    ["jp" => "せなか", "ro" => "senaka", "me" => "back", "tr" => "پشت"],
    ["jp" => "おねがい", "ro" => "onegai", "me" => "please", "tr" => "لطفأ"],

];
array_multisort(array_column($words_n, 'ro'), SORT_ASC, $words_n);

$words_h = [
    ["jp" => "ひ", "ro" => "hi", "me" => "fire", "tr" => "آتش"],
    ["jp" => "は", "ro" => "ha", "me" => "teeth", "tr" => "دندان"],
    ["jp" => "はな", "ro" => "hana", "me" => "nose, flower", "tr" => "بینی، گل"],
    ["jp" => "ひざ", "ro" => "hiza", "me" => "knee", "tr" => "زانو"],
    ["jp" => "はし", "ro" => "hashi", "me" => "chopsticks, bridge", "tr" => "چاپستیک، پل"],
    ["jp" => "はなび", "ro" => "hanabi", "me" => "fireworks", "tr" => "آتش بازی"],
    ["jp" => "ふくざつ", "ro" => "hukuzatsu", "me" => "complex", "tr" => "پیچیده"],
    ["jp" => "ひきだし", "ro" => "hikidashi", "me" => "drawer", "tr" => "کشو"],
    ["jp" => "けっぺき", "ro" => "keppeki", "me" => "perfectionist", "tr" => "کمالگرا"],
];
array_multisort(array_column($words_h, 'ro'), SORT_ASC, $words_h);

$words_m = [
    ["jp" => "まち", "ro" => "machi", "me" => "town, city", "tr" => "شهر"],
    ["jp" => "あめ", "ro" => "ame", "me" => "rain, candy", "tr" => "باران، آبنبات"],
    ["jp" => "め", "ro" => "me", "me" => "eye", "tr" => "چشم"],
    ["jp" => "あたま", "ro" => "atama", "me" => "head", "tr" => "سر"],
    ["jp" => "きもの", "ro" => "kimono", "me" => "Kimono", "tr" => "کیمونو"],
    ["jp" => "ためいき", "ro" => "tameiki", "me" => "sigh", "tr" => "آه"],
    ["jp" => "まいにち", "ro" => "mainichi", "me" => "every day", "tr" => "هرروز"],
    ["jp" => "むずかしい", "ro" => "mujukashi", "me" => "difficult", "tr" => "سخت"],

];
array_multisort(array_column($words_m, 'ro'), SORT_ASC, $words_m);

$words_r = [
    ["jp" => "さる", "ro" => "saru", "me" => "monkey", "tr" => "میمون"],
    ["jp" => "はれ", "ro" => "hare", "me" => "sunny, clear weather", "tr" => "صاف و آفتابی"],
    ["jp" => "らく", "ro" => "raku", "me" => "comfortable", "tr" => "راحت"],
    ["jp" => "おふろ", "ro" => "ohuro", "me" => "bath", "tr" => "حمام"],
    ["jp" => "くすり", "ro" => "kusuri", "me" => "medicine", "tr" => "دارو"],
    ["jp" => "おにぎり", "ro" => "onigiri", "me" => "Onigiri", "tr" => "یک ظرف ژاپنی"],

];
array_multisort(array_column($words_r, 'ro'), SORT_ASC, $words_r);

$words_y = [
    ["jp" => "ゆめ", "ro" => "yume", "me" => "dream", "tr" => "رؤیا"],
    ["jp" => "やま", "ro" => "yama", "me" => "mountain", "tr" => "کوه"],
    ["jp" => "やすい", "ro" => "yasui", "me" => "cheap", "tr" => "ارزان"],
    ["jp" => "りょうり", "ro" => "ryouri", "me" => "cooking", "tr" => "پختن"],
    ["jp" => "かいしゃ", "ro" => "kaishya", "me" => "company", "tr" => "پختن"],
    ["jp" => "じゅうどう", "ro" => "jyuudou", "me" => "Judo", "tr" => "جودو"],
    ["jp" => "しゅくだい", "ro" => "shyukudai", "me" => "homework", "tr" => "تکلیف"],
    ["jp" => "びょういん", "ro" => "byouin", "me" => "hospital", "tr" => "بیمارستان"],

];
array_multisort(array_column($words_y, 'ro'), SORT_ASC, $words_y);

$words_w = [
    ["jp" => "じしん", "ro" => "jishin", "me" => "earthquake", "tr" => "بیمارستان"],
    ["jp" => "あんしん", "ro" => "anshin", "me" => "relief", "tr" => "آرامش خاطر"],
    ["jp" => "じかん", "ro" => "jikan", "me" => "time", "tr" => "زمان"],
];
array_multisort(array_column($words_w, 'ro'), SORT_ASC, $words_w);

$others = [
    ["jp" => "たんじょうび", "ro" => "tanjyoubi", "me" => "birthday", "tr" => "تولد"],
    ["jp" => "ふしぎ", "ro" => "hushigi", "me" => "strange", "tr" => "غریبه"],
    ["jp" => "かわ", "ro" => "kawa", "me" => "river", "tr" => "رودخانه"],
    ["jp" => "えん", "ro" => "en", "me" => "circle", "tr" => "ین، دایره"],
    ["jp" => "わたし", "ro" => "watashi", "me" => "I, me", "tr" => "من"],
    ["jp" => "おんがく", "ro" => "ongaku", "me" => "music", "tr" => "موزیک"],
    ["jp" => "しんぶん", "ro" => "shinbun", "me" => "newspaper", "tr" => "روزنامه"],
    ["jp" => "おかあさん", "ro" => "okaasan", "me" => "mother", "tr" => "مادر"],
    ["jp" => "はは", "ro" => "haha", "me" => "mother", "tr" => "مادر"],
    ["jp" => "みず", "ro" => "mizu", "me" => "water", "tr" => "آب"],
    ["jp" => "かに", "ro" => "kani", "me" => "crab", "tr" => "خرچنگ"],
    ["jp" => "つの", "ro" => "tsuno", "me" => "horn", "tr" => "شاخ"],
    ["jp" => "ふえ", "ro" => "hue", "me" => "flute", "tr" => "فلوت"],
    ["jp" => "へい", "ro" => "hei", "me" => "wall", "tr" => "دیوار"],
    ["jp" => "ほし", "ro" => "hoshi", "me" => "star", "tr" => "ستاره"],
    ["jp" => "くち", "ro" => "kuchi", "me" => "mouth", "tr" => "دهان"],
    ["jp" => "きせつ", "ro" => "kisetsu", "me" => "season", "tr" => "فصل"],
    ["jp" => "ちかてつ", "ro" => "chikatetsu", "me" => "subway", "tr" => "مترو، مسیرزیر"],
    ["jp" => "おととい", "ro" => "ototoi", "me" => "the day before yesterday", "tr" => "پریروز"],
    ["jp" => "なつ", "ro" => "natsu", "me" => "summer", "tr" => "تابستان"],
    ["jp" => "くに", "ro" => "kuni", "me" => "country", "tr" => "کشور"],
    ["jp" => "はた", "ro" => "hata", "me" => "falg", "tr" => "پرچم"],
    ["jp" => "ふね", "ro" => "hune", "me" => "boat, ship", "tr" => "قایق، کشتی"],
    ["jp" => "ほね", "ro" => "hone", "me" => "bone", "tr" => "استخوان"],
    ["jp" => "うま", "ro" => "uma", "me" => "horse", "tr" => "اسب"],
    ["jp" => "みみ", "ro" => "mimi", "me" => "ear", "tr" => "گوش"],
    ["jp" => "むし", "ro" => "mushi", "me" => "insect", "tr" => "حشره"],
    ["jp" => "くも", "ro" => "kumo", "me" => "cloud", "tr" => "ابر"],
    ["jp" => "ゆき", "ro" => "yuki", "me" => "snow", "tr" => "برف"],
    ["jp" => "よる", "ro" => "yoru", "me" => "evening, night", "tr" => "عصر، شب"],
    ["jp" => "さくら", "ro" => "sakura", "me" => "cherry blossoms", "tr" => "شکوفه گیلاس"],
    ["jp" => "はかり", "ro" => "hakari", "me" => "scale", "tr" => "ترازو"],
    ["jp" => "きれ", "ro" => "kire", "me" => "cloth", "tr" => "پارچه"],
    ["jp" => "しろ", "ro" => "shiro", "me" => "white, castle", "tr" => "سفید، قصر"],
    ["jp" => "せんす", "ro" => "sensu", "me" => "folding fan", "tr" => "بادبزن"],
    ["jp" => "きんこ", "ro" => "kinko", "me" => "safe", "tr" => "گاوصندوق"],
    ["jp" => "うみ", "ro" => "umi", "me" => "sea", "tr" => "دریا"],
    ["jp" => "かいもの", "ro" => "kaimono", "me" => "shopping", "tr" => "خرید"],
    ["jp" => "まくら", "ro" => "makura", "me" => "pillow", "tr" => "بالش"],
    ["jp" => "おつり", "ro" => "otsuri", "me" => "change", "tr" => "پول خرد"],
    ["jp" => "こころ", "ro" => "kokoro", "me" => "heart", "tr" => "قلب"],
    ["jp" => "にわ", "ro" => "niwa", "me" => "garden", "tr" => "باغ"],
    ["jp" => "らいねん", "ro" => "rainen", "me" => "next year", "tr" => "سال بعد"],
    ["jp" => "もも", "ro" => "momo", "me" => "peach", "tr" => "هلو"],
    ["jp" => "ほんや", "ro" => "honya", "me" => "book store", "tr" => "کتابفروشی"],
    ["jp" => "くい", "ro" => "kui", "me" => "stake", "tr" => "تیر چوبی"],
    ["jp" => "がか", "ro" => "gaka", "me" => "painter", "tr" => "نقاش"],
    ["jp" => "めがね", "ro" => "megane", "me" => "glasses", "tr" => "عینک"],
    ["jp" => "ぎんか", "ro" => "ginka", "me" => "silver coin", "tr" => "سکه نقره"],
    ["jp" => "かぎ", "ro" => "kagi", "me" => "key", "tr" => "کلید"],
    ["jp" => "ぐんじん", "ro" => "gunjin", "me" => "soldier", "tr" => "سرباز"],
    ["jp" => "かぐ", "ro" => "kagu", "me" => "furniture", "tr" => "اثاثیه"],
    ["jp" => "げた", "ro" => "geta", "me" => "Geta", "tr" => "صندل ژاپنی"],
    ["jp" => "わなげ", "ro" => "wanage", "me" => "quoits", "tr" => "بازی پرتاب حلقه"],
    ["jp" => "ごはん", "ro" => "gohan", "me" => "rice", "tr" => "برنج"],
    ["jp" => "んご", "ro" => "ngo", "me" => "apple", "tr" => "سیب"],
    ["jp" => "はいざら", "ro" => "haizara", "me" => "ashtray", "tr" => "زیرسیگاری"],
    ["jp" => "ふじさん", "ro" => "fujisan", "me" => "Fuji", "tr" => "کوه فوجی"],
    ["jp" => "かぜ", "ro" => "kaze", "me" => "wind", "tr" => "باد"],
    ["jp" => "すいぞくかん", "ro" => "suizokukan", "me" => "aquarium", "tr" => "آکواریوم"],
    ["jp" => "がいこくじん", "ro" => "gaikokujin", "me" => "foreigner", "tr" => "خارجی"],
    ["jp" => "かがく", "ro" => "kagaku", "me" => "science, chemistry", "tr" => "علم، شیمی"],
    ["jp" => "ぎんこう", "ro" => "ginkou", "me" => "bank", "tr" => "بانک"],
    ["jp" => "みぎ", "ro" => "migi", "me" => "right", "tr" => "راست"],
    ["jp" => "めぐすり", "ro" => "megusuri", "me" => "eye drop", "tr" => "قطره چشم"],
    ["jp" => "げんいん", "ro" => "genin", "me" => "source, cause, origin", "tr" => "منشأ"],
    ["jp" => "ひげ", "ro" => "hige", "me" => "beard", "tr" => "ریش"],
    ["jp" => "ごご", "ro" => "gogo", "me" => "afternoon, PM", "tr" => "عصر، بعد از ظهر"],
    ["jp" => "かざん", "ro" => "kazan", "me" => "volcano", "tr" => "آتشفشان"],
    ["jp" => "ごぜん", "ro" => "gozen", "me" => "morning, AM", "tr" => "صبح، قبل از ظهر"],
    ["jp" => "かぞく", "ro" => "kazoku", "me" => "family", "tr" => "خانواده"],
    ["jp" => "くだもの", "ro" => "kudamono", "me" => "fruit", "tr" => "میوه"],
    ["jp" => "でんわ", "ro" => "denwa", "me" => "telephone", "tr" => "تلفن"],
    ["jp" => "まど", "ro" => "mado", "me" => "window", "tr" => "پنجره"],
    ["jp" => "かばん", "ro" => "kaban", "me" => "bag", "tr" => "کیف، کیسه"],
    ["jp" => "えび", "ro" => "ebi", "me" => "shrimp", "tr" => "میگو"],
    ["jp" => "かべ", "ro" => "kabe", "me" => "wall", "tr" => "دیوار"],
    ["jp" => "おぼん", "ro" => "obon", "me" => "tray", "tr" => "سینی"],
    ["jp" => "でんぱ", "ro" => "denpa", "me" => "radio wave", "tr" => "امواج رادیویی"],
    ["jp" => "えんびつ", "ro" => "enbitsu", "me" => "pencil", "tr" => "مداد"],
    ["jp" => "てんぷら", "ro" => "tenpura", "me" => "Tenpura", "tr" => "ماهی سبزی سرخ شده"],
    ["jp" => "さんぽ", "ro" => "sanpo", "me" => "walk", "tr" => "پیاده روی"],
    ["jp" => "ひだり", "ro" => "hidari", "me" => "left", "tr" => "چپ"],
    ["jp" => "えだ", "ro" => "eda", "me" => "branch", "tr" => "شعبه"],
    ["jp" => "うで", "ro" => "ude", "me" => "arm", "tr" => "بازو"],
    ["jp" => "でんき", "ro" => "denki", "me" => "electricity", "tr" => "برق"],
    ["jp" => "おどり", "ro" => "odori", "me" => "dance", "tr" => "رقص"],
    ["jp" => "こども", "ro" => "kodomo", "me" => "child", "tr" => "کودک"],
    ["jp" => "たばこ", "ro" => "tabako", "me" => "tobacco, cigarette", "tr" => "سیگار، تنباکو"],
    ["jp" => "ゆび", "ro" => "yubi", "me" => "finger", "tr" => "انگشت"],
    ["jp" => "へび", "ro" => "hebi", "me" => "snake", "tr" => "مار"],
    ["jp" => "なべ", "ro" => "nabe", "me" => "pan, pot", "tr" => "تابه"],
    ["jp" => "ぶんか", "ro" => "bunka", "me" => "culture", "tr" => "فرهنگ"],
    ["jp" => "ぼいん", "ro" => "boin", "me" => "vowel", "tr" => "صدادار"],
    ["jp" => "れんしゅう", "ro" => "renshyuu", "me" => "practice", "tr" => "تمرین"],
    ["jp" => "うた", "ro" => "uta", "me" => "song", "tr" => "آهنگ"],
    ["jp" => "まめ", "ro" => "mame", "me" => "beans", "tr" => "لوبیا"],
    ["jp" => "やね", "ro" => "yane", "me" => "roof", "tr" => "سقف"],
    ["jp" => "へや", "ro" => "heya", "me" => "room", "tr" => "اتاق"],
    ["jp" => "つくね", "ro" => "tsukune", "me" => "Tsukune", "tr" => "مرغ یا ماهی با تخم مرغ"],
    ["jp" => "つな", "ro" => "tsuna", "me" => "rope", "tr" => "طناب"],
    ["jp" => "すな", "ro" => "suna", "me" => "sand", "tr" => "شن"],
    ["jp" => "ちか", "ro" => "chika", "me" => "underground", "tr" => "زیرزمین"],
    ["jp" => "しか", "ro" => "shika", "me" => "deer", "tr" => "گوزن"],
    ["jp" => "かみそり", "ro" => "kamisori", "me" => "blade", "tr" => "تیغ"],
    ["jp" => "かな", "ro" => "kana", "me" => "Jp syllabaries", "tr" => "حروف ژاپنی"],
    ["jp" => "かんな", "ro" => "kanna", "me" => "flat surface", "tr" => "سطح صاف"],
    ["jp" => "うち", "ro" => "uchi", "me" => "inside, hand strike", "tr" => "داخل، ضربه دست"],
    ["jp" => "きん", "ro" => "kin", "me" => "gold", "tr" => "طلا"],
    ["jp" => "かき", "ro" => "kaki", "me" => "persimmon", "tr" => "خرمالو"],
    ["jp" => "ぎん", "ro" => "gin", "me" => "silver", "tr" => "نقره"],
    ["jp" => "らっかさん", "ro" => "rakkasan", "me" => "parachute", "tr" => "چترنجات"],
    ["jp" => "がっき", "ro" => "gakki", "me" => "instrument", "tr" => "آلت موسیقی"],
    ["jp" => "せっけん", "ro" => "sekken", "me" => "soap", "tr" => "صابون"],
    ["jp" => "けっこん", "ro" => "kekkon", "me" => "marriage", "tr" => "ازدواج"],
    ["jp" => "ざっし", "ro" => "zasshi", "me" => "magazine", "tr" => "مجله"],
    ["jp" => "きって", "ro" => "kitte", "me" => "stamp", "tr" => "تمبر"],
    ["jp" => "ほっぺた", "ro" => "hoppeta", "me" => "cheek", "tr" => "گونه"],
    ["jp" => "らっぱ", "ro" => "rappa", "me" => "trumpet", "tr" => "ترومپت، شیپور"],
    ["jp" => "きっぷ", "ro" => "kippu", "me" => "ticket", "tr" => "بلیط"],
    ["jp" => "いっかい", "ro" => "ikkai", "me" => "first floor", "tr" => "طبقه اول"],
    ["jp" => "さっか", "ro" => "sakka", "me" => "writer, novelist", "tr" => "نویسنده"],
    ["jp" => "にっき", "ro" => "nikki", "me" => "diary", "tr" => "دفتر روزانه"],
    ["jp" => "はっけん", "ro" => "hakken", "me" => "discovery", "tr" => "اکتشاف"],
    ["jp" => "いっさつ", "ro" => "issatsu", "me" => "one book", "tr" => "یک کتاب"],
    ["jp" => "はっせん", "ro" => "hassen", "me" => "8000", "tr" => "8000"],
    ["jp" => "けっせき", "ro" => "kesseki", "me" => "absence", "tr" => "غیبت"],
    ["jp" => "ねったい", "ro" => "nettai", "me" => "tropics", "tr" => "گرمسیری"],
    ["jp" => "こぎって", "ro" => "kogitte", "me" => "cheque", "tr" => "چک"],
    ["jp" => "いっぽん", "ro" => "ippon", "me" => "one point", "tr" => "یک امتیاز"],
    ["jp" => "いっぷん", "ro" => "ippun", "me" => "one minute", "tr" => "یک دقیقه"],
    ["jp" => "ろっぷん", "ro" => "roppun", "me" => "six minute", "tr" => "یک دقیقه"],
    ["jp" => "ろく", "ro" => "roku", "me" => "six", "tr" => "شش"],
    ["jp" => "しっぱい", "ro" => "shippai", "me" => "failure", "tr" => "نقص"],
    ["jp" => "せいねんがっぴ", "ro" => "seinengappi", "me" => "birth date", "tr" => "تاریخ تولد"],
    ["jp" => "おとうさん", "ro" => "otousan", "me" => "father", "tr" => "پدر"],
    ["jp" => "ちち", "ro" => "chichi", "me" => "father", "tr" => "پدر"],
    ["jp" => "おねえさん", "ro" => "oneesan", "me" => "older sister", "tr" => "خواهر بزرگتر"],
    ["jp" => "おにいさん", "ro" => "oniisan", "me" => "older brother", "tr" => "برادر بزرگتر"],
    ["jp" => "あにさん", "ro" => "anisan", "me" => "older brother", "tr" => "برادر بزرگتر"],
    ["jp" => "あに", "ro" => "ani", "me" => "brother", "tr" => "برادر"],
    ["jp" => "いもうとさん", "ro" => "imoutosan", "me" => "younger sister", "tr" => "خواهر کوچکتر"],
    ["jp" => "いもうと", "ro" => "imouto", "me" => "younger sister", "tr" => "خواهر کوچکتر"],
    ["jp" => "おとうとさん", "ro" => "otoutosan", "me" => "younger brother", "tr" => "برادر کوچکتر"],
    ["jp" => "おとうと", "ro" => "otouto", "me" => "younger brother", "tr" => "برادر کوچکتر"],
    ["jp" => "おばあさん", "ro" => "obaasan", "me" => "grand mother", "tr" => "مادر بزرگ"],
    ["jp" => "おじいさん", "ro" => "ojiisan", "me" => "grand father", "tr" => "پدر بزرگ"],
    ["jp" => "いとこ", "ro" => "itoko", "me" => "cousin", "tr" => "پسر عمو"],
    ["jp" => "おじさん", "ro" => "ojisan", "me" => "uncle", "tr" => "عمو"],
    ["jp" => "おばさん", "ro" => "obasan", "me" => "aunt", "tr" => "عمه"],
    ["jp" => "きょうだい", "ro" => "kyoudai", "me" => "brothers", "tr" => "برادران"],
    ["jp" => "しまい", "ro" => "shimai", "me" => "brothers", "tr" => "برادران"],
    ["jp" => "おや", "ro" => "oya", "me" => "parents", "tr" => "والدین"],
    ["jp" => "ふうとう", "ro" => "fuutou", "me" => "envelope", "tr" => "پاکت نامه"],
    ["jp" => "とけい", "ro" => "tokei", "me" => "clock", "tr" => "ساعت"],
    ["jp" => "ぼうし", "ro" => "boushi", "me" => "hat", "tr" => "کلاه"],
    ["jp" => "れいぞうこ", "ro" => "reizouko", "me" => "refrigerator", "tr" => "یخچال"],
    ["jp" => "こおり", "ro" => "koori", "me" => "ice", "tr" => "یخ"],
    ["jp" => "おおかみ", "ro" => "ookami", "me" => "wolf", "tr" => "گرگ"],
    ["jp" => "ひこうき", "ro" => "hikouki", "me" => "airplane", "tr" => "هواپیما"],
    ["jp" => "えいご", "ro" => "eigo", "me" => "english", "tr" => "انگلیسی"],
    ["jp" => "けいざい", "ro" => "keizai", "me" => "economy", "tr" => "اقتصادی"],
    ["jp" => "がくせい", "ro" => "gakusei", "me" => "student", "tr" => "دانش آموز"],
    ["jp" => "へいわ", "ro" => "heiwa", "me" => "peace", "tr" => "صلح"],
    ["jp" => "めいし", "ro" => "meishi", "me" => "noun", "tr" => "نام"],
    ["jp" => "くうき", "ro" => "kuuki", "me" => "air", "tr" => "هوا"],
    ["jp" => "けうつう", "ro" => "keutsuu", "me" => "transportation", "tr" => "وسیله نقلیه"],
    ["jp" => "つうしん", "ro" => "tsuushin", "me" => "correspondence", "tr" => "ارتباطات"],
    ["jp" => "ばんごう", "ro" => "bangou", "me" => "number", "tr" => "شماره"],
    ["jp" => "ぞう", "ro" => "zou", "me" => "elephant", "tr" => "فیل"],
    ["jp" => "ぼうえき", "ro" => "boueki", "me" => "trade", "tr" => "تجارت"],
    ["jp" => "ぶんぽう", "ro" => "bunpou", "me" => "grammar", "tr" => "گرامر"],
    ["jp" => "げつようび", "ro" => "getsuyoubi", "me" => "monday", "tr" => "دوشنبه"],
    ["jp" => "とおか", "ro" => "tooka", "me" => "10 days", "tr" => "ده روز"],
    ["jp" => "きゃく", "ro" => "kyaku", "me" => "guest", "tr" => "میهمان"],
    ["jp" => "ちきゅう", "ro" => "chikyuu", "me" => "earth", "tr" => "زمین"],
    ["jp" => "すいぎゅう", "ro" => "suigyuu", "me" => "buffalo", "tr" => "بوفالو"],
    ["jp" => "けんびきょう", "ro" => "kenbikyou", "me" => "laboratory, microscope", "tr" => "لابراتوار، میکروسکوپ"],
    ["jp" => "きんぎょ", "ro" => "kingyo", "me" => "goldfish", "tr" => "ماهی گلدفیش"],
    ["jp" => "にんぎょう", "ro" => "ningyou", "me" => "doll", "tr" => "عروسک"],
    ["jp" => "いしゃ", "ro" => "ishya", "me" => "doctor", "tr" => "دکتر"],
    ["jp" => "じてんしゃ", "ro" => "jitenshya", "me" => "bicycle", "tr" => "دوچرخه"],
    ["jp" => "はつどんしょ", "ro" => "hatsudonshyo", "me" => "power station", "tr" => "ایستگاه قدرت"],
    ["jp" => "じんじゃ", "ro" => "jinjya", "me" => "shrine", "tr" => "مقبره"],
    ["jp" => "しょうぼう", "ro" => "shyoubou", "me" => "fire", "tr" => "آتش"],
    ["jp" => "じどうしゃ", "ro" => "jidoushya", "me" => "car", "tr" => "ماشین"],
    ["jp" => "しょうぼうじどうしゃ", "ro" => "shyouboujidoushya", "me" => "fire engine", "tr" => "ماشین آتشنشانی"],
    ["jp" => "きゅうきゅうしゃ", "ro" => "kyuukyuushya", "me" => "ambulance", "tr" => "آمبولانس"],
    ["jp" => "げっきゅう", "ro" => "gekkyuu", "me" => "monthly salari", "tr" => "درآمد ماهیانه"],
    ["jp" => "きょねん", "ro" => "kyonen", "me" => "last year", "tr" => "سال آخر"],
    ["jp" => "べんきょう", "ro" => "benkyou", "me" => "study", "tr" => "مطالعه"],
    ["jp" => "ゆびんきょく", "ro" => "yubinkyoku", "me" => "post office", "tr" => "اداره پست"],
    ["jp" => "こうぎょう", "ro" => "kougyou", "me" => "industry", "tr" => "صنعت"],
    ["jp" => "のうぎょう", "ro" => "nougyou", "me" => "agriculture, business", "tr" => "کشاورزی"],
    ["jp" => "かいしゃ", "ro" => "kaishya", "me" => "company", "tr" => "شرکت"],
    ["jp" => "うんてんしゅ", "ro" => "untenshyu", "me" => "driver", "tr" => "راننده"],
    ["jp" => "じゅうにがつ", "ro" => "jyuunigatsu", "me" => "december", "tr" => "دسامبر"],
    ["jp" => "じゅうしょ", "ro" => "jyuushyo", "me" => "address", "tr" => "آدرس"],
    ["jp" => "びじゅつかん", "ro" => "bijyutsukan", "me" => "address", "tr" => "آدرس"],
    ["jp" => "じしよ", "ro" => "jishiyo", "me" => "dictionary", "tr" => "دیکشنری"],
    ["jp" => "しょうがくきん", "ro" => "shyougakukin", "me" => "scholarship", "tr" => "بورسیه تحصیلی"],
    ["jp" => "こうじょう", "ro" => "koujyou", "me" => "factory", "tr" => "کارخانه"],
    ["jp" => "こうちゃ", "ro" => "kouchya", "me" => "black tea", "tr" => "چای سیاه"],
    ["jp" => "かぼちゃ", "ro" => "kabochya", "me" => "squash, pumpkin", "tr" => "کدو"],
    ["jp" => "ちゅうしゃ", "ro" => "chyuushya", "me" => "injection", "tr" => "تزریق"],
    ["jp" => "ちょっかく", "ro" => "chyokkaku", "me" => "right angle", "tr" => "زاویه راست"],
    ["jp" => "ちょうちん", "ro" => "chyouchin", "me" => "paper lantern", "tr" => "فانوس کاغذی"],
    ["jp" => "ぎゅうにゅう", "ro" => "gyuunyuu", "me" => "milk", "tr" => "شیر"],
    ["jp" => "みゃく", "ro" => "myaku", "me" => "pulse", "tr" => "نبض"],
    ["jp" => "ひゃくえん", "ro" => "hyakuen", "me" => "100 yen", "tr" => "100 ین"],
    ["jp" => "りょこう", "ro" => "ryokou", "me" => "trip, travel", "tr" => "مسافرت"],
    ["jp" => "ひょうざん", "ro" => "hyouzan", "me" => "ice-berg", "tr" => "جزیره یخی"],
    ["jp" => "りゅう", "ro" => "ryuu", "me" => "dragon", "tr" => "اژدها"],
    ["jp" => "うちゅう", "ro" => "uchyuu", "me" => "universe", "tr" => "کیهان"],
    ["jp" => "ちゅうがっこう", "ro" => "chyuugakkou", "me" => "junior high school", "tr" => "دوره متوسطه اول"],
    ["jp" => "こうちょう", "ro" => "kouchyou", "me" => "principal", "tr" => "مدیر مدرسه"],
    ["jp" => "ゆにゅう", "ro" => "yunyuu", "me" => "import", "tr" => "واردات"],
    ["jp" => "にひゃく", "ro" => "nihyaku", "me" => "200", "tr" => "200"],
    ["jp" => "さんびゃく", "ro" => "sanbyaku", "me" => "300", "tr" => "300"],
    ["jp" => "はっぴゃく", "ro" => "happyaku", "me" => "800", "tr" => "800"],
    ["jp" => "いちびょう", "ro" => "ichibyou", "me" => "one second", "tr" => "یک ثانیه"],
    ["jp" => "びょうき", "ro" => "byouki", "me" => "illness", "tr" => "بیماری"],
    ["jp" => "みょうじ", "ro" => "myouji", "me" => "last name", "tr" => "نام خانوادگی"],
    ["jp" => "りょうしゅうしょ", "ro" => "ryoushyuushyo", "me" => "reciept", "tr" => "رسید"],
    ["jp" => "りゅうがくせい", "ro" => "ryuugakusei", "me" => "foreign student", "tr" => "دانش آموز خارجی"],
    ["jp" => "だいとうりょう", "ro" => "daitouryou", "me" => "president", "tr" => "رئیس جمهور"],
    ["jp" => "けっか", "ro" => "kekka", "me" => "result", "tr" => "نتیجه"],
    ["jp" => "はつおん", "ro" => "hatsuon", "me" => "pronounciation", "tr" => "تلفظ"],
];

/* واژه‌های بخش «سایر» بر پایهٔ نخستین کانا به بخش همان حرف منتقل می‌شوند */
$section_kana_map = [
    'words_v' => 'あいうえお',
    'words_k' => 'かきくけこがぎぐげご',
    'words_s' => 'さしすせそざじずぜぞ',
    'words_t' => 'たちつてとだぢづでど',
    'words_n' => 'なにぬねの',
    'words_h' => 'はひふへほばびぶべぼぱぴぷぺぽ',
    'words_m' => 'まみむめも',
    'words_r' => 'らりるれろ',
    'words_y' => 'やゆよ',
    'words_w' => 'わをん',
];
$known_jp = [];
foreach (array_keys($section_kana_map) as $section_var) {
    foreach (${$section_var} as $known_word) {
        $known_jp[$known_word['jp']] = true;
    }
}
unset($known_word);
foreach ($others as $other_word) {
    if (isset($known_jp[$other_word['jp']]) || !preg_match('/^./u', $other_word['jp'], $first_kana)) {
        continue;
    }
    foreach ($section_kana_map as $section_var => $section_kana) {
        if (strpos($section_kana, $first_kana[0]) !== false) {
            ${$section_var}[] = $other_word;
            $known_jp[$other_word['jp']] = true;
            break;
        }
    }
}
unset($other_word, $first_kana);
foreach (array_keys($section_kana_map) as $section_var) {
    array_multisort(array_column(${$section_var}, 'ro'), SORT_ASC, ${$section_var});
}
$all_arrays = array_merge($words_v, $words_k, $words_s, $words_t, $words_n, $words_h, $words_m, $words_r, $words_y, $words_w, $others);
$words = unique_multidim_array($all_arrays, 'jp');
array_multisort(array_column($words, 'ro'), SORT_ASC, $words);
