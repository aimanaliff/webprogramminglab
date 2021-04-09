console.log("Pretty Print Option 1:");
function prettyPrint(object) {
  for (var property in object) {
    console.log(property + ":" + object[property]);
  }
}

prettyPrint({ name: "Rusty", species: "dog", breed: "mut" });
