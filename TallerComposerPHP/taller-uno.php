<body>
    <h1>Primer Taller PHP</h1>
    <form action="taller-uno.php" method="post">
        <h1>BMI Calculator</h1>
        Name:  <input type="text" name="name" placeholder="Name" /><br />
        Email: <input type="text" name="email" placeholder="Email"/><br />
        Height: <input type="text" name="height" placeholder="Height"/><br />
        Weight: <input type="text" name="weight" placeholder="Weight"/><br />
        <h1>Unit Converter (Kilometer, Centimeter, Mile to Meters)</h1>
        Unit Type (Kilometer, Centimeter, Mile):  <input type="text" name="type" placeholder="Type" /><br />
        Unit Value: <input type="text" name="value" placeholder="Value"/><br />
        <br>
        <input type="submit" name="submit" value="Save data." />
    </form>

    <?php
        // Required Imports
        require_once 'vendor/autoload.php';
        use App\Models\User;
        use App\Models\Unit;
        require_once('Models/User.php');
        require_once('Models/Unit.php');
        use Symfony\Component\Mailer\Transport;
        use Symfony\Component\Mailer\Mailer;
        use Symfony\Component\Mime\Email;
       
        // Input Variables        
        $input_name = $_POST['name'];
        $input_email = $_POST['email'];
        $input_height = $_POST['height'];
        $input_weight = $_POST['weight'];

        $input_unit_type = $_POST['type'];
        $input_unit_value = $_POST['value'];

        // Input Validation for Class Instantiation and Calculation (User)
        if($input_name != '' and  $input_email != '' and  $input_height != '' and $input_weight != '') {
            $user = new User($input_name, $input_email, $input_height, $input_weight);
            $bmi = $user->calculateBMI($user->getHeight(), $user->getWeight());

            echo 'Your BMI: ' . $bmi;

            // PDF Creation. Goes into c:/ folder in Windows systems. You can provide the script with your own route.
            $mpdf = new \Mpdf\Mpdf();
            $mpdf->WriteHTML("<h1> Hello, {$user->getName()} </h1>");
            $mpdf->WriteHTML("<p> Your height is {$user->getHeight()}. </p>");
            $mpdf->WriteHTML("<p> Your weight is {$user->getWeight()}. </p>");
            $mpdf->WriteHTML("<p> Your BMI is: {$bmi} </p>");
            $mpdf->WriteHTML("<h5> Have a nice day! </h5>");
            $mpdf->Output('C:\BMI.pdf');
        }

        // Input Validation for Class Instantiation and Calculation (Unit)
        if($input_unit_type != '' and $input_unit_value != '' and $input_email != '') {
            $unit = new Unit($input_unit_type, $input_unit_value);        

            echo '<br>';
            echo '<br>';
            echo 'Unit Type: ' . $unit->getType();
            echo '<br>';
            echo 'Unit Value: ' . $unit->getValue();
            echo '<br>';
            echo 'Meter Conversion: ' . $unit->convertUnit($unit->getType(), $unit->getValue());

            $transport = Transport::fromDsn('gmail+smtp://USERNAME:PASSWORD@default');
            $mailer = new Mailer($transport);

            // Email function depends on the mail provided by the user, thus you can uncomment the function after deciding which type of email you will use, as I can't provide you with my password.

            // $email = (new Email())
            //     ->from($input_email)
            //     ->to($input_email)
            //     ->subject('Unit Conversion')
            //     ->text("Unit Type: {$unit->getType()}, Unit Value {$unit->getValue()}, Conversion: {$unit->convertUnit($unit->getType(), $unit->getValue())}");
            // $mailer->send($email);
        }
        

        
    ?>
</body>