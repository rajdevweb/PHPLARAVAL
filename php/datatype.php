

<!-- integer -->
<!doctype html>
<html>
    <head>
        <title>
            datatype
        </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Datatype with raj</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!-- 8 type of datatype in php  -->
<!-- 1.interger
2.float
3.string
4.array
5.boolean
6.object  
7.NULl
8.resource  -->

    <?php
// 1.integer
// $a = 15;
// $b = 067;
// $c = 15*3;
// {
//     echo "Decimal Number :".$a."</br>";
//     echo "Octal Number   :".$b."</br>";
//     echo "Hexadecimal Number :".$c."</br>";
// }
/*2.Float
$roy = 14.2;
$soy = 15.2;
$sum = $roy + $soy;

    echo "enter float number :".$roy."</br>";
    echo "Enter Second number :".$soy."</br>";
    echo "Addiont of floating number :".$sum."</br>"
    */


3.array 

    $employee = array ("rohan","raj","sohma","paras","shiv" );
    echo var_dump ($employee);
    echo "<br>";
    echo $employee[0];
    echo "<br>";
    echo $employee[1];
    echo "<br>";
    echo $employee[2];
    echo "<br>";
    echo $employee[3];
    echo "<br>"; 
    echo $employee[4];

/*4. Null

$employee_name = null;

echo var_dump($employee_name);*/

// 5.boolean

$x = true;
$y = false;


    echo var_dump($x);
    echo "<br>";
    echo var_dump($y);



    


?>
    </body>
</html>


