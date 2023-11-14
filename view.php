<?php

include "config.php";

$sql = "SELECT * FROM form";

$result = $conn->query($sql);

?>

<!DOCTYPE html>

<html>

<head>

    <title>View Page</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


</head>

<body>

    <div class="container">

        <h2>form</h2>

        <table class="table">

            <thead>

                <tr>
                    <th>ID</th>
                    <th>Unit/Department</th>
                    <th>Location</th>
                    <th>Position</th>
                    <th>Grade</th>
                    <th>Reporting to</th>
                    <th>Salary Range</th>
                    <th>Number of person required</th>
                    <th>Gender</th>
                    <th>Justification</th>
                    <th>When Required</th>
                    <th>Job Description</th>
                    <th>SSC</th>
                    <th>HSC</th>
                    <th>Diploma</th>
                    <th>Bechelor</th>
                    <th>Master</th>
                    <th>Other</th>
                    <th>Experience Level</th>
                    <th>Age Range</th>
                    <th>Physique</th>
                    <th>Appearance</th>
                    <th>Sourcing</th>
                </tr>

            </thead>

            <tbody>

                <?php

                if ($result->num_rows > 0) {

                    while ($row = $result->fetch_assoc()) {

                        ?>

                        <tr>

                            <td>
                                <?php echo $row['id']; ?>
                            </td>

                            <td>
                                <?php echo $row['unit_department']; ?>
                            </td>

                            <td>
                                <?php echo $row['location']; ?>
                            </td>

                            <td>
                                <?php echo $row['position']; ?>
                            </td>

                            <td>
                                <?php echo $row['grade']; ?>
                            </td>
                            <td>
                                <?php echo $row['reporting_to']; ?>
                            </td>

                            <td>
                                <?php echo $row['salary_range']; ?>
                            </td>

                            <td>
                                <?php echo $row['number_of_persons_require']; ?>
                            </td>

                            <td>
                                <?php echo $row['gender']; ?>
                            </td>

                            <td>
                                <?php echo $row['justification']; ?>
                            </td>
                            <td>
                                <?php echo $row['when_required']; ?>
                            </td>

                            <td>
                                <?php echo $row['job_description']; ?>
                            </td>

                            <td>
                                <?php echo $row['ssc']; ?>
                            </td>

                            <td>
                                <?php echo $row['hsc']; ?>
                            </td>

                            <td>
                                <?php echo $row['diploma']; ?>
                            </td>
                            <td>
                                <?php echo $row['bechelor']; ?>
                            </td>

                            <td>
                                <?php echo $row['master']; ?>
                            </td>

                            <td>
                                <?php echo $row['other']; ?>
                            </td>

                            <td>
                                <?php echo $row['experience_level']; ?>
                            </td>

                            <td>
                                <?php echo $row['age_range']; ?>
                            </td> 
                            <td>
                                <?php echo $row['physique']; ?>
                            </td>

                            <td>
                                <?php echo $row['appearance']; ?>
                            </td>
                            <td>
                                <?php echo $row['sourching']; ?>
                            </td>


                            <td><a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;<a
                                    class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>

                        </tr>

                    <?php }

                }

                ?>

            </tbody>

        </table>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</body>

</html>