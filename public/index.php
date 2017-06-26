<?php
echo 'Hello from ',$_SERVER['DOCUMENT_ROOT'],'<hr/>';
echo "Request URL = '$_SERVER[QUERY_STRING]'";
var_dump($_SERVER);