<?php
error_reporting(E_ALL & ~E_DEPRECATED);
 $connect = mysql_connect('localhost','root','14011995') or die(mysql_error());
 mysql_select_db('mysql');
if( !empty( $_FILES['image']['name'] ) ) {
  if ( $_FILES['image']['error'] == 0 ) {
    if( substr($_FILES['image']['type'], 0, 5)=='image' ) {
      $image = file_get_contents( $_FILES['image']['tmp_name'] );
      $image = mysql_real_escape_string( $image );
      $query = mysql_query("INSERT INTO news VALUES (0,'$image','tttttttt')") or die(mysql_error());
      mysql_query( $query );
    }
  }
}
?>