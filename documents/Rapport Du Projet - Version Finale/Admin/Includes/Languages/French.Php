<?php

    function lang( $phrase ) {

     static $lang = array(

      'MESSAGE' => 'Bienvenue',

      'ADMIN'   => 'Administrateur'

     );
  
     return $lang[$phrase];

    }

    /*

    $lang = array(


           'Seif' => 'Slimene'


   );

   echo $lang['Seif'];

   */

?>