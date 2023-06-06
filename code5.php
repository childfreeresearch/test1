<?php

function is_number($number, int $min=18, int $max=110): bool{return($number>=$min and $number<=$max);}

function is_text($text, int $min=0, int $max=100): bool{$length=mb_strlen($text); 
return($length >$min and $length<=$max);}

function is_password(string $password): bool {
    if(mb_strlen($password)>=8 and preg_match('/[A-Z]', $password) and preg_match('/[a-z]', $password) and preg_match('/[0-9]', $password))
    {return true;} else {return false;}}

$user=['name'=>'', 'age'=>'', 'terms'=>'',]; 
$error=['name'=>'', 'age'=>'', 'terms'=>'',]; 

////////////////////////////////////////////////////////////////////
if($_SERVER['REQUEST_METHOD']== 'POST'){
    $ageform = $_POST['age'];
    $v01 = $_POST['v01'];
    $v02 = $_POST['v02'];
    $terms = $_POST['terms'];
    $firstname = $_POST['firstname'];


$terms=(isset($_POST['terms']) and $_POST['terms']==true) ? true:false;
print "<p>the value of terms is $terms</p>";

$user['name']=$_POST['firstname'];
$user['age']=$_POST['age'];
$user['terms']=($terms);
$errors['name']=is_text($user['name'],2,20) ? '': "must be between 2 and 20 characters";
$errors['age']=is_number($user['age'],18,100) ? '': "you must between between 18 and 100";
$errors['terms']=$user['terms'] ? '': "you must agree to the terms";

$invalid=implode($errors);
if($invalid){$message='please correct errors';}
else{$message='data are valid';}
print "<p>$message</p>";



$star_ratings=[1,2,3,4,5];
$validv01 = in_array($v01, $star_ratings);
if($validv01==1){print"<p>thanks for doing the first question</p>";}
else{print"<p>you skipped the first question</p>";}


    $valid = is_number($age);
    print "<p>the bool for age was $valid</p>";


    $validname = is_text($firstname);
    print "<p>the bool for name was $validname</p>";
    if($validname==1){print "<p>thanks for doing it right $firstname</p>";}
    else{print "<p>try again</p>";}

print "Thank you for submitting the survey $firstname";}
////////////////////////
else{
    $thiserror1 = $error['name'];
    $thiserror2 = $error['age'];
    $thiserror3 = $error['term'];
    print "<FORM ACTION='' METHOD='POST'> 
    Please type your first name: <INPUT type='text' name='firstname'> $thiserror1
    <br>
    Please type your age: <INPUT type='number' name='age'> $thiserror2
    <br>
    Write some things <textarea name='textbox'></textarea>
    <br>
    Question? <INPUT type='radio' name='v01' value='1'> option 1 <INPUT type='radio' name='v01' value='2'> option 2
    <br>
    Question 2? <INPUT type='radio' name='v02' value='1'> option 1 <INPUT type='radio' name='v02' value='2'> option 2
    <br><br>
    I have read the consent form blah blah irb stuff <INPUT type='checkbox' name='terms'> $thiserror3
    <br>
    <INPUT type='submit' value='next'>
    
    <INPUT type='hidden' value=$page name='page'>
    <INPUT type='hidden' value=$v01 name='v01'>
    <INPUT type='hidden' value=$v02 name='v02'>
    </FORM>";}


print "<br>"; print "<br>"; 
print "<img src='louie.jpeg' width='308' height='341'>";

//print "<br>"; print "<br>"; 
//print "<center><img src='louie.jpeg' width='308' height='341'>";
 
//print "<div class='louie'>
//<img src='louie.jpeg' style='float:right' hspace=10 vspace=10>
//</div>
//";

//print "<div class='louie'>
//<img src='louie.jpeg' style='float:right' hspace=10 vspace=10>
//</div>
//";











?>