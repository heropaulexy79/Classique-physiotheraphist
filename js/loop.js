$(document).ready(function(){

    $("#pane").hide();
    $("#pan").hide();
    
                    $("#services").click(function(){
                        var serv = $("#services").val();
                        if(serv == ""){
                            $("#pane").hide();
                            $("#pan").hide();
                            return false;
                        }else if(serv == "Home Services Appointment" || serv == "Clinic Appointment"){
                            $("#pane").show().fadeIn('slow');
                            $("#pan").hide();
                        }
                        else if(serv == "Consultation Appointment"){
                            $("#pan").show().fadeIn('slow');
                            $("#pane").hide();
                        }
                        /*if (serv == "Home Services" || serv == "Clinic Appointment"){
                            $("#pane").show(1000);
                        }
                        else{
                        
                    };*/

                });
                    
            });