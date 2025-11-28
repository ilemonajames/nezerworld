function scrollToSection(id) {
    document.getElementById(id).scrollIntoView({ behavior: "smooth" });
}

document.getElementById("contactForm").addEventListener("submit", function(e){
    e.preventDefault();
    alert("Your message has been sent! NEZERWORLD will contact you shortly.");
});
