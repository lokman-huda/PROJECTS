
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style_for_join.css">
        <link rel="icon" href="./image/icon.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>Registration - Blood</title>
    </head>
<body>
    <header>
        <div class="navbar">
            <div class="logo"><p><b><i class="fa-solid fa-droplet"></i> BLOOD</b><p></div>
            <div class="nav-links">
              <a href="./index.php"><i class="fa-solid fa-house"></i> Home</a>
              <a href="./search.php"><i class="fa-solid fa-magnifying-glass"></i> Search Donors</a>
              <a href="./join.php"><i class="fa-solid fa-plus"></i> Join as Donor</a>
              <a href="#aboutUs"><i class="fa-solid fa-circle-info"></i> About Us</a>
            </div>
        </div>
    </header>
    <main>
        <div class="registration-form">
            <h2>Blood Donation Registration</h2>
            <form id="registration-form" action="config/insert_data.php" method="POST">

                <!-- Name and Email Section -->
                <div class="form-group">
                    <label for="full-name">Full Name</label>
                    <input type="text" id="full-name" name="full-name" placeholder="Enter your full name" required>
                </div>

                
                <!-- Blood Group and District Section -->
                <div class="form-group">
                    <label for="blood-group">Blood Group</label>
                    <select id="blood-group" name="blood-group" required>
                        <option value="" disabled selected>Select your blood group</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select id="gender" name="gender" required>
                        <option value="" disabled selected>Select your gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>

                <!-- Phone and Birthday Section -->
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>
                    <div id="phone-error" class="error-message" style="display: none;">Phone number must be 11 digits.</div>
                </div>

                <div class="form-group">
                    <label for="birthday">Birthday</label>
                    <input type="date" id="birthday" name="birthday" required>
                    <div id="birthday-error" class="error-message" style="display: none;">You must be at least 18 years old.</div>
                </div>
                <div class="form-group">
                    <div class="form-group">
                        <label for="last-donation">Last Donation Date</label>
                        <input type="date" id="last-donation" name="last-donation">
                    </div>
                </div>

                <!-- Division Section -->
                <div class="form-group">
                    <label for="division">Division</label>
                    <select id="division" name="division" required>
                        <option value="" disabled selected>Select your Division</option>
                        <option value="Dhaka">Dhaka</option>
                        <option value="Chattogram">Chattogram</option>
                        <option value="Rajshahi">Rajshahi</option>
                        <option value="Khulna">Khulna</option>
                        <option value="Barishal">Barishal</option>
                        <option value="Sylhet">Sylhet</option>
                        <option value="Rangpur">Rangpur</option>
                        <option value="Mymensingh">Mymensingh</option>
                    </select>
                </div>

                <!-- District Section -->
                <div class="form-group">
                    <label for="district">District</label>
                    <select id="district" name="district" required>
                        <option value="" disabled selected>Select your District</option>
                    </select>
                </div>

                <!-- Police Station Section -->
                <div class="form-group">
                    <label for="police-station">Police Station</label>
                    <select id="police-station" name="police-station" required>
                        <option value="" disabled selected>Select your Police Station</option>
                    </select>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="submit-button">Register</button>
            </form>
        </div>
        <div class="resitation-contant">
            <h1>Requirements to Donate Blood </h1>
            <ul>
              <li><strong>Age:</strong> 18–65 years (16/17 with parental consent in some areas).</li>
              <li><strong>Weight:</strong> At least 50 kg (110 lbs).</li>
              <li><strong>Health:</strong> Be in good health with no current illnesses or infections.</li>
              <li><strong>Hemoglobin:</strong> Minimum of 12.5 g/dL.</li>
              <li><strong>Lifestyle:</strong> Avoid high-risk behaviors; tattoos or piercings may require a waiting period.</li>
              <li><strong>Pregnancy and Medications:</strong> Wait after childbirth; some medications may require deferral.</li>
            </ul>
        </div><br><br>
    </main>


    <footer>
        <div class="div-1">
            <h1>Blood</h1>
            <P>Blood is and automated blood service that connects blood searchers with voluntray blood donors in a moment through call.</P>
            <br>
            <div class="footer-icon">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-youtube"></i>
                <i class="fa-brands fa-twitter"></i>
            </div>
            <br>
            <p style="color: black;">Terms & Condition | Privacy</p>
        </div>
        <div class="div-2">
            <h1>Important Links</h1>
            <p>Home</p>
            <p>Add Blood Request</p>
            <p>Search Blood Donors in Bangladesh</p>
            <p>Frequently Asked Questions(FAQs)</p>
            <P>About Us</P>
            <p>Contact Us</p>
        </div>
        <div class="div-3">
            <h1>About Blood</h1>
            <p>What is blood?</p>
            <p>What is blood donation</p>
            <p>What can donate blood?</p>
            <p>How often can I donate blood?</p>
            <p>Different Blood Terms</p>
            <p>Different Blood Groups</p>
        </div>
    </footer>


    <script>
        // Data for Divisions, Districts, and Police Stations
        const locations = {
            Dhaka: {
                districts: ['Dhaka', 'Madaripur', 'Munshiganj', 'Narayanganj'],
                policeStations: {
                    Dhaka: ['Kotwali', 'Shahbagh', 'Tejgaon'],
                    Madaripur: ['Madaripur Sadar'],
                    Munshiganj: ['Sreenagar'],
                    Narayanganj: ['Narayanganj Sadar']
                }
            },
            Chattogram: {
                districts: ['Chattogram', 'Cox\'s Bazar', 'Feni'],
                policeStations: {
                    Chattogram: ['Kotwali', 'Pahartali'],
                    'Cox\'s Bazar': ['Cox\'s Bazar Sadar'],
                    Feni: ['Feni Sadar']
                }
            },
            Rajshahi: {
                districts: ['Rajshahi', 'Naogaon', 'Chapainawabganj'],
                policeStations: {
                    Rajshahi: ['Rajpara'],
                    Naogaon: ['Naogaon Sadar'],
                    Chapainawabganj: ['Chapainawabganj Sadar']
                }
            },
            // Add similar data for other divisions...
        };

        // Function to populate Districts based on selected Division
        document.getElementById('division').addEventListener('change', function () {
            const division = this.value;
            const districtSelect = document.getElementById('district');
            const policeStationSelect = document.getElementById('police-station');

            // Clear previous options
            districtSelect.innerHTML = '<option value="" disabled selected>Select your District</option>';
            policeStationSelect.innerHTML = '<option value="" disabled selected>Select your Police Station</option>';

            if (locations[division]) {
                // Populate districts
                locations[division].districts.forEach(district => {
                    const option = document.createElement('option');
                    option.value = district;
                    option.textContent = district;
                    districtSelect.appendChild(option);
                });
            }
        });

        // Function to populate Police Stations based on selected District
        document.getElementById('district').addEventListener('change', function () {
            const division = document.getElementById('division').value;
            const district = this.value;
            const policeStationSelect = document.getElementById('police-station');

            // Clear previous options
            policeStationSelect.innerHTML = '<option value="" disabled selected>Select your Police Station</option>';

            if (locations[division] && locations[division].policeStations[district]) {
                // Populate police stations for the selected district
                locations[division].policeStations[district].forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.textContent = station;
                    policeStationSelect.appendChild(option);
                });
            }
        });

        document.getElementById('registration-form').addEventListener('submit', function(event) {
            // Phone Number Validation
            const phoneInput = document.getElementById('phone');
            const phoneError = document.getElementById('phone-error');
            const phoneValue = phoneInput.value;

            // Check if phone number is exactly 11 digits
            if (!/^\d{11}$/.test(phoneValue)) {
                phoneError.style.display = 'block';
                event.preventDefault(); // Prevent form submission
            } else {
                phoneError.style.display = 'none';
            }

            // Birthday Validation
            const birthdayInput = document.getElementById('birthday');
            const birthdayError = document.getElementById('birthday-error');
            const birthdayValue = new Date(birthdayInput.value);
            const today = new Date();

            const age = today.getFullYear() - birthdayValue.getFullYear();
            const monthDifference = today.getMonth() - birthdayValue.getMonth();
            const dayDifference = today.getDate() - birthdayValue.getDate();

            if (
                age < 18 || 
                (age === 18 && (monthDifference < 0 || (monthDifference === 0 && dayDifference < 0)))
            ) {
                birthdayError.style.display = 'block';
                event.preventDefault();
            } else {
                birthdayError.style.display = 'none';
            }
        });
    </script>
</body>
</html>
