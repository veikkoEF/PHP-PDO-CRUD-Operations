<!DOCTYPE html>
<html>
    <head>
      <Title>Arbeit mit der Datenbank</Title>
   </head>
   <body> 
         <?PHP
           $user = 'root';
           $pass = '';
           $db = new PDO( 'mysql:host=localhost;dbname=enterprise', $user, $pass );
           $statement = $db->prepare("UPDATE contact SET city = ? where city = ?");
           $statement->execute(array('Kiel', 'Hamburg')); 
         ?>
   </body>
   
</html>
