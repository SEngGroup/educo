<!-- Add an additional blue button style -->
<style>
.yui3-button {
    margin:10px 0px 10px 0px;
    color: #fff;
    background-color: #3476b7;
}
</style>

<div id="demo" class="yui3-skin-sam yui3-g"> <!-- You need this skin class -->

  <div id="leftcolumn" class="yui3-u">
     <!-- Container for the calendar -->
     <div id="mycalendar"></div>
  </div>
  <div id="rightcolumn" class="yui3-u">
   <div id="links" style="padding-left:20px;">
      <!-- The buttons are created simply by assigning the correct CSS class -->
      <button id="togglePrevMonth" class="yui3-button">Toggle Previous Month's Dates</button><br>
      <button id="toggleNextMonth" class="yui3-button">Toggle Next Month's Dates</button><br>
      Selected date: <span id="selecteddate"></span>
   </div>
  </div>
</div>

<script type="text/javascript">
YUI().use('calendar', 'datatype-date', 'cssbutton',  function(Y) {

    // Create a new instance of calendar, placing it in
    // #mycalendar container, setting its width to 340px,
    // the flags for showing previous and next month's
    // dates in available empty cells to true, and setting
    // the date to today's date.
    var calendar = new Y.Calendar({
      contentBox: "#mycalendar",
      width:'340px',
      showPrevMonth: true,
      showNextMonth: true,
      date: new Date()}).render();

    // Get a reference to Y.DataType.Date
    var dtdate = Y.DataType.Date;

    // Listen to calendar's selectionChange event.
    calendar.on("selectionChange", function (ev) {

      // Get the date from the list of selected
      // dates returned with the event (since only
      // single selection is enabled by default,
      // we expect there to be only one date)
      var newDate = ev.newSelection[0];

      // Format the date and output it to a DOM
      // element.
      Y.one("#selecteddate").setHTML(dtdate.format(newDate));
    });


    // When the 'Show Previous Month' link is clicked,
    // modify the showPrevMonth property to show or hide
    // previous month's dates
    Y.one("#togglePrevMonth").on('click', function (ev) {
      ev.preventDefault();
      calendar.set('showPrevMonth', !(calendar.get("showPrevMonth")));
    });

    // When the 'Show Next Month' link is clicked,
    // modify the showNextMonth property to show or hide
    // next month's dates
    Y.one("#toggleNextMonth").on('click', function (ev) {
      ev.preventDefault();
      calendar.set('showNextMonth', !(calendar.get("showNextMonth")));
    });
});
</script>