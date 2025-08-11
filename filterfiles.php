<?php
// Repository: php-recursive-directory-lister
// New Feature: Filter files by extension

function listFilesByExtension($dir, $extension) {
    $files = [];
    foreach (scandir($dir) as $item) {
        if ($item === '.' || $item === '..') continue;
        $path = $dir . DIRECTORY_SEPARATOR . $item;
        if (is_dir($path)) {
            $files = array_merge($files, listFilesByExtension($path, $extension));
        } elseif (pathinfo($path, PATHINFO_EXTENSION) === $extension) {
            $files[] = $path;
        }
    }
    return $files;
}

$filteredFiles = listFilesByExtension(__DIR__, "php");
print_r($filteredFiles);
?>
