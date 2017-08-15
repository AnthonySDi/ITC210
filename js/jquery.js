// JavaScript source code


$(document).ready(function () {
    $('#services').change(function () {
        var selected = $(this).val()
        if (selected == 'all') {
            $('.provider').show();
        } else {
            $('.provider').hide();
            $('#' + $(this).val()).show();
        }
    });
});


$(function () {
    $('#services').change(function () {
        var selected = $(this).val()
        if (selected == 'all') {
            $('.provider').show();
        } else {
            $('.provider').hide();
            $('.' + $(this).val()).show();
        }
    });
});