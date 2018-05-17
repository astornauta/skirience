<?php
/**
* Translate class
*/
class Translate
{

  static $lang = 'en_GB';
  static $localesFolder = LOCALES_FOLDER;
  static $arrayCSV = null;
  public static $availableLangs = array(
    'es' => array(
      'short'   => 'esp',
      'iso-639' => 'es_ES.utf-8',
      'long'    => 'Español',
    ),
    'en' => array(
      'short'   => 'eng',
      'iso-639' => 'en_GB.utf-8',
      'long'    => 'English',
    ),
  );

  function __construct($lang = '')
  {
    $this->setLang($lang);
  }

  function setLang($lang = '')
  {
    if(empty($lang)){
      $browserLang = $this::$lang;
      if(!empty( $_SERVER['HTTP_ACCEPT_LANGUAGE'] )){
        // esto para versiones nuevas de php
        // $browserLang = locale_get_primary_language(locale_accept_from_http($_SERVER['HTTP_ACCEPT_LANGUAGE']));

        $langs = array();
        preg_match_all('/([a-z]{1,8}(-[a-z]{1,8})?)\s*(;\s*q\s*=\s*(1|0\.[0-9]+))?/i', $_SERVER['HTTP_ACCEPT_LANGUAGE'], $lang_parse);
        if (count($lang_parse[1])) {
          $langs = array_combine($lang_parse[1], $lang_parse[4]);
          foreach ($langs as $lang => $val) {
            if ($val === '') $langs[$lang] = 1;
          }
          arsort($langs, SORT_NUMERIC);
          $availableLangs = array_keys($this::$availableLangs);
          foreach ($langs as $l => $p) {
            if(in_array($l, $availableLangs)){
              $browserLang = $l;
              break;
            }
          }
        }
      }
      if(isset($_SESSION['lang'])){
        $lang = $_SESSION['lang'];
      }else{
        $lang = $browserLang;
      }
    }

    //update COOKIE
    $_SESSION['lang'] = $lang;
    $this::$lang = $lang;

    $localeLang = $this::$availableLangs[$lang]['iso-639'];

    putenv("LC_MESSAGES=".$lang);
    setlocale(LC_MESSAGES, $localeLang);
    bindtextdomain("skirience", $this::$localesFolder);
    bind_textdomain_codeset("skirience", "UTF-8");
    textdomain("skirience");
  }

  function getLang()
  {
    return $this::$lang;
  }

  function getOtherAvailableLangs(){
    $otherAvailableLangs = $this::$availableLangs;
    unset($otherAvailableLangs[$this->getLang()]);
    return $otherAvailableLangs;
  }

}

?>
