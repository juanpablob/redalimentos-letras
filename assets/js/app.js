var app = {
    baseUrl: '/',
    
    getTweets: function(callback) {
        $.ajax({
            url: app.baseUrl + 'app/get_tweets',
            success: function(data) {
                data = $.parseJSON(data);
                
                if(data.status === true) {
                    callback(data);
                }
                else {
                    alert(data.message);
                }
            }
        });
    },
    
    ui: function() {
        
    },
    
    triggers: function() {
        app.getTweets(function(data) {
            var time = 0;
            var diff = 0;
            
            $.each(data.data, function(index, value) {
                time = 3000 * (index + 1);
                
                setTimeout(function() {
                    diff = 140 - value.text.length;
                    
                    $('.tweet').html(value.text);
                    $('.diff span').html(diff);
                }, time);
            });
            
        });
    },
    
    /* Initialization */
    init: function(args) {
        // Setup
        app.baseUrl = args.baseUrl;
        
        app.ui();
        app.triggers();
    }
}
//$('h2').html(value.text);