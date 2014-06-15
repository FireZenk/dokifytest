var redraw, g, renderer;

window.onload = function() {
    var murl = (location.pathname.indexOf("mpresas") > -1) ? "graph.json" : "Empresas/graph.json";

    $.ajax({
        url: murl,
        type: 'GET',
        dataType:"json",
        success: function(data) {
            var width = $(document).width() - 40;
            var height = 300;
            
            g = new Graph();

            for (var i = 0; i < data["relations"].length; i++) {
               g.addNode(data["relations"][i]["empresas"]["id"],
                        {label : data["relations"][i]["empresas"]["nombre"]});

               g.addEdge(data["relations"][i]["providers"]["empresa_id"],
                        data["relations"][i]["providers"]["cliente_id"], {directed: true, label : "Es proveedor de"});
            }

            var layouter = new Graph.Layout.Spring(g);
            renderer = new Graph.Renderer.Raphael('canvas', g, width, height);
        },
        error: function(jqXHR, textStatus, error) {
            console.log(error+" "+jqXHR.responseText);
        }
    });
};