/* ===========================================================
 *
 *  Name:          global.js
 *  Updated:       2014-04-15
 *  What?:         Random crap for the Select or Die demo
 *
 *  Oddny | Cogs 'n Kegs
 * =========================================================== */
var Deforestation;
var Temperatures;
var Rainfall;

function random_word() {
    var $words      = ['Frightened', 'By', 'Your', 'Own', 'Smell', 'Bitterness', 'Will', 'Run', 'You', 'Through']; // In FLames - Bullet Ride (http://www.youtube.com/watch?v=lDwqzGtjGMU)
    var $randomizer = $words[Math.floor(Math.random() * $words.length)];
    return $randomizer;
}

jQuery(document).ready(function ($) {
    $(".basic").selectOrDie();

    $(".well_hello_there").selectOrDie({
        onChange: function() {
            var $target   = $(this).val(),
                $position = $($target).position().top - 40 + "px";
            $("html, body").animate({scrollTop: $position}, 500);
        }
    });

    $(".callback").selectOrDie({
        onChange: function() {
            alert($(this).val());
        }
    });

    $(".trigger").click(function(){
        var $method       = $(this).data("method").replace(/'/g, '"'),
            $subMethod    = $(this).data("sub-method"),
            $parent       = $(this).closest("section"),
            $parentID     = $parent.prop("id"),
            $parentSelect = $parent.find("select"),
            $preMethod;

        if( $method === "update" ) {
            var $randomWord = random_word();
            $("#" + $parentID + " select").append('<option value="' + $randomWord + '" selected="selected">' + $randomWord + '</option>');
            $("#" + $parentID + " select").selectOrDie($method);
            $("#" + $parentID + " pre").html('$("select").append("&lt;option value=\\"' + $randomWord + '\\"&gt;' + $randomWord + '&lt;/option&gt;");\n$("select").selectOrDie("update");').show();
        } else if ( $method === "destroy" && !$parentSelect.is(":hidden") ) {
            $("#" + $parentID + " pre").html("$(\"select\").selectOrDie();").show();
            $("#" + $parentID + " select").selectOrDie();
        } else {
            if ( $subMethod === "group" ) {
               $("#" + $parentID + " select").selectOrDie($method, 'Option Group Label');
               $preMethod = $method + "\", \"Option Group Label";
            } else if ( $subMethod === "option" ) {
               $("#" + $parentID + " select").selectOrDie($method, 'three');
               $preMethod = $method + "\", \"three";
            } else {
                $("#" + $parentID + " select").selectOrDie($method);
                $preMethod = $method;
            }

            $("#" + $parentID + " pre").html("$(\"select\").selectOrDie(\"" + $preMethod + "\");").show();

            if ( $method === "disable" ) {
                $(this).data("method", "enable");
            } else if ( $method === "enable" ) {
                $(this).data("method", "disable");
            }
        }

        $("span", this).toggle();
        $("#" + $parentID + " pre").litelighter('enable');
    });

    /* - - - */

    $("a:not(.external)").click(function(){
        var $target   = $(this).attr("href"),
            $position = $($target).position().top - 40 + "px";
        $("html, body").animate({scrollTop: $position}, 500);
    });

    $("pre").litelighter({
        style: 'light',
        language: 'js'
    });

});

function temperatures() {
    $.ajax({
        type: "GET",
        url: "/temperatures",
        data: {}

    }).done(function( data ) {
        if(data.success){
            createGraph("myChart",data.data);
            var factor = [];
            factor.push(1.3);
            factor.push(1.35);
            factor.push(1.495);
            var fillcolor="rgba(220,0,0,0.2)";
            var strokeColor="rgba(220,0,0,1)";
            var pointColor="rgba(250,0,0,1)";
            var factoryYears=[];
            factoryYears.push(0.95);
            factoryYears.push(1.005);
            factoryYears.push(1.05);
            factoryYears.push(1.075);
            factoryYears.push(1.064);
            factoryYears.push(1.081);
            factoryYears.push(1.0958);
            futureGraph("futureChart",data.data,factor,factoryYears,0,fillcolor,strokeColor,pointColor);
            Temperatures=data.data;
        }
    });
}
function rainfalls() {
    $.ajax({
        type: "GET",
        url: "/rainfalls",
        data: {}

    }).done(function( data ) {
        if(data.success){
            createGraph("myChart2",data.data);
            var factor = [];
            factor.push(1.3);
            factor.push(1.35);
            var factoryYears=[];
            factoryYears.push(0.95);
            factoryYears.push(1.005);
            factoryYears.push(1.05);
            factoryYears.push(1.075);
            factoryYears.push(1.064);
            factoryYears.push(1.081);
            factoryYears.push(1.0958);
            var fillcolor="rgba(220,0,0,0.2)";
            var strokeColor="rgba(220,0,0,1)";
            var pointColor="rgba(250,0,0,1)";
            futureGraph("futureChart2",data.data,factor,factoryYears,0,fillcolor,strokeColor,pointColor);
            Rainfall=data.data;
        }
    });
}
function forests() {
    $.ajax({
        type: "GET",
        url: "/forests",
        data: {}

    }).done(function( data ) {
        if(data.success){
            createGraph("myChart3",data.data);
            var factor = [];
            factor.push(0.93);
            factor.push(0.95);
            factor.push(0.995);
            var factoryYears=[];
            factoryYears.push(1.1);
            factoryYears.push(1.15);
            factoryYears.push(1.05);
            factoryYears.push(0.975);
            factoryYears.push(0.964);
            factoryYears.push(0.961);
            factoryYears.push(0.958);
            var fillcolor="rgba(220,0,0,0.2)";
            var strokeColor="rgba(220,0,0,1)";
            var pointColor="rgba(250,0,0,1)";
            futureGraph("futureChart3",data.data,factor,factoryYears,0,fillcolor,strokeColor,pointColor);
            Deforestation=data.data;
        }

    });
}

function createGraph(id,data) {
    var data = {
        labels: [data[0]['year'], data[1]['year'], data[2]['year'], data[3]['year'], data[4]['year'], data[5]['year'],
            data[6]['year'],data[7]['year'], data[8]['year'], data[9]['year'], data[10]['year'], data[11]['year'],
            data[12]['year'], data[13]['year'],data[14]['year'], data[15]['year'], data[16]['year'], data[17]['year'],
            data[18]['year'], data[19]['year'], data[20]['year'],data[21]['year'], data[22]['year'], data[23]['year'],
            data[24]['year'], data[25]['year']],
        datasets: [
            {
                label: "My First dataset",
                fillColor: "rgba(220,220,220,0.2)",
                strokeColor: "rgba(220,220,220,1)",
                pointColor: "rgba(220,220,220,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(220,220,220,1)",
                data: [data[0]['value'], data[1]['value'], data[2]['value'], data[3]['value'], data[4]['value'], data[5]['value'],
                    data[6]['value'],data[7]['value'], data[8]['value'], data[9]['value'], data[10]['value'], data[11]['value'],
                    data[12]['value'], data[13]['value'],data[14]['value'], data[15]['value'], data[16]['value'], data[17]['value'],
                    data[18]['value'], data[19]['value'], data[20]['value'],data[21]['value'], data[22]['value'], data[23]['value'],
                    data[24]['value'], data[25]['value']]
            }
        ]
    };

    var ctx = new Chart(document.getElementById(id).getContext("2d")).Line(data,{responsive:true});
}

function futureGraph(id,data, factori,factoryYears,coeficent,fillColor,strokeColor,pointColor) {
    if(coeficent !==0){
        coeficent=1;
    }else{
        coeficent=-999999;
        for(var i=0; i<data.length-1;i++){
            ch = data[i+1]['value'] / data[i+1]['value'];
            if(ch>coeficent){
                coeficent=ch;
            }
        }
    }

    for (var i=0;i<factori.length;i++){
        coeficent= coeficent*factori[i];
    }
    console.log(coeficent);
    var data = {
        labels: ['2015','2020','2025','2030','2035','2040','2045','2050'],
        datasets: [
            {
                label: "My First dataset",
                fillColor: fillColor,
                strokeColor: strokeColor,
                pointColor: pointColor,
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(220,220,220,1)",
                data: [data[data.length-1]['value'],
                    data[data.length-1]['value']*coeficent*factoryYears[0],
                    data[data.length-1]['value']*coeficent*factoryYears[1],
                    data[data.length-1]['value']*coeficent*factoryYears[2],
                    data[data.length-1]['value']*coeficent*factoryYears[3],
                    data[data.length-1]['value']*coeficent*factoryYears[4],
                    data[data.length-1]['value']*coeficent*factoryYears[5],
                    data[data.length-1]['value']*coeficent*factoryYears[6]]
            }
        ]
    };

    var ctx = new Chart(document.getElementById(id).getContext("2d")).Line(data,{responsive:true});
}

function temperaturesFactory(){
    in1 = $(".input3");
    in2 = $(".input4");
    in3 = $(".input5");
    var factor = [];
    var factoryYears=[];
    factoryYears.push(0.95);
    factoryYears.push(1.005);
    factoryYears.push(1.05);
    factoryYears.push(1.075);
    factoryYears.push(1.064);
    factoryYears.push(1.081);
    factoryYears.push(1.0958);
    var fillcolor="rgba(220,0,0,0.2)";
    var strokeColor="rgba(220,0,0,1)";
    var pointColor="rgba(250,0,0,1)";
    coeficents=0;
    if(in1.is(':checked') && in2.is(':checked') && in3.is(':checked')){
        factor.push(1);
        factor.push(1);
        factor.push(1);
        factoryYears=[];
        fillcolor="rgba(0,220,0,0.2)";
        strokeColor="rgba(0,220,0,1)";
        pointColor="rgba(0,250,0,1)";
        factoryYears.push(1);
        factoryYears.push(1);
        factoryYears.push(1);
        factoryYears.push(1);
        factoryYears.push(1);
        factoryYears.push(1);
        factoryYears.push(1);
        coeficents=1;
    }else if(in1.is(':checked') && in2.is(':checked') && !in3.is(':checked')){
        factor.push(1);
        factor.push(1);
        factor.push(1.495);
    }else if(in1.is(':checked') && !in2.is(':checked') && in3.is(':checked')){
        factor.push(1);
        factor.push(1.35);
        factor.push(1);
    }else if(!in1.is(':checked') && in2.is(':checked') && in3.is(':checked')){
        factor.push(1.3);
        factor.push(1);
        factor.push(1);
    }else if(in1.is(':checked') && !in2.is(':checked') && !in3.is(':checked')){
        factor.push(1);
        factor.push(1.35);
        factor.push(1.495);
    }else if(!in1.is(':checked') && in2.is(':checked') && !in3.is(':checked')){
        factor.push(1.3);
        factor.push(1);
        factor.push(1.495);
    }else if(!in1.is(':checked') && !in2.is(':checked') && in3.is(':checked')){
        factor.push(1.3);
        factor.push(1.35);
        factor.push(1);
    }else{
        factor.push(1.3);
        factor.push(1.35);
        factor.push(1.495);
    }
    futureGraph("futureChart",Temperatures,factor,factoryYears,coeficents,fillcolor,strokeColor,pointColor);
}
function rainfallFactory(){
    in1 = $(".input1");
    in2 = $(".input2");
    var factor = [];
    var factoryYears=[];
    factoryYears.push(0.95);
    factoryYears.push(1.005);
    factoryYears.push(1.05);
    factoryYears.push(1.075);
    factoryYears.push(1.064);
    factoryYears.push(1.081);
    factoryYears.push(1.0958);
    fillcolor="rgba(220,0,0,0.2)";
    strokeColor="rgba(220,0,0,1)";
    pointColor="rgba(250,0,0,1)";
    coeficents=0;
    if(in1.is(':checked') && in2.is(':checked')){
        factor.push(1);
        factor.push(1);
        factoryYears=[];
        factoryYears.push(1);
        factoryYears.push(1);
        factoryYears.push(1);
        factoryYears.push(1);
        factoryYears.push(1);
        factoryYears.push(1);
        factoryYears.push(1);
        coeficents=1;
    }else if(in1.is(':checked') && !in2.is(':checked')){
        factor.push(1);
        factor.push(1.35);
    }else if(!in1.is(':checked') && in2.is(':checked')){
        factor.push(1.3);
        factor.push(1);
    }else{
        factor.push(1.3);
        factor.push(1.35);
    }
    futureGraph("futureChart2",Rainfall,factor,factoryYears,coeficents,fillcolor,strokeColor,pointColor);
}
function forestsFactory(){
    in1 = $(".input6");
    in2 = $(".input7");
    in3 = $(".input8");
    var factor = [];
    var factoryYears=[];
    factoryYears.push(1.1);
    factoryYears.push(1.15);
    factoryYears.push(1.05);
    factoryYears.push(0.975);
    factoryYears.push(0.964);
    factoryYears.push(0.961);
    factoryYears.push(0.958);
    fillcolor="rgba(220,0,0,0.2)";
    strokeColor="rgba(220,0,0,1)";
    pointColor="rgba(250,0,0,1)";
    coeficents=0;
    if(in1.is(':checked') && in2.is(':checked') && in3.is(':checked')){
        factor.push(1);
        factor.push(1);
        factor.push(1);
        factoryYears=[];
        factoryYears.push(1);
        factoryYears.push(1);
        factoryYears.push(1);
        factoryYears.push(1);
        factoryYears.push(1);
        factoryYears.push(1);
        factoryYears.push(1);
        coeficents=1;
    }else if(in1.is(':checked') && in2.is(':checked') && !in3.is(':checked')){
        factor.push(1);
        factor.push(1);
        factor.push(0.995);
    }else if(in1.is(':checked') && !in2.is(':checked') && in3.is(':checked')){

        factor.push(1);
        factor.push(0.95);
        factor.push(1);
    }else if(!in1.is(':checked') && in2.is(':checked') && in3.is(':checked')){
        factor.push(0.93);
        factor.push(1);
        factor.push(1);
    }else if(in1.is(':checked') && !in2.is(':checked') && !in3.is(':checked')){
        factor.push(1);
        factor.push(0.95);
        factor.push(0.995);
    }else if(!in1.is(':checked') && in2.is(':checked') && !in3.is(':checked')){
        factor.push(0.93);
        factor.push(1);
        factor.push(0.995);
    }else if(!in1.is(':checked') && !in2.is(':checked') && in3.is(':checked')){
        factor.push(0.93);
        factor.push(0.95);
        factor.push(1);
    }else{
        factor.push(0.93);
        factor.push(0.95);
        factor.push(0.995);
    }
    futureGraph("futureChart3",Deforestation,factor,factoryYears,coeficents,fillcolor,strokeColor,pointColor);
}