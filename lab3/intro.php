
<?php

    //echo "Hello PHP"." TEST";
    //print("Hello PHP again!"." Test")

    $id = 1;
    $name = "alamin";
    $cgpa = 3.5;
    $status = true;

    $std = array(1, "alamin", 2.4, 'alamin@aiub.edu');
    echo $std[1];
    $std = [1, "alamin", 2.4, 'alamin@aiub.edu'];
    $stds = [
                [1, "alamin", 2.4, 'alamin@aiub.edu'],
                [2, "xyz", 2.4, 'alamin@aiub.edu'],
                [3, "abc", 2.4, 'alamin@aiub.edu']
            ];
    $stds[1][3];

    $std = ["id"=>1, "name"=>"alamin", "cgpa"=>2.4, "email"=>'alamin@aiub.edu'];
    $std['id'];

    $stds = [
        ["id"=>1, "name"=>"alamin", "cgpa"=>2.4, "email"=>'alamin@aiub.edu'],
        ["id"=>2, "name"=>"alamin", "cgpa"=>2.5, "email"=>'alamin@aiub.edu'],
        ["id"=>3, "name"=>"alamin", "cgpa"=>2.6, "email"=>'alamin@aiub.edu']
    ];
    $stds[1]['email'];

    $stds = [
        's1'=>["id"=>1, "name"=>"alamin", "cgpa"=>2.4, "email"=>'alamin@aiub.edu'],
        's2'=>["id"=>2, "name"=>"alamin", "cgpa"=>2.5, "email"=>'alamin@aiub.edu'],
        's3'=>["id"=>3, "name"=>"alamin", "cgpa"=>2.6, "email"=>'alamin@aiub.edu']
    ];

    $stds['s3']['cgpa'];
?>
