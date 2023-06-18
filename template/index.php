

<?PHP

$servername = "127.0.0.1:3306";
$username = "root";
$password = "";
$dbname = "yghvyunb_festicovoit";
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // définir le mode exception d'erreur PDO 
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  $sql = "INSERT INTO `festivalgoers` ( `name`, `first_name`, `presence_date`, `login`, `password`)
VALUES( '$_POST[name]','$_POST[first_name]','$_POST[presence_date]','$_POST[login]','$_POST[password]')
";
  // utiliser la fonction exec() car aucun résultat n'est renvoyé
  $conn->exec($sql);
  echo "Nouveaux enregistrement ajoutés avec sucéés<br> <a href='formulaire.php'>Retour au formulaire</a>";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
$conn = null;

?>