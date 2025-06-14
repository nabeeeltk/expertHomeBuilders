<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "nabeelmuhamed406@email.com"; // replace with your email
    $subject = "New Enquiry";

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $project_plan = $_POST['project_plan'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $body = "Name: $first_name $last_name\n";
    $body .= "Phone: $phone\n";
    $body .= "Project Plan: $project_plan\n";
    $body .= "Message:\n$message\n";

    $headers = "From: noreply@yourdomain.com";

    if (mail($to, $subject, $body, $headers)) {
        echo "Enquiry sent successfully!";
    } else {
        echo "Failed to send enquiry.";
    }
}
?>
<!-- 
<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $to = "your@email.com"; // change this
//     $subject = "New Enquiry";

//     $first_name = $_POST['first_name'];
//     $last_name = $_POST['last_name'];
//     $project_plan = $_POST['project_plan'];
//     $phone = $_POST['phone'];
//     $message = $_POST['message'];

//     $body = "Name: $first_name $last_name\n";
//     $body .= "Phone: $phone\n";
//     $body .= "Project Plan: $project_plan\n";
//     $body .= "Message:\n$message\n";

//     $headers = "From: noreply@yourdomain.com";

//     if (mail($to, $subject, $body, $headers)) {
//         echo "Enquiry sent successfully!";
//     } else {
//         echo "Failed to send enquiry.";
//     }
// }
?>

<form action="" method="POST">
  <input type="text" name="first_name" placeholder="First Name">
  <input type="text" name="last_name" placeholder="Last N
  
  ame">
  <select name="project_plan">
    <option value="Emi Projects">Emi Projects</option>
    <option value="Normal Projects">Normal Projects</option>
    <option value="Custom Projects">Custom Projects</option>
  </select>
  <input type="text" name="phone" placeholder="Phone">
  <textarea name="message" placeholder="Message"></textarea>
  <button type="submit">Submit</button>
</form> -->
