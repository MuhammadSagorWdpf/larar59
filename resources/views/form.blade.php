<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form make</title>
</head>
<body>
    <?php
    echo Form::open(array('url'=>'xyz/abc','method'=>'Post'));
    echo Form::text('username','username');
     echo '<br/>';
     echo Form::email('email','sagorwdpf@gmail.com');
     echo '<br/>';
     echo Form::Radio('name','Male');
     echo '<br/>';
     echo Form::Checkbox('name','value');
     echo '<br/>';
     echo Form::file('image');
     echo '<br/>';
     echo Form::select('size',array('L'=>'Large','S'=>'Small'));
     echo '<br/>';
     echo Form::password('password');
     echo '<br/>';
     echo Form::submit('send');
    echo Form::close()
    ?>
</body>
</html>