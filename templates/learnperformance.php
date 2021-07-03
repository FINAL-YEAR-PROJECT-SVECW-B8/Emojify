<!DOCTYPE html>
<html>
<head>
  <title>Display all records from Database</title>
</head>
<body>

<h2>Student learning Details</h2>

<table border="2">
  <tr>
    <td>Name</td>
    <td>Topic</td>
    <td>Angry%</td>
    <td>Disgust%</td>
    <td>Fear%</td>
    <td>Happy%</td>
    <td>Neutral%</td>
    <td>Sad%</td>
    <td>Surprise%</td>
    <td>Emotion</td>
    <td>Attended(in secs)</td>
    <td>Present/Absent</td>
  </tr>

<?php

$db = mysqli_connect("localhost","root","root","splatz");

$records = mysqli_query($db,"select * from history"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['name']; ?></td>
    <td><?php echo $data['topic']; ?></td>
    <td><?php echo $data['angry']; ?></td>
    <td><?php echo $data['disgust']; ?></td>
    <td><?php echo $data['fear']; ?></td>
    <td><?php echo $data['happy']; ?></td>
    <td><?php echo $data['neutral']; ?></td>
    <td><?php echo $data['sad']; ?></td>
    <td><?php echo $data['surprise']; ?></td>
    <td><?php echo $data['Emotion']; ?></td>
    <td><?php echo $data['attended']; ?></td>
    <td><?php echo $data['present']; ?></td>
  </tr>	
<?php
}
?>
</table>

<?php mysqli_close($db); // Close connection ?>

</body>
</html>
