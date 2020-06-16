$('.kursi').click(function () {
    $('.yellow').removeClass('yellow');
    $(this).addClass('yellow');
    const kursi = $(this).html();
    console.log(kursi);
    $('#kursi').val(kursi);
});