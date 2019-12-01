<?php

function getDirectory($dir = "server")
{
    $currentDirectory = new DirectoryIterator($dir);
    getContent($currentDirectory);
}

function getContent($currentDirectory)
{
    foreach ($currentDirectory as $item) {
        if ($item->isDot()) continue;
        else if (!$item->isDir()) continue;
        echo "<a href='?path={$item->getPathname()}'>{$item}</a><br>";
    }
}

if (!empty($_GET['path'])) {
    getDirectory($dir = $_GET['path']);
} else {
    getDirectory();
}