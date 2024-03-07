<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['Submit'])) {
        $servername = "localhost"; // Change this to your database server
        $username = "root"; // Change this to your database username
        $password = ""; // Change this to your database password
        $dbname = "logregis"; // Change this to your database name

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare and bind the SQL statement
        $stmt = $conn->prepare("INSERT INTO users (email, password, first_name, last_name, address_lot_blk, address_street, address_phase_subdivision, region, province, city, barangay, country, phone_number) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssssssssss", $Email, $password, $FirstName, $LastName, $Address_LotBlk, $Address_Street, $Address_PhaseSubdivision, $region, $province, $city, $barangay, $country, $phone_number);

        // Assign values from $_POST array
        $LastName = $_POST['LastName'];
        $FirstName = $_POST['FirstName'];
        $Address_LotBlk = $_POST['Address_LotBlk'];
        $Address_Street = $_POST['Address_Street'];
        $Address_PhaseSubdivision = $_POST['Address_PhaseSubdivision'];
        $region = $_POST['region_text'];
        $province = $_POST['province_text'];
        $city = $_POST['city_text'];
        $barangay = $_POST['barangay_text'];
        $country = $_POST['country'];
        $phone_number = $_POST['phone_number'];
        $Email = $_POST['Email'];
        $password = $_POST['password']; // Hash the password before storing

        // Execute the SQL statement
        if ($stmt->execute()) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
        $conn->close();
    } 
}    
    ?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/css/intlTelInput.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style>

:root {
  --header-height: 3.5rem;
  /*56px*/

  /*========== Colors ==========*/
  /*Color mode HSL(hue, saturation, lightness)*/
  --primary-color-hue: 352;
  --dark-color-lightness: 17%;
  --light-color-lightness: 92%;
  --white-color-lightness: 100%;

  --color-white: hsl(252, 30%, var(--white-color-lightness));
  --color-light: hsl(252, 30%, var(--light-color-lightness));
  --color-gray: hsl(252, 15%, 65%);
  --color-primary: hsl(var(--primary-color-hue), 75%, 60%);
  --color-dark: hsl(252, 30%, var(--dark-color-lightness));
}

body {
  background-color: var(--color-light);
  color: var(--color-dark);
  line-height: 1.7;
  font-weight: var(--font-medium);
  z-index:-1;
}

#registerform {
    display: block;
    position: fixed;
    top: 50%;
    left: 50%;
    margin-top: 40px;
    margin-bottom: 200px;
    transform: translate(-50%, -50%);
    background-color: rgba(255, 255, 255, 0.8);
    padding: 20px;
    height: 940px;
    width: 550px;
    border-radius: 20px;
    overflow-y: scroll;
}

#registerform form {
    display: flex;
    flex-direction: column;
    align-items: center;
}

#registerform input {
    margin-top: 20px;
    border-radius: 5px;
    width: 500px;
    height: 30px;
    padding: 5px;
    background-color: wheat ;
    border: 1px solid black;
}


#registerform button {
    margin-top: 10px;
    padding: 5px 10px;
    background-color: #000;
    color: #fff;
    border: none;
    cursor: pointer;
}


.intl-tel-input {
  z-index: 9999999;
  width: 150px;
}
.intl-tel-input .country-list {
  z-index: 99999999;
  width: 150px;
}
#registerform select {
  background-color: wheat;
  border: 1px solid black;
  border-radius: 5px;
  height: 30px;
  padding: 5px;
  width: 500px;
}
    </style>
</head>
<body>

<div id="registerform">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="text" name="LastName" placeholder="Last Name" required>
        <input type="text" class="form-control" name="FirstName" placeholder="First Name" required>
        <br>
        <label class="form-label">Address *</label>
        <input type="text" class="form-control" name="Address_LotBlk" placeholder="Lot/Blk" required>
        <input type="text" class="form-control" name="Address_Street" placeholder="Street" required>
        <input type="text" class="form-control" name="Address_PhaseSubdivision" placeholder="Phase/Subdivision" required>
        <br>
        <label class="form-label">Region *</label>
            <select name="region" class="form-control form-control-md" id="region"required></select>
            <input type="hidden" class="form-control form-control-md" name="region_text" id="region-text" required>
            <br>
            <label class="form-label">Province *</label>
            <select name="province" class="form-control form-control-md" id="province"required></select>
            <input type="hidden" class="form-control form-control-md" name="province_text" id="province-text" required>
            <br>
            <label class="form-label">City / Municipality *</label>
            <select name="city" class="form-control form-control-md" id="city"required></select>
            <input type="hidden" class="form-control form-control-md" name="city_text" id="city-text" required>
            <br>
            <label class="form-label">Barangay *</label>
            <select name="barangay" class="form-control form-control-md" id="barangay"required></select>
            <input type="hidden" class="form-control form-control-md" name="barangay_text" id="barangay-text" required>
            <br>
            <label class="form-label">Country *</label>
            <select class="form-control" name="country">
                <option value="">Select Country</option>
                <option value="Philippines">Philippines</option>
            </select>
            <br>
            <label class="form-label">Phone Number *</label>
            <input type="tel" class="form-control" name="phone_number" id="phone_number" placeholder="Cellphone Number" required>
            <input type="email" class="form-control" name="Email" placeholder="Email" required>
            <input type="password" class="form-control" name="password" placeholder="Input Password" required>
            <input type="password" class="form-control" name="repeat_password" placeholder="Repeat Password" required>
            <input type="submit" class="btn btn-primary" name="Submit" value="Register">
            <div><p>Already have an account? <a href="index.php"> Sign in Here</a></div>
            <br>
            <br>
            </form>
</div>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/js/intlTelInput.min.js"></script>
<script>
    
$(document).ready(function() {
    var input = document.querySelector("#phone_number");
    window.intlTelInput(input, {
         allowDropdown: true,
        autoHideDialCode: true,
         autoPlaceholder: "true",
        // dropdownContainer: document.body,
        excludeCountries: ["us"],
        formatOnDisplay: true,
        geoIpLookup: function(callback) {
           $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
             var countryCode = (resp && resp.country) ? resp.country : "";
             callback(countryCode);
           });
         },
         hiddenInput: "full_number",
         initialCountry: "auto",
         localizedCountries: { 'de': 'Deutschland' },
        separateDialCode: true,
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/js/utils.js",
    });
});
    
var my_handlers = {
    fill_provinces: function() {
        var region_code = $(this).val();
        var region_text = $(this).find("option:selected").text();
        let region_input = $('#region-text');
        region_input.val(region_text);
        $('#province-text').val('');
        $('#city-text').val('');
        $('#barangay-text').val('');

        //province
        let dropdown = $('#province');
        dropdown.empty();
        dropdown.append('<option selected="true" disabled>Choose State/Province</option>');
        dropdown.prop('selectedIndex', 0);

        let city = $('#city');
        city.empty();
        city.append('<option selected="true" disabled></option>');
        city.prop('selectedIndex', 0);

        let barangay = $('#barangay');
        barangay.empty();
        barangay.append('<option selected="true" disabled></option>');
        barangay.prop('selectedIndex', 0);

        var url = 'ph-json/province.json';
        $.getJSON(url, function(data) {
            var result = data.filter(function(value) {
                return value.region_code == region_code;
            });

            result.sort(function(a, b) {
                return a.province_name.localeCompare(b.province_name);
            });

            $.each(result, function(key, entry) {
                dropdown.append($('<option></option>').attr('value', entry.province_code).text(entry.province_name));
            })

        });
    },
    // fill city
    fill_cities: function() {
        //selected province
        var province_code = $(this).val();

        // set selected text to input
        var province_text = $(this).find("option:selected").text();
        let province_input = $('#province-text');
        province_input.val(province_text);
        //clear city & barangay input
        $('#city-text').val('');
        $('#barangay-text').val('');

        //city
        let dropdown = $('#city');
        dropdown.empty();
        dropdown.append('<option selected="true" disabled>Choose city/municipality</option>');
        dropdown.prop('selectedIndex', 0);

        //barangay
        let barangay = $('#barangay');
        barangay.empty();
        barangay.append('<option selected="true" disabled></option>');
        barangay.prop('selectedIndex', 0);

        // filter & Fill
        var url = 'ph-json/city.json';
        $.getJSON(url, function(data) {
            var result = data.filter(function(value) {
                return value.province_code == province_code;
            });

            result.sort(function(a, b) {
                return a.city_name.localeCompare(b.city_name);
            });

            $.each(result, function(key, entry) {
                dropdown.append($('<option></option>').attr('value', entry.city_code).text(entry.city_name));
            })

        });
    },
    // fill barangay
    fill_barangays: function() {
        // selected barangay
        var city_code = $(this).val();

        // set selected text to input
        var city_text = $(this).find("option:selected").text();
        let city_input = $('#city-text');
        city_input.val(city_text);
        //clear barangay input
        $('#barangay-text').val('');

        // barangay
        let dropdown = $('#barangay');
        dropdown.empty();
        dropdown.append('<option selected="true" disabled>Choose barangay</option>');
        dropdown.prop('selectedIndex', 0);

        // filter & Fill
        var url = 'ph-json/barangay.json';
        $.getJSON(url, function(data) {
            var result = data.filter(function(value) {
                return value.city_code == city_code;
            });

            result.sort(function(a, b) {
                return a.brgy_name.localeCompare(b.brgy_name);
            });

            $.each(result, function(key, entry) {
                dropdown.append($('<option></option>').attr('value', entry.brgy_code).text(entry.brgy_name));
            })

        });
    },

    onchange_barangay: function() {
        // set selected text to input
        var barangay_text = $(this).find("option:selected").text();
        let barangay_input = $('#barangay-text');
        barangay_input.val(barangay_text);
    },

};


$(function() {
    // events
    $('#region').on('change', my_handlers.fill_provinces);
    $('#province').on('change', my_handlers.fill_cities);
    $('#city').on('change', my_handlers.fill_barangays);
    $('#barangay').on('change', my_handlers.onchange_barangay);

    // load region
    let dropdown = $('#region');
    dropdown.empty();
    dropdown.append('<option selected="true" disabled>Choose Region</option>');
    dropdown.prop('selectedIndex', 0);
    const url = 'ph-json/region.json';
    // Populate dropdown with list of regions
    $.getJSON(url, function(data) {
        $.each(data, function(key, entry) {
            dropdown.append($('<option></option>').attr('value', entry.region_code).text(entry.region_name));
        })
    });

});

</script>
</html>