import CryptoJS from '@/node_modules/crypto-js/crypto-js.js';

//解密方法
function Decrypt(word) {
  var key = CryptoJS.enc.Utf8.parse("dlstagriculture");
  var decrypt = CryptoJS.AES.decrypt(word, key, {
    mode: CryptoJS.mode.ECB,
    padding: CryptoJS.pad.Pkcs7
  });
  return CryptoJS.enc.Utf8.stringify(decrypt).toString();
}

//加密方法
function Encrypt(word) {
  var key = CryptoJS.enc.Utf8.parse("dlstagriculture");
  var srcs = CryptoJS.enc.Utf8.parse(word);
  var encrypted = CryptoJS.AES.encrypt(srcs, key, {
    mode: CryptoJS.mode.ECB,
    padding: CryptoJS.pad.Pkcs7
  });
  return encrypted.toString();
}



export default{
  Decrypt,
  Encrypt
}