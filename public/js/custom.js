$(document).ready(function() {

    $('.aboutForm').hide();
    $('.postForm').show();

    // logout form submit
    $('#logout').on('click', function(e) {
        e.preventDefault();
        $('#logoutForm').submit();
    });

    // delete form submit
    $('#delete').on('click', function(e) {
        e.preventDefault();
        $('#deleteForm').submit();
    });

    // show and hide function for about, posts and photos form of user profile
    $('#about').on('click', function(e) {
        e.preventDefault();

        $('.aboutForm').show();
        $('.postForm').hide();

        $(this).addClass('active');
        $('#post').removeClass('active');
    });

    $('#post').on('click', function(e) {
        e.preventDefault();

        $('.aboutForm').hide();
        $('.postForm').show();

        $(this).addClass('active');
        $('#about').removeClass('active');
    });
});