<?php

echo "labas". "<br>";
echo md5(md5("labas")."asjnkjsand");

// 2e53d715b9d776b6c45263d31ecd3d87
echo "<br>";
echo password_hash('labas', PASSWORD_DEFAULT);