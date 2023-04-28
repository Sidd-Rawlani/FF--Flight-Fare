<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flight Price Prediction</title>

    <!-- BootStrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- css -->
    <link rel="stylesheet" href="/static/css/styles.css">
</head>
<body>

     <!-- As a heading -->
     <ul id="nav_bar">
        <li><a href="/login">Log-in</a></li>
        <li><a class="active" href="/">Home</a></li>
    </ul>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/static/img/Fair Flighter.png" height="700px" width="455px" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://feeds.abplive.com/onecms/images/uploaded-images/2021/09/08/634259599cd6f60c24f9e67a5680c064_original.jpg" height="700px" width="455px" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://miro.medium.com/v2/resize:fit:1400/1*mNGEychD0x_HYqjyWEQGHw.jpeg" height="700px" width="455px" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <br><br><br>

    <h1 class="headingtile" style="background-color: #b18a6b;">Predict your Flight Fare</h1>
    <br>
    <br>

    <div class="container">



        <form action="\predict" method="post">


            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Departure Date</h5>
                            <!-- Departure -->
                            <input type="datetime-local" name="Dep_Time" id="Dep_Time" min="<?php echo date('Y-m-d\TH:i'); ?>" required="required"  onchange="setMinArrivalTime()" onchange ="blockMinArrivalTime()">
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Arrival Date</h5>
                            <!-- Arrival -->
                            <input type="datetime-local" name="Arrival_Time" id="Arrival_Time" required="required">
                        </div>
                    </div>
                </div>
            </div>

            <br>
            <br>
            <br>

            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <!-- Source -->
                            <h5 class="card-title">Source</h5>
                            <select name="Source" id="Source" required="required">
                                <option value="Delhi">Delhi</option>
                                <option value="Kolkata">Kolkata</option>
                                <option value="Mumbai">Mumbai</option>
                                <option value="Chennai">Chennai</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Destination</h5>
                            <!-- Destination -->
                            <select name="Destination" id="Destination" required="required">
                                <option value="Cochin">Cochin</option>
                                <option value="Delhi">Delhi</option>
                                <option value="New Delhi">New Delhi</option>
                                <option value="Hyderabad">Hyderabad</option>
                                <option value="Kolkata">Kolkata</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>



            <br>
            <br>
            <br>

            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Stopage</h5>
                            <!-- Total Stops -->
                            <select name="stops" required="required">
                                <option value="0">Non-Stop</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Which Airline you want to travel?</h5>
                            <!-- Airline -->
                            <select name="airline" id="airline" required="required">
                                <option value="Jet Airways">Jet Airways</option>
                                <option value="IndiGo">IndiGo</option>
                                <option value="Air India">Air India</option>
                                <option value="Multiple carriers">Multiple carriers</option>
                                <option value="SpiceJet">SpiceJet</option>
                                <option value="Vistara">Vistara</option>
                                <option value="Air Asia">Air Asia</option>
                                <option value="GoAir">GoAir</option>
                                <option value="Multiple carriers Premium economy">Multiple carriers Premium economy
                                </option>
                                <option value="Jet Airways Business">Jet Airways Business</option>
                                <option value="Vistara Premium economy">Vistara Premium economy</option>
                                <option value="Trujet">Trujet</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>



            <br>
            <br>
            <br>
            <!-- Submit -->
            <input type="submit" value="Submit" class="btn btn-secondary">
        </form>
        
        
        <br>
        <br>
        <h3>{{ prediction_text }}</h3>

        <br>
        <br>

    </div>




    <!-- JavaScript -->

    <!-- Script for setting the minimum arrival time to the departure time -->
<script>
//Attempt to set min departure date as today's date 
// Get current date and time
var now = new Date();
		var year = now.getFullYear();
		var month = now.getMonth() + 1;
		var day = now.getDate();
		var hour = now.getHours();
		var minute = now.getMinutes();

		// Format the date and time string as YYYY-MM-DDTHH:mm"
		var dateTime = year + "-" + (month < 10 ? "0" + month : month) + "-" + (day < 10 ? "0" + day : day) + "T" + (hour < 10 ? "0" + hour : hour) + ":" + (minute < 10 ? "0" + minute : minute);

		// Set the minimum value of the departure date input to the current date and time
		document.getElementById("Dep_Time").min = dateTime;
//   ||DONE




//  -------
// // departure time difference 
// function blockMinArrivalTime() {
//     var departureTime = new Date(document.getElementById("Dep_Time").value);
//     var minArrivalTime = new Date(departureTime.getTime() + 4 * 60 * 60 * 1000);
//     document.getElementById("Arrival_Time").min = minArrivalTime.toISOString().slice(0, 16);
//   }
  
//   // Call the function when the departure time changes
//   document.getElementById("Dep_Time").addEventListener("change", blockMinArrivalTime);
// ---------

function blockMinArrivalTime() {
    const departureTimeInput = document.getElementById("Dep_Time");
    const arrivalTimeInput = document.getElementById("Arrival_Time");

    const departureTime = new Date(departureTimeInput.value);
    const arrivalTime = new Date(arrivalTimeInput.value);

    const minArrivalTime = new Date(departureTime.getTime() + 2 * 60 * 60 * 1000);
    arrivalTimeInput.min = minArrivalTime.toISOString().slice(0, 16);
}

//min arrival date >departure date
    function setMinArrivalTime() {
        const departureTime = document.getElementById("Dep_Time").value;
        document.getElementById("Arrival_Time").min = departureTime;
    }
</script>
<!-- ||DONE -->

<!-- jQuery and Bootstrap Bundle with Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/esm/popper">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
    integrity="sha384-+2CnJdWKWSdU1cb4wZ/cwvP+U4dI4x8jW4/dzYl7pGUV1FbS8NkZgNiKTnP+hOe"
    crossorigin="anonymous"></script>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>

</body>

</html>