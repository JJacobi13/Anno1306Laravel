$(document).on('click','.next-turn-button',function(){
    $.ajax({
        type: 'POST',
        url: '/game/next-turn',
        success: function(returnedData){
            if(returnedData.status == "success") {
                resources.update(returnedData.newResources);
            }
            logger.addMessage(returnedData.message);
            if(returnedData.status == "lost") {
                 $('#lost-modal').modal();
            }
        }
    });
});