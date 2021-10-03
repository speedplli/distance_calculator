<?php
require "vendor/autoload.php";
?>
<form action="" method="post">
    <div>
        Algorithm:
        <select name="algorithm">
            <option value="1">Hamming</option>
            <option value="2">Levenshtein</option>
        </select>
    </div>
    <div>
        String A:
        <input type="text" name="string_a">
    </div>
    <div>
        String B:
        <input type="text" name="string_b">
    </div>
    <input type="submit" name="calculate">
</form>
<?php
if (!empty($_POST['algorithm']) && !empty($_POST['string_a']) && !empty($_POST['string_b'])) {
    if ($_POST['algorithm'] === '1') {
        $algorithm = new \Calculation\Algorithms\Hamming();
    } elseif ($_POST['algorithm'] === '2') {
        $algorithm = new \Calculation\Algorithms\Levenshtein();
    } else {
        $algorithm = new \Calculation\Algorithms\Levenshtein();
    }

    echo 'Result: ' . (new \Calculation\Distance($algorithm))->setData($_POST['string_a'], $_POST['string_b'])->distance() . ' operations';
} ?>
