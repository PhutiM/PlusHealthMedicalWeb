
<html>
   
   <head>
      <title>Welcome To Ticket Management Portal</title>
   </head>
   


<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1; width:400px; }

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
   <body>
      <h4>Log your Ticket </h4> 
 <form action="logticket.php" method = "post">
  <div class="container">
     
    <label for="ticket"><b>TicketNumber</b></label>
    <input type="text" placeholder="Enter Ticket Number" name="ticketnumber" required>
    
    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Surname" name="name" required>
   
    <label for="surname"><b>Surname</b></label>
    <input type="text" placeholder="Enter Surname" name="surname" required>
   
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
    
      <label for="cat"><b>Category</b></label>
       </br>  

    <select type="text"  name="category">
	  <option value=1>IT</option>
      <option value=2>Sales</option>
      <option value=3>Accounts</option>
    </select> 
   </br>  
  
    <label for="psw"><b>Status</b></label>
        </br>  
  
       <select  type="text"  name="status">
	  <option value="progress">In progress</option>
      <option value="new">Newly logged</option>
      <option value="resolved">Resolved</option>
    </select> 
  
        
    <button type="submit">Submit Ticket</button>
  </div>
 </form>
 

</body>
</html>
   
   
</html>






