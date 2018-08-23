$(document).ready(function() {
    $('.clique').click(function() {
        $.get('/manage/users/userCad', function(data) {
            console.log(data);
        });
    });
});