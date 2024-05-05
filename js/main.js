// Loading Common Element Using External File
$("#header").load("header.html");
$("#footer").load("footer.html");
$("#all-project-slider").load("project-slider.html");
// $(".write-to-us").load("con-form.html");


// AOS Js (Reveal Animation)
AOS.init();

// Active Navbar Animation 
$(window).on('load', function () {
    // Get the body's ID
    var bodyId = $('body').attr('id');
    if(bodyId == "case-study-page"){
        bodyId = "project-page"
    }
    // Add active class to data-nav-item with matching value
    $('[data-nav-item="' + bodyId + '"]').addClass('active');

    // Remove active class from .header-bottom
    $('.header-bottom').removeClass('active');
})
/* 
$("#myform").submit(function (event) {
    // Prevent the form from submitting
    event.preventDefault();

    // Get form fields
    var name = $('input[name="name"]').val().trim();
    var email = $('input[name="email"]').val().trim();
    var company = $('input[name="company"]').val().trim();
    var message = $('textarea[name="message"]').val().trim();

    // Check if any field is empty
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (name === '') {
        alert('Please fill out your name');
        return;
    }
    // Email validation regex pattern
    if (!emailPattern.test(email)) {
        alert('Please fill out your right email');
        return;
    }
    if (company === '') {
        alert('Please fill out your brand name');
        return;
    }
    if (message === '') {
        alert('Please fill out your message for us');
        return;
    }

    // If all fields are filled, submit the form
    this.submit();
});
 */

//   Animate to top  
$('.foot-up .fal').click(function () {
    $('html, body').animate({ scrollTop: 0 }, 'slow');
});



const h2Split = document.querySelectorAll('.h2')

h2Split.forEach((char, i) => {

    const text = new SplitType(char, { type: "chars, words" })

    gsap.from(text.words, {
        yPercent: 130,
        opacity: 0,
        stagger: 0.02,
        ease: "back.out",
        duration: 1,
    });
})

        










