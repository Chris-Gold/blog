<?php

// fct de retour de requete mysql
function req_mysql($req_sql){
  include 'cnx_db.php';
  return mysqli_query($cnx, $req_sql);
}
function close_mysql(){
  return mysqli_close($cnx);
}
function sql_a_tableau($res_sql){
  if (mysqli_num_rows($res_sql)>0) {
    $tab=mysqli_fetch_all($res_sql);
    return json_encode($tab);
  }
}
?>
