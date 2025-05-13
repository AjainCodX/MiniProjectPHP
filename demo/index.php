<?php

//$books = [
//    [ 'name' => 'Do Androids' ,
//        'author' => 'checker' ,
//        'releaseYear' => '2016',
//        'purchaseURL' => "https://example.com"],
//
//    [ 'name' => 'Do IOS',
//        'author'  => 'Bithcher' ,
//        'releaseYear' => '2017',
//        'purchaseURL' => 'https://example2.com'],
//    [ 'name' => 'Do IT Now',
//        'author'  => 'checker' ,
//        'releaseYear' => '2018',
//        'purchaseURL' => 'https://example3.com']
//
//];

//            $filterItems = function($items , $key, $value){
//                $filteredItems = [];
//                foreach ($items as $item){
//                    if ($item[$key] === $value){
//                        $filteredItems[] = $item;
//                    }
//                }
//
//                return $filteredItems;
//            };
//$filterItems = function($items , $fn){
//    $filteredItems = [];
//    foreach ($items as $item){
//        if ($fn($item)){
//            $filteredItems[] = $item;
//        }
//    }
//
//    return $filteredItems;
//};
//
////            $filteredBooks = $filterItems($books ,'releaseYear' ,'2016');
//$filteredBooks = $filterItems($books ,function ($book){
//    return $book['releaseYear']>= 2017;
//});
//
//require "index.view.php";


$business =
    [
            'name' => 'Laracasts',
            'costs' => 15,
            'categories' => ["Testing" ,"Php" , "Javascript"]
    ];

function register($user){
    // Create the user record in the DB
    // Log them in.
    // Send a welcome email.
    // Redirect to their new dashboard
}

require "index.view.php";