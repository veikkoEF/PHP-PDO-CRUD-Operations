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
           
           $statement = $db->prepare("INSERT INTO contact (Firmenname, Ort) VALUES (?, ?)");
           $statement->execute(array('Fa Baier', 'Stuttgart'));   
         ?>
   </body>
   
</html>
