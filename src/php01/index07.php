<?php
$people = array('Taro', 'Jiro', 'Saburo');

var_dump($people);
echo "<br />";
echo $people[0];
echo "<br />";

$people = array(
    "person1" => "Taro",
    "parson2" => "Jiro",
    "person3" => "Saburo",
);
var_dump($people);
echo "<br />";

$people = [
    "person1" => "taro",
    "parson2" => "jiro",
];
echo $people["person1"];
echo "<br />";

$people = [
    [
        "last_name"=>"山田",
        "first_name"=>"太朗",
        "age"=>29,
        "gender"=>"男性",
    ],
    [
        "last_name"=>"鈴木",
        "first_name"=>"次郎",
        "age"=>25,
        "gender"=>"男性",
    ],
    [
        "last_name"=>"佐藤",
        "first_name"=>"花子",
        "age"=>20,
        "gender"=>"女性",
    ]
    ];
    echo $people[1]["last_name"];
    echo "<br />";
$people=array("taro", "jiro", "saburo");

foreach ($people as $person){
    echo $person;
    echo "<br />";
}

$people = [
    ["taro",25,"men"],
    ["jiro",20,"men"],
    ["hanako",16,"women"]
];
foreach ($people as $person){
    print $person[0] ."(" . $person[1]. "歳" . $person[2] . ")" . "<br />";
}


