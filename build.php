<?php
include 'data.php';

// 1. Generate index.html
echo "Generating index.html...\n";
ob_start();
include 'index.php';
$indexHtml = ob_get_clean();
file_put_contents('index.html', $indexHtml);

// 2. Generate project detail pages
echo "Generating project detail pages...\n";
foreach ($config['projects'] as $project) {
    $id = $project['id'];
    echo " - Processing: $id.html\n";

    // Simulate $_GET['id'] for project.php
    $_GET['id'] = $id;

    ob_start();
    include 'project.php';
    $projectHtml = ob_get_clean();
    file_put_contents("$id.html", $projectHtml);
}

echo "Done! Static site generated successfully.\n";
?>
