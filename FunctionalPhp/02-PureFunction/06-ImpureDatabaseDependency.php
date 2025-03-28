<?php
function get_administrators(EntityManager $em)
{
  return $em -> createQueryBuilder()
  -> select('u')
  -> from('User', 'u')
  -> where('u.admin = 1')
  -> getQuery()
  -> getArrayResult();
}
 ?>
