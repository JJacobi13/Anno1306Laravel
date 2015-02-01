resources = {
    update: function(newStats){
        $.each(newStats, function(i, stat){
            $('#show_' + stat.name).html(stat.quantity);
        });
    }
}