<?php
require_once 'post.php';
?>

<!doctype html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SOAR UI</title>

    <!-- Bootstrap Core CSS -->
    <!--<link href="css/bootstrap.min.css" rel="stylesheet">-->

    <!-- Custom CSS -->
    <link href="soarresume.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="jquery-3.1.1.js"></script>
    <script src="todo.js"></script>
</head>

<body background="background.png">

  <div id="surveyinfo">

    <div id="basicinfo">
      <form id="basicinfoform" action="soar.html" method="post">

        <h1>Welcome To SOAR</h1>
        <h3>Please enter your information here to create your resume!</h3>

        <br />
        <hr width="100%" />
        <br />

      <div id="fieldsofstudy">
        <h3>Fields of Interest:</h3>

        <table id="degreetable1" border="0" width="100%">

          <tr>
            <td>Area of Study:</td>
            <td>
              <select name="study_area1">
                <option value="blank"></option>
                <option value="compsci">Computer Science</option>
                <option value="compeng">Computer Engineering</option>
              </select>
            </td>
          </tr>

          <tr>
            <td>Degree Type:</td>
            <td>
              <select name="degree_name1">
                <option value="blank"></option>
                <option value="associates">Associate's Degree</option>
                <option value="bachelors">Bachelor's Degree</option>
                <option value="masters">Master's Degree</option>
                <option value="phd">PHD or Doctorate</option>
              </select>
            </td>
          </tr>

          <tr>
            <td>School:</td>
            <td><input type="text" id="school_name1" placeholder="Florida Atlantic University" /></td>
          </tr>

        </table>

        <p><input type="button" id="additionaldegrees1" value="Click Here to Add Additional Degrees" /></p>

        <br />
        <hr width="100%" />
        <br />

        <div id="degreetable2">

          <table border="0" width="100%">

            <tr>
              <td>Area of Study:</td>
              <td>
                <select name="study_area2">
                  <option value="blank"></option>
                  <option value="compsci">Computer Science</option>
                  <option value="compeng">Computer Engineering</option>
                </select>
              </td>
            </tr>

            <tr>
              <td>Degree Type:</td>
              <td>
                <select name="degree_name2">
                  <option value="blank"></option>
                  <option value="associates">Associate's Degree</option>
                  <option value="bachelors">Bachelor's Degree</option>
                  <option value="masters">Master's Degree</option>
                  <option value="phd">PHD or Doctorate</option>
                </select>
              </td>
            </tr>

            <tr>
              <td>School:</td>
              <td><input type="text" id="school_name2" placeholder="Florida Atlantic University" /></td>
            </tr>

          </table>

          <p><input type="button" id="additionaldegrees2" value="Click Here to Add Additional Degrees" /></p>

          <br />
          <hr width="100%" />
          <br />

        </div>

        <div id="degreetable3">

          <table border="0" width="100%">

            <tr>
              <td>Area of Study:</td>
              <td>
                <select name="study_area3">
                  <option value="blank"></option>
                  <option value="compsci">Computer Science</option>
                  <option value="compeng">Computer Engineering</option>
                </select>
              </td>
            </tr>

            <tr>
              <td>Degree Type:</td>
              <td>
                <select name="degree_name3">
                  <option value="blank"></option>
                  <option value="associates">Associate's Degree</option>
                  <option value="bachelors">Bachelor's Degree</option>
                  <option value="masters">Master's Degree</option>
                  <option value="phd">PHD or Doctorate</option>
                </select>
              </td>
            </tr>

            <tr>
              <td>School:</td>
              <td><input type="text" id="school_name3" placeholder="Florida Atlantic University" /></td>
            </tr>

          </table>
          <br />
          <hr width="100%" />

        </div>

        <br />
        <input type="button" id="soarnext" value="Next!" />

      </form>
    </div>

  </div>

    <div id="skills">
      <form id="skillsform">
        <h2>Software/Hardware Skills</h2>

        <table border="0" width="100%">

          <tr>
            <td>Software/Hardware: </td>
            <td><input type="text" id="skill_name1" /></td>
          </tr>

          <tr>
            <td>Proficiency Level:</td>
            <td>
              <select name="proficiency_name1">
                <option value="blank"></option>
              </select>
            </td>
          </tr>
        </table>

        <br />
        <input type="button" id="addskill1" value="Add a Software/Hardware skill!" />
        <hr width="100%" />
        <br />

        <div id="skillstable2">
          <table border="0" width="100%">

            <tr>
              <td>Software/Hardware: </td>
              <td><input type="text" id="skill_name2" /></td>
            </tr>

            <tr>
              <td>Proficiency Level:</td>
              <td>
                <select name="proficiency_name2">
                  <option value="blank"></option>
                </select>
              </td>
            </tr>
          </table>

          <br />
          <input type="button" id="addskill2" value="Add a Software/Hardware skill!" />
          <hr width="100%" />
          <br />

        </div>

        <div id="skillstable3">
          <table border="0" width="100%">

            <tr>
              <td>Software/Hardware: </td>
              <td><input type="text" id="skill_name3" /></td>
            </tr>

            <tr>
              <td>Proficiency Level:</td>
              <td>
                <select name="proficiency_name3">
                  <option value="blank"></option>
                </select>
              </td>
            </tr>
          </table>

          <br />
          <hr width="100%" />
          <br />
        </div>

        <br />
        <input type="button" id="skillback" value="Back!" /><input type="button" id="skillnext" value="Next!" />
      </form>
    </div>

    <div id="workexperience">
      <form id="workform">
        <h2>Work and Internship Experience</h2>

        <table border="0" width="100%">

          <tr>
            <td>Company Name:</td>
            <td><input type="text" id="company_name1" placeholder="CompanyName" /></td>
          </tr>

          <tr>
            <td>Position:</td>
            <td><input type="text" id="job_position_name1" placeholder="Position" /></td>
          </tr>

          <tr>
            <td>Start Date:</td>
            <td><input type="date" id="start_date1" placeholder="mm/dd/yyyy" /></td>
          </tr>

          <tr>
            <td>End Date:</td>
            <td><input type="date" id="end_date1" placeholder="mm/dd/yyyy"  /></td>
          </tr>

        </table>

        <input type="button" id="addexperience1" value="Add a Work or Internship Experience!"  />
        <br  />
        <hr width="100%" />
        <br  />

        <div id="experiencetable2">

          <table border="0" width="100%">

            <tr>
              <td>Company Name:</td>
              <td><input type="text" id="company_name2" placeholder="CompanyName" /></td>
            </tr>

            <tr>
              <td>Position:</td>
              <td><input type="text" id="job_position_name2" placeholder="Position" /></td>
            </tr>

            <tr>
              <td>Start Date:</td>
              <td><input type="date" id="start_date2" placeholder="mm/dd/yyyy" /></td>
            </tr>

            <tr>
              <td>End Date:</td>
              <td><input type="date" id="end_date2" placeholder="mm/dd/yyyy"  /></td>
            </tr>

          </table>

          <input type="button" id="addexperience2" value="Add a Work or Internship Experience!"  />
          <br  />
          <hr width="100%" />
          <br  />

        </div>

        <div id="experiencetable3">

          <table border="0" width="100%">

            <tr>
              <td>Company Name:</td>
              <td><input type="text" id="company_name3" placeholder="CompanyName" /></td>
            </tr>

            <tr>
              <td>Position:</td>
              <td><input type="text" id="job_position_name3" placeholder="Position" /></td>
            </tr>

            <tr>
              <td>Start Date:</td>
              <td><input type="date" id="start_date3" placeholder="mm/dd/yyyy" /></td>
            </tr>

            <tr>
              <td>End Date:</td>
              <td><input type="date" id="end_date3" placeholder="mm/dd/yyyy"  /></td>
            </tr>

          </table>

          <br  />
          <hr width="100%" />

        </div>

        <br />
        <input type="button" id="workback" value="Back!" /><input type="button" id="worknext" value="Next!" />

      </form>
    </div>

    <div id="additionalinfo">
      <form id="addform">
        <h2>Additional Information</h2>
        <p>Type a quick introduction about yourself!</p>
        <p><textarea rows="10" cols="75" id="summary_text" placeholder="Quick Introduction..."></textarea></p>

        <br />
        <hr width="100%" />
        <br />

        <p>Use this area to type any additional information that you may think is relevant, including awards or extra-curricular activities!</p>
        <p><textarea rows="10" cols="75" id="additional_text" placeholder="Additional Info..."></textarea></p>

        <br />
        <hr width="100%" />
        <br />
        <input type="button" id="addinfoback" value="Back!" /><input type="submit" id="done" value="Submit!" />
      </form>

    </div>
  </div>

</body>
</html>
