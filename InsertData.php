<!DOCTYPE html>
<html>
    <head>
      <Title>Work with Database</Title>
   </head>
   <body> 
         <?PHP
           $user = 'root';
           $pass = '';
           $db = new PDO( 'mysql:host=localhost;dbname=enterprise', $user, $pass );
           
           $statement = $db->prepare("INSERT INTO contact (CompanyName, City) VALUES (?, ?)");
           $statement->execute(array('Fa. Baier', 'Berlin'));   
         ?>
   </body>
   
</html>
