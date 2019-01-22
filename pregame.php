<?php
   $pagetitle = "Pregame";
   include('Includes/head.php');
   include('PHP/dbconnect.php');
   include('Includes/navbar.php');
   include('PHP/requirelogin.php');
   ?>
<div class="headerwrap">
   <div class="container text-center headerpad">
      <h1 class="display-2">4 op 'n rij</h1>
      <p class="lead">Kies de grootte van het bord.</p>
   </div>
</div>
<div class="requestwrap">
   <div class="container text-center headerpad">
      <h1 class="display-4">Inkomende verzoeken</h1>
      <?php
         $id          = mysqli_real_escape_string($link, $_SESSION['id']);
         $sql         = "SELECT * FROM gamerequest WHERE requestto = '$id';";
         $result      = mysqli_query($link, $sql);
         $resultcheck = mysqli_num_rows($result);
         if ($resultcheck > 0) {
             while ($row = mysqli_fetch_assoc($result)) {
                 $friendname = $row['fromname'];
                 echo '<div class="col-4">
                     <form action="PHP/acceptgamerequest.php" method="POST">
                     <h3>' . $friendname . '</h3>
                     <button value="' . $friendname . '" class="btn btn-primary" name="acceptgamerequest" type="submit">Accepteer spelverzoek</button>
                     </form>
                     </div>';
                 
             }
         } else {
             echo "je hebt geen spel uitnodigingen";
         }
         
         
         
         ?>
   </div>
</div>
<div class="container">
   <form action="gamesizeselect.php" method="POST">
      <table class="table">
         <thead>
            <tr>
               <th scope="col">#</th>
               <th scope="col">Speler1</th>
               <th scope="col">Speler2</th>
               <th scope="col">Beurten</th>
            </tr>
            <?php
               $i           = 1;
               $sql         = "SELECT * FROM games WHERE user1 = '$id' OR user2 = '$id';";
               $result      = mysqli_query($link, $sql);
               $resultcheck = mysqli_num_rows($result);
               if ($resultcheck > 0) {
                   
                   while ($row = mysqli_fetch_assoc($result)) {
                       $gameid = $row['gameid'];
                       echo '
                            <tr>
                            <th scope="row">' . $i . '  <button type="submit" value="' . $gameid . '" name="playgame">Speel</button></th>
                            <td>' . $row["name1"] . '</td>
                            <td>' . $row["name2"] . '</td>
                            <td>' . $row["turns"] . '</td>
                            </tr>
                            ';
                       $i++;
                       
                   }
                   
               } else {
                   echo "je hebt geen spellen";
               }
               ?>
            </tbody>
      </table>
   </form>
</div>
<?php
   include('Includes/footer.php');
   ?>