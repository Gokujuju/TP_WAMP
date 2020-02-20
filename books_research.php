<!-- Book research File  -->
<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
  
    require_once('functions_bdd.php');
?>


<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Books Research</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
  </head>

  <body>
      <form method="post" action="books_research.php">
        <h1>Books Research</h1><br/>
        <p><a href='books_index.php'>Index</a></p>
            <label for="author">Author :</label>
            <input type="text" id="author" name="author" />
            <label for="author">Book's name :</label>
            <input type="text" id="title" name="title" />
            <label for="year">Year :</label>
            <input type="number" id="year" name="year" />
            <label for="publisher">Publisher :</label>
            <input type="text" id="publisher" name="publisher" />
        <input type="submit" value="Search"><br/>

        <table>
          <tr>
            <th>Author</th>
            <th>Title</th>
            <th>Year</th>
            <th>Publisher</th>
            <th>Delete</th>
          </tr>

          <?php

            echo "<form method='post' action='books_research.php'>";

          
            if(!empty($_POST['tab'])){
              foreach($_POST['tab'] as $delete){

                $pdo->query("DELETE FROM books WHERE id = $delete");
              }
            }

           
            
            if(empty($_POST["author"]) && empty($_POST["title"]) && empty($_POST["year"]) && empty($_POST["publisher"])){
                $sqlRequest = "SELECT id, author, title, year, publisher FROM books ORDER BY publisher";
            }
            else{
                $research_author = $_POST["author"];
                $research_title = $_POST["title"];
                $research_year = $_POST["year"];
                $research_publisher = $_POST["publisher"];
                $sqlRequest = "SELECT id, author, title, year, publisher FROM books WHERE title LIKE '%$research_title%' AND author LIKE '%$research_author%' AND year LIKE '%$research_year%' AND publisher LIKE '%$research_publisher%' ORDER BY publisher";
            }

            $rst = $pdo->query($sqlRequest);
            do{
                $display = $rst->fetch(PDO::FETCH_ASSOC);
                if(!empty($display)){
                    echo "<tr>";
                    foreach($display as $key => $value){
                        if($key == 'id'){
                          $ID = $value;
                        }
                        else{
                          echo "<td>".$value."</td>";
                        }
                        
                    }
                    echo "<td><input type='checkbox' name='tab[]' value='$ID'></td>";
                    echo "</tr>";
                }
            }
            while(!empty($display));
            
            echo "<input type='submit' value='Delete'>";
            echo "</form>";
          ?>
        </table>
        
      </form>
  </body>


</html>