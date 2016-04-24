<!DOCTYPE html>

<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Save the Earth</title>

    <link href='http://fonts.googleapis.com/css?family=Lato:300,700,900' rel='stylesheet' type='text/css'>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link href="{{ asset('css/selectordie.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/selectordie_theme_02.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">

</head>

<body>

<section style="background: url('{{ asset('img/bg.jpg') }}')" id="cover" class="cover">

    <select class="well_hello_there" data-placeholder-option="true" data-custom-class="cover_sod no_highlight">
        <option value="null">Climate change in...</option>
        <option value="#albania">Albania</option>
        <option value="#albania">Kosovo - Coming Soon...</option>
        <option value="#italy">Italy - Coming Soon...</option>
        <option value="#us">United States - Coming Soon...</option>
    </select>

</section>


<section id="albania">

    <div class="content">

        <div class="text-center">
            <img src="{{ asset('flags/4x3/al.svg') }}" width="50" alt="Albania">
        </div>
        <br>
        <h1>Albania</h1>
    </div>

    <div class="content">

        <div class="row">
            <div class="col-md-12">
                <h2>Temperatures <b>Worldwide</b></h2>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <img class="nasaImg" src="{{ asset('img/nasa.gif') }}" alt="NASA">
            </div>
        </div>

        <br>

        <div class="row">
            <div class="col-md-12">
                <h2>Temperatures in <b>Albania</b></h2>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
             <canvas id="myChart" width="100%" height="30" ></canvas>
            </div>

            <div class="col-md-12">
                <h2>Forecast Temperatures</h2>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <canvas id="futureChart"  width="100%" height="30" ></canvas>
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col-md-6">
                <h3>Factors:</h3>
                <ul class="checkboxEvent">
                    <li><input class="input3" onchange="temperaturesFactory()" type="checkbox"> <span>Deforestation</span></li>
                    <li class="data3">
                        <ol>
                            <li>1. Save trees and plant new ones. </li>
                            <li>2. Clear cutting of forests must be banned.</li>
                            <li>3. Reduce overconsumption.</li>
                            <li>4. Recycle industrial waste.</li>
                        </ol>
                    </li>
                    <li><input class="input4"  onchange="temperaturesFactory()" type="checkbox"> <span>Greenhouse effect</span></li>
                    <li class="data4">
                        <ol>
                            <li>1. Reduce, Reuse, Recycle </li>
                            <li>2. Use Less Heat and Air Conditioning</li>
                            <li>3. Replace Your Light Bulbs</li>
                            <li>4. Drive Less and Drive Smart</li>
                            <li>5. Buy Energy-Efficient Products</li>
                            <li>6. Use Less Hot Water</li>
                            <li>7. Use the "Off" Switch</li>
                            <li>8. Get a Report Card from Your Utility Company</li>
                            <li>9. Encourage Others to Conserve</li>
                        </ol>
                    </li>
                    <li><input class="input5"  onchange="temperaturesFactory()" type="checkbox"> <span>Extreme air pollution </span></li>
                    <li class="data5">
                        <ol>
                            <li>1. Conserve energy - at home, at work, everywhere </li>
                            <li>2. Look for the ENERGY STAR label when buying home or office equipment</li>
                            <li>3. Keep car, boat, and other engines properly tuned</li>
                            <li>4. Be sure your tires are properly inflated</li>
                            <li>4. Use environmentally safe paints and cleaning products whenever possible</li>
                            <li>4. Cosider using gas logs instead of wood</li>
                        </ol>
                    </li>
                </ul>
            </div>

            <div class="col-md-6">
                <h3>Effects:</h3>
                <ul class="checkboxEvent">
                    <li>1. Changes in rainfall patterns</li>
                    <li>2. Sea levels rise</li>
                    <li>3. Ice melting</li>
                    <li>4. Changes in bird pilgrimage</li>
                    <li>5. Wildfires</li>
                    <li>6. Extreme blizzard in winter</li>
                    <li>7. Casualties</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <h2>Rainfall</h2>
                <p class="text-left">Rainfall is one of the most critical factors determining the overall impact of climate change.</p>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <canvas id="myChart2"  width="100%" height="30" ></canvas>
            </div>
            <div class="col-md-12">
                <h2>Rainfall Deforestation</h2>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <canvas id="futureChart2"  width="100%" height="30" ></canvas>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <h3>Factors:</h3>
                <ul class="checkboxEvent">
                    <li><input class="input1" onchange="rainfallFactory()" type="checkbox"> <span>Deforestation</span></li>
                    <li class="data1">
                        <ol>
                            <li>1. Save trees and plant new ones. </li>
                            <li>2. Clear cutting of forests must be banned.</li>
                            <li>3. Reduce overconsumption.</li>
                            <li>4. Recycle industrial waste.</li>
                        </ol>
                    </li>
                    <li><input class="input2" onchange="rainfallFactory()" type="checkbox"> <span>Extreme temperatures</span></li>
                    <li class="data2">
                        <ol>
                            <li>1. Phasing out fossil fuel and reviving up renewables</li>
                            <li>2. Recycle garbages</li>
                            <li>3. Reduction of gas emissions</li>
                            <li>4. Using filter in factories</li>
                        </ol>
                    </li>
                </ul>
            </div>

            <div class="col-md-6">
                <h3>Effects:</h3>
                <ul class="checkboxEvent">
                    <li>1. Extreme drought in summer</li>
                    <li>2. Extreme blizzard in winter</li>
                    <li>3. Floods</li>
                    <li>4. Landslides and soil erosion</li>
                    <li>5. Heat waves</li>
                    <li>6. Shifting seasons</li>
                    <li>7. Casualties</li>
                </ul>
            </div>
        </div>

    </div>

    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <h2>Deforestation</h2>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <canvas id="myChart3"  width="100%" height="30" ></canvas>
            </div>
            <div class="col-md-12">
                <h2>Forecast Deforestation</h2>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <canvas id="futureChart3"  width="100%" height="30" ></canvas>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <h3>Factors:</h3>
                <ul class="checkboxEvent">
                    <li><input class="input6" onchange="forestsFactory()" n type="checkbox"> <span>Urbanization</span></li>

                    <li class="data6">
                        <ol>
                            <li>1. Employment opportunities in villages</li>
                            <li>2. Make schools and colleges in rural areas so that rural children don't have to come to cities for education</li>
                            <li>3. Support rural society by using local trades and shops</li>
                        </ol>
                    </li>
                    <li><input class="input7" onchange="forestsFactory()" type="checkbox"> <span>Overconsuming and Agricultural Activities</span></li>

                    <li class="data7">
                        <ol>
                            <li>1. Employment opportunities in villages</li>
                            <li>2. Make schools and colleges in rural areas so that rural children don't have to come to cities for education</li>
                            <li>3. Support rural society by using local trades and shops</li>
                        </ol>
                    </li>

                    <li><input class="input10" onchange="forestsFactory()" type="checkbox"> <span>Forest Fires</span></li>

                    <li class="data10">
                        <ol>
                            <li>1. Obtaining a burning permit for burning grass, brush, slash or other debris in or within a prescribed distance of forest land</li>
                            <li>2. Keep firefighting equipment handy - a connected water hose or at least five gallons of water and a shovel should be nearby</li>
                            <li>3. Don't burn if it's too windy to burn - if trees are swaying, flags are extended, or waves appear on open water.</li>
                            <li>4. Be prepared to extinguish the fire if it becomes a nuisance</li>
                            <li>5. Attend the fire until it is completely out</li>
                            <li>6. Smoking should not be done while moving from one place to another in forest land. Make sure your butt is out - "dead out!"</li>
                        </ol>
                    </li>
                </ul>
            </div>

            <div class="col-md-6">
                <h3>Effects:</h3>
                <ul class="checkboxEvent">
                    <li>1. Climate Imbalance</li>
                    <li>2. Increase in Global Warming</li>
                    <li>3. Soil Erosion</li>
                    <li>4. Floods</li>
                    <li>5. Wildlife Extinction</li>
                    <li>6. Water cycle</li>
                    <li>7. Life quality</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="content">
        <h2>Save Earth</h2>

        <div class="row">
            <div class="col-md-12">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/WmVLcj-XKnM" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <br>    

        <div class="row">
            <div class="col-md-6">
                <ol class="saveList">
                    <li><b>Save trees.</b> We should plant new trees plant trees. The schemes afforestation and reforestation should be wholeheartedly supported.</li>
                    <li><b>Save natural vegetation.</b> We should use less paper. We can make arrangement for recycling of used paper and other natural products. Plants and trees covers and holds the surface of the earth.</li>
                    <li><b>Save water.</b> Water is life. It is the basic necessity for every human being living on this planet. We can stop throwing wastes into open water bodies. At home, we can use water cautiously and ensure that it doesn’t get wasted. Remember, a large many people are still deprived of safe pure water. “Be the change that you want to see in this world.”</li>
                    <li><b>Save environment from pollution.</b> Don’t pollute water by not throwing wastes into waterborne.  Minimize air pollution by reducing harmful emissions. Use less car, less machines, less electricity, and less plastic goods.Eat organic foods.</li>
                    <li><b>Save earth from global warming.</b>Industries should regularly check that their machines are emitting smoke within permissible limits. Ensure that wastes are discharged only after treatment.</li>
                </ol>
            </div>

            <div class="col-md-6">
                <p class="text-left">THE UNITED STATES IS LEADING GLOBAL EFFORTS TO ADDRESS THE THREAT OF CLIMATE CHANGE. ON DECEMBER 12, 2015, PRESIDENT OBAMA AND WORLD LEADERS SECURED A GLOBAL AGREEMENT TO COMBAT CLIMATE CHANGE.</p>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zgj5MW3PsGM" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="col-md-12">
            <div class="row">
                <h2>BIO Feedback</h2>

                <form class="bio" onsubmit="postData()" action="/" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="text" hidden="hidden" name="country_code" value="AL">
                    <div class="inputdata">
                        <label for="name">My name is </label>
                        <span><input type="text" name="name" id="name" required="required" /></span>
                        <div class="clear"></div>
                    </div>
                    <br>
                    <div class="inputdata">
                        <label for="notice">Something that intrigue me about climate change is </label>
                        <span><input type="text" name="notice" id="notice" required="required" /></span>
                        <div class="clear"></div>
                    </div>
                    <br>
                    <div class="inputdata">
                        <label for="fix">But I think to fix it by </label>
                        <span><input type="text" name="fix" id="fix" required="required" /></span>
                        <div class="clear"></div>
                    </div>
                    <br>

                    <input class="postBtn" type="submit" value="POST">
                </form>
            </div>
        </div>
    </div>

    <div class="content" id="feedback-content">
        <h2>Feedbacks</h2>
        <div class="row" id="feedback-section">

        </div>
    </div>


</section>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="{{ asset('js/jquery.litelighter.js') }}"></script>
<script src="{{ asset('js/selectordie.min.js') }}"></script>
<script src="{{ asset('js/scripts.js') }}"></script>
<script src="{{ asset('js/Jchart/Chart.min.js') }}"></script>

<script>
    $(document).ready(function() {

        $('.data1').hide();
        $('.data2').hide();
        $('.data3').hide();
        $('.data4').hide();
        $('.data5').hide();
        $('.data6').hide();
        $('.data7').hide();
        $('.data8').hide();
        $('.data9').hide();
        $('.data10').hide();

        $('.input1').change(function(){
            if(this.checked)
                $('.data1').slideDown('500');
            else
                $('.data1').slideUp('500');
        });


        $('.input2').change(function(){
            if(this.checked)
                $('.data2').slideDown('500');
            else
                $('.data2').slideUp('500');
        });

        $('.input3').change(function(){
            if(this.checked)
                $('.data3').slideDown('500');
            else
                $('.data3').slideUp('500');
        });


        $('.input4').change(function(){
            if(this.checked)
                $('.data4').slideDown('500');
            else
                $('.data4').slideUp('500');
        });

        $('.input5').change(function(){
            if(this.checked)
                $('.data5').slideDown('500');
            else
                $('.data5').slideUp('500');
        });

        $('.input6').change(function(){
            if(this.checked)
                $('.data6').slideDown('500');
            else
                $('.data6').slideUp('500');
        });

        $('.input7').change(function(){
            if(this.checked)
                $('.data7').slideDown('500');
            else
                $('.data7').slideUp('500');
        });

        $('.input8').change(function(){
            if(this.checked)
                $('.data8').slideDown('500');
            else
                $('.data8').slideUp('500');
        });

        $('.input9').change(function(){
            if(this.checked)
                $('.data9').slideDown('500');
            else
                $('.data9').slideUp('500');
        });

        $('.input10').change(function(){
            if(this.checked)
                $('.data10').slideDown('500');
            else
                $('.data10').slideUp('500');
        });


        var data = {
            labels: ["2009", "2010", "2011", "2012", "2013", "2014", "2015"],
            datasets: [
                {
                    label: "My First dataset",
                    fillColor: "rgba(220,220,220,0.2)",
                    strokeColor: "rgba(220,220,220,1)",
                    pointColor: "rgba(220,220,220,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(220,220,220,1)",
                    data: [65, 59, 90, 81, 56, 55, 40]
                },
                {
                    label: "My Second dataset",
                    fillColor: "rgba(151,187,205,0.2)",
                    strokeColor: "rgba(151,187,205,1)",
                    pointColor: "rgba(151,187,205,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(151,187,205,1)",
                    data: [28, 48, 40, 19, 96, 27, 100]
                }
            ]
        };

    });
    function postData() {
        token = $("input[name=_token]").val();
        name = $("input[name=name]").val();
        notice = $("input[name=notice]").val();
        fix = $("input[name=fix]").val();
        country=$("input[name=country_code]").val();
        $.ajax({
            type: "POST",
            url: "/",
            data: { _token:token,name:name,notice:notice,fix:fix,country_code:country}

        }).done(function( data ) {
            feedbacks();
            $("input[name=name]").val("");
            $("input[name=notice]").val("");
            $("input[name=fix]").val("");
            window.location.href="#feedback-content";
        });
        window.event.preventDefault();
        return false;
    }
    function feedbacks() {
        $.ajax({
            type: "GET",
            url: "/feedbacks",
            data: {}

        }).done(function( data ) {
            feedback=$("#feedback-section");
            feedback.empty();
            option="";
            if(data.success){
                $.each(data.data,function (ind,value) {
                    option+='<div class="col-md-12"><p class="text-left feedback"><b>My name is '+value.name+'</b> <br>Something that intrigue me about climate change is <b>'+value.change+'</b>. But I think to fix it by <b>'+value.fix+'.</b> </p> </div>';
                });
                feedback.append(option);
            }

        });
    }

    temperatures();
    rainfalls();
    forests();
    feedbacks();
</script>

</body>
</html>