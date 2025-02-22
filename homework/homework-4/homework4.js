// Question 6: Filter available cats and create a message
const cats = [
    { name: 'Charlie', adoptionStatus: 'available' },
    { name: 'Lily', adoptionStatus: 'not-available' },
    { name: 'Coco', adoptionStatus: 'available' },
    { name: 'Oreo', adoptionStatus: 'not-available' },
    { name: 'Luna', adoptionStatus: 'available' },
    { name: 'Milo', adoptionStatus: 'available' },
    { name: 'Lola', adoptionStatus: 'not-available' },
    { name: 'Leo', adoptionStatus: 'available' },
    { name: 'Willow', adoptionStatus: 'available' },
    { name: 'Bella', adoptionStatus: 'not-available' },
    { name: 'Max', adoptionStatus: 'available' },
    { name: 'Cleo', adoptionStatus: 'available' },
    { name: 'Lucy', adoptionStatus: 'not-available' },
    { name: 'Daisy', adoptionStatus: 'available' },
];

let result = cats.filter(cat => cat.adoptionStatus === 'available').map(cat => cat.name);
let msg = "Congrats! You have now adopted " + result.join(', ') + ".";

let replace = document.getElementById('Q6');
if (replace) replace.textContent = msg;

// Question 7: Ternary operator with Math.random()
let ranNum = Math.random() * 10;
const ternaryValue = ranNum > 5 ? 'greater than five!' : 'less than five!';

msg = `The random number is ${ranNum.toFixed(2)} which is ${ternaryValue}`;
replace = document.getElementById('Q7');
if (replace) replace.textContent = msg;

// Question 8: Loop through cat object properties
cats.forEach(cat => {
    Object.values(cat).forEach(value => console.log(value));
});

// Question 9: Comparison operators
console.log(1 === '1' ? 'true' : 'false');  // Loose comparison (true)
console.log(1 === '1' ? 'true' : 'false'); // Strict comparison (false)

// Question 10: Map function for cat names
const cats2 = cats.map(cat => `${cat.name} is cute!`);
replace = document.getElementById('Q10');
if (replace) replace.textContent = cats2.join(', ');
