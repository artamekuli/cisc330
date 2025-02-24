function messageGenerator() {
    let message = "Hello from parent!";

    function showMessage() {
        console.log(message); // Uses the 'message' variable from parent
    }

    return showMessage;
}

const displayMessage = messageGenerator();
displayMessage(); // Output: Hello from parent!
