<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers', 'Origin, Content-Type, Cookie, X-CSRF-TOKEN, Accept, Authorization, X-XSRF-TOKEN, Access-Control-Allow-Origin');
header('Access-Control-Expose-Headers', 'Authorization, authenticated');
header('Access-Control-Allow-Methods', 'GET, POST, PATCH, PUT, OPTIONS');
header('Access-Control-Allow-Credentials', 'true');
?>