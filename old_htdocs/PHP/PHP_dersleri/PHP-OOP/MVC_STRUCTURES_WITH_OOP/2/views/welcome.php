<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div>
    <table border>
        <thead>
            <tr>
                <th>Ad</th>
                <th>Soyad</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
               <?php foreach ($data as $d){ ?>
                   <tr>
                       <td><?php  echo $d['name'].'<br>'; ?></td>
                       <td><?php  echo $d['surname'].'<br>'; ?></td>
                       <td><?php  echo $d['status'].'<br>'; ?></td>
                   </tr>
               <?php  } ?>
        </tbody>

    </table>
</div>

</body>
</html>
