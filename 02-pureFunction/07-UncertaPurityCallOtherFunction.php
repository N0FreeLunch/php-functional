<?php
function get_roles(User $u)
{
  return array_merge($u->getRoles(), $u->getGroup()->getRoles());
}
 ?>
