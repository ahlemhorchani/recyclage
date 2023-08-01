
// Assuming you are using jQuery
$(document).ready(function () {
    // Attach click event handler to decrement button
    $('.counter-moins').click(function () {
        var input = $(this).siblings('input[type="number"]');
        var currentValue = parseInt(input.val());
        if (currentValue > 0) {
            input.val(currentValue - 1);
        }
    });

    // Attach click event handler to increment button
    $('.counter-plus').click(function () {
        var input = $(this).siblings('input[type="number"]');
        var currentValue = parseInt(input.val());
        if (currentValue < 99) {
            input.val(currentValue + 1);
        }
    });
});
