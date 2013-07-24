var app = {
    baseUrl: '/',
    collectedChars: 0,
    
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
        // Load video
        var bv = new $.BigVideo();
        
        bv.init();
        bv.show(app.baseUrl + 'assets/img/oceans.mp4', {
            ambient: true
        });
    },
    
    triggers: function() {
        app.getTweets(function(data) {
            var time = 0;
            var diff = 0;
            var chars_counter = data.chars_counter;
            var dynamic_chars_counter;
            
            console.log('hay ' + chars_counter + ' caracteres que sobran');
            
            // Calculate characters (less this status set)
            $.each(data.data, function(index, value) {
                chars_counter = chars_counter - (140 - value.text.length);
            });
            
            console.log('restando los tweets de ahora, quedan ' + chars_counter + ' caracteres');
            
            // Load chars_counter in view
            $('.counter').html(chars_counter);
            
            // Let's show tweets
            $.each(data.data, function(index, value) {
                time = 6000 * (index + 1);
                
                setTimeout(function() {
                    diff = 140 - value.text.length;
                    
                    $('.tweet').html(value.text);
                    $('.author img').attr('src', value.avatar);
                    $('.author .name').html(value.name);
                    $('.author .username').html(value.username);
                    $('.author .username').attr('href', 'http://twitter.com/' + value.username);
                    
                    chars_counter = chars_counter + diff;
                    
                    //$('.counter span').html(chars_counter);
                    
                    app.updateCounter(chars_counter - diff, chars_counter);
                }, time);
            });
        });
    },
    
    updateCounter: function(from, to) {
        var incremental;
        
        var interval = setInterval(function() {
            incremental = from++;
            
            $('.counter').html(incremental);
            
            if(incremental == to) {
                clearInterval(interval);
            }
        }, 5);
    },
    
    /* Initialization */
    init: function(args) {
        // Setup
        app.baseUrl = args.baseUrl;
        
        app.ui();
        app.triggers();
    }
}