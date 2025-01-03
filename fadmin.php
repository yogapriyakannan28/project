<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
   header{
    background-color:rgb(226, 196, 196);
    padding-top:10px;
    margin:10px;
    text-align: center;
    font-size: 15px;
    font-family: Georgia, 'Times New Roman', Times, serif;
    color: black;
    /* display: inline-block; */
   }
   .navbar{
    overflow: hidden;
    background-color: rgb(184, 182, 182);
    display: flex;
    padding: 5px;
    margin:0;
    width: 10%;
    flex-direction: column;
    box-shadow: 0 5px 5px rgba(72, 60, 60, 0.2);
    justify-content: space-around;
    height:95vh;
   }
   .navbar a {
      color: rgb(5, 6, 5);
      text-decoration: none;
      font-size: 16px;
      padding: 10px 20px;
      transition: background 0.3s;
    }
    .navbar a:hover {
      background-color: #83827e; /* Darker green on hover */
      border-radius: 5p
    }
  </style>
</head>
<body>
 <header>
  FLOWER VENDORING
 </header>
 <div class="container">
 <div class="navbar">
  <a href="#dashboard">Dashboard</a>
  <a href="#inventory">Inventory</a>
  <a href="#orders">Orders</a>
  <a href="#customers">Customers</a>
  <a href="#reports">Reports</a>
  <a href="#deliveries">Deliveries</a>
  <a href="#feedback">Feedback</a>
  <a href="#settings">Settings</a>
  <a href="#logout">Logout</a>
</div>
</div>
</body>
</html>