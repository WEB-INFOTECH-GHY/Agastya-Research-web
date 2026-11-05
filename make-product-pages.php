<?php
// Run once after adding products to include/products-data.php:
//   open  yourdomain.com/make-product-pages.php  (or run: php make-product-pages.php)
// It creates <id>.php for every product that does not have a page yet.
// DELETE this file from the live server when you're done.
require_once 'include/products-data.php';

$created = [];
foreach ($products as $p) {
    $file = __DIR__ . '/' . $p['id'] . '.php';
    if (!file_exists($file)) {
        file_put_contents($file, "<?php\n\$slug = '" . $p['id'] . "';\nrequire 'product-detail.php';\n");
        $created[] = $p['id'] . '.php';
    }
}
header('Content-Type: text/plain');
echo $created ? "Created:\n" . implode("\n", $created) : "All product pages already exist.";
