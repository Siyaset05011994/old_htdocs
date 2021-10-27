<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
    <h1>My First Bootstrap Page</h1>
    <p>Resize this responsive page to see the effect!</p>
</div>

<div class="container">
    <div class="row">
        <form id="form">
            <input type="text" name="number"><br><br>
            <input type="text" name="address"><br><br>
            <button type="button" id="send1">Send1</button>
            <br>
            <br>
            <input type="text" name="price"><br><br>
            <button type="button" id="submitBtn">Submit</button>
        </form>
    </div>
</div>

</body>

  <script>

      $(document).on('click','#send1,#submitBtn',function () {

          var data=$('#form').serialize();


          $.ajax({

              type:'POST',
              url:'index.php',
              data:data,
              success:function (response) {

                  console.log(response);

              }

          })

      });



  </script>

</html>
