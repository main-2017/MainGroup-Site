$(document).ready(function() {

    var userFeed = new Instafeed({
        get: 'user',
        userId: '6062666395',
        accessToken: '6062666395.1677ed0.07b3bf7a3f9246559d37d07eaef36dfe',
        limit: 10,
        resolution: 'standard_resolution',
        sortBy: 'most-recent',
        template: '<div class="col-lg-3 instaimg"><a href="{{image}}" title="{{caption}}" target="_blank"><img src="{{image}}" alt="{{caption}}" class="img-fluid"/></a></div>',
    });

    userFeed.run();
    
    // This will create a single gallery from all elements that have class "gallery-item"
    $('.gallery').magnificPopup({
        type: 'image',
        delegate: 'a',
        gallery: {
            enabled: true
        }
    });

});