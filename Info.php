<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Document</title>
    <style>
    .wrapper {
            width: 600px;
            margin: 0 auto;
        }

        table tr td:last-child {
            width: 120px;
        }
    .navigation { background-color: lightcyan; padding-top: 25px; padding-bottom: 25px;}
 h1 { padding-bottom: 15px;font-size:25px; padding-left: 20px; }
 ul li { list-style: none; display: flex; font-size: 22px;}
 a:visited { text-decoration: none; color: black;}
 a:link { text-decoration: none;}
 ul { width: 70px; margin-left: 20px; padding-right: 25px;}
 .navigation { border: 2px solid black;}
 .yoga { text-align: center; padding-left: 100px; padding-right: 100px; padding-top: 50px;}
 h3 { color: blue;}
    </style>
<script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</head>
<body>
<nav class="navigation">
<h1> What is Yoga</h1>
<ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="Info.php">Info</a></li>
        <li><a href="about.html"> About</a></li>
 </ul>
</nav>
 <p class=" yoga">While modern media and advertising may have us think that yoga is all about physical poses, the entirety of yoga
 includes a wide range of contemplative and self-disciplinary practices, such as meditation, chanting, mantra, prayer,
  breath work, ritual, and even selfless action. The word “yoga” comes from the root word “yuj,” which means “to yoke”
   or “to bind.” The word itself has numerous meanings, from an astrological conjunction to matrimony, with the underlying
    theme being connection. Yoga asana is the physical practice and postures of yoga. The scientific research into yoga's
     benefits is still somewhat preliminary, but much of the evidence so far supports what practitioners seem to have 
     known for millennia: Yoga is incredibly beneficial to our overall well-being.</p>
    <h3> Our Employees detail </h3>
<p class="yoga">Yoga classes for employees offer a holistic approach to fostering well-being in the workplace. Beyond the physical
     benefits of increased flexibility and strength, these sessions serve as valuable opportunities for relaxation, 
     stress reduction, and team building. By providing employees with access to yoga classes, employers demonstrate
     a commitment to their overall health and happiness. Moreover, practicing yoga together encourages camaraderie 
     and creates a sense of community within the organization. Employees leave these sessions feeling rejuvenated,
      empowered, and more connected to their colleagues. Ultimately, integrating yoga into the work environment 
      promotes not only physical wellness but also mental clarity and emotional resilience, contributing to a more
       positive and productive workplace culture. </P>
<div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">Employees Details</h2>
                        <a href="create.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Employee</a>
                    </div>
                    <?php
                    // Include config file
                    require_once "config.php";

                    // Attempt select query execution
                    $sql = "SELECT * FROM employees";
                    if ($result = mysqli_query($link, $sql)) {
                        if (mysqli_num_rows($result) > 0) {
                            echo '<table class="table table-bordered table-striped">';
                            echo "<thead>";
                            echo "<tr>";
                            echo "<th>#</th>";
                            echo "<th>Name</th>";
                            echo "<th>Address</th>";
                            echo "<th>Salary</th>";
                            echo "<th>Action</th>";
                            echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<tr>";
                                echo "<td>" . $row['id'] . "</td>";
                                echo "<td>" . $row['Name'] . "</td>";
                                echo "<td>" . $row['Address'] . "</td>";
                                echo "<td>" . $row['salary'] . "</td>";
                                echo "<td>";
                                echo '<a href="read.php?id=' . $row['id'] . '" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                echo '<a href="update.php?id=' . $row['id'] . '" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                echo '<a href="delete.php?id=' . $row['id'] . '" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                echo "</td>";
                                echo "</tr>";
                            }
                            echo "</tbody>";
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else {
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else {
                        echo "Oops! Something went wrong. Please try again later.";
                    }

                    // Close connection
                    mysqli_close($link);
                    ?>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>
