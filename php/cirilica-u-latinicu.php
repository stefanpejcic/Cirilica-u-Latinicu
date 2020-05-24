<?php
//setlocale (LC_ALL, 'sr_RS');
setlocale(LC_ALL, "en_US.UTF-8");

$string = 'Ћирилица Караџића Вука, иде Миле лајковачком пругом, ШЂљњЏџ.docx';

$patterns = array();
$patterns[0] = '/А/';
$patterns[1] = '/а/';
$patterns[2] = '/Б/';
$patterns[3] = '/б/';
$patterns[4] = '/Ц/';
$patterns[5] = '/ц/';
$patterns[6] = '/Д/';
$patterns[7] = '/д/';
$patterns[8] = '/Е/';
$patterns[9] = '/е/';
$patterns[10] = '/ф/';
$patterns[11] = '/Ф/';
$patterns[12] = '/Г/';
$patterns[13] = '/г/';
$patterns[14] = '/Х/';
$patterns[15] = '/х/';
$patterns[16] = '/Ј/';
$patterns[17] = '/ј/';
$patterns[18] = '/К/';
$patterns[19] = '/к/';
$patterns[20] = '/Л/';
$patterns[21] = '/л/';
$patterns[22] = '/Ч/';
$patterns[23] = '/ч/';
$patterns[24] = '/Ћ/';
$patterns[25] = '/ћ/';
$patterns[26] = '/Ж/';
$patterns[27] = '/ж/';
$patterns[28] = '/Ш/';
$patterns[29] = '/ш/';
$patterns[30] = '/Р/';
$patterns[31] = '/р/';
$patterns[32] = '/Т/';
$patterns[33] = '/т/';
$patterns[34] = '/З/';
$patterns[35] = '/з/';
$patterns[36] = '/У/';
$patterns[37] = '/у/';
$patterns[38] = '/И/';
$patterns[39] = '/и/';
$patterns[40] = '/О/';
$patterns[41] = '/о/';
$patterns[42] = '/П/';
$patterns[43] = '/п/';
$patterns[44] = '/С/';
$patterns[45] = '/с/';
$patterns[46] = '/В/';
$patterns[47] = '/в/';
$patterns[48] = '/Н/';
$patterns[49] = '/н/';
$patterns[50] = '/М/';
$patterns[51] = '/м/';

$patterns[52] = '/Ђ/';
$patterns[53] = '/ђ/';
$patterns[54] = '/Љ/';
$patterns[55] = '/љ/';
$patterns[56] = '/Њ/';
$patterns[57] = '/њ/';
$patterns[58] = '/Џ/';
$patterns[59] = '/џ/';



$replacements = array();
$replacements[0] = 'A';
$replacements[1] = 'a';
$replacements[2] = 'B';
$replacements[3] = 'b';
$replacements[4] = 'C';
$replacements[5] = 'c';
$replacements[6] = 'D';
$replacements[7] = 'd';
$replacements[8] = 'E';
$replacements[9] = 'e';
$replacements[10] = 'F';
$replacements[11] = 'f';
$replacements[12] = 'G';
$replacements[13] = 'g';
$replacements[14] = 'H';
$replacements[15] = 'h';
$replacements[16] = 'J';
$replacements[17] = 'j';
$replacements[18] = 'K';
$replacements[19] = 'k';
$replacements[20] = 'L';
$replacements[21] = 'l';
$replacements[22] = 'C';
$replacements[23] = 'c';
$replacements[24] = 'C';
$replacements[25] = 'c';
$replacements[26] = 'Z';
$replacements[27] = 'z';
$replacements[28] = 'S';
$replacements[29] = 's';
$replacements[30] = 'R';
$replacements[31] = 'r';
$replacements[32] = 'T';
$replacements[33] = 't';
$replacements[34] = 'Z';
$replacements[35] = 'z';
$replacements[36] = 'U';
$replacements[37] = 'u';
$replacements[38] = 'I';
$replacements[39] = 'i';
$replacements[40] = 'O';
$replacements[41] = 'o';
$replacements[42] = 'P';
$replacements[43] = 'p';
$replacements[44] = 'S';
$replacements[45] = 's';
$replacements[46] = 'V';
$replacements[47] = 'v';
$replacements[48] = 'N';
$replacements[49] = 'n';
$replacements[50] = 'M';
$replacements[51] = 'm';

$replacements[52] = 'Dj';
$replacements[53] = 'dj';
$replacements[54] = 'Lj';
$replacements[55] = 'lj';
$replacements[56] = 'Nj';
$replacements[57] = 'nj';
$replacements[58] = 'Dz';
$replacements[59] = 'dz';

echo preg_replace($patterns, $replacements, $string);

?>