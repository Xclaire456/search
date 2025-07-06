   <?php
   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
       $query = $_POST['search'];
       $results = searchItems($query);
       echo json_encode($results);
   }
   ?>
   