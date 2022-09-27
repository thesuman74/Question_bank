<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
                .heading {
                        text-align: center;
                        margin-top: 100px;
                }

                .test_container {
                        width: 600px;
                        border: 2px solid black;
                        position: absolute;
                        top: 50%;
                        left: 50%;
                        transform: translate(-50%, -50%);
                }

                .wrapper li {
                        display: flex;
                        margin: 10px;
                }
        </style>
</head>
<body>
        <div id="ad">
                <h1 class="heading">How to get the value of select option display in input box using javascript without SUBMIT button</h1>
        </div>
        <div class="test_container">
                <ul class="wrapper">
                        <li>
                                <form action="" method="">
                                        <label for="">Gender: </label>
                                        <select name="" id="getValue" onchange="changeFunction(this)">
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                        </select>
                                </form>
                        </li>
                        <li>
                                <label for="">Selected Value: </label>
                                <input type="text" name="select_input" id="showValue" value="">
                        </li>
                </ul>
        </div>
        <script>
                function changeFunction(selectValue){
  var x = selectValue.value;
  document.getElementById("showValue").value = x;
  }
        </script>
</body>

</html>