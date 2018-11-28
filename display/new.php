<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="refresh" content="500"> <!-- Page refresh time at content \\ color:SaddleBrown-->
    <title>Reynolds Building</title>
    <meta name="Picturesque Designs" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>

<body style="background-color:moccasin; font-size: 80%; color: saddlebrown;" onLoad="swapImage()">
        <script type="text/javascript">
            var i = 0; 			// Start Point
var images = [];	// Images Array
var profNames = [];
var profTitle = [];
var profDetails = [];
var time = 3000;	// Time Between Switch

// Image List
images = ["ah_wright_0","Ali_Dehghantanha", "BlairNonnecke","CharlieObimbo","DanaReaProfile","DanielGillis","David_Flatla","DavidCalvert",
            "DChiu-Profile","DeborahStacey","dnikiten","FangjuWang","FeiSong","gary","JudiMcCuaig","LuizaAntonie200x300",
            "MarkWineberg","MichaelWirth","PascalMatsakis","ritu","RozitaDara","Sawada_profile","stacey","StefanKremer",
            "XiningLi","YangXiang"];



// Prof.Names List
profNames = ["Andrew Hamilton-Wright","Ali Dehghantanha","Blair Nonnecke","Charlie Obimbo","Dana Rea","Daniel Gillis","David Flatla","David Calvert",
                "David Chiu","Deborah Stacey","Denis Nikitenko","Fangju Wang","Fei Song","Gary Grewal","Judi McCuaig","Luiza Antonie",
                "Mark Wineberg","Michael Wirth","Pascal Matsakis","Ritu Chaturvedi","Rozita Dara","Joseph Sawada","Stacey Scott","Stefan Kremer",
                "Xining Li","Yang Xiang"];

// Prof.Title List
var AProf = "Associate Professor"
profTitle = [AProf,AProf,AProf,AProf,"Analyst III",AProf,AProf,"Associate Director Undergraduate Studies\nAssociate Professor",
                "Professor",AProf,AProf,"Professor",AProf,AProf,AProf,AProf,
                AProf,AProf,"Professor",AProf,AProf,"Associate Director Graduate Studies\nProfessor",AProf,"Professor",
                "Professor","Director\nProfessor"];

// ProfDetails
profDetails = ["2223","3326","2222","3310","1105","","2205","2201",
                "2220","3301","3322","3304","2225","2208","2204","3325",
                "2202","2209","3305","2211","3311","2226","3308","3309",
                "3302","1117"];

//alert(images.length + " x "+profNames.length + " x "+profTitle.length+ " x " +profDetails.length);
// Change Image
function changeImg(){
document.slide.src = "image/faculty/" + images[i]+".jpg";
document.getElementById("prName").innerText = profNames[i];
document.getElementById("prTitle").innerText = profTitle[i];
document.getElementById("prDetails").innerText ="Reynolds : " + profDetails[i];

// Check If Index Is Under Max
if(i < images.length - 1){
// Add 1 to Index
i++; 
} else { 
// Reset Back To O
i = 0;
}

// Run function every x seconds
setTimeout("changeImg()", time);
}

// Run function when page loads
window.onload=changeImg;
            </script>
    
    
    <table border="2"  style="height:100%; width: 100%; ">
        <tr>
            <td align = "middle" rowspan="1" style="width:17%">
                    <iframe src="http://free.timeanddate.com/clock/i6g76wrm/n1178/fs24/fc8b4513/tcffe4b5/pcffe4b5/tt0/tw1/tm1/ta1/tb4" frameborder="0" width="210" height="58"></iframe>

                </td>
            <td colspan="4">
                <table style="width:100%">
                    <tr>
                            <td  rowspan="2" style="width:15%; align-content: right;padding-left:1%"><img src="image/Gryphon.jpg" alt="Gryphon Image"   width="120%" height="130px"></td>
                            <td align = "middle" colspan="1" style="font-size: 440%; font-weight: normal; padding-top: 1%"> 
                                    University of Guelph
                            </td>
                            <td rowspan="2" style="width:13%; align-content: left; padding-right:1%;">
                                    <img src="image/uofg_cornerstone_red.png" alt="uofg_cornerstone_red Image"  width="90%" height="130px" >
                            </td>
                    </tr>
                    <tr>
                            <td align="middle"  colspan="1" style="font-size: 200%;">
                                Reynolds Building <br>
                                School of Computer Science 
                            </td>
                        </tr>
                </table>
            </td>
            
            <td rowspan="1" style="width:15%"> 
          <!-- weather widget start --><div id="m-booked-weather-bl250-45150"> <div class="booked-wzs-250-175 weather-customize" style="background-color:#ffd4b5;width:250px;" id="width1"> <div class="booked-wzs-250-175_in"> <div class="booked-wzs-250-175-data"> <div class="booked-wzs-250-175-left-img wrz-01"> <a target="_blank" href="https://www.booked.net/"> <img src="//s.bookcdn.com/images/letter/logo.gif" alt="booked net" /> </a> </div> <div class="booked-wzs-250-175-right"> <div class="booked-wzs-day-deck"> <div class="booked-wzs-day-val"> <div class="booked-wzs-day-number"><span class="plus">+</span>14</div> <div class="booked-wzs-day-dergee"> <div class="booked-wzs-day-dergee-val">&deg;</div> <div class="booked-wzs-day-dergee-name">C</div> </div> </div> <div class="booked-wzs-day"> <div class="booked-wzs-day-d">H: <span class="plus">+</span>17&deg;</div> <div class="booked-wzs-day-n">L: <span class="plus">+</span>14&deg;</div> </div> </div> <div class="booked-wzs-250-175-info"> <div class="booked-wzs-250-175-city">Guelph </div> <div class="booked-wzs-250-175-date">Monday, 08 October</div> <div class="booked-wzs-left"> <span class="booked-wzs-bottom-l">See 7-Day Forecast</span> </div> </div> </div> </div> <a target="_blank" href="https://www.booked.net/weather/guelph-30546"> <table cellpadding="0" cellspacing="0" class="booked-wzs-table-250"> <tr> <td>Tue</td> <td>Wed</td> <td>Thu</td> <td>Fri</td> <td>Sat</td> <td>Sun</td> </tr> <tr> <td class="week-day-ico"><div class="wrz-sml wrzs-03"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td> </tr> <tr> <td class="week-day-val"><span class="plus">+</span>24&deg;</td> <td class="week-day-val"><span class="plus">+</span>23&deg;</td> <td class="week-day-val"><span class="plus">+</span>20&deg;</td> <td class="week-day-val"><span class="plus">+</span>11&deg;</td> <td class="week-day-val"><span class="plus">+</span>11&deg;</td> <td class="week-day-val"><span class="plus">+</span>13&deg;</td> </tr> <tr> <td class="week-day-val"><span class="plus">+</span>18&deg;</td> <td class="week-day-val"><span class="plus">+</span>17&deg;</td> <td class="week-day-val"><span class="plus">+</span>9&deg;</td> <td class="week-day-val"><span class="plus">+</span>8&deg;</td> <td class="week-day-val"><span class="plus">+</span>4&deg;</td> <td class="week-day-val"><span class="plus">+</span>8&deg;</td> </tr> </table> </a> </div></div> </div><script type="text/javascript"> var css_file=document.createElement("link"); css_file.setAttribute("rel","stylesheet"); css_file.setAttribute("type","text/css"); css_file.setAttribute("href",'https://s.bookcdn.com/css/w/booked-wzs-widget-275.css?v=0.0.1'); document.getElementsByTagName("head")[0].appendChild(css_file); function setWidgetData(data) { if(typeof(data) != 'undefined' && data.results.length > 0) { for(var i = 0; i < data.results.length; ++i) { var objMainBlock = document.getElementById('m-booked-weather-bl250-45150'); if(objMainBlock !== null) { var copyBlock = document.getElementById('m-bookew-weather-copy-'+data.results[i].widget_type); objMainBlock.innerHTML = data.results[i].html_code; if(copyBlock !== null) objMainBlock.appendChild(copyBlock); } } } else { alert('data=undefined||data.results is empty'); } } </script> <script type="text/javascript" charset="UTF-8" src="https://widgets.booked.net/weather/info?action=get_weather_info&ver=6&cityID=30546&type=3&scode=2&ltid=3457&domid=w209&anc_id=88790&cmetric=1&wlangID=1&color=0a8dff&wwidth=250&header_color=ffffff&text_color=333333&link_color=08488D&border_form=1&footer_color=ffffff&footer_text_color=333333&transparent=0"></script><!-- weather widget end -->
            </td>
        </tr>
    
        <tr>
            <td colspan="2" style="font-size :200%; text-align :center; padding-top: .5%;vertical-align: top">
                Faculty<div style="font-size :25%;">&emsp;<br/><br/><br/><br/></div>
                <table style="width:100%;">
                    <tr>
                        <td><img name="slide" height="235" width="200" src="image/faculty/DanaReaProfile.jpg"/></td>
                        <td>
                            <div id ="prName" style="font-size :85%;"></div>
                            <div id ="prTitle" style="font-size :75%;"></div>
                            <div id ="prDetails" style="font-size :65%;"></div>
                        </td>
                    </tr>
                </table>
            </td>
            <!--slide show ends-->

            <td colspan="2" style="font-size :200%; text-align :center; vertical-align: top; padding: .5%; width: 40%">
                Today's Events<div style="font-size :25%;">&emsp;<br/><br/></div><br/>
                    
                <table style="font-size :65%;  border:1px solid SaddleBrown; width:100%;border-collapse: collapse; ">
                    <tr>
                        <th>Time</th>
                        <th>Hall</th>
                        <th>Event</th>
                    </tr>
                    <tr>
                        <td>08:00</td>
                        <td>203</td>
                        <td>CIS 3750 Software Design - Dana Rea</td>
                    </tr>
                    <tr>
                        <td>09:00</td>
                        <td>427</td>
                        <td>CIS 4750 Software Testing - Dana Rea</td>
                    </tr>
                    <tr>
                        <td>10:00</td>
                        <td>127</td>
                        <td>CIS 2120 Assembly Language - Dana Rea</td>
                    </tr>
                    <tr>
                        <td>11:00</td>
                        <td>327</td>
                        <td>CIS 2750 Java Programming - Dana Rea</td>
                    </tr>
                    <tr>
                            <td>12:00</td>
                            <td>203</td>
                            <td>CIS 3750 Software Design - Dana Rea</td>
                        </tr>
                        <tr>
                            <td>01:00</td>
                            <td>427</td>
                            <td>CIS 4750 Software Testing - Dana Rea</td>
                        </tr>
                        <tr>
                            <td>02:00</td>
                            <td>127</td>
                            <td>CIS 2120 Assembly Language - Dana Rea</td>
                        </tr>
                        <tr>
                            <td>03:00</td>
                            <td>327</td>
                            <td>CIS 2750 Java Programming - Dana Rea</td>
                        </tr>
                </table>
            </td>
            
            <td colspan="2" style=" height:300px; align-content: center">
                  <iframe src="https://feed.mikle.com/widget/v2/95244/" height="335px" width="100%" class="fw-iframe" scrolling="no" frameborder="0"></iframe> 
            
            </td>
        </tr>
        
        
        <tr style="height:80%;">
            <td colspan="2" style="width:33%; padding: .2%; align-content: center">
                    <a class="twitter-timeline" data-height="100%" href="https://twitter.com/uofg?ref_src=twsrc%5Etfw">Tweets by uofg</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </td>
            <td colspan="2" style="font-size :200%; text-align :center; vertical-align: top; padding: .5%">

                    Co-op / Job Oppurtunities<br><div style="font-size :25%;">&emsp;</div>
                    
                    <table style="font-size :65%; border:1px solid SaddleBrown; width:100%;border-collapse: collapse;">
                        <tr>
                            <th>Apply before</th>
                            <th>Position</th>
                            <th>Company Details</th>
                        </tr>
                        <tr>
                            <td>15 Dec</td>
                            <td>Project Manager</td>
                            <td>Picturisque Designs</td>
                        </tr>
                        <tr>
                            <td>20 Dec</td>
                            <td>Project Architect</td>
                            <td>Picturisque Designs</td>
                        </tr>
                        <tr>
                            <td>01 Jan</td>
                            <td>Database Manager</td>
                            <td>Picturisque Designs</td>
                        </tr>
                        <tr>
                            <td>02 Jan</td>
                            <td>Team Lead</td>
                            <td>Picturisque Designs</td>
                        </tr>
                        <tr>
                                <td>10 Jan</td>
                                <td>Backend Coder</td>
                                <td>Picturisque Designs</td>
                            </tr>
                            <tr>
                                <td>13 Jan</td>
                                <td>Layout Designer</td>
                                <td>Picturisque Designs</td>
                            </tr>
                            <tr>
                                <td>15 Jan</td>
                                <td>Front end Developer</td>
                                <td>Picturisque Designs</td>
                            </tr>
                            <tr>
                                <td>25 Jan</td>
                                <td>Web developer</td>
                                <td>Picturisque Designs</td>
                            </tr>
                            <tr>
                                    <td>10 Jan</td>
                                    <td>Backend Coder</td>
                                    <td>Picturisque Designs</td>
                                </tr>
                                <tr>
                                    <td>13 Jan</td>
                                    <td>Project Manager</td>
                                    <td>Data Com</td>
                                </tr>
                                <tr>
                                    <td>15 Jan</td>
                                    <td>Java Developer</td>
                                    <td>Data Com</td>
                                </tr>
                                <tr>
                                    <td>25 Jan</td>
                                    <td>Web developer</td>
                                    <td>Data Com</td>
                                </tr>
                    </table>

            </td>
            <td colspan="2" style="width:34%; padding: .2%">
                    <iframe src="https://www.youtube.com/embed/4_PfSD7uw0M?autoplay=1&controls=0&loop=1&mute=1&playlist=4_PfSD7uw0M&amp;theme=light&amp;autohide=1&amp;showinfo=0" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </td>
            
        </tr>
    </table>
    <br><br><br>
    &emsp;&emsp;<a href="sign-in.html">Modify Signage</a><b>&emsp;&emsp;Members - Instructor: </b>


Dana Rea.&emsp;&emsp;&emsp;&emsp;

<b>Teaching Assistant:</b> Fanny Susilo, Nicolas Durish, Tamizhselvan Venkatesan.&emsp;&emsp;&emsp;&emsp;

<b>Project Lead:</b> Ahmed Mousa.&emsp;&emsp;&emsp;&emsp;
<b>Developers:</b> Jeremie Fraeys de Veubeke, Justin Wegner, Kevin Pirabaharan, Manoj Naick, Miriam Snow

    <br><br><br><br><br>
</body>
</html>