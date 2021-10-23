<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="contact.css">


</head>

<body>

<div class="container">
  <form action="action_page.php">
            <label>Name</label>
            <input id="name" type="text" placeholder="Enter Name">
            <br><br>

            <label>Email</label>
            <input id="email" type="text" placeholder="Enter Email">
            <br><br>

            <label>Subject</label>
            <input id="subject" type="text" placeholder=" Enter Subject">
            <br><br>

            <p>Message</p>
            <textarea id="body" rows="5" placeholder="Type Message"></textarea>
            <!--textarea tag should be closed (In this coding UI textarea close tag cannot be used)-->
            <br><br>

            <button type="submit" onclick="sendEmail()" value="Send An Email">Submit</button>

  </form>

    <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript">
        function sendEmail() {
            var name = $("#name");
            var email = $("#email");
            var subject = $("#subject");
            var body = $("#body");

            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
                $.ajax({
                    url: 'sendEmail.php',
                    method: 'POST',
                    dataType: 'json',
                    data: {
                        name: name.val(),
                        email: email.val(),
                        subject: subject.val(),
                        body: body.val()
                    },
                    success: function(response) {
                        $('#myForm')[0].reset();
                        $('.sent-notification').text("Message Sent Successfully.");
                    }
                });
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
    </script>

</body>

</html>


