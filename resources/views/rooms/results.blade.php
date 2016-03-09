<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>


    <div class="modal fade" id="myModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title">{{$input['start_date']}}</h4>
        </div>
        <div class="modal-body">
          <div class="table-responsive">          
              <table class="table">
                <thead>
                  <tr>
                    <th>Room No.</th>
                    <th>Room Type</th>
                    <th>Current Occupants at Specified Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($check_date as $date)
                <tr>
                    <td>{{ $date->room->name }}</td>
                    <td>{{ $date->room->type }}</td>
                    <td>{{ $date->room->occupants}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    <button type="button" class="btn btn-primary">Save changes</button>
</div>
</div>
</div>
</div>

<script src="../jquery/jquery-2.1.3.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script>
  $(function(){
    $("#myModal").modal('show');
      // $('#myModal').on('shown.bs.modal', function () {
      //     // $('#myInput').focus();
      // });
});
</script>
</body>
</html>