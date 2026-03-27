<?php
require("functions.inc.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ekhaya Logistics Rate Estimation</title>
</head>
<body>
    <div class="container" style="margin-top:50px;">
        <form action="POST" id="get_rates_form">
            <div class="form-group">
                <label>Select Country</label>
                <select name="country" id="">
                    <option value="" disabled selected>Select Country</option>
                    <?php 
                    $countries = mysqli_query($link, "SELECT * FROM fedex_map_zone ORDER BY id ASC");
                    if ($countries)
                    {
                        while ($country = mysqli_fetch_assoc($countries))
                        {
                            ?>
                            <option value="<?php echo $country['zone'] ?>"><?php echo $country["country"] ?></option>

                            <?php
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label>Weight</label>
                <input type="number" name="weight">

            </div>
            <button type="submit">Check rates</button>
        </form>
        <div id="result">

        </div>
    </div>
    
    <script src="jquery-ui/external/jquery/jquery.js"></script>
    <script >
        $("#get_rates_form").submit(function(e)
        {
            e.preventDefault();
            $.ajax({
                url:'get_rates.php',
                method: 'POST',
                data: $(this).serialize(),
                success:function(res)
                {
                    $("#result").html(res)
                }
            })
        })
    </script>
</body>
</html>