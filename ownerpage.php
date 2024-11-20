<?php
    include('db.php');

    $moviesPerPage = 10;
    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    $start = ($page > 1) ? ($page * $moviesPerPage) - $moviesPerPage : 0;

    $result = $db->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM movies LIMIT ?, ?");
    $result->bind_param("ii", $start, $moviesPerPage);
    $result->execute();
    $movies = $result->get_result()->fetch_all(MYSQLI_ASSOC);

    $total = $db->query("SELECT FOUND_ROWS() as total")->fetch_assoc()['total'];
    $pages = ceil($total / $moviesPerPage);

    $currentPage = $page;
    $lastPage = $pages;
    $nextPage = ($currentPage < $lastPage) ? $currentPage + 1 : null;
    $prevPage = ($currentPage > 1) ? $currentPage - 1 : null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Owner web page</title>
    <link rel="stylesheet" href="owner.css">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }
        .pagination {
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 20px 0;
    position:relative;
     top:430px;
}

.pagination a {
    margin: 0 10px;
    text-decoration: none;
    color: #4CAF50;
    padding: 5px 10px;
    border: 1px solid #4CAF50;
    border-radius: 5px;
}

.pagination a:hover {
    background-color: #4CAF50;
    color: white;
}

.pagination .disabled {
    color: #ccc;
    border-color: #ccc;
    background-color: #f2f2f2;
}
    </style>
</head>
<body>
  <form action="ow.php" method="post" novalidate>
  <div class="bod">

    <div class="container cc">
    <input class="input" name="Name_of_movie" type="text" id="name" required="" value="">
    <label class="label">Name of movie</label>
  </div>
  

    <div class="container cc2">
      <input class="input" name="dt" type="datetime-local" id="dt" required="">
      <label class="label"></label>
    </div>

    
<div class="container cc3">
  <input class="input" name="com" type="text" id="Com" required="">
  <label class="label">Comercial</label>
</div>
<div class="container v">
  <textarea class="input" name="des" type="text" id="Description" required="" style="height:150px; vertical-align:top;"></textarea>
  <label class="label">Discreption</label>
</div>


    <label for="img"></label>
  <input type="file" id="img" name="img" accept="image/*" class="b3">
  <button id="add-btn" class="b">
    Add 
  </button>
  
</form>
<form action="owupdate.php" method="POST">


<div class="container cc6">
<input class="input" name="Name_of_movie" type="text" id="name" required="" value="">
<label class="label">Name of movie</label>
</div>


<div class="container cc7">
  <input class="input" name="newDate" type="datetime-local" id="dt" required="">
  <label class="label"></label>
</div>
<button id="btn" class="b2">
  Update 
</button>
</form>

  



<form action="owdelete.php" method="POST"> 
<div class="container cc5">
    <input class="input" name="Name_of_movie" type="text" id="name" required="" value="">
    <label class="label">Name of movie</label>
</div>
<button id="btn" class="b4">
  delete 
</button>
</form>
<form  action="http://localhost:3000/movies1.php">
<a herf="http://localhost:3000/movies1.php">
<button id="btn" class="b66" >
  Back to movies 
</button></a></form>

<div style="position:relative; top:420px;">
<table>
    <tr>
        <th>Name of movie</th>
        <th>Time & Date</th>
        <th>Num of audience</th>
    </tr>
    <?php foreach ($movies as $movie): ?>
        <tr>
            <td><?php echo htmlspecialchars($movie['Name_of_movie']); ?></td>
            <td><?php echo htmlspecialchars($movie['Time&Date']); ?></td>
            <td><?php echo htmlspecialchars($movie['num of audience']); ?></td>
        </tr>
    <?php endforeach; ?>
</table>
<tr>
            <td><?php echo htmlspecialchars($movie['Name_of_movie']); ?></td>
            <td><?php echo htmlspecialchars($movie['Time&Date']); ?></td>
            <td><?php echo htmlspecialchars($movie['num of audience']); ?></td>
        </tr></div>
        <div class="pagination">
    <?php if ($prevPage !== null): ?>
        <a href="?page=<?php echo $prevPage; ?>">Previous</a>
    <?php else: ?>
        <span class="disabled">Previous</span>
    <?php endif; ?>

    <span><?php echo "Page $currentPage of $lastPage"; ?></span>

    <?php if ($nextPage !== null): ?>
        <a href="?page=<?php echo $nextPage; ?>">Next</a>
    <?php else: ?>
        <span class="disabled">Next</span>
    <?php endif; ?>
</div>
    </div>
</body>
</html>