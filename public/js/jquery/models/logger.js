logger = {
    selector: '#logging',
    maxNoOfMessages: 6,
    messages: [], //$(this.selector).html().split('\n')
    addMessage: function(message){
        this.messages.push('<span class="loggingMessage">' + message + '<br />' + '</span>');
        if(this.messages.length > this.maxNoOfMessages){
            this.messages.shift();
        }
        $(this.selector).html(this.messages.slice().reverse().join('\n'));
    }
}