<?php
include './partials/header.php';
include './partials/nav.php';
?>
<main class="pt-2 pb-5 mb-5">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-lg-6">
                <table>
                    <tr>
                        <th>
                            <?php
                            $a = 1;
                            $b = 1;
                            $rows = 10;
                            while ($a < 2) {
                                if ($b <= $rows) {
                                    $h = $a * $b;
                                    echo "$a &times; $b  = $h";
                                    echo "<br>";
                                    $b++;
                                } else {
                                    $a++;
                                    $b = 1;
                                }
                            }
                            ?>
                        </th>
                        <th> <?php
                                $a = 2;
                                $b = 1;
                                $rows = 10;
                                while ($a < 3) {
                                    if ($b <= $rows) {
                                        $h = $a * $b;
                                        echo "$a &times; $b  = $h";
                                        echo "<br>";
                                        $b++;
                                    } else {
                                        $a++;
                                        $b = 1;
                                    }
                                }
                                ?></th>
                        <th> <?php
                                $a = 3;
                                $b = 1;
                                $rows = 10;
                                while ($a < 4) {
                                    if ($b <= $rows) {
                                        $h = $a * $b;
                                        echo "$a &times; $b  = $h";
                                        echo "<br>";
                                        $b++;
                                    } else {
                                        $a++;
                                        $b = 1;
                                    }
                                }
                                ?></th>
                        <th> <?php
                                $a = 4;
                                $b = 1;
                                $rows = 10;
                                while ($a < 5) {
                                    if ($b <= $rows) {
                                        $h = $a * $b;
                                        echo "$a &times; $b  = $h";
                                        echo "<br>";
                                        $b++;
                                    } else {
                                        $a++;
                                        $b = 1;
                                    }
                                }
                                ?></th>
                        <th> <?php
                                $a = 5;
                                $b = 1;
                                $rows = 10;
                                while ($a < 6) {
                                    if ($b <= $rows) {
                                        $h = $a * $b;
                                        echo "$a &times; $b  = $h";
                                        echo "<br>";
                                        $b++;
                                    } else {
                                        $a++;
                                        $b = 1;
                                    }
                                }
                                ?>
                        </th>
                    </tr>
                    <tr>
                        <th> <?php
                                $a = 6;
                                $b = 1;
                                $rows = 10;
                                while ($a < 7) {
                                    if ($b <= $rows) {
                                        $h = $a * $b;
                                        echo "$a &times; $b  = $h";
                                        echo "<br>";
                                        $b++;
                                    } else {
                                        $a++;
                                        $b = 1;
                                    }
                                }
                                ?></th>
                        <th> <?php
                                $a = 7;
                                $b = 1;
                                $rows = 10;
                                while ($a < 8) {
                                    if ($b <= $rows) {
                                        $h = $a * $b;
                                        echo "$a &times; $b  = $h";
                                        echo "<br>";
                                        $b++;
                                    } else {
                                        $a++;
                                        $b = 1;
                                    }
                                }
                                ?></th>
                        <th> <?php
                                $a = 8;
                                $b = 1;
                                $rows = 10;
                                while ($a < 9) {
                                    if ($b <= $rows) {
                                        $h = $a * $b;
                                        echo "$a &times; $b  = $h";
                                        echo "<br>";
                                        $b++;
                                    } else {
                                        $a++;
                                        $b = 1;
                                    }
                                }
                                ?></th>
                        <th> <?php
                                $a = 9;
                                $b = 1;
                                $rows = 10;
                                while ($a < 10) {
                                    if ($b <= $rows) {
                                        $h = $a * $b;
                                        echo "$a &times; $b  = $h";
                                        echo "<br>";
                                        $b++;
                                    } else {
                                        $a++;
                                        $b = 1;
                                    }
                                }
                                ?></th>
                        <th> <?php
                                $a = 10;
                                $b = 1;
                                $rows = 10;
                                while ($a < 11) {
                                    if ($b <= $rows) {
                                        $h = $a * $b;
                                        echo "$a &times; $b  = $h";
                                        echo "<br>";
                                        $b++;
                                    } else {
                                        $a++;
                                        $b = 1;
                                    }
                                }
                                ?></th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</main>
<?php
include './partials/footer.php';
?>