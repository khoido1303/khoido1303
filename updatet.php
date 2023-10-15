$url = 'https://raw.githubusercontent.com/khoido1303/khoido1303/main/golikeupdate.php';
       	$file_name = basename($url); 
    if (file_put_contents("$file_name", file_get_contents($url))) 
    { echo "Tải File thành công name : $file_name \n"; } else
    { echo "Tải File thất bại\n."; }
