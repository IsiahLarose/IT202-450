<form method="POST">
    <label for="Question">Question
        <input type="text" id="Question" name="Question" />
    <input type="submit" name="created" value="Create Question"/>
</form>

<?php
if(isset($_POST["created"])){
    $Question = $_POST["Question"];
    if(!empty($Question)){
        require("config.php");
        $connection_string = "mysql:host=$dbhost;dbname=$dbdatabase;charset=utf8mb4";
        try{
            $db = new PDO($connection_string, $dbuser, $dbpass);
            $stmt = $db->prepare("INSERT INTO Questions (Question) VALUES (:Question,)");
            $result = $stmt->execute(array(
                ":Question" => $Question,
            ));
            $e = $stmt->errorInfo();
            if($e[0] != "00000"){
                echo var_export($e, true);
            }
            else{
                echo var_export($result, true);
                if ($result){
                    echo "Successfully inserted new thing: " . $Question;
                }
                else{
                    echo "Error inserting record";
                }
            }
        }
        catch (Exception $e){
            echo $e->getMessage();
        }
    }
    else{
        echo "Question must not be empty.";
    }
}
?>