<!DOCTYPE html>
<html>
<head>
  <title></title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <style>
    .data {
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 72px;
  height: 200px;
  font-weight: bold;
  text-align: center;
  margin: 0 auto;
  padding: 45px;
  background-color: #ffffff;
  border: 1px solid #e6e6e6;
  border-radius: 20px;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
  transition: background-color 0.2s, box-shadow 0.2s;
}

.data:hover {
  background-color: #f5f5f5;
  box-shadow: 0 2px 20px rgba(0, 0, 0, 0.2);
  cursor: pointer;
}

.data:focus {
  outline: none;
  box-shadow: 0 0 0 3px rgba(66, 139, 202, 0.5);
}

    </style>
</head>
<body>
 

<div id="dynamic-data" class="data"></div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
function updateData() {

  $.ajax({
    url: "v1data.php",
    type: "GET",
    dataType: "json",
    success: function(data) {
      // Update the displayed data with the new value
      $("#dynamic-data").text(data.value);
    },
    error: function() {
      // Handle any errors that occur during the request
      console.log("Error retrieving dynamic data");
    }
  });
}

// Call the updateData function every second
setInterval(updateData, 1000);
</script>
</body>
</html>
