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
           $stmt = $db->prepare("SELECT * FROM contact where city = ?");
           if ($stmt->execute(array('Berlin'))) {
                         while ($row = $stmt->fetch()) {
                           print_r($row['CompanyName']);
                          }
                        }
         ?>
   </body>
   
</html>
