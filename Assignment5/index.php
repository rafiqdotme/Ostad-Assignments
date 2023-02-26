<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modiul 5 Assignment By Md. Rafiqul Isalm</title>
</head>
<body>
    <h1>Assignment Title: HTML, Basic OOP, and Superglobal Variables in PHP By Md. Rafiqul Isalm</h1>
    <form action="" method="post">
        <label>Name: </label>
        <input type="text" name="name">
        <br>
        <br>
        <label>Email: </label>
        <input type="email" name="email">
        <br>
        <br>
        <input type="submit" value="Submit">
    </form>
    <br>

    <?php
    if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
        $name  = $_POST['name'];
        $email = $_POST['email'];

        class Person {
            private $name;
            private $email;

            public function setName( $name ) {
                $this->name = $name;
            }

            public function setEmail( $email ) {
                $this->email = $email;
            }

            public function getName() {
                return $this->name;
            }

            public function getEmail() {
                return $this->email;
            }
        }

        $person = new Person();

        $person->setName( $name );
        $person->setEmail( $email );

        echo 'Name: ' . $person->getName() . '<br>';
        echo 'Email: ' . $person->getEmail();
    }
    ?>

</body>
</html>