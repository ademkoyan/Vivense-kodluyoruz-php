<?php

$sex = "female"; // cinsiyet (male/female)
$weight = 60; // kilo (kg)
$height = 170; // boy (cm)
$age = 30; // yaş (sene)

/**
 * Bu ödevde günlük kalori hesaplaması yapacağız.
 * Yukarıdaki değişkenleri ve aşağıdaki formülü kullanarak
 * kişinin günlük kaç kalori alması gerektiğini hesaplayıp
 * bunu ekrana yazan PHP kodunu oluşturmamız gerekiyor.
 * 
 * Erkekler için; 10 x kilo + 6.25 x boy - 5 x yaş + 5
 * Kadınlar için; 10 x kilo + 6.25 x boy - 5 x yaş - 161
 * 
 * Örneğin;
 * $sex = "female";
 * $weight = 60;
 * $height = 170;
 * $age = 30;
 * 
 * Ekrana 1326.5 yazması gerekiyor.
 */ 
$iht_kal = 0;

 if($sex == "male"){
    $iht_kal = (10*$weight)+(6.25*$height)-(5*$age)+5;
    
    echo "Günlük Almanız gereken kalori = $iht_kal ";
 }
 if($sex == "female"){
    $iht_kal = (10*$weight)+(6.25*$height)-(5*$age)-161;
    
    echo "Günlük Almanız gereken kalori = $iht_kal ";
 }

