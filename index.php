<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 15 PHP Basics</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
          rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
          crossorigin="anonymous">
</head>
<body>
    <div class="text-center m-5 p-5 border shadow">
        <h1 class="fw-bold">Activity 15 PHP Basics</h1>
    </div>
    
    <div class="text-center min-vw-100 mt-4">
        
        <?php
        
        print "<h2>Variable Declaration and Data Types</h2>";

        $UserName = "John Doe";
        $UserID = 11;
        $UserPromotion = true;

        echo "Employee name: $UserName <br>";
        echo "Employee ID: $UserID <br>";
        echo "Does the employee got the promotion? " . ($UserPromotion ? 'Yes' : 'No') . "<br><br>";

        print "<h2>Conditionals</h2>";

        if($UserID > 10)
        {
            echo "Employee ID is Greater than 10" . "<br>" . "<br>";
        }
        else
        {
            echo "Employee ID is Less than 10" . "<br>" . "<br>";
        }

        print "<h2>Loops</h2>";

        print "This for loop will count from 1 to 5 = ";

        for ($forLoopCount = 1; $forLoopCount <= 5; $forLoopCount++)
        {
            echo " " . $forLoopCount;
        }

        print "<br>";

        print "This While loop will count from 5 to 1 = ";

        $counter = 5;

        while ($counter >= 1)
        {
            echo " " . $counter;
            $counter--;
        }

        print "<br><br>";

        print "<h2>Arrays</h2>";

        $fruits = array("Mango", "Banana", "Avocado");

        echo "This is my favorite fruits: <br>";

        foreach ($fruits as $fruit)
        {
            echo "• " . $fruit . "<br>";
        }

        print "<br><br>";

        $person = array
        (
            'Name' => 'John Doe',
            'Age' => 25,
            'City' => 'Kings Landing'
        );

        print "Employee details" . "<br>";

        foreach ($person as $employeedata => $value)
        {
            echo ($employeedata) . ": " . $value . "<br>";
        }

        print "<br>";

        print "<h2>Functions</h2>";

        function calculateSum($num1, $num2) 
        {
            return $num1 + $num2;
        }

        $result1 = calculateSum(5, 10);
        $result2 = calculateSum(15, 20);
        $result3 = calculateSum(8, 12);

        echo "Result 1: $result1<br>";
        echo "Result 2: $result2<br>";
        echo "Result 3: $result3<br><br>";

        ?>

        <h2>Form Handling</h2>
        <div class="container d-flex align-content-center justify-content-center mb-2">
            <form method="POST" action="newemployee.php">
                <label for="employeeName" class="mb-2">Add new Employee:</label>
                <input type="text" id="employeeName" name="employeeName" class="form-control" required>
                <button class="btn bg-black text-light mt-2" type="submit">Add</button>
            </form>
        </div>
    </div>
</body>
</html>
