<?php
function extractFolderNumber($folderPath){
    $basename = basename($folderPath);
    $labNrString = substr($basename, -2);
    if (is_numeric($labNrString)){
        $labNr = (int) $labNrString;
    }
    return $labNr;
}
?>