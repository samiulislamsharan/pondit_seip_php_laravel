<!DOCTYPE html>
<html>

<head>
    <title>Simple Calculator</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2>Simple Calculator</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <input type="text" class="form-control" name="num1" placeholder="Enter number 1" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="num2" placeholder="Enter number 2" required>
            </div>
            <div class="form-group">
                <select class="form-control" name="operator">
                    <option value="+">Addition (+)</option>
                    <option value="-">Subtraction (-)</option>
                    <option value="*">Multiplication (*)</option>
                    <option value="/">Division (/)</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Calculate</button>
        </form>

        <?php
        // Check if form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve values from form
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operator = $_POST['operator'];

            // Perform calculation based on the selected operator
            switch ($operator) {
                case '+':
                    $result = $num1 + $num2;
                    break;
                case '-':
                    $result = $num1 - $num2;
                    break;
                case '*':
                    $result = $num1 * $num2;
                    break;
                case '/':
                    if ($num2 != 0) {
                        $result = $num1 / $num2;
                    } else {
                        $result = "Cannot divide by zero";
                    }
                    break;
                default:
                    $result = "Invalid operator";
            }

            // Display the result
            echo '<div class="mt-3">';
            echo '<h3>Result: ' . $result . '</h3>';
        }
        ?>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>