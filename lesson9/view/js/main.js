$(function () {
    const location = window.location.href;
    console.log(location);
    const cur_url = '/' + location.split('/').pop();
    console.log(cur_url);

    $('.navbar-nav li').each(function () {
        let link = $(this).find('a').attr('href');

        if (cur_url == link) {
            $(this).addClass('active');
            $(this).children().addClass("disabled");
        }
    });
});