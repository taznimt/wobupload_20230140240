<?php
$target_dir = "uploads/";
if (isset($_GET['file'])) {
    $file = basename($_GET['file']);
    $file_path = $target_dir . $file;
    if (file_exists($file_path)) {
        unlink($file_path);
        echo "<p style='color:green;'>✅ File <strong>$file</strong> berhasil dihapus.</p>";
    } else {
        echo "<p style='color:red;'>❌ File tidak ditemukan.</p>";
    }
}
echo "<br><a href='index.html'>⬅ Kembali</a>";
?>
