// Creating a Function to check if a string contains "pinecone"
const containsPinecone = (str) => str.includes("pinecone");

// Sentences
const sentences = [
    "A squirrel can eat a lot of acorns at once.",
    "She picked up a pinecone off the ground.",
    "The grass is green.",
    "There is a gentle breeze."
];
// Filtering sentences
const filteredSentences = sentences.filter(sentence => containsPinecone(sentence));

console.log(filteredSentences); // Output
