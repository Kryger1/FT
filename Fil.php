<!DOCTYPE html>
<html>
<head>
    <title>Tilmeld dig vores SMS-tjeneste</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<div class="container mt-5 text-center">
    <h2 class="mb-4">Tilmeld dig vores SMS-tjeneste</h2>
    <p class="mb-4">Indtast dit telefonnummer for at modtage vigtige opdateringer og nyheder direkte på SMS.</p>
    <form id="smsForm" class="d-inline-block text-left">
        <input type="hidden" name="countrycode" value="45" />
        <input type="hidden" name="redirectUrl" value="https://mivu.dk/folke/" />

        <p>
            <label for="phonenumber">Mobilnummer</label><br />
            +45 <input type="text" name="phonenumber" id="phonenumber" value="" required />
        </p>
        <p>
            <label for="name">Navn</label><br />
            <input type="text" name="name" id="name" value="" placeholder="Navn" />
        </p>
        <p>
            <label for="zipCode">Postnr.</label><br />
            <input type="text" name="zipCode" id="zipCode" value="" placeholder="Postnr." />
        </p>

        <p>
            <button type="submit">Tilmeld</button>
        </p>
    </form>
    <div id="responseMessage" class="mt-4" style="display:none;"></div>
</div>

<script>
    $(document).ready(function(){
        $('#smsForm').on('submit', function(event){
            event.preventDefault(); // Forhindrer standard form submission

            $.ajax({
                url: 'submit.php',
                method: 'POST',
                data: $(this).serialize(),
                success: function(data){
                    $('#responseMessage').text(data.message).show(); // Vis beskeden
                    $('#smsForm')[0].reset(); // Nulstil formularen
                },
                error: function() {
                    $('#responseMessage').text('Der opstod en fejl. Prøv igen senere.').show(); // Fejlbesked
                }
            });
        });
    });
</script>
</body>
</html>
