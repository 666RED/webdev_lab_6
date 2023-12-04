<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Lab 6 Q1</title>
  </head>
  <body>
    <?php 
        $name = "Muhammad Asyraf";
        $matricNumber = "AI123456";
        $course = "Software Engeneering";
        $yearOfStudy = 2023;
        $address = "No 13, Taman University, 86400 Parit Raja, Johor";
    ?>
    <table>
      <tr>
        <td>Name</td>
        <td><?php echo "$name"; ?></td> 
      </tr>
      <tr>
        <td>Matric Number</td>
        <td><?php echo "$matricNumber"; ?></td>
      </tr>
      <tr>
        <td>Course</td>
        <td><?php echo "$course"; ?></td>
      </tr>
      <tr>
        <td>Year of Study</td>
        <td><?php echo "$yearOfStudy"; ?></td>
      </tr>
      <tr>
        <td>Address</td>
        <td><?php echo "$address"; ?></td>
      </tr>
    </table>
  </body>
</html>