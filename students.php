<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Students</title>
  <style>
    table, tr, td{
      border: 1px solid black;
    }
  </style>
</head>
<body>
  <?php 
    $students = [
      [
        'name' => 'Alice',
        'program' => 'BIP',
        'age' => 21
      ],
      [
        'name' => 'Bob',
        'program' => 'BIS',
        'age' => 20
      ],
      [
        'name' => 'Raju',
        'program' => 'BIT',
        'age' => 22
      ],
    ];
  ?>
  <table>
    <?php 
      echo "
        <tr>
          <td>Name</td>
          <td>Program</td>
          <td>Age</td>
        </tr>
      ";
      foreach($students as $student) {
        echo "
          <tr>
            <td>$student[name]</td>
            <td>$student[program]</td>
            <td>$student[age]</td>
          </tr>
        ";
      }
    ?>
  </table>
</body>
</html>

