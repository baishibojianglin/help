<<<<<<< HEAD
import CryptoJS from '@/node_modules/crypto-js/crypto-js.js';


var key = CryptoJS.enc.Utf8.parse("1234123412341234");

//解密方法
function Decrypt(word) {
  var decrypt = CryptoJS.AES.decrypt(word, key, {
    mode: CryptoJS.mode.ECB,
    padding: CryptoJS.pad.Pkcs7
  });
  return CryptoJS.enc.Utf8.stringify(decrypt).toString();
}
=======
import CryptoJS from '@/node_modules/crypto-js/crypto-js.js';
var key = CryptoJS.enc.Utf8.parse("1234123412341234");
var iv = "1234567812345678";
>>>>>>> 2360f3bc14239c37893a506d7d76379c3569c55c

//加密方法
function Encrypt(word) {
  var srcs = CryptoJS.enc.Utf8.parse(word);
  var encrypted = CryptoJS.AES.encrypt(srcs, key, {
    iv:CryptoJS.enc.Utf8.parse(iv),
    mode: CryptoJS.mode.ECB,
    padding: CryptoJS.pad.Pkcs7
  });
  return encrypted.toString();
}

//解密方法
function Decrypt(word) {
  var decrypt = CryptoJS.AES.decrypt(word, key, {
	iv:CryptoJS.enc.Utf8.parse(iv),
    mode: CryptoJS.mode.ECB,
    padding: CryptoJS.pad.Pkcs7
  });
  return CryptoJS.enc.Utf8.stringify(decrypt).toString();
}

export default{
  Decrypt,
  Encrypt
}