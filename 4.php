<?php
function substituteVowels($isi, $i) {
   return preg_replace("/[aiueoAIUEO]/", $i , $isi);
}
echo substituteVowels("Orang jahat adalah orang baik yang tersakiti", "i");
