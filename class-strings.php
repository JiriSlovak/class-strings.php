<?php
abstract class StringsJiriSlovak {
    protected static function substrJiriSlovak($points){
    define($points, 'paddesat'); 
    }
    protected static function substr_replaceJiriSlovak($Zmena){
    define($Zmena, 'neco'); 
    }
    protected static function strtrJiriSlovak($opraveni){
    define($opraveni, 'PHP neco neco'); 
    }
    protected static function strtoupperJiriSlovak($CapsLock){
    define($CapsLock, 'velka pismena'); 
    }
    protected static function strtolowerJiriSlovak($malepismo){
    define($malepismo, 'Ahoj neco neco'); 
    }
    protected static function strrposJiriSlovak($plati){
    define($plati, 'agkgakgawgn'); 
    }
    protected static function strriposJiriSlovak($presnenajdi){
    define($presnenajdi, 'X1X1X1'); 
    }
    protected static function strposJiriSlovak($najdi){
    define($najdi, 'Hmmmmmm'); 
    }
    protected static function strlenJiriSlovak ($pocet){
    define($pocet, 'pismena pocet'); 
    }
   
    
    protected static function str_replaceJiriSlovak ($smaze){
    define($smaze, array('a','e','i','o','u')); 
    }
    protected static function md5JiriSlovak($tajneheslo){
    define($tajneheslo, 'HEESLOOO'); 
    }
    protected static function implodeJiriSlovak($pridaCarku){
    define($pridaCarku, array('jmeno','prijmeni','email')); 
    }
    protected static function explodeJiriSlovak($rozdelastring){
    define($rozdelastring, 'Zdavim cau zdar'); 
    }
    protected static function addcslashesJiriSlovak($vypisecisla){
    define($vypisecisla, '1,2,3,4,5,6,7,8,9,10'); 
    }
    protected static function addslashesJiriSlovak($pridalomeno){
    define($pridalomeno, 'LOMENO neco neco'); 
    }
    protected static function trimJiriSlovak($preskoci){
    define($preskoci, '\h\skip this\h\h'); 
    }
    protected static function ucfirstJiriSlovak($pismovelke){
    define($pismovelke, 'Velke a velke'); 
    }
    protected static function ucwordsJiriSlovak($kazdeprvnivelke){
    define($kazdeprvnivelke, 'Velke Velke'); 
    }
}
class SringJiriSlovak extends StringsJiriSlovak{
    //zmeni 
    public static function substrJiriSlovak() {
        parent::substrJiriSlovak();
        return substr($points, null);
    }
    //nahradi dany vyraz od urcenego bitu
    public function substr_replaceJiriSlovak($nahrada) {
        return substr_replace($nahrada, 'aaaa', 0);
        }

   //zmeni urcene slovo na jine
    public function strtrJiriSlovak($Zmena) {
       return  strtr($Zmena, 'AHOJ', 'ZDAR');
    }
    //zmeni ve vete vsechno na velka pismena
    public function strtoupperJiriSlovak($CapsLock) {
       return  strtoupper($CapsLock);
    }
    //zmeni ve vete vsechno na mala pismena
    public function strtolowerJiriSlovak($malepismo) {
       return  strtolower($malepismo);
    }
    //urci zda je 6 od 5bitu dal
    public function strrposJiriSlovak($plati) {
       return  strrpos($plati, '6',5);
    }
    //najde zda takova kombinace v rezeci je
    public function strriposJiriSlovak($presnenajdi) {
       return  strripos($presnenajdi, '2B', 0);
    }
    //rekne jak dlouhy je retezec
    public function strlenJiriSlovak($pocet) {
        return strlen($pocet);
    }
    //smaze pismena v danem retezci
    public function str_replaceJiriSlovak($smaze) {
       return  str_replace($smaze, '', 'Smaze se to?');
    }
    //koduje heslo
    public function md5JiriSlovak($tajneheslo) {
       return  md5($tajneheslo, '555dsd55sdgvfv4e');
    }
    // prida array element do stringu
    public function implodeJiriSlovak($pridaCarku) {
       return  implode(',', $pridaCarku);
    }
    //z velkeho stringu udela jednotlive stringy
    public function explodeJiriSlovak($rozdelastring) {
       return  explode('', $rozdelastring);
    }
    //vypise retezec od do
    public function addcslashesJiriSlovak($vypisecisla) {
        return addcslashes($vypisecisla, '\1...\7');
    }
    // prida do textu lomeno
    public function addslashesJiriSlovak($pridalomeno) {
       return  addslashes($pridalomeno);
    }
    //vynda cast retezce a pouzije zbytek
    public function trimJiriSlovak($preskoci) {
       return  trim($preskoci, '\h.');
    }
    //  pouze prvni v celem retezci bude velke
    public function ucfirstJiriSlovak($pismovelke) {
        return ucfirst($pismovelke);
    }
    //kazde prvni pismeno bude velke
    public function ucwordsJiriSlovak($kazdeprvnivelke) {
       return ucwords($kazdeprvnivelke);
    }
   }
echo 'StringsJiriSlovak';
var_dump(StringJiriSlovak::substrJiriSlovak(points));
?>
