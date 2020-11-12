<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/style1.css'); ?>">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
</head>

<body>
    <header class="emb">
        <nav class="navbar navbar-expand-md fixed-top navbar-light bg-transparent">
            <div class="container-fluid">
                <a class="navbar-brand text-white" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-white active" aria-current="page" href="home.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="result.html">Results</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="contact.html">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section class="hero">
        <div class="container justify-content-center">
            <div class="row">
                <h1>explore</h1>
                <h2>Kerala, God's Own Country</h2>
            </div>
            <div class="col-12 col-md-9 search-form justify-content-center">
                <div class="row">
                    <ul class="nav nav-tabs" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="pills-bus-tab" data-toggle="pill" href="#pills-bus"
                                role="tab" aria-controls="pills-bus" aria-selected="true">Bus</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-stops-tab" data-toggle="pill" href="#pills-stops" role="tab"
                                aria-controls="pills-stops" aria-selected="false">Stops</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-boat-tab" data-toggle="pill" href="#pills-boat" role="tab"
                                aria-controls="pills-boat" aria-selected="false">Boat</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-city-tab" data-toggle="pill" href="#pills-city" role="tab"
                                aria-controls="pills-city" aria-selected="false">City</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active search-tab-1" id="pills-bus" role="tabpanel"
                        aria-labelledby="pills-bus-tab">
                        <div class="row schedule-search">
                            <h4>Search for buses from source to destination </h4>
                            <h5><?php echo validation_errors(); ?></h5>
                            <form action="<?php echo base_url('index.php/bus/index'); ?>" method="post">
                                <div class="form-group col-md-4 pb-2">
                                    <input type="text" name="source" id="source" class="form-control"
                                        placeholder="Source">
                                </div>
                                <div class="form-group col-md-4 pb-2">
                                    <input type="text" name="destination" id="destination" class="form-control"
                                        placeholder="Destination">
                                </div>
                                <div class="form-group col-md-4">
                                    <button type="submit" class="btn btn-primary ml-auto">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane fade search-tab-1" id="pills-stops" role="tabpanel"
                        aria-labelledby="pills-stops-tab">
                        <div class="row schedule-search">
                            <h4>search for stop schedules</h4>
                            <div class="form-group col-md-4 pb-2">
                                <select class="form-select" name="" id="">
                                    <option selected>Select State</option>
                                    <option value="1">TVM</option>
                                    <option value="2">PTA</option>
                                    <option value="3">KLM</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4 pb-2">
                                <input type="text" class="form-control" placeholder="Stop Name">
                            </div>
                            <div class="form-group col-md-4">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade search-tab-1" id="pills-boat" role="tabpanel"
                        aria-labelledby="pills-boat-tab">
                        <div class="row schedule-search">
                            <h4>search for boats from source to destination</h4>
                            <div class="form-group col-md-4 pb-2">
                                <input type="text" class="form-control" placeholder="Source">
                            </div>
                            <div class="form-group col-md-4 pb-2">
                                <input type="text" class="form-control" placeholder="Destination">
                            </div>
                            <div class="form-group col-md-4">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade search-tab-1" id="pills-city" role="tabpanel"
                        aria-labelledby="pills-city-tab">
                        <div class="row schedule-search">
                            <h4>Search for bus schedules in a specific city</h4>
                            <div class="form-group col-md-3 pb-2">
                                <select class="form-select" name="" id="">
                                    <option selected>Select City</option>
                                    <option value="1">TVM</option>
                                    <option value="2">EKM</option>
                                    <option value="3">KLM</option>
                                    <option value="3">TCR</option>
                                    <option value="3">CLT</option>
                                    <option value="3">KNR</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3 pb-2">
                                <input type="text" class="form-control" placeholder="Source">
                            </div>
                            <div class="form-group col-md-3 pb-2">
                                <input type="text" class="form-control" placeholder="Destination">
                            </div>
                            <div class="form-group col-md-3">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <form autocomplete="off" action="https://www.w3schools.com/action_page.php">
        <div class="autocomplete" style="width:300px;">
            <input id="myInput" type="text" name="myCountry" placeholder="Country">
        </div>
        <input type="submit">
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        function autocomplete(inp, arr) {
            var currentFocus;
            inp.addEventListener("input", function(e) {
                var a, b, i, val = this.value;
                closeAllLists();
                if (!val) {
                    return false;
                }
                currentFocus = -1;
                a = document.createElement("DIV");
                a.setAttribute("id", this.id + "autocomplete-list");
                a.setAttribute("class", "autocomplete-items");
                this.parentNode.appendChild(a);
                for (i = 0; i < arr.length; i++) {
                    if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                        b = document.createElement("DIV");
                        b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                        b.innerHTML += arr[i].substr(val.length);
                        b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                        b.addEventListener("click", function(e) {
                            inp.value = this.getElementsByTagName("input")[0].value;
                            closeAllLists();
                        });
                        a.appendChild(b);
                    }
                }
            });
            inp.addEventListener("keydown", function(e) {
                var x = document.getElementById(this.id + "autocomplete-list");
                if (x) x = x.getElementsByTagName("div");
                if (e.keyCode == 400) {
                    currentFocus++;
                    addActive(x);
                } else if (e.keyCode == 38) {
                    currentFocus--;
                    addActive(x);
                } else if (e.keyCode == 13) {
                    e.preventDefault();
                    if (currentFocus > -1) {
                        if (x) x[currentFocus].click();
                    }
                }
            });

            function addActive(x) {
                if (!x) return false;
                removeActive(x);
                if (currentFocus >= x.length) currentFocus = 0;
                if (currentFocus < 0) currentFocus = (x.length - 1);
                x[currentFocus].classList.add("autocomplete-active")
            }

            function removeActive(x) {
                for (var i = 0; i < x.length; i++) {
                    x[i].classList.remove("autocomplete-active");
                }
            }

            function closeAllLists(elmnt) {
                var x = document.getElementsByClassName("autocomplete-items");
                for (var i = 0; i < x.length; i++) {
                    if (elmnt != x[i] && elmnt != inp) {
                        x[i].parentNode.removeChild(x[i]);
                    }
                }
            }
            document.addEventListener("click", function(e) {
                closeAllLists(e.target);
            });
        }
        var countries = ["Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Anguilla",
            "Antigua & Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan",
            "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin",
            "Bermuda", "Bhutan", "Bolivia", "Bosnia & Herzegovina", "Botswana", "Brazil",
            "British Virgin Islands", "Brunei", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia",
            "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central Arfrican Republic", "Chad",
            "Chile", "China", "Colombia", "Congo", "Cook Islands", "Costa Rica", "Cote D Ivoire", "Croatia",
            "Cuba", "Curacao", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica",
            "Dominican Republic", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea",
            "Estonia", "Ethiopia", "Falkland Islands", "Faroe Islands", "Fiji", "Finland", "France",
            "French Polynesia", "French West Indies", "Gabon", "Gambia", "Georgia", "Germany", "Ghana",
            "Gibraltar", "Greece", "Greenland", "Grenada", "Guam", "Guatemala", "Guernsey", "Guinea",
            "Guinea Bissau", "Guyana", "Haiti", "Honduras", "Hong Kong", "Hungary", "Iceland", "India",
            "Indonesia", "Iran", "Iraq", "Ireland", "Isle of Man", "Israel", "Italy", "Jamaica", "Japan",
            "Jersey", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Kosovo", "Kuwait", "Kyrgyzstan", "Laos",
            "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg",
            "Macau", "Macedonia", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta",
            "Marshall Islands", "Mauritania", "Mauritius", "Mexico", "Micronesia", "Moldova", "Monaco",
            "Mongolia", "Montenegro", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauro",
            "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua",
            "Niger", "Nigeria", "North Korea", "Norway", "Oman", "Pakistan", "Palau", "Palestine", "Panama",
            "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Poland", "Portugal", "Puerto Rico",
            "Qatar", "Reunion", "Romania", "Russia", "Rwanda", "Saint Pierre & Miquelon", "Samoa",
            "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Serbia", "Seychelles",
            "Sierra Leone", "Singapore", "Slovakia", "Slovenia", "Solomon Islands", "Somalia",
            "South Africa", "South Korea", "South Sudan", "Spain", "Sri Lanka", "St Kitts & Nevis",
            "St Lucia", "St Vincent", "Sudan", "Suriname", "Swaziland", "Sweden", "Switzerland", "Syria",
            "Taiwan", "Tajikistan", "Tanzania", "Thailand", "Timor L'Este", "Togo", "Tonga",
            "Trinidad & Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks & Caicos", "Tuvalu", "Uganda",
            "Ukraine", "United Arab Emirates", "United Kingdom", "United States of America", "Uruguay",
            "Uzbekistan", "Vanuatu", "Vatican City", "Venezuela", "Vietnam", "Virgin Islands (US)", "Yemen",
            "Zambia", "Zimbabwe"
        ];
    });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>

</body>

</html>