<!DOCTYPE html>
<html>
<script>

</script>

<body>
    <!-- VARIABLE -->

    <!-- IF ELSE -->

    <!-- SWITCH -->

    <!-- FOREACH -->

    <!-- FUNCTION -->
    <?php
        function nama($nama, $ulangtahun) {
        echo "Nama saya adalah = $nama, Ulang tahun saya tanggal = $ulangtahun";
        }
        nama("Nizar", "25");
    ?>
    <br>

    <!-- ARRAY -->
    <?php
        $cars = array("Volvo", "BMW", "Toyota");
        echo "I like " . $cars[0];
    ?>
    <br>

    <!-- DATE AND TIME -->
    <?php
        echo "Today is " . date("Y/m/d") . "<br>";
        echo "Today is " . date("Y.m.d") . "<br>";
        echo "Today is " . date("Y-m-d") . "<br>";
        echo "Today is " . date("l");
    ?>
    <br>
    <br>

    <!-- PHP OOP -->
    <?php
        class Fruit {
        // Properties
        public $name;
        public $color;

        // Methods
        function set_name($name) {
            $this->name = $name;
        }
        function get_name() {
            return $this->name;
        }
        }

        $apple = new Fruit();
        $banana = new Fruit();
        $apple->set_name('Apple');
        $banana->set_name('Banana');

        echo $apple->get_name();
        echo "<br>";
        echo $banana->get_name();
    ?>
    <br>
    <br>
    <!-- SESSION -->
    <?php
        session_start();
        echo 'Id user saya adalah ' . $_SESSION['logged_in_user_id'];
        echo '<br>';
        echo 'Username saya adalah ' . $_SESSION['logged_in_user_name'];
    ?>
</body>

</html>