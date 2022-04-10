<!DOCTYPE html>
<html lang="en">

<head>
    <title>Get state/city from PINCODE</title>
    <style>
        input {
            display: flex;
        }

        label {
            background-color: rgba(55, 58, 150, 0.986);
            color: white;
        }

        input {
            background-color: greenyellow;
            color: blue;

        }
    </style>
</head>

<body>

    <label for="">SEARCH YOUR CITY</label> <br>
    Pincode : <input type="text" placeholder="Type_Pincode..." id="pincode">
    City : <input type="text" placeholder="city" disabled id="city">
    State :<input type="text" placeholder="state" disabled id="state">



    <script>
        let Pincode = document.getElementById("pincode");
        let City = document.getElementById("city");
        let State = document.getElementById("state");


        let api = "https://raw.githubusercontent.com/mithunsasidharan/India-Pincode-Lookup/master/pincodes.json";
        fetch(api)
            .then(response => response.json())
            .then(data => {
                Pincode.onkeyup = () => {

                    var vl = Pincode.value;
                    var i = data.findIndex((element) => element.pincode == vl); // find index of element from value.
                    city.value = data[i].districtName; // set city value    
                    state.value = data[i].stateName; // set state value  


                }

            });
    </script>

</body>

</html>