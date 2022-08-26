<?php
    // try{
    //     $fh = fopen("contacts.txt", "r");
    //     if (! $fh){
    //         throw new Exception("Could not open the file!");
    //     }
    // } catch (Exception $abc) {
    // // } catch (Exception $e) {
    //     // echo "Error (File: ".$e->getFile()."<br>, line ". $e->getline()."<br>): ".$e->getMessage();

    //     echo $abc->getMessage();
    // }

?>


<?php
   try{
    $fh = require("contacts.php");
    if (! $fh){
        throw new Exception("Could not open the file!");
    }
} catch (Exception $abc) {
// } catch (Exception $e) {
    // echo "Error (File: ".$e->getFile()."<br>, line ". $e->getline()."<br>): ".$e->getMessage();

    echo $abc->getMessage();
}

echo "Hello. This is shows that PHP working fine after fatal error";



?>