<?php
$dir = "uploads/";
$files = array_diff(scandir($dir), ['.', '..']);

if (count($files) === 0) {
    echo "Belum ada file diunggah.";
} else {
    foreach ($files as $file) {
        echo "<div class='uploaded-item'><img src='$dir$file' alt='$file'><br>$file</div>";
    }
}
?>
