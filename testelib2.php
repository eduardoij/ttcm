<?php
 	//require_once("../config.php");
 	include("Conexao.php"); 
 	
 	//$sql="SELECT COUNT(id) AS cont FROM  {$CFG->prefix}user ";
 	//$usr=get_record_sql($sql);
 //	echo $usr->cont;
 $query = "SELECT count(1) FROM Turmas;";
 
 $resultado = mysql_query($query,$conexao) or die (mysql_error());

$count = mysql_result($resultado,0);

print "estou aqui";
//if (mysql_num_rows($resultado)>0)
//{
   //print "Insert executado com sucesso!";
   //print "T $count T";
//}else
//{
   //print "Não foi possível executar o insert!";
//}

?>
