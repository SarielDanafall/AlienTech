<?php

  public function passHash($passwd)
  {
    $hash = md5($passwd);

    return $hash;
  }

  public function passCheck($passwd, $hash_passwd)
  {
    $hash = passHash($passwd);

    if ($hash == $hash_passwd)
    {
      return True;
    }

    return False;
  }

 ?>
