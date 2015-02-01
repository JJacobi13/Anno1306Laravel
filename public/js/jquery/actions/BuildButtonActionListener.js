$(document).on('click','.buildButton',function(){
    $.ajax({
        type: 'POST',
        url: '/buildings',
        data: {
            'instanceId': $(this).data('instance-id')
        },
        success: function(returnedData){
            if(returnedData.status == "success") {
                resources.update(returnedData.newResources);
                buildingList.addBuilding(returnedData.buildingName);
            }
            logger.addMessage(returnedData.message);
        }
    });
});