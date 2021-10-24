let kata1 = "Radar";
let kata2 = "Malam";
let kata3 = "Kasur ini rusak";
let kata4 = "Malas";
let kata5 = "Makan nasi goreng";
let kata6 = "Balonku ada lima";

function check(input) {
  let strArray = input.toLowerCase().split();
  let newArr = strArray.join("");
  let reverseArr = [...newArr].reverse().join("");

  if (newArr === reverseArr) {
    console.log(newArr + "  # --> palindrome");
  } else {
    console.log(newArr + "  # --> not palindrome");
  }
}

console.log(check(kata1));
console.log(check(kata2));
console.log(check(kata3));
console.log(check(kata4));
console.log(check(kata5));
console.log(check(kata6));
