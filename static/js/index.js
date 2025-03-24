function Active(button) {
    var about = document.getElementById("aboutmecontent");
    var resume = document.getElementById("resumecontent");
    var project = document.getElementById("projectcontent");
    var normally = document.getElementsByClassName("normally");
    for (let index = 0; index < normally.length; index++) {
        normally[index].classList.remove("active");
        normally[index].style.backgroundColor = "rgb(53, 51, 51)"; // Varsayılan renk
    }
    button.classList.add("active");
    button.style.backgroundColor = "rgb(81, 79, 79)";
    const sections = {
        aboutme: about,
        resume: resume,
        project: project
    };

    for (const [key, section] of Object.entries(sections)) {
        section.style.display = (button.id === key) ? "block" : "none";
    }
}
