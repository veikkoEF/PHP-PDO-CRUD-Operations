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
           $stmt = $db->prepare("SELECT * FROM contact where ort = ?");
           if ($stmt->execute(array('Muenchen'))) {
                         while ($row = $stmt->fetch()) {
                           print_r($row['Firmenname']);
                          }
                        }
         ?>
   </body>
   
</html>
