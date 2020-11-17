public static String transliterate(String message){
    char[] abcCyr =   {' ','а', 'б', 'в', 'г', 'д', 'ђ', 'е', 'ж', 'з', 'и', 'ј', 'к', 'л', 'љ', 'м', 'н', 'њ', 'о', 'п', 'р', 'с', 'т', 'ћ', 'у', 'ф', 'х', 'ц', 'ч', 'џ', 'ш', 'А', 'Б', 'В', 'Г', 'Д', 'Ђ', 'Е', 'Ж', 'З', 'И', 'Ј', 'К', 'Л', 'Љ', 'М', 'Н', 'Њ', 'О', 'П', 'Р', 'С', 'Т', 'Ћ', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Џ', 'Ш'};
    String[] abcLat = {" ","a", "b", "v", "g", "d", "đ", "e", "ž", "z", "i", "j", "k", "l", "l", "m", "n", "n", "o", "p", "r", "s", "t", "ć", "u", "f", "h", "c", "v", "č", "d", "š", "A", "B", "V", "G", "D", "Đ", "E", "Ž", "Z", "I", "J", "K", "L", "L", "M", "N", "N", "O", "P", "R", "S", "T", "Ć", "U", "F", "H", "C", "Č", "D", "Š"};
    StringBuilder builder = new StringBuilder();
    for (int i = 0; i < message.length(); i++) {
        for (int x = 0; x < abcCyr.length; x++ ) {
            if (message.charAt(i) == abcCyr[x]) {
                builder.append(abcLat[x]);
            }
        }
    }
    return builder.toString();
}
