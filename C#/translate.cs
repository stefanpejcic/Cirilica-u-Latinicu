/// Using .NET open source dll library UnidecodeSharpFork
/// https://bitbucket.org/DimaStefantsov/unidecodesharpfork/src

[TestMethod]
public void SerbianAlphabetTest()
{
    string serbianAlphabetLowercase = "а б в г д ђ е ж з и ј к л љ м н њ о п р с т ћ у ф х ц ч џ ш";
    string serbianAlphabetUppercase = "А Б В Г Д Ђ Е Ж З И Ј К Л Љ М Н Њ О П Р С Т Ћ У Ф Х Ц Ч Џ Ш";

    string expectedLowercase = "a b v g d đ e ž z i j k l l m n n o p r s t ć u f h c č d š";
    string expectedUppercase = "A B V G D Đ E Ž Z I J K L L M N N O P R S T Ć U F H C Č D Š";

    Assert.AreEqual(expectedLowercase, serbianAlphabetLowercase.Unidecode());
    Assert.AreEqual(expectedUppercase, serbianAlphabetUppercase.Unidecode());
}
