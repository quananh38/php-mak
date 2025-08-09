<?php
// Repository: php-recursive-directory-lister
// Description: A script to recursively list files in a directory.

/**
 * Recursively list files in a directory.
 */
function listFiles($dir) {
    $files = [];
    foreach (scandir($dir) as $item) {
        if ($item === '.' || $item === '..') continue;
        $path = $dir . DIRECTORY_SEPARATOR . $item;
        if (is_dir($path)) {
            $files = array_merge($files, listFiles($path));
        } else {
            $files[] = $path;
        }
    }
    return $files;
}

// Example usage
$directory = __DIR__;
$fileList = listFiles($directory);
print_r($fileList);
?>
