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
           $statement = $db->prepare("UPDATE contact SET ort = ? where ort = ?");
           $statement->execute(array('Hamburg', 'Muenchen')); 
         ?>
   </body>
   
</html>
