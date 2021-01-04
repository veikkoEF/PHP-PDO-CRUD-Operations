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
           $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
           $sql = "CREATE TABLE contact(ID INTEGER PRIMARY KEY NOT NULL auto_increment, CompanyName VARCHAR(100), City VARCHAR(100));";
           $db ->exec($sql);
      ?>
   </body>
   
</html>
