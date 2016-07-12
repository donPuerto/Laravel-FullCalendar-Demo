@extends('layouts.master-page')

@section('title')
    Full Calendar
@endsection


@section('css-header')
<!-- Fav Icon -->
<link rel="shortcut icon" type="image/png" href="{{ asset('favicon.ico') }}">
<!--[if IE]>
<link rel="shortcut icon" href="{{ asset('favicon.ico') }}"><![endif]-->

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.css">

<!-- Google Fonts usage: font-family: 'Open Sans', sans-serif;   -->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic' rel='stylesheet' type='text/css'>

<!-- Jquery UI -->
<link href='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.css' rel='stylesheet' type='text/css'>

<!-- Jquery UI Themes -->
<link href='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/themes/hot-sneaks/theme.min.css' rel='stylesheet' type='text/css'>

<!-- Bootstrap -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css">

<!-- Parsley CSS -->
<link rel="stylesheet" href="http://parsleyjs.org/src/parsley.css">

<!-- Jquery Confirm CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/2.5.1/jquery-confirm.min.css">

<!-- Full Calendar CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.8.0/fullcalendar.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.8.0/fullcalendar.print.css" media='print'>


<!-- qTIP2 CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/qtip2/3.0.3/jquery.qtip.min.css">

<!-- Spin CSS -->
<link rel="stylesheet" href="{{ URL::asset('css/spin.css') }}">

<!-- Accordion CSS -->
<link rel="stylesheet" href="{{ URL::asset('css/accordion/accordion.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/accordion/skins/accordion-border-left.css') }}">

<!-- Select2 -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/css/select2.css">

<!-- jQuery Spectrum CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/spectrum/1.8.0/spectrum.min.css">

<!-- jQuery UI Datepicker CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.1/jquery-ui-timepicker-addon.min.css">

<!-- Select2 Bootstrap Theme CSS -->
<link rel="stylesheet" href="{{ URL::asset('css/select2-bootstrap-theme/select2-bootstrap.min.css') }}">

<!-- Custom CSS -->
<link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
@endsection


@section('content')

<div id="spin" style="display:none;"></div>

<!-- Your Code Here... -->
<div class="wrapper"> <!-- Start - Wrapper -->
    <div class="container"> <!-- Start Container -->
        <div class="row"> <!-- Start Header Row-->
            <div class="jumbotron">
                <h1>
                    Full Calendar Tutorial

                </h1>
                {{--<a href="#"><i class="fa fa-trash" aria-hidden="true" onclick="deleteRecord(1);"></i></a>--}}
            </div>
        </div><!-- End Header Row -->

        <!-- your code here -->
        <div id='calendar'></div>

    </div> <!-- End Container-->
</div> <!-- End Wrapper-->

<!-- Modal -->
<div class="modal fade" id="modalAddEvent" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">


            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Add Event</h4>
            </div>

            <div class="modal-body"><!-- Body Code Here-->
                {!! Form::open(['class'=>'form-horizontal','id' => 'formAddEvent']) !!}
                    @include('include.modal-master-layout')
                {!! Form::close() !!}
            </div><!-- End Body Code Here-->

            <div class="modal-footer">
                <button type="button" class="btn btn-default" onclick="addEventClose()">Close</button>
                <button type="submit" class="btn btn-primary" id="btnAddEvent">Save Event</button>
            </div>

        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="modalEditEvent" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Edit Event</h4>
                </div>

                <div class="modal-body"><!-- Body Code Here-->
                    {!! Form::open(['class'=>'form-horizontal','id' => 'formUpdateEvent']) !!}
                        @include('include.modal-master-layout')
                    {!! Form::close() !!}
                </div><!-- End Body Code Here-->

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" onclick="updateEventClose()">Close</button>
                    <button type="submit" class="btn btn-primary" id="btnUpdateEvent">Update changes</button>
                </div>

        </div>
    </div>
</div>

@endsection


@section('script-header')
<!-- Full Calendar -->
<script src="{{ URL::asset('js/fullcalendar/moment.min.js') }}"></script>

<!-- Jquery Core -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

<!-- Jquery UI -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.js"></script>

<!-- Bootstrap -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>

<!-- PARSLEY -->
<script>
    window.ParsleyConfig = {
        errorsWrapper: '<div class="action"></div>',
        errorTemplate: '<div  style="color: palevioletred;font-weight:500"></div>',
        errorClass: 'has-error',
        successClass: 'has-success'
    };
</script>

<!-- Parsley.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.3.11/parsley.min.js"></script>

<!-- Jquery Confirm js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/2.5.1/jquery-confirm.min.js"></script>


<!-- Full Calendar -->
<script src="{{ URL::asset('js/fullcalendar/fullcalendar.min.js') }}"></script>
<script src="{{ URL::asset('js/fullcalendar/gcal.js') }}"></script>
<script src="{{ URL::asset('js/fullcalendar/lang-all.js') }}"></script>

<!-- Spin Script -->
<script src="{{ URL::asset('js/jquery.spin.js') }}"></script>

<!-- qTip2 Script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/qtip2/3.0.3/jquery.qtip.min.js"></script>

<!-- Accordion JS -->
<script src="{{ URL::asset('js/accordion/accordion.js') }}"></script>

<!-- Select2 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.js"></script>

<!-- jQuery Spectrum -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/spectrum/1.8.0/spectrum.min.js"></script>

<!-- jQuery UI Datepicker JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.1/jquery-ui-timepicker-addon.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.1/i18n/jquery-ui-timepicker-addon-i18n.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.1/jquery-ui-sliderAccess.min.js"></script>


<!-- Numeral JS-->
<script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/1.4.5/numeral.min.js"></script>

<script>
    console.log('global settings');
    //Global Variables

    var app = {
        newDate:'',
        newTime: '',

    };

    //Initialization
    app.init = function(){
        console.log('Initialize token');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(window).load(function() {
            console.log('hitz');
            app.spinStart();
        });



    };

    app.spinStart = function (){
        // executes when complete page is fully loaded, including all frames, objects and images
        $(function () {
            var opts = {
                lines: 11 // The number of lines to draw
                , length: 18 // The length of each line
                , width: 11 // The line thickness
                , radius: 21 // The radius of the inner circle
                , scale: 1 // Scales overall size of the spinner
                , corners: 1 // Corner roundness (0..1)
                , color: '#000' // #rgb or #rrggbb or array of colors
                , opacity: 0 // Opacity of the lines
                , rotate: 0 // The rotation offset
                , direction: -1 // 1: clockwise, -1: counterclockwise
                , speed: 1.8 // Rounds per second
                , trail: 81 // Afterglow percentage
                , fps: 20 // Frames per second when using setTimeout() as a fallback for CSS
                , zIndex: 2e9 // The z-index (defaults to 2000000000)
                , className: 'spinner' // The CSS class to assign to the spinner
                , top: '50%' // Top position relative to parent
                , left: '50%' // Left position relative to parent
                , shadow: true // Whether to render a shadow
                , hwaccel: false // Whether to use hardware acceleration
                , position: 'absolute' // Element positioning
            };
            $("#spin").show().spin(opts);
            console.log('spin start');
        });
    };

    app.spinStop = function (){
        $("#spin").hide();
        console.log('spin stop');
    };

    app.colorpicker = function(){

        $("div #getcolor").spectrum({
            preferredFormat: "hex",
            color: 'blue',
            showInput: true,
            showPalette: true,
            palette: [
                ["grey", "green", "yellow"],
                ["red", "orange", "lightgreen"]
            ],
            change: function(color) {
                $('#getcolor').val((color.toHexString()).toString());
                $(".diplayHexColor").empty().append('<span class="diplayHexColor"> <strong>  Hex:</strong> ' + $("#getcolor").val() +'</span>');
            }
        });
    };

    app.datepicker = function() {

        $('div .startDatePicker').datetimepicker({
            'showTimepicker': false,
            dateFormat: 'dd-M-yy'
        });

        $('div .startTimePicker').timepicker(
            {
            timeFormat: "hh:mm tt",
            showAnim: 'slide',
            duration: 'fast',
            hour: 9

        });

        $('div .endDateTimePicker').datetimepicker({
            dateFormat: 'dd-M-yy',
            timeFormat: "hh:mm tt",
            hour: 9,
            showAnim: 'slide',
            duration: 'fast'
        });

    };

    app.search = function() {
        var select2 = $(".contact").select2({
        theme: "bootstrap",
        placeholder: 'Search a Contact',
        ajax: {
            url: "/api/contact/select2-search-contact",
            dataType: 'json',
            delay: 250,
            data: function (params) {
                return {
                    q: params.term // search
                };
            },
            processResults: function (data) {
            // parse the results into the format expected by Select2.
            // since we are using custom formatting functions we do not need to
            // alter the remote JSON data
            return {
                results: $.map(data, function(obj) {
                    //console.log(obj.id,obj.name);

                    //populate to dropdown
                    return { id: obj.id, text: obj.name};

                })
            };
        },
        cache: true
    }, //Ajax
    minimumInputLength: 1
    }) //End Select2
    .on('change', function(e){

        console.log($('.contact').val());
        $.ajax({
            type: "GET",
            url: "/api/contact/search-contact",
            dataType: 'json',
            data: {id: $('.contact').val()},
            success: function (obj){
                $.each( obj, function( key, value ){
                    //console.log(value.totalRecord);
                    $('div .result').empty().append(
                            '<span>Search Result(s): </span>' + '<strong>' +  value.name+'</strong>'
                    );

                });
            }
        }); //Ajax
        e.preventDefault();
    }) //on
    ;  //end select
    };

    app.job_order_number = function (){
        $('#job_order_number').val((Math.floor(Math.random()*10)+1)+Math.random().toString(36).slice(2));

    };

    app.accordion = function (){
        jQuery("div #accordion1").accordion();
        jQuery("div #accordion2").accordion();
        jQuery("div #accordion3").accordion();
        jQuery("div #accordion4").accordion();
        jQuery("div #accordion5").accordion();
        jQuery("div #accordion6").accordion();
        jQuery("div #accordion7").accordion();
    };

    app.autoCompute = function (collectible_amount){
        //pending for Refactor
        $("div #collectible_amount").val('0.00');
        $("div #actual_charge, #initial_deposit").change( function() {
        $("div #collectible_amount").val($("div #actual_charge").val() - $('div #initial_deposit').val());

        });
    };

    app.ajax = function (URL, method, data, dataType ){
        $.ajax({
            url: URL,
            method: method,
            data: data,
            dataType: dataType,
            beforeSend: function (xhr) {
                app.spinStart();
            },
            success: function(response){
                //console.log(response);
                if(response.response == "AddEvent"){
                    alert('Saved');
                    $('#formAddEvent').trigger('reset').modal('hide');
                    //Refresh Calendar
                    $('#calendar').fullCalendar("refetchEvents");

                }

                if(response.response == "EditEvent"){
                    console.log('title: ' + response.data.contact_id);
                    console.log('Start Time: '+ response.data.start +' '+ moment(response.data.start).format('DD-MMM-YYYY hh:mma'));
                    console.log('End Time: ' + response.data.end +' '+ moment(response.data.end).format('DD-MMM-YYYY hh:mma'));

                    //Job Schedules
                    $("div .contact").empty().append('<option value='+ response.data.contact_id +'>'+response.data.title+'</option>').val(response.data.contact_id).trigger('change');
                    $('div .contact').attr("disabled", 'disabled');


                    $('div #job_order_number').val(response.data.job_order_number);

                    $("div #getcolor").spectrum("set",response.data.job_assign_color.substr(1));
                    $("div .diplayHexColor").empty().append('<span class="diplayHexColor"> <strong>  Hex:</strong> ' + $("div #getcolor").val() +'</span>');

                    $('div #job_order_number').val(response.data.job_order_number);
                    $('div #job_queue').val(response.data.job_queue);
                    $('div #service_type').val(response.data.service_type);
                    $('div #technician').val(response.data.technician);
                    $('div #job_description').val(response.data.job_description);
                    $('div #job_notes').val(response.data.notes);

                    $('div #pre_job_sched_status').val(response.data.pre_job_sched_status);
                    $('div #est_job_time_sched').val(response.data.est_job_time_sched);

                    $('div #job_site_address').val(response.data.job_site_address);
                    $('div #job_site_suburb').val(response.data.job_site_suburb);
                    $('div #job_site_postal_code').val(response.data.job_site_postal_code);
                    $('div #job_site_country').val(response.data.job_site_country);


                    $('div .startDatePicker').attr("disabled", false).val(moment(response.data.start).format('DD-MMM-YYYY'));
                    $('div .startTimePicker').val(moment(response.data.start).format('hh:mm a'));


                    $('div .endDateTimePicker').datetimepicker(
                            'setDate',(new Date(moment(response.data.end).format('DD-MMM-YYYY hh:mm a')))
                    );

                    //Payments
                    $('div #payment_type').val(response.data.payments.payment_type);
                    $('div #payment_status').val(response.data.payments.payment_status);
                    $('div #payment_estimated_charge').val(response.data.payments.payment_estimated_charge);
                    $('div #payment_actual_charge').val(response.data.payments.payment_actual_charge);
                    $('div #payment_initial_deposit').val(response.data.payments.payment_initial_deposit);
                    $('div #payment_collectible_amount').val(response.data.payments.payment_collectible_amount);
                    $('div #payment_description').val(response.data.payments.payment_description);

                    //Site Contacts
                    $('div #site_contact_name').val(response.data.sitecontacts.site_contact_name);
                    $('div #site_contact_job_title').val(response.data.sitecontacts.site_contact_job_title);
                    $('div #site_contact_phone1').val(response.data.sitecontacts.site_contact_phone1);
                    $('div #site_contact_phone2').val(response.data.sitecontacts.contact_phone2);
                    $('div #site_contact_notes').val(response.data.sitecontacts.site_contact_notes);

                    //Extra Jobs
                    $('div #extra_service_type').val(response.data.extra_service_type);
                    $('div #extra_job_description').val(response.data.extra_job_description);
                    $('div #extra_service_type').val(response.data.extra_service_type);
                    $('div #extra_job_assign_tech').val(response.data.extra_job_assign_tech);
                    $('div #extra_payment_type').val(response.data.extra_payment_type);
                    $('div #extra_payment_status').val(response.data.extra_payment_status);
                    $('div #extra_job_total_charge').val(response.data.extra_job_total_charge);

                    //Service Calls
                    $('div #sc_service_type').val(response.data.sc_service_type);
                    $('div #sc_job_description').val(response.data.sc_job_description);
                    $('div #sc_job_fault_tech').val(response.data.sc_job_fault_tech);
                    $('div #sc_job_assign_tech').val(response.data.sc_job_assign_tech);
                    $('div #sc_est_service_charge').val(response.data.sc_est_service_charge);


                }

                if(response.response == "UpdateEvent"){


                    //Update Calendar
                    //$('#calendar').fullCalendar('updateEvent', event);
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert ('Ajax Response Error: ' + thrownError +' '+xhr.status);
            }
        })
        .done(function () {
            app.spinStop();
        });
    };

    app.loadEvents = function(){
        app.ajax('api/calendarEventsLoad','GET','','');
    };

    app.calendar = function (){

        // page is now ready, initialize the calendar...
        $('#calendar').fullCalendar({
            // put your options and callbacks here
            events:  {
                url: '/api/calendarEventsLoad',
                type: 'GET',

                error: function() {
                    alert('there was an error while fetching events!');
                },
                success: function(data) {
                    //console.log(data);
                },
                //color: 'grey',   // a non-ajax option
                textColor: 'white' // a non-ajax option
            },
            select: function(start, end) {
                //preferred to used dayClick event
                //console.log(moment(start).format('YYYY-MM-DDTHH:mm:ssZ'));
            },

            eventRender: function(event, element) {

                element.find('.fc-time').hide();
                element.css('border', 0);
                element.css('background-color', event.job_assign_color);
                element.find('.fc-content').append("<br/>"+
                        '<span style="font-weight:bold">Pre Job Status: </span>'+ event.pre_job_sched_status + "<br/>" +
                        '<span style="font-weight:bold">Job Status: </span>'+ event.job_sched_status + "<br/>" +
                        '<span style="font-weight:bold">Service Type: </span>'+ event.service_type + "<br/>" +
                        '<span style="font-weight:bold">Est Job Sched: </span>' + event.est_job_time_sched + "<br/>" +
                        '<span style="font-weight:bold">Technician: </span>' + event.technician + "<br/>" +
                        moment(event.start).format('D-MMM-YYYY Thh:mm a') + "<br/>" +
                        moment(event.end).format('D-MMM-YYYY Thh:mm a') + "<br/> <br/>" +
                        '<span style="font-weight:bold">PEChrge: </span>' + numeral(event.payment_estimated_charge).format('$0,0.00') + "<br/>" +
                        '<span style="font-weight:bold">PAChrge: </span>' + numeral(event.payment_actual_charge).format('$0,0.00')
                );

                //console.log(event.start + ' ' +event.end);
                element.qtip({
                    content: {
                        title: 'Details',
                        text:   '<span style="font-weight:bold">Job Description: </span>'+event.job_description + "<br/><br/>" +

                                '<span style="font-weight:bold">Job Site Address: </span>' + event.job_site_address + "<br/>" +
                                '<span style="font-weight:bold">Suburb: </span>' + event.job_site_suburb + "<br/>" +
                                '<span style="font-weight:bold">Postal Code: </span>' + event.job_site_postal_code + "<br/>" +
                                '<span style="font-weight:bold">Country: </span>' + event.job_site_country + "<br/><br/>" +

                                '<span style="font-weight:bold">Site Contact Person: </span>' + event.site_contact_name + "<br/>" +
                                '<span style="font-weight:bold">Contact Job Title: </span>' + event.site_contact_job_title + "<br/>" +
                                '<span style="font-weight:bold">Phone 1: </span>' + event.site_contact_phone1 + "<br/>" +
                                '<span style="font-weight:bold">Phone 2: </span>' + event.site_contact_phone2 +"<br/>" +
                                '<span style="font-weight:bold">Onsite Notes: </span>' + event.site_contact_notes +"<br/>"
                    },
                    position: {
                        my: 'top left',
                        at: 'bottom center'
                    }
                });

            },
            //Show Events
            dayClick: function(date, jsEvent, view) {
                $('#modalAddEvent .startDatePicker').val(((date).format("DD-MMM-YYYY").toString())).attr('disabled',true);
                $('#modalAddEvent .startTimePicker').val("9:00 am");

                $('#modalAddEvent').modal('show');

            },
            //Edit Events
            eventClick: function(event, jsEvent, view) {
                //Show Edit Modal
                $('#modalEditEvent').modal('show');
                $('div .contact').removeAttr('disabled');

                //Call Ajax
                app.ajax('/api/editEvent/'+event.job_schedule_id+'/edit', 'GET', '' , 'JSON');
              },

            eventDrop: function(event, delta, revertFunc) {

                alert(event.title + " was dropped on " + event.start.format());

                if (!confirm("Are you sure about this change?")) {
                    revertFunc();
                }

            },

            eventResize: function(event, delta, revertFunc) {

                alert(event.title + " end is now " + event.end.format());

                if (!confirm("is this okay?")) {
                    revertFunc();
                }

            },

            utc: true,
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,basicWeek,basicDay'
            },
            //defaultDate: '2016-07-12', if omitted default date is the current date
            //timezone: moment.locale(),

            weekNumbers: true,
            droppable: true,
            editable: true,
            selectable: true,
            selectHelper: true,
            contentHeight: 'auto',
            nextDayThreshold: '00:00:00',
           // eventLimit: true // allow "more" link when too many events

        });

    }; <!-- End Calendar -->

    app.addEvent = function() {
        $('#btnAddEvent').on('click', function () {
            //console.log($("#formAddEvent").serialize());
            app.ajax('/api/addEvent', 'POST', JSON.stringify($("#formAddEvent").serialize()), 'JSON');
        });
    };

    app.updateEvent = function (){
        $('#btnUpdateEvent').on('click', function (){
            console.log('Start Time: ' + app.newDate +' '+app.newTime);
            console.log(JSON.stringify($("#formUpdateEvent").serialize()));
            app.ajax('/api/updateEvent/'+10+'/update', 'PATCH', JSON.stringify($("#formUpdateEvent").serialize()), 'JSON');
        });
    };

    function addEventClose(){
        $('div .contact').removeAttr('disabled');
        $('#modalAddEvent').modal('hide');
        /*$('#modalAddEvent').on('hidden.bs.modal', '.modal', function () {
            $(this).removeData('bs.modal');
        });*/
    }

    function updateEventClose(){
        $('div .contact').removeAttr('disabled');

        /*$('#modalEditEvent').on('hidden.bs.modal', '.modal', function () {
            $(this).removeData('bs.modal');
        });*/
        $('#modalEditEvent').modal('hide');
    }
</script>

<script>
    $(document).ready(function () {
        <!-- Start jQuery Document -->
        //Check if plugins is running
        console.log('jQuery plugin working...');

        app.init();
        app.colorpicker();
        app.datepicker();
        app.search();
        app.job_order_number();
        app.accordion();
        app.loadEvents();
        app.calendar();
        app.addEvent();
        //app.editEvent();
        app.updateEvent();
        app.autoCompute();
        app.spinStop();

        //Set Color
        //$("#getcolor").spectrum();
        //$("#getcolor").show();
        $("#getcolor").spectrum("set",'1197C1');
        $(".diplayHexColor").append($("#getcolor").val());




    }); <!-- End jQuery Document -->
</script>


@endsection

