window.addEventListener("load", function () { //when on page load a function will happen
    var submitBtn = document.getElementById("submit"); //declare a varible named submitBtn and assign it a function to get the element of an input from the HTML page by its ID
    submitBtn.addEventListener("click", onSubmitForm); //give a function to the varible so when its clicked it will act out a function

    function onSubmitForm(evt) { //assign the function to act on something
        evt.preventDefault(); //evt is a small event which acts as if it self-distructs the event
        var firstName = document.getElementById("firstname");
        var firstNameField = firstName.value; //assign a value to the varible declared above

        var lastname = document.getElementById("lastname");
        var lastnameField = lastname.value;

        var link = document.getElementById("link");
        var linkField = link.value;

        var location = document.getElementById("location");
        var locationField = location.value;

        var date = document.getElementById("date");
        var dateField = date.value;

        var story = document.getElementById("story");
        var storyField = story.value;

        var headline = document.getElementById("headline");
        var headlineField = headline.value;
        
        var subHeading = document.getElementById("subHeading");
        var subHeadingField = subHeading.value;

        var article = document.getElementById("article");
        var articleField = article.value;
        

        if (firstNameField === "") {
            console.log("You need to enter your first name")
            firstnameError.innerHTML = "Please enter your first name"
            document.getElementById("firstname").style.borderColor = "#f44242";
            document.getElementById("firstnameError").style.color = "#f44242";
        } //if the user doesnt type anything into username input box, the console will log/record error, for the error to appear on the page add an ID to the h5 in the HTML and use innerHTML and assign your message
        else {
            firstnameError.innerHTML = "Thanks"
            document.getElementById("firstname").style.borderColor = "#62f441";
            document.getElementById("firstnameError").style.color = "#62f441";
        }

        if (lastnameField === "") {
            console.log("You need to enter your surname")
            lastnameError.innerHTML = "Please enter your surname"
            document.getElementById("lastname").style.borderColor = "#f44242";
            document.getElementById("lastnameError").style.color = "#f44242";
        } else {
            lastnameError.innerHTML = "Thanks"
            document.getElementById("lastname").style.borderColor = "#62f441";
            document.getElementById("lastnameError").style.color = "#62f441";
        }

        if (linkField === "") {
            console.log("You need to enter your link")
            linkError.innerHTML = "Please enter your link"
            document.getElementById("link").style.borderColor = "#f44242";
            document.getElementById("linkError").style.color = "#f44242";
        } else {
            linkError.innerHTML = "Thanks"
            document.getElementById("link").style.borderColor = "#62f441";
            document.getElementById("linkError").style.color = "#62f441";
        }

        if (locationField === "") {
            console.log("You need to enter your location")
            locationError.innerHTML = "Please enter your location"
            document.getElementById("location").style.borderColor = "#f44242";
            document.getElementById("locationError").style.color = "#f44242";
        } else {
            locationError.innerHTML = "Thanks"
            document.getElementById("location").style.borderColor = "#62f441";
            document.getElementById("locationError").style.color = "#62f441";
        }

        if (dateField === "") {
            console.log("You need to enter the date and time")
            dateError.innerHTML = "Please enter the date and time"
            document.getElementById("date").style.borderColor = "#f44242";
            document.getElementById("dateError").style.color = "#f44242";
        } else {
            dateError.innerHTML = "Thanks"
            document.getElementById("date").style.borderColor = "#62f441";
            document.getElementById("dateError").style.color = "#62f441";
        }

        if (storyField === "") {
            console.log("You need to enter the story type")
            storyTypeError.innerHTML = "Please enter the story type"
            document.getElementById("story").style.borderColor = "#f44242";
            document.getElementById("storyTypeError").style.color = "#f44242";
        } else {
            storyTypeError.innerHTML = "Thanks"
            document.getElementById("story").style.borderColor = "#62f441";
            document.getElementById("storyTypeError").style.color = "#62f441";
        }

        if (headlineField === "") {
            console.log("You need to enter the headline")
            headlineError.innerHTML = "Please enter the headline"
            document.getElementById("headline").style.borderColor = "#f44242";
            document.getElementById("headlineError").style.color = "#f44242";
        } else {
            headlineError.innerHTML = "Thanks"
            document.getElementById("headline").style.borderColor = "#62f441";
            document.getElementById("headlineError").style.color = "#62f441";
        }
        
        if (subHeadingField === "") {
            console.log("You need to enter the sub heading")
            subHeadingError.innerHTML = "Please enter the Sub Heading"
            document.getElementById("subHeading").style.borderColor = "#f44242";
            document.getElementById("subHeadingError").style.color = "#f44242";
        } else {
            subHeadingError.innerHTML = "Thanks"
            document.getElementById("subHeading").style.borderColor = "#62f441";
            document.getElementById("subHeadingError").style.color = "#62f441";
        }
        
        if (articleField === "") {
            console.log("You need to enter a story")
            articleError.innerHTML = "Please enter a story"
            document.getElementById("article").style.borderColor = "#f44242";
            document.getElementById("articleError").style.color = "#f44242";
        } else {
            articleError.innerHTML ="Thanks"
            document.getElementById("article").style.borderColor = "#62f441";
            document.getElementById("articleError").style.color = "#62f441";
        }
    }
})
