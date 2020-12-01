$(".minus").on("click", function () {
    console.log("Down")
    this.parentNode.querySelector('input[type=number]').stepDown()
});

$(".plus").on("click", function () {
    console.log("Up")
    this.parentNode.querySelector('input[type=number]').stepUp();
});