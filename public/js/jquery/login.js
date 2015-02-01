backgroundImages = ['img_1.jpg','img_2.jpg','img_3.jpeg','img_4.jpg','img_5.jpg'];
counter = 0;
time=setInterval(function(){
    $('html').fadeTo('slow', 1, function()
    {
        $(this).css('background-image', 'url(/css/Images/Backgrounds/' + backgroundImages[counter%5] + ')');
        counter++
    });
},9000);
