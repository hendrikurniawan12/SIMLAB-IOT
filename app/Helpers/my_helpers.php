<?php
if (!function_exists('encryptAES')) {
  function encryptAES($plaintext)
  {
    $cipher = "aes-256-cbc";
    $ivlen = openssl_cipher_iv_length($cipher);
    $iv = openssl_random_pseudo_bytes($ivlen);
    $ciphertext = openssl_encrypt($plaintext, $cipher, env('ENCRYPT_KEY'), $options = 0, $iv);
    $ciphertext = base64_encode($iv . $ciphertext);
    // Mengganti karakter agar URL-safe
    $ciphertext = str_replace(['+', '/', '='], ['-', '_', ''], $ciphertext);
    return $ciphertext;
  }
}

if (!function_exists('decryptAES')) {
  function decryptAES($ciphertext)
  {
    $cipher = "aes-256-cbc";
    // Mengembalikan karakter ke bentuk asli base64
    $ciphertext = str_replace(['-', '_'], ['+', '/'], $ciphertext);
    $ciphertext = base64_decode($ciphertext);
    $ivlen = openssl_cipher_iv_length($cipher);
    $iv = substr($ciphertext, 0, $ivlen);
    $ciphertext = substr($ciphertext, $ivlen);
    return openssl_decrypt($ciphertext, $cipher, env('ENCRYPT_KEY'), $options = 0, $iv);
  }
}

if (!function_exists('ambilTanggal')) {
  function ambilTanggal($waktu)
  {
    $split = explode(' ', $waktu);
    return $split[0];
  }
}

if (!function_exists('ambilJam')) {
  function ambilJam($waktu)
  {
    $split = explode(' ', $waktu);
    return $split[1];
  }
}

if (!function_exists('convertTanggal')) {
  function convertTanggal($waktu)
  {
    $split = explode(' ', $waktu);
    $tanggal = $split[0];
    $split_tanggal = explode('-', $tanggal);
    $bulan = namaBulan($split_tanggal[1]);
    return $split_tanggal[2] . ' ' . $bulan . ' ' . $split_tanggal[0];
  }
}

if (!function_exists('namaBulan')) {
  function namaBulan($bulan)
  {
    if ($bulan == '1') {
      return 'Jan';
    } elseif ($bulan == '2') {
      return 'Feb';
    } elseif ($bulan == '3') {
      return 'Mar';
    } elseif ($bulan == '4') {
      return 'Apr';
    } elseif ($bulan == '5') {
      return 'Mei';
    } elseif ($bulan == '6') {
      return 'Jun';
    } elseif ($bulan == '7') {
      return 'Jul';
    } elseif ($bulan == '8') {
      return 'Ags';
    } elseif ($bulan == '9') {
      return 'Sep';
    } elseif ($bulan == '10') {
      return 'Okt';
    } elseif ($bulan == '11') {
      return 'Nov';
    } elseif ($bulan == '12') {
      return 'Des';
    }
  }
}
