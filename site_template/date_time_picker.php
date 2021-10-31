<!DOCTYPE html>
<html>
<body>

<h1>Show a Date and Time Control</h1>

    <!-- drop down of date and time (https://www.w3schools.com/tags/tryit.asp?filename=tryhtml5_input_type_datetime-local)-->
<form action="/action_page.php">
  <label for="birthdaytime">Birthday (date and time):</label>
  <input type="datetime-local" id="birthdaytime" name="birthdaytime">
  <input type="submit">
</form>

<p><strong>Note:</strong> type="datetime-local" is not supported in Internet Explorer 11 or prior Safari 14.1.</p>
<!-- date time picker ends here -->
    
    <!--date picker only (https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input/date) -->
    <label for="start">Start date:</label>

<input type="date" id="start" name="trip-start"
       value="2018-07-22"
       min="2018-01-01" max="2018-12-31">
    
    <!-- test / to use -->
    <label>
    Date of birth:
    <input type="date" name="bday" min="1900-01-1">
  </label>

  <p><button>Submit</button></p>
</body>
</html>
