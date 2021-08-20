<!DOCTYPE html>
<html>
  <head>
    <title>Hotel Reservation Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, textarea, label { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      font-size: 50px;
      color: #fff;
      z-index: 2;
      line-height: 83px;
      }
      legend {
      padding: 10px;      
      font-family: Roboto, Arial, sans-serif;
      font-size: 18px;
      color: #fff;
      background-color: #006622;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      form {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 8px #006622; 
      }
      .banner {
      position: relative;
      height: 250px;
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.4); 
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      input[type="date"] {
      padding: 4px 5px;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color:  #006622;
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 3px 0  #006622;
      color: #006622;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      .item span {
      color: red;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color: #00b33c;
      }
      .item i {
      right: 1%;
      top: 30px;
      z-index: 1;
      }
      .week {
      display:flex;
      justify-content:space-between;
      }
      .columns {
      display:flex;
      justify-content:space-between;
      flex-direction:row;
      flex-wrap:wrap;
      }
      .columns div {
      width:48%;
      }
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 1%;
      z-index: 2;
      opacity: 0;
      cursor: pointer;
      }
      input[type=radio], input[type=checkbox]  {
      display: none;
      }
      label.radio {
      position: relative;
      display: inline-block;
      margin: 5px 20px 15px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      .question-answer label {
      display: block;
      }
      label.radio:before {
      content: "";
      position: absolute;
      left: 0;
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid #ccc;
      }
      input[type=radio]:checked + label:before, label.radio:hover:before {
      border: 2px solid  #006622;
      }
      label.radio:after {
      content: "";
      position: absolute;
      top: 6px;
      left: 5px;
      width: 8px;
      height: 4px;
      border: 3px solid  #006622;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      .flax {
      display:flex;
      justify-content:space-around;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background:  #006622;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background:  #00b33c;
      }
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .name-item div {
      width: calc(50% - 20px);
      }
      .name-item div input {
      width:97%;}
      .name-item div label {
      display:block;
      padding-bottom:5px;
      }
      }
    </style>
  </head>
  <body>
    <div class="testbox">
    <form action="resume.php" method="POST">
      <div class="banner">
        <h1>Welcome to my Resume</h1>
      </div>
      <br/>
      <fieldset>
        <legend>Personal info</legend>
        <div class="columns">
          <div class="item">
            <label for="fname">First Name<span>*</span></label>
            <input id="fname" type="text" name="fname" required/>
          </div>
          <div class="item">
            <label for="lname"> Last Name<span>*</span></label>
            <input id="lname" type="text" name="lname" required/>
          </div>
          <div class="item">
            <label for="address">Address<span>*</span></label>
            <input id="address" type="text"   name="address" required/>
          </div>
          <div class="item">
            <label for="zip">Zip Code<span>*</span></label>
            <input id="zip" type="text"   name="zip" required/>
          </div>
          <div class="item">
            <label for="city">City<span>*</span></label>
            <input id="city" type="text"   name="city" required/>
          </div>
          <div class="item">
            <label for="state">State<span>*</span></label>
            <input id="state" type="text"   name="state" required/>
          </div>
          <div class="item">
            <label for="eaddress">Email Address<span>*</span></label>
            <input id="eaddress" type="text"   name="eaddress" required/>
          </div>
          <div class="item">
            <label for="phone">Phone<span>*</span></label>
            <input id="phone" type="tel"   name="phone" required/>
          </div>
		  <div class="item">
		      <label for="checkindate">Date of Birth <span>*</span></label>
		      <input id="checkindate" type="date" name="dob" required/>
		      <i class="fas fa-calendar-alt"></i>
	      </div>
		  <div class="item">
		      <p>Marital Status <span>*</span></p>
		      <select name="marital">
			      <option value="" disabled selected>Select </option>
			      <option value="single" >Single</option>
			      <option value="married">Married</option>
			      <option value="divorce">Divorce</option>
				  <option value="Separated">Separated</option>
				  <option value="widowed">widowed</option>
				  <option value="widower">widower</option>
		      </select>
      	  </div> 
		  <div class="item">
		      <p>Sex <span>*</span></p>
		      <select name="gender">
			      <option  value="" disabled selected>Select </option>
			      <option value="M" >Male</option>
			      <option value="f">Female</option>
		      </select>
      	  </div> 
      </fieldset>
	  
	  
      <br/>
      <fieldset>
      	<legend>Employment/Education Info</legend>
      		<div class="columns">
				
		      <div class="item">
			      <p>Educational Status <span>*</span></p>
			      <select name="educational">
				      <option value="" disabled selected>Select </option>
				      <option value="undergraduate" >Undergraduate</option>
				      <option value="graduate">Graduate</option>
				      <option value="master">Masters</option>
					  <option value="doctorate">Doctorate</option>
			      </select>
	     	  </div>
		      <div class="item">
		      <p>Occupational Status <span>*</span></p>
			      <select name="occupational">
				      <option  value="" disabled selected>Select time</option>
				      <option value="unemployed" >Unemployed</option>
				      <option value="employed">Employed</option>
				      <option value="selfemployed">Self Employed</option>
			      </select>
		      </div>    
      	  </div>
	      <div class="item">
		      <label for="instruction">Tell us about your background</label>
		      <textarea name="background" id="instruction" rows="3"></textarea>
	      </div>
		  <div class="item">
		      <label for="instruction">Tell us about your interest and goal</label>
		      <textarea name="golas" id="instruction" rows="3"></textarea>
	      </div>
      </fieldset>
      <div class="btn-block">
      <button type="submit" value="Submit" name="submit">Submit</button>
      </div>
    </form>
    </div>
  </body>
</html>