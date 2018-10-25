<?php

//index.p

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='css/vendor/bootstrap.min.css' rel='stylesheet' />
    <link href='css/vendor/fullcalendar.css' rel='stylesheet' />
    <link href='css/style.css' rel='stylesheet' />

    <script src='js/vendor/jquery.min.js'></script>
    <script src='js/vendor/moment.min.js'></script>
    <script src='js/vendor/bootstrap.min.js'></script>
    <script src='js/vendor/fullcalendar.js'></script>
    <script src='js/events.js'></script>
    <script src='js/calendar.js'></script>

    <!--[if lt IE 8]>
        <link href="/css/vendor/bootstrap-ie7.css" rel="stylesheet">
    <![endif]-->

    <title>Apppointment Calendar</title>
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <p class="navbar-brand" id="todaysDate"></p>
        </div>
    </nav>

    <div class="container-fluid row">
        <div id='calendar1' class='calendar col-md-8'></div>
        <div id='calendar2' class='calendar col-md-4'></div>
    </div>

    <div class="modal fade" id="newEvent" role="dialog" aria-labelledby="eventFormLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="newEvent">New Apppointment</h4>
                </div>
                <form action="insert.php">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="title" class="form-control-label">Make Apppointment</label>
                            <input type="text" class="form-control" id="title">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" id="submit">Create Appointment</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="modal fade" id="editEvent" role="dialog" aria-labelledby="eventFormLabel" aria-hidden="true" data-persist="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                    <h4 class="modal-title" id="editEvent">Update Apppointment</h4>
                </div>
                <form>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="title" class="form-control-label">Title</label>
                            <input type="text" class="form-control" id="editTitle">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger left" id="delete">Delete Apppointment</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel Apppointment</button>
                        <button type="button" class="btn btn-success" id="update">Update Apppointment</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


</body>

</html>
