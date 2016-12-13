var colours = ["#001413","#002926","#003D39","#00524C","#00665F","#007A72","#008F85","#00A398","00B8AB"];

$( document ).ready(function() {

    renderAll();

});

function renderAll()
{
    var graphData = [];

    $.ajax({
        url: "../dashboard/info/1",
        async: true,
        dataType: "json",
        success: function(result){
            $.each(result, function(i, val){
                if(val.type=="widget_counter")
                {
                    $.ajax({
                        url: "../dashboard/widget_counter?group_by=" + val.group_by + "&sum=" + val.sum + "&dsname=" + val.datasource,
                        async: false,
                        dataType: "json",
                        success: function(result){
                                $("#graph_container").append(render_widget_counter(result,val));
                                graphData.push(result);

                        }
                    });
                }else{
                    console.log("widget/view not yet implemented");
                }
            });
        }
    });



    // $.getJSON( "../dashboard/info/1", function( data ) {
    //
    // }).done(function(data){
    //
    //     $.each(data, function(i, val){
    //         if(val.type=="widget_counter")
    //         {
    //             $.getJSON( "../dashboard/widget_counter?group_by=" + val.group_by + "&sum=" + val.sum + "&dsname=" + val.datasource , function( data ) {
    //
    //             }).done(function(data){
    //                 //render_widget_counter(data);
    //                 $("#graph_container").html(render_widget_counter(data));
    //             });
    //         }else{
    //             console.log("widget/view not yet implemented");
    //         }
    //     });
    //
    //     //$("#graph_container").html(JSON.stringify(data,null,''));
    // });;

    /* $.ajax({
        url: "../dashboard/widget_counter?group_by=" + val.group_by + "&sum=" + val.sum + "&dsname=" + val.datasource,
        async: true,
        dataType: "json",
        success: function(result){


        });   */

}


function render_widget_counter(data,val)
{

    //var aLink = "<a class='btn btn-primary' data-toggle='collapse' href='#collapseExample' aria-expanded='false' aria-controls='collapseExample'>View Details </a>"
    var tableHtml = "<table class='table table-condensed'><tr><th>Region</th><th>Count</th></tr>";
    for (key in data[0].data){
        {
            tableHtml += "<tr><td>"+ key +"</td><td>" + data[0].data[key] + "</td></tr>"
            console.log(key + " - " + data[0].data[key]);
        }
    }
    tableHtml += "</table>"
    var dbHtml = "<div class='card'>"+
    "<div class='card-header' role='tab' id='headingOne"+ val.id +"'>"+
      "<h5 class='mb-0'>"+
        "<a data-toggle='collapse' data-parent='#accordion' href='#collapse"+ val.id +"' aria-expanded='false' aria-controls='collapse"+ val.id +"'>"+
              "<div class='btn-expand'> <span class='pull-left'>View Details</span> "+
              "<span class='pull-right'><i class='fa fa-arrow-circle-right'></i></span></div> "+
              "<div class='clearfix'></div> "+
        "</a>"+
      "</h5>"+
    "</div>"+
    "<div id='collapse"+ val.id +"' class='collapse' role='tabpanel' aria-labelledby='headingOne"+ val.id +"'>"+
     " <div class='card-block btn-expand'>"+
        tableHtml+
     " </div>"+
    "</div>"+
  "</div>";


    //console.log(JSON.stringify(data));
    // $.each(data[0], function(i, val){
    //     //console.log(val);
    //     //console.log(val[0]);
    // });


    var panelHtml = "<div class='col-lg-3 col-md-6'><div class='panel panel-" + val.color + "'><div class='panel-heading'>" +
                "<div class='row'><div class='col-xs-3'><i class='fa " + val.icon + " fa-5x'></i></div><div class='col-xs-9 text-right'>" +
                "<div class='text-huge'>" + data[0].total + "</div><div>" + val.title + "</div></div></div></div>" + dbHtml + "</div>";
    return panelHtml;
}
