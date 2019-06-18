<?php

  function passHash($passwd)
  {
    $hash = md5($passwd);

    return $hash;
  }

  function passCheck($passwd, $hash_passwd)
  {
    $hash = passHash($passwd);

    if ($hash == $hash_passwd)
    {
      return True;
    }

    return False;
  }

  function authKey($key)
  {
    $t = $key;
    for ($i=0; $i < 5 ; $i++) { 
      $hash = passHash($t);
      $t = $hash;
    }

    return $t;
  }

  function authCkech($key, $hash_key)
  {
    $hash = authKey($key);

    if ($hash == $hash_key)
    {
      return True;
    }

    return False;
  }

 ?>
