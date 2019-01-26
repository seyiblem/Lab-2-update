
<center>  
<?php

$first_name="";
$age="";
$email="";
$website="";
$comment="";
$gender="";

$first_nameError ="";
$ageError ="";
$emailError="";
$webError="";
$commentError="";
$genderError="";

if(isset($_POST['submit'])){
   
$first_name = $_POST['username'];   
$age = $_POST['select_box'];  
$email = $_POST['useremail'];
$website = $_POST['website'];
$comment = $_POST['comment'];
$gender=$_POST['gender'];
    
//var_dump($age);
 //   var_dump($gender);
//name validation
if($first_name =="")
{
    $first_nameError = "First name required";
}
elseif (!preg_match("/^[a-zA-Z ]*$/",$first_name))
{
  $first_nameError = "Incorrect format";
}

else {
    $first_nameError ="";
}

    
//Age validation

  
if(!isset($age) || $age == "Select Age")
{
$ageError = "Select Age Group";
}

 //var_dump($first_name);
    
    
  //email validations  
    
    if($email =="")
{
    $emailError = "Email name required";
}
elseif (!filter_var($email,FILTER_VALIDATE_EMAIL))
{
  $emailError = "Email name required";
}

else {
    $first_nameError ="";
}


//web validation
    
if($website =="")
{
    $webError = "Valid website required";
}
elseif (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) 
{
  $webError = "Invalid URL";
}

else {
    $webError ="";
}

//Comment Validation
if($comment =="")
{
    $commentError = "Drop your comments !";
}
elseif (!preg_match("/^[a-zA-Z ]*$/",$comment)) 
{
  $commentError = "Invalid comment input";
}

else {
    $commentError ="";
}

//Radio button (Gender) Validation
    
if($gender==NULL)
{
    $genderError = "Select Gender";
}
 
else
{
    $genderError="";
}
    
if(empty($first_nameError) && empty($ageError) && empty($genderError) && empty($commentError) && empty($emailError) && empty($webError))
    header('Location: submit.php');
}

?>
<container>
<center>
<form method="post" name="form"> 
    
<b>Name:</b> <input type="text" name="username" id="username" size= "45" placeholder="Name"  >&nbsp;<span id="errName" style="color:red;"><?php echo $first_nameError ?></span>

<br><br>
    
<b>Age:</b>
<select name="select_box" id="select_box" >
<option value="Select Age">Select age</option>
<option value="18 & Below" >18 & Below</option>
<option value="18 & Above">18 & Above</option>
</select> &nbsp;  <span id="errAge" style="color:red;"> <?php if($age) echo $ageError ?> </span> 
    
<br><br>
    
<b>E-mail:</b> <input type="text" name="useremail"  id="usermail" size="45" placeholder="Email" value="<?php if(!empty($first_name)) echo $first_name;?>"> &nbsp;<span id="errMail" style="color:red;"><?php echo $emailError ?></span>
<br><br>
    
<b>Website:</b> <input type="text" name="website" id="website" size= "45" placeholder="Website"> &nbsp;<span id="errWebpage" style="color:red;"><?php echo $webError ?></span>
<br><br>
    
<b>Comment:</b> <textarea name="comment" id="comment" rows="4" cols="40" placeholder="Comment"></textarea> &nbsp;<span id="errComment" style="color:red;"><?php echo $commentError ?></span>
    
<br><br>
    
<b>Gender:</b> 
    
Male<input type="radio" name="gender" id="mgender" value = "Male" > 
Female<input type="radio" name="gender" id="fgender" value = "Female">  &nbsp;<span id="errGender" style="color:red;"> <?php echo $genderError ?></span>
<br><br>
<input name="submit" type="submit"  value="Submit" >  
</form>
</center>

</container>
