jQuery(document).ready(($) => {
    $('.quantity').on('click', '.plus', function(e) {
        let $input = $(this).prev('input.qty');
        let val = parseInt($input.val());
        $input.val( val+1 ).change();
    });
    
    $('.quantity').on('click', '.minus', 
    function(e) {
    let $input = $(this).next('input.qty');
    var val = parseInt($input.val());
    if (val > 0) {
        $input.val( val-1 ).change();
    } 
});

    
});
function myFunction() {
    var x = document.getElementById("myDIV");
    
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }

function myFunction1() {
    var x = document.getElementById("myDIV1");
    
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }
  //Create a Function so that when each of the Size Selector Buttons Are Pressed 
  //The function changes the color of the specific buton to invert color then ensures all the other buttons are changed to the original state too.
  //Thsi should ensure not one button can be selected at any one time.
