<?php
    if (!file_exists("./upload")) {
        mkdir("./upload" , 0755);
    };

    $filename=$_FILES["file"]["tmp_name"];
         if($_FILES["file"]["size"] > 0)
         {
            $file = fopen($filename, "r");
            while (($getData = fgetcsv($file, 10000, ";")) !== FALSE)
             {
                file_put_contents('./upload/'.$getData[0], $getData[1]);
             };
            fclose($file);

         };

?>

