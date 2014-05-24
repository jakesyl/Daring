<?php
/*class link{
    __init__(self/*,whatever we take from the mysql database as well*/){
//        $id = rand(21)
//        $upvotes = rand(21)
//        $downvotes = rand(21)
//        $pledge = rand(21)//replace with new data poinmts at a later date
//         $age =
// }
//}
/*def datextraction(){//this method is complete shit it's only useful for delivering info now commenting out
$database = ["123, 12, 10, 49.48,12"]//id,upvotes,downvotes,plege,age
$finval = [];//final values
    for link in database{
    $data = explode(",", database);
    $id = data[0];
    $votes = data[1]-data[2];
    $pledge = data[3];
    $age = data[4];
    array_push($database.",".$id.","$votes.",".$pledge.",".$age);
}
}
info, datextraction()
    //return format id,votes(sum),pledge 
*/
$c=0;
$link = mysqli_connect("localhost", "root", "1", "posts");
while (mysqli_connect_errno()==true && $c<5){
        $mysqli = mysqli_connect("localhost", "root", "1", "post_data");
        if ($c==5){
          printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
        }
        $c++;
}
$data = mysqli_query($link, "SELECT * FROM post_data WHERE `date` > timestampadd(day, -7, now());")
echo $data;
?> 