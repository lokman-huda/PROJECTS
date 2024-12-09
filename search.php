<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style_for_search.css">
    <link rel="icon" href="./image/icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Search Doner</title>
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
        <div class="search-section">
            <form action="" method="POST" class="search-form">
                <!-- Blood Group Dropdown -->
                <select name="blood_group" required>
                    <option value="" disabled selected>Select Blood Group</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                </select>

                <!-- Division Dropdown -->
                <select id="division" name="division" required>
                    <option value="" disabled selected>Select Division</option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Chattogram">Chattogram</option>
                    <option value="Khulna">Khulna</option>
                    <option value="Sylhet">Sylhet</option>
                    <option value="Barisal">Barisal</option>
                    <option value="Rajshahi">Rajshahi</option>
                    <option value="Rangpur">Rangpur</option>
                    <option value="Mymensingh">Mymensingh</option>
                </select>

                <!-- District Dropdown -->
                <select id="district" name="district" required>
                    <option value="" disabled selected>Select District</option>
                    <option value="Coxs Bazar">Cox's Bazar</option>
                    <option value="Comilla">Comilla</option>
                    <option value="Noakhali">Noakhali</option>
                    <option value="Feni">Feni</option>
                </select>

                <!-- Police Station Dropdown -->
                <select id="police-station" name="police_station" required>
                    <option value="" disabled selected>Select Police Station</option>
                    <option value="Coxs Bazar Sadar">Cox's Bazar Sadar</option>
                    <option value="Ramu">Ramu</option>
                    <option value="Teknaf">Teknaf</option>
                    <option value="Chakaria">Chakaria</option>
                </select>

                <!-- Search Button -->
                <button type="submit">Search Donors</button>
            </form>
        </div>
        <div class="table-section">
            <table>
                <tr>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Blood Group</th>
                    <th>Last Donation</th>
                    <th>Address</th>
                    <th>Mobile</th>
                    <th>Call</th>
                </tr>
                
                    <?php
                        require_once('config.php');

                        $blood_group = isset($_POST['blood_group']) ? $_POST['blood_group'] : '';
                        $division = isset($_POST['division']) ? $_POST['division'] : '';
                        $district = isset($_POST['district']) ? $_POST['district'] : '';
                        $police_station = isset($_POST['police_station']) ? $_POST['police_station'] : '';
                        
                        $sql = "SELECT * FROM users WHERE blood_group='$blood_group' AND division='$division' AND district='$district' AND police_station='$police_station'";

                        $result = mysqli_query($conn, $sql);
                        
                        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                            while ($row = mysqli_fetch_assoc($result)) {
                                // Process each row
                                $name=$row['full_name'];
                                $blood_group=$row['blood_group'];
                                $gender=$row['gender'];
                                $last_donation=$row['last_donation'];
                                $mobile=$row['phone'];
                                $division=$row['division'];
                                $district=$row['district'];
                                $police_station=$row['police_station'];

                                echo "<tr><td>$name</td>";
                                echo "<td>$gender</td>";
                                echo "<td>$blood_group</td>";
                                echo "<td>$last_donation</td>";
                                echo "<td>$police_station, $district, $division</td>";
                                echo "<td>$mobile</td>";
                                echo '<td><a href="tel:+88'. $mobile .'"><i class="fa-solid fa-phone"></i></a></td></tr>';
                            }
                        }
                    ?>

                </tr>
            </table>
        </div>
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
        // Data for Division, District, and Police Station
        const locationData = {
            Dhaka: {
                districts: {
                    Dhaka: ['Kotwali', 'Shahbagh', 'Tejgaon'],
                    Narayanganj: ['Narayanganj Sadar', 'Fatulla'],
                    Gazipur: ['Gazipur Sadar', 'Tongi'],
                },
            },
            Chattogram: {
                districts: {
                    Chattogram: ['Kotwali', 'Pahartali'],
                    CoxsBazar: ['Coxs Bazar Sadar', 'Teknaf'],
                    Feni: ['Feni Sadar', 'Dagonbhuiyan'],
                },
            },
            Rajshahi: {
                districts: {
                    Rajshahi: ['Rajpara', 'Motihar'],
                    Chapainawabganj: ['Chapainawabganj Sadar'],
                    Naogaon: ['Naogaon Sadar'],
                },
            },
        };

        // Populate Division Dropdown
        const divisionDropdown = document.getElementById('division');
        const districtDropdown = document.getElementById('district');
        const policeStationDropdown = document.getElementById('police-station');
        Object.keys(locationData).forEach((division) => {
            const option = document.createElement('option');
            option.value = division;
            option.textContent = division;
            divisionDropdown.appendChild(option);
        });

        // Update District Dropdown based on selected Division
        divisionDropdown.addEventListener('change', () => {
            const selectedDivision = divisionDropdown.value;

            // Clear District and Police Station Dropdowns
            districtDropdown.innerHTML = '<option value="" disabled selected>Select District</option>';
            policeStationDropdown.innerHTML = '<option value="" disabled selected>Select Police Station</option>';

            // Populate District Dropdown
            if (locationData[selectedDivision]) {
                const districts = Object.keys(locationData[selectedDivision].districts);
                districts.forEach((district) => {
                    const option = document.createElement('option');
                    option.value = district;
                    option.textContent = district;
                    districtDropdown.appendChild(option);
                });
            }
        });

        // Update Police Station Dropdown based on selected District
        districtDropdown.addEventListener('change', () => {
            const selectedDivision = divisionDropdown.value;
            const selectedDistrict = districtDropdown.value;

            // Clear Police Station Dropdown
            policeStationDropdown.innerHTML = '<option value="" disabled selected>Select Police Station</option>';

            // Populate Police Station Dropdown
            if (
                locationData[selectedDivision] &&
                locationData[selectedDivision].districts[selectedDistrict]
            ) {
                const policeStations = locationData[selectedDivision].districts[selectedDistrict];
                policeStations.forEach((station) => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.textContent = station;
                    policeStationDropdown.appendChild(option);
                });
            }
        });
    </script>
</body>
</html>
