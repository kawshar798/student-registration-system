$(function() {
           $("form").validity(function() { 
                    
                        $("#name")
                            .require("Please Enter You fullname .")
                            .match("text");
							 $("#firstname")
                            .require("Please Enter You Firstname .")
                            .match("text");
							 $("#stid")
                            .require("Please Enter You StudentID .")
                            .match("text");
							
							$("#email")
                            .require("Please Enter You Email Address.")
                            .match("email");
							$("#email")
                            .require("Please Enter You Email Address.")
                            .match("email");
							$("#slottime")
                            .require("PleaseSelect You timeslot .")
                            .match("select");
                    
                });

 });    