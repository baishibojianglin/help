<?php

namespace app\common\lib;

class AES {

    /**
     * aes加密
     * @param string $string 需要加密的字符串
     * @param string $key 密钥
     * @return string
     */
    public function encrypt($string, $key)
    {
        $data = openssl_encrypt($string, 'AES-128-ECB', $key, OPENSSL_RAW_DATA);
        $data = strtolower(bin2hex($data));
        return $data;
    }


    /**
     * aes解密
     * @param string $string 需要解密的字符串
     * @param string $key 密钥
     * @return string
     */
    public function decrypt($string, $key)
    {
        $decrypted = openssl_decrypt(hex2bin($string), 'AES-128-ECB', $key, OPENSSL_RAW_DATA);
        return $decrypted;
    }
}
