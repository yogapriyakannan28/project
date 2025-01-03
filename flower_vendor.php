<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .login-container{
            backgroud-color: grey;
            padding: 50px 90px 40px 40px;
            box-shadow: 4px 6px 4px 3px gray;
            margin: 50px 50px 50px 50px;
            border-radius:10px;
            width:50%;
        }
     .button
     {
        width: 25%;
            color: white;
            background-color: green;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
     }
    </style>
</head>
<body>
<center>
    <div class="login-container">
    <label>Enter Your Name:</label>
    <input type="text" required></input><br><br>
    <label>Mobile Number:</label>
    <input type="number" required></input><br><br>
    <label>E-mail id:</label>
    <input type="text" required></input><br><br>
    <label for="state">State:</labels>
    <select id="state" name="state" onchange="updateDistricts()" required>
        <option value=""selected>Select your state</option>
        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
        <option value="Andhra Pradesh">Andhra Pradesh</option>
        <option value="Assam">Assam</option>
        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
        <option value="Bihar">Bihar</option>
        <option value="Chhattisgarh">Chattisgarh</option>
        <option value="Chandigarh">Chandigarh</option>
        <option value="Dadra and Nagar Haveli and Daman and Diu"> Dadra and Nagar Haveli and Daman and Diu</option>
        <option value="Delhi">Delhi</option>
        <option value="Gujarat">Gujarat</option>
        <option value="Haryana">Haryana</option>        
        <option value="Himachal Pradesh">Himachal Pradesh</option>
        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
        <option value="Jharkhand">Jharkhand/option>
        <option value="Karnataka">Karnataka</option>
        <option value="Kerala">Kerala</option>
        <option value="Ladakh">Ladakh</option>
        <option value="Lakshadweep">Lakshadweep</option>
        <option value="Madhya Pradesh">Madhya Pradesh</option>
        <option value="Maharashtra">Maharashtra</option>
        <option value="Meghalaya">Meghalaya</option>
        <option value="Manipur">Manipur</option>
        <option value="Mizoram">Mizoram</option>
        <option value="Nagaland">Nagaland</option>
        <option value="Odisha">Odisha</option>
        <option value="Puducherry">Puducherry</option>
        <option value="Punjab">Punjab</option>
        <option value="Rajasthan">Rajasthan</option>
        <option value="Sikkim">Sikkim</option>
        <option value="TamilNadu">TamilNadu</option>
        <option value="Telangana">Telangana</option>
        <option value="Tripura">Tripura</option>
        <option value="Uttar Pradesh">Uttar Pradesh</option>
        <option value="Uttarkhand">Uttarkhand</option>
        <option value="West Bengal">West Bengal</option>
    </select><br><br>
    <!-- <input type="text"></input><br><br> -->
    <label for="district">District:</label>
    <select id="district" name="district" required>
        <option value="" selected>Select your district</option>
    </select><br><br>
    <label>Address:</label>
    <input type="text" required></input><br><br>
    <label>Pincode:</label>
    <input type="number" required></input><br><br>
    <label>Role:</label>
    <select required>
        <option value="" selected>select your role:</option>
        <option value="Admin">Admin</option>
        <option value="User">User</option>
    </select><br><br>
    <!-- <button  onclick="fadmin.html" type="submit" class="button"  >Submit </button> -->
    <a href="fadmin.html" class="button">submit</a><br><br>
    <!-- <p id="button"></p> -->
    <br><br>
    </div>
</center>
<script>
    const stateDistricts = {
        TamilNadu: ["Ariyalur","Chengalpattu","Chennai","Coimbatore",
            "Cuddalore","Dharmapuri","Dindigul","Erode","Kallakurichi","Kancheepuram",
            "Karur","Krishnagiri","Madurai","Mayiladuthurai","Nagapattinam",
            "Namakkal","Nilgiris","Perambalur","Pudukkottai","Ramanathapuram",
            "Ranipet","Salem","Sivaganga","Tenkasi","Thanjavur","Theni","Thiruvallur",
            "Thiruvarur","Thoothukudi ","Tiruchirappalli","Tirunelveli","Tirupathur",
            "Tiruppur","Tiruvannamalai","Vellore","Villupuram","Virudhunagar"],
        
        Kerala: ["Thiruvananthapuram", "Kochi", "Kozhikode", "Thrissur", "Kannur"],
        Karnataka: ["Bengaluru", "Mysuru", "Mangalore", "Hubli", "Belgaum"]
        };
        function updateDistricts() {
            // Get the selected state
            const stateSelect = document.getElementById("state");
            const districtSelect = document.getElementById("district");
            const selectedState = stateSelect.value;

            // Clear the district dropdown
            districtSelect.innerHTML = '<option value="" selected>Select a district</option>';

            // Populate the district dropdown if a state is selected
            if (selectedState && stateDistricts[selectedState]) {
                const districts = stateDistricts[selectedState];
                districts.forEach(district => {
                    const option = document.createElement("option");
                    option.value = district.toLowerCase();
                    option.textContent = district;
                    districtSelect.appendChild(option);
                });
            }
        }
        // var button=document.getElementById("button");
        // function submit()
        // {
        //     button.textContent="SUBMITTED SUCCESSFULLY";
        // }
</script>
</body>
</html>
