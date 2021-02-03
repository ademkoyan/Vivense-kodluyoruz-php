<?php

$age = 64;

/**
 * Bu ödevde age değişkeni içerisinde yer alan yaş değerinin bulunduğu
 * yaş grubu tespit edilip ekrana bu yaş grubunun ismi yazılmalıdır. 
 * 
 * 0-14 = Çocuk
 * 15-24 = Genç
 * 25-64 = Yetişkin
 * 65+ = Yaşlı
 * 
 * Ekran çıktısı için `echo` yada `print` kullanabilirsiniz.
 * 
 * > **Not**: Çıktıda sadece `Çocuk`, `Genç`, `Yetişkin` veya `Yaşlı`
 * yer almalıdır.
 * 
 * İyi çalışmalar.
 */
if($age <= 14 ){
    echo "Çocuk";
}
if($age >= 15 && $age <=24 ){
    echo "Genç";
}
if($age >= 25 && $age <=64){
    echo "Yetişkin";
}
if($age >= 65){
    echo "Yaşlı";
}