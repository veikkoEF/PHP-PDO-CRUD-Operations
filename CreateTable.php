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
           $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
          
           $sql = "CREATE TABLE contact(KundenNr INTEGER PRIMARY KEY NOT NULL auto_increment, Firmenname VARCHAR(100), Ort VARCHAR(100));";
           $db ->exec($sql);
           echo 'Die Tabelle "contact" wurde erfolgreich erstellt!'
      ?>
   </body>
   
</html>
