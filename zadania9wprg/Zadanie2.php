<?php
function manageDirectory($path, $dirName, $operation = 'read') {
    $fullPath = rtrim($path, '/') . '/' . $dirName;

    switch ($operation) {
        case 'create':
            if (!file_exists($fullPath)) {
                mkdir($fullPath, 0777, true);
                return "Katalog $fullPath został stworzony.";
            } else {
                return "Katalog $fullPath już istnieje.";
            }
        case 'delete':
            if (file_exists($fullPath)) {
                if (is_dir($fullPath) && count(scandir($fullPath)) == 2) {
                    rmdir($fullPath);
                    return "Katalog $fullPath został usunięty.";
                } else {
                    return "Katalog $fullPath nie jest pusty lub nie istnieje.";
                }
            } else {
                return "Katalog $fullPath nie istnieje.";
            }
        case 'read':
        default:
            if (file_exists($fullPath) && is_dir($fullPath)) {
                $items = scandir($fullPath);
                return "Zawartość katalogu $fullPath: " . implode(', ', array_diff($items, array('.', '..')));
            } else {
                return "Katalog $fullPath nie istnieje.";
            }
    }
}

echo manageDirectory('./php/images/network', 'exampleDir', 'create');
echo manageDirectory('./php/images/network', 'exampleDir', 'read');
echo manageDirectory('./php/images/network', 'exampleDir', 'delete');
?>
