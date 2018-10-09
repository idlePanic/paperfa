<?php
/**
 * Created by PhpStorm.
 * User: alucard
 * Date: 7/25/2018
 * Time: 8:15 PM
 */
move_uploaded_file($_FILES['file']
['TMP_name'],[$_FILES['file']['name']]);

echo "uploaded....."
?>