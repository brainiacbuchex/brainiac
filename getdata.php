<?php
require 'connection.php';

$query = "SELECT * FROM `info`";
if($is_query_run=mysql_query($query))
{
echo "query executed<br>"
while($query_execute=mysql_fetch_assoc($is_query_run))
    {

        echo $query_execute['surname'].'<br>';
    }
}
else
{
    echo "query not executed";
}

?>