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
           $statement = $db->prepare("DELETE FROM contact WHERE city = ?");
           $statement->execute(array('Frankfurt')); 
         ?>
   </body>
   
</html>
