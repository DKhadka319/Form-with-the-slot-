<html>

<head>
  <meta charset="utf-8">
  <title>PHP Practice</title>


<link rel="stylesheet" href="css/styles.css">

</head>

<body>
  <form action="data.php" method="GET">
  Enter Your full Name :   <input type="text" name="fullname" placeholder="Enter your full name"><br />
  Address:  <input type="text" name="address" placeholder="Enter your address name"><br />
  Gender: Male <input type="radio" name="gender" value="male">
         Female <input type="radio" name="gender" value="female">
         <br/>

  Your Country : <select name="country">
                    <option value="nepal">
                      Nepal
                    </option>
                    <option value="usa">
                      USA
                    </option>
                    <option value="india">
                      India
                    </option>
                </select>
<br />
        <input type="submit" value="Submit" name="submit" />
        <a href="customer.php">Goto Customers Page</a>
  </form>
</body>

</html>
