<?php
include 'submit_form.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Progress Report</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&family=Shadows+Into+Light&family=Unbounded:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>

      
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, textarea, label, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: rgb(48, 45, 45);
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      font-size: 40px;
      color: rgb(255, 255, 255);
      z-index: 2;
      
 line-height: 83px;
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
      height: 200px;
      background-image: url("slide-01.jpg"); 
      background-color: antiquewhite; 
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      legend{
        position: relative;
        color: rgb(62, 59, 59);
        font-size: 1.1em;
        font-weight: bold;
      }
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.2); 
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
      justfiy-content:space-between;
      }
      .colums {
      display:flex;
      justify-content:space-between;
      flex-direction:row;
      flex-wrap:wrap;
      }
      .colums div {
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
      <form method="post" action="submit_form.php">
        <div class="banner">
          <h1>Progress Report for PG Scholarship for GATE Qualified Students of M.Tech. Programmes  </h1>
        </div>
        <br/>
        <fieldset>
          <legend>Program report for the month & year for which Scholarship is to be released:</legend>

          <div class="item">
            <label for="MY">(Month & Year)</label>
            <input id ="MY" type="date" name="MY">
          </div>
          <div class="item">
            <label for="activity">Name:<span>*</span></label>
            <input id="name" type="text" name="name" />
          </div>
          <div class="item">
            <label for="fee">Roll No.<span>*</span></label>
            <input id="roll_no" type="text" name="roll_no" />
          </div>
          
        <div class="item">
             <p>Master of Technology in: </p>
            <select id="field" name="field">
              <option selected value="" disabled selected></option>
              <option  >Civil Engg(Specialization in environmental engineering)</option>
              <option >Civil Engg(Specialization in construction management)</option>
              <option >Civil Engg(Specialization in structural engineering)</option>
             <option>Textile Technology</option>
             <option >Electrical Engg(Specialization in Power System)</option>
              <option>Electrical Engg(Specialization in Control System)</option>
             <option >Electronics Engineering</option>
            <option >Electronics and Telecommunication Engineering</option>
            <option >Production Engineering</option>
             <option >Project Management</option>
              <option >Computer Engineering</option>
             <option >Computer Engg(specialization in NIMS)</option>
             <option >Computer Engg(specialization in Software Engg)</option>
             <option >Mechanical Engg(specialization in Machine Design)</option>
             <option >Mechanical Engg(specialization in Automobile Engg)</option>
             <option >Mechanical Engg(specialization in Thermal Engg)</option>
             <option >Mechanical Engg(specialization in CAD/CAM & Automation)</option>
            </select>
          </div>
          <div class="item">
            <p>Semester</p>
           <select id="semester" name="semester">
             <option selected value="" disabled selected></option>
            <option value="I" >I</option>
             <option value="II">II</option>
             <option value="III">III</option>
            <option value="IV">IV</option>
           </select>
         </div>
         <div class="question">
          <label>Emolument/salary/stipend/and other financial assistance received from any other source during this period:</label>
          <div class="question-answer">
            <div>
              <input type="radio" value="none" id="radio1" name="sal"/>
              <label for="radio1" class="radio"><span>Yes</span></label>
            </div>
            <div>
              <input  type="radio" value="none" id="radio2" name="sal"/>
              <label for="radio2" class="radio"><span>No</span></label>
            </div>
                       </div>
        </div>
        <div class="item">
          <label for="deets">If YES, details thereof from:</label>
          <input id="deets" type="text" name="deets" />
        </div>
        <div class="item">
          <label for="amo">Amount in Rs:</label>
          <input id="amo" type="number" name="amo" />
        </div>
          <!-- <p>A] Certificate by teacher monitoring work load of student.</p>
          <p>Student has completed/not completed teaching assistantship requirements of 8 to 10 hours per week.</p>
                    <div class="item">
                      <label for="fname">Name of Teacher<span>*</span></label>
                      <input id="fname" type="text" name="fname" />
                    </div>
                    <div class="item">
                      <label for="activity">Signature of the Teacher<span>*</span></label>
                      <input id="activity" type="text" name="activity" />
                    </div>
                    
                             <div class="item">
                      <label for="bdate">Date <span>*</span></label>
                      <input id="bdate" type="date" name="bdate" />
                      <i class="fas fa-calendar-alt"></i>
                    </div> -->
                 
<!-- <p>B] Certificate by project supervisor of student</p>
<p>The performance of student with respect to project work is satisfactory/not satisfactory</p> -->

  <div class="item">
            <label for="fname">Name of the teacher monitoring the work load of student <span>*</span></label>
            <select id="teacher" name="teacher">
              <option selected value="" disabled selected></option>
              <option >Mr. X</option>
              <option >Mr. Y</option>
           
            </select>
          </div>
          <!-- <div class="item">
            <label for="activity">Signature of project supervisor<span>*</span></label>
            <input id="activity" type="text" name="activity" />
          </div> -->
    
            <!-- <div class="item">
            <label for="bdate">Date <span>*</span></label>
            <input id="bdate" type="date" name="bdate" />
            <i class="fas fa-calendar-alt"></i>
          </div> -->
<p>Certificate by M.Tech. program coordinator/Head of Department of above mentioned Program</p>
<p>On the basis of above information, the student's PG Scholarship may be approved/may not be approved</p>

</div>

 

    </div>
                </fieldset>
        <div class="btn-block">
          <button type="submit" id="submit" name="submit" href="/">Submit</button>
        </div>
      </form>
    </div>
<script >
	var a = document.getElementByID("fee").value;
	var b = document.getElementByID("fee1").value;
	var c = document.getElementByID("fee2").value;
	var result = a+b+c;
	function calcNumbers(){
		document.getElementByID("result").innerHTML = result;
	}
</script>
  </body>
</html>