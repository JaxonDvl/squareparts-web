$(document).ready(function() {
  $('#from-date').datetimepicker({
    format:"MMMM Do YYYY"
  });
  $('#to-date').datetimepicker({
      format:"MMMM Do YYYY",
      useCurrent: false
  });

  $('#from-date').data("DateTimePicker").date(moment().startOf('month'));
  $('#to-date').data("DateTimePicker").date(moment().endOf('month'));

  $("#from-date").on("dp.change", function (e) {
      $('#to-date').data("DateTimePicker").minDate(e.date);
      get_reports();
  });
  $("#to-date").on("dp.change", function (e) {
      $('#from-date').data("DateTimePicker").maxDate(e.date);
      get_reports();
  });

});
function get_reports(){
     console.log('update made');
    var dataReq=$.ajax({
        method: "POST",
        url: "get_reports.php",
        data: {
            from: $("#from-date").data("DateTimePicker").date().format("YYYY-MM-DD"),
            to: $("#to-date").data("DateTimePicker").date().format("YYYY-MM-DD")
        }
    });
    dataReq.done(
        function(jData) {
            $('.mytable').append(jData);
        }

    );
}
    
