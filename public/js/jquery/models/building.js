buildingList = {
    selector: 'ul#buildingList',
    numOfMessages: 0,
    addBuilding: function(message){
        $(this.selector).append('<li>' + message + '</li>');
    }
}

buildings = {
    update: function(buildingsDiv){
        $('#built-buildings').html(buildingsDiv);
    }
}