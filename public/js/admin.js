$(document).ready(function () {
    $('#toggleSidebar').on('click', function () {
        $('#sidebar').toggleClass('closed');
        $('#main').toggleClass('collapsed');
    });
});
