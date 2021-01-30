<?php


$arr=[
    "student" =>[
            "name"=>[
                    "first name"=>"John",
                    "last name"=>"Peter",
                ],
            "courses"=>[
                    "name"=>"BE",
                    "subjects"=>[
                            "physics"=>[
                                "practicals"=>[
                                    "week1"=>[
                                        "day1"=>"mon",
                                        "day2"=>"tue",
                                        ]
                                    ],
                                "duration"=>"2 hours",
                            ],
                        ]
                    ]
            ],    
        
    ];


$obj=new RenderArray;
$obj->printArray();
$obj->stringSorting();
$obj->margestring();
$obj->convert();
$obj->task5();
class RenderArray
{
function printArray()
{
    global $arr;
    echo "<h1>Task 1</h1>";
foreach($arr as $key=>$value)
{
    $stu=$key;
    foreach($value as $key=>$value1)
    {
        $name=$key;
        if($key=="name")
        {   
        foreach($value1 as $key=>$value2)
        {
         echo $stu."=>".$name."=>".$key."=>".$value2."<br>";       
        }
        }
        else
        {
            foreach($value1 as $key=>$value2)
            {
                if($key=="name")
                {
                    echo $stu."=>".$name."=>".$key."=>".$value2."<br>";
                }
                else
                {   
                   
                    foreach($value2 as $key=>$value3)
                    {
                        $sub=$key;
                        foreach($value3 as $key=>$value4)
                        {   
                            
                            if($key=="practicals")
                            {  $pract=$key;
                               
                                foreach($value4 as $key=>$value5)
                                {
                                    $week= $key;
                                    foreach($value5 as $key=>$value6)
                                    {
                                        echo $stu."=>".$name."=>".$sub."=>".$pract."=>".$week."=>".$key."=>".$value6."<br>";
                                    }
                                }
                            }
                            else
                            {   
                                
                                echo $stu."=>".$name."=>".$sub."=>".$pract."=>".$key."=>".$value4."<br>";
                                
                            }
                        }
                    }
                }
                   
            }
        }
        
    }
}
}



function stringSorting()
{
    global $new,$newstrin;
    $string="587451649";
   
    echo "<h1>Task 1</h1>";
    $b=strlen($string);
    echo "Before sorted :".$string."<br>";
    echo "After sorted :";
    // $arr1=explode(",",$string);
    for ($i = 0; $i < $b; $i++)   
    {  
    for ($j = $i + 1; $j < $b; $j++)   
    {  
    $tmp = 0;  
    if ($string[$i] < $string[$j])   
    {  
    $tmp = $string[$i];  
    $string[$i] = $string[$j];  
    $string[$j] = $tmp;
     
    }
    }  
    //prints the sorted element of the array  
    $new=$new.$string[$i];
    echo $string[$i]; 
    }  
    echo "new $new";
    echo "<h1>Task 3</h1>";
    $string1="4578694";
    echo $string1."<br>";
    $c=strlen($string1);
    for ($i = 0; $i < $c; $i++)   
    {  
    for ($j = $i + 1; $j < $c; $j++)   
    {  
    $tmp = 0;  
    if ($string1[$i] > $string1[$j])   
    {  
    $tmp = $string[$i];  
    $string1[$i] = $string1[$j];  
    $string1[$j] = $tmp;
     
    }
    }  
    //prints the sorted element of the array 
    $newstrin=$newstrin.$string1[$i];
    echo $string1[$i]; 
    }  
    



}

function margestring()

{
    global $new,$newstrin;
    $add=$new.$newstrin;
    
    echo "new : ".count_chars($add,3);

}

function convert()
{
    echo "<h1>Task 4</h1>";
    $str="snake";
    echo "Before :string = $str <br>";
    $str1=str_replace($str,"camel","snake");
    echo "After :string = $str1 <br>";
}
function task5()
{
    echo "<h1>Task 5</h1>";
    $string1 = "hello John hello Peter";  
    $substr = "hello";
    $sub="john";
    $count=1;
    // echo substr_count($string1,$substr);
    echo $string1."<br><br>";
    $arr1=explode(" ",$string1);
    
    $count=0;
    $j=1;
    for($i=0;$i<count($arr1);$i++)
    {
       
        if($arr1[$i]==$substr)
        {
            $count++;
            
        }
        else if($arr1[$i]==$sub) 
        {
            $j++;
        }
        
    }
    echo "No of ouccrance hello : ".$count."<br><br>";
    
  
   
    foreach($arr1 as $key=>$value)
    {
        if($key%2==0)
        {
            echo "****";
        }
        else
        {
            echo $value;
        }
    }
    echo "<br><br>No of ouccrance john ".$j."<br><br>";
    foreach($arr1 as $key=>$value)
    {
        if($key==1)
        {
            echo "####";
        }
        else
        {
            echo $value;
        }
    }
}
}
?>